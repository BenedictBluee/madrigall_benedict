<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>// UPDATE USER | System Console</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Source+Code+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    :root {
      --color-bg: #000;
      --color-panel: #0d0d0d;
      --color-border: #00ff99;
      --color-text-primary: #fff;
      --color-accent-neon: #00ff99;
      --color-input-bg: #1a1a1a;
      --font-title: 'Orbitron', sans-serif;
      --font-mono: 'Source Code Pro', monospace;
    }

    body {
      background-color: var(--color-bg);
      background-image: radial-gradient(circle at center, #001a0a 0%, #000 80%);
      font-family: var(--font-mono);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      color: var(--color-text-primary);
      padding: 1rem;
    }

    .form-container {
      background-color: var(--color-panel);
      border: 1px solid var(--color-border);
      box-shadow: 0 0 25px var(--color-accent-neon);
      border-radius: 12px;
      padding: 2.5rem 3rem;
      width: 400px;
      text-align: center;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-family: var(--font-title);
      color: var(--color-accent-neon);
      font-size: 1.8rem;
      letter-spacing: 2px;
      margin-bottom: 2rem;
      text-shadow: 0 0 10px var(--color-accent-neon);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.3rem;
    }

    .form-group {
      text-align: left;
    }

    label {
      display: block;
      color: var(--color-accent-neon);
      font-size: 0.9rem;
      margin-bottom: 0.4rem;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 0.9rem 1rem;
      background-color: var(--color-input-bg);
      border: 1px solid var(--color-border);
      border-radius: 6px;
      color: var(--color-text-primary);
      font-family: var(--font-mono);
      font-size: 1rem;
      box-sizing: border-box;
      transition: 0.3s ease;
    }

    input:focus {
      outline: none;
      border-color: var(--color-accent-neon);
      box-shadow: 0 0 8px var(--color-accent-neon);
    }

    button[type="submit"] {
      width: 100%;
      padding: 0.9rem;
      font-family: var(--font-title);
      font-size: 1.1rem;
      color: var(--color-accent-neon);
      background-color: transparent;
      border: 2px solid var(--color-accent-neon);
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s ease;
      text-shadow: 0 0 10px var(--color-accent-neon);
      margin-top: 0.5rem;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    button[type="submit"]:hover {
      background-color: var(--color-accent-neon);
      color: #000;
      box-shadow: 0 0 18px var(--color-accent-neon);
    }

    .back-link {
      display: inline-block;
      margin-top: 1.8rem;
      color: var(--color-text-primary);
      text-decoration: none;
      font-size: 0.95rem;
      transition: color 0.3s ease, text-shadow 0.3s ease;
    }

    .back-link:hover {
      color: var(--color-accent-neon);
      text-shadow: 0 0 10px var(--color-accent-neon), 0 0 20px var(--color-accent-neon);
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 480px) {
      .form-container {
        width: 100%;
        padding: 1.8rem;
        box-shadow: 0 0 15px var(--color-accent-neon);
      }

      h1 {
        font-size: 1.4rem;
        letter-spacing: 1px;
      }

      button[type="submit"] {
        font-size: 1rem;
      }
    }

    @media (max-height: 600px) {
      body {
        align-items: flex-start;
        padding-top: 3rem;
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
  <div class="form-container">
    <h1>// UPDATE USER_REC</h1>

    <form action="<?=site_url('users/update/'.$user['id']);?>" method="post">
      <div class="form-group">
        <label for="last_name">LAST NAME</label>
        <input type="text" id="last_name" name="last_name" value="<?=html_escape($user['last_name']);?>" required>
      </div>

      <div class="form-group">
        <label for="first_name">FIRST NAME</label>
        <input type="text" id="first_name" name="first_name" value="<?=html_escape($user['first_name']);?>" required>
      </div>

      <div class="form-group">
        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" value="<?=html_escape($user['email']);?>" required>
      </div>

      <button type="submit">UPDATE RECORD</button>
    </form>

    <a href="<?=site_url('users/show');?>" class="back-link">// Back to Dashboard</a>
  </div>
</body>
</html>