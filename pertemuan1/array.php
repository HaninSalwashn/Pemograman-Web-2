<?php
// array indexing
$animals = ['Kucing', 'Kambing', 'Kerbau'];       //bisa menyimpan lebih dari 1 nilai dengan banyak tipe data

// Mengakses array indexing
echo $animals[1] . '<br>';                        //array dimulai dari urutan 0

// array assosiatif
$student1 = [
    'name' => 'Aldi',
    'nim' => '11222333445',
    'major' => 'Information System'
];

// Mengakses array assosiatif
echo $student1['major'];
