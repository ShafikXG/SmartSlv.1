<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paymentMethod = isset($_POST["paymentMethod"]) ? $_POST["paymentMethod"] : '';

    switch ($paymentMethod) {
        case "visa":
            processVisaPayment($_POST);
            break;
        case "paypal":
            processPayPalPayment($_POST);
            break;
        case "credit_card":
            processCreditCardPayment($_POST);
            break;
        default:
            http_response_code(400); // Bad Request
            echo "Invalid Payment Method";
            break;
    }
} else {
    http_response_code(400); // Bad Request
    echo "Invalid Request!";
}

function processVisaPayment($data) {
    // Implement logic to securely process Visa payment

    // Validate and sanitize inputs
    $cardNumber = filter_var($data['cardNumber'], FILTER_SANITIZE_STRING);
    $expiryDate = filter_var($data['expiryDate'], FILTER_SANITIZE_STRING);
    $cvv = filter_var($data['cvv'], FILTER_SANITIZE_STRING);

    // Perform additional validation, e.g., check card expiration date, CVV length, etc.

    // Securely handle payment data (consider using a payment gateway for real transactions)
    // ...

    echo "Visa Payment Processed Successfully!";
}

function processPayPalPayment($data) {
    // Implement logic to securely process PayPal payment

    // Validate and sanitize inputs
    $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($data['password'], FILTER_SANITIZE_STRING);

    // Perform additional validation, e.g., check email format, password strength, etc.

    // Securely handle payment data (consider using a payment gateway for real transactions)
    // ...

    echo "PayPal Payment Processed Successfully!";
}

function processCreditCardPayment($data) {
    // Implement logic to securely process Credit Card payment

    // Validate and sanitize inputs
    $cardType = filter_var($data['cardType'], FILTER_SANITIZE_STRING);
    $cardNumber = filter_var($data['cardNumber'], FILTER_SANITIZE_STRING);
    $expiryDate = filter_var($data['expiryDate'], FILTER_SANITIZE_STRING);
    $cvv = filter_var($data['cvv'], FILTER_SANITIZE_STRING);

    // Perform additional validation, e.g., check card type, expiration date, CVV length, etc.

    // Securely handle payment data (consider using a payment gateway for real transactions)
    // ...

    echo "Credit Card Payment Processed Successfully!";
}

?>
