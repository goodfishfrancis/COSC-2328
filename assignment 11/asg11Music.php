<?php

// In this session example we first check if the user is logged in.  If so,
// we give the user the option of selecting a song to purchase.  If the user
// is not logged in, we display a message telling the user to log in and
// give the user a link to the login page.

  include('../adodb519/adodb5/adodb.inc.php');
  require 'phpAsg11Helper.php';
  session_start();
  printBootstrapTop("./css/asg10.css", "Assignment 11", "Music Shop");
  
  printTop();
  
  print "<h2>Music Shop - Music Selection</h2> \n";

  // Is the loggedIn session variable set?
  if ($_SESSION['loggedIn'] == 1) 
  {

    printSongForm();

    // If the user has selected a song and submitted, tell the user which
    // song was selected.
    if (isset($_POST['songs'])) {

      print "<p>Option value selected is: " . $_POST['songs'] . "</p> \n";
      print "<p>Note: This is the value of the select option, not the complete string of the song</p> \n";

    }
  }
  // If we are not logged in, tell the user and provide a link back to the login page
  //
  else {
      print "<br>It appears you are not logged in.\n";
      print "<br>Try to log in again.  Click: <a href='./asg11Login.php'>here</a> \n";
  }

  printBottom();

// --------------------------------------------------
// Prints a form with a drop down listbox  for songs.
// --------------------------------------------------
function printSongForm() {

    print
        "<div class='row'> \n" .
        "   <div class='col-xs-10 col-xs-offset-1'> \n".
        "       <div class='infoCard'> \n".
        "           <p><form action='asg11CheckOut.php' method='post'> \n" .
        "               <select name='songs' size ='10'> \n";
    getSongInfo();
    
    print
                 
        "               </select> \n" .
        "               <br><br> \n" .
        "               <input type='submit'> ".
        "           </form> \n" .
        "       </div> \n".
        "   </div> \n".
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
        "                  <h1>Music Shop</h1> \n".
        "              </div> <!--/col-xs-12--> \n".
        "          </div> <!-- /row --> \n".
        "      </div> <!-- /page-header --> \n";

}

//=======================================================
// getSongTable()
// Gets song information from database
//=======================================================
function getSongInfo(){
    
    // Create a connection handle to the local database
    $db = ADONewConnection('mysql');  
    
    // Open a connection -- pass in the localhost, username, 
    //password and database name 
    $db->PConnect('localhost',      // mysQL on the local machine
    'asolinge_phpU',             // DB Username
    'cosc2328',                     // Password
    'asolinge_cosc2328');           // Database name
    
    // query database for the username & password
    $rs = $db->Execute('select songId, artist, songName from songs');
    
    // Make sure we have results 
    if ($rs == false) 
    { 
        
        print 
            ' select failed \n '; 
    }  
    
    else
    {
    
        while (!$rs->EOF) 
        { 
            $songId = $rs->fields['songId']; 
            $artist = $rs->fields['artist'];
            $songName = $rs->fields['songName']; 
            print "                      <option value="."'".$songId."'".">".$artist." - ".$songName."</option> \n";
            $rs->MoveNext();
           
        }
    }   
}



?>