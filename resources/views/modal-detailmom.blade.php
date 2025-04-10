<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="detailModalLabel">
                    Detail<span class="text-dark">&nbsp;Minutes of Meeting</span>
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
                                    <td>MoM/2024/012</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Judul</th>
                                    <td>Minutes of Meeting Tinjauan Kepatuhan Perusahaan</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Tanggal</th>
                                    <td>15 Oktober 2024</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Lokasi</th>
                                    <td>Ruang Rapat Utama</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Peserta</th>
                                    <td>Tim Audit Internal, Manajemen Risiko, Legal, Compliance</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Ringkasan</th>
                                    <td>
                                        Pembahasan mengenai pemenuhan standar regulasi dan kebijakan internal perusahaan.
                                        Evaluasi kepatuhan terhadap peraturan pemerintah dan mitigasi risiko hukum.
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Keputusan</th>
                                    <td>Perlu dilakukan audit internal tambahan sebelum akhir tahun.</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Tindak Lanjut</th>
                                    <td>Tim Compliance akan menyusun laporan rekomendasi dalam 2 minggu ke depan.</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Status</th>
                                    <td>
                                        <span class="badge bg-success">Berlaku</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-outline-danger mb-3" href="/contohsurat.pdf" download id="downloadBtn">
                            <i class="fas fa-download me-2"></i>Download MoM
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
