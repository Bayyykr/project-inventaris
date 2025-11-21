<?php
include __DIR__ . '/../layouts/header.php';
include __DIR__ . '/../layouts/sidebar.php';
?>
<main class="history-page-content">
    <div class="history-page-header">
        <div class="history-header-left">
            <h1 class="history-page-title">History</h1>
            <p class="history-page-subtitle">Riwayat semua transaksi stok</p>
        </div>
        <button class="history-btn-add">
            <i class="bi bi-download"></i> Export
        </button>
    </div>

    <div class="history-content-card">
        <div class="history-card-header">
            <h4 class="mt-2">Semua Transaksi</h4>
            <div class="history-filter-container">
                <div class="history-search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" class="history-search-input" placeholder="Cari riwayat..." id="searchHistory">
                </div>
                <div class="history-date-filter">
                    <div class="history-period-selector">
                        <button class="history-period-btn" id="periodDropdown">
                            <i class="bi bi-calendar-week"></i>
                            <span>Pilih Periode</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>
                        <div class="history-period-dropdown" id="periodDropdownMenu">
                            <button class="history-period-option active" data-period="day">
                                <i class="bi bi-calendar-day"></i>
                                Per Hari
                            </button>
                            <button class="history-period-option" data-period="month">
                                <i class="bi bi-calendar-month"></i>
                                Per Bulan
                            </button>
                            <button class="history-period-option" data-period="year">
                                <i class="bi bi-calendar"></i>
                                Per Tahun
                            </button>
                        </div>
                    </div>

                    <div class="history-date-inputs">
                        <div class="history-date-input-group" id="dayInputs">
                            <input type="date" class="history-date-input" id="filterDateDay">
                        </div>

                        <div class="history-date-input-group hidden" id="monthInputs">
                            <select class="history-month-select" id="filterMonth">
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
                            <select class="history-year-select" id="filterYearMonth">
                                <option value="">Pilih Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>

                        <div class="history-date-input-group hidden" id="yearInputs">
                            <select class="history-year-select" id="filterYear">
                                <option value="">Pilih Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                    </div>

                    <button class="history-filter-btn">
                        <i class="bi bi-funnel"></i> Filter
                    </button>
                </div>
            </div>
        </div>

        <div class="history-table-wrapper">
            <table class="history-data-table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Tipe</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="history-date-cell">2024-11-18</td>
                        <td class="history-type-cell">
                            <span class="history-type-in"><i class="bi bi-arrow-down-left"></i> Stock In</span>
                        </td>
                        <td class="history-code-cell">
                            <strong>ST-001</strong>
                        </td>
                        <td class="history-item-cell">Laptop Asus ROG</td>
                        <td class="history-quantity-cell">
                            <span class="history-quantity-positive">+10 pcs</span>
                        </td>
                        <td class="history-user-cell">Admin User</td>
                    </tr>
                    <tr>
                        <td class="history-date-cell">2024-11-18</td>
                        <td class="history-type-cell">
                            <span class="history-type-out"><i class="bi bi-arrow-up-right"></i> Stock Out</span>
                        </td>
                        <td class="history-code-cell">
                            <strong>SO-001</strong>
                        </td>
                        <td class="history-item-cell">Laptop Asus ROG</td>
                        <td class="history-quantity-cell">
                            <span class="history-quantity-negative">-5 pcs</span>
                        </td>
                        <td class="history-user-cell">Admin User</td>
                    </tr>
                    <tr>
                        <td class="history-date-cell">2024-11-17</td>
                        <td class="history-type-cell">
                            <span class="history-type-in"><i class="bi bi-arrow-down-left"></i> Stock In</span>
                        </td>
                        <td class="history-code-cell">
                            <strong>ST-002</strong>
                        </td>
                        <td class="history-item-cell">Mouse Gaming</td>
                        <td class="history-quantity-cell">
                            <span class="history-quantity-positive">+50 pcs</span>
                        </td>
                        <td class="history-user-cell">John Doe</td>
                    </tr>
                    <tr>
                        <td class="history-date-cell">2024-11-17</td>
                        <td class="history-type-cell">
                            <span class="history-type-out"><i class="bi bi-arrow-up-right"></i> Stock Out</span>
                        </td>
                        <td class="history-code-cell">
                            <strong>SO-002</strong>
                        </td>
                        <td class="history-item-cell">Mouse Gaming</td>
                        <td class="history-quantity-cell">
                            <span class="history-quantity-negative">-20 pcs</span>
                        </td>
                        <td class="history-user-cell">Jane Smith</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="history-pagination-container">
            <div class="history-pagination-info">
                Menampilkan 1-4 dari 4 data
            </div>
            <div class="history-pagination-controls">
                <button class="history-pagination-btn history-pagination-prev" disabled>
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="history-pagination-page active">1</button>
                <button class="history-pagination-page">2</button>
                <button class="history-pagination-page">3</button>
                <button class="history-pagination-btn history-pagination-next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const periodDropdown = document.getElementById('periodDropdown');
        const periodDropdownMenu = document.getElementById('periodDropdownMenu');
        const periodOptions = document.querySelectorAll('.history-period-option');
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
