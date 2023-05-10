<?php
echo phpinfo();
$email = $_POST['email'];



// Redirect the user to a thank you page
header('Location: thankyou.html');
