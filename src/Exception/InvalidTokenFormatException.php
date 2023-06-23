<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 25-Aug-19
 * Time: 3:20 PM
 */

namespace App\Exception;


use Cake\Core\Exception\Exception;

class InvalidTokenFormatException extends Exception
{
    // Exception message template
    protected $_messageTemplate = 'Format is Authorization: Bearer [token].';

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