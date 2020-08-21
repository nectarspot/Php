<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('Form_Model');
    $this->load->database();
}
	
	 
	public function index()
	{
		$data['getdata']=$this->Form_Model->get_form_details();
		$this->load->view('index',$data);
	}

	public function createform()
	{
		$this->load->view('createform');
	}


  public function emp()
  {

    $data['getdata']=$this->Form_Model->get_form_details();
    $this->load->view('emp',$data);
  }


  public function empform()
  {
    $this->load->view('empolyeeform');
  }


  public function emailtmp()
  {
    $this->load->view('emailtemplate');
  }

   public function alllist()
  {
    $this->load->view('alllist');
  }
  public function empdetails()
  {
      $data['getdata']=$this->Form_Model->get_form_details();
    $data['getfield']=$this->Form_Model->get_field_data();
    $this->load->view('empdetails',$data);
  }

  public function studentdetails()
  {
      $data['getdata']=$this->Form_Model->get_form_details();
    $data['getfield']=$this->Form_Model->get_field_data();
    $this->load->view('studentdetails',$data);
  }

 

	public function addform(){
//print_r($_POST);exit;
         

         $data = array(
				            'fullName' => $this->input->post('fullName') ,
				            'city' => $this->input->post('city') ,
				            'email' => $this->input->post('email') ,
				            'phoneNumber' => $this->input->post('phoneNumber')  
				          
				            
				            
       				 );
            
      $result= $this->Form_Model->formdataadding($data);
         if ($result==1) {
            echo "success";exit;
         }
    }


public function addfield(){
//print_r($_POST);exit;
         

         $data = array(
                    'field_name' => $this->input->post('field_name')
               );
            
      $result= $this->Form_Model->formdatafield($data);
         if ($result==1) {
            echo "success";exit;
         }
    }


    public function formname(){

         

         
        $data = array(
          'text'=>$_POST['text']
                    );

         $result= $this->Form_Model->form_name($data);
         if ($result==1) {
            echo "success";exit;
         }
    }


     public function form_edit()
    { // print_r($_POST);exit;
       
$updateddata = array(
						'full_name'=>$this->input->post('full_name_edit'),
						'email'=>$this->input->post('email_edit'),
						'phonenumber'=>$this->input->post('phonenumber_edit'),
						'address'=>$this->input->post('address_edit'),
            'city'=>$this->input->post('city_edit')
					);
         
         $id=$this->input->post('userid');
        
          $insert2=$this->Form_Model->Form_update($updateddata,$id);
          if($insert2){
            echo 'updated';
            
          }
    }

    // public function form_del()
    // {//print_r($_POST);exit;
    //   $pno=$this->input->post("user_id");
    //     $del=$this->Form_Model->form_delete($pno);
    //     if ($del) {
    //       echo "deleted";
    //     }
    // }


     public function form_del()
    {//print_r($_POST);exit;
      $pno=$this->input->post("user_id");
        $del=$this->Form_Model->form_delete($pno);
        if ($del) {
          echo "deleted";
        }
    }  
    public function automail() {

                    $config = array();
                    $config['useragent'] = "CodeIgniter";
                    $config['protocol'] = "smtp";
                    $config['smtp_host'] = "ssl://smtp.gmail.com";
                    $config['smtp_user'] = "madhuboddakayala";
                    $config['smtp_pass'] = "M@dhyou@123";
                    $config['smtp_port'] = "465";
                    $config['mailtype'] = 'html';
                   
                    $config['charset'] = 'iso-8859-1';
                    $config['newline'] = "\r\n";
                    $config['wordwrap'] = true;
                  
                      $this->load->library('email');

                      $this->email->from('madhuboddakayala@gmail.com');
                      $to_email = $this->input->get_post('email');
                      $this->email->to($to_email);
                      $this->email->subject($sub);
                      $this->email->message($message);

                    
                     
                      
        if ($this->email->send()) {
          
             
             redirect('Home/index');
          
        } else {

                show_error($this->email->print_debugger());
             
            redirect('Home/forgot');
           
        }

    } 
}
