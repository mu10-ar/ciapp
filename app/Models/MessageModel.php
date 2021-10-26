<?php
namespace App\models;
use CodeIgniter\Model;
class MessageModel extends Model{
    protected $table ='messages';
    protected $primaryKey ='message_id';
    protected $allowedFields=[
        'subject',
        'sender_id',
        'reciever_id',
        'message',
        'sent_at',
    ];
    public function getinbox()
    {
        $session=session();
        return $this->join('users','id=sender_id')->orderby('message_id','desc')->where('reciever_id',$session->get("user_id"))->findall();
    }

   
    
}
