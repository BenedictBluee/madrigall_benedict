<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Mercenary | TF2 Console</title>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --tf2-red: #b8383b;
      --tf2-blu: #3b5b92;
      --tf2-panel: #3f3a36;
      --tf2-dark: #2a2623;
      --tf2-light: #f0e6d2;
      --tf2-accent: #d0843b;
      --tf2-border: #5a4d4c;
      --font-display: 'Russo One', sans-serif;
      --font-body: 'Roboto Slab', serif;
    }

    body {
      background: var(--tf2-dark);
      color: var(--tf2-light);
      font-family: var(--font-body);
      margin: 0;
      padding: 2rem;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    @keyframes fadeSlideUp {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .form-container {
      width: 90%;
      max-width: 520px;
      background: var(--tf2-panel);
      border: 3px solid var(--tf2-red);
      box-shadow: 6px 6px 0 #000;
      padding: 2.5rem;
      border-radius: 6px;
      text-align: center;
      animation: fadeSlideUp 0.8s ease forwards;
    }

    h1 {
      font-size: clamp(1.8rem, 5vw, 2.5rem);
      font-family: var(--font-display);
      margin-bottom: 2rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: var(--tf2-accent);
      text-shadow: 2px 2px 0 #000;
      border-bottom: 2px solid var(--tf2-red);
      padding-bottom: 0.5rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      width: 100%;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      text-align: left;
    }

    label {
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--tf2-accent);
      margin-bottom: 0.4rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 0.9rem 1rem;
      background-color: #2e2a28;
      border: 2px solid var(--tf2-border);
      border-radius: 4px;
      color: var(--tf2-light);
      font-size: 1rem;
      transition: border 0.2s ease, box-shadow 0.2s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      outline: none;
      border-color: var(--tf2-accent);
      box-shadow: 0 0 6px var(--tf2-accent);
    }

    button[type="submit"] {
      width: 100%;
      padding: 1rem 0;
      background-color: var(--tf2-red);
      color: #fff;
      border: none;
      border-radius: 4px;
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      letter-spacing: 2px;
      text-transform: uppercase;
      box-shadow: 4px 4px 0 #000;
      transition: all 0.3s ease;
      font-family: var(--font-display);
    }

    button[type="submit"]:hover {
      background-color: #922d2e;
      transform: translateY(-2px);
      box-shadow: 6px 6px 0 #000;
    }

    .back-link {
      display: inline-block;
      margin-top: 2rem;
      text-decoration: none;
      color: var(--tf2-light);
      font-size: 0.9rem;
      padding: 0.6rem 1.2rem;
      border: 2px solid var(--tf2-red);
      border-radius: 4px;
      transition: background 0.3s ease, color 0.3s ease;
      text-transform: uppercase;
      font-weight: 600;
      letter-spacing: 1px;
      background: #2e2a28;
    }

    .back-link:hover {
      background-color: var(--tf2-red);
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>// Recruit Mercenary</h1>
    <form action="<?= site_url('users/store'); ?>" method="post">
      <div class="form-group">
        <label for="lname">Codename</label>
        <input type="text" id="lname" name="lname" required>
      </div>

      <div class="form-group">
        <label for="fname">Real Name</label>
        <input type="text" id="fname" name="fname" required>
      </div>

      <div class="form-group">
        <label for="email">Comms Link</label>
        <input type="email" id="email" name="email" required>
      </div>

      <button type="submit">Deploy Record</button>
    </form>
    <a href="<?= site_url('users/show'); ?>" class="back-link">// Back to Base</a>
  </div>
</body>
</html>
