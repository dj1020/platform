<?php
function __autoload($class_name) {
    require 'class/class_'. $class_name . '.php';
}
?>