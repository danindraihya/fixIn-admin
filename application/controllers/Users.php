<?php 

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

    public function index()
    {
        $data['users'] = $this->Users_model->getUsers();
        $this->load->view('templates/header');
        $this->load->view('users/index', $data);
    }

    public function detail($id)
    {
        $data['users'] = $this->Users_model->getUsersById($id);
        $this->load->view('templates/header');
        $this->load->view('users/detail', $data);
    }

    public function delete($id)
    {
        $this->Users_model->deleteUsers($id);
        redirect('users/index');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('users/tambah');

        if(isset($_POST['submit'])) {
            $this->Users_model->createUsers();
            redirect('users/index');
        }
        
    }

    public function update($id)
    {
        $data['users'] = $this->Users_model->getUsersById($id);

        $this->load->view('templates/header');
        $this->load->view('users/ubah', $data);

        if(isset($_POST['ubah'])) {
            $this->Users_model->updateUsers();
            redirect('users/index');
        }
    }
}

?>