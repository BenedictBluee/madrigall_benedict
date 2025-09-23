<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Valorant Console</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-bg-primary: #0f1923;
            --color-bg-secondary: rgba(20, 28, 38, 0.85);
            --color-text-primary: #ece8e1;
            --color-accent: #ff4655;
            --color-border: #2a2e35;
            --font-display: 'Orbitron', sans-serif;
            --font-mono: 'Roboto Mono', monospace;
            --shadow-neon: 0 0 14px rgba(255, 70, 85, 0.6);
        }

        body {
            background-color: var(--color-bg-primary);
            color: var(--color-text-primary);
            font-family: var(--font-mono);
            margin: 0;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;

            background-image:
                linear-gradient(to right, rgba(255, 70, 85, 0.08) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 70, 85, 0.08) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        @keyframes fadeSlideUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .container {
            width: 90%;
            max-width: 600px;
            background: var(--color-bg-secondary);
            border: 1px solid var(--color-border);
            box-shadow: var(--shadow-neon);
            padding: 3rem 2rem;
            border-radius: 14px;
            text-align: center;
            animation: fadeSlideUp 1s ease forwards;
        }

        h1 {
            font-family: var(--font-display);
            font-size: clamp(1.5rem, 5vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 3rem;
            color: var(--color-accent);
            text-shadow: var(--shadow-neon);
            letter-spacing: 2px;
            text-transform: uppercase;
            opacity: 0;
            animation: fadeSlideUp 1s ease forwards;
            animation-delay: 0.2s;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            width: 100%;
            align-items: center;
        }

        .main-btn {
            display: block;
            width: 100%;
            max-width: 320px;
            padding: 1rem 0;
            background-color: transparent;
            color: var(--color-accent);
            text-decoration: none;
            border: 2px solid var(--color-accent);
            border-radius: 8px;
            font-weight: 700;
            font-size: clamp(1rem, 3vw, 1.2rem);
            font-family: var(--font-display);
            transition: all 0.3s ease;
            text-shadow: 0 0 6px var(--color-accent);
            box-shadow: 0 0 10px rgba(255, 70, 85, 0.4);
            cursor: pointer;
            opacity: 0;
            animation: fadeSlideUp 0.8s ease forwards;
        }

        .main-btn:nth-child(1) { animation-delay: 0.4s; }
        .main-btn:nth-child(2) { animation-delay: 0.6s; }

        .main-btn:hover {
            background-color: var(--color-accent);
            color: var(--color-bg-primary);
            box-shadow: 0 0 25px var(--color-accent);
        }

        @media (max-width: 480px) {
            body { padding: 1rem; }
            .container { padding: 2rem 1.5rem; }
            h1 { margin-bottom: 2rem; }
            .btn-group { gap: 1.2rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>// SYSTEM CONSOLE</h1>
        <div class="btn-group">
            <a href="<?=site_url('users/show');?>" class="main-btn">> VIEW STUDENTS</a>
            <a href="<?=site_url('users/create');?>" class="main-btn">> ADD STUDENT</a>
        </div>
    </div>
</body>
</html>
