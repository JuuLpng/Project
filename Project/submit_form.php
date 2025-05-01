<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = fopen("subscribers.txt", "a");
        fwrite($file, $email . PHP_EOL);
        fclose($file);
        echo "Thank you for subscribing!";
    } else {
        echo "Invalid email format.";
    }
} else {
    echo "Invalid request.";
}
?>
