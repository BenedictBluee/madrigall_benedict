<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | TF2 Console</title>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --color-bg-primary: #1c1a18;
      --color-bg-panel: #2e2a26;
      --color-border: #5a4d4c;
      --color-text-primary: #f0e6d2;
      --color-accent-red: #b8383b;
      --color-accent-blu: #3b5b92;
      --color-highlight: #d0843b;
      --font-display: 'Russo One', sans-serif;
      --font-body: 'Roboto Slab', serif;
    }

    body {
      margin: 0;
      font-family: var(--font-body);
      color: var(--color-text-primary);
      background: linear-gradient(135deg, var(--color-accent-red), var(--color-accent-blu)),
        url("https://wiki.teamfortress.com/w/images/9/97/Class_Selection_background.png") center/cover no-repeat;
      background-blend-mode: multiply;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* NAVBAR */
    header {
      background: var(--color-bg-panel);
      border-bottom: 4px solid var(--color-highlight);
      box-shadow: 0 4px 0 #000;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h2 {
      font-family: var(--font-display);
      font-size: 1.5rem;
      color: var(--color-highlight);
      text-transform: uppercase;
      letter-spacing: 2px;
      text-shadow: 2px 2px 0 #000;
      margin: 0;
    }

    nav a {
      margin-left: 1.5rem;
      text-decoration: none;
      color: var(--color-text-primary);
      font-weight: 700;
      text-transform: uppercase;
      transition: color 0.25s;
      font-size: 0.95rem;
      font-family: var(--font-display);
    }

    nav a:hover {
      color: var(--color-highlight);
    }

    /* MAIN */
    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .container {
      background: var(--color-bg-panel);
      border: 4px solid var(--color-border);
      border-radius: 12px;
      box-shadow: 10px 10px 0 #000;
      text-align: center;
      padding: 3rem 2rem;
      max-width: 640px;
      width: 95%;
      position: relative;
    }

    .container::before {
      content: "";
      position: absolute;
      top: -12px;
      left: -12px;
      right: -12px;
      bottom: -12px;
      border: 3px solid var(--color-accent-red);
      pointer-events: none;
    }

    h1 {
      font-family: var(--font-display);
      font-size: clamp(1.8rem, 5vw, 2.5rem);
      margin-bottom: 2.5rem;
      text-transform: uppercase;
      color: var(--color-highlight);
      letter-spacing: 2px;
      text-shadow: 3px 3px 0 #000;
    }

    /* Buttons */
    .btn-group {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      align-items: center;
    }

    .main-btn {
      display: block;
      width: 100%;
      max-width: 320px;
      padding: 1rem 0;
      background-color: var(--color-highlight);
      color: #111;
      text-decoration: none;
      border: 3px solid #000;
      border-radius: 6px;
      font-weight: 700;
      font-size: 1.2rem;
      font-family: var(--font-display);
      transition: all 0.25s ease;
      letter-spacing: 2px;
      text-transform: uppercase;
      box-shadow: 6px 6px 0 #000;
    }

    .main-btn:hover {
      background-color: #000;
      color: var(--color-highlight);
      box-shadow: 8px 8px 0 var(--color-highlight);
      transform: translateY(-3px);
    }

    /* FOOTER */
    footer {
      background: var(--color-bg-panel);
      border-top: 4px solid var(--color-highlight);
      text-align: center;
      padding: 1rem;
      font-size: 0.85rem;
      color: #ccc;
    }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <header>
    <h2>TF2 Console</h2>
    <nav>
      <a href="<?=site_url('users/show');?>">Roster</a>
      <a href="<?=site_url('users/create');?>">Recruit</a>
    </nav>
  </header>

  <!-- MAIN -->
  <main>
    <div class="container">
      <h1>// TF2 System Console</h1>
      <div class="btn-group">
        <a href="<?=site_url('users/show');?>" class="main-btn">> Deploy Roster</a>
        <a href="<?=site_url('users/create');?>" class="main-btn">> Enlist New Recruit</a>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    © 2025 TF2 Console. Inspired by Team Fortress 2.
  </footer>
</body>
</html>
