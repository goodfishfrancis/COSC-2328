<?php
require 'phpAsg10Helper.php';
session_start();
printBootstrapTop("./css/asg10.css", "Assignment 10", "Music Shop");
printTop();


// Verify that the username and password are correct by checking the session 
// variable for 'loggedIn' and make sure it is set to 1. If not, tell the user
// he/she is not logged in and give the user a link to the asg10Login.php file.
if($_SESSION['loggedIn']!=1)
{   
    print "Sorry, you must be logged in to checkout...\n".
          "Click <a href='./asg10Login.php'>here</a> to continue </p> \n";
    
    
}

//If the user is logged in, check the $_POST variable for the selected song and
// calculate the price. Display the selected song name and the cost.
else
{
    if (isset($_POST['songs'])) {

      $selected_artist = $_POST['songs'];
      
      printCheckOut($selected_artist);

    }
}

printBottom();


// --------------------------------------------------
// Prints a checkout information
// --------------------------------------------------
function printCheckOut($song_artist)
{
    if ($song_artist == "ladyGaga")
    {
        $song = "Lady Gaga - Till It Happens To You";
        $cost = 1.00;
    }
    
    else if ($song_artist == "taylorSwift")
    {
        $song = "Taylor Swift - Bad Blood";
        $cost = 2.00;
    }
    
    else if ($song_artist == "asleepAtTheWheel")
    {
        $song = "Asleep At The Wheel - Faded Love";
        $cost = 3.00;
    }
    
    else if ($song_artist == "groupFantasma")
    {
        $song = "Groupo Fantasma - Nada";
        $cost = 4.00;
    }
    
    $tax = $cost * 0.10;
    $total = $cost + $tax;
    
    print "<div class='row'> \n".
          "    <div class='col-xs-10 col-xs-offset-1'> \n".
          "        <div class='infoCard'> \n".
          "            <p> Song: ". $song . "</br>".
          "                Price: $". number_format($cost, 2) . "</br>".
          "                Tax: $". number_format($tax, 2) . "</br>".
          "                Total: $". number_format($total, 2) . "</br>".
          "            </p>".
          "        </div> \n".
          "    </div> \n".
          "</div> \n";
    
}

//=======================================================
// printTop()
// Prints the heading of the webpage
//=======================================================
function printTop() {
    print
        "  <div class='container-fluid'> \n".
        "      <div class='page-header'> \n".
        "          <div class='row'> \n".
        "              <div class='col-xs-12'> \n".
        "                  <h1>Music Shop Checkout</h1> \n".
        "              </div> <!--/col-xs-12--> \n".
        "          </div> <!-- /row --> \n".
        "      </div> <!-- /page-header --> \n";

}



?>