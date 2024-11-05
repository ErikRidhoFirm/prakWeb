<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $targetDirectory = "documents/";
    $allowedExtentions = array("png", "jpg", "jpeg", "gif");
    $maxFileSize = 2097152;

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }
    
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) { 
    $file_name = $_FILES['files']['name'][$i];
    $file_Size = $_FILES['files']['size'][$i];
    $file_Tmp = $_FILES['files']['tmp_name'][$i];
    $file_Type = $_FILES['files']['type'][$i];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $targetFile = $targetDirectory . basename($file_name);
    
    if (!in_array($file_ext, $allowedExtentions)) {
        $errors[] = "Ekstensi file yang diizinkan adalah jpg, jpeg, png, atau gif untuk file $file_name";
    }
    if ($file_Size > $maxFileSize) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2MB';
    }
    if (empty($errors)) {
        if (move_uploaded_file($file_Tmp, $targetFile)) {
            echo "File $file_name berhasil diunggah";
        }else{
            echo "Gagal mengunggah file. <br>";
        }
    }else{
        echo implode(" ", $errors);
    }
}
}else{
    echo "Tidak ada file yang diunggah";
}
?>