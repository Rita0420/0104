<?php include_once "db.php";

$table=$_POST['table'];
$db=${ucfirst($table)};

unset($_POST['table']);

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../images/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

switch ($table) {
    case 'title':
        $_POST['sh']=0;
        break;
    
    default:
        $_POST['sh']=1;
        break;
}

$db->save($_POST);

to("../backend.php?do=$table");