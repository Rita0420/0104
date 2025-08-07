<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進站總人數管理</p>
    <form method="post" action="./api/edit_column.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="50%">進站總人數</td>
                     <?php
                $db=${ucfirst($do)};

                $rows=$db->find(1);
                ?>
                    <td>
                        <input type="text" name="total" id="total" value="<?=$rows['total'];?>" style="width: 90%;">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="id" value="<?=$rows['id'];?>">
        <input type="hidden" name="table" value="<?=$do;?>">
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="hidden" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                            value="新增動態文字廣告"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>