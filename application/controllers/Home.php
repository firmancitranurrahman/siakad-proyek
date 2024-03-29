<?php

class Home extends CI_Controller{

    public function index(){
      $data['judul']='Selamat Datang Admin';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/home');
      $this->load->view('template/footer'); 
    }
    public function nilaiipa(){
      $data['judul']='Tambah Nilai Siswa';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/nilaiipa');
      }
      public function nilaiips(){
        $data['judul']='Tambah Nilai Siswa';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar'); 
        $this->load->view('admin/nilaiips');
        }
    public function pengumuman(){
      $data['judul']='Buat Pengumuman';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/pengumuman');
    }

    public function aturspp(){
      $data['judul']='Atur Status Spp';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/aturspp');
    }

    public function tambahsiswa(){
      $data['judul']='Halaman Tambah Siswa';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/tambahsiswa');
    }
    public function tambahguru(){
      $data['judul']='Halaman Tambah Guru';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/tambahguru');
    }
}