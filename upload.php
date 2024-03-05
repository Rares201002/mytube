<?php
if ($_FILES["videoFile"]["error"] > 0) {
    echo json_encode(array("error" => "Error uploading file."));
} else {
    $fileName = $_FILES["videoFile"]["name"];
    $tempFile = $_FILES["videoFile"]["tmp_name"];
    $uploadDir = "uploads/";

    if (move_uploaded_file($tempFile, $uploadDir . $fileName)) {
        echo json_encode(array("success" => "File uploaded successfully."));
    } else {
        echo json_encode(array("error" => "Error moving file to destination."));
    }
}
?>
