<?php

require_once '../config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cinnamon - Online Website Resep</title>
    <link rel="shortcut icon" type="image/png" href="../Material/asset/Logo/icon.png" />


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../Material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../Material/css/Public.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../Material/css/Cari.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Material/css/fontawesome-stars.css">

    <style>
        .gambar {
            background-size: cover;
        }

        .fa-star {
            color: #f3d032;
            font-size: 1.5em;
        }
    </style>
</head>

<body>

    <div class="background">
        <div class="navbar-fixed">
            <nav class="brown darken-2" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="main.php" class="brand-logo"><img src="../Material/asset/Logo/cinnamon2.png" height="50px"></a>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="card-panel brown-text text-darken-2 waves-effect waves-light btn" style="margin-top:6%;background-color:#EAD0A9 ;" href="Form.php"> Upload resep</a></li>
                        <li><a class="brown-text text-lighten-5" href="Cari.php">Cari Resep</a></li>
                        <li><a class="brown-text text-lighten-5" href="Badget.php">Budget</a></li>
                        <li><a class="brown-text text-lighten-5" href="Bahan.php">Bahan</a></li>
                        <li>
                            <a class="brown-text text-lighten-5" href="../index.html">
                                <b>Keluar</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="nav-mobile" class="sidenav">
            <li>
                <a>
                    <h5><b>Menu</b></h5>
                </a>
            </li>
            <li><a href="Cari.php">Cari Resep</a></li>
            <li><a href="Badget.php">Budget</a></li>
            <li><a href="Bahan.php">Bahan</a></li>
            <li>
                <a href="../index.html">
                    <h6>About Us</h6>
                </a>
            </li>
        </ul>

        <div class="cari">
            <div class="container">
                <br>
                <h4 class="brown-text text-darken-2">Cari Berdasarkan Budget</h4>
                <form action="Badget.php" method="get">
                    <div class="row">
                        <div class="input-field col s12">
                            <input class="brown-text text-darken-4" id="kataKunci" name="kataKunci" type="number" value="50000">
                            <label for="mulai">Masukan Budget anda</label>
                            <p>wajib memasukan harga dengan angka</p>
                        </div>
                    </div>
                    <input class="btn brown darken-2" type="submit" name="budget" value="cari" style="width:100%;">
                </form>

            </div>

        </div>



        <div class="section transparent" style="padding-bottom:0px">
            <div class="hasil">
                <div class="section transparent" style="padding-bottom:0px">
                    <div class="row container" style="margin-top: -20px;">
                        <br><br><br>
                        <h2 style="font-family:Berlin Sans FB;">Hasil Pencarian</h2>
                    </div>

                    <!--dataresep.php-->
                    <div id="dataresep">

                    </div>
                    <br><br>
                </div>

                <br><br><br>
            </div>
            <br><br><br>
            <footer class="page-footer brown darken-2">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">Cinnamon</h5>
                            <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                        </div>
                        <div class="col l3 s12">
                            <h5 class="white-text">Settings</h5>
                            <ul>
                                <li><a class="white-text" href="#!">Link 1</a></li>
                                <li><a class="white-text" href="#!">Link 2</a></li>
                                <li><a class="white-text" href="#!">Link 3</a></li>
                                <li><a class="white-text" href="#!">Link 4</a></li>
                            </ul>
                        </div>
                        <div class="col l3 s12">
                            <h5 class="white-text">Connect</h5>
                            <ul>
                                <li><a class="white-text" href="#!">Link 1</a></li>
                                <li><a class="white-text" href="#!">Link 2</a></li>
                                <li><a class="white-text" href="#!">Link 3</a></li>
                                <li><a class="white-text" href="#!">Link 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        Made by <a class="brown-text text-lighten-3" href="#">Flavor</a>
                    </div>
                </div>
            </footer>

            <!--  Scripts-->
            <script>
                const page = 'badget';
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="../Material/js/materialize.js"></script>
            <script src="../Material/js/init.js"></script>
            <script src="../Material/js/jquery.barrating.min.js"></script>
            <script src="../Material/js/ajax.js"></script>
            <script>
                $(function() {
                    $('.rating_2').barrating({
                        theme: 'fontawesome-stars',
                        readonly: true,

                    });
                });
            </script>
            <script>
                $('.kotak').click((event) => {
                    window.location.href = "http://localhost/Web_Coding/Resep/Isi.html";
                });
            </script>

</body>

</html> 