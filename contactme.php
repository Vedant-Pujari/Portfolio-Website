<html>
	<head>
		<style>
			.thanks{
				background-color: white;
    			border-radius: 10px;
    			width: 50%;
    			margin-left: 25%;
    			margin-top: 4%;
    			padding: 20px;
    			box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1); 
				font-family: Verdana, Geneva, Tahoma, sans-serif; 
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="thanks">
			<h1>Thank you for your feedback</h1>
		</div>
	</body>
	<?php 
		$name = $_POST["name"];
		$mail = $_POST["mail"];
		$message = $_POST["message"];

		$file = fopen("feedback.csv","a");

		if(filesize("feedback.csv")==0){
			fputcsv($file,["Name","Mail","Message"]);
		}

		fputcsv($file,[$name,$mail,$message]);

		fclose($file);
	?>
</html>