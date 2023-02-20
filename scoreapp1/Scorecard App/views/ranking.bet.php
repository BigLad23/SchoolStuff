<?php 
if(isset($message)) echo "<hr>". $message ."<hr>";
require "./views/partials/userhead.php";
?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.3/dragula.min.js'></script>



<h1>Place a bet - Ranking</h1>

<form method = "post" action="/index.php?action=betonevent">
<p class = "eventname">
<?php
//var_dump ($event);

echo $event[0]["name"];
?>
<p>
<div id = "drag" >
<?php
foreach($contestants as $contestant) { ?>
    <div class = "rankingitem" draggable = "true">
    <div class = "rankingitem contestant"> 
    <?= $contestant["name"];?>
    </div>
    <input type = "hidden" name = <?= $contestant["contestant_id"];?>/>
    </div> 

<?php
}
?>
</div>
<input type = "hidden" name="event_id" value = "<?= $contestant["event_id"];?>"/>  
<div class= "container text-center">
    <input type = "submit" class="btn-lg rounded-0" style="margin: 15px" value = "Bet"><br>
    </div>
</form>
<script>

console.log(document.getElementById("drag"));

dragula([document.getElementById("drag")])
  .on('drag', function (el) {
    el.className = el.className.replace('ex-moved', '');
  }).on('drop', function (el) {
    el.className += ' ex-moved';
  }).on('over', function (el, container) {
    container.className += ' ex-over';
  }).on('out', function (el, container) {
    container.className = container.className.replace('ex-over', '');
  });
</script> 
<?php
require "./views/partials/end.php";
?>