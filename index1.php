<?php 
$kintamasis1 = rand(1000, 9999);
$kintamasis2 = rand(1000, 9999);
$kintamasis3 = rand(1000, 9999);
$kintamasis4 = rand(1000, 9999);
$kintamasis5 = rand(1000, 9999);
$kintamasis6 = rand(1000, 9999);

// Compare and swap variables if necessary
if ($kintamasis2 < $kintamasis1) {
    $temp = $kintamasis2;
    $kintamasis2 = $kintamasis1;
    $kintamasis1 = $temp;
}

if ($kintamasis3 < $kintamasis1) {
    $temp = $kintamasis3;
    $kintamasis3 = $kintamasis1;
    $kintamasis1 = $temp;
}

if ($kintamasis4 < $kintamasis1) {
    $temp = $kintamasis4;
    $kintamasis4 = $kintamasis1;
    $kintamasis1 = $temp;
}

if ($kintamasis5 < $kintamasis1) {
    $temp = $kintamasis5;
    $kintamasis5 = $kintamasis1;
    $kintamasis1 = $temp;
}

if ($kintamasis6 < $kintamasis1) {
    $temp = $kintamasis6;
    $kintamasis6 = $kintamasis1;
    $kintamasis1 = $temp;
}

// Compare and swap remaining variables
if ($kintamasis3 < $kintamasis2) {
    $temp = $kintamasis3;
    $kintamasis3 = $kintamasis2;
    $kintamasis2 = $temp;
}

if ($kintamasis4 < $kintamasis2) {
    $temp = $kintamasis4;
    $kintamasis4 = $kintamasis2;
    $kintamasis2 = $temp;
}

if ($kintamasis5 < $kintamasis2) {
    $temp = $kintamasis5;
    $kintamasis5 = $kintamasis2;
    $kintamasis2 = $temp;
}

if ($kintamasis6 < $kintamasis2) {
    $temp = $kintamasis6;
    $kintamasis6 = $kintamasis2;
    $kintamasis2 = $temp;
}

// Compare and swap remaining variables
if ($kintamasis4 < $kintamasis3) {
    $temp = $kintamasis4;
    $kintamasis4 = $kintamasis3;
    $kintamasis3 = $temp;
}

if ($kintamasis5 < $kintamasis3) {
    $temp = $kintamasis5;
    $kintamasis5 = $kintamasis3;
    $kintamasis3 = $temp;
}

if ($kintamasis6 < $kintamasis3) {
    $temp = $kintamasis6;
    $kintamasis6 = $kintamasis3;
    $kintamasis3 = $temp;
}

// Compare and swap remaining variables
if ($kintamasis5 < $kintamasis4) {
    $temp = $kintamasis5;
    $kintamasis5 = $kintamasis4;
    $kintamasis4 = $temp;
}

if ($kintamasis6 < $kintamasis4) {
    $temp = $kintamasis6;
    $kintamasis6 = $kintamasis4;
    $kintamasis4 = $temp;
}

// Output the sorted numbers
echo $kintamasis1 . ', ' . $kintamasis2 . ', ' . $kintamasis3 . ', ' . $kintamasis4 . ', ' . $kintamasis5 . ', ' . $kintamasis6;

