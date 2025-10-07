<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Data Grid | System Console</title>
  
  <!-- Font + Icons (same as Login/Register) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Source+Code+Pro&display=swap" rel="stylesheet">
  
  <style>
  :root {
    --color-bg: #000;
    --color-panel: #0d0d0d;
    --color-border: #00ff99;
    --color-text-primary: #fff;
    --color-accent-neon: #00ff99;
    --color-accent-pink: #ff3366;
    --color-input-bg: #1a1a1a;
    --color-hover: #111;
    --font-title: 'Orbitron', sans-serif;
    --font-mono: 'Source Code Pro', monospace;
  }

  body {
    background-color: var(--color-bg);
    background-image: radial-gradient(circle at center, #001a0a 0%, #000 80%);
    color: var(--color-text-primary);
    font-family: var(--font-mono);
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    margin: 0;
    padding: 3rem 1rem;
  }

  .container {
    background-color: var(--color-panel);
    border: 1px solid var(--color-border);
    box-shadow: 0 0 25px var(--color-accent-neon);
    border-radius: 12px;
    width: 100%;
    max-width: 1200px;
    padding: 2.5rem 3rem;
    position: relative;
    backdrop-filter: blur(6px);
  }

  h1 {
    font-family: var(--font-title);
    color: var(--color-accent-neon);
    text-align: center;
    text-transform: uppercase;
    font-size: 1.8rem;
    letter-spacing: 2px;
    text-shadow: 0 0 8px var(--color-accent-neon);
    margin-bottom: 2rem;
  }

  /* Header: Search + Create Button */
  .header-controls-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.8rem;
    gap: 1rem;
  }

  .search-container {
    flex: 1;
    max-width: 500px;
  }

  .search-form {
    display: flex;
    align-items: center;
    gap: 0.6rem;
  }

  #searchBox {
    flex: 1;
    padding: 0.8rem 1rem;
    border-radius: 8px;
    background-color: var(--color-input-bg);
    border: 1px solid var(--color-border);
    color: var(--color-text-primary);
    font-family: var(--font-mono);
    font-size: 1rem;
    transition: 0.3s ease;
  }

  #searchBox:focus {
    outline: none;
    border-color: var(--color-accent-neon);
    box-shadow: 0 0 8px var(--color-accent-neon);
  }

  .search-btn {
    padding: 0.8rem 1.2rem;
    border-radius: 8px;
    font-family: var(--font-title);
    border: 2px solid var(--color-accent-neon);
    background: transparent;
    color: var(--color-accent-neon);
    cursor: pointer;
    text-transform: uppercase;
    text-shadow: 0 0 8px var(--color-accent-neon);
    transition: 0.3s ease;
  }

  .search-btn:hover {
    background-color: var(--color-accent-neon);
    color: #000;
    box-shadow: 0 0 20px var(--color-accent-neon);
  }

  .create-record-btn {
    display: inline-block;
    padding: 0.8rem 1.5rem;
    font-family: var(--font-title);
    border: 2px solid var(--color-accent-neon);
    border-radius: 8px;
    background: transparent;
    color: var(--color-accent-neon);
    text-decoration: none;
    text-transform: uppercase;
    text-shadow: 0 0 8px var(--color-accent-neon);
    transition: 0.3s ease;
  }

  .create-record-btn:hover {
    background-color: var(--color-accent-neon);
    color: #000;
    box-shadow: 0 0 20px var(--color-accent-neon);
  }

  /* Table Styling */
  .table-responsive {
    width: 100%;
    overflow-x: auto;
    border-radius: 8px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
    font-size: 0.95rem;
  }

  thead {
    background-color: #111;
  }

  th, td {
    padding: 1rem;
    border-bottom: 1px solid var(--color-border);
    text-align: center;
    white-space: nowrap;
  }

  th {
    color: var(--color-accent-neon);
    font-family: var(--font-title);
    text-transform: uppercase;
    font-size: 0.9rem;
    letter-spacing: 1px;
  }

  tr:hover {
    background-color: var(--color-hover);
    transition: background 0.3s ease;
  }

  .action-links a {
    color: var(--color-accent-neon);
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s ease;
  }

  .action-links a:hover {
    text-shadow: 0 0 8px var(--color-accent-neon);
  }

  .action-links .delete-link {
    color: var(--color-accent-pink);
  }

  .action-links .delete-link:hover {
    text-shadow: 0 0 8px var(--color-accent-pink);
  }

  /* Pagination */
  .pagination-container {
    margin-top: 2rem;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 0.5rem;
  }

  .pagination-container a,
  .pagination-container strong {
    padding: 0.6rem 1.2rem;
    border: 2px solid var(--color-accent-neon);
    border-radius: 8px;
    text-decoration: none;
    color: var(--color-accent-neon);
    font-family: var(--font-title);
    text-transform: uppercase;
    transition: 0.3s ease;
    text-shadow: 0 0 6px var(--color-accent-neon);
  }

  .pagination-container a:hover {
    background-color: var(--color-accent-neon);
    color: #000;
    box-shadow: 0 0 15px var(--color-accent-neon);
  }

  .pagination-container strong {
    background-color: var(--color-accent-neon);
    color: #000;
    box-shadow: 0 0 15px var(--color-accent-neon);
  }

  /* Logout Button */
  .logout-container {
    position: absolute;
    top: 1.8rem;
    right: 2.5rem;
  }

  .logout-btn {
    background-color: var(--color-accent-pink);
    border: 2px solid var(--color-accent-pink);
    color: #000;
    font-family: var(--font-title);
    text-transform: uppercase;
    border-radius: 8px;
    padding: 0.8rem 1.5rem;
    cursor: pointer;
    transition: 0.3s ease;
    font-weight: 700;
  }

  .logout-btn:hover {
    background-color: #ff5e8c;
    box-shadow: 0 0 20px var(--color-accent-pink);
  }

  /* ✅ Responsive Fixes */
  @media (max-width: 992px) {
    .container {
      padding: 2rem;
    }

    .logout-container {
      position: relative;
      top: auto;
      right: auto;
      text-align: center;
      margin-top: 2rem;
    }

    .logout-btn {
      width: 100%;
    }
  }

  @media (max-width: 768px) {
    .header-controls-container {
      flex-direction: column;
      align-items: stretch;
    }

    .create-record-btn {
      text-align: center;
    }

    th, td {
      padding: 0.8rem;
      font-size: 0.85rem;
    }
  }

  @media (max-width: 480px) {
    h1 {
      font-size: 1.4rem;
    }

    .search-btn {
      padding: 0.6rem 1rem;
    }

    .pagination-container a,
    .pagination-container strong {
      padding: 0.5rem 0.8rem;
      font-size: 0.8rem;
    }
  }
