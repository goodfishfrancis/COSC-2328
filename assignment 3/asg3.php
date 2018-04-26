<?php

printTop();

print
 "<!--  body of document starts here  --> \n".
 "<body> \n".
 "<div class='heading'> \n".
 "<h1>  Alexander Solinger's COSC 2328 Homepage </h1> \n".
 "</div> \n".
 "<div class='content'> \n".
 "<!--  row & column start here --> \n".
 "<div class='row'> \n".
 "<div class='column is-5'> \n".
       
 "<div class='infoCard'> \n".
 "<h3> My major </h3> \n".

 "Computer Science \n".
 "</div> \n".
    
 "<div class='infoCard'> \n".
 "<h4> My Interests </h4> \n".
 "<ul> \n".
 "<li> Movies </li> \n".
 "<li> Coding </li> \n".
 "<li> Watches </li> \n".
 "<li> Art    </li> \n".
 "<li> My dog </li> \n".
 "</ul> \n".
 "</div> \n".
    
 "<div class='infoCard'> \n".
 "<h4> Some helpful links: </h4> \n".
 "<a href='http://validator.w3.org'> html validator </a> \n".
 "<br /><br /> \n".
 "<a href='http://w3schools.com/html/default.asp'> html reference </a> \n".
 "<br /><br /> \n".
 "<a href='http://w3schools.com/css/default.asp'> css reference </a> \n".
 "<br /><br /> \n".
 "<a href='http://jbryan2.create.stedwards.edu/cosc2328/cosc2328-schedule.html'> cosc 2328 schedule </a> \n".
 "<br /><br /> \n".
 "<a href='http://codeacademy.com/learn/all'> html/css/javascript/SQL practice </a> \n".
 "<br /><br /> \n".
 "<a href='http://gitHub.com'> gitHub </a> \n".
 "</div> \n".
    
 "<div class='infoCard'> \n".
 "<h4> cosc 2328 assignments </h4> \n".
 "<a href='./index.html'> Assignment #1</a> \n".
 "<br /><br /> \n".
 "<a href='./asg2.php'> Assignment #2</a> \n".
 "<br /><br /> \n".
 "<a href='./asg3.php'> Assignment #3</a> \n".
 "</div> \n".
    
 "</div>  \n".
 "<!--End of first column--> \n".
   
 "<!--Second Column starts here--> \n".
 "<div class='column is-7'> \n".
 "<div class='infoCard'> \n".
 "<h3 id='imgHeader'>My flying dog, Boru!</h3> \n".

 "<img class='image' src='./images/boruJump3.JPG' alt='My flying dog, Boru'/> \n".
 "</div> \n".
 "</div> \n".
 "<!--End of second column--> \n".
 "</div> \n".
 "<!--End of row--> \n".

 "<div class='clear'></div> \n".
 "<p class='footer'> \n".
 "St. Edward&apos;s University .:. cosc 2328 - web programming .:. fall 2017 \n".
 "</p> \n".
 "</div> \n";
    
printBottom();

# ------------------------------------------------------------
# printBottom() - Prints the bottom part of the web page
# ------------------------------------------------------------
function printBottom() {
  print
    "<!--  end of content  --> \n".

    "</body> \n".
    "</html> \n";
}

# ------------------------------------------------------------
# printTop() - Prints the head of the documment
# ------------------------------------------------------------
function printTop() {
    print
     "<!DOCTYPE html> \n".
     "<html lang='en'> \n".
     "  <head> \n".
     "    <meta charset='utf-8'> \n".
     "    <meta name='viewport' content='width=device-width, initial-scale=1.0'> \n".
     "    <meta name='description' content='Assignment #1 COSC 2328'> \n".
     "    <meta name='author' content='Alexander Solinger'> \n".
     "    <link rel='icon' href='../favicon.ico' type='image/x-icon'> \n".
     "    <!--  style sheet linked in here  --> \n".
     "    <link rel='stylesheet' href='./css/start.css' type='text/css' /> \n".

     "    <!--  change page title here  --> \n".
     "    <title>  Alexander Solinger COSC 2328 Home Page  </title> \n".

     "  </head>";
}

?>
