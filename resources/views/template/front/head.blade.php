<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>USM Shop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <style>
            body{ 
                min-height: 100vh;
                display:flex; 
                flex-direction:column; 
            }

            footer{
                margin-top:auto; 
            }

            .pagination > li > a,
            .pagination > li > span {
                color: #ffc107; // use your own color here
            }

            .pagination > .active > a,
            .pagination > .active > a:focus,
            .pagination > .active > a:hover,
            .pagination > .active > span,
            .pagination > .active > span:focus, {
                background-color: #ffc107;
                border-color: #ffc107;
            }

            .page-item.active .page-link {
                z-index: 1;
                color: #fff;
                background-color: #ffc107;
                border-color: #ffc107;
            }

            
            .pagination > .active > span:hover {
                border-color: black;
            }
        </style>
    </head>
    <body>
