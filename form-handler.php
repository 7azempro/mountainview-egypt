<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get the form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));

    // Validate the data
    if (empty($name) || empty($email) || empty($phone)) {
        echo "Please fill in all fields.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Prepare the email content
    $to = "info@theglobalhub.net"; // Replace with your email address
    $subject = "Mountain View | New Registration Submission";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";

    // Set additional headers
    $headers = "From: noreply@mountainview-egypt.net" . "\r\n"; // Set from address
    $headers .= "Reply-To: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for registering! We will contact you soon.";
    } else {
        echo "There was an issue sending your registration. Please try again later.";
    }

} else {
    echo "Invalid Request";
}
?>