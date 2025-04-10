<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="detailModalLabel">
                    Detail<span class="text-dark">&nbsp;Laporan Hasil Audit</span>
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
                                    <th class="text-muted" style="width: 35%;">Judul</th>
                                    <td>Laporan Hasil Audit Penghitungan Gaji</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Divisi</th>
                                    <td>Finance</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Tanggal Audit</th>
                                    <td>15 Oktober 2024</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Auditor</th>
                                    <td>
                                        <div>M. Agung</div>
                                        <div>Jose Yudi</div>
                                        <div>M. Septa</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Deskripsi</th>
                                    <td>
                                        Audit ini mengevaluasi sistem penghitungan gaji karyawan untuk memastikan keakuratan perhitungan, kepatuhan terhadap regulasi, dan efektivitas kebijakan pembayaran.
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Kategori</th>
                                    <td>Keuangan</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Status</th>
                                    <td>
                                        <span class="badge bg-success">Selesai</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">Rekomendasi</th>
                                    <td>Memperbaiki sistem otomatisasi gaji untuk menghindari kesalahan manual dalam perhitungan.</td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-outline-danger mb-3" href="/laporanaudit.pdf" download id="downloadBtn">
                            <i class="fas fa-download me-2"></i>Download Laporan
                        </a>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            document.getElementById('downloadBtn').addEventListener('click', function(event) {
                                event.preventDefault();

                                Swal.fire({
                                    title: 'Apakah Anda yakin?',
                                    text: 'Anda akan mengunduh laporan audit ini.',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya, Unduh!',
                                    cancelButtonText: 'Batal',
                                    reverseButtons: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = '/laporanaudit.pdf';
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
