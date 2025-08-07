<?php include_once "db.php";

$table=$_POST['table'];
$db=${ucfirst($table)};

unset($_POST['table']);

if(isset($_POST['id'])){
    foreach($_POST['id'] as $key => $id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $db->del($id);
        }else{
            $row=$db->find($id);
            switch ($table) {
                case 'title':
                    $row['text']=$_POST['text'][$key];
                    $row['sh']=($_POST['sh']==$id)?1:0;
                break;
                
                default:
                    if(isset($_POST['text'])){
                        $row['text']=$_POST['text'][$key];
                    }
                    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                    break;
            }
              

               $db->save($row);
            }
        }
    }


to("../backend.php?do=$table");