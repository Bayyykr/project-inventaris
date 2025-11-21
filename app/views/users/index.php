<?php
include __DIR__ . '/../layouts/header.php';
include __DIR__ . '/../layouts/sidebar.php';
?>
<main class="user-page-content">
    <div class="user-page-header">
        <div class="user-header-left">
            <h1 class="user-page-title">Data User</h1>
            <p class="user-page-subtitle">Kelola data pengguna sistem</p>
        </div>
        <button class="user-btn-add" data-bs-toggle="modal" data-bs-target="#addUserModal">
            <i class="bi bi-plus"></i> Tambah User
        </button>
    </div>

    <div class="user-content-card">
        <div class="user-card-header">
            <div class="user-search-box">
                <i class="bi bi-search"></i>
                <input type="text" class="user-search-input" placeholder="Cari user..." id="searchUser">
            </div>
        </div>

        <div class="user-table-wrapper">
            <table class="user-data-table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="user-info-cell">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=F4A460&color=fff"
                                    alt="John Doe" class="user-avatar-img">
                                <span class="user-name-text">John Doe</span>
                            </div>
                        </td>
                        <td class="user-email-text">john@example.com</td>
                        <td class="user-role-text">Administrator</td>
                        <td><span class="user-status-badge user-status-active">active</span></td>
                        <td>
                            <div class="user-action-btns">
                                <button class="user-btn-icon user-btn-edit" data-bs-toggle="modal" data-bs-target="#addUserModal" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="user-btn-icon user-btn-delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user-info-cell">
                                <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=FF6B9D&color=fff"
                                    alt="Jane Smith" class="user-avatar-img">
                                <span class="user-name-text">Jane Smith</span>
                            </div>
                        </td>
                        <td class="user-email-text">jane@example.com</td>
                        <td class="user-role-text">Staff</td>
                        <td><span class="user-status-badge user-status-active">active</span></td>
                        <td>
                            <div class="user-action-btns">
                                <button class="user-btn-icon user-btn-edit" data-bs-toggle="modal" data-bs-target="#addUserModal" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="user-btn-icon user-btn-delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user-info-cell">
                                <img src="https://ui-avatars.com/api/?name=Bob+Wilson&background=8B7355&color=fff"
                                    alt="Bob Wilson" class="user-avatar-img">
                                <span class="user-name-text">Bob Wilson</span>
                            </div>
                        </td>
                        <td class="user-email-text">bob@example.com</td>
                        <td class="user-role-text">Manager</td>
                        <td><span class="user-status-badge user-status-active">active</span></td>
                        <td>
                            <div class="user-action-btns">
                                <button class="user-btn-icon user-btn-edit" data-bs-toggle="modal" data-bs-target="#addUserModal" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="user-btn-icon user-btn-delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="user-pagination-container">
            <div class="user-pagination-info">
                Menampilkan 1-4 dari 4 data
            </div>
            <div class="user-pagination-controls">
                <button class="user-pagination-btn user-pagination-prev" disabled>
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="user-pagination-page active">1</button>
                <button class="user-pagination-page">2</button>
                <button class="user-pagination-page">3</button>
                <button class="user-pagination-btn user-pagination-next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="addUserModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content user-modal-content">
            <div class="modal-header user-modal-header">
                <h5 class="modal-title user-modal-title">Tambah User Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body user-modal-body">
                <form id="userForm">
                    <div class="mb-3">
                        <label class="user-form-label">Nama Lengkap</label>
                        <input type="text" class="user-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="user-form-label">Email</label>
                        <input type="email" class="user-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="user-form-label">Password</label>
                        <input type="password" class="user-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="user-form-label">Role</label>
                        <select class="user-form-select" required>
                            <option value="">Pilih Role</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Manager">Manager</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="user-form-label">Status</label>
                        <select class="user-form-select" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer user-modal-footer">
                <button type="button" class="user-btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="user-btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteUserModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content user-modal-content">
            <div class="modal-header user-modal-header">
                <h5 class="modal-title user-modal-title">Hapus User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body user-modal-body">
                <p style="font-size: 0.9rem; color: #4a5568; margin: 0;">
                    Apakah Anda yakin ingin menghapus user ini? Tindakan ini tidak dapat dibatalkan.
                </p>
                <input type="hidden" id="deleteUserId">
            </div>

            <div class="modal-footer user-modal-footer">
                <button type="button" class="user-btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="user-btn-primary" id="confirmDeleteUser">Hapus</button>
            </div>
        </div>
    </div>
</div>


