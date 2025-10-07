<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>404 | Not Found</title>
  <style>
	:root {
	  --bg: #f6f8fb;
	  --card: #ffffff;
	  --text: #0f172a;
	  --muted: #475569;
	  --primary: #4f46e5;
	  --border: #e5e7eb;
	  --shadow: 0 10px 25px rgba(2, 6, 23, .06);
	}
	* { box-sizing: border-box; }
	html, body { height: 100%; margin: 0; }
	body {
	  font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Apple Color Emoji", "Segoe UI Emoji";
	  background: var(--bg);
	  color: var(--text);
	  display: grid;
	  place-items: center;
	  padding: 2rem;
	}
	.card {
	  width: 100%;
	  max-width: 720px;
	  background: var(--card);
	  border: 1px solid var(--border);
	  border-radius: 1.25rem;
	  box-shadow: var(--shadow);
	  padding: 2rem;
	}
	.code {
	  display: inline-flex;
	  align-items: center;
	  gap: .75rem;
	  font-weight: 700;
	  letter-spacing: .08em;
	  color: var(--primary);
	  background: rgba(79,70,229,.08);
	  border: 1px solid rgba(79,70,229,.15);
	  border-radius: 999px;
	  padding: .4rem .9rem;
	  margin-bottom: 1rem;
	  font-size: .85rem;
	  text-transform: uppercase;
	}
	h1 {
	  margin: 0 0 .4rem 0;
	  font-size: clamp(1.6rem, 2.4vw + 1rem, 2.4rem);
	  line-height: 1.2;
	}
	p {
	  margin: 0;
	  color: var(--muted);
	  font-size: 1.05rem;
	}
	.actions {
	  margin-top: 1.5rem;
	  display: flex;
	  gap: .75rem;
	  flex-wrap: wrap;
	}
	.btn {
	  display: inline-flex;
	  align-items: center;
	  gap: .5rem;
	  padding: .75rem 1rem;
	  border-radius: .8rem;
	  border: 1px solid var(--border);
	  background: #fff;
	  color: var(--text);
	  text-decoration: none;
	  font-weight: 600;
	  cursor: pointer;
	  transition: background .2s ease, border-color .2s ease;
	}
	.btn:hover {
	  background: #f3f4f6;
	}
	.btn.primary {
	  background: var(--primary);
	  color: white;
	  border-color: transparent;
	  box-shadow: 0 8px 18px rgba(79,70,229,.25);
	}
	.btn.primary:hover {
	  background: #4338ca;
	}
	.hint {
	  margin-top: 1.25rem;
	  font-size: .9rem;
	  color: var(--muted);
	  border-top: 1px dashed var(--border);
	  padding-top: 1rem;
	  display: flex;
	  gap: .5rem;
	  flex-wrap: wrap;
	}
	.kbd {
	  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", monospace;
	  background: rgba(148,163,184,.15);
	  border: 1px solid rgba(148,163,184,.35);
	  border-bottom-width: 2px;
	  border-radius: .5rem;
	  padding: .2rem .45rem;
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
  <main class="card" role="main" aria-labelledby="title">
	<div class="code" aria-hidden="true">404 • Not Found</div>
	<h1 id="title"><?= html_escape($heading) ?></h1>
	<p><?= html_escape($message) ?></p>
	<div class="actions">
		<a class="btn primary" href="/">Go Home</a>
	  	<a class="btn" href="javascript:history.back()">Go Back</a>
	</div>
	<div class="hint">
		<span>Tip:</span>
		<span>Check the URL, or press <span class="kbd">Ctrl</span> + <span class="kbd">L</span> to retype it.</span>
	</div>
  </main>
</body>
</html>
