<?php

function single_edit($tbl,$col,$id){
	$result = getSingle($tbl,$col,$id);
	$getResult = mysqli_fetch_array($result);

	echo "<form action=\"phpscripts/edit.php\" method=\"post\">";
	echo "<input hidden class='hidden' type=\"text\" name=\"tbl\" value=\" {$tbl}\">";
	echo "<input hidden class='hidden' type=\"text\" name=\"col\" value=\" {$col}\">";
	echo "<input hidden class='hidden' type=\"text\" name=\"id\" value=\" {$id}\">";

	for($i=0; $i<mysqli_num_fields($result); $i++){

		$dataType = mysqli_fetch_field_direct($result,$i);
		//echo $dataType;
		$fieldName = $dataType->name;
		$fieldType = $dataType->type;
		//echo $fieldName;
		//echo $fieldType."<br>";
		if($fieldName != $col){
			//echo "<label>{$fieldName}</label><br>";
			if($fieldType != 253) {
				echo "<input  type=\"text\" name=\"{$fieldName}\" value=\"{$getResult[$i]}\"><br><br>";
			}else{
				echo "<img src=\"../{$getResult[$i]}\" id='{$fieldName}' width='200'>";
				echo "<textarea class='textAr' name=\"$fieldName\">{$getResult[$i]}</textarea><br><br>";
			}

		}

	}
	//echo mysqli_num_fields($result);

	echo "<input class='btnStyle' id='subBtn3' type=\"submit\" value=\"Edit Content\">
	</form>";
}

?>
