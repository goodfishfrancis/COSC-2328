# COSC 2328

Web Programming Assignment #5
**Due Date:** See Canvas; Link off your class web page on Reclaim and posted to Canvas 
For this assignment, you will create your own website blog in php. This blog allows you (or anyone else actually) to add an entry to your blog. When your page is loaded, it should display the current blog (with timestamps for each entry), and should allow anyone to add a blog entry. There should be a way to remove all entries from the blog (a button perhaps). When that button is chosen, your script should confirm that all entries will be cleared. Do not add any entries that are empty strings or that do not have any text in them. Here is the [page logic](http://www.jbryan2.create.stedwards.edu/cosc2328/asgBlog.txt) we went over in class. Here is a [working blog](http://www.jbryan2.create.stedwards.edu/cosc2328/blog.php) that includes remove a single chosen entry which your blog does not need to have.

Be sure your blog page is linked on your cosc 2328 home page as 'assignment #5'. **If no link is found on your home page you will receive a zero for the assignment**. You will use a text file to store the contents of your blog. You'll need to use some sort of delimiter (separator) for the various pieces of information you store on your flat file.

Be sure that your blog page validates for html5.

###**Your SINGLE (1 file only) php script must meet the following requirements to receive full credit**:
1. An appropriate title must appear on the page document and on the page itself.
2. The page must use a style sheet and have a nice, neat, clean, web appropriate style. Using Bootsrap is recommended but not required.
3. The page must validate for html5 (both form and resulting submission of data pages)
4. Your blog page must be linked from your home page under your cosc2328 directory on the Canvas server as asg#5. 
(if no link is found on your home page a zero will be assigned, no exceptions.)
5. The script must handle BOTH original page load and submission of data and it must check for empty data. Do not store an entry if its empty. You may only have 1 single php file (script) that handles ALL of the pages that you are displaying.
6. **UPLOAD to Canvas** under assignment 5 a single text file, asg5.txt that contains your php script, including any additional scripts of functions that your original script is using. Make sure you document any methods(functions) that you write. Make sure you upload all of your php code (possibly 2 or more scripts) as a single text file with the name of the file ending in .txt
7. Do NOT turn in your files in a zip file. Do NOT turn in your files in a format other than text. If I receive a .docx, .rtf or .pages file with your PHP or CSS source code you will receive a zero. No exceptions.
##**Hints**:
###**Hint #1 - You will need a blog entry form**

```

<form action='blog.php' method='post'>

    Blog Entry:<br>

    <textarea rows='4' cols='50' name='blog' required class='mytext' maxlength='200'></textarea>

    <br /><input type = 'submit' value = 'submit'>

</form>

```
###__Hint #2 - You will need a form for the add and remove buttons__
[Here](http://www.jbryan2.create.stedwards.edu/cosc2328/sampleForms4.php) is an example of how to handle the 'add' and 'remove' blog buttons

[Here](http://www.jbryan2.create.stedwards.edu/cosc2328/sampleForms4.php.txt)is the text version of the php file above

###**Hint #3 - You will need to know how to open, write and read from a file**
See the name phone number example [here](http://www.jbryan2.create.stedwards.edu/cosc2328/phpFileSample.php)

[Here](http://www.jbryan2.create.stedwards.edu/cosc2328/phpFileSample.txt) is the text version of the name phone example above

###**Hint #4 - Delete the Blog file**
```

// ========================================
// clearAll()
// If the blog file exists, delete it
// ========================================
function clearAll() {

    if (file_exists("blog.txt")) {
        if (!unlink("blog.txt")) {
            print "Error deleting blog.txt";
        }
    }
    else {
        print "The file does not exist.";
    }
}

```
                
###**Hint #5 - Get the current date time**
```

    // Get the current time
    date_default_timezone_set("America/Chicago");

    // Get the current date to put in the entry
    $myDate = date("Y-m-d");
    $myTime = date("h:i:sa");

    // Format the date, the blog entry and a newline character
    $myText = $myDate . " " . $myTime . "
 " . $myText . "
\n";

```

**BONUS Challenge 20pts**: Provide a delete button similar to the blog script I showed in class, blog.php, you may even have the user input the blog entry number that they wish to remove (of course then each entry has to be numbered...). Be sure the blog entries always remains sorted in order after the delete . When you upload your code text file, be sure to let me know you are attempting the bonus challenge so I can test it properly.
