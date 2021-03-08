<?php
class Peoples extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'People Page';
        $this->load->model('Peoples_model', 'peoples');

        // mengambil data dari input pencarian
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        // pagination
        $config['total_rows'] = $this->db->count_all_results(); // bawaan dari CI
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 12;

        // inisialisasi 
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}
