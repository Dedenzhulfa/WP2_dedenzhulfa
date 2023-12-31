<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {   $this->load->library('form_validation');
        $this->load->library('form_validation')->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah harus diisi',
            'min_length' => "Kode terlalu pendek"
        ]);

        $this->load->library('form_validation')->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus Diisi',
            'min_length' => 'Nama Terlalu Pendek'
        ]);

        if ($this->load->library('form_validation')->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];

        $this->load->view('view-data-matakulia', $data);
    }
}
}