<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthProtect implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if($session->has('client') || $session->has('agent') ) {
            if(!$session->get('type','client') || !$session->get('type','agent')){
                return redirect()->to('/');
            }
        }
        else{
            return redirect()->to('/');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $resquest, $arguments = null){
        
    }
}