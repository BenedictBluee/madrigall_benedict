<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | TF2 Console</title>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --tf2-red: #b8383b;
      --tf2-blu: #3b5b92;
      --tf2-panel: #2f2a26;
      --tf2-dark: #1c1a18;
      --tf2-light: #f0e6d2;
      --tf2-accent: #d0843b;
      --tf2-border: #5a4d4c;
      --font-display: 'Russo One', sans-serif;
      --font-body: 'Roboto Slab', serif;
    }

    body {
      margin: 0;
      font-family: var(--font-body);
      color: var(--tf2-light);
      background: url("https://steamcdn-a.akamaihd.net/apps/tf2/blog/images/class_repeat_bg.jpg") repeat center top;
      background-color: var(--tf2-dark);
      background-attachment: fixed;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* NAVBAR */
    header {
      background: var(--tf2-panel);
      border-bottom: 5px solid var(--tf2-accent);
      box-shadow: 0 6px 0 #000;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h2 {
      font-family: var(--font-display);
      font-size: 1.6rem;
      color: var(--tf2-accent);
      text-transform: uppercase;
      letter-spacing: 2px;
      text-shadow: 3px 3px 0 #000;
      margin: 0;
    }

    nav a {
      margin-left: 1.5rem;
      text-decoration: none;
      color: var(--tf2-light);
      font-weight: 700;
      text-transform: uppercase;
      font-size: 1rem;
      font-family: var(--font-display);
      transition: color 0.25s, transform 0.25s;
    }

    nav a:hover {
      color: var(--tf2-accent);
      transform: scale(1.1);
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
      background: var(--tf2-panel);
      border: 5px solid var(--tf2-border);
      border-radius: 12px;
      box-shadow: 12px 12px 0 #000;
      text-align: center;
      padding: 3.5rem 2.5rem;
      max-width: 700px;
      width: 95%;
      position: relative;
      overflow: hidden;
    }

    .container::before {
      content: "";
      position: absolute;
      top: -14px;
      left: -14px;
      right: -14px;
      bottom: -14px;
      border: 5px solid var(--tf2-red);
      pointer-events: none;
      filter: drop-shadow(0 0 8px rgba(184,56,59,0.7));
    }

    h1 {
      font-family: var(--font-display);
      font-size: clamp(2.2rem, 5vw, 3rem);
      margin-bottom: 2.8rem;
      text-transform: uppercase;
      color: var(--tf2-accent);
      letter-spacing: 3px;
      text-shadow: 4px 4px 0 #000;
    }

    /* Buttons */
    .btn-group {
      display: flex;
      flex-direction: column;
      gap: 1.8rem;
      align-items: center;
    }

    .main-btn {
      display: block;
      width: 100%;
      max-width: 340px;
      padding: 1.2rem 0;
      background: linear-gradient(180deg, var(--tf2-accent), #9c612d);
      color: #111;
      text-decoration: none;
      border: 3px solid #000;
      border-radius: 6px;
      font-weight: 700;
      font-size: 1.3rem;
      font-family: var(--font-display);
      transition: all 0.25s ease;
      letter-spacing: 2px;
      text-transform: uppercase;
      box-shadow: 8px 8px 0 #000;
      position: relative;
    }

    .main-btn::before {
      content: "▶";
      position: absolute;
      left: 1rem;
      font-size: 1.2rem;
      color: #000;
    }

    .main-btn:hover {
      background: #000;
      color: var(--tf2-accent);
      box-shadow: 10px 10px 0 var(--tf2-accent);
      transform: translateY(-4px) scale(1.03);
    }

    /* FOOTER */
    footer {
      background: var(--tf2-panel);
      border-top: 5px solid var(--tf2-accent);
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      color: #bbb;
      font-family: var(--font-display);
      letter-spacing: 1px;
      text-transform: uppercase;
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
      <h1>Welcome to the Fortress</h1>
      <div class="btn-group">
        <a href="<?=site_url('users/show');?>" class="main-btn">Deploy Roster</a>
        <a href="<?=site_url('users/create');?>" class="main-btn">Enlist New Recruit</a>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    © 2025 TF2 Console | Inspired by Team Fortress 2
  </footer>
</body>
</html>
