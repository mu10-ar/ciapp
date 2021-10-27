<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\AssignBedmodel;
use App\models\bedModel;
use App\models\DepartmentModel;
use App\models\NotificationModel;
use App\models\UserModel;
use CodeIgniter\Database\Query;



class BillingController extends BaseController
{
    public function addbill(){


        echo "add bill";
        echo view("partials/sidebar");
        echo view("billing/addbill");
        echo view("partials/footer");
    }
}