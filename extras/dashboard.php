<?php
session_start(); // Must be called before accessing any session data
if (isset($_SESSION['username'])) {
    echo 'Welcome ' . $_SESSION['username'];
    echo "<a href='/php-crash/extras/logout.php'>Log out</a>";
    // echo 'hello wold';
} else {
    echo "<h1>Access Denied</h1>";
    echo "<a href='/php-crash/extras/13_sessions.php'>Go back</a>";
}
