<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password !== $confirm) {
        echo "Nenosiri hayafanani!";
        exit();
    }

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user (phone, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $phone, $hashed);
    if ($stmt->execute()) {
        echo "Usajili umefanikiwa! <a href='index.html'>login here</a>";
    } else {
        echo "Imeshindikana: " . $stmt->error;
    }
}
?>