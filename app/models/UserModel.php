<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: UserModel
 * 
 * Automatically generated via CLI.
 */
class UserModel extends Model {

    // Search users by name or email (for live search)
    public function search($query) {
        $this->db->table($this->table);
        if (!empty($query)) {
            $this->db->like('lname', $query);
            $this->db->or_like('fname', $query);
            $this->db->or_like('email', $query);
        }
        return $this->db->get_all();
    }
    protected $table = 'students';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    
    
}