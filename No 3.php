<?php
    class Katak {
        public $umur, $nama;
        public function __construct($umur, $nama)
        {
            $this->umur = $umur;
            $this->nama = $nama;
            
        }
        public function getcaraBergerak()
        {
            return 'Melompat';
        }
        public function getUmur()
        {
            return $this->umur;
        }
        public function getNama()
        {
            return $this->nama;
        }

    }

    class Kecebong extends Katak {
        private $panjangEkor;
        public function panjangEkor($umur, $nama, $panjangEkor)
        {
            parent::__construct($umur, $nama);
            $this->panjangEkor = $panjangEkor;
        }
        public function getcaraBergerak()
        {
            return 'Berenang';
        }
        public function getpanjangEkor()
        {
            return $this->panjangEkor = 10;
        }
    }
    $katak = new Katak(5, 'Froggy');
    $kecebong = new Kecebong(2, 'Junior Frog', 10);

?>

<html align="center">
    <title>Praktikum 4</title>
    <h4>Praktikum 4</h4>
        <table align= "center" border="2" style="border-collapse: collapse;"
        width="90%" height="30%">
            <tr>
                <th>Obyek</th>
                <th>Umur</th>
                <th>Nama</th>
                <th>panjangEkor</th>
                <th>caraBergerak</th>
            </tr>

            <tr align="center">
                <td>O1</td>
                <td><?= $katak->getUmur(); ?></td>
                <td><?= $katak->getNama(); ?></td>
                <td>-</td>
                <td><?= $katak->getcaraBergerak(); ?></td>
            </tr>

            <tr align="center">
                <td>O2</td>
                <td><?= $kecebong->getUmur(); ?></td>
                <td><?= $kecebong->getNama(); ?></td>
                <td><?= $kecebong->getpanjangEkor()?></td>
                <td><?= $kecebong->getcaraBergerak(); ?></td>
            </tr>
        </table>
</html>