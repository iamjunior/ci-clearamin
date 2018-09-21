<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/summernote.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/c3.min.css">
        <title>Clearmin template</title>
    </head>
    <body class="cm-no-transition cm-2-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="cm-flex"><a href="<?= site_url('Demo')?>" class="cm-logo"></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                        <ul class="cm-menu-items">
                            <li><a href="<?= site_url('Demo')?>" class="sf-house">Home</a></li>
                            <li><a href="<?= site_url('Demo/dashboardSales')?>" class="sf-dashboard">Dashboard</a></li>
                            <li class="cm-submenu">
                                <a class="sf-brick">Components <span class="caret"></span></a>
                                <ul>
                                    <li><a href="<?= site_url('Demo/componentButtons')?>">Comp Buttons</a></li>
                                    <li><a href="<?= site_url('Demo/componentInteractive')?>">Comp Interactive</a></li>
                                    <li><a href="<?= site_url('Demo/componentText')?>">Comp Text</a></li>
                                </ul>
                            </li>
                            <li class="cm-submenu">
                                <a class="sf-window-layout">Navbar layouts <span class="caret"></span></a>
                                <ul>
                                    <li><a href="<?= site_url('Demo/layoutsTabs')?>">2nd nav tabs</a></li>
                                </ul>
                            </li>
                            <li class="cm-submenu">
                                <a class="sf-cat">Icons <span class="caret"></span></a>
                                <ul>
                                    <li><a href="<?= site_url('Demo/icoSf')?>">Small-n-flat ico-fa</a></li>
                                    <li><a href="<?= site_url('Demo/icoMd')?>">Material Design ico-md</a></li>
                                    <li><a href="<?= site_url('Demo/icoFa')?>">Font Awesome ico-sf</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="<?= site_url('Demo/notepad')?>" class="sf-notepad">Text Editor</a></li>
                            <li><a href="<?= site_url('Demo/login')?>" class="sf-lock-open">Login page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>Check this breadcrumb</h1> 
                    <form id="cm-search" action="<?= site_url('Demo')?>" method="get">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                <div class="pull-right">
                    <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-notifications-white" data-toggle="dropdown"> <span class="label label-danger">23</span> </button>
                    <div class="popover cm-popover bottom">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading text-overflow">
                                        <i class="fa fa-fw fa-envelope"></i> Nunc volutpat aliquet magna.
                                    </h4>
                                    <p class="list-group-item-text text-overflow">Pellentesque tincidunt mollis scelerisque. Praesent vel blandit quam.</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-envelope"></i> Aliquam orci lectus
                                    </h4>
                                    <p class="list-group-item-text">Donec quis arcu non risus sagittis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-warning"></i> Holy guacamole !
                                    </h4>
                                    <p class="list-group-item-text">Best check yo self, you're not looking too good.</p>
                                </a>
                            </div>
                            <div style="padding:10px"><a class="btn btn-success btn-block" href="#">Show me more...</a></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu">
                        <li class="disabled text-center">
                            <a style="cursor:default;"><strong>John Smith</strong></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a>
                        </li>
                        <li>
                            <a href="login.html"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                <div class="cm-flex">
                    <div class="cm-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Profile</a></li>
                            <li class="active">Lorem Page</li>
                        </ol>
                    </div>
                </div>
            </nav>
        </header>

        <div id="global">

                <!--Start Cotent-->
                    <?php $this->load->view($content)?>
                <!--End Content-->
        
                <footer class="cm-footer"><span class="pull-left">Connected as John Smith</span><span class="pull-right">&copy; PAOMEDIA SARL</span></footer>
        </div>

        <script src="<?= base_url()?>assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="<?= base_url()?>assets/js/jquery.mousewheel.min.js"></script>
        <script src="<?= base_url()?>assets/js/jquery.cookie.min.js"></script>
        <script src="<?= base_url()?>assets/js/fastclick.min.js"></script>
        <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url()?>assets/js/clearmin.min.js"></script>
        <script src="<?= base_url()?>assets/js/summernote.min.js"></script>
        <script src="<?= base_url()?>assets/js/demo/home.js"></script>
        <script src="<?= base_url()?>assets/js/demo/notepad.js"></script>
        <script src="<?= base_url()?>assets/js/demo/popovers-tooltips.js"></script>
        <script src="<?= base_url()?>assets/js/lib/d3.min.js"></script>
        <script src="<?= base_url()?>assets/js/lib/c3.min.js"></script>
        <script src="<?= base_url()?>assets/js/demo/dashboard.js"></script>
    </body>
</html>