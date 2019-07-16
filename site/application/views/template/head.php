<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<meta charset="utf-8">
	
<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        header('X-UA-Compatible: IE=edge,chrome=1');
?>
<title><?= $title; ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" href="apple-touch-icon.png">

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url();?>css/font-awesome.min.css">
<link href="<?= base_url();?>vendor/jqueryui/themes/base/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url();?>css/style.css" rel="stylesheet">
<link href="<?= base_url();?>css/main.css" rel="stylesheet">
<script src="<?= base_url();?>vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>vendor/jqueryui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>vendor/modernizr/modernizr.js" type="text/javascript"></script>

<?php
    foreach ($js_files as $file) {
        printf("<script src=\"%s/%s\"></script>", base_url('js'),$file);
    }
?>
