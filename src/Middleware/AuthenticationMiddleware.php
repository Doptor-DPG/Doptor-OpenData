<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 25-Aug-19
 * Time: 4:25 PM
 */

namespace App\Middleware;

use App\Exception\InvalidTokenException;
use App\Exception\InvalidTokenFormatException;
use App\Exception\MissingApiVersionException;
use App\Exception\MissingTokenException;

class AuthenticationMiddleware
{
    public function __invoke($request, $response, $next)
    {
        $header = $request->getHeaderLine('Authorization');
        $api_version = $request->getHeaderLine('api-version');
        try {
            if (!empty($header)) {
                $parts = explode(' ', $header);
                if (count($parts) < 2 || empty($parts[0]) || !preg_match('/^Bearer$/i', $parts[0])) {
                    throw new InvalidTokenFormatException();
                }
                $token = $parts[1];
            } else {
                throw new MissingTokenException();
            }
            if(empty($api_version)){
                throw new MissingApiVersionException();
            }

            $payload = getTokenData($token);
            if (empty($payload)) {
                throw new InvalidTokenException();
            }
            if ($payload->exp < time()) {
				throw new InvalidTokenException();
			}
            if(!isset($payload->data->username) && !isset($payload->data->is_global)) {
				throw new InvalidTokenException();
			}
        } catch (\Exception $e) {
            $response = $response->withStatus($e->getCode());
            $body = $response->getBody();
            $body->write(json_encode([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]));
            return $response;
        }
        $authorizationAttr = [
            'token' => $token,
            'payload' => $payload
        ];

        $request = $request->withAttribute('authorization', $authorizationAttr);
        return $next($request, $response);
    }
}