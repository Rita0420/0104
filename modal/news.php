<h3 class="cent">新增最新消息</h3>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
    <div class="cent">
        <div>
            <label for="text">最新消息:</label>
            <textarea name="text" id="text"></textarea>
        </div>
        <div>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </div>
</form>