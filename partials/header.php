<?php require_once 'bootstrap.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    <style>
        #wrapper{
            width: 600px;
            margin: auto;
            font-family: "Roboto Condensed";
        }
        .page-header{
            background-color: azure;
            padding: 5px 30px;
        }
        .blog-title{
            font-size: 45px;
        }
        .blog-content article {
            background-color: #EEE;
            margin: 30px 0;
            padding: 10px 20px;
        }
        .blog-content article a{
            color: #333;
            text-decoration: none;
            opacity: .8;
        }
        .blog-content article a:hover{
            opacity: 1;
        }
        .post-form input ,.post-form textarea{
            padding: 15px;
            width: 100%;
        }
        nav {
            background: #333;
            margin-top: 30px;
            padding: 5px;
        }
        nav a {
            text-decoration: none;
            font-size: 18px;
            padding: 5px;
            color: #FFF;
        }
        nav a:hover{ text-decoration: underline}

    </style>
</head>
<body>
<div id="wrapper">

    <?php require 'hero.php'; ?>
    <?php require 'menu.php'; ?>