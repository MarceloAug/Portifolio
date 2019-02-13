<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/css/skin-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper" style= "width:100%">

                <header class="main-header">
                        <a href="index2.html" class="logo">
                            <span class="logo-mini"><b>A</b>LT</span>
                            <span class="logo-lg"><b>Admin</b>LTE</span>
                        </a>
                         <!-- Header Navbar -->
                        <nav class="navbar navbar-static-top" role="navigation">
                            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                        </nav>
                </header>

                <aside class="main-sidebar">
                    <section class="sidebar">
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="header">HEADER</li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-link"></i> <span>Empresas</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="/empresas/FormAdicionar">Cadastrar Empresa</a></li>
                                    <li><a href="/empresas">Listagem</a></li>
                                </ul>
                             </li>
                        </ul>
                    </section>
                </aside>
        
                <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content container-fluid">
                            @yield('conteudo')
                        </section>
                </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    © Portifolio Marcelo Augusto 2019.
                </div>
            </footer>
        </div>

        <!-- jQuery 3 -->
<script src="/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte.min.js"></script>
    </body>
</html>