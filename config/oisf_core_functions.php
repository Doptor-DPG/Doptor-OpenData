 <?php
if (!function_exists('explodeAndMakeArray')) {
    function explodeAndMakeArray($data, $expect = 'string')
    {
        if (!empty($data)) {
            $data = explode(",", $data);
            if ($expect == 'int') {
                $data = array_map(function ($id) {
                    return (int)$id;
                }, $data);
            } else {
                $data = array_map(function ($id) {
                    return $id;
                }, $data);
            }

        }
        return $data;
    }
}
if (!function_exists('groupByField')) {
    function groupByField($group_array, $group_by_field)
    {
        $arr = array();
        foreach ($group_array as $key => $item) {
            $arr[$item[$group_by_field]][$key] = $item;
        }
        ksort($arr, SORT_NUMERIC);
        return $arr;
    }
}

if (!function_exists('get_file_type')) {

    function get_file_type($file_path)
    {
        switch (strtolower(pathinfo($file_path, PATHINFO_EXTENSION))) {
            case 'jpeg':
            case 'jpg':
                return 'image/jpeg';
            case 'png':
                return 'image/png';
            case 'gif':
                return 'image/gif';
            case 'bmp':
                return 'image/bmp';
            case 'pdf':
                return 'application/pdf';
            case 'doc':
                return 'application/msword';
            case 'docx':
                return 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
            case 'xls':
                return 'application/vnd.ms-excel';
            case 'xlsx':
                return 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
            case 'ppt':
                return 'application/vnd.ms-powerpoint';
            case 'pptx':
                return 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
            default:
                return 'application/octet-stream';
        }
    }
}
if (!function_exists('bnToen')) {

    function bnToen($value)
    {
        $bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
        return $output = str_replace($bn_digits, range(0, 9), $value);
    }
}
if (!function_exists('enTobn')) {

    function enTobn($value)
    {
        $bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
        return $output = str_replace(range(0, 9), $bn_digits, $value);
    }
}
if (!function_exists('getTokenValue')) {

    function getTokenValue($length)
    {
        $token = "";
        $codeAlphabet = "012345678901234567890123456789";

        $max = strlen($codeAlphabet) - 1;
        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[rand(0, $max)];
        }
        return $token;
    }
}
if (!function_exists('getBrowser')) {

    function getBrowser()
    {
        $u_agent = !empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $ub = 'Unknown';
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";
        $pattern = '';
        if (empty($u_agent)) {
            goto rtn;
        }

        //First get the platform?
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac os';
        } elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }


        // Next get the name of the useragent yes seperately and for good reason
        if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $u_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/Chrome/i', $u_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $u_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Opera/i', $u_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Netscape/i', $u_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) .
            ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }

        // see how many we have
        $i = 0;
        if (isset($matches['browser'])) {
            $i = count($matches['browser']);
        }
        if ($i > 0) {
            if ($i != 1) {
                //we will have two since we are not using 'other' argument yet
                //see if version is before or after the name
                if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                    $version = $matches['version'][0];
                } else {
                    $version = $matches['version'][1];
                }
            } else {
                $version = $matches['version'][0];
            }
        }

        // check if we have a number
        if ($version == null || $version == "") {
            $version = "?";
        }
        rtn:
        return array(
            'userAgent' => $u_agent,
            'name' => $bname,
            'version' => $version,
            'platform' => $platform,
            'pattern' => $pattern
        );
    }
}
if (!function_exists('getIP')) {

    function getIP()
    {
        $ip = '';
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (!empty($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
if (!function_exists('curlRequest')) {
    function curlRequest($url, $method = 'get', $options = [])
    {
        try {
            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, $url);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Nothi');
            if (!empty($options['headers'])) {
                curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $options['headers']);
            }
            if (!empty($options['query_parameters'])) {
                curl_setopt_array($curl_handle, $options['query_parameters']);
            }
            if (empty($options['ssl_verifier'])) {
                curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
            }
            if (!empty($options['post_parameters'])) {
                curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $options['post_parameters']);
            }
            if (!empty($options['timeout'])) {
                curl_setopt($curl_handle, CURLOPT_TIMEOUT, $options['timeout']); //timeout in seconds
            }
            if (!empty($options['connection_timeout'])) {
                curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, $options['connection_timeout']);
            }
            curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, strtoupper($method));
            $http_code = curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);

            $curl_response = curl_exec($curl_handle);
            if (curl_errno($curl_handle)) {
                $curl_response = curl_error($curl_handle);
                $response = responseFormat('error', $curl_response, ['details' => ['end-point: curl request'], 'code' => $http_code]);
            } else {
                $response = responseFormat('success', $curl_response, ['code' => $http_code]);
            }
            curl_close($curl_handle);
        } catch (\Exception $ex) {
            $response = responseFormat('error', $ex->getMessage(), ['details' => ['end-point: curl request', 'code' => $http_code]]);
        }
        return $response;
    }
}
if (!function_exists('json2Array')) {
    function json2Array($data)
    {
        return json_decode($data, true);
    }
}

