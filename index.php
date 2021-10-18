<?php
require_once('assets/vendor/autoload.php');

use \Statickidz\GoogleTranslate;

if (@$_POST['remove']) {
    unset($_POST['bahasa_translate_trans']);
    unset($_POST['bahasa_translate_text']);
    unset($_POST['kata_awal']);
}

if (@$_POST['submit']) {
    if (@!$_POST['kata_awal'] || !@$_POST['bahasa_translate_text'] || !@$_POST['bahasa_translate_trans']) {
        $source = @$_POST['bahasa_translate_trans'];
        $target = @$_POST['bahasa_translate_text'];
        $text = "";
        $trans = new GoogleTranslate();
        $result = $trans->translate($source, $target, $text);
    } elseif ($_POST['kata_awal'] and $_POST['bahasa_translate_text'] and $_POST['bahasa_translate_trans']) {
        $source = @$_POST['bahasa_translate_trans'];
        $target = @$_POST['bahasa_translate_text'];
        $text = $_POST['kata_awal'];
        $trans = new GoogleTranslate();
        $result = $trans->translate($source, $target, $text);
    }
};
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

    <title>Aplikasi Terjemahan Sederhana</title>
</head>

<div id="#Home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Aplikasi Terjemahan Sederhana</a>
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
    <div class="mt-5 mb-5 h4 text-center"></div>
    <div class="d-flex justify-content-center">
        <form class="mb-5" action="" method="POST">
            <div id="myform" class="card border-dark myform" style="width: 50rem;">
                <div class="card-body text-dark">
                    <h5 class="card-title text-center">Aplikasi Terjemahan Sederhana</h5>

                    <center>
                        <hr style="width:50%;">

                        <a href="cli.php" class="btn btn-outline-danger">Aplikasi CLI</a>

                        <hr style="width:50%;">
                    </center>

                    <div class="mb-5">
                        <label class="text-start fw-bold">Pilih Bahasa yang akan di terjemahan :</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                            name="bahasa_translate_trans">
                            <option selected>-- Pilih bahasa yang ingin di Terjemahan --</option>
                            <option value="auto">Deteksi Bahasa</option>
                            <option value="id">Indonesia</option>
                            <option value="en">English</option>
                            <option value="ja">Japanese</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="text-start fw-bold">Pilih Bahasa di terjemahan :</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                            name="bahasa_translate_text">
                            <option selected>-- Pilih bahasa yang ingin di Terjemahan --</option>
                            <option value="id">Indonesia</option>
                            <option value="en">English</option>
                            <option value="ja">Japanese</option>
                        </select>
                    </div>
                    <div class="form-floating mb-5">
                        <textarea class="form-control" name="kata_awal" placeholder="Masukan Huruf Kata Yang Diartikan"
                            id="floatingTextarea2" style="height: 100px"><?= @$text ?></textarea>
                        <label for="floatingTextarea2" class="fw-bold">Kata Yang DiTerjemahkan</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Hasil Kata Yang Diartikan" id="floatingTextarea2"
                            style="height: 100px" disabled><?= @$result ?></textarea>
                        <label for="floatingTextarea2" class="fw-bold">Hasil Kata Yang DiTerjemahkan</label>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" name="submit" value="submit"
                        class="btn btn-outline-success mt-3">Submit</button>
                    <button type="remove" name="remove" value="remove"
                        class="btn btn-outline-danger mt-3 mb-5">Reset</button>
                </div>

            </div>
        </form>
    </div>
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