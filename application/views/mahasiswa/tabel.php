<style>
    /* Biar isi tabel menengah */
    table{
        text-align: center;
    }

    /* Biar ikon di modalnya gak kegedean */
    .swal2-icon {
        font-size: 12px !important;
    }
</style>

<!-- Bagian header untuk diatasnya -->
    <header>
        <div class="container">
            <h1 class="display-3 text-center">Data Mahasiswa</h1>
            <br>
            <button id="tambahdata" class="btn btn-outline-primary pull-left mb-2" onclick="tambahData()">Tambah Data</button>
        </div>
    </header>

    <!-- Bagian tabel -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Disini tabelnya -->
                    <table class="table table-center">

                        <!-- Disini kepalanya tabel -->
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi/Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <!-- Disini badan tabelnya -->
                        <tbody>
                        <?php

                        // Inisialisasi terlebih dahulu, nanti akan bertambah di foreach
                        $nomor = 1;

                        // Perulangan, gak perlu satu-satu datanya ditulis ulang
                        foreach ($datamhs as $d)
                        {
                        ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $d['nim']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['prodi']; ?></td>
                                <td>
                                    <button type="submit" id="<?php echo $d['id'] ?>" class="btn btn-outline-primary mb-2 mx-2" onclick="editData(this.id)">Edit</button>

                                    <button type="submit" id="<?php echo $d['id'] ?>" class="btn btn-outline-primary mb-2 mx-2" onclick="hapusData(this.id)">Hapus</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script>
    // Atur variabel global yang bakal dipake disemua fungsi 
    // di javascript bair gak cape ngetik
    var uri = "<?= base_url(); ?>mahasiswa/";
    </script>

    
