<?php
include __DIR__ . '/../layouts/header.php';
include __DIR__ . '/../layouts/sidebar.php';
?>
<main class="stockin-page-content">
    <div class="stockin-page-header">
        <div class="stockin-header-left">
            <h1 class="stockin-page-title">Stock In</h1>
            <p class="stockin-page-subtitle">Kelola barang masuk ke inventori</p>
        </div>
        <button class="stockin-btn-add" data-bs-toggle="modal" data-bs-target="#addStockInModal">
            <i class="bi bi-plus"></i> Tambah Stock In
        </button>
    </div>

    <div class="stockin-content-card">
        <div class="stockin-card-header">
            <h4 class="mt-2">Riwayat Stock In</h4>
            <div class="stockin-filter-container">
                <div class="stockin-search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" class="stockin-search-input" placeholder="Cari riwayat..." id="searchStockIn">
                </div>
                <div class="stockin-date-filter">
                    <div class="stockin-period-selector">
                        <button class="stockin-period-btn" id="periodDropdown">
                            <i class="bi bi-calendar-week"></i>
                            <span>Pilih Periode</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>
                        <div class="stockin-period-dropdown" id="periodDropdownMenu">
                            <button class="stockin-period-option active" data-period="day">
                                <i class="bi bi-calendar-day"></i>
                                Per Hari
                            </button>
                            <button class="stockin-period-option" data-period="month">
                                <i class="bi bi-calendar-month"></i>
                                Per Bulan
                            </button>
                            <button class="stockin-period-option" data-period="year">
                                <i class="bi bi-calendar"></i>
                                Per Tahun
                            </button>
                        </div>
                    </div>

                    <div class="stockin-date-inputs">
                        <div class="stockin-date-input-group" id="dayInputs">
                            <input type="date" class="stockin-date-input" id="filterDateDay">
                        </div>

                        <div class="stockin-date-input-group hidden" id="monthInputs">
                            <select class="stockin-month-select" id="filterMonth">
                                <option value="">Pilih Bulan</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                            <select class="stockin-year-select" id="filterYearMonth">
                                <option value="">Pilih Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>

                        <div class="stockin-date-input-group hidden" id="yearInputs">
                            <select class="stockin-year-select" id="filterYear">
                                <option value="">Pilih Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                    </div>

                    <button class="stockin-filter-btn">
                        <i class="bi bi-funnel"></i> Filter
                    </button>
                </div>
            </div>
        </div>

        <div class="stockin-table-wrapper">
            <table class="stockin-data-table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kode Transaksi</th>
                        <th>Nama Barang</th>
                        <th>Supplier</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="stockin-date-cell">2024-11-18</td>
                        <td class="stockin-code-cell">
                            <strong>ST-001</strong>
                        </td>
                        <td class="stockin-item-cell">Laptop Asus ROG</td>
                        <td class="stockin-supplier-cell">PT. Tech Solutions</td>
                        <td class="stockin-quantity-cell">
                            <span class="stockin-quantity-positive">+10 pcs</span>
                        </td>
                        <td class="stockin-description-cell">Pembelian rutin</td>
                    </tr>
                    <tr>
                        <td class="stockin-date-cell">2024-11-17</td>
                        <td class="stockin-code-cell">
                            <strong>ST-002</strong>
                        </td>
                        <td class="stockin-item-cell">Mouse Gaming</td>
                        <td class="stockin-supplier-cell">CV. Digital Media</td>
                        <td class="stockin-quantity-cell">
                            <span class="stockin-quantity-positive">+50 pcs</span>
                        </td>
                        <td class="stockin-description-cell">Stok tambahan</td>
                    </tr>
                    <tr>
                        <td class="stockin-date-cell">2024-11-16</td>
                        <td class="stockin-code-cell">
                            <strong>ST-003</strong>
                        </td>
                        <td class="stockin-item-cell">Monitor LG</td>
                        <td class="stockin-supplier-cell">PT. Global Parts</td>
                        <td class="stockin-quantity-cell">
                            <span class="stockin-quantity-positive">+15 pcs</span>
                        </td>
                        <td class="stockin-description-cell">Order khusus</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="stockin-pagination-container">
            <div class="stockin-pagination-info">
                Menampilkan 1-3 dari 3 data
            </div>
            <div class="stockin-pagination-controls">
                <button class="stockin-pagination-btn stockin-pagination-prev" disabled>
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="stockin-pagination-page active">1</button>
                <button class="stockin-pagination-page">2</button>
                <button class="stockin-pagination-page">3</button>
                <button class="stockin-pagination-btn stockin-pagination-next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="addStockInModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content stockin-modal-content">
            <div class="modal-header stockin-modal-header">
                <h5 class="modal-title stockin-modal-title">Tambah Stock In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body stockin-modal-body">
                <form id="stockinForm">
                    <div class="mb-3">
                        <label class="stockin-form-label">Tanggal</label>
                        <input type="date" class="stockin-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="stockin-form-label">Kode Transaksi</label>
                        <input type="text" class="stockin-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="stockin-form-label">Nama Barang</label>
                        <select class="stockin-form-select" required>
                            <option value="">Pilih Barang</option>
                            <option value="Laptop Asus ROG">Laptop Asus ROG</option>
                            <option value="Mouse Gaming">Mouse Gaming</option>
                            <option value="Monitor LG">Monitor LG</option>
                            <option value="Keyboard Mechanical">Keyboard Mechanical</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="stockin-form-label">Supplier</label>
                        <select class="stockin-form-select" required>
                            <option value="">Pilih Supplier</option>
                            <option value="PT. Tech Solutions">PT. Tech Solutions</option>
                            <option value="CV. Digital Media">CV. Digital Media</option>
                            <option value="PT. Global Parts">PT. Global Parts</option>
                            <option value="CV. Maju Jaya">CV. Maju Jaya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="stockin-form-label">Jumlah</label>
                        <input type="number" class="stockin-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="stockin-form-label">Keterangan</label>
                        <textarea class="stockin-form-input" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer stockin-modal-footer">
                <button type="button" class="stockin-btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="stockin-btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const periodDropdown = document.getElementById('periodDropdown');
        const periodDropdownMenu = document.getElementById('periodDropdownMenu');
        const periodOptions = document.querySelectorAll('.stockin-period-option');
        const dayInputs = document.getElementById('dayInputs');
        const monthInputs = document.getElementById('monthInputs');
        const yearInputs = document.getElementById('yearInputs');

        periodDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
            periodDropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', function() {
            periodDropdownMenu.classList.remove('show');
        });

        periodOptions.forEach(option => {
            option.addEventListener('click', function() {
                const period = this.getAttribute('data-period');

                periodOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');

                const periodText = this.textContent.trim();
                periodDropdown.querySelector('span').textContent = periodText;

                dayInputs.classList.add('hidden');
                monthInputs.classList.add('hidden');
                yearInputs.classList.add('hidden');

                if (period === 'day') {
                    dayInputs.classList.remove('hidden');
                } else if (period === 'month') {
                    monthInputs.classList.remove('hidden');
                } else if (period === 'year') {
                    yearInputs.classList.remove('hidden');
                }

                periodDropdownMenu.classList.remove('show');
            });
        });

        const today = new Date().toISOString().split('T')[0];
        document.getElementById('filterDateDay').value = today;
    });
</script>

<?php
include __DIR__ . '/../layouts/footer.php';