</style>

<!-- TF2_DESIGN_INJECT_START -->
<link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
<style>
:root{
  --tf2-red:#b8383b;
  --tf2-blu:#3b5b92;
  --tf2-accent:#d0843b;
  --tf2-dark:#0d0a0a;
  --tf2-panel:#2f2a26;
  --tf2-text:#f0e6d2;
  --tf2-highlight:#c58b4b;
  --tf2-border:#5a4d4c;
  --tf2-font-display:'Russo One', sans-serif;
  --tf2-font-body:'Roboto Slab', serif;
}
/* Strong global reset for a consistent TF2 look */
html,body{height:100%;margin:0;padding:0;background:var(--tf2-dark) !important;font-family:var(--tf2-font-body) !important;color:var(--tf2-text) !important}
body{background-image:url('https://steamcdn-a.akamaihd.net/apps/tf2/blog/images/class_repeat_bg.jpg');background-repeat:repeat;background-position:center top;background-attachment:fixed;background-color:var(--tf2-dark);}

/* TF2 panel wrapper override to ensure consistent containers */
.tf2-panel, .container, .form-container, .card { background: rgba(15,13,12,0.85) !important; border: 6px solid var(--tf2-border) !important; border-radius:12px !important; box-shadow: 10px 10px 0 #000 !important; padding:1.5rem !important; }

/* Headings */
h1,h2,h3{font-family:var(--tf2-font-display) !important; font-weight:700 !important; color:var(--tf2-highlight) !important; text-shadow:3px 3px 0 #000 !important; letter-spacing:2px !important;}

/* Bold title gradient */
.tf2-title{ background: linear-gradient(90deg, #d7b46c, #e7a643, #f2c76b); -webkit-background-clip:text; -webkit-text-fill-color:transparent; display:inline-block;}

/* Buttons */
.tf2-btn{ display:inline-block; font-family:var(--tf2-font-display) !important; text-transform:uppercase !important; border:3px solid #000 !important; padding:.8rem 1.2rem !important; border-radius:8px !important; box-shadow:6px 6px 0 #000 !important; cursor:pointer !important; transition:transform .15s ease, box-shadow .15s ease !important; }
.tf2-btn-yellow{ background:var(--tf2-highlight) !important; color:#111 !important; }
.tf2-btn-red{ background:var(--tf2-red) !important; color:#fff !important; }
.tf2-btn-blue{ background:var(--tf2-blu) !important; color:#fff !important; }
.tf2-btn:hover{ transform:translateY(-3px) !important; filter:brightness(1.06) !important; box-shadow:9px 9px 0 var(--tf2-highlight) !important; }

/* Table styles */
table{ width:100% !important; border-collapse:collapse !important; }
.tf2-table thead th{ background:linear-gradient(90deg,#8b2d22,#444,#1d3f91) !important; color:#fff !important; padding:.9rem !important; text-transform:uppercase !important; letter-spacing:1.5px !important; border-bottom:4px solid var(--tf2-highlight) !important; }
.tf2-table tbody td{ padding:.8rem !important; border-bottom:1px solid rgba(255,255,255,0.04) !important; color:var(--tf2-text) !important; }

/* Forms */
input[type="text"], input[type="email"], textarea, select { background:#241a1a !important; color:var(--tf2-text) !important; border:3px solid var(--tf2-border) !important; padding:.85rem .9rem !important; border-radius:6px !important; font-size:1rem !important; }
input:focus, textarea:focus, select:focus{ outline:none !important; box-shadow:0 0 10px var(--tf2-accent) !important; border-color:var(--tf2-accent) !important; transform:scale(1.01) !important; }

/* Utility */
.text-orange { color:#d8903a !important; }
.center { text-align:center !important; }
.header-strip{ background:linear-gradient(90deg,var(--tf2-red),var(--tf2-accent)) !important; color:#fff !important; padding:.9rem 1rem !important; font-family:var(--tf2-font-display) !important; text-transform:uppercase !important; letter-spacing:2px !important; box-shadow:0 4px 0 #000 !important; }
/* make pagination links use the button styles when they are anchors/spans */
.pagination a, .pagination span, .pagination strong { display:inline-block !important; margin:.25rem !important; }
.pagination a { padding:.5rem .7rem !important; border-radius:6px !important; background:var(--tf2-highlight) !important; color:#111 !important; border:3px solid #000 !important; box-shadow:6px 6px 0 #000 !important; text-transform:uppercase !important; font-family:var(--tf2-font-display) !important; }
.pagination strong { background:var(--tf2-red) !important; color:#fff !important; }

/* Responsive tweaks */
@media (max-width:600px){
  .tf2-panel, .container, .form-container { padding:1rem !important; }
  h1 { font-size:1.6rem !important; }
  .tf2-title { font-size:1.6rem !important; }
}
</style>
<!-- TF2_DESIGN_INJECT_END -->

</head>
<body>
  <div class="container">
    <h1>User Data Grid // Access Terminal</h1>
    
    <div class="header-controls-container">
      <div class="search-container">
        <form action="<?= site_url('users/show'); ?>" method="get" class="search-form">
          <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
          <input type="text" name="q" placeholder="Search records..." value="<?= html_escape($q); ?>" id="searchBox">
          <button type="submit" class="search-btn">Search</button>
        </form>
      </div>

      <?php $current_role = isset($_SESSION['role']) ? $_SESSION['role'] : ''; ?>
      <?php if ($current_role === 'admin'): ?>
      <a href="<?= site_url('users/create'); ?>" class="create-record-btn">Create New Record</a>
      <?php endif; ?>
    </div>

    <div class="table-responsive">
      <table id="studentsTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <?php if ($current_role === 'admin'): ?>
            <th>Action</th>
            <?php endif; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach (html_escape($users) as $user): ?>
          <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['last_name']; ?></td>
            <td><?= $user['first_name']; ?></td>
            <td><?= $user['email']; ?></td>
            <?php if ($current_role === 'admin'): ?>
            <td class="action-links">
              <a href="<?= site_url('users/update/'.$user['id']); ?>">Update</a> |
              <a href="<?= site_url('users/delete/'.$user['id']); ?>" class="delete-link" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
            </td>
            <?php endif; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="pagination-container">
      <?php if (isset($page)) echo $page; ?>
    </div>

    <div class="logout-container">
      <?php if (isset($_SESSION['user_id'])): ?>
      <form action="<?= site_url('logout'); ?>" method="post" style="display: inline;">
        <button type="submit" class="logout-btn">Logout</button>
      </form>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>