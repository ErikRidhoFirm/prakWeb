<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $targetDirectory = "documents/";
    $allowedExtentions = array("pdf", "doc", "docx", "txt");
    $maxFileSize = 2 * 1024 * 1024;

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }    

    $file_name = $_FILES['file']['name'];
    $file_Size = $_FILES['file']['size'];
    $file_Tmp = $_FILES['file']['tmp_name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $targetFile = $targetDirectory . basename($file_name);
    
    if (!in_array($file_ext, $allowedExtentions)) {
        $errors[] = "Ekstensi file yang diizinkan adalah pdf, doc, docx, txt untuk file $file_name";
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
}else{
    echo "Tidak ada file yang diunggah";
}
?>