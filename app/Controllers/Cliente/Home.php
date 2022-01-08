<?php

namespace App\Controllers\Cliente;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $this->view();
    }

    public function view($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/cliente/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $data['session'] = \Config\Services::session();
        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('cliente/templates/header', $data);
        echo view('cliente/' . $page, $data);
        echo view('cliente/templates/footer', $data);
    }
}
