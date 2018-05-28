# **COSC 2328**
### **Web Programming Assignment #10**
**Due Date:** See the assignment #10 due date in Canvas

This assignment will consist of three php files. You will also need to create a new CSS file or reuse a CSS file from a previous assignment. Starter files are available for you to use. They are [sessionExample1.php](http://www.jbryan2.create.stedwards.edu/cosc2328/sessionExample1.php) and [sessionExample2.php](http://www.jbryan2.create.stedwards.edu/cosc2328/sessionExample2.php). Text versions are [here](http://www.jbryan2.create.stedwards.edu/cosc2328/sessionExample1.txt) and [here](http://www.jbryan2.create.stedwards.edu/cosc2328/sessionExample2.txt). You will need to create your own third file (asg10CheckOut.php).

See below for complete description.

* asg10Login.php - Creates a PHP session and allows a user to login with a username and password. This file should authenticate the username and password. If the username and password are correct, set the session variable for 'loggedIn' to 1, tell the user they have successfully logged in and present a link to the asg10Music.php page. If the username and password are incorrect, set the session variable for 'loggedIn' to 0. Much of this has already been done for you in the sessionExample1.php code provided by the instructor.

* asg10Music.php - Retrieve the session 'loggedIn' value to deterime if the user has already logged in. If the session variable for 'loggedIn' equal 1, the user is logged in, so display the music selection form. If the user is not logged in, tell the user he/she needs to log in before selecting music. Do not display the music form but rather provide a link to the asg10Login.php file. Much of this has been done for you in sessionExample2.php. You will need to change this file to submit the music selected to asg10CheckOut.php.

* asg10CheckOut.php - You will need to write this entire file. Verify that the username and password are correct by checking the session variable for 'loggedIn' and make sure it is set to 1. If not, tell the user he/she is not logged in and give the user a link to the asg10Login.php file.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the user is logged in, check the $_POST variable for the selected song and calculate the price. Display the selected song name and the cost.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the song selected is the Lady Gaga song, the cost is $1.00. If the song selected is the Taylor Swift song, the cost is $2.00. If the song selected is the Asleep At The Wheel song, the cost is $3.00 and if the selected song is the Groupo Fantasma song it is $4.00. Calculate a 10% tax and show the initial cost, tax and total.

* **Page Formatting and Consistent Look** - You should have nicely formatted web pages. Make sure the files all use the same CSS and have similar colors and formatting (Hint: Use the same CSS file for all three files.) You can use PHPHelpers or Bootstrap. Note: You may need to change the formatting on asg10Login.php and asg10Music.php. The professional look of these pages will be 10% of your grade.
Note: For the purpose of this assignment, it is ok to hard-code the correct username and password in your php files. You should NEVER do this in the real world. For the next assignment we will authenticate the username and password in a database, which is the correct way to do this.

Submit your files to Canvas as text files with a .txt extension. RTF files or DOC files or any file type other than text will not be accepted. Add a link to this assignment on your index.html page. Failure to add a link for this assignment to your home page will result in a zero for the assignment. No exceptions.
