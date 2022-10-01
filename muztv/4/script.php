<?php 

function uploadImage($image) {
	$dirName = date('d-m-Y');
	$uploadDirPath = __DIR__ . '/' . $dirName . '/';

	if (!is_dir($uploadDirPath)) {
		mkdir($uploadDirPath);
	}

	$destFilePath = $uploadDirPath . $image['name'];
	$original= $image['tmp_name'];

	$thumbnail = new Imagick($original);

	$thumbnail->thumbnailImage(300, 0);
	$thumbnail->setImageFormat ("jpeg");
	$thumbnail->writeImage($uploadDirPath . '/thumbnail_' . $image['name']);       // variant 1
	// file_put_contents ($uploadDirPath . 'test_1.jpg', $thumbnail);              // variant 2
	// $thumbnail->writeImageFile( fopen($uploadDirPath . 'test_2.jpg', "wb") );   // variant 3

	move_uploaded_file($original, $destFilePath);
}

uploadImage($_FILES['image'])

?>
