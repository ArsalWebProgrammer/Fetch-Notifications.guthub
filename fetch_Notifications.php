<?php
// Include database connection and notification functions
include 'db_connection.php';
include 'notification_functions.php';

// Assuming user_id is obtained through session or some other means
$user_id = $_SESSION['user_id'];

// Fetch notifications for the logged-in user
$notifications = getNotifications($user_id);

// Output notifications
foreach ($notifications as $notification) {
    echo "<div class='notification'>";
    echo "<p>{$notification['content']}</p>";
    echo "<small>{$notification['timestamp']}</small>";
    echo "<a href='mark_as_read.php?id={$notification['id']}'>Mark as Read</a>";
    echo "</div>";
}
?>