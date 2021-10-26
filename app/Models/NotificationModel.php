<?php

namespace App\models;

use CodeIgniter\Model;

class NotificationModel extends Model
{
    protected $table = 'notifications';
    protected $primaryKey = 'notification_id';
    protected $allowedFields = [
        'user_id',
        'message'
    ];
    public function getNotifications()
    {
        $session = session();
        return $this->orderBy('notification_id', 'DESC')->where('user_id', $session->get('user_id'))->findAll();
    }
}