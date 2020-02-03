<?php
	include 'database.php';
	$query = "SELECT * FROM books ORDER BY 'book'";
	$books = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> the books that built us - inventory </title>
	<link rel="stylesheet" href="css/table.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="icon"
			type="image/png"
			href="images/letter.jpg">
</head>

<body>
<div id="container">
<table>
	<h1>a collection of the books that built us</h1>
	<!-- table column headings -->
	<tr>
	  <th>name of the book.</th>
	  <th>author.</th>
	  <th>why is this book important?</th>
	</tr>

<?php while ($row = mysqli_fetch_assoc($books)) :  ?>

<tr>
<td><?php echo $row['book']; ?></td>
<td><?php echo $row['author']; ?></td>
<td><?php echo $row['importance']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
	 everything else on this page is normal HTML -->
</table>
<p><a href="enter_new_record.php">add your favorite book from childhood to the list.</a></p>
 <p><a href="index.html">back to home.</a></p>
</div> <!-- close container -->
</body>
</html>
