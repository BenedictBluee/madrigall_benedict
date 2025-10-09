<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>// HOME | System Console</title>

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

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      background: var(--tf2-dark);
      color: var(--tf2-text);
      font-family: Georgia, 'Times New Roman', serif;
      display: flex;
      align-items: center;
      justify-content: center;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    body {
      background-image:
        radial-gradient(circle at 10% 20%, rgba(255,255,255,0.02) 0 2px, transparent 2px 60px),
        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.01) 0 1px, transparent 1px 120px),
        linear-gradient(180deg, rgba(0,0,0,0.15), rgba(0,0,0,0.35));
      background-blend-mode: overlay;
      padding: 1rem;
    }

    .container {
      background: linear-gradient(180deg, rgba(48,41,37,0.96), rgba(34,28,25,0.96));
      border: 6px solid var(--tf2-border);
      border-radius: 12px;
      box-shadow: 10px 10px 0 rgba(0,0,0,1);
      text-align: center;
      padding: 2.5rem;
      width: 420px;
      max-width: 95%;
      animation: fadeUp 0.6s ease-out;
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-family: "Impact", "Arial Black", sans-serif;
      color: var(--tf2-highlight);
      text-shadow: 3px 3px 0 #000;
      text-transform: uppercase;
      font-size: 1.9rem;
      letter-spacing: 1px;
      margin-bottom: 2rem;
    }

    .btn-group {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
      align-items: center;
    }

    .main-btn {
      display: inline-block;
      width: 100%;
      max-width: 260px;
      padding: 0.9rem 1rem;
      border-radius: 8px;
      border: 3px solid #000;
      background: var(--tf2-red);
      color: #fff;
      font-family: "Impact", "Arial Black", sans-serif;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 1rem;
      text-decoration: none;
      text-align: center;
      box-shadow: 6px 6px 0 #000;
      transition: 0.2s ease;
      cursor: pointer;
    }

    .main-btn:hover {
      transform: translateY(-3px);
      filter: brightness(1.1);
      box-shadow: 9px 9px 0 rgba(0,0,0,0.9);
    }

    .main-btn:last-child {
      background: var(--tf2-highlight);
      color: #111;
    }

    @media (max-width: 480px) {
      .container {
        padding: 2rem 1.5rem;
        border-width: 4px;
      }
      h1 {
        font-size: 1.5rem;
      }
      .main-btn {
        max-width: 220px;
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>// STUDENT MANAGEMENT</h1>
    <div class="btn-group">
      <a href="<?=site_url('auth/login');?>" class="main-btn">Log In</a>
      <a href="<?=site_url('auth/register');?>" class="main-btn">Register</a>
    </div>
  </div>
</body>
</html>
