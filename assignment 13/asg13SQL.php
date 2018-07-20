<?php
    require 'phpAsg12Helper.php';
    include('../adodb519/adodb5/adodb.inc.php');
    
    
    // Create a connection handle to the local database
    $db = ADONewConnection('mysql');  
        
    // Open a connection -- pass in the localhost, username, 
    //password and database name 
    $db->PConnect('localhost',      // mysQL on the local machine
    'asolinge_phpUser',             // DB Username
    'cosc2328',                     // Password
    'asolinge_cosc2328');           // Database name
    
    $selection = $_GET["selection"];
    if ($selection == "restaurants") {
        showRestaurants($db);
    }
    
    elseif ($selection == "entertainment")  {
        showEntertainment($db);
    }
    
    elseif ($selection == "theatres") {
        showTheatres($db);
    }
    
    // showRestaurants()
    // Just show the descriptions from the restaurants table
    //
    function showRestaurants($db) {
    
        print "<h3>Restaurants</h3 \n";
    
        // Format and execute a SQL statement
        //
        $sql = "select description from restaurants";
        $rs = $db->Execute($sql);
    
        $restaurant = "";
    
        // Make sure we have results
        //
        if ($rs == false) {
            print_r($rs);
            print "<br>SQL select failed \n";
        }
        else {
    
            print "<br />";
            // While rows are returned, store the values in local variables
            //
            while (!$rs->EOF) {
                $restaurant     = $rs->fields['description'];
                print "<br />" . $restaurant . "\n";
                $rs->MoveNext();
            }
        }
    }
    
    // showEntertainment()
    // Just show the descriptions from the Entertainment table
    //
    function showEntertainment($db) {
    
        print "<h3>Entertainment</h3> \n";
    
        // Format and execute a SQL statement
        //
        $sql = "select description from entertainment";
        $rs = $db->Execute($sql);
    
        $entertainment = "";
    
        // Make sure we have results
        //
        if ($rs == false) {
            print_r($rs);
            print "<br>SQL select failed \n";
        }
        else {
    
            print "<br />";
            // While rows are returned, store the values in local variables
            //
            while (!$rs->EOF) {
                $entertainment   = $rs->fields['description'];
                print "<br />" . $entertainment . "\n";
                $rs->MoveNext();
            }
        }
    }
    
    
    
    // showTheatres()
    // Show all rows and columns from the songs table
    //
    function showTheatres($db) {
    
        print "<h3>Theatres</h3> \n";
    
        // Format and execute a SQL statement
        //
        $sql = "select description from theatres";
        $rs = $db->Execute($sql);
    
        $theatre = "";
    
        // Make sure we have results
        //
        if ($rs == false) {
            print_r($rs);
            print "<br>SQL select failed \n";
        }
        else {
    
            // While rows are returned, store the values in local variables
            //
            while (!$rs->EOF) {
                $theatre   = $rs->fields['description'];
                print "<br />" . $theatre . "\n";
                $rs->MoveNext();
            }
        }
    }
?>