const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal.fire({
        title: 'Data Mahasiswa ',
        text: 'Berhasil ' +flashData,
        icon: 'success'
    });
}

$('.tombol-hapus').on('click', function(e){
    e.preventDefault();                                 // melakukan skip pada program default(disini href tidak dijalankan)
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Yakin Ingin Dihapus',
        text: "Data Pada Mahasiswa Dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iyaps'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    })
});