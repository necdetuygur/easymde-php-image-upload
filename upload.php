<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');
    if (move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES["image"]["name"])) {
        $url = "uploads/".$_FILES["image"]["name"];
        echo '{"data": {"filePath": "'.$url.'"}}';
        http_response_code(200);
        exit;
    } else {
        echo '{"error": "Failed to upload file"}';
        http_response_code(400);
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>