<?php

namespace App\Controllers;

use App\models\MessageModel;
use App\models\UserModel;

class Messages extends BaseController
{


    public function inbox()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }

        $message= new MessageModel();
        $data['inbox']=$message->getinbox();

       
        echo view('partials/sidebar',$data);
        echo view('message/inbox');
        echo view('partials/footer');
    }



    public function sent()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        echo view('partials/sidebar');
        echo view('message/sent');
        echo view('partials/footer');
    }


    public function newmessage()
    {
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
                $data=[];
                helper('form');
                $message= new MessageModel ();
                   
        if( $this->request->getMethod()=='post'){
               $input=$this->validate([
                'message'=> 'required',
                'sender_id'=> 'required',
                'reciever_id'=> 'required'
                
               ]);

                   if ($input==true) {
               
                    $message= new MessageModel();
                    $message->save([
                         'message'=> $this->request->getPost('message'),
                'sender_id' => $this->request->getPost('sender_id'),
                'reciever_id' => $this->request->getPost('reciever_id'),
                'subject' => $this->request->getPost('subject')
                    ]);
                    
                 
                    
                    
               
           }
           else {
                         $data['validation']=$this->validator;
                    }
        }
        
        $user=new UserModel();
        $data['user']=$user->getAllUserRecord();
        echo view('partials/sidebar',$data);
        echo view('message/newmessage');
        echo view('partials/footer');
    }


public function delete($id)
{
   $message= new MessageModel();
   $message->delete($id);
   return redirect()->to(base_url().
   '/inbox');
}
 
}