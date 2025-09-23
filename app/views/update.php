<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Agent | Valorant Console</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --valorant-red: #ff4655;
            --valorant-dark: #0f1923;
            --valorant-gray: #1c252e;
            --valorant-light: #ece8e1;
            --valorant-blue: #0f8cff;
        }

        body {
            background: linear-gradient(135deg, var(--valorant-dark), #000);
            color: var(--valorant-light);
            font-family: 'Orbitron', sans-serif;
            margin: 0;
            padding: 2rem 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        @keyframes fadeSlideUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .form-container {
            width: 90%;
            max-width: 520px;
            background: var(--valorant-gray);
            border: 2px solid var(--valorant-red);
            box-shadow: 0 0 15px rgba(255, 70, 85, 0.6);
            padding: 2.5rem;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            animation: fadeSlideUp 0.8s ease forwards;
        }

        h1 {
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 2rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: var(--valorant-red);
            text-shadow: 0 0 12px rgba(255, 70, 85, 0.8);
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
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--valorant-light);
            margin-bottom: 0.4rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 0.9rem 1rem;
            background-color: #0d141b;
            border: 2px solid #2c3947;
            border-radius: 8px;
            color: var(--valorant-light);
            font-size: 1rem;
            transition: border 0.2s ease, box-shadow 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: var(--valorant-red);
            box-shadow: 0 0 6px var(--valorant-red);
        }

        button[type="submit"] {
            width: 100%;
            padding: 1rem 0;
            background-color: var(--valorant-red);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            letter-spacing: 2px;
            text-transform: uppercase;
            box-shadow: 0 0 12px rgba(255, 70, 85, 0.7);
            transition: all 0.3s ease;
            margin-top: 0.5rem;
        }

        button[type="submit"]:hover {
            background-color: #ff2e45;
            box-shadow: 0 0 20px rgba(255, 70, 85, 1);
            transform: scale(1.03);
        }

        .back-link {
            display: inline-block;
            margin-top: 2rem;
            text-decoration: none;
            color: var(--valorant-light);
            font-size: 0.95rem;
            border: 2px solid transparent;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .back-link:hover {
            border-color: var(--valorant-red);
            color: var(--valorant-red);
            box-shadow: 0 0 6px var(--valorant-red);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Update Agent</h1>
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

            <button type="submit">Update Agent</button>
        </form>
        <a href="<?= site_url('users/show'); ?>" class="back-link">⟵ Back to Roster</a>
    </div>
</body>
</html>
