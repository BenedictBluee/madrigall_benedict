<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User | System Console</title>
  
  <style>
    :root {
  --accent-blue: #007bff;
  --accent-blue-light: rgba(0, 123, 255, 0.6);
  --accent-blue-dark: #0056b3;
  --font-display: 'Oxanium', sans-serif;
  --font-mono: 'Share Tech Mono', monospace;
}

body {
  margin: 0;
  padding: 2rem 1rem;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  font-family: var(--font-mono);
  background: linear-gradient(135deg, #e0f0ff, #f5faff);
}

.form-container {
  width: 100%;
  max-width: 540px;
  background: rgba(255, 255, 255, 0.25);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 16px;
  padding: 2.5rem;
  box-shadow: 0 8px 20px rgba(0, 123, 255, 0.15);
  backdrop-filter: blur(12px);
  animation: fadeSlideUp 0.9s ease;
}

@keyframes fadeSlideUp {
  0% { opacity: 0; transform: translateY(25px); }
  100% { opacity: 1; transform: translateY(0); }
}

h1 {
  font-family: var(--font-display);
  font-size: clamp(1.6rem, 4vw, 2.4rem);
  color: var(--accent-blue-dark);
  margin-bottom: 2rem;
  text-align: center;
  letter-spacing: 2px;
  text-transform: uppercase;
}

form {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

label {
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--accent-blue-dark);
  margin-bottom: 0.4rem;
  text-transform: uppercase;
  letter-spacing: 1px;
}

input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 0.85rem 1rem;
  background: rgba(255, 255, 255, 0.6);
  border: 1px solid rgba(0, 123, 255, 0.3);
  border-radius: 12px;
  color: #1e293b;
  font-family: var(--font-mono);
  font-size: 1rem;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input:focus {
  outline: none;
  border-color: var(--accent-blue);
  box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
}

button[type="submit"] {
  padding: 1rem;
  border: none;
  background: rgba(0, 123, 255, 0.7);
  backdrop-filter: blur(6px);
  color: #fff;
  font-family: var(--font-display);
  font-weight: 700;
  text-transform: uppercase;
  border-radius: 12px;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
}

button[type="submit"]:hover {
  background: rgba(0, 123, 255, 0.9);
  transform: translateY(-2px) scale(1.03);
  box-shadow: 0 6px 18px rgba(0, 123, 255, 0.5);
}

.back-link {
  display: inline-block;
  margin-top: 1.5rem;
  text-decoration: none;
  color: var(--accent-blue-dark);
  font-family: var(--font-display);
  font-size: 0.9rem;
  border: 1px solid rgba(0, 123, 255, 0.4);
  padding: 0.5rem 1rem;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.back-link:hover {
  background: rgba(0, 123, 255, 0.15);
  color: var(--accent-blue);
  box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
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
