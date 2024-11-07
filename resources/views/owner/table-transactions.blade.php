<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cloud SMP - Admin | Transactions Table</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <div class="table-container">
        <h1 class="transactions-title">Transactions Table</h1>
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
        <table class="transactions-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Transactions</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                <tr>
                    <td>1</td>
                    <td>JaneDoe</td>
                    <td>Upgrade</td>
                    <td>01-11-2024</td>
                    <td>
                        <a href="edit_transactions.html" class="edit-btn">Edit</a>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
                <!-- Additional rows as needed -->
            </tbody>
        </table>
    </div>
</body>

</html>
