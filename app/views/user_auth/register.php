<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>// REGISTER | RED TEAM CONSOLE</title>

<!-- Fonts & Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<style>
  :root {
    --tf2-red: #b8383b;
    --tf2-orange: #d9a441;
    --tf2-brown: #3a2b24;
    --tf2-dark: #1a120f;
    --tf2-light: #f1e7d0;
    --tf2-border: #4e3b30;
    --tf2-shadow: rgba(0, 0, 0, 0.8);
  }

  * { box-sizing: border-box; }

  body {
    margin: 0;
    height: 100vh;
    background: radial-gradient(circle at top left, #4b2e25 0%, #1a120f 80%);
    font-family: "Montserrat", sans-serif;
    color: var(--tf2-light);
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
  }

  body::before {
    content: "";
    position: absolute;
    inset: 0;
    background: repeating-linear-gradient(
      45deg,
      rgba(255,255,255,0.03) 0 2px,
      rgba(0,0,0,0.1) 2px 4px
    );
    opacity: 0.4;
  }

  .form-container {
    position: relative;
    z-index: 2;
    background: linear-gradient(180deg, #3e2b21, #2b1f18);
    border: 6px solid var(--tf2-border);
    border-radius: 14px;
    box-shadow: 12px 12px 0 #000;
    padding: 2.5rem 3rem;
    width: 420px;
  }

  h1 {
    font-family: "Luckiest Guy", cursive;
    color: var(--tf2-orange);
    text-align: center;
    font-size: 2.2rem;
    letter-spacing: 2px;
    margin-bottom: 2rem;
    text-shadow: 3px 3px 0 #000;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 0.4rem;
    color: var(--tf2-orange);
    letter-spacing: 1px;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    width: 100%;
    padding: 0.8rem 2.8rem 0.8rem 0.9rem;
    border: 3px solid var(--tf2-border);
    border-radius: 6px;
    background: #261c17;
    color: var(--tf2-light);
    font-size: 1rem;
    font-family: "Montserrat", sans-serif;
    transition: all 0.15s ease-in-out;
  }

  input:focus,
  select:focus {
    outline: none;
    border-color: var(--tf2-orange);
    box-shadow: 0 0 8px rgba(217,164,65,0.4);
    transform: scale(1.01);
  }

  .input-wrapper {
    position: relative;
  }

  .toggle-password {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    color: var(--tf2-orange);
    font-size: 1rem;
    cursor: pointer;
    transition: transform 0.15s ease;
  }

  .toggle-password:hover {
    transform: translateY(-50%) scale(1.1);
  }

  button[type="submit"] {
    width: 100%;
    margin-top: 1rem;
    background: var(--tf2-red);
    color: var(--tf2-light);
    border: 4px solid #000;
    border-radius: 8px;
    padding: 0.9rem;
    font-family: "Luckiest Guy", cursive;
    font-size: 1.2rem;
    letter-spacing: 1px;
    box-shadow: 6px 6px 0 #000;
    cursor: pointer;
    transition: all 0.15s ease;
  }

  button[type="submit"]:hover {
    background: #d64b3f;
    transform: translateY(-3px);
    box-shadow: 9px 9px 0 #000;
  }

  .back-link {
    display: block;
    text-align: center;
    color: var(--tf2-light);
    margin-top: 1.5rem;
    text-decoration: none;
    font-weight: bold;
    letter-spacing: 1px;
    transition: color 0.2s ease;
  }

  .back-link:hover {
    color: var(--tf2-orange);
  }

  .error {
    background: rgba(184, 56, 59, 0.15);
    border: 2px solid var(--tf2-red);
    color: var(--tf2-orange);
    padding: 0.6rem;
    border-radius: 6px;
    text-align: center;
    font-weight: bold;
    text-shadow: 1px 1px 0 #000;
    margin-bottom: 1rem;
  }

  /* Decorative bolts */
  .bolt {
    width: 18px;
    height: 18px;
    background: radial-gradient(circle at 40% 40%, #888 0%, #444 80%);
    border-radius: 50%;
    position: absolute;
  }

  .bolt.tl { top: 10px; left: 10px; }
  .bolt.tr { top: 10px; right: 10px; }
  .bolt.bl { bottom: 10px; left: 10px; }
  .bolt.br { bottom: 10px; right: 10px; }

  @media (max-width: 480px) {
    .form-container {
      width: 90%;
      padding: 2rem;
    }
  }
</style>
</head>

<body>
  <div class="form-container">
    <div class="bolt tl"></div>
    <div class="bolt tr"></div>
    <div class="bolt bl"></div>
    <div class="bolt br"></div>

    <h1>// REGISTER</h1>

    <?php if(isset($error)): ?>
      <div class="error"><?=$error;?></div>
    <?php endif; ?>

    <form action="<?=site_url('register');?>" method="post" autocomplete="on">
      <label for="name">NAME</label>
      <div class="input-wrapper">
        <input type="text" id="name" name="name" required autocomplete="name">
      </div>

      <label for="email">EMAIL</label>
      <div class="input-wrapper">
        <input type="email" id="email" name="email" required autocomplete="email">
      </div>

      <label for="password">PASSWORD</label>
      <div class="input-wrapper">
        <input type="password" id="password" name="password" required autocomplete="new-password">
        <button type="button" id="togglePassword" class="toggle-password" aria-label="Show password" aria-pressed="false">
          <i class="fa-solid fa-eye-slash"></i>
        </button>
      </div>

      <label for="role">ROLE</label>
      <select id="role" name="role" required>
        <option value="user">User</option>
        <option value="admin">Admin</option>
      </select>

      <button type="submit">REGISTER</button>
    </form>

    <a href="<?=site_url('login');?>" class="back-link">// LOGIN</a>
  </div>

  <script>
    const toggleBtn = document.getElementById('togglePassword');
    const pwd = document.getElementById('password');
    const icon = toggleBtn.querySelector('i');

    toggleBtn.addEventListener('click', () => {
      const isHidden = pwd.type === 'password';
      pwd.type = isHidden ? 'text' : 'password';
      icon.classList.toggle('fa-eye');
      icon.classList.toggle('fa-eye-slash');
      toggleBtn.setAttribute('aria-pressed', String(isHidden));
      toggleBtn.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
    });
  </script>
</body>
</html>
