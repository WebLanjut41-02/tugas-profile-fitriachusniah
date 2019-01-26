<?php
/**
 * Created by PhpStorm.
 * User: Fitria R. Chusniah
 * Date: 25/01/2019
 * Time: 23.39
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('Home');
    }

    public function komentar(){
        $komentar 	= $this->input->post('komentar',true);
        $this->session->set_userdata('data_komentar',$komentar);
        $this->load->view('Komentar');
    }
}
?>