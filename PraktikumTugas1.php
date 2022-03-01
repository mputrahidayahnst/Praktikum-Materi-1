<?php
$ns1 = ['id'=>1,'nim'=>'01108','uts'=>80,'uas'=>82,'tugas'=>88];
$ns2 = ['id'=>2,'nim'=>'01128','uts'=>80,'uas'=>70,'tugas'=>85];
$ns3 = ['id'=>3,'nim'=>'011120','uts'=>90,'uas'=>82,'tugas'=>80];
$ns4 = ['id'=>4,'nim'=>'01150','uts'=>90,'uas'=>90,'tugas'=>85];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];

?>
<h3>Daftar Nilai Siswa</h3>
 <table border="1" width="100%">
 <thead>
 <tr>
 <th>No</th><th>NIM</th><th>UTS</th>
 <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
 </tr>
 </thead>
<tbody>
<?php
 $nomor = 1;
 foreach($ar_nilai as $ns){
 echo '<tr><td>'.$nomor.'</td>';
 echo '<td>'.$ns['nim'].'</td>';
 echo '<td>'.$ns['uts'].'</td>';
 echo '<td>'.$ns['uas'].'</td>';
 echo '<td>'.$ns['tugas'].'</td>';
 $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
 echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
 echo '<tr/>';
 $nomor++;
}
?>
</tbody>
</table>
