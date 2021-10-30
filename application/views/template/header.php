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
                        <li><a href="<?= base_url('/web') ?>">Home</a></li>
                        <li><a href="<?= base_url('/web/about') ?>">About</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </header>
        </div>