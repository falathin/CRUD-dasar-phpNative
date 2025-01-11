<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Menggunakan FontAwesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">

    <!-- Card Container -->
    <div class="w-full max-w-4xl bg-white shadow-lg rounded-xl p-6">
        <h2 class="text-3xl font-semibold text-gray-700 text-center mb-6">Data Bio</h2>

        <!-- Add Data Button -->
        <div class="flex justify-end mb-4">
            <a href="create.php" class="px-4 py-2 text-white bg-green-600 hover:bg-green-700 rounded-lg flex items-center">
                <i class="fas fa-plus mr-2"></i>Tambah Data
            </a>
        </div>

        <!-- Alert (success message) -->
        <?php if(isset($_GET['status'])): ?>
            <div class="mb-4">
                <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle mr-2"></i> <?php echo $_GET['status']; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">No</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nama</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Umur</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Bio</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php
                    include("../koneksi.php");
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM bio");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-700"><?php echo $no++; ?></td>
                        <td class="px-6 py-4 text-sm text-gray-700"><?php echo $row['nama']; ?></td>
                        <td class="px-6 py-4 text-sm text-gray-700"><?php echo $row['umur']; ?></td>
                        <td class="px-6 py-4 text-sm text-gray-700"><?php echo $row['bio']; ?></td>
                        <td class="px-6 py-4 flex space-x-4">
                            <!-- Edit Button -->
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="text-blue-600 hover:text-blue-700 flex items-center">
                                <i class="fas fa-edit mr-2"></i> Edit
                            </a>
                            <!-- Delete Button -->
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-red-600 hover:text-red-700 flex items-center">
                                <i class="fas fa-trash mr-2"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>