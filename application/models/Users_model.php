<?php 
use GuzzleHttp\Client;

class Users_model extends CI_Model
{
    private $client;
    
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' =>  'http://localhost/fixIn/api/'
        ]);
    }

    public function getUsers()
    {

        $response = $this->client->request('GET', 'users', []);

        $result = json_decode($response->getBody()->getContents(), true);
 
        return $result['Data'];
    }

    public function getUsersById($id)
    {

        $response = $this->client->request('GET', 'users', [
            'query' => [
            'id' => $id
            ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            return $result['Data'][0];
    }

    public function deteleUsers($id)
    {
        $response = $this->client->request('DELETE', 'users', [
            'form_params' => [
                'id' => $id
            ]
        ]);
    
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function createUsers()
    {
        $data = [
            "idUser" => $this->input->post('idUser', true),
            "idBengkel" => $this->input->post('idBengkel', true),
            "jenisUser" => $this->input->post('jenisUser', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "email" => $this->input->post('email', true),
        ];
        
        $response = $this->client->request('POST', 'users', [
            'form_params' => $data
        ]);
        
        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result;
    }

    public function updateBengkel()
    {
        $data = [
            "idUser" => $this->input->post('idUser', true),
            "idBengkel" => $this->input->post('idBengkel', true),
            "jenisUser" => $this->input->post('jenisUser', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "email" => $this->input->post('email', true),
        ];

        $response = $this->client->request('PUT', 'users', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}

?>