<?php
include("headers.php");
for($n=0;$n<sizeof($questions);$n++){
    $nameAnswer="answer".$n;
    $question=$questions[$n];
    $answerForQ=$_POST[$nameAnswer];
//echo $_POST[$nameAnswer];
$sqlQuery="INSERT INTO preguntas(Pregunta,Respuesta) VALUES('$question','$answerForQ')";
mysqli_query($connection, $sqlQuery);
}
?>
<div class="card">
  <div class="card-header">
  <input name="pregunta" type="text" value="" hidden>
        <center><h2>;)</h2></center>
  </div>
  <div class="card-body">
        <center><h1>Gracias por responder</h1>
                <a href="./elindex.php" class="btn btn-warning">Regresar</a>
    </center>
  </div>
</div>
</body>
</html>