<?php include_once "../api/db.php";?>
<h3 class="cent">編輯次選單</h3>
<form action="./api/submenu.php" method="post" enctype="multipart/form-data">
    <div>
        <?php
        $menus=$Menu->all(['main_id'=>$_GET['id']]);
        foreach($menus as $menu):
        ?>
        <div style="display: flex;justify-content: space-around;">
            <label for="text">次選單名稱:</label>
            <label for="href">次選單連結:</label>
            <div>
                <input type="hidden">
                <label for="del" hidden>刪除</label>
            </div>
        </div>
        <div style="display: flex;justify-content: space-around;">
            <input type="text" name="text[]" id="text" value="<?=$menu['text'];?>">
            <input type="text" name="href[]" id="href" value="<?=$menu['href'];?>">
            <div>
                <input type="checkbox" name="del[]" id="del" value="<?=$menu['id'];?>">
                <label for="del">刪除</label>
            </div>
            <input type="hidden" name="id[]" value="<?=$menu['id'];?>">
        </div>
        <?php endforeach;?>
        <div class="add"></div>


        <input type="hidden" name="main_id" value="<?=$_GET['id'];?>">
    </div>
    <div class="cent">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
        <input type="button" value="新增次選單" onclick="add()">
    </div>
</form>

<script>
function add() {
    item = `
        <div style="display: flex;justify-content: space-around;">
            <label for="text">次選單名稱:</label>
            <label for="href">次選單連結:</label>
            <div>
                <input type="hidden">
                <label for="del" hidden>刪除</label>
            </div>
        </div>
        <div style="display: flex;justify-content: space-around;">
            <input type="text" name="text2[]" id="text">
            <input type="text" name="href2[]" id="href">
            <div>
                <input type="hidden">
                <label for="del" hidden>刪除</label>
            </div>
        </div>
        `;
        $(".add").append(item);
}
</script>