<meta charset="utf-8"></meta>
<?php
funcation PrintArr($arr,$sp="-->",$lin="</br>"){
	foreach($arr as $key => $value){
		echo "$key $sp $value $lin";
	}
}

?>