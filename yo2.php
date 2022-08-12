<?php
 $db = new PDO("mysql:host=localhost;dbname=sekolah4",'root','');
 $query = $db->query('select * from siswa');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?id=<?= $siswa['id']; ?>">
            <?= $data['nama_siswa'] ?>
        </a>
        
        <a href="yo.php?idsiswa=<?= $data['idsiswa']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>
