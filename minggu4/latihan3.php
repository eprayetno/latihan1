<?php
$nilai=87;
if ($nilai<50) {
    echo "nilai E";
} elseif ($nilai>=50 && $nilai<60) {
    echo "nilai D";
} elseif ($nilai>=60 && $nilai<70) {
    echo "nilai C";
} elseif ($nilai>=70 && $nilai<80) {
    echo "nilai B";
} elseif ($nilai>=80 && $nilai<90) {
    echo "nilai A";
} else {
    echo "nilai A+";
}
?>