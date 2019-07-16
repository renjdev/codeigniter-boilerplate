<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url()?>"><span class="glyphicon glyphicon-home"></span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <!-- ul class="nav navbar-nav">
                <? // @todo add via javascript class active and <span class="sr-only">(current)</span> ?>
                <li id="nav-plan"><a href="<?= base_url('/plan')?>"><?=lang('SECTION_PLAN_NAME')?></a></li>
                <li><a href="#">Link</a></li>
            </ul -->

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= base_url();?>user/settings" class="btn btn-lg" title="Mensajes"><span class="glyphicon glyphicon-wrench"></span></a></li>
                <li><a class="btn btn-lg" title="Mensajes"><span class="glyphicon glyphicon-envelope"><span class=" badge badge-pill badge-warning">3</span></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?= $this->session->logged_in['first_name'] ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url();?>user/profile">Perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url();?>user/logout">Cerrar sesi&oacute;n</a></li>
                    </ul>     
                </li>
                
            </ul>
        </div><!--/.navbar-collapse -->

    </div>
</nav>
