<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VALORANT Roster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Orbitron', sans-serif; }
        .valorant-header {
            background: linear-gradient(90deg, #ff4655, #bd3944);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 to-black min-h-screen flex flex-col items-center p-6 text-gray-100">

    <div class="w-full max-w-6xl bg-gray-950 border-4 border-red-600 rounded-xl shadow-2xl p-6">
        <h1 class="text-4xl font-extrabold text-center mb-8 valorant-header tracking-widest uppercase">
            ❖ Valorant Roster ❖
        </h1>

        <!-- Search -->
        <div class="flex justify-center mb-8">
            <form action="<?= site_url('users/show'); ?>" method="get" class="flex w-full max-w-xl gap-3">
                <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
                <input type="text" name="q" placeholder="🔍 Search Agents..." 
                       value="<?= html_escape($q); ?>" 
                       class="flex-1 border-2 border-red-600 bg-gray-800 text-gray-100 px-4 py-2 rounded-lg focus:ring-2 focus:ring-red-500">
                <button type="submit" 
                        class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-2 rounded-lg transform hover:scale-105 transition">
                    Search
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-gray-200">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="border-b-2 border-red-600 px-4 py-3 text-left uppercase tracking-wide">ID</th>
                        <th class="border-b-2 border-red-600 px-4 py-3 text-left uppercase tracking-wide">🟥 Codename</th>
                        <th class="border-b-2 border-red-600 px-4 py-3 text-left uppercase tracking-wide">👤 Real Name</th>
                        <th class="border-b-2 border-red-600 px-4 py-3 text-left uppercase tracking-wide">📡 Contact</th>
                        <th class="border-b-2 border-red-600 px-4 py-3 text-center uppercase tracking-wide">⚔ Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr class="hover:bg-gray-800/80 transition">
                                <td class="border-b border-gray-700 px-4 py-2"><?= $user['id']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-2 font-bold text-red-400"><?= $user['lname']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-2"><?= $user['fname']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-2"><?= $user['email']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-2 text-center space-x-3">
                                    <a href="<?= site_url('users/update/'.$user['id']); ?>" 
                                       class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transform hover:scale-105 transition shadow-md">
                                        ✏ Edit
                                    </a>
                                    <a href="<?= site_url('users/delete/'.$user['id']); ?>" 
                                       onclick="return confirm('Eliminate this agent from roster?');"
                                       class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transform hover:scale-105 transition shadow-md">
                                        ❌ Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-6 text-red-400 font-bold uppercase tracking-wide">⚠ No agents recruited ⚠</td>
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
        <div class="flex justify-center mt-10">
            <a href="<?= site_url('users/create'); ?>" 
               class="bg-red-600 border-2 border-red-400 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-bold uppercase tracking-wider transform hover:scale-110 transition shadow-lg">
                ➕ Recruit New Agent
            </a>
        </div>
    </div>

</body>
</html>
