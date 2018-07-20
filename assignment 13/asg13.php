<?php
include('../adodb519/adodb5/adodb.inc.php');
require 'phpAsg12Helper.php';

printBootstrapTop('./css/asg12.css', 'Assignment 12: Ajax Example');

printTop();

printSelection();

print 
    "  </div> <!--end container-fluid--> \n";

printBottom();

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
        "                  <h1>Things To Do in Austin, Tx</h1> \n".
        "              </div> <!--/col-xs-9--> \n".
        "          </div> <!-- /row --> \n".
        "      </div> <!-- /page-header --> \n";
       
}

//=======================================================    
// printSelection()
// Prints the heading of the webpage
//=======================================================
function printSelection() {
    print
        "    <div class='row'> \n".
        "       <div class='col-xs-10 col-xs-offset-1' id='selectBox'> \n".
        "           <h3>Make A Selection</h3> \n".
        "               <select name='choices' id='choices' size = 4> \n".
        "                   <option value='restaurants'> Restaurants </option> \n".
        "                   <option value='entertainment'> Entertainment </option> \n".
        "                   <option value='theatres'> Theatres </option> \n".
        "               </select> \n".
        "           <br /><br /><button class='myButton' type='button' onclick='showTable()'>Find</button> \n".
        "           <p id='myAustin'> \n".
        "               Items will be listed here... \n".
        "           </p> \n".
        "       </div> \n".
        "    </div> \n";
                   
}

