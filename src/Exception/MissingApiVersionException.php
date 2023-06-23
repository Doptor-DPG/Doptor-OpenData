<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 25-Aug-19
 * Time: 3:19 PM
 */

namespace App\Exception;


use Cake\Core\Exception\Exception;

class MissingApiVersionException extends Exception
{
    // Exception message template
    protected $_messageTemplate = 'Api Version is missing. Please pass api-version in request in the form of header.';

    // exception code
    protected $_defaultCode = UNAUTHORIZED_CODE;

    /**
     * Constructor.
     *
     * @param string|array $message Either the string of the error message, or an array of attributes
     *   that are made available in the view, and sprintf()'d into Exception::$_messageTemplate
     * @param int $code The code of the error, is also the HTTP status code for the error.
     * @param \Exception|null $previous the previous exception.
     */
    public function __construct($message = null, $code = UNAUTHORIZED_CODE, $previous = null)
    {
        parent::__construct($this->_messageTemplate, $this->_defaultCode, $previous);
    }
}