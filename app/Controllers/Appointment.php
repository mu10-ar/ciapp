<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\DepartmentModel;
use App\models\NotificationModel;
use App\models\UserModel;

class Appointment extends BaseController
{


    public function addappointment()
    {

        $data = [];
        
        $session = session();

        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }

        helper('form');
        if ($this->request->getMethod() == 'post') {
            $appointment = new AppointmentModel();


            $input = $this->validate([
                'doctor_id' => 'required',
                'patient_id' => 'required',
                'appointment_date' => 'required',
                'problem' => 'required',
                'department_name' => 'required',


            ]);




            if ($input == true) {

                $appointment->save([
                    'doctor_id' => $this->request->getPost('doctor_id'),
                    'patient_id' => $this->request->getPost('patient_id'),
                    'status' => $this->request->getPost('status'),
                    'department_name' => $this->request->getPost('department_name'),
                    'appointment_date' => $this->request->getPost('appointment_date'),
                    'problem' => $this->request->getPost('problem'),


                ]);
                $notification = new NotificationModel();
                $notification->save([
                    'message' => 'you have an appointment to approve <a class="text-primary" href="appointments"> click to view</a>',
                    'user_id' => $this->request->getPost('doctor_id')
                ]);
                $success = true;
                return  redirect()->to(base_url()."appointments");
            } else {
                $data['validation'] = $this->validator;
            }
        }
        $department = new DepartmentModel();
        $data['department'] = $department->getDepartmentRecord();
        $doctor = new UserModel();
        $data['doctor'] = $doctor->getDoctorRecord();
        $patient = new UserModel();
        $data['patient'] = $patient->getpatientRecord();





   

        echo view('partials/sidebar', $data);
        echo view('appointment/addappointment');

        echo view('partials/footer');
    }


    public function appointments()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        $appointment = new AppointmentModel();
        $data['appointment'] = $appointment->getAppointmentrecord();

        echo view('partials/sidebar', $data);
        echo view('appointment/appointmentlist');
        echo view('partials/footer');
    }

    public function approve($id, $patient)
    {



        $session = session();

        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        helper('form');

        $appointment = new AppointmentModel();




        $appointment->update($id, [
            'status' => '1'
        ]);
        $notification = new NotificationModel();
        $notification->save([
            'message' => 'your appointment has been approved <a class="text-primary" href="myappointments"> click to view</a>',
            'user_id' => $patient
        ]);
        $success = true;
        return redirect()->to('appointments');
    }


    public function decline($id)
    {
        $appointment = new AppointmentModel();
        $appointment->delete($id);
        return redirect()->to(base_url('/appointments'));
    }
}