<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: UserModel
 * 
 * Automatically generated via CLI.
 */
class UserModel extends Model {

    // Paginate and search users (server-side only)
    public function paginate_and_search($per_page = 10, $page = 1, $search = '') {
        $offset = ($page - 1) * $per_page;
        $this->db->table($this->table);
        if (!empty($search)) {
            $this->db->like('lname', $search);
            $this->db->or_like('fname', $search);
            $this->db->or_like('email', $search);
        }
        $total = $this->db->count();
        $results = $this->db->table($this->table)->limit($per_page, $offset)->get_all();
        return [
            'data' => $results,
            'total' => $total,
            'per_page' => $per_page,
            'current_page' => $page,
            'last_page' => ceil($total / $per_page),
            'search' => $search
        ];
    }
    protected $table = 'students';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }
}