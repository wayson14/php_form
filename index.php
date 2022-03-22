<?php

	$plik = fopen("test.txt", "a");
	$dane = 'hello world';
	fwrite($plik, $dane);
	fclose($plik);

?>