<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User | TF2 Console</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-bg-primary: #2b2b2b;
            --color-bg-secondary: #3a3a3a;
            --color-text-primary: #f0e6d2;
            --color-accent-red: #7d1a1a;
            --color-accent-blu: #1a3b7d;
            --color-highlight: #f2a900;
            --color-border: #4a4a4a;
            --color-input-bg: #222;
            --font-display: 'Russo One', sans-serif;
            --font-body: 'Roboto Slab', serif;
        }

        body {
            background: linear-gradient(135deg, var(--color-accent-red), var(--color-accent-blu));
            color: var(--color-text-primary);
            font-family: var(--font-body);
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
            max-width: 500px;
            background: var(--color-bg-secondary);
            border: 2px solid var(--color-highlight);
            padding: 2.5rem;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            animation: fadeSlideUp 1s ease forwards;
            box-shadow: 0 0 15px rgba(0,0,0,0.6);
        }

        h1 {
            font-family: var(--font-display);
            font-size: clamp(1.5rem, 5vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 2rem;
            color: var(--color-highlight);
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 2px 2px 0px #000;
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
            color: var(--color-highlight);
            margin-bottom: 0.4rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 0.8rem 1rem;
            background-color: var(--color-input-bg);
            border: 2px solid var(--color-border);
            border-radius: 6px;
            color: var(--color-text-primary);
            font-family: var(--font-body);
            font-size: 1rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: var(--color-highlight);
            box-shadow: 0 0 6px var(--color-highlight);
        }

        button[type="submit"] {
            width: 100%;
            padding: 1rem 0;
            background-color: var(--color-highlight);
            color: #000;
            border: 2px solid #000;
            border-radius: 8px;
            font-weight: 700;
            font-size: clamp(1rem, 3vw, 1.2rem);
            font-family: var(--font-display);
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 1rem;
            opacity: 0;
            animation: fadeSlideUp 0.8s ease forwards;
            animation-delay: 1s;
        }

        button[type="submit"]:hover {
            background-color: #000;
            color: var(--color-highlight);
            box-shadow: 0 0 12px var(--color-highlight);
        }

        .back-link {
            display: inline-block;
            margin-top: 2rem;
            text-decoration: none;
            color: var(--color-text-primary);
            font-size: 0.9rem;
            transition: all 0.2s ease;
            border: 1px solid var(--color-border);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            opacity: 0;
            animation: fadeSlideUp 0.8s ease forwards;
            animation-delay: 1.2s;
        }

        .back-link:hover {
            color: var(--color-highlight);
            border-color: var(--color-highlight);
            background-color: #000;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>// CREATE USER_TF2</h1>
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

            <button type="submit">Deploy Record</button>
        </form>
        <a href="<?= site_url('users/show'); ?>" class="back-link">// Back to Base</a>
    </div>
</body>
</html>
