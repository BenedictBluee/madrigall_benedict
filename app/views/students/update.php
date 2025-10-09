<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>// UPDATE USER | System Console</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    :root {
      --tf2-red: #b8383b;
      --tf2-orange: #c58b4b;
      --tf2-dark: #0f0d0c;
      --tf2-panel: #302925;
      --tf2-text: #f1e7d0;
      --tf2-border: #4e443f;
      --tf2-highlight: #d9a441;
    }

    /* Base */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      background: var(--tf2-dark);
      color: var(--tf2-text);
      font-family: Georgia, 'Times New Roman', serif;
    }

    body {
      background-image:
        radial-gradient(circle at 10% 20%, rgba(255,255,255,0.02) 0 2px, transparent 2px 60px),
        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.01) 0 1px, transparent 1px 120px),
        linear-gradient(180deg, rgba(0,0,0,0.15), rgba(0,0,0,0.35));
      background-blend-mode: overlay;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }

    /* Panel */
    .form-container {
      background: linear-gradient(180deg, rgba(48,41,37,0.96), rgba(34,28,25,0.96));
      border: 6px solid var(--tf2-border);
      border-radius: 12px;
      box-shadow: 10px 10px 0 rgba(0,0,0,1);
      padding: 2rem 2.5rem;
      width: 420px;
      max-width: 95%;
      animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-family: "Impact", "Arial Black", sans-serif;
      color: var(--tf2-highlight);
      text-shadow: 3px 3px 0 #000;
      text-transform: uppercase;
      font-size: 1.8rem;
      margin-bottom: 1.8rem;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.3rem;
    }

    label {
      display: block;
      font-weight: bold;
      color: var(--tf2-orange);
      text-transform: uppercase;
      font-size: 0.9rem;
      margin-bottom: 0.3rem;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 0.8rem 1rem;
      background: #241a18;
      color: var(--tf2-text);
      border: 3px solid var(--tf2-border);
      border-radius: 6px;
      font-size: 1rem;
      transition: 0.2s ease;
    }

    input:focus {
      outline: none;
      border-color: var(--tf2-orange);
      box-shadow: 0 0 8px var(--tf2-orange);
      transform: scale(1.01);
    }

    button[type="submit"] {
      width: 100%;
      background: var(--tf2-red);
      color: #fff;
      border: 3px solid #000;
      padding: 0.9rem;
      border-radius: 8px;
      font-family: "Impact", "Arial Black", sans-serif;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 1rem;
      box-shadow: 6px 6px 0 #000;
      cursor: pointer;
      transition: 0.2s ease;
    }

    button[type="submit"]:hover {
      transform: translateY(-3px);
      filter: brightness(1.1);
      box-shadow: 9px 9px 0 rgba(0,0,0,0.9);
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 1.5rem;
      color: var(--tf2-text);
      text-decoration: none;
      font-weight: bold;
      font-size: 0.95rem;
      transition: 0.3s ease;
    }

    .back-link:hover {
      color: var(--tf2-highlight);
      text-shadow: 2px 2px 0 #000;
    }

    @media (max-width: 480px) {
      .form-container {
        padding: 1.5rem;
        border-width: 4px;
        border-radius: 8px;
      }

      h1 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h1>// UPDATE USER_REC</h1>

    <form action="<?=site_url('users/update/'.$user['id']);?>" method="post">
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?=html_escape($user['last_name']);?>" required>
      </div>

      <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?=html_escape($user['first_name']);?>" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?=html_escape($user['email']);?>" required>
      </div>

      <button type="submit">Update Record</button>
    </form>

    <a href="<?=site_url('users/show');?>" class="back-link">// Back to Dashboard</a>
  </div>
</body>
</html>
