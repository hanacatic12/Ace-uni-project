<?php
require 'db_connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove'])) {
    $listing_id = intval($_POST['listing_id']);

        $sql = "UPDATE listings SET Quantity = 0 WHERE L_ID = $listing_id";
        /** @noinspection PhpUndefinedVariableInspection */
        mysqli_query($conn, $sql);
        if (mysqli_affected_rows($conn) == 0) {
            echo "Error: " . mysqli_error($conn);
            exit();
        }
        else {
            header("Location: ../public/your_profile.php");
        }
}