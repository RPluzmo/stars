<?php
$x=4;
echo "<p>$x</p>";

// Create connection
$conn = new mysqli("127.0.0.1", "root", "", "stars");


$reusults=$conn->query("SELECT * FROM users");
$data=$reusults->fetch_all();
var_dump($data);

echo"<form>";
    echo"<input name='username' />";
    echo"<input name='passworf' type='password' />";
    echo"<input type='submit' value='Register'>";

echo"</form>";
