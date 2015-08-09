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
    
    $tempPath = $_FILES[ 'file' ][ 'tmp_name' ];
    //$uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $_FILES[ 'file' ][ 'name' ];
    $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '../../uploads';

    
    if (!file_exists($uploadPath."/".$userId)) {
        mkdir($uploadPath."/".$userId, 0777, true);
    }
    
    switch ($fileType) {
        case "image/jpeg":
        case "image/jpg":
        case "image/png":
        case "image/gif":
            $folder = "/img";
            break;
        case "application/pdf":
            $folder = "/pdf";
            break;
        case "text/plain":
            $folder = "/txt";
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
            //die("Unknown type of the file");
            break;
    }
    
    if (!file_exists($uploadPath.DIRECTORY_SEPARATOR.$userId.$folder)) {
        mkdir($uploadPath.DIRECTORY_SEPARATOR.$userId.$folder, 0777, true);
    }
    $uploadPath = $uploadPath.DIRECTORY_SEPARATOR.$userId.$folder.DIRECTORY_SEPARATOR.$_FILES['file']['name'];



    //$uploadPath = $uploadPath."/".$userId. DIRECTORY_SEPARATOR . $_FILES[ 'file' ][ 'name' ];
    

    move_uploaded_file( $tempPath, $uploadPath );
    $oUser->saveUserFile($userId, $fileName, $fileType);
    
    
    
    $answer = array( 'answer' => 'File transfer completed' );
    $json = json_encode( $answer );

    echo $json;

} else {
    echo 'No files';
}