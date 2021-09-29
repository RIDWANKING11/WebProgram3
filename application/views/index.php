<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II | Merancang Template Sederhana dengan codeignater </title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/stylebuku.css') ?>">
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan codeigniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?= base_url() . 'index.php/web' ?>">Home</a></li>
                    <li><a href="<?= base_url() . 'index.php/web/about' ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
    </div>

    <section>
        <h1><?php echo $judul ?></h1>
        <p align='justify'>Pada pengertian codeigniter diatas tadi di jelaskan bahwa codeigniter menggunakan metode MVC, Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter</p>
        <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.</p>


        <ol type="a">
            <li>Model</li>
            <p align='justify'>Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebagai bagian penanganyang berhubungan dengan pengolahan atau manipulasi database.</p>
        </ol>
    </section>
</body>

</html>