<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User | System Console</title>
  
  <style>
    :root {
      --bg-gradient: linear-gradient(135deg, #dbeafe 0%, #ffffff 100%);
      --glass-bg: rgba(255, 255, 255, 0.2);
      --text-main: #1e293b;
      --text-light: #64748b;
      --accent: #2563eb; /* modern blue */
      --accent-glow: rgba(37, 99, 235, 0.6);
      --shadow-glass: 0 8px 32px rgba(37, 99, 235, 0.15);
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
      padding: 2rem 1rem;
    }

    @keyframes fadeUp {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .form-container {
      width: 100%;
      max-width: 520px;
      background: var(--glass-bg);
      border-radius: var(--radius);
      padding: 2.5rem;
      backdrop-filter: blur(20px) saturate(180%);
      -webkit-backdrop-filter: blur(20px) saturate(180%);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: var(--shadow-glass);
      animation: fadeUp 0.9s ease forwards;
    }

    h1 {
      font-size: clamp(1.7rem, 5vw, 2.3rem);
      font-weight: 600;
      margin-bottom: 2rem;
      color: var(--accent);
      text-align: center;
      text-shadow: 0 0 10px var(--accent-glow);
      letter-spacing: 1px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    label {
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--accent);
      margin-bottom: 0.4rem;
      letter-spacing: 0.5px;
    }

    input[type="text"],
    input[type="email"] {
      padding: 0.9rem 1rem;
      background: rgba(255, 255, 255, 0.3);
      border: 1px solid rgba(37, 99, 235, 0.3);
      border-radius: 10px;
      font-size: 1rem;
      color: var(--text-main);
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      outline: none;
      border-color: var(--accent);
      box-shadow: 0 0 8px var(--accent-glow);
    }

    button[type="submit"] {
      margin-top: 0.5rem;
      padding: 1rem;
      background: var(--accent);
      color: #fff;
      border: none;
      border-radius: var(--radius);
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px var(--accent-glow);
    }

    button[type="submit"]:hover {
      background: #1d4ed8;
      box-shadow: 0 6px 20px var(--accent-glow);
      transform: translateY(-2px);
    }

    .back-link {
      display: inline-block;
      margin-top: 1.8rem;
      text-decoration: none;
      color: var(--text-light);
      font-size: 0.9rem;
      font-weight: 500;
      transition: all 0.3s ease;
      text-align: center;
    }

    .back-link:hover {
      color: var(--accent);
      text-shadow: 0 0 5px var(--accent-glow);
    }

    @media (max-width: 500px) {
      .form-container {
        padding: 2rem 1.5rem;
      }
      h1 {
        font-size: 1.6rem;
        margin-bottom: 1.5rem;
      }
    }
  </style>

<!-- TF2_SC_INJECT_START -->
<style>
:root{
  --tf2-red:#b8383b;
  --tf2-blu:#3b5b92;
  --tf2-orange:#c58b4b;
  --tf2-dark:#0f0d0c;
  --tf2-panel:#302925;
  --tf2-text:#f1e7d0;
  --tf2-border:#4e443f;
  --tf2-highlight:#d9a441;
}

/* Base */
html,body{height:100%;margin:0;padding:0;background:var(--tf2-dark);color:var(--tf2-text);font-family: Georgia, 'Times New Roman', serif;}
/* TF2-like textured background achieved with CSS gradients (self-contained) */
body{
  background-color:var(--tf2-dark);
  background-image:
    radial-gradient(circle at 10% 20%, rgba(255,255,255,0.02) 0 2px, transparent 2px 60px),
    radial-gradient(circle at 80% 80%, rgba(255,255,255,0.01) 0 1px, transparent 1px 120px),
    linear-gradient(180deg, rgba(0,0,0,0.15), rgba(0,0,0,0.35));
  background-blend-mode: overlay;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
}

/* Panel */
.tf2-panel, .container, .form-container, .card, .panel {
  background: linear-gradient(180deg, rgba(48,41,37,0.96), rgba(34,28,25,0.96));
  border:6px solid var(--tf2-border);
  border-radius:12px;
  box-shadow: 10px 10px 0 rgba(0,0,0,1);
  padding:1.5rem;
  color:var(--tf2-text);
}

/* Title */
h1,h2,h3{font-family: "Impact", "Arial Black", sans-serif;margin:0 0 .75rem 0;color:var(--tf2-highlight);text-shadow:3px 3px 0 #000;}
.tf2-title{ background: linear-gradient(90deg,var(--tf2-highlight), #e6b85d); -webkit-background-clip:text; -webkit-text-fill-color:transparent;}

/* Buttons */
.tf2-btn{ display:inline-block; font-weight:700; text-transform:uppercase; border:3px solid #000; padding:.6rem 1rem; border-radius:8px; box-shadow:6px 6px 0 #000; cursor:pointer; font-family:"Impact","Arial Black",sans-serif; }
.tf2-btn-yellow{ background:var(--tf2-highlight); color:#111; }
.tf2-btn-red{ background:var(--tf2-red); color:#fff; }
.tf2-btn-blue{ background:var(--tf2-blu); color:#fff; }
.tf2-btn:hover{ transform:translateY(-3px); filter:brightness(1.06); box-shadow:9px 9px 0 rgba(0,0,0,0.9); }

/* Inputs */
input[type="text"], input[type="email"], textarea, select {
  background:#241a18; color:var(--tf2-text); border:3px solid var(--tf2-border); padding:.85rem .9rem; border-radius:6px; font-size:1rem; width:100%;
}
input:focus, textarea:focus, select:focus{ outline:none; box-shadow:0 0 10px var(--tf2-orange); border-color:var(--tf2-orange); transform:scale(1.01); }

/* Table */
.tf2-table{ width:100%; border-collapse:collapse; margin-top:.5rem; }
.tf2-table thead th{ background:linear-gradient(90deg,#8b2d22,#3a3432); color:#fff; text-transform:uppercase; padding:.9rem; letter-spacing:1.2px; border-bottom:4px solid var(--tf2-highlight); }
.tf2-table tbody td{ padding:.8rem; border-bottom:1px solid rgba(255,255,255,0.04); color:var(--tf2-text); }

/* Pagination */
.pagination a{ display:inline-block; margin:.25rem; padding:.45rem .75rem; background:var(--tf2-highlight); color:#111; border:3px solid #000; border-radius:6px; box-shadow:4px 4px 0 #000; text-decoration:none; font-weight:700; }
.pagination strong{ background:var(--tf2-red); color:#fff; border:3px solid #000; padding:.45rem .75rem; box-shadow:4px 4px 0 #000; border-radius:6px; display:inline-block; }

/* Small devices */
@media (max-width:600px){
  .tf2-panel{ padding:1rem; border-width:4px; border-radius:8px; }
  h1{ font-size:1.6rem; }
  .tf2-btn{ padding:.5rem .75rem; }
}
</style>
<!-- TF2_SC_INJECT_END -->

</head>
<body>
  <div class="form-container">
    <h1>Create User</h1>
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
    <a href="<?=site_url('users/show');?>" class="back-link">← Back to Dashboard</a>
  </div>
</body>
</html>
