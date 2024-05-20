<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Naila Amelya</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('tampilan/') ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url('tampilan/') ?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= base_url('tampilan/') ?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style>
        /* Custom Styles */
        .navbar-default {
            background-color: #337ab7; /* Change navbar background color to blue */
            height: 70px; /* Increase navbar height */
        }

        .navbar-brand {
            text-align: center; /* Center align brand text */
            width: 100%; /* Ensure brand text takes full width */
        }

        .navbar-brand a {
            color: #fff; /* Change brand text color to white */
            font-size: 24px; /* Increase font size */
        }

        .navbar-nav>li>a {
            color: #fff; /* Change navbar link text color to white */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="#">UNIVERSITAS</a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/dosen"><i class="fa fa-user"></i> Dosen</a></li>
                    <li><a href="/petugas"><i class="fa fa-user"></i> Petugas kampus</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Your content goes here -->
    <div class="container">
        <?= $this->renderSection('isi_content') ?>
    </div>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('tampilan/') ?>assets/js/custom.js"></script>
</body>
</html>
