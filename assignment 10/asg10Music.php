<?php

// In this session example we first check if the user is logged in.  If so,
// we give the user the option of selecting a song to purchase.  If the user
// is not logged in, we display a message telling the user to log in and
// give the user a link to the login page.

  require 'phpAsg10Helper.php';
  session_start();
  printBootstrapTop("./css/asg10.css", "Assignment 10", "Music Shop");
  printTop();

  print "<h2>Music Shop - Music Selection</h2> \n";

  // Is the loggedIn session variable set?
  if ($_SESSION['loggedIn'] == 1) {

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
      print "<br>Try to log in again.  Click: <a href='./asg10Login.php'>here</a> \n";
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
        "           <p><form action='asg10CheckOut.php' method='post'> \n" .
        "               <select name='songs' size = '4'> \n".
        "                   <option value='ladyGaga'>Lady Gaga - Till It Happens To You</option> \n".
        "                   <option value='taylorSwift'>Taylor Swift - Bad Blood</option> \n".
        "                   <option value='asleepAtTheWheel'>Asleep At The Wheel - Faded Love</option> \n".
        "                   <option value='groupFantasma'>Groupo Fantasma - Nada</option> \n" .
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



?>