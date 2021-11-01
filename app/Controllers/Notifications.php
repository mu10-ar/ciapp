<?php

namespace App\Controllers;

use App\models\NotificationModel;

class Notifications extends BaseController
{


    public function notifications()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        $notifications = new NotificationModel();
        $data['notifications'] = $notifications->getNotifications();

        echo view('partials/sidebar', $data);
        echo view('notifications/notifications');
        echo view('partials/footer');
    }
    public function deletenotification($id)
    {

        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $notification = new NotificationModel();
        $notification->delete($id);
        return redirect()->to(base_url('notifications'));
    }
}