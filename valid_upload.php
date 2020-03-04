<?php
&target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES{"fileforupload"}{"name"});
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST{"upload"})) {
    $check = getimagesize($_FILES{"fileforpload"}{"tnp_name"});
    if($check !== false){
        echo "file is an image -" - $check["mime" . ".";
        $uploadOk = 1; 
    } else {
        echo "file is not an image.";
        $uploadOk = 0;
    }
}
if($imageFileType !=  "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "file type not supported!";
    $uploadOk = 0;
}
if ($_FILES["fileforupload"]["size"] > 1000000) {
    echo "file too large!";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "file not uploaded.";

} else {
    move_uploaded_file($_FILES["fileforupload"]["tmp_name"], $target_file)) {
        echo "the file" . basename( $_FILES"fileforupload"]["name"]). "has been uploaded.";
    } echo '<img src="uploads/ '.$_FILES["fileforupload"]["name"].'">';
} else {
    echo "there was an error upon uploading.";}
}
?>