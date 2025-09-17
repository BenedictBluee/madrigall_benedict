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

  <!-- Live Search Input -->
  <div class="mb-4 w-11/12 md:w-3/4 flex justify-end">
    <input id="searchInput" type="text" placeholder="Search by name or email..." class="w-full md:w-1/2 px-4 py-2 rounded-lg border border-green-500 bg-gray-900 text-green-400 focus:outline-none focus:ring-2 focus:ring-green-600" />
  </div>

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
      <tbody id="userTableBody">
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
    <!-- Pagination Controls -->
    <div id="paginationControls">
      <?php if (isset($pagination) && $pagination['last_page'] > 1): ?>
        <div class="flex justify-center items-center gap-2 py-4 bg-gray-900">
          <?php for ($i = 1; $i <= $pagination['last_page']; $i++): ?>
            <a href="?page=<?=$i;?>" class="px-3 py-1 rounded <?php if ($i == $pagination['current_page']) echo 'bg-green-600 text-white'; else echo 'bg-gray-700 hover:bg-green-700'; ?>">
              <?=$i; ?>
            </a>
          <?php endfor; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <a href="<?=site_url('users/create');?>" 
     class="mt-6 px-6 py-2 bg-green-600 hover:bg-green-500 rounded-lg shadow-md shadow-green-500/50 transition">
    ➕ Create Record
  </a>

</body>
<script>
const searchInput = document.getElementById('searchInput');
const userTableBody = document.getElementById('userTableBody');
const paginationControls = document.getElementById('paginationControls');
let searchTimeout = null;
let currentPage = 1;

function renderUsers(users) {
  userTableBody.innerHTML = '';
  if (users.length === 0) {
    userTableBody.innerHTML = '<tr><td colspan="5" class="text-center py-4">No users found.</td></tr>';
    return;
  }
  users.forEach(user => {
    userTableBody.innerHTML += `
      <tr class="border-b border-green-700 hover:bg-green-900 transition">
        <td class="px-4 py-2">${user.id}</td>
        <td class="px-4 py-2">${user.lname}</td>
        <td class="px-4 py-2">${user.fname}</td>
        <td class="px-4 py-2">${user.email}</td>
        <td class="px-4 py-2 flex gap-2">
          <a href="users/update/${user.id}" class="px-3 py-1 bg-blue-600 hover:bg-blue-500 rounded-md text-white">✏ Update</a>
          <a href="users/soft-delete/${user.id}" class="px-3 py-1 bg-red-600 hover:bg-red-500 rounded-md text-white">🗑 Delete</a>
        </td>
      </tr>
    `;
  });
}

function renderPagination(lastPage, currentPage) {
  let html = '';
  if (lastPage > 1) {
    html += '<div class="flex justify-center items-center gap-2 py-4 bg-gray-900">';
    for (let i = 1; i <= lastPage; i++) {
      html += `<button onclick="goToPage(${i})" class="px-3 py-1 rounded ${i === currentPage ? 'bg-green-600 text-white' : 'bg-gray-700 hover:bg-green-700'}">${i}</button>`;
    }
    html += '</div>';
  }
  paginationControls.innerHTML = html;
}

function fetchUsers(page = 1, query = '') {
  let url = query ? `users/search?q=${encodeURIComponent(query)}` : `users/show?page=${page}`;
  fetch(url)
    .then(res => res.json())
    .then(data => {
      if (query) {
        renderUsers(data);
        renderPagination(1, 1); // Hide pagination for search
      } else {
        renderUsers(data.users || data.data || []);
        renderPagination(data.pagination ? data.pagination.last_page : 1, data.pagination ? data.pagination.current_page : 1);
      }
    });
}

function goToPage(page) {
  currentPage = page;
  const query = searchInput.value.trim();
  if (query) {
    fetchUsers(1, query);
  } else {
    fetchUsers(page);
  }
}

searchInput.addEventListener('input', function() {
  clearTimeout(searchTimeout);
  searchTimeout = setTimeout(() => {
    const query = searchInput.value.trim();
    if (query) {
      fetchUsers(1, query);
    } else {
      fetchUsers(currentPage);
    }
  }, 300);
});
</script>
</html>
