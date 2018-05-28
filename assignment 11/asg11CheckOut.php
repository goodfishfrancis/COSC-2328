<?php
include('../adodb519/adodb5/adodb.inc.php');
require 'phpAsg11Helper.php';
session_start();
printBootstrapTop("./css/asg10.css", "Assignment 11", "Music Shop");
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
    // Create a connection handle to the local database
    $db = ADONewConnection('mysql');  
    
    // Open a connection -- pass in the localhost, username, 
    //password and database name 
    $db->PConnect('localhost',      // mysQL on the local machine
    'asolinge_phpU',             // DB Username
    'cosc2328',                     // Password
    'asolinge_cosc2328');           // Database name
    
    // query database for the username & password
    $sql = "select artist, songName, price from songs where songId = '" . $song_artist . "'"; 
    $rs = $db->Execute($sql);
    
    // Make sure we have results 
    if ($rs == false) 
    { 
        
        print 
            ' select failed \n '; 
    }  
    
    else
    {
        $songId = $rs->fields['songId']; 
        $artist = $rs->fields['artist'];
        $songName = $rs->fields['songName']; 
        $price = $rs->fields['price'];
        
        $tax = $price * 0.10;
        $total = $price + $tax;
        
        print 
            "<div class='row'> \n".
            "    <div class='col-xs-10 col-xs-offset-1'> \n".
            "        <div class='infoCard'> \n".
            "            <p> Song: ". $artist . " - " . $songName . "</br>".
            "                Price: $". number_format($price, 2) . "</br>".
            "                Tax: $". number_format($tax, 2) . "</br>".
            "                Total: $". number_format($total, 2) . "</br>".
            "            </p>".
            "        </div> \n".
            "    </div> \n".
            "</div> \n";
    }   

    
    
    
    
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