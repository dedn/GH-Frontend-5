<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper">
<form action="./upload.php" method="post" enctype="multipart/form-data">


<div class="file_upload">
        <button type="button" class="btn">Выбрать</button>
        <div>Файл не выбран</div>
        <input type="file" id="file" name="userfile">
    </div>

<p><input type="submit" value="Загрузить файл"></p>

</form>
<?php

  

    $allowed_filetypes = array('.jpg','.gif','.bmp','.png'); 
 
    $max_filesize = 524288; 
 
    $upload_path = './files/'; 
   
    $filename = $_FILES['userfile']['name']; 
 
    $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); 

    if(!in_array($ext,$allowed_filetypes))

    die('Данный тип файла не поддерживается.');

    if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)

    die('Великоват.');

    if(!is_writable($upload_path))

    die('Невозможно загрузить фаил в папку.');

    if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $filename))
 
    echo 'Ваш фаил успешно загружен <a href="' . $upload_path . $filename . '">смотреть</a>'; 

    else

    echo 'При загрузке возникли ошибки. Попробуйте ещё раз.';
      
   
 ?>
   
   

</div>
</body>
</html>