<?php

namespace App\Controllers\Cliente;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $this->view();
    }

    public function view($page = 'login')
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

    protected function verificarEmailSenha()
    {
        $email = $this->request->getPost('email');
        $passwordOld = ($this->request->getPost('password'));
        $password = md5($this->request->getPost('password'));

        $db = \Config\Database::connect();
        $builder = $db->table('usuarios');
        $builder->where('email', $email);
        $builder->where('senha', $password);
        $builder->orWhere('senha', $passwordOld);

        $resultado = $builder->countAllResults();

        $retorno = false;

        if ($resultado > 0) {
            $session = \Config\Services::session();
            $usuarioLogado = [
                'usuario' => $email
            ];

            $retorno = true;

            $session->set($usuarioLogado);
        }
        return $retorno;
    }

    public function Login()
    {
        if ($this->verificarEmailSenha()) {      
            echo 'ok';    
            exit;
        } else {
            echo 'não ok';
        }
    }
}
