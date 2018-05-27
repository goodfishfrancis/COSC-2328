<?php
require 'phpHelpers.php';

printBootstrapTop('./css/asg5.css', 'File IO' , 'COSC 2328 Blog');

printTop();

printButtonsForm();

if (isset($_POST['btnAdd'])) {
    printBlogEntryForm();
}
if (isset($_POST['btnRemove'])) {
    clearAll();
}
if (isset($_POST['blog'])) {
    $blog = $_POST['blog'];
    writeToFile($blog);
}
displayBlogItems();
if (isset($_POST['btnRemove'])) {
    clearAll();
}

print
    "   <div class='row'> \n".
    "       <div class='col-xs-12'> \n".
    "           <p class='footer'> \n".
    "               St. Edward&apos;s University .:. cosc 2328 - web programming .:. fall 2017 \n".
    "           </p> \n".
    "       </div> \n".
    "   </div> \n".
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
        "                  <h1>Alexander's COSC 2328 Blog</h1> \n".
        "              </div> <!--/col-xs-12--> \n".
        "          </div> <!-- /row --> \n".
        "      </div> <!-- /page-header --> \n";

}

//=======================================================
// printButtonsForm()
// Prints the add and remove buttons on the web page
//=======================================================
function printButtonsForm() {

    // Add the Form for the push buttons
    // Does not include form handling
    print
        "       <div class='row'> \n".
        "           <div class='col-xs-8 col-xs-offset-2'> \n".
        "               <form action='asg5.php' method='post'>\n".
        "                   <input type='submit' name='btnAdd' value='Add Item' >\n".
        "                   <input type='submit' name='btnRemove' value='Remove All'>\n".
        "               </form> \n".
        "           </div> <!--/col-xs-8--> \n".
        "           <div class='col-xs-2'></div> \n".
        "       </div> <!--/row--> \n";
}

//=======================================================
// printBlogEntryForm()
// Prints the heading of the webpage
//=======================================================
function printBlogEntryForm() {

    print
        "       <div class='row'> \n".
        "           <div class='col-xs-8'> \n".
        "               <form name='myForm' action='http://www.asolinge.create.stedwards.edu/cosc2328/asg5.php' method='post'> \n".
        "                   Blog Entry:<br> \n".
        "                   <textarea rows='4' cols='50' name='blog' required class='mytext' maxlength='200'></textarea> \n".
        "                   <br /><input type = 'submit' value = 'submit'> \n".
        "               </form> \n".
        "           </div> <!--/col-xs-8--> \n".
        "           <div class='col-xs-4'></div> \n".
        "       </div> <!--/row--> \n";
}

//=======================================================
// writeToFile()
// writes blog entry to file
//=======================================================
function writeToFile($blog) {

    // open file for append mode
    $myFile = fopen("blog.log", "a") or die("Error!");

    // get current date to put in entry
    // Get the current time
    date_default_timezone_set("America/Chicago");

    // Get the current date to put in the entry
    $myDate = date("Y-m-d");
    $myTime = date("h:i:sa");

    // Format the date, the blog entry and a newline character
    $myText = $myDate . " " . $myTime . "<p class='blogEntry'>" . $blog . "</p>" . "\n";

    // Write to file and close
    fwrite($myFile, $myText);
    fclose($myFile);
}

//===========================================================
// displayBlogItems()
// check if the file exists and if so, open, read contents
// and print to screen.  Don't forget the <br>
//===========================================================
function displayBlogItems() {

    if (!file_exists("blog.log")) {
        return;
    }
    $myFile = fopen("blog.log", "r") or die("Unable to open file!");

    while (!feof($myFile)) {
        $npString = fgets($myFile);
        print "<br>" . $npString . "\n";

    }

    fclose($myFile);

}

// ========================================
// clearAll()
// If the blog file exists, delete it
// ========================================
function clearAll() {

    if (file_exists("blog.log")) {
        if (!unlink("blog.log")) {
            print "Error deleting blog.log";
        }
    }
    else {
        return;
    }
}


?>
