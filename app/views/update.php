<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mercenary | TF2 Console</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --tf2-red: #b8383b;
            --tf2-blu: #4067b3;
            --tf2-dark: #1a1010;
            --tf2-gray: #3f3a36;
            --tf2-light: #f8f1e1;
            --tf2-orange: #d0843b;
        }

        body {
            background: radial-gradient(circle at top, #2b1a1b, #0d0a0a);
            color: var(--tf2-light);
            font-family: 'Roboto Slab', serif;
            margin: 0;
            padding: 2rem 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;

            background-image:
                repeating-linear-gradient(45deg, rgba(255,255,255,0.04) 0 2px, transparent 2px 40px);
        }

        @keyframes fadeSlideUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .form-container {
            width: 90%;
            max-width: 560px;
            background: var(--tf2-gray);
            border: 4px solid var(--tf2-orange);
            box-shadow: 8px 8px 0 rgba(0, 0, 0, 0.8);
            padding: 2.8rem 2.5rem;
            border-radius: 6px;
            text-align: center;
            animation: fadeSlideUp 0.8s ease forwards;
            position: relative;
        }

        h1 {
            font-size: clamp(1.8rem, 5vw, 2.6rem);
            font-family: 'Russo One', sans-serif;
            margin-bottom: 2rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: var(--tf2-orange);
            text-shadow: 2px 2px 0 #000;
            border-bottom: 4px solid var(--tf2-red);
            padding-bottom: 0.7rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            width: 100%;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        label {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--tf2-light);
            margin-bottom: 0.4rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 0.9rem 1rem;
            background-color: #241a1a;
            border: 2px solid #5a4d4c;
            border-radius: 4px;
            color: var(--tf2-light);
            font-size: 1rem;
            transition: border 0.2s ease, box-shadow 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: var(--tf2-orange);
            box-shadow: 0 0 6px var(--tf2-orange);
        }

        button[type="submit"] {
            width: 100%;
            padding: 1rem 0;
            background: linear-gradient(90deg, var(--tf2-red), #922d2e);
            color: #fff;
            border: none;
            border-radius: 4px;
            font-weight: 700;
            font-size: 1.2rem;
            cursor: pointer;
            letter-spacing: 2px;
            text-transform: uppercase;
            box-shadow: 4px 4px 0 #000;
            transition: all 0.3s ease;
            font-family: 'Russo One', sans-serif;
        }

        button[type="submit"]:hover {
            background: linear-gradient(90deg, #922d2e, #701e1f);
            transform: translateY(-2px);
            box-shadow: 6px 6px 0 #000;
        }

        .back-link {
            display: inline-block;
            margin-top: 2rem;
            text-decoration: none;
            color: var(--tf2-light);
            font-size: 0.9rem;
            padding: 0.6rem 1.2rem;
            border: 3px solid var(--tf2-red);
            border-radius: 4px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            background: #241a1a;
            box-shadow: 3px 3px 0 #000;
        }

        .back-link:hover {
            background-color: var(--tf2-red);
            color: #fff;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
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
