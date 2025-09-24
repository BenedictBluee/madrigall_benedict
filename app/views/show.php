<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TF2 Roster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto Slab', serif; }
        h1, th { font-family: 'Russo One', sans-serif; }
        .tf2-title {
            background: linear-gradient(90deg, #8b2d22, #c58b4b, #1d3f91);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .tf2-container {
            background: url('https://www.teamfortress.com/images/bg_tile.jpg') repeat, #1a1a1a;
            background-blend-mode: overlay;
        }
        .tf2-btn {
            border-width: 3px;
            border-color: #000;
            text-transform: uppercase;
            font-family: 'Russo One', sans-serif;
        }
        .tf2-btn-red {
            background-color: #a22c29;
        }
        .tf2-btn-blue {
            background-color: #2c3e91;
        }
        .tf2-btn-yellow {
            background-color: #d9a441;
        }
        .tf2-btn:hover {
            filter: brightness(1.1);
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-900 min-h-screen flex flex-col items-center p-8 text-yellow-100">

    <!-- Main Container -->
    <div class="tf2-container w-full max-w-6xl border-8 border-yellow-600 rounded-xl shadow-[0_0_40px_rgba(0,0,0,0.9)] p-8">

        <!-- Header -->
        <h1 class="text-6xl text-center mb-12 tf2-title drop-shadow-[0_4px_6px_rgba(0,0,0,0.8)] tracking-widest">
            ⚙ Team Fortress 2 Roster ⚙
        </h1>

        <!-- Search -->
        <div class="flex justify-center mb-12">
            <form action="<?= site_url('users/show'); ?>" method="get" class="flex w-full max-w-xl gap-3">
                <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
                <input type="text" name="q" placeholder="🔍 Search Mercenaries..." 
                       value="<?= html_escape($q); ?>" 
                       class="flex-1 border-4 border-yellow-600 bg-gray-800 text-yellow-100 px-4 py-3 rounded-lg focus:ring-4 focus:ring-yellow-500 placeholder-gray-400">
                <button type="submit" class="tf2-btn tf2-btn-yellow px-8 py-3 rounded-lg font-bold shadow-lg transition">
                    Search
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-yellow-200">
                <thead>
                    <tr class="bg-gradient-to-r from-red-800 via-gray-800 to-blue-800 text-white">
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-left">ID</th>
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-left">🟥 Codename</th>
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-left">👤 Real Name</th>
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-left">📡 Contact</th>
                        <th class="border-b-4 border-yellow-600 px-4 py-4 text-center">⚔ Orders</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-900/90">
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr class="hover:bg-gray-800/80 transition">
                                <td class="border-b border-gray-700 px-4 py-3"><?= $user['id']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-3 font-bold text-red-400"><?= $user['lname']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-3"><?= $user['fname']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-3"><?= $user['email']; ?></td>
                                <td class="border-b border-gray-700 px-4 py-3 text-center space-x-3">
                                    <a href="<?= site_url('users/update/'.$user['id']); ?>" 
                                       class="tf2-btn tf2-btn-blue text-white px-4 py-2 rounded-lg shadow-md inline-block">
                                        ✏ Edit
                                    </a>
                                    <a href="<?= site_url('users/delete/'.$user['id']); ?>" 
                                       onclick="return confirm('Discharge this mercenary from the roster?');"
                                       class="tf2-btn tf2-btn-red text-white px-4 py-2 rounded-lg shadow-md inline-block">
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
        <div class="flex justify-center mt-10">
            <?php if (isset($page)) echo $page; ?>
        </div>

        <!-- Create New -->
        <div class="flex justify-center mt-14">
            <a href="<?= site_url('users/create'); ?>" 
               class="tf2-btn tf2-btn-yellow px-10 py-4 rounded-lg font-bold shadow-xl">
                ➕ Enlist New Mercenary
            </a>
        </div>
    </div>
</body>
</html>
