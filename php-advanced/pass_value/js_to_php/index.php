<?php
/*
function callerYear($value)
{
  if (isset ($value))
  {
    switch($value)
    {
      case "2022":
        $_POST($value);
        break;
      case "2021":
        echo $value;
        break;
      case "2020":
        echo $value;
        break;
      case "2019":
        echo $value;
        break;
      default:
        echo "End of loop !";
    }
  }
}
*/
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Free Web tutorials">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--meta http-equiv="refresh" content="30">
    <link rel="stylesheet" type="text/css" href="./styles.css" /-->
    <title>Tutorial php action button</title>
  </head>

  <body>

    <form action="" method="post">
      <select name="year">
        <option value="Select">Année</option>
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
      </select>
      <input type="submit" name="Submit" value="Submit">
    </form>

    <script src="./stat_graphs.js"></script>
  </body>
</html>

<?php

if ( isset( $_POST['year'] ) )
{
  echo "Année : " . htmlspecialchars($_POST['year']);
  //$datas->_stats->property;
}

?>

<?php
/*
    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn">Dropdown</button>
      <div id="myDropdown" class="dropdown-content">
      "document.write('<?php hello() ?>');"
        
        <button 
          type="button"
          onclick="document.write('<?php callerYear(2022) ?>);"
          class="buttonOne"
        >
          2022
        </button>
        
        <button 
          type="button"
          onclick="document.write('<?php callerYear(2021) ?>);"
          class="buttonTwo"
        >
          2021
        </button>
        
        <button 
          type="button"
          onclick="document.write('<?php callerYear(2020) ?>);"
          class="buttonThree"
        >
          2020
        </button>
        
        <button 
          type="button"
          onclick="document.write('<?php callerYear(2019) ?>);"
          class="buttonFour"
        >
          2019
        </button>
      </div>
    </div>
*/

?>