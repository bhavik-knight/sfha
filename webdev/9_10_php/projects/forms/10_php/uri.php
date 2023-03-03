Welcome to URI Page.
<?php
$firstName = htmlspecialchars($_POST["firstName"] ?? "", ENT_QUOTES);
$lastName = htmlspecialchars($_POST["lastName"] ?? "", ENT_QUOTES);
$email = htmlspecialchars($_POST["email"] ?? "", ENT_QUOTES);
$password = htmlspecialchars($_POST["password"] ?? "", ENT_QUOTES);
$about = nl2br(htmlspecialchars($_POST["about"] ?? "", ENT_QUOTES));

print("First:$firstName" . "\n");
print("Last:$lastName" . "\n");
print("Email:$email" . "\n");
print("Pwd:$password" . "\n");
print("About:$about" . "\n");
?>