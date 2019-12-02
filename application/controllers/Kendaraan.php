<?php 

class Kendaraan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kendaraan_model');
    }

    public function index()
    {
        $data['kendaraan'] = $this->Kendaraan_model->getKendaraan();
        $this->load->view('templates/header');
        $this->load->view('kendaraan/index', $data);
    }

    public function detail($id)
    {
        $data['kendaraan'] = $this->Kendaraan_model->getKendaraanById($id);
        $this->load->view('templates/header');
        $this->load->view('kendaraan/detail', $data);
    }

    public function delete($id)
    {
        $this->Kendaraan_model->deleteKendaraan($id);
        redirect('kendaraan/index');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('kendaraan/tambah');

        if(isset($_POST['submit'])) {
            $this->Kendaraan_model->createKendaraan();
            redirect('kendaraan/index');
        }
        
    }

    public function update($id)
    {
        $data['kendaraan'] = $this->Kendaraan_model->getKendaraanById($id);

        $this->load->view('templates/header');
        $this->load->view('kendaraan/ubah', $data);

        if(isset($_POST['ubah'])) {
            $this->Kendaraan_model->updateKendaraan();
            redirect('kendaraan/index');
        }
    }
}

?>