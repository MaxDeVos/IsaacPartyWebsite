<center>
<div class="bodytext">
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $imageName = $_POST['personName'];
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Ya'll alredy uplodded ur picktre";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "That ain't a picktre B";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Try Again Sweaty";
// if everything is ok, try to upload file
} else {

$info = pathinfo($_FILES['fileToUpload']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = $imageName.".".$ext; 
$target = 'uploads/'.$newname;

    if (move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target)) {
        $imageName = $_REQUEST['imageName'];
        echo $imageName;
        echo "Your picktre has been uploddded.";
    } else {
        echo "Something went wrong here.";
    }
}
?>
</div>
</center>
