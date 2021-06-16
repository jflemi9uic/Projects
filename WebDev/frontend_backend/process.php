<?php
if (isset($_POST['submit'])) {
    $cut = $_POST['cut'];
    echo "Cut: " . $cut . "</br>";

    $color = $_POST['color'];
    echo "Color: " . $color . "</br>";
}
?>