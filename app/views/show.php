<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TF2 Roster</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Roboto Slab', serif; }
    h1, th { font-family: 'Russo One', sans-serif; }

    /* Title Gradient */
    .tf2-title {
      background: linear-gradient(90deg, #b22222, #e9b96e, #2e4a9d);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* Background texture */
    .tf2-bg {
      background: url('https://steamcdn-a.akamaihd.net/apps/tf2/blog/images/bg_repeat.jpg') repeat center center,
                  #111;
      background-blend-mode: multiply;
    }

    /* Buttons */
    .tf2-btn {
      border: 3px solid #000;
      font-family: 'Russo One', sans-serif;
      text-transform: uppercase;
      transition: all 0.2s ease-in-out;
    }
    .tf2-btn-red { background-color: #a72c25; }
    .tf2-btn-blue { background-color: #1d3f91; }
    .tf2-btn-yellow { background-color: #c58b4b; }
    .tf2-btn:hover {
      transform: translateY(-3px) scale(1.05);
      filter: brightness(1.15);
      box-shadow: 0 6px 18px rgba(0,0,0,0.6);
    }

    /* Table styling */
    .tf2-table th {
      background: linear-gradient(90deg, #8b2d22, #444, #1d3f91);
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 2px;
    }
  </style>
</head>
<body class="tf2-bg min-h-screen flex flex-col items-center p-6 text-yellow-100">

  <!-- Main Container -->
  <div class="w-full max-w-6xl border-8 border-yellow-600 rounded-xl shadow-[0_0_50px_rgba(0,0,0,0.9)] p-8 bg-black/80">

    <!-- Header -->
    <h1 class="text-6xl text-center mb-10 tf2-title drop-shadow-[0_5px_10px_rgba(0,0,0,0.9)] tracking-widest">
      🪖 Mercenary Roster
    </h1>

    <!-- Search -->
    <div class="flex justify-center mb-10">
      <form action="<?= site_url('users/show'); ?>" method="get" class="flex w-full max-w-xl gap-3">
        <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
        <input type="text" name="q" placeholder="🔍 Search the Barracks..." 
               value="<?= html_escape($q); ?>" 
               class="flex-1 border-4 border-yellow-600 bg-gray-900 text-yellow-100 px-4 py-3 rounded-lg focus:ring-4 focus:ring-yellow-500 placeholder-gray-500">
        <button type="submit" class="tf2-btn tf2-btn-yellow px-8 py-3 rounded-lg font-bold shadow-md">
          Search
        </button>
      </form>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="w-full border-collapse text-yellow-200 tf2-table">
        <thead>
          <tr>
            <th class="border-b-4 border-yellow-600 px-4 py-4 text-left">ID</th>
            <th class="border-b-4 border-yellow-600 px-4 py-4 text-left">Codename</th>
            <th class="border-b-4 border-yellow-600 px-4 py-4 text-left">Real Name</th>
            <th class="border-b-4 border-yellow-600 px-4 py-4 text-left">Comms</th>
            <th class="border-b-4 border-yellow-600 px-4 py-4 text-center">Orders</th>
          </tr>
        </thead>
        <tbody class="bg-gray-900/80">
          <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
              <tr class="hover:bg-gray-800 transition">
                <td class="border-b border-gray-700 px-4 py-3"><?= $user['id']; ?></td>
                <td class="border-b border-gray-700 px-4 py-3 font-bold text-red-400 uppercase"><?= $user['lname']; ?></td>
                <td class="border-b border-gray-700 px-4 py-3"><?= $user['fname']; ?></td>
                <td class="border-b border-gray-700 px-4 py-3"><?= $user['email']; ?></td>
                <td class="border-b border-gray-700 px-4 py-3 text-center space-x-3">
                  <a href="<?= site_url('users/update/'.$user['id']); ?>" 
                     class="tf2-btn tf2-btn-blue text-white px-4 py-2 rounded-md">
                      ✏ Modify
                  </a>
                  <a href="<?= site_url('users/delete/'.$user['id']); ?>" 
                     onclick="return confirm('Discharge this mercenary?');"
                     class="tf2-btn tf2-btn-red text-white px-4 py-2 rounded-md">
                      ❌ Remove
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="5" class="text-center py-12 text-red-400 font-bold uppercase tracking-wide">
                ⚠ No mercenaries currently enlisted ⚠
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
