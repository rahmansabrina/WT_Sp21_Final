<?php	
	$server="localhost";
	$user="root";
	$password="";
	$db_name="wt_sp21_l";
		
	function execute($query){
		global $server,$user,$password,$db_name;
		$conn = mysqli_connect($server,$user,$password,$db_name);
		mysqli_query($conn,$query);
	}
	
	function get($query){
		global $server,$user,$password,$db_name;
		$conn = mysqli_connect($server,$user,$password,$db_name);
		$result = mysqli_query($conn,$query);
		$data = [];
		
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;	
	}	
?>