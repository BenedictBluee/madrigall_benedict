<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | TF2 Console</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-bg-primary: #2b2b2b;
            --color-bg-secondary: rgba(50, 50, 50, 0.9);
            --color-text-primary: #f0e6d2;
            --color-accent-red: #7d1a1a;
            --color-accent-blu: #1a3b7d;
            --color-highlight: #f2a900;
            --color-border: #4a4a4a;
            --font-display: 'Russo One', sans-serif;
            --font-body: 'Roboto Slab', serif;
        }

        body {
            background: linear-gradient(135deg, var(--color-accent-red), var(--color-accent-blu));
            color: var(--color-text-primary);
            font-family: var(--font-body);
            margin: 0;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        @keyframes fadeSlideUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .container {
            width: 90%;
            max-width: 600px;
            background: var(--color-bg-secondary);
            border: 2px solid var(--color-highlight);
            box-shadow: 0 0 18px rgba(0,0,0,0.6);
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
            color: var(--color-highlight);
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 2px 2px 0px #000;
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
            background-color: var(--color-highlight);
            color: #000;
            text-decoration: none;
            border: 2px solid #000;
            border-radius: 8px;
            font-weight: 700;
            font-size: clamp(1rem, 3vw, 1.2rem);
            font-family: var(--font-display);
            transition: all 0.3s ease;
            cursor: pointer;
            opacity: 0;
            animation: fadeSlideUp 0.8s ease forwards;
        }

        .main-btn:nth-child(1) { animation-delay: 0.4s; }
        .main-btn:nth-child(2) { animation-delay: 0.6s; }

        .main-btn:hover {
            background-color: #000;
            color: var(--color-highlight);
            box-shadow: 0 0 15px var(--color-highlight);
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
        <h1>// TF2 SYSTEM CONSOLE</h1>
        <div class="btn-group">
            <a href="<?=site_url('users/show');?>" class="main-btn">> DEPLOY ROSTER</a>
            <a href="<?=site_url('users/create');?>" class="main-btn">> ENLIST NEW RECRUIT</a>
        </div>
    </div>
</body>
</html>
