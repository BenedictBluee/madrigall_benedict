<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-green-400 font-mono min-h-screen flex flex-col items-center py-10">

  <h1 class="text-3xl font-bold tracking-widest mb-6">📜 USER LIST</h1>


  <div class="w-11/12 md:w-3/4 bg-gray-800 rounded-2xl shadow-lg border border-green-500 overflow-hidden">
    <table class="w-full border-collapse">
      <thead class="bg-green-600 text-gray-900">
        <tr>
          <th class="px-4 py-2">ID</th>
          <th class="px-4 py-2">Last Name</th>
          <th class="px-4 py-2">First Name</th>
          <th class="px-4 py-2">Email</th>
          <th class="px-4 py-2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach (html_escape($users) as $user): ?>
        <tr class="border-b border-green-700 hover:bg-green-900 transition">
          <td class="px-4 py-2"><?=$user['id'];?></td>
          <td class="px-4 py-2"><?=$user['lname'];?></td>
          <td class="px-4 py-2"><?=$user['fname'];?></td>
          <td class="px-4 py-2"><?=$user['email'];?></td>
          <td class="px-4 py-2 flex gap-2">
            <a href="<?=site_url('users/update/'.$user['id']);?>" 
               class="px-3 py-1 bg-blue-600 hover:bg-blue-500 rounded-md text-white">
              ✏ Update
            </a>
            <a href="<?=site_url('users/soft-delete/'.$user['id']);?>" 
               class="px-3 py-1 bg-red-600 hover:bg-red-500 rounded-md text-white">
              🗑 Delete
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
  

  <a href="<?=site_url('users/create');?>" 
     class="mt-6 px-6 py-2 bg-green-600 hover:bg-green-500 rounded-lg shadow-md shadow-green-500/50 transition">
    ➕ Create Record
  </a>

  <div class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 flex flex-wrap justify-end items-center gap-3 bg-white/90 dark:bg-gray-800/80 p-2 rounded-lg shadow-md z-50">
      <?php if (isset($page)) echo $page; ?>
  </div>

</body>
</html>
