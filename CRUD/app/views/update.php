<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-green-400 font-mono min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md bg-gray-800 rounded-2xl shadow-lg border border-green-500 p-8">
    <h1 class="text-3xl font-bold text-center mb-6 tracking-widest">⚙ UPDATE USER</h1>

    <form action="<?=site_url('users/update/'.$user['id']);?>" method="post" class="space-y-4">
      <div>
        <label for="lname" class="block text-sm">Last Name:</label>
        <input type="text" id="lname" name="lname" 
               value="<?=html_escape($user['lname']);?>" 
               class="w-full px-3 py-2 bg-gray-900 border border-green-500 rounded-lg 
                      focus:outline-none focus:ring-2 focus:ring-green-400">
      </div>

      <div>
        <label for="fname" class="block text-sm">First Name:</label>
        <input type="text" id="fname" name="fname" 
               value="<?=html_escape($user['fname']);?>" 
               class="w-full px-3 py-2 bg-gray-900 border border-green-500 rounded-lg 
                      focus:outline-none focus:ring-2 focus:ring-green-400">
      </div>

      <div>
        <label for="email" class="block text-sm">Email:</label>
        <input type="email" id="email" name="email" 
               value="<?=html_escape($user['email']);?>" 
               class="w-full px-3 py-2 bg-gray-900 border border-green-500 rounded-lg 
                      focus:outline-none focus:ring-2 focus:ring-green-400">
      </div>

      <div class="flex justify-between items-center pt-4">
        <button type="submit" 
                class="px-6 py-2 bg-blue-600 hover:bg-blue-500 rounded-lg 
                       shadow-md shadow-blue-500/50 transition">
          💾 Save
        </button>
        <a href="<?=site_url('users/show');?>" 
           class="px-6 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg">
          ⬅ Back
        </a>
      </div>
    </form>
  </div>
</body>
</html>
