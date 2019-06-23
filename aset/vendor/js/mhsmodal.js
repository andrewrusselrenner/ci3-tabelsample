    // Ambil data untuk di masukkan ke value input saat edit menggunakan AJAX
    function editData(id)
    {
        var id = id;
        $.ajax({
        type: "GET",
        url: uri+"getdata/"+id,
        cache: false,
        success: function(data){
            modala(data); 
            },
        error: function(errorThrown){
            console.log(errorThrown);
        }
        })
    }

    // Modal untuk tambah
    function tambahData()
    {
        Swal.fire({
            title: 'Tambah data',
            html:
                '<form action="tambah" name="tambahdata" id="tambahdata" method="post">'+
                '<input id="nim" name="nim" class="swal2-input" placeholder="Ketik NIM disini.." required>'+
                '<input id="nama" name="nama" class="swal2-input" placeholder="Ketik Nama disini.." required>'+
                '<input id="prodi" name="prodi" class="swal2-input" placeholder="Ketik Prodi disini.." required>'+
                '</form>',
            focusConfirm: false,
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonText: "Simpan",
            cancelButtonText: "Batal",
            preConfirm: () => {
                return document.tambahdata.submit();
            },
            allowOutsideClick: () => !Swal.isLoading()
        })
    }

    // Modal untuk edit
    function modala(data){
        const mhs = JSON.parse(data);

        Swal.fire({
            title: 'Perbaharui data',
            html:
                '<form action="update" name="updatedata" id="updatedata" method="post">'+
                '<input type="hidden" id="id" name="id" value="'+mhs.id+'">'+
                '<input id="nim" name="nim" class="swal2-input" value="'+mhs.nim+'" placeholder="Ketik NIM disini.." required>'+
                '<input id="nama" name="nama" class="swal2-input" value="'+mhs.nama+'" placeholder="Ketik Nama disini.." required>'+
                '<input id="prodi" name="prodi" class="swal2-input" value="'+mhs.prodi+'" placeholder="Ketik Prodi disini.." required>'+
                '</form>',
            focusConfirm: false,
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonText: "Simpan",
            cancelButtonText: "Batal",
            buttonsStyling: true,
            preConfirm: () => {
                return document.updatedata.submit();
            },
            allowOutsideClick: () => !Swal.isLoading()
        })
    }

    // Modal untuk hapus data
    function hapusData(id)
    {
    Swal.fire({
    title: 'Yakin mau dihapus?',
    text: "Aksi ini akan menghapus data dari basis data!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Ya, hapus sud!',
    cancelButtonText: 'Jangan!',
    customClass: {
      confirmButton: 'btn btn-danger'
    },
    }).then((result) => {
    if (result.value) {
        document.location.href = uri+'hapus/'+id;
    }
    })
}