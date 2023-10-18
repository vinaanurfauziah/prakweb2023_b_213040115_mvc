<?php

class About {
    public function index($nama = 'Vina', $pekerjaan = 'Dosen', $umur = 20)
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
    }
    public function page()
    {
        echo 'About/page';
    }
}