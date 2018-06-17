<?php
/*
  Plugin Name: Sanitize Russian Urls and Filenames
  Plugin URI:
  Description:
  Author: Alexey Selin <4selin@gmail.com>
  Version: 0.1.0
 */

function sanitizze( $title ) {
	$config = [
		"А" => "A",
		"Б" => "B",
		"В" => "V",
		"Г" => "G",
		"Д" => "D",
		"Е" => "E",
		"Ё" => "JO",
		"Ж" => "ZH",
		"З" => "Z",
		"И" => "I",
		"Й" => "J",
		"К" => "K",
		"Л" => "L",
		"М" => "M",
		"Н" => "N",
		"О" => "O",
		"П" => "P",
		"Р" => "R",
		"С" => "S",
		"Т" => "T",
		"У" => "U",
		"Ф" => "F",
		"Х" => "H",
		"Ц" => "C",
		"Ч" => "CH",
		"Ш" => "SH",
		"Щ" => "SHCH",
		"Ъ" => "",
		"Ы" => "Y",
		"Ь" => "",
		"Э" => "E",
		"Ю" => "YU",
		"Я" => "YA",
		"а" => "a",
		"б" => "b",
		"в" => "v",
		"г" => "g",
		"д" => "d",
		"е" => "e",
		"ё" => "yo",
		"ж" => "zh",
		"з" => "z",
		"и" => "i",
		"й" => "j",
		"к" => "k",
		"л" => "l",
		"м" => "m",
		"н" => "n",
		"о" => "o",
		"п" => "p",
		"р" => "r",
		"с" => "s",
		"т" => "t",
		"у" => "u",
		"ф" => "f",
		"х" => "h",
		"ц" => "c",
		"ч" => "ch",
		"ш" => "sh",
		"щ" => "shch",
		"ъ" => "",
		"ы" => "y",
		"ь" => "",
		"э" => "e",
		"ю" => "yu",
		"я" => "ya",
		"«" => "",
		"»" => "",
		"—" => "-",
	];

	return strtr( $title, $config );
}

add_action( 'sanitize_title', 'sanitizze', 0 );
add_filter( 'sanitize_file_name', 'sanitizze', 0 );
