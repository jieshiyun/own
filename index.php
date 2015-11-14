<?php

include_once("controller/Action.class.php");

if(empty($_GET['module']))
	$module = 'App';
else
	$module = $_GET['module'];

if(empty($_GET['action']))
	$action = 'show';
else
	$action = $_GET['action'];


include_once('controller/'.$module.'Action.class.php');
$classname = $module.'Action';
$clas = new $classname;
$clas->$action();
