$(document).ready(function () {
    $('#tambahLaporanHasilAudit').on('click', function () {
        Swal.fire({
            title: 'Tambah Laporan Hasil Audit',
            html: `
                <form id="laporanHasilAudit" action="/laporanhasilaudit" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor:</label>
                        <input type="text" name="nomor" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_lha" class="form-label">Nama LHA :</label>
                        <input type="text" name="nama_lha" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="uraian_lha" class="form-label">Uraian LHA :</label>
                        <textarea name="uraian_lha" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal :</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Notulis" class="form-label">Notulis:</label>
                        <input name="Notulis" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Catatan" class="form-label">Catatan :</label>
                        <textarea name="Catatan" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <select name="status" class="form-select" required>
                            <option value="draft">Draft</option>
                            <option value="selesai ">Selesai</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="file_pdf" class="form-label">Upload File PDF:</label>
                        <input type="file" name="file_pdf" class="form-control" accept="application/pdf" required>
                    </div>
                </form>`,
            showCancelButton: true,
            confirmButtonText: 'Submit',
            preConfirm: () => {
                const form = $('#laporanHasilAudit');

                form.submit();
            }
        });
    });

    $('.filePdf').on('click', function () {
        const dataPdf = $(this).data('pdf');
        const dataNomor = $(this).data('nomor');
        const dataNamaLaporanHasilAudit = $(this).data('nama_lha');
        const dataUraian = $(this).data('uraian_lha');
        const dataTanggal = $(this).data('tanggal');
        const dataCatatan = $(this).data('catatan');
        const dataNotulis = $(this).data('Notulis');
        const dataStatus = $(this).data('status');

        Swal.fire({
            title: "Detail Laporan Hasil Audit",
            html: `
                <div class="row h-100">
                    <div class="col-lg-6 col-md-12 h-100">
                        <div class="ratio ratio-4x3 border h-100">
                            <iframe src="${dataPdf}" frameborder="0" style="width: 100%; height: 100%;" allowfullscreen></iframe>
                        </div>
                    </div>
    
                    <div class="col-lg-6 col-md-12 h-100" style="overflow-y: auto;">
                        <table class="table table-border mb-3">
                            <tbody>
                                <tr>
                                    <th class="text-muted" style="width: 35%;">Nomor</th>
                                    <td>${dataNomor}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Nama LHA</th>
                                    <td>${dataNamaLaporanHasilAudit}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Uraian</th>
                                    <td>${dataUraian}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Tanggal :</th>
                                    <td>${dataTanggal}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Notulis</th>
                                    <td>
                                        ${dataNotulis}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Catatan</th>
                                    <td>
                                        ${dataCatatan}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Status</th>
                                    <td>
                                        <span class="badge ${dataStatus === 'Berlaku' ? 'bg-success' : 'bg-danger'}">${dataStatus}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-outline-danger mb-3" href="${dataPdf}" download id="downloadBtn">
                            <i class="fas fa-download me-2"></i>Download Dokumen
                        </a>
                    </div>
                </div>`,
            showCloseButton: false,
            showCancelButton: true,
            cancelButtonText: 'Tutup',
            cancelButtonColor: '#dc3545',
            showConfirmButton: false,
            width: '100%',
            heightAuto: true,
            customClass: {
                popup: 'full-screen-modal'
            },
            didOpen: () => {
                // Make the modal cover the full screen
                document.querySelector('.swal2-popup').style.height = '100vh';
                document.querySelector('.swal2-popup').style.width = '100vw';
            }
        });
    });
})