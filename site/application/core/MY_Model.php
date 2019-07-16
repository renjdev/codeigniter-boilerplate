<?php


/**
 * Description of My_Model
 *
 * @author Renan
 */


class MY_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Get the name of the columns of a table
     * @param string $table
     * @return array
     */
    function getEmptyColumns($table) {
        $columns = array_flip($this->db->list_fields($table));
       
        return  array_map(function () { return ''; }, $columns);;
    }

        /**
     * Builds a select statement
     * 
     * @param array $cols default * if is empty
     * @param array $where array of clauses 
     *        Ex: $where = ["id=1", "name like 'Ren%'];
     * @param array $order array of fieLds to order and directions ASC or DSC 
     *        Ex: $order = ['id', 'date DESC']
     * @return result
     */
    function simpleSelect($table, $cols = '*', $where = '', $order = '') {
        if (is_array($cols)) {
            $query_cols = implode(', ', $cols);
        } else {
            $query_cols = $cols;
        }
        
        $this->db->select($query_cols);
        $this->db->from($table);

        if ($where) {
            $this->db->where($where);
        }

        if ($order) {
            if (is_array($order)) {
                foreach ($order as $order_field) {
                    $this->db->order_by($order_field);
                }
            } else {
                $this->db->order_by($order);
            }
        }
        $query = $this->db->get();

        return $query->result();
    }
    
    function getById($table, $id) {
        $field_id = $table . "_id";
        $where = $field_id . " = " . $id;
        
        $result = $this->simpleSelect($table, '*', $where);

        return empty($result) ? [] : $result[0];
    }

}
