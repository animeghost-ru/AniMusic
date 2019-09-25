<?
include ($_SERVER['DOCUMENT_ROOT'] . "/private/var.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/views/head/head.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/views/nav/nav.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/views/index/index.php");

global $var;

headOutput($var['app-name'], $var['app-version']);
navOutput();
indexOutput();
