<?php
// Change this to your own configuration
$link = new mysqli('120.78.5.218','root','123456','cxk');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $link->connect_error);
}
$ranking = "kano_rank";