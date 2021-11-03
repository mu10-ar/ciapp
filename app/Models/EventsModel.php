<?php
namespace App\models;
use CodeIgniter\Model;
class EventsModel extends Model{
    protected $table ='events';
    protected $primaryKey ='event_id';
    protected $allowedFields=[
        'event_name',
        'event_description'
        
       

    ];
    public function getevents()
    {
       return $this->orderBy('event_id','DESC')->findAll();
    }

}