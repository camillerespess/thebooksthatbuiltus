<?php

include 'database.php';

// use of prepared statements - SQL

// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

// ensure that form values were received
if (isset($_POST['book']) && isset($_POST['author'])) {

    // sanitizeMySQL() is a custom function, written below
    $book = sanitizeMySQL($conn, $_POST['book']);
    $author = sanitizeMySQL($conn, $_POST['author']);
    $importance = sanitizeMySQL($conn, $_POST['importance']);

    // create a PHP timestamp
    //  date_default_timezone_set('America/New_York');
    // $date = date('m-d-Y', time());

    // the prepared statement - note: 3 question marks represent
    // 3 variables we will send to database separately
    $query = "INSERT INTO books (book, author, importance)
    VALUES (?, ?, ?)";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        // bind the values to replace the 3 question marks
        // note that 6 letters in 'sssids' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'sss',
        $book,
        $author,
        $importance
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
    echo "New record for " . $book . " entered successfully.";
} else {
    echo "Failed to enter new record!";
} // end of isset if-statement

?>
