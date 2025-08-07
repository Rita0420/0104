<h3 class="cent">新增動態文字廣告</h3>
<form action="../api/insert.php" method="post" enctype="multipart/form-data">
    <div class="cent">
        <div>
            <label for="text">動態文字廣告:</label>
            <input type="text" name="text" id="text">
        </div>
        <div>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </div>
</form>