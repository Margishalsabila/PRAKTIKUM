<?php
$ns1 = ['id'=>1, 'nim'=>'01101','uts'=>88., 'uas' => 84, 'tugas' => 78];
$ns2 = ['id'=>2, 'nim'=>'01121','uts'=>78., 'uas' => 58, 'tugas' => 58];
$ns3 = ['id'=>3, 'nim'=>'01130','uts'=>60., 'uas' => 86, 'tugas' => 70];
$ns4 = ['id'=>4, 'nim'=>'01134','uts'=>90., 'uas' => 91, 'tugas' => 82];
$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<h3 style ="text-align: center; "> Daftar Nilai Siswa</h3>

</-- buka table -->
<table border="1" width= "100%">
<thead>
    <tr>
        <th>
            No
        </th>
        <th>
            Nim
        </th>
        <th>
            UTS
        </th>
        <th>
            UAS
        </th>
        <th>
            Tugas
        </th>
        <th>
            Nilai Akhir
        </th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach ($ar_nilai as $nilai){
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$nilai ['nim'].'</td>';
echo '<td>'.$nilai ['uts'].'</td>';
echo '<td>'.$nilai ['uas'].'</td>';
echo '<td>'.$nilai ['tugas'].'</td>';
$nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.'). '</td>';
echo '<tr/>';
$nomor++;
}
?>

</body>
</table>