<?php

	function rand_code($len) {
		$min_lenght = 0;
		$max_lenght = 100;
		$bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$smallL = "abcdefghijklmnopqrstuvwxyz";
		$number = "0123456789";
		$bigB = str_shuffle($bigL);
		$smallS = str_shuffle($smallL);
		$numberS = str_shuffle($number);
		$subA = substr($bigB, 0, 5);
		$subB = substr($bigB, 6, 5);
		$subC = substr($bigB, 10, 5);
		$subD = substr($smallS, 0, 5);
		$subE = substr($smallS, 6, 5);
		$subF = substr($smallS, 10, 5);
		$subG = substr($numberS, 0, 5);
		$subH = substr($numberS, 6, 5);
		$subI = substr($numberS, 10, 5);
		$RandCode1 = str_shuffle($subA.$subD.$subB.$subF.$subC.$subE);
		$RandCode2 = str_shuffle($RandCode1);
		$RandCode = $RandCode1.$RandCode2;
		if ($len > $min_lenght && $len < $max_lenght) {
			$CodeEX = substr($RandCode, 0, $len);
		} else {
			$CodeEX = $RandCode;
		}
		return $CodeEX;
	}

	echo rand_code(10);

	echo "<hr>";

	function createRandomPassword() {
		$chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		srand((double) microtime() * 1000000);
		$i = 0;
		$pass = '';

		while ($i <= 6) {
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$pass = $pass.$tmp;
			$i++;
		}

		return $pass;
	}

	echo createRandomPassword();

	echo "<hr>";

	$uniqid = uniqid();

	$rand_start = rand(1,5);

	$rand_8_char = substr($uniqid,$rand_start,6);

	echo $rand_8_char;

	echo "<hr>";

	function randomString($length = 6) {
		$str = "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}

	echo randomString();