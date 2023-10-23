<?php
	ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("phpscripts/init.php");
//confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit About Content</title>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link rel="stylesheet" href="css/foundation.css">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body>
<br>
<h1>Edit About Content</h1>
<br>
<p>Here you can edit About page text and images by making the appropriate changes in the text fields below.</p>
<br>
<p>*Note: Some text fields include "Span" tags which are responible for colour and size variations in the text,<br> span tag wrap around the edited text (The opening tag before and a closing tag after). Please do not edit the span tags,<br> except for to have the span tags effects apply to a different section of text.</p>
<section class="row center">
<div class="divWrap small-10 large-6 small-centered large-centered">
<?php
$tbl="tbl_pages2";
$col="pages2_id";
$id=1;
single_edit($tbl,$col,$id);

?>
</div>
</section>
</body>
</html>
