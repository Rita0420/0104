<h3 class="cent">新增使用者帳號</h3>
<form action="../api/insert.php" method="post" enctype="multipart/form-data">
    <div class="cent">
        <div>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div>
            <label for="pw2">確認密碼:</label>
            <input type="password">
        </div>
        <div>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </div>
</form>