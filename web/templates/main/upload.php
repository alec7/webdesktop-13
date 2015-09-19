<?php
require_once '../../includes/user.class.php';
$oUser = new User;

if ( !empty( $_FILES ) ) {
    if ( !empty( $_POST['userId'] ) ) {
        //$userId = $_POST['userId'];
        $userCookie = $_POST['userId'];
        $userId = $oUser->getUserIdByCookieValue($userCookie);
    }else{
        die("loading page error! reload the page");
    }
    
    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $isImage = 0;
    
    $tempPath = $_FILES[ 'file' ][ 'tmp_name' ];
    $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '../../uploads';

    
    if (!file_exists($uploadPath."/".$userId)) {
        mkdir($uploadPath."/".$userId, 0777, true);
    }
    
    //var_dump($fileType);
    
    switch ($fileType) {
        case "image/jpeg":
        case "image/jpg":
        case "image/png":
        case "image/gif":
            $folder = "/img";
            $isImage = 1;
            break;
        case "application/pdf":
        case "text/plain":
            $folder = "/doc";
            break;
        case "application/octet-stream":
            $folder = "/archive";
            break;
        case "audio/mp3":
        case "audio/wav":
            $folder = "/music";
            break;
        case "video/mp4":
        case "video/mpg":
        case "video/webm":
            $folder = "/video";
            break;
        default:
            var_dump($fileType);
            die("Unknown type of the file");
            break;
    }
    
    if (!file_exists($uploadPath.DIRECTORY_SEPARATOR.$userId.$folder)) {
        mkdir($uploadPath.DIRECTORY_SEPARATOR.$userId.$folder, 0777, true);
    }
    $uploadPath = $uploadPath.DIRECTORY_SEPARATOR.$userId.$folder.DIRECTORY_SEPARATOR.$_FILES['file']['name'];

    //$uploadPath = $uploadPath."/".$userId. DIRECTORY_SEPARATOR . $_FILES[ 'file' ][ 'name' ];
    
    /*  optimalizate fileName   */
    $temp = explode(".", $fileName);
    $title = $oUser->transliterate($temp[0]);
    $replaceArray = array(".", ",", "-", "_", "!", "@", "#", "$", "№", "%", "?", "&", "*", "(", ")", "`", "~", ":", "^", "'", "<", ">", "/", "|", "+");
    $title = str_replace($replaceArray, " ", $title);
    $replaced = str_replace(" ", "-", $title);
    $newFilename = $replaced . '.' . end($temp);
    $szlach = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '../../uploads'.DIRECTORY_SEPARATOR.$userId.$folder.DIRECTORY_SEPARATOR.$newFilename;
    
    move_uploaded_file($tempPath, $szlach);
    
    if($isImage == 1){
        $t = "/thumbs";
        $uploadsFolder = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '../../uploads';
        $thumbPath = $uploadsFolder.DIRECTORY_SEPARATOR.$userId.$t.DIRECTORY_SEPARATOR.$newFilename;
        if (!file_exists($uploadsFolder.DIRECTORY_SEPARATOR.$userId.$t)) {
            mkdir($uploadsFolder.DIRECTORY_SEPARATOR.$userId.$t, 0777, true);
        }
        copy($szlach, $thumbPath);
    }

    $oUser->saveUserFile($userId, $newFilename, $fileType, $title); // saving data to db
    
    
    
    if ($isImage == 1) {
        $image = imagecreatefromjpeg($thumbPath);
        $filename = $thumbPath;

        $thumb_width = 275;
        $thumb_height = 200;

        $width = imagesx($image);
        $height = imagesy($image);

        $original_aspect = $width / $height;
        $thumb_aspect = $thumb_width / $thumb_height;

        if ($original_aspect >= $thumb_aspect) {
            // If image is wider than thumbnail (in aspect ratio sense)
            $new_height = $thumb_height;
            $new_width = $width / ($height / $thumb_height);
        } else {
            // If the thumbnail is wider than the image
            $new_width = $thumb_width;
            $new_height = $height / ($width / $thumb_width);
        }

        $thumb = imagecreatetruecolor($thumb_width, $thumb_height);

        // Resize and crop
        imagecopyresampled($thumb, $image, 0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
                0 - ($new_height - $thumb_height) / 2, // Center the image vertically
                0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($thumb, $filename, 80);
    }


    $answer = array( 'answer' => 'File transfer completed' );
    $json = json_encode( $answer );

    echo $json;

} else {
    echo 'No files';
}