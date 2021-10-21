<?php
include("headers.php");
?>

<form action="gracias.php" method="post">
    <?php
    for($i=0;$i<sizeof($questions);$i++){
    ?>
    <div class="card">
  <div class="card-header">
        <h2><?php echo $questions[$i]; ?></h2>
  </div>
  <div class="card-body">
  <?php
        for($j=0;$j<sizeof($answers);$j++){
        ?>
          <input type="radio" name="answer<?php echo $i; ?>" value="<?php echo $answers[$j]; ?>"><label for="answer<?php echo $i; ?>"><?php echo $answers[$j]; ?></label>
        <?php
        }
        ?>
  </div>
</div>
   <?php
    }
   ?>
   <button class="btn btn-success">Enviar respuesta</button>
   </form>
   <?php
   include("footer.php")
   ?>
</body>
</html>