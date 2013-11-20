<?php
/**
 * Bootstraping functions, essential and needed for Allan to work together with some common helpers.
 *
 */
 
/**
 * Defalut exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Allan: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');



/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = ALLAN_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');