<style>
    .user-page-content {
        padding: 2rem;
        background: #f5f7fa;
        min-height: calc(100vh - 80px);
    }

    .user-page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .user-header-left {
        flex: 1;
    }

    .user-page-title {
        font-size: 1.75rem;
        font-weight: 600;
        color: #1a202c;
        margin-bottom: 0.25rem;
    }

    .user-page-subtitle {
        color: #718096;
        font-size: 0.95rem;
        margin: 0;
    }

    .user-btn-add {
        background: #3182ce;
        color: white;
        border: none;
        padding: 0.625rem 1.25rem;
        border-radius: 6px;
        font-size: 0.875rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.2s;
        cursor: pointer;
    }

    .user-btn-add:hover {
        background: #2c5aa0;
        transform: translateY(-1px);
    }

    .user-content-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .user-card-header {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #e2e8f0;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .user-search-box {
        position: relative;
        display: flex;
        align-items: center;
    }

    .user-search-box i {
        position: absolute;
        left: 14px;
        color: #a0aec0;
        font-size: 0.875rem;
        z-index: 1;
    }

    .user-search-input {
        width: 280px;
        padding: 0.5rem 2.5rem;
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        font-size: 0.875rem;
        background: #f7fafc;
        transition: all 0.2s;
    }

    .user-search-input:focus {
        outline: none;
    }

    .user-search-input::placeholder {
        color: #a0aec0;
    }

    .user-table-wrapper {
        overflow-x: auto;
    }

    .user-data-table {
        width: 100%;
        border-collapse: collapse;
    }

    .user-data-table thead th {
        background: #f8fafc;
        padding: 0.875rem 1.5rem;
        text-align: left;
        font-size: 0.75rem;
        font-weight: 600;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-bottom: 1px solid #e2e8f0;
    }

    .user-data-table tbody td {
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #f1f5f9;
        font-size: 0.875rem;
        color: #334155;
        vertical-align: middle;
    }

    .user-data-table tbody tr {
        transition: background 0.15s;
    }

    .user-data-table tbody tr:hover {
        background: #f8fafc;
    }

    .user-info-cell {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .user-avatar-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    .user-name-text {
        font-weight: 500;
        color: #1e293b;
    }

    .user-email-text {
        color: #64748b;
    }

    .user-role-text {
        color: #334155;
    }

    .user-status-badge {
        display: inline-block;
        padding: 0.375rem 0.75rem;
        border-radius: 16px;
        font-size: 0.8125rem;
        font-weight: 500;
        line-height: 1;
    }

    .user-status-active {
        background: #3182ce;
        color: white;
    }

    .user-status-inactive {
        background: #e2e8f0;
        color: #64748b;
    }

    .user-action-btns {
        display: flex;
        gap: 0.25rem;
    }

    .user-btn-icon {
        background: none;
        border: none;
        padding: 0.5rem;
        cursor: pointer;
        border-radius: 4px;
        transition: all 0.15s;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #64748b;
    }

    .user-btn-icon:hover {
        background: #f1f5f9;
    }

    .user-btn-edit:hover {
        color: #3182ce;
    }

    .user-btn-delete:hover {
        color: #ef4444;
    }

    .user-btn-icon i {
        font-size: 0.875rem;
    }

    /* Pagination Styles */
    .user-pagination-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.25rem 1.5rem;
        border-top: 1px solid #e2e8f0;
        background: #f8fafc;
    }

    .user-pagination-info {
        font-size: 0.875rem;
        color: #64748b;
    }

    .user-pagination-controls {
        display: flex;
        gap: 0.5rem;
        align-items: center;
    }

    .user-pagination-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.25rem;
        height: 2.25rem;
        border: 1px solid #e2e8f0;
        background: white;
        border-radius: 6px;
        color: #64748b;
        cursor: pointer;
        transition: all 0.15s;
    }

    .user-pagination-btn:hover:not(:disabled) {
        background: #f1f5f9;
        border-color: #cbd5e0;
    }

    .user-pagination-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .user-pagination-page {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.25rem;
        height: 2.25rem;
        border: 1px solid #e2e8f0;
        background: white;
        border-radius: 6px;
        color: #64748b;
        font-size: 0.875rem;
        cursor: pointer;
        transition: all 0.15s;
    }

    .user-pagination-page:hover {
        background: #f1f5f9;
        border-color: #cbd5e0;
    }

    .user-pagination-page.active {
        background: #3182ce;
        border-color: #3182ce;
        color: white;
    }

    /* Modal Styles */
    .user-modal-content {
        border-radius: 8px;
        border: none;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
    }

    .user-modal-header {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #e2e8f0;
    }

    .user-modal-title {
        font-weight: 600;
        color: #1a202c;
        font-size: 1.125rem;
    }

    .user-modal-body {
        padding: 1.5rem;
    }

    .user-form-label {
        display: block;
        font-weight: 500;
        color: #4a5568;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
    }

    .user-form-input,
    .user-form-select {
        width: 100%;
        padding: 0.625rem 0.875rem;
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        font-size: 0.875rem;
        transition: all 0.2s;
        background: white;
    }

    .user-form-input:focus,
    .user-form-select:focus {
        outline: none;
        border-color: #3182ce;
        box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.1);
    }

    .user-modal-footer {
        padding: 1rem 1.5rem;
        border-top: 1px solid #e2e8f0;
        display: flex;
        justify-content: flex-end;
        gap: 0.75rem;
    }

    .user-btn-secondary {
        background: #e2e8f0;
        color: #4a5568;
        border: none;
        padding: 0.625rem 1.25rem;
        border-radius: 6px;
        font-size: 0.875rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
    }

    .user-btn-secondary:hover {
        background: #cbd5e0;
    }

    .user-btn-primary {
        background: #3182ce;
        color: white;
        border: none;
        padding: 0.625rem 1.25rem;
        border-radius: 6px;
        font-size: 0.875rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
    }

    .user-btn-primary:hover {
        background: #2c5aa0;
    }
</style>

<?php
include __DIR__ . '/../layouts/footer.php';
?>