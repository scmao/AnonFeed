<html>
<head>
<style>
  input[type="radio"]{
  margin: 10 0px 0 25px;
}
</style>
</head>

<?php
$counter = 1;
//Check whether the form has been submitted
if (array_key_exists('check_submit', $_POST)) 
{
   echo '<form name="outForm" action="annon.php" method="POST">
          <input type="hidden" name="check_submit" value="1" />';
   if(isset($_POST['Defaults'])) 
   { 
      $arrlength = count($_POST['Defaults']);

      for($x = 0; $x < $arrlength; $x++)
      {
        switch($_POST['Defaults'][$x])
        {
          case "D1":
            echo "$counter.&nbsp";
            $counter++; 
            echo "What is my biggest weakness?";
            echo "<br>";
            echo '<input type="text" name="D1" size="100"/><br />';
            break;
        
          case "D2":
            echo "$counter.&nbsp";
            $counter++; 
            echo "What is my biggest strength?";
            echo "<br>";
            echo '<input type="text" name="D2" size="100"/><br />';
            break;

          case "D3":
            echo "$counter.&nbsp";
            $counter++; 
            echo "On a scale from 1(worst) to 5(best), how approachable am I?";
            echo "<br>";
            echo "(worst)";
            echo '<input type="radio" name="Approachable" value="1" /> 1';
            echo '<input type="radio" name="Approachable" value="2" /> 2';
            echo '<input type="radio" name="Approachable" value="3" /> 3';
            echo '<input type="radio" name="Approachable" value="4" /> 4';
            echo '<input type="radio" name="Approachable" value="5" /> 5';
            echo str_repeat('&nbsp;', 5);
            echo "(best)";
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
      }
    }
    if(!empty($_POST['Q1']))
    {
      echo "$counter.&nbsp";
      $counter++; 
      echo "{$_POST['Q1']}<br />";
      if($_POST['R1'] == "TR")
      {
        echo '<input type="text" name="Q1R" size="100"/><br />';
      }
      else
      {
        echo "(worst)";
        echo '<input type="radio" name="Q1R" value="1" /> 1';
        echo '<input type="radio" name="Q1R" value="2" /> 2';
        echo '<input type="radio" name="Q1R" value="3" /> 3';
        echo '<input type="radio" name="Q1R" value="4" /> 4';
        echo '<input type="radio" name="Q1R" value="5" /> 5';
        echo str_repeat('&nbsp;', 5);
        echo "(best)";
      }
      echo "<br>";
      echo "<br>";
      echo "<br>";
    }

    if(!empty($_POST['Q2']))
    {
      echo "$counter.&nbsp";
      $counter++; 
      echo "{$_POST['Q2']}<br />";
      if($_POST['R2'] == "TR")
      {
        echo '<input type="text" name="Q2R" size="100"/><br />';
      }
      else
      {
        echo "(worst)";
        echo '<input type="radio" name="Q2R" value="1" /> 1';
        echo '<input type="radio" name="Q2R" value="2" /> 2';
        echo '<input type="radio" name="Q2R" value="3" /> 3';
        echo '<input type="radio" name="Q2R" value="4" /> 4';
        echo '<input type="radio" name="Q2R" value="5" /> 5';
        echo str_repeat('&nbsp;', 5);
        echo "(best)";
      }
      echo "<br>";
      echo "<br>";
      echo "<br>";
    }  
    echo'<input type="submit" />';
    echo"</form>";
} 

else 
{
    echo "You can't see this page without submitting the form.";
}
?>
</html>