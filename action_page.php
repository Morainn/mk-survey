<?php 

if(isset($_POST['fill_btn'])){
	
	header('location:fill_in.php');

}else if(isset($_POST['results_btn'])){
	header('location:results.php');
}
?>