if (!function_exists('responseFormat')) {
    function responseFormat($status = 'error', $data = '', $options = [])
    {
        $response = [''];
        if (!empty($status)) {
            if ($status == 'success') {
                $response = [
                    'status' => $status,
                ];
                if (!empty($options) && !empty($options['meta'])) {
                    $response['meta'] = $options['meta'];
                }

                $response['data'] = $data;

                if (!empty($options) && !empty($options['details'])) {
                    $response['details'] = $options['details'];
                }
            } elseif ($status == 'error') {
                $response = [
                    'status' => $status,
                    'message' => $data
                ];
                if (!empty($options) && !empty($options['details'])) {
                    $response['details'] = $options['details'];
                }
                if (!empty($options) && !empty($options['reason'])) {
                    $response['reason'] = $options['reason'];
                }
            }
            if (!empty($options) && !empty($options['code'])) {
                $response['code'] = $options['code'];
            }
        }
        return $response;
    }
}
if (!function_exists('isSuccessResponse')) {
    function isSuccessResponse($response)
    {
        if (!empty($response)) {
            if (isset($response['status']) && $response['status'] == 'success') {
                return true;
            } elseif (isset($response['status']) && $response['status'] == 'error') {
                return false;
            }
        }
        return false;
    }
}


if (!function_exists('formatRequestHeader')) {
    function formatRequestHeader($header)
    {
        $response = [];
        if (!empty($header)) {
            foreach ($header as $key => $val) {
                $response[] = $key . ': ' . $val;
            }
        }
        return $response;
    }
}

if (!function_exists('toJson')) {
    function toJson($context, $response, $code = 200, $options = [])
    {
        if (!empty($response['code'])) {
            $code = $response['code'];
        }
        if (!empty($options['header'])) {
            $response_header = $options['header'];
        }
        $set_origin = ['*'];
        $response_header['Access-Control-Allow-Origin'] = $set_origin;

        $context->response = $context->response->cors($context->request)->allowOrigin($set_origin)
            ->allowMethods(['*'])->allowHeaders(['*'])
            ->allowCredentials(['true'])->exposeHeaders(['Link'])->maxAge(300)->build();
        $response_object = $context->response;

        if (!empty($response_header)) {
            foreach ($response_header as $head_key => $head_val) {
                $response_object->withHeader($head_key, $head_val);
            }
        }

        return $response_object->withStatus($code)
            ->withType('application/json')
            ->withStringBody(json_encode($response, JSON_UNESCAPED_UNICODE));
    }
}

if (!function_exists('singleDataToArr')) {
    function singleDataToArr($data)
    {
        return is_array($data) ? $data : [$data];
    }
}

if (!function_exists('getMissedColumnsWithData')) {
    function getMissedColumnsWithData($all_columns, $current_columns)
    {
        $missed_columns = array_diff($all_columns, $current_columns);
        $missed_col_val = [];
        if (count($missed_columns) > 0):
            foreach ($missed_columns as $col):
                $missed_col_val[$col] = "";
            endforeach;
        endif;
        return $missed_col_val;
    }
}

