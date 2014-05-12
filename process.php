<?php
//Check whether the form has been submitted
if (array_key_exists('check_submit', $_POST)) 
{
   if(isset($_POST['Defaults'])) 
   { 
      $arrlength = count($Defaults);

      for($x = 0; $x < $ arrlength; $x++)
      {
        echo $Defaults[$x];
        echo "<br>";
      }
   }

   //Let's now print out the received values in the browser
   // echo "Your name: {$_POST['Name']}<br />";
   // echo "Your password: {$_POST['Password']}<br />";
   // echo "Your favourite season: {$_POST['Seasons']}<br /><br />";
   // echo "Your comments:<br />{$_POST['Comments']}<br /><br />";
   // echo "You are from: {$_POST['Country']}<br />";
   // echo "Colors you chose: {$_POST['Colors']}<br />";
} else {
    echo "You can't see this page without submitting the form.";
}
?>