<div style="height:32px; display:block;"></div>
<!--正中央-->
<div>
<h3 class="cent">最新消息區</h3>
        <?php
        $db=${ucfirst($do)};

        $div=5;
        $all=count($db->all());
        $now=$_GET['p']??1;
        $page=ceil($all/$div);
        $start=($now-1)*$div;
        ?>
    <ol  style="list-style-type:decimal;" start="<?=$start+1;?>">
        <?php
        $rows=$db->all(" limit $start,$div");
        foreach($rows as $new){
            echo "<li class='sswww'>";
            echo mb_substr($new['text'],0,10);
            echo "<div class='all' style='display:none;'>";
            echo $new['text'];
            echo "</div>";
            echo "</li>";
        }
        ?>

    </ol>
</div>
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
<div id="alt"
    style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
$(".sswww").hover(
    function() {
        $("#alt").html("" + $(this).children(".all").html() + "").css({
            "top": $(this).offset().top - 50
        })
        $("#alt").show()
    }
)
$(".sswww").mouseout(
    function() {
        $("#alt").hide()
    }
)
</script>