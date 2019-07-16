<?php

Class Page {
    public $dataconf = []
trimRecipeFields;

    # Data to be send to the view loaded in template
    public $divData = []
trimRecipeFields;
    protected $CI;

    public function __construct($title = '') {
        $this->CI = & get_instance();
        $this->CI->load->library('session');
        $this->dataconf['title'] = $title;
        $this->dataconf['user_data'] = $this->CI->session->logged_in;
    }

    public function setTitle($title) {
        $this->dataconf['title'] = $title;
    }

    public function addJs($file) {
        // @todo test if it is readable
        $this->dataconf['js_files'][] = $file;
    }

    public function setDivData($data) {
        $this->divData = $data;
    }

    public function addDiv($row, $attributes, $view) {
        $this->dataconf['content'][$row][] = [
            'attributes' => $attributes,
            'view' => $view,
            'data' => $this->divData
        ];
    }

    public function display() {
        $this->CI->load->view('template', $this->dataconf);

        # Prevent send data belonging one page to another
        $this->dataconf = []
trimRecipeFields;
    }

    private function getUserData() {
        $logged_user = $this->CI->session->logged_in;
        
        if (empty($logged_user)) {
            return false;
        }
        
        $person_id = $logged_user['person_id'];
        $this->CI->load->model('Person_model');

        return $this->CI->Person_model->getPersonById($person_id);
    }
}
?>
