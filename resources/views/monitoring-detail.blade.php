<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="detailModalLabel" class="text-center;">
                    1. Temuan terkait ketidaksesuaian dalam pengelolaan dana CSR
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="height: 80vh; overflow-y: hidden;">
                <div class="row h-100">
                    <!-- Kolom Kiri: Preview PDF -->
                    <div class="col-lg-6 col-md-12 h-100">
                        <div class="ratio ratio-4x3 border h-100">
                            <iframe id="pdfPreview" frameborder="0" style="width: 100%; height: 100%;" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
            
                    <!-- Kolom Kanan: Ringkasan Detail -->
                    <div class="col-lg-6 col-md-12 h-100" style="overflow-y: auto;">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h4 class="text-center">HISTORI</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <table class="table table-border mb-0">
                                            <tbody>
                                                <tr>
                                                    <th class="text-muted" style="width: 35%;">Tanggal</th>
                                                    <td>19.01.2025</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Status</th>
                                                    <td><span class="badge bg-warning">Masih Dalam Proses</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Tindak Lanjut Auditee</th>
                                                    <td>Auditee telah menyusun dokumen tambahan untuk mendukung pengelolaan dana CSR sesuai dengan kebijakan internal, serta melakukan koordinasi dengan pihak terkait untuk memastikan proses berjalan sesuai aturan yang ditetapkan.</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Dokumen Pendukung</th>
                                                    <td>
                                                        <ul class="list-unstyled mb-0">
                                                            <li><a href="#" class="text-decoration-none pdf-link" data-id="contohsurat.pdf">File 1.pdf</a></li>
                                                            <li><a href="#" class="text-decoration-none pdf-link" data-id="contohsurat1.pdf">File 2.pdf</a></li>
                                                            <li><a href="#" class="text-decoration-none pdf-link" data-id="contohsurat2.pdf">File 3.pdf</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Catatan Auditor</th>
                                                    <td>Status akan sesuai rekomendasi jika sap sudah diimplementasikan</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted" style="width: 35%;">Deadline</th>
                                                    <td>19.02.2025</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-12 mb-3">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <table class="table table-border mb-0">
                                            <tbody>
                                                <tr>
                                                    <th class="text-muted" style="width: 35%;">Tanggal</th>
                                                    <td>19.01.2025</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Status</th>
                                                    <td><span class="badge bg-success">Sesuai Rekomendasi</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Tindak Lanjut Auditee</th>
                                                    <td>Auditee telah berhasil menerapkan rekomendasi pengelolaan dana CSR sesuai dengan kebijakan internal, termasuk mengintegrasikan proses tersebut ke dalam sistem SAP perusahaan.</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Dokumen Pendukung</th>
                                                    <td>
                                                        <ul class="list-unstyled mb-0">
                                                            <li><a href="#" class="text-decoration-none pdf-link" data-id="contohsurat.pdf">File 1.pdf</a></li>
                                                            <li><a href="#" class="text-decoration-none pdf-link" data-id="contohsurat1.pdf">File 2.pdf</a></li>
                                                            <li><a href="#" class="text-decoration-none pdf-link" data-id="contohsurat2.pdf">File 3.pdf</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Catatan Auditor</th>
                                                    <td>Rekomendasi telah sepenuhnya diimplementasikan, dan hasil audit dapat ditutup dengan status selesai.</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted" style="width: 35%;">Deadline</th>
                                                    <td>19.03.2025</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <script>
                // Menambahkan event listener pada tautan PDF
                document.querySelectorAll('.pdf-link').forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault(); // Mencegah pengalihan langsung
            
                        // Memuat file PDF ke dalam iframe
                        document.getElementById('pdfPreview').src = '/' + this.dataset.id; 
                    });
                });
            </script>            
        </div>
    </div>
</div>
