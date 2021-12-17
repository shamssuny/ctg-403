<!DOCTYPE html>
<html>
<head>
	<title>Form Class</title>
</head>
<body>

		<h2>Hello Form</h2>
		
		<?php

		if(isset($_POST['submit'])){
			
			// $tmp_name = $_FILES['image']['tmp_name'];
			// $imgName = uniqid().'.jpg';

			// if($_FILES['image']['size'] < 1000000){
			// 	move_uploaded_file($tmp_name, "asset/".$imgName);

			// 	echo "Uploaded";	
			// }else{
			// 	echo "Image Size must be less than 1 mb";
			// }
			unlink("asset/61b373090f573.jpg");
			
		}

		?>
		<form action="" method="POST" enctype="multipart/form-data">
			
			
			<input type="file" name="image">

			<input type="submit" name="submit" value="Submit">

		</form>


</body>
</html>