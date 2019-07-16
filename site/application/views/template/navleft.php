<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<navbar class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">

    <h1 class="site-title"><a href="<?= base_url();?>"><em class="fa fa-rocket"></em> <?= APP_NAME ?></a></h1>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>

    <ul class="nav nav-pills flex-column sidebar-nav">
        <?php /*
        <li class="nav-item">
            <a class="nav-link<?= classActive('user/menu') ?>" href="<?= base_url();?>user/menu">
                <em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link<?= classActive('plan/listview') ?>" href="<?= base_url();?>plan/listview">
                <em class="fa fa-calendar-o"></em> Requerimiento de viaje
            </a>
        </li>
        */ ?>
        <li class="nav-item">
            <a class="nav-link<?= classActive('travel/listview') ?>" href="<?= base_url();?>travel/listview">
                <em class="fa fa-bar-chart"></em> Viajes asignados
            </a>
        </li>
    </ul>
    <ul class="nav nav-pills flex-column sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>user/logout">
                <em class="fa fa-power-off"></em> Cerrar session
            </a>
        </li>
    </ul>
</navbar>

<?php
function classActive($uri) {
    if (strpos($_SERVER['REQUEST_URI'], $uri) ) {
        print ' active';
    }
    
}
?>




