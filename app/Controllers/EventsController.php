<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\bedModel;
use App\models\EventsModel;
use App\models\LoginModel;
use App\models\PrescriptionModel;
use App\models\UserModel;

class EventsController extends BaseController
{

     
    public function addevent()
    {


         
        $session = \Config\Services::session();
        $data['session'] = $session;

        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }

         helper('form');
        if ($this->request->getMethod()=='post') {
            $users=new EventsModel();

        $input=$this->validate([
               'event_name'=> 'required',
               'event_description'=> 'required',
           
               

           ]);


           
           
           if ($input==true) {
               
               $users->save([
                'event_name'=> $this->request->getPost('event_name'),
                'event_description' => $this->request->getPost('event_description'),
           
                
                
            ]);
            $session->setFlashdata('success', ' event Added Successfully');
              return  redirect()->to('eventslist');
           }
           else {
                  $data['validation']=$this->validator;
              
           } 

        }

        echo view('partials/sidebar');
        echo view('events/addevent');
        echo view('partials/footer');


    }

    public function eventslist()
    {
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
        
        $events=new EventsModel();
         $data['event']=$events->getevents();
         echo view('partials/sidebar',$data);
         echo view('events/eventslist');
         echo view('partials/footer');
    }


    public function deleteevent($id)
    {
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }


        
        $events=new EventsModel();
        $events->delete($id);
        $session->setFlashdata('success', ' event Added Successfully');
              return  redirect()->to('eventslist');
    }

}