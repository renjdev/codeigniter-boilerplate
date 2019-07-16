<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function input_db_bs($type, $db_field, $value = '', $attributes = array(), $extra = null) {

    $label = "FIELD_" . strtoupper($db_field);

    $data = $attributes;
    $data['id'] = isset($data['id']) ? $data['id'] : $db_field;
    $data['name'] = isset($data['name']) ? $data['name'] : $db_field;
    $data['class'] = isset($data['class']) ? $data['class'] . ' form-control field' : 'form-control field';
    $data['placeholder'] = lang($label);

    $str = '<div class="form-group">';
    $str .= lang($label, $db_field) . "\n";

    switch ($type) {
        case 'input':
            $str .= form_input($data, $value, $extra) . "\n";
            break;
        case 'number':
            $data['type'] = 'number';
            $str .= form_input($data, $value, $extra) . "\n";
            break;
        case 'password':
            $str .= form_password($data, $value, $extra) . "\n";
            break;
        case 'textarea':
            $str .= form_textarea($data, $value, $extra) . "\n";
            break;
    }

    $str .= '<span class="text-danger">' . form_error($db_field) . '</span>' . "\n";
    $str .= "</div>\n";

    return $str;
}

function dropdown_db_bs($db_field, $options = array(), $selected =  array(), $extra = array()) {

    $label = "FIELD_" . strtoupper($db_field);

    $data = $extra;
    $data['id'] = isset($data['id']) ? $data['id'] : $db_field;
    $data['class'] = isset($data['class']) ? $data['class'] . ' form-control' : 'form-control';

    $str = '<div class="form-group">';
    $str .= lang($label, $db_field) . "\n";

    $str.= form_dropdown($db_field, $options, $selected, $data);

    $str .= '<span class="text-danger">' . form_error($db_field) . '</span>' . "\n";
    $str .= "</div>\n";

    return $str;
}