if (!function_exists('emptyChecker')) {
    function emptyChecker($need_2_have_this_parameters, $request_data)
    {
        if (!empty($need_2_have_this_parameters)) {
            foreach ($need_2_have_this_parameters as $parameter) {
                if (empty($request_data[$parameter])) {
                    return responseFormat('error', __('Required info not given'), ['code' => FORBIDDEN_CODE, 'details' => [
                        'required' => makeEncryptedData($parameter), 'given' => makeEncryptedData(json_encode($request_data))
                    ]]);
                }
            }
        }
        return responseFormat('success');
    }
}

if (!function_exists('isJson')) {
    function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
if (!function_exists('json_encode_unicode')) {
    function json_encode_unicode($string)
    {
        return json_encode($string, JSON_UNESCAPED_UNICODE);;
    }
}
if (!function_exists('filePutContentWithDirectoryGeneration')) {
    function filePutContentWithDirectoryGeneration($filepath, $data)
    {
        try {
            $isInFolder = preg_match("/^(.*)\/([^\/]+)$/", $filepath, $filepathMatches);
            if ($isInFolder) {
                $folderName = $filepathMatches[1];
                $fileName = $filepathMatches[2];
                if (!is_dir($folderName)) {
                    mkdir($folderName, 0777, true);
                }
            }
            return file_put_contents($filepath, $data);
        } catch (Exception $e) {
//            echo "ERR: error writing to '$filepath', ". $e->getMessage();
            \Cake\Log\Log::write('error', "ERR: error writing to '$filepath', " . $e->getMessage());
            return false;
        }
    }
}


if (!function_exists('bnToen')) {
    function bnToen($value)
    {
        $bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
        return $output = str_replace($bn_digits, range(0, 9), $value);
    }
}
if (!function_exists('enTobn')) {

    function enTobn($value)
    {
        $bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
        return $output = str_replace(range(0, 9), $bn_digits, $value);
    }
}
if (!function_exists('generateToken')) {

    function generateToken($data_to_encode, $options = [], $secretKey = '', $algorithm = 'HS512')
    {
        if (empty($secretKey)) {
            $secretKey = SECRET_KEY;
        }
        $issuedAt = time();
        $tokenId = base64_encode($issuedAt);
        $notBefore = $issuedAt;

        if (array_key_exists('exp', $options)) {
            $expire = $notBefore + (int)$options['exp'];
            unset($options['exp']);
        } else {
            $expire = $notBefore + 3600 * 24 * 1; // Adding 1 day expiration
        }

        $serverName = DOMAIN; /// set domain name


        /*
         * Create the token as an array
         */
        $data = $options + [
                'iat' => $issuedAt,         // Issued at: time when the token was generated
                'jti' => $tokenId,          // Json Token Id: an unique identifier for the token
                'iss' => $serverName,       // Issuer
                'nbf' => $notBefore,        // Not before
                'exp' => $expire,           // Expire
                'data' => $data_to_encode,
            ];

        /// Here we will transform this array into JWT:
        $token = \Firebase\JWT\JWT::encode(
            $data, //Data to be encoded in the JWT
            $secretKey, // The signing key
            $algorithm
        );

        return $token;
    }
}
if (!function_exists('getTokenData')) {

    function getTokenData($token, $secretKey = '', $algorithm = 'HS512')
    {
        try {
            if (empty($secretKey)) {
                $secretKey = SECRET_KEY;
            }
            if (defined("TOKEN_CHECK") && TOKEN_CHECK) {
                $payload = \Firebase\JWT\JWT::decode($token, $secretKey, array($algorithm));
                $payload->data = (object)json_decode($payload->data, true);
                return $payload;
            } else {
                return API_KEY;
            }
        } catch (\Exception $ex) {
            return false;
        }

    }

}
if (!function_exists('singleDataToArr')) {
    function singleDataToArr($data)
    {
        return is_array($data) ? $data : [$data];
    }
}

if (!function_exists('pr')) {
    function pr($object)
    {
        echo '<pre>';
        print_r($object);
        echo '</pre>';
    }
}