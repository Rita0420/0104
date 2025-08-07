<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">最新消息</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
                $db=${ucfirst($do)};
                
                $div=5;
                $all=count($db->all());
                $now=$_GET['p']??1;
                $page=ceil($all/$div);
                $start=($now-1)*$div;

                $rows=$db->all(" limit $start,$div");
                foreach($rows as $row):
                ?>
                <tr>
                    <td>
                        <textarea name="text[]" id="text" style="width: 90%;"><?=$row['text'];?></textarea>
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
        <div class="cent">
            <?php if($now-1>0):?>
            <a href="?do=<?=$do;?>&p=<?=$now-1;?>" class="bl"><</a>
            <?php endif;?>
            <?php for($i=1;$i<=$page;$i++):
                $size=($_GET['p']==$i)?"24px":"" ;?>
            <a href="?do=<?=$do;?>&p=<?=$i;?>" style="font-size:<?=$size;?>" class="bl"><?=$i;?></a>
            <?php endfor;?>
             <?php if($now+1<=$page):?>
            <a href="?do=<?=$do;?>&p=<?=$now+1;?>" class="bl">></a>
            <?php endif;?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','../modal/<?=$do;?>.php?table=<?=$do;?>')"
                            value="新增最新消息"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>