<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to LavaLust</title>
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
            background: #f8fafc;
            color: #334155;
        }

        .container {
            max-width: 960px;
            margin: 3rem auto;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            overflow: hidden;
            padding: 0 1rem;
        }

        .header {
            background: #3B82F6; /* lighter blue */
            color: #ffffff;
            padding: 2rem 1rem;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .main {
            padding: 2rem 0.5rem;
        }
        /* Responsive styles */
        @media (max-width: 600px) {
            .container {
                margin: 1rem auto;
                padding: 0 0.2rem;
            }
            .header {
                padding: 1.2rem 0.5rem;
            }
            .header h1 {
                font-size: 1.5rem;
            }
            .main {
                padding: 1rem 0.2rem;
            }
            h2 {
                font-size: 1.1rem;
                margin-top: 1.2rem;
            }
            .grid {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }
            .card {
                padding: 0.7rem;
                font-size: 0.97rem;
            }
            pre, code {
                font-size: 0.85rem;
                padding: 0.5rem;
            }
            .footer {
                font-size: 0.8rem;
                padding: 0.5rem;
            }
        }

        h2 {
            color: #1e40af;
            margin-top: 2rem;
        }

        p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        code, pre {
            display: block;
            background: #f1f5f9;
            padding: 1rem;
            border-left: 4px solid #3b82f6;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: #1e293b;
            overflow-x: auto;
        }

        ul {
            padding-left: 1.5rem;
            margin-bottom: 1rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        a {
            color: #2563eb;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            font-size: 0.9rem;
            text-align: center;
            padding: 1rem;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
        }

        .card {
            background: #f8fafc;
            padding: 1rem;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
        }

        .card h3 {
            margin-top: 0;
            color: #0f172a;
        }
    </style>

<!-- TF2_DESIGN_INJECT_START -->
<link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
<style>
:root{
  --tf2-red:#b8383b;
  --tf2-blu:#3b5b92;
  --tf2-accent:#d0843b;
  --tf2-dark:#0d0a0a;
  --tf2-panel:#2f2a26;
  --tf2-text:#f0e6d2;
  --tf2-highlight:#c58b4b;
  --tf2-border:#5a4d4c;
  --tf2-font-display:'Russo One', sans-serif;
  --tf2-font-body:'Roboto Slab', serif;
}
/* Strong global reset for a consistent TF2 look */
html,body{height:100%;margin:0;padding:0;background:var(--tf2-dark) !important;font-family:var(--tf2-font-body) !important;color:var(--tf2-text) !important}
body{background-image:url('https://steamcdn-a.akamaihd.net/apps/tf2/blog/images/class_repeat_bg.jpg');background-repeat:repeat;background-position:center top;background-attachment:fixed;background-color:var(--tf2-dark);}

/* TF2 panel wrapper override to ensure consistent containers */
.tf2-panel, .container, .form-container, .card { background: rgba(15,13,12,0.85) !important; border: 6px solid var(--tf2-border) !important; border-radius:12px !important; box-shadow: 10px 10px 0 #000 !important; padding:1.5rem !important; }

/* Headings */
h1,h2,h3{font-family:var(--tf2-font-display) !important; font-weight:700 !important; color:var(--tf2-highlight) !important; text-shadow:3px 3px 0 #000 !important; letter-spacing:2px !important;}

/* Bold title gradient */
.tf2-title{ background: linear-gradient(90deg, #d7b46c, #e7a643, #f2c76b); -webkit-background-clip:text; -webkit-text-fill-color:transparent; display:inline-block;}

/* Buttons */
.tf2-btn{ display:inline-block; font-family:var(--tf2-font-display) !important; text-transform:uppercase !important; border:3px solid #000 !important; padding:.8rem 1.2rem !important; border-radius:8px !important; box-shadow:6px 6px 0 #000 !important; cursor:pointer !important; transition:transform .15s ease, box-shadow .15s ease !important; }
.tf2-btn-yellow{ background:var(--tf2-highlight) !important; color:#111 !important; }
.tf2-btn-red{ background:var(--tf2-red) !important; color:#fff !important; }
.tf2-btn-blue{ background:var(--tf2-blu) !important; color:#fff !important; }
.tf2-btn:hover{ transform:translateY(-3px) !important; filter:brightness(1.06) !important; box-shadow:9px 9px 0 var(--tf2-highlight) !important; }

/* Table styles */
table{ width:100% !important; border-collapse:collapse !important; }
.tf2-table thead th{ background:linear-gradient(90deg,#8b2d22,#444,#1d3f91) !important; color:#fff !important; padding:.9rem !important; text-transform:uppercase !important; letter-spacing:1.5px !important; border-bottom:4px solid var(--tf2-highlight) !important; }
.tf2-table tbody td{ padding:.8rem !important; border-bottom:1px solid rgba(255,255,255,0.04) !important; color:var(--tf2-text) !important; }

/* Forms */
input[type="text"], input[type="email"], textarea, select { background:#241a1a !important; color:var(--tf2-text) !important; border:3px solid var(--tf2-border) !important; padding:.85rem .9rem !important; border-radius:6px !important; font-size:1rem !important; }
input:focus, textarea:focus, select:focus{ outline:none !important; box-shadow:0 0 10px var(--tf2-accent) !important; border-color:var(--tf2-accent) !important; transform:scale(1.01) !important; }

/* Utility */
.text-orange { color:#d8903a !important; }
.center { text-align:center !important; }
.header-strip{ background:linear-gradient(90deg,var(--tf2-red),var(--tf2-accent)) !important; color:#fff !important; padding:.9rem 1rem !important; font-family:var(--tf2-font-display) !important; text-transform:uppercase !important; letter-spacing:2px !important; box-shadow:0 4px 0 #000 !important; }
/* make pagination links use the button styles when they are anchors/spans */
.pagination a, .pagination span, .pagination strong { display:inline-block !important; margin:.25rem !important; }
.pagination a { padding:.5rem .7rem !important; border-radius:6px !important; background:var(--tf2-highlight) !important; color:#111 !important; border:3px solid #000 !important; box-shadow:6px 6px 0 #000 !important; text-transform:uppercase !important; font-family:var(--tf2-font-display) !important; }
.pagination strong { background:var(--tf2-red) !important; color:#fff !important; }

/* Responsive tweaks */
@media (max-width:600px){
  .tf2-panel, .container, .form-container { padding:1rem !important; }
  h1 { font-size:1.6rem !important; }
  .tf2-title { font-size:1.6rem !important; }
}
</style>
<!-- TF2_DESIGN_INJECT_END -->

</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔥 LavaLust Framework</h1>
            <p>Lightweight • Fast • MVC for PHP Developers</p>
        </div>

        <div class="main">
            <h2>What is LavaLust?</h2>
            <p><strong>LavaLust</strong> is a lightweight PHP framework that follows the MVC (Model–View–Controller) pattern. It's designed for developers who want a structured yet minimalistic PHP development experience.</p>

            <h2>🚀 Key Features</h2>
            <div class="grid">
                <div class="card">
                    <h3>🧠 MVC Architecture</h3>
                    <p>Clear separation of concerns with Models, Views, and Controllers.</p>
                </div>
                <div class="card">
                    <h3>⚙️ Built-in Routing</h3>
                    <p>Clean and flexible routing system similar to Laravel or CodeIgniter.</p>
                </div>
                <div class="card">
                    <h3>📦 Libraries & Helpers</h3>
                    <p>Includes utilities for sessions, forms, database, validation, and more.</p>
                </div>
                <div class="card">
                    <h3>📁 Organized Structure</h3>
                    <p>Modular folder structure for scalable app development.</p>
                </div>
                <div class="card">
                    <h3>🔗 REST API Support</h3>
                    <p>Build RESTful APIs easily using built-in tools and conventions.</p>
                </div>
                <div class="card">
                    <h3>📘 ORM-like Models</h3>
                    <p>Use LavaLust's model layer for structured database operations with ease.</p>
                </div>
            </div>

            <h2>📂 Project Structure</h2>
            <pre><code>
/app
  /config
  /controllers
  /helpers
  /language
  /libraries
  /models
  /views
/console
/public
/runtime
/scheme
            </code></pre>

            <h2>🧪 Quick Example</h2>
                <p>Route in <code>app/config/routes.php</code></p>
<pre><code>
$router->get('/', 'Welcome::index');
</code></pre>
            <p>Controller method in <code>app/controllers/Welcome.php</code>:</p>
            <pre><code>
class Welcome extends Controller {
    public function index() {
        $this->call->view('welcome_page');
    }
}
            </code></pre>

            <p>View file at: <code>app/Views/welcome_page.php</code></p>

            <h2>📚 Learn More</h2>
            <ul>
                <li><a href="https://github.com/ronmarasigan/LavaLust">GitHub Repository</a></li>
                <li><a href="https://lavalust.netlify.app/">Official Documentation</a></li>
            </ul>
        </div>

        <div class="footer">
            Page rendered in <strong><?php echo lava_instance()->performance->elapsed_time('lavalust'); ?></strong> seconds.
            Memory usage: <?php echo lava_instance()->performance->memory_usage(); ?>.
            <?php if(config_item('ENVIRONMENT') === 'development'): ?>
                <br>LavaLust Version <strong><?php echo config_item('VERSION'); ?></strong>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
