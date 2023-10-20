<?php
error_reporting(0);

function filter($data) {
    return str_replace('\'', '', $data);
}

mt_srand(time());
$name = 'img/'.(string)mt_rand().'.jpg';
if(!move_uploaded_file($_FILES['file']['tmp_name'], $name)) {
    echo '<script>alert("未上传图片");</script>';
    exit();
}

include 'conn.php';

$exif = exif_read_data($name);

if ($_POST['title'] != '') {
    $title = filter($_POST['title']);
}
else if(isset($exif['ImageDescription'])) {
    $title = $exif['ImageDescription'];
}
else {
    $title = '';
}
if ($_POST['author'] != '') {
    $author = filter($_POST['author']);
}
else if(isset($exif['Artist'])) {
    $author = $exif['Artist'];
}
else {
    $author = '';
}
if ($_POST['time'] != '') {
    $time = filter($_POST['time']);
}
else if($exif['DateTimeOriginal']!= '') {
    $time = $exif['DateTimeOriginal'];
}
else {
    $time = '';
}
if ($_POST['description'] != '') {
    $description = filter($_POST['description']);
}
else {
    $description = '';
}

$sql = "insert into img(name, title, author, time, description) values ('$name', '$title', '$author', '$time', '$description')";
$conn->query($sql);

header('Location: '.$_SERVER["HTTP_REFERER"]);