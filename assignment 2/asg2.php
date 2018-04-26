<?php
print
    "<!DOCTYPE html>\n".
    "<body>\n".
    "<h1>Assignment 2: Form Test</h1>".
    "<p>Welcome! Please enter your information below: </p>".
    "<br />";
    
    if (isset($_POST['name'])) {
        print "Name Entered: ". $_POST['name'];
        print "<br>";
        print "Hometown Entered: ". $_POST['hometown'];
    }
    else {
        print
            "<form action='asg2.php' method='post'> \n".
            "Name: <input type='text' name='name'><br> \n".
            "Hometown: <input type='text' name='hometown'><br> \n".
            "<input type='submit'> \n".
            "</form> \n";
    }
print        
    "\n</body> \n".
    "</html>";

?>
