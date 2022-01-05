<?php

namespace App\Controllers\Cliente;

use App\Controllers\BaseController;
use App\Models\Cliente\CadastroModel;

class Cadastro extends BaseController
{

    public function index()
    {
        $this->view();
    }

    public function view($page = 'cadastro')
    {
        if (!is_file(APPPATH . 'Views/cliente/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('cliente/templates/header', $data);
        echo view('cliente/' . $page, $data);
        echo view('cliente/templates/footer', $data);
    }

    public function novoUsuario()
    {
        // pegando os dados do usuário passado por parâmetro
        echo 'novo usuário';

        $cadastro = new CadastroModel();

        $firstName = $this->request->getPost('firstname');
        $laststName = $this->request->getPost('lastname');
        $user = $this->request->getPost('user');
        $password = $this->request->getPost('password');
        $email = $this->request->getPost('email');
        $password =  password_hash($password, PASSWORD_DEFAULT);
        $address = $this->request->getPost('address');
        $district = $this->request->getPost('district');
        $city = $this->request->getPost('city');
        $state = $this->request->getPost('state');
        $zipcode = $this->request->getPost('zipcode');

        // criando um array com os dados recebidos
        $dados = [
            'nome' => $firstName,
            'sobrenome' => $laststName,
            'usuario' => $user,
            'senha' => $password,
            'email' => $email,
            'logradouro' => $address,
            'bairro' => $district,
            'cidade' => $city,
            'estado' => $state,
            'cep' => $zipcode,
        ];

        $cadastro->insert($dados);

        // abrindo conexão com o banco de dados
        // $db = db_connect();
        // $db->query(
        //     "
        //     INSERT INTO usuarios (nome,sobrenome,usuario,senha,email)
        //     VALUES (:nome:,:sobrenome:,:usuario:,:senha:,:email:)",
        //     $dados
        // );
        // $db->close();
        // $this->db->insert('usuarios', $dados);
        echo 'fim';
    }
}
