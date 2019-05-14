<?php
if (isset($_POST['staff_sdm'])){
	$staff_sdm=$_POST['staff_sdm'];
}
else{
	$staff_sdm=NULL;
}
if($staff_sdm!=NULL){
}
else{
	echo "Anda harus mengisi pertanyaan ini";
}
?>