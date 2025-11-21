<?php
include __DIR__ . '/../layouts/header.php';
include __DIR__ . '/../layouts/sidebar.php';
?>
<main class="dashboard-content">
    <div class="page-title mb-4">
        <h1>Dashboard</h1>
        <p>Overview sistem inventori Anda</p>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body p-4">
                    <div class="title-card d-flex justify-content-between align-items-center mb-1">
                        <h6 class="text-muted mb-2">Total Barang</h6>
                        <i class="bi bi-box"></i>
                    </div>
                    <h2 class="mb-0">150</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body p-4">
                    <div class="title-card d-flex justify-content-between align-items-center mb-1">
                        <h6 class="text-muted mb-2">Supplier</h6>
                        <i class="bi bi-people"></i>
                    </div>
                    <h2 class="mb-0 text-success">+75</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body p-4">
                    <div class="title-card d-flex justify-content-between align-items-center mb-1">
                        <h6 class="text-muted mb-2">Stock In</h6>
                        <i class="bi bi-arrow-down-left"></i>
                    </div>
                    <h2 class="mb-0 text-danger">-25</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body p-4">
                    <div class="title-card d-flex justify-content-between align-items-center mb-1">
                        <h6 class="text-muted mb-2">Stock Out</h6>
                        <i class="bi bi-arrow-up-right"></i>
                    </div>
                    <h2 class="mb-0">12</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-1">
        <!-- Card 1: Stok Menipis -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="title-card">
                        <h5>Stok Menipis</h5>
                    </div>
                    <div class="card-content d-flex mt-4 justify-content-between align-items-center border-bottom pb-2">
                        <div class="left-part">
                            <p class="nama-barang mb-0 fw-semibold">Sepatu Kidal</p>
                            <p class="detail-stok mb-0">Min. Stock: 10</p>
                        </div>
                        <div class="right-part px-3 py-2">
                            <div class="badge-right text-center">
                                <p class="mb-0">5 unit</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-content d-flex mt-4 justify-content-between align-items-center border-bottom pb-2">
                        <div class="left-part">
                            <p class="nama-barang mb-0 fw-semibold">Sepatu Kidal</p>
                            <p class="detail-stok mb-0">Min. Stock: 10</p>
                        </div>
                        <div class="right-part px-3 py-2">
                            <div class="badge-right text-center">
                                <p class="mb-0">5 unit</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-content d-flex mt-4 justify-content-between align-items-center border-bottom pb-2">
                        <div class="left-part">
                            <p class="nama-barang mb-0 fw-semibold">Sepatu Kidal</p>
                            <p class="detail-stok mb-0">Min. Stock: 10</p>
                        </div>
                        <div class="right-part px-3 py-2">
                            <div class="badge-right text-center">
                                <p class="mb-0">5 unit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="title-card">
                        <h5>Aktivitas Baru</h5>
                    </div>
                    <div class="mt-4">
                        <div class="card-content d-flex mt-4 justify-content-between align-items-center border-bottom pb-2">
                            <div class="left-part">
                                <p class="nama-barang mb-0 fw-semibold">Sepatu Kidal</p>
                                <p class="detail-stok mb-0">Stock In - 10 units</p>
                            </div>
                            <div class="right-part px-3 py-2">
                                <div class="time-right text-center">
                                    <p class="mb-0">2 jam lalu</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-content d-flex mt-4 justify-content-between align-items-center border-bottom pb-2">
                            <div class="left-part">
                                <p class="nama-barang mb-0 fw-semibold">Sepatu Kidal</p>
                                <p class="detail-stok mb-0">Stock In - 10 units</p>
                            </div>
                            <div class="right-part px-3 py-2">
                                <div class="time-right text-center">
                                    <p class="mb-0">2 jam lalu</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-content d-flex mt-4 justify-content-between align-items-center border-bottom pb-2">
                            <div class="left-part">
                                <p class="nama-barang mb-0 fw-semibold">Sepatu Kidal</p>
                                <p class="detail-stok mb-0">Stock In - 10 units</p>
                            </div>
                            <div class="right-part px-3 py-2">
                                <div class="time-right text-center">
                                    <p class="mb-0">2 jam lalu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
<?php
include __DIR__ . '/../layouts/footer.php';
?>