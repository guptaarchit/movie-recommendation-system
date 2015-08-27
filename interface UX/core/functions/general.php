<?php

function sanitize($data){

	return mysql_real_escape_string($data);

}

function array_sanitize(&$item){

	$item =mysql_real_escape_string($item);

}

function output_errors($errors)
{

	$output=array();
	foreach ($errors as $error) {
		//echo  $error,', ';
		$output[]= '<li>' . $error . '</li>';
	}
	return  implode('', $output);
}
?>