# COSC 2328
__Web Programming Assignment #13__ - Things To Do In Austin
__Due Date__: See Canvas; Post to your index.html web page and uploaded all files to Canvas. If no link to this assignment is found on your index.html page you will receive a zero. No exceptions.

__Summary__ For this assignment you will create a web page that displays things to do in Austin. You will display a listbox that has "Restaurants", "Theatres", and "Entertainment". The user will select one of the items and press a "Find" button. At least four of the associated items must be retrieved from the database and displayed. For example, if the user selects "Restaurants", you might display "Torchy's", "Chuy's", "Eddie V's" and "Mighty Fine". You must use Ajax, PHP, HTML and mySQL. You will also create some JQuery effects somewhere on the page.

__More Details__

- You will need an HTML file with the basic listbox and button. You can use my example HTML file and modify it as needed. 
The web page can be seen [here](http://www.jbryan2.create.stedwards.edu/cosc2328/asg13answer.html). 
The HTML for the page can be seen [here](http://www.jbryan2.create.stedwards.edu/cosc2328/asg13answer.html.txt).
- You will need the javascript file that uses Ajax. 
You can modify start with this file [here](http://www.jbryan2.create.stedwards.edu/cosc2328/js/asg13answer.js) and modify it as needed.
- You will create three tables in your instance of MySQL for this assignment. You can use your existing cosc2328 database and your existing phpUser. Create the tables: restaurants, theatres, entertainment. Each table will have two columns, id and description. All id columns should be data type of int and the other column should be varchar 40.
Use phpMyAdmin to create your tables and insert rows in each table.

You must insert at least four rows in each table using PHPMyAdmin.

- You will need a PHP file that connects to the database and selects data from the appropriate table, depending on which item was selected in the listbox. Notice that the javascript file sends a GET with the selection. The selection should correspond to your table name in your database. Your PHP file will need to determine which item was selected, formulate a query for the appropriate table, execute the query and print results back to the web page accordingly.
Assume you have submitted your selection (i.e., restaurant, theatre or entertainment) to your php file. You will need to forumlate a sql query accordingly to select from the database. For example, your restaurants table should have an id column and a description column. Your query would look as follows: "select description from restaurants". That will return all of the restaurants. In your while loop that processes return results, print the restaurants back to your web page.

- Add at least 2 jquery effects to the script so that it either works better or looks better. [Here](https://www.w3schools.com/jquery/jquery_ref_effects.asp) is a link to a jQuery API. You might try .fadeIn and .fadeOut, or .hover or any other effects that might enhance the output. Maybe add an image with your page and have it fade in or show/hide on a click. Another option is to use a jquery plug-in, such as a carousel. I suggest you get everything else working before you add the jquery effects
## To turn in your assignment
- Submit your files to Canvas as text files with a .txt extension.
- Add a link for this assignment to your main index.html file. If this link is missing or if you do not have an index.html file you will receive a zero for the assignment. No exceptions.
