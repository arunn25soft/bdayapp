<?php
 class Pages extends CI_Controller {

    function home() {
        $this->load->library('user_agent');
        $data['Title']= PROJECT_NAME." | Home ";
        $data['PageTitle'] = "Dashboard";
        $data['Page'] = "home";
        $data['Operation_system'] = $this->agent->platform();
        $data['Browser'] = $this->agent->browser();
        $data['Ip_address'] = $_SERVER['REMOTE_ADDR'];
        $data['User_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $this->load->view('fe/templates/header',$data);
        $this->load->view('fe/templates/nav');
        $this->load->view('fe/pages/home',$data);
        $this->load->view('fe/templates/footer');
    }
    function list_employees() {
        $this->load->library('user_agent');
        $data['Title']= PROJECT_NAME." | Employees ";
        $data['PageTitle'] = "Employees";
        $data['Page'] = "employees";
        $data['Operation_system'] = $this->agent->platform();
        $data['Browser'] = $this->agent->browser();
        $data['Ip_address'] = $_SERVER['REMOTE_ADDR'];
        $data['User_agent'] = $_SERVER['HTTP_USER_AGENT'];
        $this->load->view('fe/templates/header',$data);
        $this->load->view('fe/templates/nav');
        $this->load->view('fe/pages/employee_list',$data);
        $this->load->view('fe/templates/footer');
    }
	 

	 
 }
?>
