<?php
include __DIR__ . '/../layouts/header.php';
include __DIR__ . '/../layouts/sidebar.php';
?>
<main class="inventory-page-content">
    <div class="inventory-page-header">
        <div class="inventory-header-left">
            <h1 class="inventory-page-title">Data Barang</h1>
            <p class="inventory-page-subtitle">Kelola data barang inventori</p>
        </div>
        <button class="inventory-btn-add" data-bs-toggle="modal" data-bs-target="#addInventoryModal">
            <i class="bi bi-plus"></i> Tambah Barang
        </button>
    </div>

    <div class="inventory-content-card">
        <div class="inventory-card-header">
            <h4 class="mt-2">Daftar Barang</h4>
            <div class="inventory-search-box">
                <i class="bi bi-search"></i>
                <input type="text" class="inventory-search-input" placeholder="Cari barang..." id="searchInventory">
            </div>
        </div>

        <div class="inventory-table-wrapper">
            <table class="inventory-data-table">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="inventory-code-cell">Bf6-001</td>
                        <td class="inventory-name-cell">Laptop Asus ROG</td>
                        <td class="inventory-category-cell">Electronics</td>
                        <td class="inventory-stock-cell">25 pcs</td>
                        <td class="inventory-price-cell">Rp 15.000.000</td>
                        <td><span class="inventory-status-badge inventory-status-available">available</span></td>
                        <td>
                            <div class="inventory-action-btns">
                                <button class="inventory-btn-icon inventory-btn-edit" data-bs-toggle="modal" data-bs-target="#addInventoryModal" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="inventory-btn-icon inventory-btn-delete" data-bs-toggle="modal" data-bs-target="#deleteInventoryModal" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="inventory-code-cell">Bf6-002</td>
                        <td class="inventory-name-cell">Mouse Gaming Logitech</td>
                        <td class="inventory-category-cell">Accessories</td>
                        <td class="inventory-stock-cell">5 pcs</td>
                        <td class="inventory-price-cell">Rp 350.000</td>
                        <td><span class="inventory-status-badge inventory-status-low">low</span></td>
                        <td>
                            <div class="inventory-action-btns">
                                <button class="inventory-btn-icon inventory-btn-edit" data-bs-toggle="modal" data-bs-target="#addInventoryModal" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="inventory-btn-icon inventory-btn-delete" data-bs-toggle="modal" data-bs-target="#deleteInventoryModal" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="inventory-code-cell">Bf6-004</td>
                        <td class="inventory-name-cell">Keyboard Mechanical</td>
                        <td class="inventory-category-cell">Accessories</td>
                        <td class="inventory-stock-cell">0 pcs</td>
                        <td class="inventory-price-cell">Rp 850.000</td>
                        <td><span class="inventory-status-badge inventory-status-empty">empty</span></td>
                        <td>
                            <div class="inventory-action-btns">
                                <button class="inventory-btn-icon inventory-btn-edit" data-bs-toggle="modal" data-bs-target="#addInventoryModal" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="inventory-btn-icon inventory-btn-delete" data-bs-toggle="modal" data-bs-target="#deleteInventoryModal" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="inventory-pagination-container">
            <div class="inventory-pagination-info">
                Menampilkan 1-4 dari 4 data
            </div>
            <div class="inventory-pagination-controls">
                <button class="inventory-pagination-btn inventory-pagination-prev" disabled>
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="inventory-pagination-page active">1</button>
                <button class="inventory-pagination-page">2</button>
                <button class="inventory-pagination-page">3</button>
                <button class="inventory-pagination-btn inventory-pagination-next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="addInventoryModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content inventory-modal-content">
            <div class="modal-header inventory-modal-header">
                <h5 class="modal-title inventory-modal-title">Tambah Barang Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body inventory-modal-body">
                <form id="inventoryForm">
                    <div class="mb-3">
                        <label class="inventory-form-label">Kode Barang</label>
                        <input type="text" class="inventory-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="inventory-form-label">Nama Barang</label>
                        <input type="text" class="inventory-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="inventory-form-label">Kategori</label>
                        <select class="inventory-form-select" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Accessories">Accessories</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="inventory-form-label">Stok</label>
                        <input type="number" class="inventory-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="inventory-form-label">Harga</label>
                        <input type="text" class="inventory-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="inventory-form-label">Status</label>
                        <select class="inventory-form-select" required>
                            <option value="available">Available</option>
                            <option value="low">Low</option>
                            <option value="empty">Empty</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer inventory-modal-footer">
                <button type="button" class="inventory-btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="inventory-btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteInventoryModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content inventory-modal-content">
            <div class="modal-header inventory-modal-header">
                <h5 class="modal-title inventory-modal-title">Hapus Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body inventory-modal-body">
                <p style="font-size: 0.9rem; color: #4a5568; margin: 0;">
                    Apakah Anda yakin ingin menghapus barang ini? Tindakan ini tidak dapat dibatalkan.
                </p>
                <input type="hidden" id="deleteInventoryId">
            </div>

            <div class="modal-footer inventory-modal-footer">
                <button type="button" class="inventory-btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="inventory-btn-primary" id="confirmDeleteInventory">Hapus</button>
            </div>
        </div>
    </div>
</div>

<?php
include __DIR__ . '/../layouts/footer.php';
