    // Live search endpoint (returns JSON)
    public function search() {
        $query = isset($_GET['q']) ? $_GET['q'] : '';
        $results = $this->UserModel->search($query);
        header('Content-Type: application/json');
        echo json_encode($results);
        exit;
    }
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UserController
 * 
 * Automatically generated via CLI.
 */
class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('UserModel');
    }

    public function show(){
        $per_page = 10;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $pagination = $this->UserModel->paginate($per_page, $page);
        $data['users'] = $pagination['data'];
        $data['pagination'] = $pagination;
        $this->call->view('show', $data);
    }

    public function create() {
        if($this->io->method() == 'post'){
            $lastname = $this->io->post('lname');
            $firstname = $this->io->post('fname');
            $email = $this->io->post('email');
            $data = array(
                'lname' => $lastname,
                'fname' => $firstname,
                'email' => $email
            );
            if($this->UserModel->insert($data)){
                redirect('users/show');
            } else {
                echo 'Something went wrong';
            }
        } else {
            $this->call->view('create');
        }
        
    }

    public function update($id) {
        $data['user'] = $this->UserModel->find($id);
        if($this->io->method() == 'post'){
            $lastname = $this->io->post('lname');
            $firstname = $this->io->post('fname');
            $email = $this->io->post('email');
            $data = array(
                'lname' => $lastname,
                'fname' => $firstname,
                'email' => $email
            );
            if($this->UserModel->update($id, $data)){
                redirect('users/show');
            } else {
                echo 'Something went wrong';
            }
        } else {
            $this->call->view('update', $data);
        }
    }

    public function delete($id){
        if($this->UserModel->delete($id)){
            redirect('users/show');
        } else {
            echo 'Something went wrong';
        }
    }

    public function soft_delete($id){
        if($this->UserModel->soft_delete($id)){
            redirect('users/show');
        } else {
            echo 'Something went wrong';
        }
    }

    public function restore($id){
        if($this->UserModel->restore($id)){
            redirect('users/show');
        } else {
            echo 'Something went wrong';
        }
    }
}