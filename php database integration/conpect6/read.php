
<?php

$conn = mysqli_connect('localhost', 'marketf7_lokesh', '#Xka1ZJ$&QC[', 'marketf7_mailspot');
if($_POST){
	
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		
		$sql = "UPDATE ns_pahse SET `name`='$name',`email`='$email' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	
}
// if(count($_POST)>0){
// 	if($_POST['type']==3){
// 		$id=$_POST['id'];
// 		$sql = "DELETE FROM `student` WHERE id=$id ";
// 		if (mysqli_query($conn, $sql)) {
// 			echo $id;
// 		} 
// 		else {
// 			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// 		}
// 		mysqli_close($conn);
// 	}
// }
// if(count($_POST)>0){
// 	if($_POST['type']==4){
// 		$id=$_POST['id'];
// 		$sql = "DELETE FROM 'student' WHERE id in ($id)";
// 		if (mysqli_query($conn, $sql)) {
// 			echo $id;
// 		} 
// 		else {
// 			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// 		}
// 		mysqli_close($conn);
// 	}
// }
?>