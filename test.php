<?php

function checkImageType($filename, array $fileTypes = ['JPG']) {

	$checkTypes = [];
	$isOk = 0;

	$imageType = [
		1 => 'GIF',
		2 => 'JPG',
		3 => 'PNG',
		4 => 'SWF',
		5 => 'PSD',
		6 => 'BMP', 
		7 => 'TIFF',
		8 => 'TIFF',
		9 => 'JPC',
		10 => 'JP2',
		11 => 'JPX',
		12 => 'JB2',
		13 => 'SWC',
		14 => 'IFF',
		15 => 'WBMP',
		16 => 'XBM'
	];

    list($width, $height, $type) = getimagesize($filename);
    foreach ($fileTypes as $value) {
		array_push($checkTypes, $value);
	}
	
	foreach ($fileTypes as $value) {
		if ($imageType[$type] == strtoupper($value)) {
			$isOk = 1;
		}	
	}

	if ($isOk == 1) return true;
}

?>