<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User | Valorant Console</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-bg-primary: #0f1923;
            --color-bg-secondary: #1c252f;
            --color-text-primary: #ece8e1;
            --color-accent: #ff4655;
            --color-border: #2a2e35;
            --color-input-bg: #101823;
            --font-display: 'Orbitron', sans-serif;
            --font-mono: 'Roboto Mono', monospace;
            --shadow-neon: 0 0 12px rgba(255, 70, 85, 0.5);
        }

        body {
            background-color: var(--color-bg-primary);
            color: var(--color-text-primary);
            font-family: var(--font-mono);
            margin: 0;
            padding: 2rem 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image:
                linear-gradient(to right, rgba(255, 70, 85, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 70, 85, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        @keyframes fadeSlideUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .form-container {
            width: 90%;
            max-width: 500px;
            background: var(--color-bg-secondary);
            border: 1px solid var(--color-border);
            box-shadow: var(--shadow-neon);
            padding: 2.5rem;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            animation: fadeSlideUp 1s ease forwards;
        }

        h1 {
            font-family: var(--font-display);
            font-size: clamp(1.5rem, 5vw, 2.2rem);
            font-weight: 700;
            margin-bottom: 2.5rem;
            color: var(--color-accent);
            text-shadow: var(--shadow-neon);
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: fadeSlideUp 1s ease forwards;
            animation-delay: 0.2s;
            opacity: 0;
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
            opacity: 0;
            animation: fadeSlideUp 0.8s ease forwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.4s; }
        .form-group:nth-child(2) { animation-delay: 0.6s; }
        .form-group:nth-child(3) { animation-delay: 0.8s; }

        label {
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--color-accent);
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 0.8rem 1rem;
            background-color: var(--color-input-bg);
            border: 1px solid var(--color-border);
            border-radius: 6px;
            color: var(--color-text-primary);
            font-family: var(--font-mono);
            font-size: 1rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: var(--color-accent);
            box-shadow: 0 0 6px var(--color-accent);
        }

        button[type="submit"] {
            width: 100%;
            padding: 1rem 0;
            background-color: transparent;
            color: var(--color-accent);
            border: 2px solid var(--color-accent);
            border-radius: 8px;
            font-weight: 700;
            font-size: clamp(1rem, 3vw, 1.2rem);
            font-family: var(--font-display);
            cursor: pointer;
            transition: all 0.3s ease;
            text-shadow: 0 0 5px var(--color-accent);
            box-shadow: 0 0 10px rgba(255, 70, 85, 0.4);
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 1rem;
            opacity: 0;
            animation: fadeSlideUp 0.8s ease forwards;
            animation-delay: 1s;
        }

        button[type="submit"]:hover {
            background-color: var(--color-accent);
            color: var(--color-bg-primary);
            box-shadow: 0 0 20px var(--color-accent);
        }

        .back-link {
            display: inline-block;
            margin-top: 2rem;
            text-decoration: none;
            color: var(--color-text-primary);
            font-size: 0.9rem;
            transition: color 0.2s ease;
            border: 1px solid transparent;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            opacity: 0;
            animation: fadeSlideUp 0.8s ease forwards;
            animation-delay: 1.2s;
        }

        .back-link:hover {
            color: var(--color-accent);
            border-color: var(--color-accent);
            box-shadow: 0 0 5px var(--color-accent);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>// CREATE USER_REC</h1>
        <form action="<?= site_url('users/store'); ?>" method="post">
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" required>
            </div>

            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <button type="submit">Submit Record</button>
        </form>
        <a href="<?= site_url('users/show'); ?>" class="back-link">// Back to Dashboard</a>
    </div>
</body>
</html>
