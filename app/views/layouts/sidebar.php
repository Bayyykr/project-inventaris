<?php
$current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<div class="sidebar-toggle" id="sidebarToggle" onclick="toggleSidebar()">
    <i class="bi bi-list"></i>
</div>

<nav class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <i class="bi bi-box-seam"></i>
        <span>Inventori</span>
    </div>
    <div class="sidebar-content">
        <div class="menu-item <?= $current == '/dashboard' ? 'active' : '' ?>" data-tooltip="Dashboard" onclick="window.location.href='<?= BASE_URL ?>/dashboard'">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </div>

        <p class="title-item">Data Master</p>
        <div class="menu-item <?= $current == '/users' ? 'active' : '' ?>" data-tooltip="Data User" onclick="window.location.href='<?= BASE_URL ?>/users'">
            <i class="bi bi-people"></i>
            <span>Data User</span>
        </div>
        <div class="menu-item <?= $current == '/supplier' ? 'active' : '' ?>" data-tooltip="Data Supplier" onclick="window.location.href='<?= BASE_URL ?>/supplier'">
            <i class="bi bi-truck"></i>
            <span>Data Supplier</span>
        </div>
        <div class="menu-item <?= $current == '/barang' ? 'active' : '' ?>" data-tooltip="Data Barang" onclick="window.location.href='<?= BASE_URL ?>/barang'">
            <i class="bi bi-box"></i>
            <span>Data Barang</span>
        </div>

        <p class="title-item">Manajemen Stok</p>
        <div class="menu-item <?= $current == '/stokin' ? 'active' : '' ?>" data-tooltip="Stock In" onclick="window.location.href='<?= BASE_URL ?>/stokin'">
            <i class="bi bi-arrow-down-left"></i>
            <span>Stock In</span>
        </div>
        <div class="menu-item <?= $current == '/stokout' ? 'active' : '' ?>" data-tooltip="Stock Out" onclick="window.location.href='<?= BASE_URL ?>/stokout'">
            <i class="bi bi-arrow-up-right"></i>
            <span>Stock Out</span>
        </div>
        <div class="menu-item <?= $current == '/history' ? 'active' : '' ?>" data-tooltip="History" onclick="window.location.href='<?= BASE_URL ?>/history'">
            <i class="bi bi-clock-history"></i>
            <span>History</span>
        </div>
    </div>
</nav>

<div class="main-content" id="mainContent">
    <header>
        <div></div>
        <div class="d-flex align-items-center">
            <div class="profile-part">
                <div class="avatar-profile">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Admin" alt="foto-profile">
                </div>
                <div class="avatar-name">
                    <h3>Admin User</h3>
                    <p>Administrator</p>
                </div>
                <i class="bi bi-chevron-down" id="panah-bawah"></i>
            </div>
        </div>
    </header>