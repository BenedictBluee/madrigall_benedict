<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Mercenary | TF2 Roster</title>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --tf2-red: #a72c25;
      --tf2-blu: #1d3f91;
      --tf2-orange: #c58b4b;
      --tf2-dark: #0d0a0a;
      --tf2-gray: #2a2420;
      --tf2-light: #f3e8d1;
    }

    body {
      margin: 0;
      font-family: 'Roboto Slab', serif;
      color: var(--tf2-light);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 3rem 1rem;
      background: url('https://steamcdn-a.akamaihd.net/apps/tf2/blog/images/bg_repeat.jpg') repeat center center,
                  var(--tf2-dark);
      background-blend-mode: multiply;
    }

    /* Header Bar */
    .tf2-header {
      position: fixed;
      top: 0; left: 0; right: 0;
      background: linear-gradient(90deg, var(--tf2-red), var(--tf2-orange));
      color: #fff;
      font-family: 'Russo One', sans-serif;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size: 1.2rem;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 4px 0 #000;
      z-index: 20;
    }

    /* Form Container */
    .form-container {
      width: 100%;
      max-width: 600px;
      margin-top: 7rem;
      background: var(--tf2-gray);
      border: 6px solid var(--tf2-orange);
      border-radius: 8px;
      padding: 2.5rem 2rem;
      text-align: center;
      box-shadow: 10px 10px 0 #000;
      animation: fadeSlideUp 0.8s ease forwards;
    }

    @keyframes fadeSlideUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-size: clamp(1.8rem, 5vw, 2.5rem);
      font-family: 'Russo One', sans-serif;
      margin-bottom: 2rem;
      text-transform: uppercase;
      letter-spacing: 3px;
      color: var(--tf2-orange);
      text-shadow: 3px 3px 0 #000;
      border-bottom: 4px solid var(--tf2-red);
      padding-bottom: 0.6rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      text-align: left;
    }

    label {
      font-size: 0.9rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      text-transform: uppercase;
      font-family: 'Russo One', sans-serif;
      letter-spacing: 1px;
      color: var(--tf2-light);
    }

    input[type="text"],
    input[type="email"] {
      padding: 0.9rem;
      border: 3px solid #5a4d4c;
      border-radius: 4px;
      background: #1b1414;
      color: var(--tf2-light);
      font-size: 1rem;
      transition: 0.2s ease;
    }

    input:focus {
      outline: none;
      border-color: var(--tf2-orange);
      box-shadow: 0 0 8px var(--tf2-orange);
    }

    /* Button */
    button[type="submit"] {
      padding: 1rem;
      font-size: 1.2rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      border: 4px solid #000;
      border-radius: 6px;
      font-family: 'Russo One', sans-serif;
      background: linear-gradient(90deg, var(--tf2-red), #6d1c18);
      color: #fff;
      cursor: pointer;
      box-shadow: 6px 6px 0 #000;
      transition: 0.25s ease;
    }

    button[type="submit"]:hover {
      background: linear-gradient(90deg, #922d2e, #701e1f);
      transform: translateY(-2px);
    }

    /* Back Link */
    .back-link {
      display: inline-block;
      margin-top: 2rem;
      font-size: 0.9rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      text-decoration: none;
      border: 3px solid var(--tf2-blu);
      border-radius: 4px;
      padding: 0.7rem 1.4rem;
      background: #1b1414;
      color: var(--tf2-light);
      font-family: 'Russo One', sans-serif;
      box-shadow: 4px 4px 0 #000;
      transition: 0.25s ease;
    }

    .back-link:hover {
      background: var(--tf2-blu);
      color: #fff;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="tf2-header">TF2 Console - Update Mercenary</div>

  <div class="form-container">
    <h1>Update Mercenary</h1>
    <form action="<?= site_url('users/update/'.$user['id']); ?>" method="post">
      <div class="form-group">
        <label for="lname">Codename</label>
        <input type="text" id="lname" name="lname" value="<?= html_escape($user['lname']); ?>" required>
      </div>

      <div class="form-group">
        <label for="fname">Real Name</label>
        <input type="text" id="fname" name="fname" value="<?= html_escape($user['fname']); ?>" required>
      </div>

      <div class="form-group">
        <label for="email">Comms Link</label>
        <input type="email" id="email" name="email" value="<?= html_escape($user['email']); ?>" required>
      </div>

      <button type="submit">Deploy Update</button>
    </form>

    <a href="<?= site_url('users/show'); ?>" class="back-link">⟵ Back to Roster</a>
  </div>
</body>
</html>
