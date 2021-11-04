<?php

namespace App\Controllers;

class accounts extends BaseController
{
    public function salaries()
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