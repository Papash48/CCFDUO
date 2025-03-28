<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AgentProtect implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if($session->get('type') != 'agent') {
            return redirect()->to('/');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $resquest, $arguments = null){

    }
}