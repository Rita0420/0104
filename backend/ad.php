<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字廣告管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">動態文字廣告</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
                $db=${ucfirst($do)};

                $rows=$db->all();
                foreach($rows as $row):
                ?>
                <tr>
                    <td>
                        <input type="text" name="text[]" id="text" value="<?=$row['text'];?>" style="width: 90%;">
                    </td>
                    <td>
                        <input type="checkbox" name="sh[]" id="sh" <?=($row['sh']==1)?"checked":"";?> value="<?=$row['id'];?>">
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" id="del" value="<?=$row['id'];?>">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <input type="hidden" name="table" value="<?=$do;?>">
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                            value="新增動態文字廣告"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>