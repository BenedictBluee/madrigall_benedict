<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create User | System Console</title>
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
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background: linear-gradient(180deg, rgba(48,41,37,0.96), rgba(34,28,25,0.96));
      border: 6px solid var(--tf2-border);
      border-radius: 12px;
      box-shadow: 10px 10px 0 rgba(0,0,0,1);
      padding: 2rem 2.5rem;
      width: 380px;
      color: var(--tf2-text);
      text-align: center;
      animation: fadeIn 0.6s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-family: "Impact", "Arial Black", sans-serif;
      font-size: 1.8rem;
      color: var(--tf2-highlight);
      text-shadow: 3px 3px 0 #000;
      margin-bottom: 1.5rem;
      letter-spacing: 2px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      text-align: left;
    }

    label {
      color: var(--tf2-orange);
      font-size: 0.95rem;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 0.8rem 1rem;
      background-color: #241a18;
      border: 3px solid var(--tf2-border);
      border-radius: 6px;
      color: var(--tf2-text);
      font-size: 1rem;
      transition: 0.2s ease;
      box-sizing: border-box;
    }

    input:focus {
      outline: none;
      border-color: var(--tf2-orange);
      box-shadow: 0 0 10px var(--tf2-orange);
      transform: scale(1.01);
    }

    button[type="submit"] {
      width: 100%;
      padding: 0.9rem;
      font-family: "Impact", "Arial Black", sans-serif;
      font-size: 1.1rem;
      text-transform: uppercase;
      background: var(--tf2-red);
      color: #fff;
      border: 3px solid #000;
      border-radius: 8px;
      box-shadow: 6px 6px 0 #000;
      cursor: pointer;
      transition: 0.25s ease;
      margin-top: 0.5rem;
    }

    button[type="submit"]:hover {
      background: #c14b41;
      transform: translateY(-3px);
      box-shadow: 9px 9px 0 rgba(0,0,0,0.9);
    }

    .back-link {
      display: block;
      margin-top: 1.4rem;
      color: var(--tf2-text);
      text-decoration: none;
      font-weight: bold;
      font-size: 0.95rem;
      text-transform: uppercase;
      transition: 0.3s ease;
    }

    .back-link:hover {
      color: var(--tf2-highlight);
      text-shadow: 0 0 6px var(--tf2-highlight);
    }

    @media (max-width: 420px) {
      .form-container {
        width: 90%;
        padding: 1.5rem;
      }
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h1>// CREATE USER</h1>

    <form action="<?=site_url('users/create');?>" method="post">
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" required>
      </div>

      <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <button type="submit">Submit Record</button>
    </form>

    <a href="<?=site_url('users/show');?>" class="back-link">// Back to Dashboard</a>
  </div>
</body>
</html>
