<?php

function autocarga_clases($class){

require_once 'clases/' . $class . '.php';
}

spl_autoload_register('autocarga_clases');