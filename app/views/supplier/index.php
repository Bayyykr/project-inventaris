<?php
include __DIR__ . '/../layouts/header.php';
include __DIR__ . '/../layouts/sidebar.php';
?>
<main class="supplier-page-content">
    <div class="supplier-page-header">
        <div class="supplier-header-left">
            <h1 class="supplier-page-title">Data Supplier</h1>
            <p class="supplier-page-subtitle">Kelola data supplier dan vendor</p>
        </div>
        <button class="supplier-btn-add" data-bs-toggle="modal" data-bs-target="#addSupplierModal">
            <i class="bi bi-plus"></i> Tambah Supplier
        </button>
    </div>

    <div class="supplier-content-card">
        <div class="supplier-card-header">
            <h4 class="mt-2">Daftar Supplier</h4>
            <div class="supplier-search-box">
                <i class="bi bi-search"></i>
                <input type="text" class="supplier-search-input" placeholder="Cari supplier..." id="searchSupplier">
            </div>
        </div>

        <div class="supplier-table-wrapper">
            <table class="supplier-data-table">
                <thead>
                    <tr>
                        <th>Nama Supplier</th>
                        <th>Kontak Person</th>
                        <th>Informasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="supplier-name-cell">PT. Tech Solutions</td>
                        <td class="supplier-contact-cell">Ahmad Hidayat</td>
                        <td class="supplier-info-cell">
                            <div class="supplier-phone-info">
                                <i class="bi bi-telephone-fill supplier-info-icon"></i>
                                <span class="supplier-phone-text">081234567890</span>
                            </div>
                            <div class="supplier-email-info">
                                <i class="bi bi-envelope-fill supplier-info-icon"></i>
                                <span class="supplier-email-text">ahmad@techsolutions.com</span>
                            </div>
                        </td>
                        <td><span class="supplier-status-badge supplier-status-active">active</span></td>
                        <td>
                            <div class="supplier-action-btns">
                                <button class="supplier-btn-icon supplier-btn-edit" data-bs-toggle="modal" data-bs-target="#addSupplierModal" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="supplier-btn-icon supplier-btn-delete" data-bs-toggle="modal" data-bs-target="#deleteSupplierModal" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="supplier-name-cell">CV. Digital Media</td>
                        <td class="supplier-contact-cell">Siti Nurhaliza</td>
                        <td class="supplier-info-cell">
                            <div class="supplier-phone-info">
                                <i class="bi bi-telephone-fill supplier-info-icon"></i>
                                <span class="supplier-phone-text">082345678901</span>
                            </div>
                            <div class="supplier-email-info">
                                <i class="bi bi-envelope-fill supplier-info-icon"></i>
                                <span class="supplier-email-text">siti@digitalmedia.com</span>
                            </div>
                        </td>
                        <td><span class="supplier-status-badge supplier-status-active">active</span></td>
                        <td>
                            <div class="supplier-action-btns">
                                <button class="supplier-btn-icon supplier-btn-edit" data-bs-toggle="modal" data-bs-target="#addSupplierModal" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="supplier-btn-icon supplier-btn-delete" data-bs-toggle="modal" data-bs-target="#deleteSupplierModal" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="supplier-name-cell">CV. Maju Jaya</td>
                        <td class="supplier-contact-cell">Rina Wati</td>
                        <td class="supplier-info-cell">
                            <div class="supplier-phone-info">
                                <i class="bi bi-telephone-fill supplier-info-icon"></i>
                                <span class="supplier-phone-text">084567890123</span>
                            </div>
                            <div class="supplier-email-info">
                                <i class="bi bi-envelope-fill supplier-info-icon"></i>
                                <span class="supplier-email-text">rina@majujaya.com</span>
                            </div>
                        </td>
                        <td><span class="supplier-status-badge supplier-status-inactive">inactive</span></td>
                        <td>
                            <div class="supplier-action-btns">
                                <button class="supplier-btn-icon supplier-btn-edit" data-bs-toggle="modal" data-bs-target="#addSupplierModal" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="supplier-btn-icon supplier-btn-delete" data-bs-toggle="modal" data-bs-target="#deleteSupplierModal" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="supplier-pagination-container">
            <div class="supplier-pagination-info">
                Menampilkan 1-4 dari 4 data
            </div>
            <div class="supplier-pagination-controls">
                <button class="supplier-pagination-btn supplier-pagination-prev" disabled>
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="supplier-pagination-page active">1</button>
                <button class="supplier-pagination-page">2</button>
                <button class="supplier-pagination-page">3</button>
                <button class="supplier-pagination-btn supplier-pagination-next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="addSupplierModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content supplier-modal-content">
            <div class="modal-header supplier-modal-header">
                <h5 class="modal-title supplier-modal-title">Tambah Supplier Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body supplier-modal-body">
                <form id="supplierForm">
                    <div class="mb-3">
                        <label class="supplier-form-label">Nama Supplier</label>
                        <input type="text" class="supplier-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="supplier-form-label">Kontak Person</label>
                        <input type="text" class="supplier-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="supplier-form-label">Nomor Telepon</label>
                        <input type="tel" class="supplier-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="supplier-form-label">Email</label>
                        <input type="email" class="supplier-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="supplier-form-label">Status</label>
                        <select class="supplier-form-select" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer supplier-modal-footer">
                <button type="button" class="supplier-btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="supplier-btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteSupplierModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content supplier-modal-content">
            <div class="modal-header supplier-modal-header">
                <h5 class="modal-title supplier-modal-title">Hapus Supplier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body supplier-modal-body">
                <p style="font-size: 0.9rem; color: #4a5568; margin: 0;">
                    Apakah Anda yakin ingin menghapus supplier ini? Tindakan ini tidak dapat dibatalkan.
                </p>
                <input type="hidden" id="deleteSupplierId">
            </div>

            <div class="modal-footer supplier-modal-footer">
                <button type="button" class="supplier-btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="supplier-btn-primary" id="confirmDeleteSupplier">Hapus</button>
            </div>
        </div>
    </div>
</div>

<?php
include __DIR__ . '/../layouts/footer.php';
?>