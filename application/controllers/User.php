<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class User extends CI_Controller {
    
    function __construct() {
        parent::__construct() ;

        if($this->session->userdata('logged')<>1) {
            redirect(site_url('auth')) ;
        }
    }

    public function index() {
        $this->load->model('user_model') ;

        $rows = $this->user_model->tampilkanSemua()->result() ;

        $data = array (
            'title' => 'SMAN 4 MACIPO' ,
            'judul' => 'Halaman Admin' ,
            'content' => 'user' ,
            'rows' => $rows
        ) ;

        $this->load->view('layout' , $data) ;
    }

    public function tambah() {
        $data = array (
            'title' => 'SMAN 4 MACIPO' ,
            'action' => base_url().'index.php/user/aksitambah' ,
            'content' => 'user_form' ,
            'username' => '' ,
            'password' => '' ,
            'id' => '' ,
            'tombol' => 'tambah' 
        ) ;

        $this->load->view('layout' , $data) ;

    }

    public function aksitambah() {
        $data = array(
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password'))
        );
        
        $this->load->model('user_model');
        $this->user_model->tambah($data);
        
        redirect(base_url().'index.php/user');
        
    }
    public function ubah($id) {
            
        $this->load->model('user_model');
        $row = $this->user_model->getById($id)->row();
        
        $data = array(
            'title' => 'harviacode.com',
            'action' => base_url().'index.php/user/aksiubah',
            'content' => 'user_form',
            'username' => $row->username,
            'password' => '',
            'id_user' => $row->id_user,
            'tombol' => 'Ubah'
        );
        
        $this->load->view('layout',$data);

    }

    public function aksiubah() {
            
        //            warning : aksi ini tanpa ada validasi form
                    $updatepassword = array(
                        'username' => $this->input->post('username'),
                        'password' => md5($this->input->post('password'))
                    );
                    
                    $tidakupdatepassword = array(
                        'username' => $this->input->post('username'),
                    );
                    
                    $data = trim($this->input->post('password'))<>''?$updatepassword:$tidakupdatepassword;
                    
                    $this->load->model('user_model');
                    $this->user_model->ubah($this->input->post('id_user'),$data);
                    
                    redirect(base_url().'index.php/user');
                }
                
                public function delete($id) {
            
                    $this->load->model('user_model');
                    $this->user_model->hapus($id);
                    
                    redirect(base_url().'index.php/user');
                }  

}