<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | System Console</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-gradient: linear-gradient(135deg, #dbeafe 0%, #ffffff 100%);
      --glass-bg: rgba(255, 255, 255, 0.15);
      --text-main: #1e293b;
      --text-light: #64748b;
      --accent: #2563eb; /* modern blue */
      --accent-glow: rgba(37, 99, 235, 0.6);
      --shadow-glass: 0 8px 32px rgba(37, 99, 235, 0.1);
      --radius: 18px;
    }

    body {
      margin: 0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      background: var(--bg-gradient);
      background-attachment: fixed;
      padding: 2rem;
    }

    @keyframes fadeUp {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .container {
      width: 100%;
      max-width: 520px;
      background: var(--glass-bg);
      border-radius: var(--radius);
      padding: 2.5rem;
      backdrop-filter: blur(20px) saturate(180%);
      -webkit-backdrop-filter: blur(20px) saturate(180%);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: var(--shadow-glass);
      text-align: center;
      animation: fadeUp 0.9s ease forwards;
    }

    h1 {
      font-size: clamp(1.8rem, 5vw, 2.4rem);
      font-weight: 600;
      margin-bottom: 2rem;
      color: var(--accent);
      text-shadow: 0 0 10px var(--accent-glow);
      letter-spacing: 1px;
      animation: fadeUp 1s ease forwards;
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
      max-width: 280px;
      padding: 0.9rem 1rem;
      border-radius: var(--radius);
      border: 2px solid var(--accent);
      background: rgba(255, 255, 255, 0.25);
      color: var(--accent);
      font-size: 1rem;
      font-weight: 600;
      text-decoration: none;
      text-align: center;
      transition: all 0.3s ease;
      box-shadow: 0 0 12px rgba(37, 99, 235, 0.25);
    }

    .main-btn:hover {
      background: var(--accent);
      color: #fff;
      box-shadow: 0 6px 20px var(--accent-glow);
      transform: translateY(-3px);
    }

    /* Add subtle floating animation for modern vibe */
    .container:hover {
      transform: translateY(-4px);
      transition: transform 0.3s ease;
    }

    @media (max-width: 500px) {
      .container {
        padding: 2rem 1.5rem;
      }
      h1 {
        font-size: 1.7rem;
        margin-bottom: 1.5rem;
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
  <div class="container">
    <h1>Student Management</h1>
    <div class="btn-group">
      <a href="<?=site_url('auth/login');?>" class="main-btn">Log In</a>
      <a href="<?=site_url('auth/register');?>" class="main-btn">Register</a>
    </div>
  </div>
</body>
</html>
