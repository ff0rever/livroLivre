<?php

	include "includes/conecta.php";
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM livros WHERE id = $id";
	
	$res = mysqli_query($conn, $sql);
	
	header("Location: listalivros.php");