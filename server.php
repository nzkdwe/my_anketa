<?php
$path = "bootstrap/".$_FILES['photo']['name'];
if(move_uploaded_file($_FILES['photo']['tmp_name'], $path)){
    echo $_FILES['photo']['name']."Жүктелді!!!";
}