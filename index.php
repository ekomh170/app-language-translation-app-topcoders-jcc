<?php
require_once('assets/vendor/autoload.php');

use \Statickidz\GoogleTranslate;


$source = 'auto';
$target = 'en';

if (@!$_POST['kata_awal']) {
    $text = "";
    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);
} elseif ($_POST['kata_awal']) {
    $text = $_POST['kata_awal'];
    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Aplikasi Google Translate Simple</title>
</head>

<div id="#Home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Google Translate Simple</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Aplikasi Web</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="cli.php">Aplikasi Cli</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<body>
    <div class="mt-5 mb-5 h4 text-center">Google Translate Sederhana</div>
    <center>
        <form class="mb-5" action="/app-google-translate-jcc/" method="POST">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="mb-3">
                        <label class="text-left">Pilih Bahasa :</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>-- Pilih bahasa yang ingin di translate --</option>
                            <option value="id">Indonesia</option>
                            <option value="en">English</option>
                            <option value="ja">Japanese</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="text-left">Pilih Bahasa :</label>

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>-- Pilih bahasa yang ingin di translate --</option>
                            <option value="id">Indonesia</option>
                            <option value="en">English</option>
                            <option value="ja">Japanese</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="kata_awal" placeholder="Masukan Huruf Kata Yang Diartikan"
                            id="floatingTextarea2" style="height: 100px"><?= $text ?></textarea>
                        <label for="floatingTextarea2">Kata Yang Diartikan</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Hasil Kata Yang Diartikan" id="floatingTextarea2"
                            style="height: 100px"><?= $result ?></textarea>
                        <label for="floatingTextarea2">Masukan Hasil Kata Yang Diartikan</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-danger mt-3">Translate</button>
        </form>
    </center>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>