<?php


// ----------------------------------------------        
// Print the top of the html file with bootstrap
// ---------------------------------------------- 
function printBootstrapTop($myCssPath, $myTitle) {
    
print
    "<!DOCTYPE html> \n".
    "<html lang='en'>\n".
    "<head> \n".
	"    <title>$myTitle</title> \n".
	"	<meta charset='utf-8'> \n".
	"	<meta name='viewport' content='width=device-width, initial-scale=1'> \n".
	"	<meta name='author' content='Alexander Solinger'> \n".
    "    <link rel='stylesheet' type='text/css' href='$myCssPath'> \n".
    "    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'> \n".
    "    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> \n".
    "    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> \n".
    "    <script src='./js/asg12.js'></script> \n".
	"</head> \n".
    "<body class='myBody'> \n" ;
}

// -------------------------------------
// print the bottom of the html file
// -------------------------------------
function printBottom() {

    print
    
        "\n</body> \n".
        "</html> \n";
}