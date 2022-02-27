<?php
$ar_buah = ["p" => "pepaya", "a" => "apel", "m" => "mangga", "j" => "jambu"];
echo "<ol>";
foreach ($ar_buah as $key => $value) {
    echo "<li> $key - $value </li>";
}
echo "</ol>";
//Array sort untuk mengurutkan array dalam urutan menaik
sort ($ar_buah);
echo "<hr/>";
echo "</ol>";
echo "<ol>";
foreach ($ar_buah as $buah => $key) {
    echo "<li> $buah - $key </li>";
}
echo "</ol>";
//
arsort ($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $key) {
    echo "<li> $buah - $key </li>";
}
echo "<hr/>";
echo "<ol>";
?>
</-- ===================== -->
<?php
$tims= ["erwin", "haru", "ali", "zaki"];
// untuk mengahapus akhir
array_pop ($tims);
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<br>";
echo "<hr>";
?>

<?php
//nambah depan
$tims= ["erwin", "haru", "ali", "zaki"];
array_push ($tims, "bila");
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<br>";
echo "<hr>";

?>

<?php
//hapus nilai awal
$tims= ["erwin", "haru", "ali", "zaki"];
array_shift ($tims);
foreach ($tims as $person) {
    echo "<br/> $person";
}
echo "<hr>";
?>

<?php
//menambah nilai array satu atau lebih/nambah di blkg
$tims= ["erwin", "haru", "ali", "zaki"];
array_unshift ($tims, "margi", "salsa");
foreach ($tims as $person) {
    echo "<br/> $person";
}
echo "<hr>";