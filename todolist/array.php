<!-- Array -->
<?php 
$names = ["Eko","Kurniawan","Khannedy"];
var_dump($names[0]);
// ,$names[1],$names[2]);
// kalau mau mengganti array dengan indeks ke 0 dengan value rachmad to Budi
$names[0]="Budi";
var_dump($names);
// unset
unset($names[1]);
$names[] = "Eko";

var_dump($names);
var_dump(count($names));