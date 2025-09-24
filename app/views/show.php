<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TF2 Roster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Russo One', sans-serif; }
        .tf2-header {
            background: linear-gradient(90deg, #912c22, #2c3e91);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-950 to-black min-h-screen flex flex-col items-center p-6 text-yellow-100">

    <div class="w-full max-w-6xl bg-gray-950 border-8 border-yellow-600 rounded-xl shadow-[0_0_30px_rgba(0,0,0,0.9)] p-6">
        <h1 class="text-5xl font-extrabold text-center mb-10 tf2-header tracking-widest uppercase drop-shadow-[0_2px_6px_rgba(0,0,0,0.8)]">
            ⚙ Team Fortress 2 Roster ⚙
        </h1>

        <!-- Search -->
        <div class="flex justify-center mb-10">
            <form action="<?= site_url('users/show'); ?>" method="get" class="flex w-full max-w-xl gap-3">
                <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
                <input type="text" name="q" placeholder="🔍 Search Mercenaries..." 
                       value="<?= html_escape($q); ?>" 
                       class="flex-1 border-4 border-yellow-600 bg-gray-800 text-yellow-100 px-4 py-3 rounded-lg focus:ring-4 focus:ring-yellow-500 placeholder-gray-400">
                <button type="submit" 
                        class="bg-yellow-600 hover:bg-yellow-700 text-black font-bold px-8 py-3 rounded-lg uppercase tracking-wide transform hover:scale-105 transition border-2 border-black shadow-md">
                    Search
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-yellow-200">
                <thead>
                    <tr class="bg-gradient-to-r from-red-800 to-blue-800 text-white">
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-left uppercase tracking-wide">ID</th>
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-left uppercase tracking-wide">🟥 Codename</th>
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-left uppercase tracking-wide">👤 Real Name</th>
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-left uppercase tracking-wide">📡 Contact</th>
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-center uppercase tracking-wide">⚔ Orders</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-900/80">
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr class="hover:bg-gray-800/90 transition">
                                <td class="border-b border-gray-700 px-4 py-3"><?= $user['id']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-3 font-bold text-red-400"><?= $user['lname']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-3"><?= $user['fname']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-3"><?= $user['email']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-3 text-center space-x-3">
                                    <a href="<?= site_url('users/update/'.$user['id']); ?>" 
                                       class="bg-blue-700 hover:bg-blue-800 text-white px-4 py-2 rounded-lg font-bold border-2 border-black transform hover:scale-105 transition shadow-md">
                                        ✏ Edit Record
                                    </a>
                                    <a href="<?= site_url('users/delete/'.$user['id']); ?>" 
                                       onclick="return confirm('Discharge this mercenary from the roster?');"
                                       class="bg-red-700 hover:bg-red-800 text-white px-4 py-2 rounded-lg font-bold border-2 border-black transform hover:scale-105 transition shadow-md">
                                        ❌ Eliminate
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-10 text-red-400 font-bold uppercase tracking-wide">
                                ⚠ No mercenaries enlisted ⚠
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            <?php if (isset($page)) echo $page; ?>
        </div>

        <!-- Create New -->
        <div class="flex justify-center mt-12">
            <a href="<?= site_url('users/create'); ?>" 
               class="bg-yellow-600 border-4 border-black hover:bg-yellow-700 text-black px-10 py-4 rounded-lg font-bold uppercase tracking-wider transform hover:scale-110 transition shadow-lg">
                ➕ Enlist New Mercenary
            </a>
        </div>
    </div>

</body>
</html>
