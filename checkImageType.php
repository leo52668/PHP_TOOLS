<?php

function checkImageType($filename, $fileType = 'JPG') 
{
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

	$fileType = strtoupper($fileType);

	if (getimagesize($filename) == true and in_array($fileType, $imageType)) {
		list($width, $height, $type) = getimagesize($filename);
		if ($imageType[$type] == $fileType) {
			return true;
		} else {
			return false;
		}
	}
	return false;
}
 
?>