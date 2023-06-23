<?php
include_once 'oisf_core_functions.php';

if (!defined("WEB_PATH")) define("WEB_PATH", '/');
/*
 * Status Code for Response
 */
if (!defined("BAD_REQUEST_CODE")) define("BAD_REQUEST_CODE", 400);
if (!defined("UNAUTHORIZED_CODE")) define("UNAUTHORIZED_CODE", 401);
if (!defined("FORBIDDEN_CODE")) define("FORBIDDEN_CODE", 403);
if (!defined("INTERNAL_SERVER_ERROR_CODE")) define("INTERNAL_SERVER_ERROR_CODE", 500);
if (!defined("SUCCESS_CODE")) define("SUCCESS_CODE", 200);
if (!defined("URL_NOT_FOUND_CODE")) define("URL_NOT_FOUND_CODE", 404);