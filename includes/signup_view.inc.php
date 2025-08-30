<?php


declare(strict_type=1);


function Check_signup_errors() {
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="form-error">' .$error . '</p>';
        }

        // Clear errors after displaying them
        unset($_SESSION['errors_signup']);
    }
}
