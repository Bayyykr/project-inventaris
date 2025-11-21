<?php
include __DIR__ . '/../layouts/header.php';
include __DIR__ . '/../layouts/sidebar.php';
?>
<main class="stockout-page-content">
    <div class="stockout-page-header">
        <div class="stockout-header-left">
            <h1 class="stockout-page-title">Stock Out</h1>
            <p class="stockout-page-subtitle">Kelola barang keluar dari inventori</p>
        </div>
        <button class="stockout-btn-add" data-bs-toggle="modal" data-bs-target="#addStockOutModal">
            <i class="bi bi-plus"></i> Tambah Stock Out
        </button>
    </div>

    <div class="stockout-content-card">
        <div class="stockout-card-header">
            <h4 class="mt-2">Riwayat Stock Out</h4>
            <div class="stockout-filter-container">
                <div class="stockout-search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" class="stockout-search-input" placeholder="Cari riwayat..." id="searchStockOut">
                </div>
                <div class="stockout-date-filter">
                    <div class="stockout-period-selector">
                        <button class="stockout-period-btn" id="periodDropdown">
                            <i class="bi bi-calendar-week"></i>
                            <span>Pilih Periode</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>
                        <div class="stockout-period-dropdown" id="periodDropdownMenu">
                            <button class="stockout-period-option active" data-period="day">
                                <i class="bi bi-calendar-day"></i>
                                Per Hari
                            </button>
                            <button class="stockout-period-option" data-period="month">
                                <i class="bi bi-calendar-month"></i>
                                Per Bulan
                            </button>
                            <button class="stockout-period-option" data-period="year">
                                <i class="bi bi-calendar"></i>
                                Per Tahun
                            </button>
                        </div>
                    </div>

                    <div class="stockout-date-inputs">
                        <div class="stockout-date-input-group" id="dayInputs">
                            <input type="date" class="stockout-date-input" id="filterDateDay">
                        </div>

                        <div class="stockout-date-input-group hidden" id="monthInputs">
                            <select class="stockout-month-select" id="filterMonth">
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
                            <select class="stockout-year-select" id="filterYearMonth">
                                <option value="">Pilih Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>

                        <div class="stockout-date-input-group hidden" id="yearInputs">
                            <select class="stockout-year-select" id="filterYear">
                                <option value="">Pilih Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                    </div>

                    <button class="stockout-filter-btn">
                        <i class="bi bi-funnel"></i> Filter
                    </button>
                </div>
            </div>
        </div>

        <div class="stockout-table-wrapper">
            <table class="stockout-data-table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kode Transaksi</th>
                        <th>Nama Barang</th>
                        <th>Tujuan/Customer</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="stockout-date-cell">2024-11-18</td>
                        <td class="stockout-code-cell">
                            <strong>SO-001</strong>
                        </td>
                        <td class="stockout-item-cell">Laptop Asus ROG</td>
                        <td class="stockout-supplier-cell">PT. Maju Sejahtera</td>
                        <td class="stockout-quantity-cell">
                            <span class="stockout-quantity-negative">-5 pcs</span>
                        </td>
                        <td class="stockout-description-cell">Order client</td>
                    </tr>
                    <tr>
                        <td class="stockout-date-cell">2024-11-17</td>
                        <td class="stockout-code-cell">
                            <strong>SO-002</strong>
                        </td>
                        <td class="stockout-item-cell">Mouse Gaming</td>
                        <td class="stockout-supplier-cell">CV. Berkah Jaya</td>
                        <td class="stockout-quantity-cell">
                            <span class="stockout-quantity-negative">-20 pcs</span>
                        </td>
                        <td class="stockout-description-cell">Penjualan retail</td>
                    </tr>
                    <tr>
                        <td class="stockout-date-cell">2024-11-16</td>
                        <td class="stockout-code-cell">
                            <strong>SO-003</strong>
                        </td>
                        <td class="stockout-item-cell">Monitor LG</td>
                        <td class="stockout-supplier-cell">PT. Sukses Abadi</td>
                        <td class="stockout-quantity-cell">
                            <span class="stockout-quantity-negative">-8 pcs</span>
                        </td>
                        <td class="stockout-description-cell">Kontrak kerja sama</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="stockout-pagination-container">
            <div class="stockout-pagination-info">
                Menampilkan 1-3 dari 3 data
            </div>
            <div class="stockout-pagination-controls">
                <button class="stockout-pagination-btn stockout-pagination-prev" disabled>
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="stockout-pagination-page active">1</button>
                <button class="stockout-pagination-page">2</button>
                <button class="stockout-pagination-page">3</button>
                <button class="stockout-pagination-btn stockout-pagination-next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="addStockOutModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content stockout-modal-content">
            <div class="modal-header stockout-modal-header">
                <h5 class="modal-title stockout-modal-title">Tambah Stock Out</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body stockout-modal-body">
                <form id="stockoutForm">
                    <div class="mb-3">
                        <label class="stockout-form-label">Tanggal</label>
                        <input type="date" class="stockout-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="stockout-form-label">Kode Transaksi</label>
                        <input type="text" class="stockout-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="stockout-form-label">Nama Barang</label>
                        <select class="stockout-form-select" required>
                            <option value="">Pilih Barang</option>
                            <option value="Laptop Asus ROG">Laptop Asus ROG</option>
                            <option value="Mouse Gaming">Mouse Gaming</option>
                            <option value="Monitor LG">Monitor LG</option>
                            <option value="Keyboard Mechanical">Keyboard Mechanical</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="stockout-form-label">Tujuan/Customer</label>
                        <select class="stockout-form-select" required>
                            <option value="">Pilih Customer</option>
                            <option value="PT. Maju Sejahtera">PT. Maju Sejahtera</option>
                            <option value="CV. Berkah Jaya">CV. Berkah Jaya</option>
                            <option value="PT. Sukses Abadi">PT. Sukses Abadi</option>
                            <option value="CV. Digital Media">CV. Digital Media</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="stockout-form-label">Jumlah</label>
                        <input type="number" class="stockout-form-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="stockout-form-label">Keterangan</label>
                        <textarea class="stockout-form-input" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer stockout-modal-footer">
                <button type="button" class="stockout-btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="stockout-btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const periodDropdown = document.getElementById('periodDropdown');
        const periodDropdownMenu = document.getElementById('periodDropdownMenu');
        const periodOptions = document.querySelectorAll('.stockout-period-option');
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
