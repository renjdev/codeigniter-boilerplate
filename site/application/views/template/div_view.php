<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>

    <div
    <?php
        foreach ($attributes as $attribute => $value) {
            echo $attribute . '="' . $value . '"';
        }
    ?>>
        <?php
            $this->load->view($view, $data);
        ?>
    </div>
