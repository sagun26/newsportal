<?php
// Directory where the images will be stored
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["newsImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if image file is an actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["newsImage"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size (limit: 5MB)
if ($_FILES["newsImage"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
$allowedFormats = array("jpg", "jpeg", "png", "gif");
if (!in_array($imageFileType, $allowedFormats)) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// If everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["newsImage"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["newsImage"]["name"])) . " has been uploaded.";
        
        // You can also handle saving the title and other information to a database here
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
