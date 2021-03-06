﻿<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>Acceuil</title>

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    body {
        font-family: 'Varela Round', sans-serif;
    }
    .modal-login {
        color: #636363;
        width: 350px;
    }
    .modal-login .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }
    .modal-login .modal-header {
        border-bottom: none;
        position: relative;
        justify-content: center;
    }
    .modal-login h4 {
        text-align: center;
        font-size: 26px;
    }
    .modal-login  .form-group {
        position: relative;
    }
    .modal-login i {
        position: absolute;
        left: 13px;
        top: 11px;
        font-size: 18px;
    }
    .modal-login .form-control {
        padding-left: 40px;
    }
    .modal-login .form-control:focus {
        border-color: #00ce81;
    }
    .modal-login .form-control, .modal-login .btn {
        min-height: 40px;
        border-radius: 3px;
    }
    .modal-login .hint-text {
        text-align: center;
        padding-top: 10px;
    }
    .modal-login .close {
        position: absolute;
        top: -5px;
        right: -5px;
    }
    .modal-login .btn {
        background: #00ce81;
        border: none;
        line-height: normal;
    }
    .modal-login .btn:hover, .modal-login .btn:focus {
        background: #00bf78;
    }
    .modal-login .modal-footer {
        background: #ecf0f1;
        border-color: #dee4e7;
        text-align: center;
        margin: 0 -20px -20px;
        border-radius: 5px;
        font-size: 13px;
        justify-content: center;
    }
    .modal-login .modal-footer a {
        color: #999;
    }
    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
    .haut{
        margin-top: -320px;
    }
</style>
</head>
<body>
<div class="text-center">
    <header id="head">
        <div class="haut">
            <img src="images/sm.png">

            <div class="sp-nh-buttons">
                <span class="sp-nh-text">Gestion Commande</span>
                <div id="sp-nh-prev202" class="sp-nh-prev"></div>
                <div id="sp-nh-next202" class="sp-nh-next"></div>
            </div>
            <div id="sp-nh-items202" class="sp-nh-item">
                <div class="sp-nh-item">
                    <span class="sp-nh-title">  </span>
                </div>

            </div>

<p></p>
<p></p>
<p></p>
            <div class="container">
                <div class="row">
                    <h1 class="lead"> Gestion de commande des clients</h1>

                </div>
            </div>
            <!-- Button HTML (to Trigger Modal) -->
            <a href="#myModal" class="btn btn-default btn-lg" data-toggle="modal">Connecter</a>
        </div>

        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Authentification</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="authantification.php" method="POST">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" name="nom" placeholder="Username" required="required">
                            
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <img src="images/gest.jfif" style="margin: 10px">


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>


    </header>
</div>
</body>
</html>