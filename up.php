<?php

$name       = $_FILES['dados']['name'];
$tmp_name   = $_FILES['dados']['tmp_name'];
$save_path  = 'dds/'.$name;

if (move_uploaded_file($tmp_name, $save_path)){
    header('location:upload.php');
    
}else{
    
    echo "
    <link rel='stylesheet' href='../erro.css'>
    
    <div class='bodylink'><div class='toplink'><a class='alink' href='javascript:history.go(-1)'>&times;</a></div>
    Ocorreu um erro no UPLOAD se continuar ocorrendo verifique o ficheiro </div>

    ";
}
?>