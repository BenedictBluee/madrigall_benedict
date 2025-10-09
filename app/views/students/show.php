<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Data Grid | RED Team Console</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer" />

  <style>
    :root {
      --tf2-red: #b8383b;
      --tf2-orange: #d9a441;
      --tf2-dark: #1a1412;
      --tf2-panel: #302925;
      --tf2-border: #4e443f;
      --tf2-text: #f1e7d0;
      --tf2-highlight: #d9a441;
    }

    body {
      background-color: var(--tf2-dark);
      background-image:
        radial-gradient(circle at 10% 20%, rgba(255,255,255,0.02) 0 2px, transparent 2px 60px),
        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.01) 0 1px, transparent 1px 120px),
        linear-gradient(180deg, rgba(0,0,0,0.2), rgba(0,0,0,0.4));
      background-blend-mode: overlay;
      color: var(--tf2-text);
      font-family: "Trebuchet MS", "Impact", sans-serif;
      margin: 0;
      padding: 3rem 1rem;
    }

    .container {
      background: linear-gradient(180deg, rgba(48,41,37,0.96), rgba(34,28,25,0.96));
      border: 6px solid var(--tf2-border);
      border-radius: 12px;
      box-shadow: 12px 12px 0 rgba(0,0,0,1);
      max-width: 1200px;
      margin: auto;
      padding: 2rem 2.5rem;
      position: relative;
    }

    h1 {
      font-family: "Impact", "Arial Black", sans-serif;
      color: var(--tf2-highlight);
      text-shadow: 3px 3px 0 #000;
      text-transform: uppercase;
      text-align: center;
      font-size: 2rem;
      letter-spacing: 1px;
      margin-bottom: 2rem;
    }

    .header-controls-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.8rem;
    }

    .search-form {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      flex: 1;
      max-width: 500px;
    }

    #searchBox {
      flex: 1;
      padding: 0.8rem 1rem;
      background-color: #241a18;
      border: 3px solid var(--tf2-border);
      border-radius: 6px;
      color: var(--tf2-text);
      font-size: 1rem;
      transition: 0.2s ease;
    }

    #searchBox:focus {
      outline: none;
      border-color: var(--tf2-orange);
      box-shadow: 0 0 10px var(--tf2-orange);
      transform: scale(1.01);
    }

    .search-btn {
      padding: 0.8rem 1.2rem;
      font-family: "Impact", "Arial Black", sans-serif;
      text-transform: uppercase;
      background: var(--tf2-highlight);
      color: #111;
      border: 3px solid #000;
      border-radius: 8px;
      box-shadow: 6px 6px 0 #000;
      cursor: pointer;
      transition: 0.25s ease;
    }

    .search-btn:hover {
      transform: translateY(-3px);
      box-shadow: 9px 9px 0 rgba(0,0,0,0.9);
    }

    .create-record-btn {
      display: inline-block;
      padding: 0.8rem 1.5rem;
      font-family: "Impact", "Arial Black", sans-serif;
      border: 3px solid #000;
      border-radius: 8px;
      background: var(--tf2-red);
      color: #fff;
      box-shadow: 6px 6px 0 #000;
      text-transform: uppercase;
      text-decoration: none;
      transition: 0.25s ease;
    }

    .create-record-btn:hover {
      background: #c14b41;
      transform: translateY(-3px);
      box-shadow: 9px 9px 0 rgba(0,0,0,0.9);
    }

    /* Table */
    .table-responsive {
      overflow-x: auto;
      border-radius: 8px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }

    thead th {
      background: linear-gradient(90deg, #8b2d22, #3a3432);
      color: #fff;
      text-transform: uppercase;
      padding: 1rem;
      border-bottom: 4px solid var(--tf2-highlight);
      letter-spacing: 1px;
      font-size: 0.95rem;
    }

    tbody td {
      padding: 1rem;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      color: var(--tf2-text);
      text-align: center;
    }

    tr:hover {
      background: rgba(255,255,255,0.05);
      transition: 0.3s ease;
    }

    .action-links a {
      color: var(--tf2-highlight);
      font-weight: bold;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .action-links a:hover {
      text-shadow: 0 0 8px var(--tf2-highlight);
    }

    .delete-link {
      color: var(--tf2-red);
    }

    .delete-link:hover {
      text-shadow: 0 0 8px var(--tf2-red);
    }

    /* Pagination */
    .pagination-container {
      margin-top: 2rem;
      text-align: center;
    }

    .pagination-container a,
    .pagination-container strong {
      display: inline-block;
      padding: 0.6rem 1.2rem;
      margin: 0.25rem;
      background: var(--tf2-highlight);
      color: #111;
      border: 3px solid #000;
      border-radius: 8px;
      box-shadow: 5px 5px 0 #000;
      font-family: "Impact", "Arial Black", sans-serif;
      text-transform: uppercase;
      text-decoration: none;
      transition: 0.25s ease;
    }

    .pagination-container a:hover {
      transform: translateY(-3px);
      box-shadow: 8px 8px 0 rgba(0,0,0,0.9);
    }

    .pagination-container strong {
      background: var(--tf2-red);
      color: #fff;
    }

    /* Logout */
.logout-container {
  position: absolute;
  top: 1.8rem;
  right: 2.5rem;
}


    .logout-btn {
      background: var(--tf2-red);
      color: #fff;
      border: 3px solid #000;
      border-radius: 8px;
      box-shadow: 6px 6px 0 #000;
      font-family: "Impact", "Arial Black", sans-serif;
      text-transform: uppercase;
      padding: 0.8rem 1.5rem;
      cursor: pointer;
      transition: 0.25s ease;
    }

    .logout-btn:hover {
      background: #c14b41;
      transform: translateY(-3px);
      box-shadow: 9px 9px 0 rgba(0,0,0,0.9);
    }

    /* Responsive */
    @media (max-width: 992px) {
      .container {
        padding: 1.5rem;
      }
      .logout-container {
        position: relative;
        top: auto;
        right: auto;
        margin-top: 2rem;
        text-align: center;
      }
    }

    @media (max-width: 768px) {
      .header-controls-container {
        flex-direction: column;
        align-items: stretch;
      }
      h1 {
        font-size: 1.6rem;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>User Data Grid // RED Team Console</h1>

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
      <a href="<?= site_url('users/create'); ?>" class="create-record-btn">Create Record</a>
      <?php endif; ?>
    </div>

    <div class="table-responsive">
      <table>
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
              <a href="<?= site_url('users/delete/'.$user['id']); ?>" class="delete-link" onclick="return confirm('Delete this record?');">Delete</a>
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
