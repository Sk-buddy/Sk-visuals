<?php

include 'database conn.php';

if (isset($_POST["submit"])) {
	$Name = $_POST["name"];
	$mail = $_POST["email"];
	$contact = $_POST["contact"];
	$business = $_POST["client_business"];
	$website = $_POST["client_website"];
	$message = $_POST["client_message"];

	$check = "INSERT INTO clients_details(`Name`, `E-mail`, `Contact-no`, `Business-name`, `Business-website`, `Message`) VALUES ('$Name', '$mail', '$contact', '$business', '$website', '$message')";

	$data = mysqli_query($conn,$check);

	if ($data) {
		?>
		<script type="text/javascript">
			alert ("your data has been submitted");
			location.reload();
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("ohh! there was arror in submitting your data please try again later");
			return false;
		</script>
		<?php
		echo "data not inserted" . $data . "" . mysqli_error($conn);
	}

	mysqli_close($conn);

}

?>