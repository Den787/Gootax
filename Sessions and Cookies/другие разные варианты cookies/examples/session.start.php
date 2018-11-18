<?php
session_start();

if(!isset($_SESSION['time'])) {
  $_SESSION['time']  = date("H:i:s");
}
echo $_SESSION['time'];

$_SESSION['integer var'] = 123;
$_SESSION['float var'] = 1.23;
$_SESSION['octal var'] = 0x123;
$_SESSION['string var'] = "Hello world";
$_SESSION['array var'] = array('one', 'two', [1,2,3]);

$object = new stdClass();
$object->foo = 'bar';
$object->arr = array('hello', 'world');

$_SESSION['object var'] = $object;
$_SESSION['integer again'] = 42;