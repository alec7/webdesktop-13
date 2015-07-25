<?php

function dump($value) {
    echo '<pre style="color: red;">';
    print_r($value);
    echo '</pre>';
}


move_uploaded_file(
  $_FILES["file"]["tmp_name"],
    'uploads/' . $_FILES["file"]["name"]
);





dump($_POST);
dump($_FILES);
die();
