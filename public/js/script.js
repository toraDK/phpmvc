$(function() {
    
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        $('.tombolTambahData').on('click', function() {
            $('#formModalLabel').html('Tambah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama').val('');
            $('#nrp').val('');
            $('#email').val('');
            $('#jurusan').val('');
            $('#id').val('');
        });
    })

    $('.tampilModalUbah').on('click', function () {
        
        $('#formModalLabel').html('ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/PHPMVC/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({

            url: 'http://localhost/PHPMVC/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }    
        });

    });

});