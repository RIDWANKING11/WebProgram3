<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II | Merancang Template Sederhana dengan codeignater </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>

<body>
    <div class="container">
        <div id="wrapper">
            <header>
                <hgroup>
                    <h1>RentalBuku.net</h1>
                    <h3>Membuat Template Sederhana dengan CodeIgniter</h3>
                </hgroup>
                <nav>
                    <ul>
                        <li><a href="<?php echo base_url() . 'index.php/web' ?>">Home</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/web/about' ?>">About</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </header>
        </div>

        <section>
            <h1><?php echo $judul ?></h1>
            <h1>Halaman About</h1>
            <h4>Nama</h4>
            <ul type="disc">
                <li>Nama Depan : Imam</li>
                <li>Nama Belakang : Nawawi</li>
            </ul>
            <br>
            <h4>Alamat</h4>
            <ul type="none">
                <li> Jalan Ciledug Raya No. 168 Pesanggrahan</li>
            </ul>

            <h4>Tempat Lahir</h4>
            <ul type="none">
                <li>Cirebon</li>
            </ul>
            <h4>Olah Raga Favorit</h4>
            <ul type="square">
                <li>Bulutangkis</li>
                <li>Catur</li>
            </ul>
        </section>
        <footer>
            <a href=”http://www.RentalBuku.com”>RentalBuku</a>
        </footer>
    </div>
</body>

</html>