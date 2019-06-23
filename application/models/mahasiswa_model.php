<?php
    class mahasiswa_model extends CI_Model
    {
        // Inisialisasi pustaka(library) database (anggap aja plugin). 
        // Bisa juga di autoload tapi bikin berat server
        // jadi kan yang butuh pustaka ini gak semua
        // komponen di CI, jadi ya disini aja, kasihan server teriak.
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        // Gunanya untuk ambil data dari database
        public function get_data($id = NULL)
        {
            // Kalo id nya di url gak ada, ambil semua data di tabel mahasiswa
            if($id === NULL)
            {
                $kueri = $this->db->get('mahasiswa');

                // Lalu kembali ke controller dengan data array biar rapi
                return $kueri->result_array();
            }

            // Kalo ada, kaya goblok.com/mahasiswa/getdata/1211, maka ambil data
            // dari database dimana id nya 1211
            $kueri = $this->db->get_where('mahasiswa', array('id' => $id));

            // Lalu kembali ke controller dengan hasil berdasarkan baris yg didapat
            return $kueri->row_array();
        }

        // Gunanya untuk hapus data dari db berdasarkan id dari url yg
        // diminta. Contoh: goblok.com/mahasiswa/1211
        public function hapus_data($id)
        {
            // Maka akan cari dulu baris data yang memiliki id 1211
            $this->db->where('id', $id);

            // Kalo ketemu, hapus datanya
            $this->db->delete('mahasiswa');

            $status = FALSE;

            if ($this->db->affected_rows() > 0)
            {$status = TRUE;}
            
            return $status;
        }

        // Gunanya update data yg ada di db. Disini, isi2 data yg diinput
        // user ada di controller, jadi dari controller datanya langsung
        // dilempar kesini karena udah diproses disana.
        public function update_data($data)
        {
            // Eits, tapi kan gak tau baris data mana dulu yg mau dihapus.
            // Nah, jadi pilih dulu id nya. Id ini dapatnya darimana? kan
            // di form gak diketik? dapatnya dari form juga cuman kita
            // sembunyikan jadi gak ketampil di form.
            $id = $this->input->post('id');

            // Gunanya update datanya ke db. mahasiswa itu nama tabelnya,
            // $data itu data apa yg mau dimasukkan (udah kita pilah-
            // pilah di controller), dan $id dimana yg menentukan id baris
            // data mana yg akan diupdate datanya.
            $this->db->update('mahasiswa', $data, array('id' => $id));

            if ($this->db->affected_rows() < 0)
            {return FALSE;}
            
            return TRUE;
        }

        // Gunanya ya untuk tambah data ke database.
        public function tambah_data($data)
        {
            $this->db->insert('mahasiswa', $data);

            if ($this->db->affected_rows() < 0)
            {return FALSE;}
            
            return TRUE;
        }
    }