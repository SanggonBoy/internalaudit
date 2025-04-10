<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="detailModalLabel" class="text-center;">
                    Detail<span class="text-danger">&nbsp;Kebijakan</span>
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="height: 80vh; overflow-y: hidden;">
                <div class="row h-100">
                    <!-- Kolom Kiri: Preview PDF -->
                    <div class="col-lg-6 col-md-12 h-100">
                        <div class="ratio ratio-4x3 border h-100">
                            <iframe src="/contohsurat.pdf" frameborder="0" style="width: 100%; height: 100%;" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Kolom Kanan: Ringkasan Detail -->
                    <div class="col-lg-6 col-md-12 h-100" style="overflow-y: auto;">
                        <table class="table table-border mb-3">
                            <tbody>
                                <tr>
                                    <th class="text-muted" style="width: 35%;">Nomor</th>
                                    <td>Kebijakan No. 12 Tahun 2024</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Nama Dokumen</th>
                                    <td>Percepatan Digitalisasi Operasional</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Jenis</th>
                                    <td>Kebijakan Perusahaan</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Tanggal Terbit</th>
                                    <td>15 Oktober 2024</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Tanggal Terundang</th>
                                    <td>20 Oktober 2024</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Deskripsi</th>
                                    <td>
                                        Kebijakan ini mengatur percepatan digitalisasi dalam operasional perusahaan untuk meningkatkan efisiensi dan produktivitas.
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Bentuk</th>
                                    <td>Dokumen Kebijakan</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Kategori</th>
                                    <td>Internal</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Tentang</th>
                                    <td>Digitalisasi Operasional</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Jangkauan Publikasi</th>
                                    <td>Perusahaan</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Status</th>
                                    <td>
                                        <span class="badge bg-success">Aktif</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Terjemahan</th>
                                    <td>Tidak Tersedia</td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-outline-danger mb-3" href="/contohsurat.pdf" download id="downloadBtn">
                            <i class="fas fa-download me-2"></i>Download Dokumen
                        </a>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            document.getElementById('downloadBtn').addEventListener('click', function(event) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Apakah Anda yakin?',
                                    text: 'Anda akan mengunduh dokumen ini.',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya, Unduh!',
                                    cancelButtonText: 'Batal',
                                    reverseButtons: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = '/contohsurat.pdf';
                                    } else {
                                        Swal.fire('Batal', 'Unduhan dibatalkan.', 'error');
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
