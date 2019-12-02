<?php 
use GuzzleHttp\Client;

class Bengkel_model extends CI_Model
{
    private $client;
    
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' =>  'http://localhost/fixIn/api/'
        ]);
    }

    public function getBengkel()
    {

        $response = $this->client->request('GET', 'bengkel', []);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getBengkelById($id)
    {

        $response = $this->client->request('GET', 'bengkel', [
            'query' => [
            'id' => $id
            ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            return $result['data'][0];
    }

    public function deleteBengkel($id)
    {
        $response = $this->client->request('DELETE', 'bengkel', [
            'form_params' => [
                'id' => $id
            ]
        ]);
    
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function createBengkel()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "jenisUser" => $this->input->post('jenisUser', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "alamat" => $this->input->post('alamat', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true),
        ];
        
        $response = $this->client->request('POST', 'bengkel', [
            'form_params' => $data
        ]);
        
        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result;
    }

    public function updateBengkel()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "jenisUser" => $this->input->post('jenisUser', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "alamat" => $this->input->post('alamat', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true),
        ];

        $response = $this->client->request('PUT', 'bengkel', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}

?>