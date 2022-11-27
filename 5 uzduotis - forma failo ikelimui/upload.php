<?php

$error = $_FILES['my_file']['error'];

if ($error !== UPLOAD_ERR_OK) {
    echo 'File upload error!';
    die();
}

if (!is_dir('aplankas')) {
    mkdir('aplankas', 0777);
}

$fileName = $_POST['filename'];
$fileTmpPath = $_FILES['my_file']['tmp_name'];
$fileStoragePath = sprintf('aplankas/%s', $fileName);

if (move_uploaded_file($fileTmpPath, $fileStoragePath)) {
    echo 'Congratulations! File uploaded successfully!';
}