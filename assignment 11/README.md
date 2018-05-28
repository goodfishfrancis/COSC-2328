# **COSC 2328**
### **Web Programming Assignment #11**
**Due Date:** See Canvas; Post to your index.html web page and uploaded all fines to Canvas

**Working version of assignment #11:** http://jbryan2.create.stedwards.edu/cosc2328/asg11Login.php
**PHP and MySQL help for this assignment:** http://jbryan2.create.stedwards.edu/mysqlHowTo.html

**Overview:** For this assignment you will modify your Assignment 10 files to retrieve the username and password and the list of songs from a MySQL Database. You will also use hash values of the password instead of clear text passwords.

#### Detailed Instructions:
1. You must have completed assignment 10 for this project. If you have not finished assignment 10, please do so before starting assignment 11.
2. Copy your assignment 10 files to new assignment 11 files. asg10Login.php should be copied to asg11Login.php. asg10Music.php should be copied to asg11Music.php and asg10CheckOut.php should be copied to asg11CheckOut.php.
3. Create a new database on the Create website. The database should be named: 'yourUserName_cosc2328'. The user should be named: 'yourUsername_phpUser'. The database name must be 'cosc2328'. Directions for creating a database and the user can be found here
4. In the cosc2328 database create a table named 'users'. The database should have two columns. The first column should be 'userName' and it should be created as a 'varchar' data type with a 40 character size. The second column should be 'userPassword' and it should be a varchar data type with a size of 120
5. Create another table named 'songs'. This table should have four columns. 'songId' varchar 40. 'artist' varchar 40, 'songName' varchar 40 and 'price' float.
6. Install ADO on your Create instance. This will provide the API for your PHP program to access MySQL. Directions on downloading and installing ADO are found here.
7. Add at least one user to your 'users' table in your database. When you add the user, be sure to add the hash value of the password instead of the clear text password. You will be authenticating users based on the hash value. To get the hash value of the password, you can use the hashGen.php utility here: here. You will add the users and the hash values of the password to the database using PHPMyAdmin, which can be found on the Control Panel for Create.
8. Add the four songs to the 'songs' table in the MySQL database. You will change asg11Music.php to retrieve the songs from the database rather than have them coded in the asg11Music.php file.
9. Change your asg11Login.php file to authenticate the userName and password typed in the form by the user, against the userName and hashed password as found in the database. A sample of how to get the username and password from the database can be found here. Text version here. To see the Login, Music and CheckOut files run against the database, click here
10. Change your asg11Music.php file to access the list of songs from the database. Use the sample file for the login to see (see step above) how to connect to the database and query the data.
11. Change your asg11CheckOut.php file to query the database to retrieve correct price for the song.
12. Your files must use bootstrap and include suitable CSS for formatting and presentation. Points will be deducted if your web pages use different background colors and/or different CSS formatting. Use the same style sheet for all pages.
13. Investigate the built-in PHP function necessary to display money with dollars and cents (e.g. $3.00 instead of $3). Points will be deducted if money does not display properly.  

**Note:** You will need to write SQL queries in your PHP code to retrieve the data you need for the three web pages. For asg11Login.php, the PHP code to create your query should look something like this: 
```php
$sql = "select userName, userPassword from users where userName = '" . $userName . "'"; 
```
For asg11Music.php, the PHP code to query the list of songs should look something like this: 
```php
$sql = "select songId, artist, songName from songs"; 
```
For asg11CheckOut.php, the PHP code to query the price of songs should look something like this: 
```php
$sql = "select artist, songName, price from songs where songId = '" . $song . "'";   
```

### To turn in your assignment
Rename your .php files to .txt and submit ALL files to Canvas
Add a link to asg11Login.php file to your main index.html file. If this link is missing or if you do not have an index.html file you will receive a zero for the assignment. No exceptions.
