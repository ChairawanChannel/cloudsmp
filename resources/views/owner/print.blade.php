<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print Laporan - CLOUD SMP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <div class="print-container">
        <h1 class="print-title">Print Laporan</h1>

        <form class="print-form" action="print_report.html" method="get">
            <!-- Select Table Type -->
            <div class="form-group">
                <label for="tableType">Pilih Tabel yang Ingin Dicetak:</label>
                <select id="tableType" name="tableType" required>
                    <option value="feedback">Feedback</option>
                    <option value="vote">Vote</option>
                    <option value="member">Member</option>
                    <option value="member">Transaksi</option>
                </select>
            </div>

            <!-- Date Range Selection -->
            <div class="form-group">
                <label for="startDate">Dari Tanggal:</label>
                <input type="date" id="startDate" name="startDate" required />
            </div>

            <div class="form-group">
                <label for="endDate">Sampai Tanggal:</label>
                <input type="date" id="endDate" name="endDate" required />
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit">Cetak Laporan</button>
            </div>
        </form>
    </div>
</body>

</html>
