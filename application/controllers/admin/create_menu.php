<?php
/**
 * This controller serves the user management pages and tools.
 * @copyright  Copyright (c) 2018-2019 hok khai
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/skeleton
 * @since      0.1.0
 */

if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

/**
 * This controller serves the user management pages and tools.
 * The difference with HR Controller is that operations are technical (CRUD, etc.).
 */
class create_menu extends CI_Controller {

    /**
     * Display the list of all list of food to create menu
     * @author khai hok <khai.hok.passerellesnumeriques.org>
     */
    public function index() {
        $this->load->helper('form');
        // $data['users'] = $this->users_model->getUsersAndRoles();
        $this->load->model('Dishes_model');
        $data['data_image']= $this->Dishes_model->getDishes();
         $data['meal_time']= $this->Dishes_model->getMealTime();

        $data['title'] = 'List of users';
        $data['activeLink'] = 'users';
        $data['flashPartialView'] = $this->load->view('templates/flash', $data, TRUE);
        $this->load->view('templates/header', $data);
        $this->load->view('menu/admin_dasboard', $data);
        $this->load->view('admin/create_menu', $data);
        $this->load->view('templates/footer', $data);
    }


    /**
     * Display the list of all list of food to create menu
     * @author khai hok <khai.hok.passerellesnumeriques.org>
     */
    public function postMenu() {
        $this->load->model('createDish');
        $data['msg'] = '';
        // $data['dish_menu'] = $this->createDish->getPostMenu();
        if (isset($_POST['submit'])) {

            $id = $_POST['dish_id'];
            if (empty($id) || $id==0) {
                $data['msg'] = 'empty';
            } else {
                $dishId = "'".implode("', ' ", $id)."'";
                $meal_time =$this->input->post('meal_time');
                $mealDate =$this->input->post('mealDate');
                $menuDescription =$this->input->post('menuDescription');
                // var_dump($menuDescription); die();
                 $this->createDish->getPostMenu($dishId, $meal_time, $mealDate, $menuDescription);
                }
            }
    }
}
