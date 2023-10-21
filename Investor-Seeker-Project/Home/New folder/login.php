<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data
    $errors = array();
    if (empty($email)) {
        $errors[] = 'Email is required';
    }
    if (empty($password)) {
        $errors[] = 'Password is required';
    }

    // If there are no errors, proceed with login
    if (empty($errors)) {
        // Perform login operation here
    } else {
        // Display error messages
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
}
?>