<?php 
use GuzzleHttp\Client;

class Kendaraan_model extends CI_Model
{
    private $client;
    
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' =>  'http://localhost/fixIn/api/'
        ]);
    }

    public function getKendaraan()
    {

        $response = $this->client->request('GET', 'kendaraan', []);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getKendaraanById($id)
    {

        $response = $this->client->request('GET', 'kendaraan', [
            'query' => [
            'noStnk' => $id
            ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            return $result['data'][0];
    }

    public function deleteKendaraan($id)
    {
        $response = $this->client->request('DELETE', 'kendaraan', [
            'form_params' => [
                'noStnk' => $id
            ]
        ]);
    
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function createKendaraan()
    {
        $data = [
            "noStnk" => $this->input->post('noStnk'),
            "idUser" => $this->input->post('idUser'),
            "tipeKendaraan" => $this->input->post('tipeKendaraan'),
            "tahunKendaraan" => $this->input->post('tahunKendaraan'),
            "nomorPolisi" => $this->input->post('nomorPolisi'),
            "seri" => $this->input->post('seri')
        ];
        
        $response = $this->client->request('POST', 'kendaraan', [
            'form_params' => $data
        ]);
        
        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result;
    }

    public function updateKendaraan()
    {
        $data = [
            "noStnk" => $this->input->post('noStnk', true),
            "idUser" => $this->input->post('idUser', true),
            "tipeKendaraan" => $this->input->post('tipeKendaraan', true),
            "tahunKendaraan" => $this->input->post('tahunKendaraan', true),
            "nomorPolisi" => $this->input->post('nomorPolisi', true),
            "seri" => $this->input->post('seri', true),
        ];

        $response = $this->client->request('PUT', 'kendaraan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
?>