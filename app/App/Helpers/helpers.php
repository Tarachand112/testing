<?php
/**
 * Created by Asmus Techno.
 * User: Abduls
 * Date: 15/01/2022
 */


function pre($str) {
	echo '<pre>';
	print_r($str);
	echo '</pre>';
}
function pred($str) {
	echo '<pre>';
	print_r($str);
	echo '</pre>';
	die;
}
function jp($str) {
	echo json_encode($str);
}
function jpd($str) {
	echo json_encode($str);
	die;
}

if (!function_exists('on_page')) {
	function on_page($link, $type = "name") {
		switch ($type) {
			case "url":
				$result = ($link == request()->fullUrl());
				break;
			default:
				$result = ($link == request()->route()->getName());
		}
		return $result;
	}
}

if (!function_exists('return_if')) {
	function return_if($condition, $value) {
		if ($condition) {
			return $value;
		}
	}
}
