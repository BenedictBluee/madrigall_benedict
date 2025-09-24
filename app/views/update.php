<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Mercenary | TF2 Roster</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Roboto Slab', serif; }
    h1, label { font-family: 'Russo One', sans-serif; }

    /* Gradient TF2 Title */
    .tf2-title {
      background: linear-gradient(90deg, #d7b46c, #e7a643, #f2c76b);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* Background */
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
    .tf2-btn-red { background-color: #a72c25; color: #fff; }
    .tf2-btn-blue { background-color: #1d3f91; color: #fff; }
    .tf2-btn-yellow { background-color: #c58b4b; color: #fff; }
    .tf2-btn:hover {
      transform: translateY(-3px) scale(1.05);
      filter: brightness(1.15);
      box-shadow: 0 6px 18px rgba(0,0,0,0.6);
    }

    /* Inputs */
    input[type="text"], input[type="email"] {
      @apply border-4 border-yellow-600 bg-gray-900 text-yellow-100 px-4 py-3 rounded-lg w-full focus:ring-4 focus:ring-yellow-500;
    }
  </style>
</head>
<body class="tf2-bg min-h-screen flex flex-col items-center p-6 text-yellow-100">

  <!-- Main Container -->
  <div class="w-full max-w-3xl border-8 border-yellow-600 rounded-xl shadow-[0_0_40px_rgba(0,0,0,0.9)] p-8 bg-black/80">

    <!-- Header -->
    <h1 class="text-5xl text-center mb-10 tf2-title drop-shadow-[0_5px_10px_rgba(0,0,0,0.9)] tracking-widest">
      ✏ Update Mercenary
    </h1>

    <!-- Update Form -->
    <form action="<?= site_url('users/update/'.$user['id']); ?>" method="post" class="space-y-6">
      <div>
        <label for="lname" class="block text-yellow-200 mb-2 tracking-wide">Codename</label>
        <input type="text" id="lname" name="lname" value="<?= html_escape($user['lname']); ?>" required>
      </div>

      <div>
        <label for="fname" class="block text-yellow-200 mb-2 tracking-wide">Real Name</label>
        <input type="text" id="fname" name="fname" value="<?= html_escape($user['fname']); ?>" required>
      </div>

      <div>
        <label for="email" class="block text-yellow-200 mb-2 tracking-wide">Comms Link</label>
        <input type="email" id="email" name="email" value="<?= html_escape($user['email']); ?>" required>
      </div>

      <div class="flex justify-center gap-6 pt-6">
        <button type="submit" class="tf2-btn tf2-btn-red px-8 py-3 rounded-lg font-bold">
          🚀 Deploy Update
        </button>
        <a href="<?= site_url('users/show'); ?>" class="tf2-btn tf2-btn-blue px-8 py-3 rounded-lg font-bold">
          ⟵ Back to Roster
        </a>
      </div>
    </form>
  </div>
</body>
</html>
