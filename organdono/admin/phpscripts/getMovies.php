<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once("connect.php");

	if(isset($_GET['srch'])){//change srch to match url
		$srch = $_GET['srch'];
		$movieQuery= "SELECT movies_id, movies_title, movies_thumb, movies_year FROM tbl_movies WHERE movies_title LIKE '$srch%' ORDER BY movies_title ASC";
		$getMovies= mysqli_query($link, $movieQuery);
	}else{
		$movieQuery= "SELECT movies_id, movies_title, movies_thumb, movies_year FROM tbl_movies ORDER BY movies_title ASC";
		$getMovies= mysqli_query($link, $movieQuery);
	}
	$jsonResult= "[";
	while($movResult = mysqli_fetch_assoc($getMovies)) {
		$jsonResult.=json_encode($movResult).","; //remember to remove last comma
	}
	$jsonResult.= "]";
	$jsonResult = substr_replace($jsonResult,'',-2,1);
	//substr_replace(string,what to replace it with,where to start,number of characters to replace )
	echo $jsonResult;
?>