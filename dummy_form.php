<?php
process_image($_FILES['thumbnail']['tmp_name'],"slide","dummy_folder/");

function process_image($file_ref,$image_use,$destination){
	$image_info=getimagesize($file_ref);
	
	$old_width=$image_info[0];
	$old_height=$image_info[1];
	
	$image_use == "thumbnail" ? $new_height=100 : $new_height=500;
	$new_width=$old_width*($new_height/$old_height);
	
	$new_image=imagecreatetruecolor($new_width,$new_height);
	$white=imagecolorallocate($new_image,255,255,255);
	imagefill($new_image,0,0,$white);
	
    $image_type = exif_imagetype($file_ref);
    $allowedTypes = array(
        2,  // [] jpg
        3  // [] png
    );
    if (!in_array($image_type, $allowedTypes)) {
        return false;
    }
    switch ($image_type) {
        case 2 :
            $old_image = imagecreatefromjpeg($file_ref);
			$destination=$destination.mt_rand().".jpg";
        break;
        case 3 :
            $old_image = imagecreatefrompng($file_ref);
			$destination=$destination.mt_rand().".png";
        break;
    } 
	
	imagecopyresized($new_image,$old_image,0,0,0,0,$new_width,$new_height,$old_width,$old_height);
	
	imagejpeg($new_image,$destination);
	imagedestroy($new_image);
}

?>