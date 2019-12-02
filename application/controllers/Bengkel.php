<?php 

class Bengkel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bengkel_model');
    }

    public function index()
    {
        $data['bengkel'] = $this->Bengkel_model->getBengkel();
        $this->load->view('templates/header');
        $this->load->view('bengkel/index', $data);
    }

    public function detail($id)
    {
        $data['bengkel'] = $this->Bengkel_model->getBengkelById($id);
        $this->load->view('templates/header');
        $this->load->view('bengkel/detail', $data);
    }

    public function delete($id)
    {
        $this->Bengkel_model->deleteBengkel($id);
        redirect('bengkel/index');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('bengkel/tambah');

        if(isset($_POST['submit'])) {
            $this->Bengkel_model->createBengkel();
            redirect('bengkel/index');
        }
        
    }

    public function update($id)
    {
        $data['bengkel'] = $this->Bengkel_model->getBengkelByID($id);

        $this->load->view('templates/header');
        $this->load->view('bengkel/ubah', $data);

        if(isset($_POST['ubah'])) {
            $this->Bengkel_model->updateBengkel();
            redirect('bengkel/index');
        }
    }
}

?>