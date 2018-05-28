<?php

    include('../adodb519/adodb5/adodb.inc.php');
    require 'phpAsg11Helper.php';
    session_start();
    printBootstrapTop("./css/asg10.css", "Assignment 11", "Music Shop");
    
    // Create a connection handle to the local database
    $db = ADONewConnection('mysql');  
    
    // Open a connection -- pass in the localhost, username, 
    //password and database name 
    $db->PConnect('localhost',      // mysQL on the local machine
    'asolinge_phpU',             // DB Username
    'cosc2328',                     // Password
    'asolinge_cosc2328');           // Database name
    
    //$sql = "select userName, userPassword from users where userName = "."Lady Gaga"."'";
    
    // query database for the username & password
    $rs = $db->Execute('select userName, userPassword from users');
    
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
           $dbUser = $rs->fields['userName']; 
           $dbPassword = $rs->fields['userPassword']; 
           //print '<p>User: ' . $dbUser; 
           //print '<br />Password: ' . $dbPassword . '</p>'; 
           $rs->MoveNext(); 
        } 
        
        //var_dump($dbUser);
        //var_dump($dbPassword);
    }
    
    printTop($db);
    
    if ($_SESSION['loggedIn'] == 1)
    {
        print "<div class='infoCard'><p>Click <a href='./asg11Music.php'>here</a> to continue </p></div> \n";
    }

    // Do we have a post with a userName and Password?
    else if(isset($_POST['btnLogin'])) 
    {

        // Get the userName and Password
        $formUserName = $_POST['userName'];
        $formUserPassword = $_POST['userPassword'];
        $hashPassword = hash("sha256", $formUserPassword);
        
        //var_dump($formUserName);
        //var_dump($formUserPassword);
        //var_dump($hashPassword);

        // Do not save the username and password in the session.
        // Instead, authenticate and if username and password.
        // Set a login value to 1 for logged in, and 0 for not logged in.
        // In other words, 1 for when username and password are correct and
        // 0 for when they are not correct.
        if ($formUserName == $dbUser and $hashPassword == $dbPassword) 
        {
            $_SESSION['loggedIn'] = 1;
            print "<div class='infoCard'><p>Log in successful!  Click <a href='./asg11Music.php'>here</a> to continue </p></div> \n";
        }

        // Handle incorrect username and password case
        else {
            $_SESSION['loggedIn'] = 0;
            print "<p>Login failed.  Try user: 'Lady Gaga' and password 'Secret'</p> \n";
            printloginForm($db);
        }
    }

    // If the Log Out button was pushed, then set the session to show logged Out
    else if (isset($_POST['btnLogout'])) {
        $_SESSION['loggedIn'] = 0;
        print("<p>The user is logged out.</p>");
        printloginForm();
    }

    // If we don't have the username and password posted, print the login form
    //
    else {

        printLoginForm($db);
    }

    printBottom();

// -------------------------------------------------------
// Print the login form for userName and userPassword
// -------------------------------------------------------
function printloginForm($db) {

print
    "<div class='row'> \n".
    "   <div class='col-xs-10 col-xs-offset-1'>\n".
    "       <div class='infoCard'> \n".
    "           <form action='asg11Login.php' method='post'>\n" .
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
function printTop($db) {
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