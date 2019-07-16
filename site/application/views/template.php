<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('template/html_start');
?>
<head>
    <?php
        //$data = array();
        $data['title'] = $title;
        $data['js_files'] = (isset($js_files)) ? $js_files : array();
        $this->load->view('template/head', $data);
    ?>
</head>



<body>
    <div class="container-fluid" id="wrapper">
        <div class="row">
           
    
    <?php 
        if ($this->session->logged_in) {
            $this->load->view('template/navleft');
        }
    ?>
        <main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 ml-auto pt-3">
            <?php
                if ($this->session->logged_in) {
                    $data_header['title'] = $title;
                    $data_header['user_data'] = $user_data;
                    $this->load->view('template/header', $data_header);
                }

                $this->load->view('template/message');

                foreach($content as $row) {
                    $data = array();

                    foreach($row as $cols => $content) {
                        $data['attributes'] = $content['attributes'];
                        $data['view'] = $content['view'];
                        if (isset($content['data'])) {
                            $data['data'] = $content['data'];
                        }
                        ?>
                        <div class="row">
                        <?php
                        $this->load->view('template/div_view', $data);
                        ?>
                        </div>
                        <?php
                    }
                }

                $this->load->view('template/footer');
            ?>
        </main>       
    </div>
    
    <?php
        $data = array();
        $this->load->view('template/html_end',$data);
    ?>
</div>
</body>
</html>