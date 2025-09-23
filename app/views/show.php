<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guild Roster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .pixelated { font-family: "Press Start 2P", cursive; }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-purple-800 to-indigo-900 min-h-screen flex flex-col items-center p-6 font-mono">

    <div class="w-full max-w-5xl bg-gray-900 border-4 border-yellow-400 rounded-xl shadow-2xl p-6 text-yellow-200">
        <h1 class="text-3xl font-extrabold text-center mb-6 text-yellow-300 pixelated">
            🏰 Guild Roster
        </h1>

        <!-- Search -->
        <div class="flex justify-center mb-6">
            <form action="<?= site_url('users/show'); ?>" method="get" class="flex w-full max-w-lg gap-2">
                <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
                <input type="text" name="q" placeholder="🔍 Search heroes..." 
                       value="<?= html_escape($q); ?>" 
                       class="flex-1 border-2 border-yellow-400 bg-gray-800 text-yellow-200 px-3 py-2 rounded-lg focus:ring-2 focus:ring-yellow-300">
                <button type="submit" 
                        class="bg-yellow-400 text-gray-900 font-bold px-4 py-2 rounded-lg hover:bg-yellow-300 transform hover:scale-105 transition">
                    Search
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="border-b-2 border-yellow-400 px-4 py-2 text-left text-yellow-300 pixelated">ID</th>
                        <th class="border-b-2 border-yellow-400 px-4 py-2 text-left text-yellow-300 pixelated">🏰 Guild Name</th>
                        <th class="border-b-2 border-yellow-400 px-4 py-2 text-left text-yellow-300 pixelated">🧝 Hero Name</th>
                        <th class="border-b-2 border-yellow-400 px-4 py-2 text-left text-yellow-300 pixelated">📜 Magic Scroll</th>
                        <th class="border-b-2 border-yellow-400 px-4 py-2 text-center text-yellow-300 pixelated">⚔ Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr class="hover:bg-gray-800 transition">
                                <td class="border-b border-gray-700 px-4 py-2"><?= $user['id']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-2"><?= $user['lname']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-2"><?= $user['fname']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-2"><?= $user['email']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-2 text-center space-x-2">
                                    <a href="<?= site_url('users/update/'.$user['id']); ?>" 
                                       class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-lg transform hover:scale-105 transition">
                                        ✏ Edit
                                    </a>
                                    <a href="<?= site_url('users/delete/'.$user['id']); ?>" 
                                       onclick="return confirm('Are you sure you want to banish this hero?');"
                                       class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg transform hover:scale-105 transition">
                                        ❌ Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-yellow-400 pixelated">⚠ No heroes recruited yet ⚠</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-6">
            <?php if (isset($page)) echo $page; ?>
        </div>

        <!-- Create New -->
        <div class="flex justify-center mt-8">
            <a href="<?= site_url('users/create'); ?>" 
               class="bg-green-600 border-2 border-green-300 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-bold pixelated transform hover:scale-105 transition">
                ➕ Recruit New Hero
            </a>
        </div>
    </div>

</body>
</html>
