<?php
$dbh = new pdo
('mysql:host=localhost;dbname=sekolah','root','');
$Squery=$dbh->query("select * from siswa");

?>
<h1></h1>

<?php 
while($result = $Squery->fetch()){ ?>
<p><?= $result['nama'];?>      
<?php   } ?> 