$(document).ready(function () {
    $('#tambahKertasKerja').on('click', function () {
        Swal.fire({
            title: 'Tambah Kertas Kerja',
            html: `
                <form id="kertasKerja" action="/kertas_kerja" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun:</label>
                        <input type="text" name="tahun" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                        <textarea name="deskripsi" class="form-control" required></textarea>
                    </div>
                </form>`,
            showCancelButton: true,
            confirmButtonText: 'Submit',
            preConfirm: () => {
                const form = $('#kertasKerja');

                form.submit();
            }
        });
    });

    $('#tambahSubKertasKerja').on('click', function () {
        const kertasKerjaId = $(this).data('id');
        Swal.fire({
            title: 'Tambah Data Kertas Kerja',
            html: `
                <form id="subKertasKerja" action="/sub_kertas_kerja" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                <input type="hidden" name="kertas_kerja" value="${kertasKerjaId}">
                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor:</label>
                        <input type="text" name="nomor" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun:</label>
                        <input type="text" name="tahun" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori:</label>
                        <select name="kategori" class="form-select" required>
                            <option value="Kontol">Kontol</option>
                            <option value="Memek">Memek</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                        <textarea name="deskripsi" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file_pdf" class="form-label">Upload File PDF:</label>
                        <input type="file" name="file_pdf" class="form-control" accept="application/pdf" required>
                    </div>
                </form>`,
            showCancelButton: true,
            confirmButtonText: 'Submit',
            preConfirm: () => {
                const form = $('#subKertasKerja');

                form.submit();
            }
        });
    });

    $('#detailKerja').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });


    $('.filePdf').on('click', function () {
    const dataPdf = $(this).data('pdf');
    Swal.fire({
        title: 'Surat Tugas Audit Operasional Departemen Keuangan',
        html: `<iframe src="${dataPdf}" style="width: 100%; height: 500px;" frameborder="0"></iframe>`,
        showCloseButton: true,
        showConfirmButton: false,
        showCancelButton: true,
        cancelButtonText: 'Tutup',
        cancelButtonColor: '#dc3545',
        customClass: {
            popup: 'pdf-popup'
        }
    });
});
})