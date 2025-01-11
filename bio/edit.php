<?php
include('../koneksi.php');
$id = $_GET['id'];
$query = "SELECT * FROM bio WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Bio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <a href="index.php" class="flex items-center text-blue-600 hover:text-blue-800 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            Kembali
        </a>
        <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Ubah Data Bio</h2>
        <form action="update.php" method="POST" class="space-y-4">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50 focus-within:ring-2 focus-within:ring-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A7.5 7.5 0 1117.804 5.121 7.5 7.5 0 015.121 17.804z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15l-2-2m0 0l-2-2m2 2l2-2m-2 2v4m0-4v-4" />
                    </svg>
                    <input type="text" name="nama" id="nama" class="w-full bg-transparent focus:outline-none" value="<?php echo $row['nama']; ?>" placeholder="Masukkan nama lengkap">
                </div>
            </div>

            <div>
                <label for="umur" class="block text-sm font-medium text-gray-600">Umur</label>
                <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50 focus-within:ring-2 focus-within:ring-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 0v4m0-4h4m-4 0H8" />
                    </svg>
                    <input type="text" name="umur" id="umur" class="w-full bg-transparent focus:outline-none" value="<?php echo $row['umur']; ?>" placeholder="Masukkan umur">
                </div>
            </div>

            <div>
                <label for="bio" class="block text-sm font-medium text-gray-600">Bio</label>
                <div class="flex border rounded-lg px-3 py-2 bg-gray-50 focus-within:ring-2 focus-within:ring-blue-400">
                    <textarea name="bio" id="bio" rows="5" class="w-full bg-transparent focus:outline-none" placeholder="Tulis bio singkat"><?php echo $row['bio']; ?></textarea>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" class="w-full px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg">Save Data</button>
            </div>
            <button type="reset" class="w-full mt-2 px-6 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg">Reset</button>
        </form>
    </div>
</body>
</html>