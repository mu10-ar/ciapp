<?php

namespace App\Controllers;

class SallaryController extends BaseController
{
    public function addsallary()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $data = [];
        $session=session();


        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }

        echo view('partials/sidebar');
        echo view('Accounts/addsallary');
        echo view('partials/footer');

    }
    public function sallarylist()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $data = [];
        $session=session();


        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }

        echo view('partials/sidebar');
        echo view('Accounts/salaries');
        echo view('partials/footer');

    }
}