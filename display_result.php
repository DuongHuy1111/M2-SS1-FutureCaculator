<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inventment = $_POST["inventment"];
    $interest = $_POST["interest"];
    $number = $_POST["number"];
}
for ($i = 0; $i < $number; $i++) {
    $inventment += $inventment*($interest/100);
}
echo " Inventment Amount :" . $inventment . "<br>";
echo " Yearly Interest Rate :" . $interest . "<br>";
echo "Number of Years: " . $number . "<br>";
echo "Future Value: " . $inventment;
?>
