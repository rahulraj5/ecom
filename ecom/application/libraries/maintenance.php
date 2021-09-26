<?php 
class Maintenance{

private $CI;

public function __construct() {

    $this->CI =& get_instance();

    // flag on and off
    $this->flag( $this->CI->uri->segment(1) );

    // get the flag status
    $check_maintenance = $this->CI->db->select('flag_mode')->where(array('setting_name' => 'maintenance'))->get('tbl_settings')->result();

    //display view if true
    if($check_maintenance[0]->flag_mode == '1')
        $this->CI->load->view('maintenance');


}

private function flag($command){


    $this->CI->db->where('setting_name', 'evolving');

    switch($command){

        case "activate":                
            $this->CI->db->update('tbl_settings', array('flag_mode' => 1) ); 
        break;

        case "deactivate":
            $this->CI->db->update('tbl_settings', array('flag_mode' => 0) );
            redirect(site_url('/'));
        break;

    }
}

}