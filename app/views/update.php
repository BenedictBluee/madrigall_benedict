<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User | RED Team Console</title>

  <style>
    :root {
      --tf2-red: #b8383b;
      --tf2-orange: #d19a46;
      --tf2-dark: #0f0d0c;
      --tf2-panel: #302925;
      --tf2-border: #4e443f;
      --tf2-text: #f1e7d0;
    }

    html, body {
      height: 100%;
      margin: 0;
      background: var(--tf2-dark);
      color: var(--tf2-text);
      font-family: Georgia, 'Times New Roman', serif;
      display: flex;
      justify-content: center;
      align-items: center;
      background-image:
        radial-gradient(circle at 10% 20%, rgba(255,255,255,0.02) 0 2px, transparent 2px 60px),
        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.01) 0 1px, transparent 1px 120px),
        linear-gradient(180deg, rgba(0,0,0,0.15), rgba(0,0,0,0.35));
      background-blend-mode: overlay;
    }

    .form-container {
      width: 100%;
      max-width: 520px;
      background: linear-gradient(180deg, rgba(48,41,37,0.96), rgba(34,28,25,0.96));
      border: 6px solid var(--tf2-border);
      border-radius: 12px;
      box-shadow: 10px 10px 0 #000;
      padding: 2rem;
      color: var(--tf2-text);
      animation: fadeUp 0.9s ease forwards;
    }

    @keyframes fadeUp {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-family: "Impact", "Arial Black", sans-serif;
      text-align: center;
      color: var(--tf2-orange);
      text-shadow: 3px 3px 0 #000;
      margin-bottom: 1.5rem;
      letter-spacing: 1px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    label {
      text-transform: uppercase;
      font-weight: bold;
      letter-spacing: 1px;
      font-size: 0.85rem;
      color: var(--tf2-orange);
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      background: #241a18;
      color: var(--tf2-text);
      border: 3px solid var(--tf2-border);
      border-radius: 8px;
      padding: 0.8rem;
      font-size: 1rem;
      transition: 0.2s;
    }

    input:focus {
      outline: none;
      border-color: var(--tf2-orange);
      box-shadow: 0 0 8px var(--tf2-orange);
      transform: scale(1.01);
    }

    button[type="submit"] {
      background: var(--tf2-red);
      color: #fff;
      font-family: "Impact", "Arial Black", sans-serif;
      text-transform: uppercase;
      border: 3px solid #000;
      border-radius: 8px;
      padding: 0.9rem 1.2rem;
      cursor: pointer;
      box-shadow: 6px 6px 0 #000;
      font-size: 1rem;
      letter-spacing: 1px;
      transition: all 0.25s ease;
    }

    button[type="submit"]:hover {
      transform: translateY(-3px);
      filter: brightness(1.1);
      box-shadow: 9px 9px 0 rgba(0,0,0,0.9);
    }

    .back-link {
      display: inline-block;
      margin-top: 1.5rem;
      text-decoration: none;
      color: #111;
      background: var(--tf2-orange);
      border: 3px solid #000;
      padding: 0.6rem 1rem;
      border-radius: 8px;
      font-family: "Impact", "Arial Black", sans-serif;
      text-transform: uppercase;
      box-shadow: 6px 6px 0 #000;
      transition: all 0.25s ease;
    }

    .back-link:hover {
      transform: translateY(-3px);
      filter: brightness(1.05);
      box-shadow: 9px 9px 0 rgba(0,0,0,0.9);
    }

    @media (max-width: 600px) {
      .form-container {
        padding: 1.5rem;
        border-width: 4px;
      }
      h1 {
        font-size: 1.6rem;
      }
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h1>// Update User</h1>

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
