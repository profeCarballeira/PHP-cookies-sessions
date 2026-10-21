<?php
$cookie_name = "username";
// set the expiration date to one hour ago
setcookie($cookie_name, "", time() - 3600,"/");
?>
<html>
<body>

<?php
if(isset($_COOKIE[$cookie_name])) {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
} else {
  echo "Cookie named '" . $cookie_name . "' is not set!";
  echo "Cookie 'username' is deleted.";
}

?>

</body>
</html>