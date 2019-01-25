

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_coba extends CI_Controller {

    public function index()
    {
        $data['tampil'] = "Ini dari CI";
        $this->load->view('v_coba', $data);
        
    }

}

/* End of file Controllername.php */



?>