<!DOCTYPE html>
<html>

<head>
    <title>摄影作品分享</title>
    <meta charset="utf-8">
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;
        }
        .photo {
            display: flex;
            width: 50%;
            height: 300px;
            margin-bottom: 1%;
            background-color: darkgray;
            margin-left: auto;
            margin-right: auto;
        }
        .photo .upload {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60%;
            height: 100%;
            background-size: cover;
        }
        .photo .img {
            width: 60%;
            height: 100%;
            background-size: cover;
        }
        .photo .description {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            background-color: azure;
            padding: 1%;
        }
        .photo .description input {
            margin-bottom: 1%;
        }
        .photo .description textarea {
            resize: None;
            width: 250px;
            height: 200px;
            margin-left: 3%;
            background-color: azure;
        }
        .photo .description .button {
            width: 30%;
            margin-top: 1%;
        }
    </style>
</head>

<body>
<div class="photo">
    <div class="upload">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
    </div>
    <div class="description">
        <input name="title" type="text" placeholder="标题">
        <input name="author" type="text" placeholder="作者">
        <input name="time" type="date">
        <textarea name="description" placeholder="描述"></textarea>
        <center>
            <input class="button" type="submit" value="上传">
        </center>
    </div>
    </form>
</div>
<?php
include 'conn.php';
$sql = 'select * from img';
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    $name = htmlspecialchars($row['name']);
    $title = htmlspecialchars($row['title']);
    $author = htmlspecialchars($row['author']);
    $time = htmlspecialchars($row['time']);
    $description = htmlspecialchars($row['description']);
    echo <<<EOF
<div class="photo">
    <div class="img" style="background-image: url('$name')"></div>
    <div class="description">
        &nbsp;标题:&nbsp;$title<br>
        &nbsp;作者:&nbsp;$author<br>
        &nbsp;拍摄时间:&nbsp;$time<br>
        &nbsp;描述:<br>
        <textarea readonly="readonly">$description</textarea>
    </div>
</div>
EOF;
}
?>
<center>
    <p>Powered by Night Tac</p>
</center>
</body>

</html>