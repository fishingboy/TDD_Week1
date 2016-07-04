<?php
/**
 * CLASS 自動載入
 */
spl_autoload_register(function ($class_name) 
{
    include 'classes/' . $class_name . '.php';
});