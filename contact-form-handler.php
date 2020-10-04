<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];


mail("atifmoin19@gmail.com", "Feedback Profile",$message , "From: $name < $email");
echo "<script type='text/javascript'>alert('Messgae successfully sent');
window.history.log(-1);
</script>";


?>
