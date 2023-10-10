<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat datang... selamat belajar Web Programming";
        //this->load->view('view-latihan');
    }
    
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $data['nilai 1'] = $n1;
        $data['nilai 2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}