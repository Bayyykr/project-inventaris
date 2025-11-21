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

<?php
include __DIR__ . '/../layouts/footer.php';
?>