<?php

    require 'phpAsg10Helper.php';
    session_start();
    printBootstrapTop("./css/asg10.css", "Assignment 10", "Music Shop");
    printTop();

    // Do we have a post with a userName and Password?
    if (isset($_POST['btnLogin'])) {

        // Get the userName and Password
        //
        $userName = $_POST['userName'];
        $userPassword = $_POST['userPassword'];

        // Do not save the username and password in the session.
        // Instead, authenticate and if username and password.
        // Set a login value to 1 for logged in, and 0 for not logged in.
        // In other words, 1 for when username and password are correct and
        // 0 for when they are not correct.
        if ($userName == 'Lady Gaga' and $userPassword == 'Secret') {
            $_SESSION['loggedIn'] = 1;
            print "<div class='infoCard'><p>Log in successful!  Click <a href='./asg10Music.php'>here</a> to continue </p></div> \n";
        }

        // Handle incorrect username and password case
        else {
            $_SESSION['loggedIn'] = 0;
            print "<p>Login failed.  Try user: 'Lady Gaga' and password 'Secret'</p> \n";
            printloginForm();
        }
    }

    // If the Log Out button was pushed, then set the session to show logged Out
    elseif (isset($_POST['btnLogout'])) {
        $_SESSION['loggedIn'] = 0;
        print("<p>The user is logged out.</p>");
        printloginForm();
    }

    // If we don't have the username and password posted, print the login form
    //
    else {

        printLoginForm();
    }

    printBottom();

// -------------------------------------------------------
// Print the login form for userName and userPassword
// -------------------------------------------------------
function printloginForm() {

print
    "<div class='row'> \n".
    "   <div class='col-xs-10 col-xs-offset-1'>\n".
    "       <div class='infoCard'> \n".
    "           <form action='asg10Login.php' method='post'>\n" .
    "               <div class='mySpacing'>Name:</div> <input type='text' name = 'userName' maxlength='20'></td>\n" .
    "               <br /><div class='mySpacing'>Password:</div> <input type='text' name = 'userPassword' maxlength='8'></td> \n" .
    "               <br /><div class='mySpacing'></div><input type='submit' name='btnLogin' value='Log In' ></td> \n ".
    "               <input type='submit' name='btnLogout' value='Log Out'></td>\n".
    "           </form> \n" .
    "       </div> \n".
    "   </div>\n".
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
        "                  <h1>Music Shop Login</h1> \n".
        "              </div> <!--/col-xs-12--> \n".
        "          </div> <!-- /row --> \n".
        "      </div> <!-- /page-header --> \n";

}

?>