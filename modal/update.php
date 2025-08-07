<?php
$data=[
    'title'=>[
        'header'=>'更換標題區圖片',
        'label'=>'標題區圖片'
    ],
    'mvim'=>[
        'header'=>'更換動畫圖片',
        'label'=>'動畫圖片'
    ],
    'image'=>[
        'header'=>'更換校園映像圖片',
        'label'=>'校園映像圖片'
    ]
]
?>

<h3 class="cent"><?=$data[$_GET['table']]['header'];?></h3>
<form action="./api/upadte.php" method="post" enctype="multipart/form-data">
    <div class="cent">
        <div>
            <label for="img"><?=$data[$_GET['table']]['label'];?>:</label>
            <input type="file" name="img" id="img">
        </div>
        <div>
            <input type="submit" value="更換">
            <input type="reset" value="重置">
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        </div>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </div>
</form>