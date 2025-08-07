<?php include_once "db.php";

$table=$_POST['table'];
$db=${ucfirst($table)};

unset($_POST['table']);

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../images/".$_FILES['img']['name']);
    $row=$db->find($_POST['id']);
    $row['img']=$_FILES['img']['name'];
    $db->save($row);
}

to("../backend.php?do=$table");