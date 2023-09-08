<?php

$errorMSG = "";
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}
// PHONE
if (empty($_POST["phone"])) {
    $errorMSG = "Phone number is required ";
} else {
    $phone = $_POST["phone"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

// // MSG Guest
// if (empty($_POST["guest"])) {
//     $errorMSG .= "Subject is required ";
// } else {
//     $guest = $_POST["guest"];
// }

$EmailTo = "ngocdatnguyen1995@gmail.com";
$Subject = "New Message From My Real Wedding";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == "") {
    echo "success";
} elseif ($errorMSG == "") {
    echo "Something went wrong :(";
} else {
    echo $errorMSG;
}

?>