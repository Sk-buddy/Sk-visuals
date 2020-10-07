<?php

include 'database conn.php';

if (isset($_POST["Submit"])) 
{
	$Name = $_POST["name"];
	$mail = $_POST["email"];
	$contact = $_POST["contact"];
	$business = $_POST["client_business"];
	// $website = $_POST["client_website"];
	$message = $_POST["client_message"];


	$data = "INSERT INTO clients_details(`Name`, `E-mail`, `Contact-no`, `Business-name`,`Message`) VALUES ('$Name', '$mail', '$contact', '$business', '$message')";


	$check = mysqli_query($conn,$data);

	if ($check) {
		?>
		<script type="text/javascript">
			alert("your data has been submitted");
			location.reload();
		</script>
      <?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("ohh! there is an error  while submitting data please try again letter");
		</script>
		<?php
		// echo "error in insertion of data" . $data . "" . mysqli_error($conn);
	}

	mysqli_close($conn);
}

?>