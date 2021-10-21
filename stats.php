<?php
include("headers.php");
$sumArrayAns=[];
$globalCounter=0;
for($x=0;$x<sizeof($questions);$x++){
    for($n=0;$n<sizeof($answers);$n++){
        $sqlQuery="SELECT COUNT(Respuesta) from preguntas WHERE Respuesta='$answers[$n]' AND Pregunta='$questions[$x]'";
        $response= mysqli_query($connection, $sqlQuery);
        while($show=mysqli_fetch_array($response)){
         array_push($sumArrayAns,$show[0]);
        }
    }
}
?>
    <table class="table table-striped">
        <tr>
            <th>Pregunta</th>
            <?php
             for($i=0;$i<sizeof($answers);$i++){
            ?>
            <th><?php echo $answers[$i] ?></th>
             <?php
             }
            ?>
        </tr>
        
            <?php
             for($i=0;$i<sizeof($questions);$i++){
            ?>
            <tr>
              <td><?php echo $questions[$i] ?></td>
              <?php
             for($j=0;$j<sizeof($answers);$j++){
            ?>
            <td><?php echo $sumArrayAns[$globalCounter] ?></td>
             <?php
             $globalCounter++;
             }
            ?>
             </tr>
            <?php
             }
            ?>
        
    </table>
</body>
</html>