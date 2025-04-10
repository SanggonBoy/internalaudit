$(document).ready(function () {
    $('#tambahPeraturanDaerah').on('click', function () {
        Swal.fire({
            title: 'Tambah Peraturan Daerah',
            html: `
                <form id="peraturanDaerah" action="/peraturan_daerah" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor:</label>
                        <input type="text" name="nomor" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_surat" class="form-label">Nama Surat:</label>
                        <input type="text" name="nama_surat" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis:</label>
                        <input type="text" name="jenis" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_terbit" class="form-label">Tanggal Terbit:</label>
                        <input type="date" name="tanggal_terbit" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_terundang" class="form-label">Tanggal Terundang:</label>
                        <input type="date" name="tanggal_terundang" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                        <textarea name="deskripsi" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <select name="status" class="form-select" required>
                            <option value="Berlaku">Berlaku</option>
                            <option value="Tidak Berlaku">Tidak Berlaku</option>
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
                const form = $('#peraturanDaerah');

                form.submit();
            }
        });
    });


    $('.filePdf').on('click', function () {
        const dataPdf = $(this).data('pdf');
        const dataNomor = $(this).data('nomor');
        const dataNamaSurat = $(this).data('namasurat');
        const dataJenis = $(this).data('jenis');
        const dataTanggalTerbit = $(this).data('tanggalterbit');
        const dataTanggalTerundang = $(this).data('tanggalterundang');
        const dataDeskripsi = $(this).data('deskripsi');
        const dataStatus = $(this).data('status');

        Swal.fire({
            title: "Detail Peraturan Daerah",
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
                                    <th class="text-muted">Nama Surat</th>
                                    <td>${dataNamaSurat}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Jenis</th>
                                    <td>${dataJenis}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Tanggal Terbit</th>
                                    <td>${dataTanggalTerbit}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Tanggal Terundang</th>
                                    <td>${dataTanggalTerundang}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Deskripsi</th>
                                    <td>
                                        ${dataDeskripsi}
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