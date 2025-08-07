<h3 class="cent">新增校園映像圖片</h3>
<form action="../api/insert.php" method="post" enctype="multipart/form-data">
    <div class="cent">
        <div>
            <label for="img">校園映像圖片:</label>
            <input type="file" name="img" id="img">
        </div>
        <div>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </div>
</form>