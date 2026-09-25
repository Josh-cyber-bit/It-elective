<?php

function sanitize_Data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function escapeHtml($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8', false);
}

$firstName = sanitize_Data($_POST['fname'] ?? '');
$lastName = sanitize_Data($_POST['lname'] ?? '');
$emailAddress = sanitize_Data($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$passwordConfirmation = $_POST['cpassword'] ?? '';
$birthDate = sanitize_Data($_POST['birthday'] ?? '');
$gender = sanitize_Data($_POST['gender'] ?? '');
$course = sanitize_Data($_POST['course'] ?? '');

$password = is_string($password) ? $password : '';
$passwordConfirmation = is_string($passwordConfirmation) ? $passwordConfirmation : '';

$pageTitle = 'Account Details';
$statusMessage = 'Your information is valid. Nothing was saved yet.';
$showAccountDetails = false;
$regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{5,20}$/';

if (
    $firstName === '' ||
    $lastName === '' ||
    $emailAddress === '' ||
    $password === '' ||
    $passwordConfirmation === '' ||
    $birthDate === '' ||
    $gender === '' ||
    $course === ''
) {
    $pageTitle = 'Missing Information';
    $statusMessage = 'Please fill in all the fields.';
} elseif ($password !== $passwordConfirmation) {
    $pageTitle = 'Passwords Do Not Match';
    $statusMessage = 'Please check your password confirmation.';
} elseif (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
    $pageTitle = 'Invalid Email';
    $statusMessage = 'Please enter a valid email address.';
} elseif (!preg_match($regex, sanitize_Data($password))) {
    $pageTitle = 'Password Not Accepted';
    $statusMessage = 'Use 5 to 20 letters and numbers, with uppercase, lowercase, and a number.';
} else {
    $showAccountDetails = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= escapeHtml($pageTitle) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="result-card">
        <h1><?= escapeHtml($pageTitle) ?></h1>
        <p class="result-message"><?= escapeHtml($statusMessage) ?></p>

        <?php if ($showAccountDetails): ?>
            <div class="account-details">
                <p><strong>Full name:</strong> <span><?= escapeHtml($firstName . ' ' . $lastName) ?></span></p>
                <p><strong>Email:</strong> <span><?= escapeHtml($emailAddress) ?></span></p>
                <p><strong>Birthday:</strong> <span><?= escapeHtml($birthDate) ?></span></p>
                <p><strong>Gender:</strong> <span><?= escapeHtml($gender) ?></span></p>
                <p><strong>Course:</strong> <span><?= escapeHtml($course) ?></span></p>
            </div>
        <?php endif; ?>

        <a href="register.php" class="back-button">Back to form</a>
    </main>
</body>
</html>

