<?php
$x=4;
echo "<p>$x</p>";

// Create connection
$conn = new mysqli("127.0.0.1", "root", "", "stars");

$reusults=$conn->query("SELECT * FROM users");
$data=$reusults->fetch_assoc();
var_dump($data);
echo"<br><br>";


//echo"<pre>";
//var_dump($_SERVER);
//echo"</pre>";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$username = $_POST["username"];
$password = $_POST["password"];
$sql="INSERT INTO users (username, pass) VALUES('$username','$password')";
$conn->query($sql);};

echo"<form method='POST'>";
    echo"<label>Lietotajvards<input name='username' /></label><br>";
    echo"<label>Parole<input name='password' type='password' /></label><br>";
    echo"<input type='submit' value='Register'>";

echo"</form>";

//Asociats masivs
$assoc_masivs= ["vecums"=>6,"videja_atzime"=>8,"ids"=>10];
print_r($assoc_masivs);
