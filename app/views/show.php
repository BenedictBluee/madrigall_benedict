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


     <div class="container">
        <h1>User Data Grid // Access Terminal</h1>
        
        <div class="search-container">
            <input type="text" id="searchBox" placeholder="Search records...">
        </div>
        
        <div class="table-responsive">
            <table id="studentsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (html_escape($users) as $user):?>
                        <tr>
                            <td><?=$user['id'];?></td>
                            <td><?=$user['lname'];?></td>
                            <td><?=$user['fname'];?></td>
                            <td><?=$user['email'];?></td>
                            <td class="action-links">
                                <a href="<?=site_url('users/update/'.$user['id']);?>">Update</a> |
                                <a href="<?=site_url('users/delete/'.$user['id']);?>" class="delete-link" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        
        <div id="pagination" class="pagination-container"></div>
        
        <div style="text-align: center;">
            <a href="<?=site_url('users/create');?>" class="create-record-btn">Create New Record</a>
        </div>
    </div>
  
    <script>
    // Live search and pagination (client-side)
    const searchBox = document.getElementById('searchBox');
    const table = document.getElementById('studentsTable');
    const tbody = table.querySelector('tbody');
    const rows = Array.from(tbody.querySelectorAll('tr'));
    const pagination = document.getElementById('pagination');
    const pageSize = 5;
    let currentPage = 1;

    function filterRows() {
        const query = searchBox.value.trim().toLowerCase();
        return rows.filter(row => {
            return Array.from(row.children).some(cell =>
                cell.textContent.toLowerCase().includes(query)
            );
        });
    }

    function renderTable(page = 1) {
        const filtered = filterRows();
        const total = filtered.length;
        const totalPages = Math.ceil(total / pageSize) || 1;
        if (page > totalPages) page = totalPages;
        currentPage = page;
        tbody.innerHTML = '';
        const start = (page - 1) * pageSize;
        const end = start + pageSize;
        filtered.slice(start, end).forEach(row => tbody.appendChild(row));
        renderPagination(totalPages);
    }

    function renderPagination(totalPages) {
        let html = '';
        const maxButtons = 5;
        let startPage = Math.max(1, currentPage - Math.floor(maxButtons / 2));
        let endPage = Math.min(totalPages, startPage + maxButtons - 1);

        if (endPage - startPage + 1 < maxButtons) {
            startPage = Math.max(1, endPage - maxButtons + 1);
        }

        // Always render pagination
        html += `<button onclick="gotoPage(1)" ${currentPage===1?'disabled':''}>&laquo;</button>`;
        html += `<button onclick="gotoPage(${currentPage-1})" ${currentPage===1?'disabled':''}>&lt;</button>`;
        
        for (let i = startPage; i <= endPage; i++) {
            html += `<button onclick="gotoPage(${i})" class="${i===currentPage?'active':''}">${i}</button>`;
        }

        html += `<button onclick="gotoPage(${currentPage+1})" ${currentPage===totalPages?'disabled':''}>&gt;</button>`;
        html += `<button onclick="gotoPage(${totalPages})" ${currentPage===totalPages?'disabled':''}>&raquo;</button>`;
        
        pagination.innerHTML = html;
    }

    function gotoPage(page) {
        renderTable(page);
    }

    searchBox.addEventListener('input', () => renderTable(1));
    // Initial render
    renderTable(1);
    </script>

</body>
</html>
