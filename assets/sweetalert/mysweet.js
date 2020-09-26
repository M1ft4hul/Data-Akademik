const Sweetalert = $('.sweetalert').data('sweetalert');
// console.log(Sweetalert);

if (Sweetalert) {
	Swal.fire({
		title: 'Berhasil',
		text: Sweetalert,
		type: 'success'
	});
}

// tombol hapus
$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href'); // disetiap data ada tombol hapus

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data Yang Di Hapus Tidak Dapat Kembali Lagi!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus Ini!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
