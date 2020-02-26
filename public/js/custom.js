var status = $('#status').data('status');

if (status) {
    Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: status,
    });
}
