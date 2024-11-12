<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cloud SMP - Admin | Dashboard</title>
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>
    @include('partials.navbar-admin')
    <!-- Dashboard Section -->
    <section id="dashboard" class="table-container">
        <h1 class="daftar-member-title">Daftar Member</h1>
        <!-- Options for items per page and pagination -->
        <div class="table-options">
            <div class="item-limit">
                <label for="itemsPerPage">Show: </label>
                <select id="itemsPerPage">
                    <option value="5">5</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                entries
            </div>
            <div class="pagination">
                <span class="page-num active-page">1</span>
                <span class="page-num">2</span>
                <span class="page-num">3</span>
                <!-- Add additional page numbers as needed -->
            </div>
        </div>
        <table class="crud-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gamertag</th>
                    <th>Rank</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Rows (Example Row) -->
                <tr>
                    <td>1</td>
                    <td>ZeroGX</td>
                    <td>Galaxy</td>
                    <td>-</td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <script src="script.js"></script>
</body>

</html>
