<?php
class Form_Model extends CI_Model 
{

public function formdataadding($data)
  { 
    $query= $this->db->insert('form_table',$data);
    return $query;
 }

 public function formdatafield($data)
  { 
    $query= $this->db->insert('addfield',$data);
    return $query;
 }

 public function form_name($data)
  { 
    $query= $this->db->insert('form_type',$data);
    return $query;
 }
 
 public function get_form_details()
 {
    $query=$this->db->get('formapi_table');
    return $query->result();
 }

 public function get_field_data()
 {
    $query=$this->db->get('addfield');
    return $query->result();
 }



 public function Form_update($updateddata,$id)
    {//print_r('hii');exit;
      
    $this->db->where('id', $id);
    $result=$this->db->update('formapi_table',$updateddata);
    return $result;
    }

    // public function form_delete($pno)
    // {
    //   $this->db->where('id', $pno);
    // $result=$this->db->delete('formapi_table');
    // return $result;
    // }


    public function form_delete($pno)
    {
      $this->db->where('id', $pno);
    $result=$this->db->delete('formapi_table');
    return $result;
    }


}