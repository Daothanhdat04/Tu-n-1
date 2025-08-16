<?php
function timMax($arr) {
    return max($arr);
}

function timMin($arr) {
    return min($arr);
}

function tinhTong($arr) {
    return array_sum($arr);
}

function kiemTraTonTai($arr, $value) {
    return in_array($value, $arr);
}

function sapXepTang(&$arr) {
    sort($arr);
}
?>
