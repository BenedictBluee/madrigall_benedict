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
      --tf2-dark: #1d1b19;
      --tf2-light: #f3e8d0;
      --tf2-accent: #d0843b;
      --tf2-border: #5a4d4c;
      --font-display: 'Russo One', sans-serif;
      --font-body: 'Roboto Slab', serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      font-family: var(--font-body);
      background: url("https://steamcdn-a.akamaihd.net/apps/tf2/blog/images/bg_repeat.jpg") repeat center top;
      background-color: var(--tf2-dark);
      background-attachment: fixed;
      color: var(--tf2-light);
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .form-container {
      width: 95%;
      max-width: 600px;
      background: var(--tf2-panel);
      border: 6px solid var(--tf2-border);
      border-radius: 10px;
      box-shadow: 10px 10px 0 #000;
      padding: 3rem 3.5rem;
      position: relative;
      overflow: hidden;
    }

    /* Extra decorative border glow */
    .form-container::before {
      content: "";
      position: absolute;
      top: -15px;
      left: -15px;
      right: -15px;
      bottom: -15px;
      border: 6px solid var(--tf2-red);
      pointer-events: none;
      filter: drop-shadow(0 0 6px rgba(184,56,59,0.7));
    }

    h1 {
      font-size: clamp(2.4rem, 5vw, 3rem);
      font-family: var(--font-display);
      margin-bottom: 2.2rem;
      text-transform: uppercase;
      color: var(--tf2-accent);
      text-shadow: 4px 4px 0 #000;
      border-bottom: 4px solid var(--tf2-red);
      padding-bottom: 0.7rem;
      letter-spacing: 3px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.6rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      text-align: left;
    }

    label {
      font-size: 1rem;
      font-weight: 700;
      color: var(--tf2-accent);
      margin-bottom: 0.5rem;
      text-transform: uppercase;
      letter-spacing: 1.5px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 1rem 1.2rem;
      background-color: #2b2724;
      border: 3px solid var(--tf2-border);
      border-radius: 6px;
      color: var(--tf2-light);
      font-size: 1.05rem;
      transition: border 0.25s ease, box-shadow 0.25s ease, transform 0.15s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      outline: none;
      border-color: var(--tf2-accent);
      box-shadow: 0 0 12px var(--tf2-accent);
      transform: scale(1.02);
    }

    button[type="submit"] {
      margin-top: 1.5rem;
      padding: 1.2rem 0;
      background: linear-gradient(180deg, var(--tf2-red), #922d2e);
      color: #fff;
      border: none;
      border-radius: 6px;
      font-weight: 700;
      font-size: 1.3rem;
      cursor: pointer;
      letter-spacing: 3px;
      text-transform: uppercase;
      box-shadow: 6px 6px 0 #000;
      transition: all 0.25s ease;
      font-family: var(--font-display);
    }

    button[type="submit"]:hover {
      background: linear-gradient(180deg, #922d2e, #751f20);
      transform: translateY(-3px) scale(1.03);
      box-shadow: 9px 9px 0 #000;
    }

    .back-link {
      display: inline-block;
      margin-top: 2.5rem;
      text-decoration: none;
      color: var(--tf2-light);
      font-size: 1rem;
      padding: 0.7rem 1.6rem;
      border: 3px solid var(--tf2-red);
      border-radius: 6px;
      transition: background 0.3s ease, color 0.3s ease, transform 0.2s ease;
      text-transform: uppercase;
      font-weight: 700;
      letter-spacing: 1.5px;
      background: #2b2724;
      font-family: var(--font-display);
      box-shadow: 5px 5px 0 #000;
    }

    .back-link:hover {
      background-color: var(--tf2-red);
      color: #fff;
      transform: translateY(-3px);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>// Recruit Mercenary</h1>
    <form action="<?= site_url('users/create'); ?>" method="post">
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
