<?php


class dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('admin/model_dashboard');
    }

    public function index()
    {

        $data['title'] = "halaman dashboard";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/side_bar');
        $this->load->view('admin/dashboard');
        $this->load->view('template_admin/fotter');
    }


    public function get_data()
    {


        $warga = $this->input->post('warga');

        $this->load->model('admin/model_dashboard');
        $data['warga'] = $this->model_dashboard->get_data();
        $data['title'] = "data warga";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/side_bar');
        $this->load->view('admin/data_warga', $data);
        $this->load->view('template_admin/fotter');
    }



    public function tambah_data()
    {
        $data['title'] = "tambah warrga";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/side_bar');
        $this->load->view('admin/tambah_warga', $data);
        $this->load->view('template_admin/fotter');
    }

    public function save()
    {
        $data = array(

            'nama_warga' => $this->input->post('nama'),
            'no_kk' => $this->input->post('kk'),
            'nik' => $this->input->post('nik'),
            'no_telpon' => $this->input->post('nomor_hp'),
            'status' => $this->input->post('status'),
            'penghasilan' => $this->input->post('penghasilan'),
        );

        $this->load->model('admin/model_dashboard');
        $this->model_dashboard->tambah_warga('warga', $data);
        redirect('admin/dashboard');
    }


    public function delete($id_warga)
    {
        $this->load->model('admin/model_dashboard');
        $this->model_dashboard->hapus($id_warga);
        redirect('admin/dashboard/get_data');
    }

    public function update($id_warga)
    {

        // $this->load->model('admin/model_dahsboard');

        $data = array(
            'title' => "update warga",
            'id_warga' => $id_warga,
        );


        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/side_bar');
        $this->load->view('admin/update_warga', $data);
        $this->load->view('template_admin/fotter');
    }

    public function set_update()
    {
        $id_warga = $this->input->post('id_warga');
        $this->load->model('admin/model_dashboard');
        $this->model_dashboard->update($id_warga);
        redirect('admin/dashboard/get_data');
    }

    public function cari()
    {

        

        $keywoard = $this->input->post('cari');

        $this->load->model('admin/model_dashboard');
        $data['keywoards'] = $this->model_dashboard->get_keywoard($keywoard);
        $data['title'] = "cari warga";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/side_bar');
        $this->load->view('admin/cari_warga', $data);
        $this->load->view('template_admin/fotter');
    }
}
