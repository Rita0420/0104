<h3 class="cent">新增主選單</h3>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
    <div >
        <div style="display: flex;justify-content: space-around;">
            <label for="text">主選單名稱:</label>
            <label for="href">主選單連結:</label>
        </div>
        <div style="display: flex;justify-content: space-around;">
            <input type="text" name="text" id="text">
            <input type="text" name="href" id="href">
        </div>
        
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </div>
    <div class="cent">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
</form>