<?php
class Common_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function select_data($table,$field,$warr='')
    {
        if($warr!='')
        {
            $this->db->where($warr);
        }
        return $this->db->select($field)->from($table)->get()->result_array();

    }
    public function insert_data($table,$data)
    {
        return $this->db->insert($table,$data);
    }
    public function Update_user($table,$data,$arr)
    {
        $this->db->where($arr);
        $this->db->update($table,$data);
    }
    public function delete_user($table,$arr)
    {
        $this->db->where($arr);
        $this->db->delete($table);
    }
    public function Check_update($table,$data,$arr)
    {
        $this->db->where($arr);
       return $this->db->update($table,$data);

    }
    public function delete_customer($table,$arr)
    {
        $this->db->where($arr);
       return $this->db->delete($table);

    }
    public function update_customer($table,$data,$arr)
    {
        $this->db->where($arr);
       return $this->db->update($table,$data);
    }
   

  public function select_data_category($table,$field,$warr='')
{
    if($warr!='')
    {
        $this->db->where($warr);
    }
    return $this->db->select($field)->from($table)->get()->result_array();

}
public function delete_cat($table,$arr)
{

    $this->db->where($arr);
    return $this->db->delete($table);

}
public function update_category($table,$data,$arr)
{
    $this->db->where($arr);
   return $this->db->update($table,$data);
}
public function update_Sub_category($table,$data,$arr)
{
    $this->db->where($arr);
   return $this->db->update($table,$data);
}


}

?>