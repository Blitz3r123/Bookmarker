<?php
	$link = mysqli_connect("localhost", "root", "1234", "islamunited");

	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$book_title = mysqli_real_escape_string($link, $_REQUEST['book_title']);
	$book_page = mysqli_real_escape_string($link, $_REQUEST['book_page']);
	$book_verse = mysqli_real_escape_string($link, $_REQUEST['book_verse']);

	$sql = "INSERT INTO bookmarks(BookmarkBook, BookmarkPage, BookmarkVerse) VALUES('$book_title', $book_page, $book_verse)";

	if(mysqli_query($link, $sql)){
		header("Location: view_bookmarks.php");
		exit();
	}else{
		echo "Could not execute $sql. " . mysqli_error($link);
	}

	mysqli_close($link);
?>