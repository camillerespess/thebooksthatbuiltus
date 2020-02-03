<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> the books that built us - enter yours </title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="icon"
        type="image/png"
        href="images/letter.jpg">
</head>
<body>
<div id="container">
<h1>the books that built us - enter yours</h1>

<div id="books">
<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="bookform" method="post" action="" autocomplete="off">

  <label for="booktitle">what's the name of the book?</label>
	<input type="text" name="book" id="book" maxlength="50" required>

  <label for="bookauthor">who wrote it?</label>
  <input type="text" name="author" id="author" maxlength="50" required>

  <label for="importance">in one sentence, why is this book important to you?</label>
  <input type="text" name="importance" id="importance" maxlength="400" required>

	<input type="submit" id="submit" value="submit">

  <p><a href="inventory_update.php">curious what other books have been submitted? view other responses.</a></p>
    <p><a href="index.html">back to home.</a></p>
</form>
<!-- close the form -->
</div> <!-- close #books -->
<!-- empty div -->
<div id="response"></div>
</div> <!-- close container -->
<script src="js/enter.js"></script>
</body>
</html>
