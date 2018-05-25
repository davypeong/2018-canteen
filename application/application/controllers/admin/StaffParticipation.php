<?php 
  if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

  /**
   * This controller serves the user management pages and tools.
   * The difference with HR Controller is that operations are technical (CRUD, etc.).
   */
  class StaffParticipation extends CI_Controller {
        /**
         * Default constructor
         * @author kimsoeng kao <kimsoeng.kao@student.passerellesnumeriques.org>
         */
        public function __construct() {
        parent::__construct();
        log_message('debug', 'URI=' . $this->uri->uri_string());
        $this->session->set_userdata('last_page', $this->uri->uri_string());
        if($this->session->loggedIn === TRUE) {
           // Allowed methods
           if ($this->session->isSuperAdmin) {
             //User management is reserved to admins and super admins
           } else {
             redirect(base_url());
           }
         } else {
           redirect('connection/login');
         }
        $this->load->model('users_model');
    }

       // public function getParticipant()
       // {
       //         $this->load->model('Participate_model');
       //         $data['userParticipate'] = $this->Participate_model->getParticipant();
       //         $data['title'] = 'List of Participate';
       //         $this->load->view('templates/header', $data);
       //         $this->load->view('menu/admin_dasboard', $data);
       //         $this->load->view('Calendar/UserParticipation', $data);
       //         $this->load->view('templates/footer', $data);

       // }
       function getListParticipate(){
          $data['page'] = 'Calendar/StaffParticipation';
          $this->load->model('Users_model');
          $this->load->model('Participate_model');
          $data['data_participate'] = $this->Participate_model->getParticipant();
           $data['status'] = $this->Users_model->getStaffStatus();
          $data['userParticipate'] = $this->Users_model->getListParticipate();
          $data['title'] = 'List of Participate';
          $this->load->view('templates/header', $data);
          $this->load->view('menu/admin_dasboard', $data);
          $this->load->view('Calendar/StaffParticipation', $data);
          $this->load->view('templates/footer', $data);
        }


        function sendReminded(){
           $this->load->model('Participate_model');
           $this->Participate_model->getReminded();
         }

     }
 ?>