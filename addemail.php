<?php
$dbc = mysqli_connect('localhost', 'root', 'AA1FBB2FC4', 'elvis_store') or
    die('Error connecting to MySQL server.');

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

$query = "INSERT INTO email_list (first_name, last_name, email) 
    VALUES ('$first_name', '$last_name', '$email')";

if (mysqli_query($dbc, $query)) {
    echo '<p>Customer added.</p>';
} else {
    echo '<p>Error adding you to the email list: ' . mysqli_error($dbc) . '</p>';
}

mysqli_close($dbc);
