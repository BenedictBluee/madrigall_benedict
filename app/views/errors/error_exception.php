<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */
?>
<?php
while (ob_get_level() > 0) {
    ob_end_clean();
}
function get_code_excerpt($file, $errorLine, $padding = 5) {
    if (!is_readable($file)) return [[], 0];
    $lines = file($file);
    $start = max($errorLine - $padding - 1, 0);
    $end = min($errorLine + $padding - 1, count($lines) - 1);
    $excerpt = array_slice($lines, $start, $end - $start + 1, true);
    return [$excerpt, $start + 1];
}

list($codeExcerpt, $excerptStart) = get_code_excerpt($exception->getFile(), $exception->getLine());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Whoops! Something went wrong.</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 2rem;
            background-color: #f8fafc;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
            color: #1f2937;
        }

        .container {
            max-width: 960px;
            margin: auto;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
        }

        .title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #b91c1c;
            margin-bottom: 1.5rem;
        }

        .section {
            margin-bottom: 2rem;
        }

        .label {
            font-weight: bold;
            display: block;
            margin-bottom: 0.25rem;
        }

        .code, .env-section pre {
            background-color: #f3f4f6;
            padding: 0.75rem;
            border-radius: 4px;
            font-family: 'Fira Code', monospace;
            font-size: 0.95rem;
            white-space: pre-wrap;
            overflow-x: auto;
        }

        .trace-entry {
            margin-bottom: 1rem;
            padding-left: 1rem;
            border-left: 3px solid #d1d5db;
        }

        .trace-entry .file {
            font-weight: bold;
            cursor: pointer;
            color: #2563eb;
        }

        .trace-entry .trace-details {
            display: none;
            margin-top: 0.3rem;
        }

        .footer {
            font-size: 0.85rem;
            color: #9ca3af;
            margin-top: 3rem;
            border-top: 1px solid #e5e7eb;
            padding-top: 1rem;
            text-align: center;
        }

        .env-section {
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 6px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0.5rem;
        }

        table td {
            padding: 0.3rem 0.5rem;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: top;
            font-family: 'Fira Code', monospace;
            font-size: 0.9rem;
        }

        table td:first-child {
            font-weight: bold;
            width: 25%;
            color: #6b7280;
        }

        .code-preview {
            background-color: #1e1e1e;
            color: #dcdcdc;
            font-family: 'Fira Code', monospace;
            font-size: 14px;
            padding: 1rem;
            border-radius: 8px;
            overflow-x: auto;
            border: 1px solid #2e2e2e;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5);
            line-height: 1.6;
        }

        .code-preview .line {
            display: flex;
            padding: 0 0.25rem;
        }

        .code-preview .line-number {
            width: 3em;
            color: #6a9955;
            text-align: right;
            margin-right: 1rem;
            user-select: none;
            opacity: 0.6;
        }

        .code-preview .code-line {
            white-space: pre;
            flex: 1;
            word-break: break-word;
        }

        .code-preview .highlight {
            background-color: #263238;
            border-left: 4px solid #f92672;
            color: #ffffff;
            font-weight: bold;
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
    <div class="title">⚠️ Whoops! Something went wrong.</div>

    <div class="section">
        <span class="label">Exception</span>
        <div class="code"><?php echo get_class($exception); ?></div>
    </div>

    <div class="section">
        <span class="label">Message</span>
        <div class="code"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></div>
    </div>

    <div class="section">
        <span class="label">Location</span>
        <div class="code"><?php echo $exception->getFile(); ?> on line <?php echo $exception->getLine(); ?></div>
    </div>

    <?php if (!empty($codeExcerpt)): ?>
    <div class="section">
        <h3>Code Preview <small style="font-size:0.8em;color:#9ca3af;">(<?php echo $exception->getFile(); ?>:<?php echo $exception->getLine(); ?>)</small></h3>
        <div class="code-preview">
<?php foreach ($codeExcerpt as $lineNum => $codeLine): ?>
    <div class="line<?php echo (($lineNum + 1) === $exception->getLine()) ? ' highlight' : ''; ?>">
        <span class="line-number"><?php echo str_pad($lineNum + 1, 3, ' ', STR_PAD_LEFT); ?></span>
        <span class="code-line"><?php echo htmlspecialchars(rtrim($codeLine)); ?></span>
    </div>
<?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <div class="section">
        <h3>Stack Trace</h3>
        <?php foreach ($exception->getTrace() as $trace): ?>
            <?php if (isset($trace['file']) && strpos($trace['file'], realpath(SYSTEM_DIR)) !== 0): ?>
                <div class="trace-entry">
                    <div class="file">
                        <?php echo $trace['file']; ?>:<?php echo $trace['line']; ?>
                    </div>
                    <div class="trace-details">
                        <div>Function: 
                            <?php
                            echo (isset($trace['class']) ? $trace['class'] . $trace['type'] : '') . $trace['function'];
                            ?>()
                        </div>
                        <?php if (!empty($trace['args'])): ?>
                            <div>Args: <pre><?php print_r($trace['args']); ?></pre></div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="section">
        <h3>Request</h3>
        <div class="env-section">
            <table>
                <tr><td>Method</td><td><?php echo $_SERVER['REQUEST_METHOD']; ?></td></tr>
                <tr><td>URI</td><td><?php echo $_SERVER['REQUEST_URI']; ?></td></tr>
                <tr><td>Query String</td><td><?php echo $_SERVER['QUERY_STRING'] ?? 'N/A'; ?></td></tr>
            </table>
        </div>
    </div>

    <div class="section">
        <h3>Server Info</h3>
        <div class="env-section">
            <table>
                <tr><td>PHP Version</td><td><?php echo phpversion(); ?></td></tr>
                <tr><td>LavaLust Version</td><td><?php echo config_item('VERSION');?></td></tr>
                <tr><td>Server Software</td><td><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?></td></tr>
            </table>
        </div>
    </div>

    <div class="section">
        <h3>Environment</h3>
        <div class="env-section">
            <table>
                <tr><td>GET</td><td><pre><?php print_r($_GET); ?></pre></td></tr>
                <tr><td>POST</td><td><pre><?php print_r($_POST); ?></pre></td></tr>
                <tr><td>SESSION</td><td><pre><?php echo isset($_SESSION) ? print_r($_SESSION, true) : 'No session'; ?></pre></td></tr>
                <tr><td>COOKIE</td><td><pre><?php print_r($_COOKIE); ?></pre></td></tr>
            </table>
        </div>
    </div>

    <div class="section">
        <h3>Tips</h3>
        <div class="code">
            This error page is shown because debug mode is enabled.<br>
            In production, set <code>$config['ENVIRONMENT'] = 'production'</code> in your configuration to hide detailed error output.
        </div>
    </div>

    <div class="footer">
        LavaLust Framework – <?php echo date('Y'); ?> | PHP <?php echo phpversion(); ?>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.trace-entry .file').forEach(function (el) {
            el.addEventListener('click', function () {
                const details = this.nextElementSibling;
                if (details) {
                    details.style.display = details.style.display === 'none' ? 'block' : 'none';
                }
            });
        });
    });
</script>
</body>
</html>
