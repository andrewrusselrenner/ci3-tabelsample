<?php
    class Mahasiswa extends CI_Controller
    {
        // Inisialisasi model mahasiswa. Bisa juga di autoload
        // Tapi bikin berat server jadi kan yang butuh modelnya
        // cuman disini, yasudah load disini aja
        public function __construct()
        {
            parent::__construct();
            $this->load->model('mahasiswa_model');
        }

        // Fungsinya menampilkan semua data
        public function tabel()
        {
            $data['datamhs'] = $this->mahasiswa_model->get_data();

            $this->load->view('templates/kepala');
            $this->load->view('mahasiswa/tabel', $data);
            $this->load->view('templates/kaki');
            $this->session->set_userdata('status', FALSE);
        }

        // hapus data menurut id yg mau dihapus
        public function hapus($id)
        {
            echo 'bentar...';
            $hapus = $this->mahasiswa_model->hapus_data($id);

            if ($hapus == TRUE)
            {
                echo 'uhsheup sukses, kembali ke lepi...';
                $this->session->set_userdata('status', TRUE);
                redirect('mahasiswa/tabel','refresh');
            }
            echo 'gagal';
        }

        // Sama kaya tabel controller, bedanya disini cuman dapetin satu
        // data saja, gak semuanya di ambil. Dan, ini juga menggunakan
        // json api. Jadi, nanti datanya dilempar ke javascript lalu
        // dari javascript nampilkan datanya di field2 di modal edit
        // semenjak harus pakai modal.
        public function getdata($id = NULL)
        {
            try{
                $this->session->set_userdata('status', FALSE);

                if($id != NULL)
                {    
                    $data['datamhs'] = $this->mahasiswa_model->get_data($id);
                    http_response_code(200);
                    echo stripslashes(json_encode($data['datamhs']));
                } else {    
                    http_response_code(204);
                }

            } catch (Exception $e) {
                echo $e->getMessage();
                http_response_code(500);
            }
        }

        // Nah, kalau dari modal edit selesai dan ngirim data ke
        // http://goblok.com/mahasiswa/update (berupa permintaan post),
        // nanti controller ini tugasnya yg update ke database
        public function update()
        {
            echo 'bentar ';
            
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'prodi' => $this->input->post('prodi')
            );

            $update = $this->mahasiswa_model->update_data($data);

            if($update == TRUE)
            {
                echo ' uhsheup....';
                $this->session->set_userdata('status', TRUE);
                redirect('mahasiswa/tabel', 'refresh');
            } else {
                echo 'error';
            }
        }

        // Kalau ini tugasnya untuk nambah data, bukan masukkin ke db ya,
        // itu tugasnya di model nanti. 
        public function tambah()
        {
            echo 'bentar';
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'prodi' => $this->input->post('prodi')
            );

            $tambahdata = $this->mahasiswa_model->tambah_data($data);

            if ($tambahdata == TRUE)
            {
                echo 'siappp....';
                $this->session->set_userdata('status', TRUE);
                redirect('mahasiswa/tabel', 'refresh');
            }
        }
    }