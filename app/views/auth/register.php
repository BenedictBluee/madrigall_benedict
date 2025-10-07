<!DOCTYPE html>
<html lang="en" class="h-full bg-[#212631] text-[#ebebeb]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body {
            font-family: 'JetBrains Mono', monospace;
        }
    </style>

<!-- TF2_SC_INJECT_START -->
<style>
:root{
  --tf2-red:#b8383b;
  --tf2-blu:#3b5b92;
  --tf2-orange:#c58b4b;
  --tf2-dark:#0f0d0c;
  --tf2-panel:#302925;
  --tf2-text:#f1e7d0;
  --tf2-border:#4e443f;
  --tf2-highlight:#d9a441;
}

/* Base */
html,body{height:100%;margin:0;padding:0;background:var(--tf2-dark);color:var(--tf2-text);font-family: Georgia, 'Times New Roman', serif;}
/* TF2-like textured background achieved with CSS gradients (self-contained) */
body{
  background-color:var(--tf2-dark);
  background-image:
    radial-gradient(circle at 10% 20%, rgba(255,255,255,0.02) 0 2px, transparent 2px 60px),
    radial-gradient(circle at 80% 80%, rgba(255,255,255,0.01) 0 1px, transparent 1px 120px),
    linear-gradient(180deg, rgba(0,0,0,0.15), rgba(0,0,0,0.35));
  background-blend-mode: overlay;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
}

/* Panel */
.tf2-panel, .container, .form-container, .card, .panel {
  background: linear-gradient(180deg, rgba(48,41,37,0.96), rgba(34,28,25,0.96));
  border:6px solid var(--tf2-border);
  border-radius:12px;
  box-shadow: 10px 10px 0 rgba(0,0,0,1);
  padding:1.5rem;
  color:var(--tf2-text);
}

/* Title */
h1,h2,h3{font-family: "Impact", "Arial Black", sans-serif;margin:0 0 .75rem 0;color:var(--tf2-highlight);text-shadow:3px 3px 0 #000;}
.tf2-title{ background: linear-gradient(90deg,var(--tf2-highlight), #e6b85d); -webkit-background-clip:text; -webkit-text-fill-color:transparent;}

/* Buttons */
.tf2-btn{ display:inline-block; font-weight:700; text-transform:uppercase; border:3px solid #000; padding:.6rem 1rem; border-radius:8px; box-shadow:6px 6px 0 #000; cursor:pointer; font-family:"Impact","Arial Black",sans-serif; }
.tf2-btn-yellow{ background:var(--tf2-highlight); color:#111; }
.tf2-btn-red{ background:var(--tf2-red); color:#fff; }
.tf2-btn-blue{ background:var(--tf2-blu); color:#fff; }
.tf2-btn:hover{ transform:translateY(-3px); filter:brightness(1.06); box-shadow:9px 9px 0 rgba(0,0,0,0.9); }

/* Inputs */
input[type="text"], input[type="email"], textarea, select {
  background:#241a18; color:var(--tf2-text); border:3px solid var(--tf2-border); padding:.85rem .9rem; border-radius:6px; font-size:1rem; width:100%;
}
input:focus, textarea:focus, select:focus{ outline:none; box-shadow:0 0 10px var(--tf2-orange); border-color:var(--tf2-orange); transform:scale(1.01); }

/* Table */
.tf2-table{ width:100%; border-collapse:collapse; margin-top:.5rem; }
.tf2-table thead th{ background:linear-gradient(90deg,#8b2d22,#3a3432); color:#fff; text-transform:uppercase; padding:.9rem; letter-spacing:1.2px; border-bottom:4px solid var(--tf2-highlight); }
.tf2-table tbody td{ padding:.8rem; border-bottom:1px solid rgba(255,255,255,0.04); color:var(--tf2-text); }

/* Pagination */
.pagination a{ display:inline-block; margin:.25rem; padding:.45rem .75rem; background:var(--tf2-highlight); color:#111; border:3px solid #000; border-radius:6px; box-shadow:4px 4px 0 #000; text-decoration:none; font-weight:700; }
.pagination strong{ background:var(--tf2-red); color:#fff; border:3px solid #000; padding:.45rem .75rem; box-shadow:4px 4px 0 #000; border-radius:6px; display:inline-block; }

/* Small devices */
@media (max-width:600px){
  .tf2-panel{ padding:1rem; border-width:4px; border-radius:8px; }
  h1{ font-size:1.6rem; }
  .tf2-btn{ padding:.5rem .75rem; }
}
</style>
<!-- TF2_SC_INJECT_END -->

</head>

<body class="min-h-screen flex items-center justify-center px-4">
    <main class="w-full max-w-sm bg-[#262b38] p-8 rounded-2xl shadow-lg border border-[#2e3443]">
        <h1 class="text-2xl font-bold tracking-wide text-center mb-6">REGISTER</h1>

        <?php if (isset($error)): ?>
            <div class="mb-4 text-sm text-red-400 bg-red-900/20 border border-red-700 px-4 py-2 rounded-md">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('register'); ?>" method="post" class="space-y-5">
            <div>
                <label for="name" class="block text-sm font-medium mb-1">Username:</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="name"
                    required
                    class="w-full bg-[#1c2029] border border-[#353c4e] focus:border-[#5a6aff] focus:ring-2 focus:ring-[#5a6aff]/40 text-[#ebebeb] rounded-md px-3 py-2 text-sm outline-none transition" />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium mb-1">Email:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="your@email.com"
                    required
                    class="w-full bg-[#1c2029] border border-[#353c4e] focus:border-[#5a6aff] focus:ring-2 focus:ring-[#5a6aff]/40 text-[#ebebeb] rounded-md px-3 py-2 text-sm outline-none transition" />
            </div>

            <div class="relative">
                <label for="password" class="block text-sm font-medium mb-1">Password:</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="password"
                    required
                    class="w-full bg-[#1c2029] border border-[#353c4e] focus:border-[#5a6aff] focus:ring-2 focus:ring-[#5a6aff]/40 text-[#ebebeb] rounded-md px-3 py-2 text-sm outline-none transition pr-10" />

                <!-- Show password toggle -->
                <button type="button" id="togglePassword"
                    class="absolute right-3 top-9 flex items-center justify-center text-gray-400 hover:text-white focus:outline-none">
                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path id="eyePath" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path id="eyePath2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            <div class="mb-4 w-full max-w-sm">
                <label for="role" class="block text-sm font-medium mb-2 text-gray-300">
                    Role:
                </label>
                <div class="relative">
                    <select
                        id="role"
                        name="role"
                        required
                        class="w-full bg-[#1c2029] border border-[#353c4e] text-gray-100 rounded-lg px-4 py-2 pr-10 text-sm appearance-none focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
                        <option value="" disabled selected hidden>Select role</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>

                    <!-- Dropdown arrow -->
                    <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <button
                type="submit"
                class="w-full bg-[#5a6aff] hover:bg-[#7383ff] text-white font-semibold rounded-md py-2 mt-2 transition focus:outline-none focus:ring-2 focus:ring-[#5a6aff]/50">
                Register
            </button>
            <a href="<?= site_url('/'); ?>" class="w-full flex justify-center bg-gray-700 hover:bg-gray-800 text-white font-semibold rounded-md py-2 mt-2 transition focus:outline-none focus:ring-2 focus:ring-gray-800/50">
                Back to Home
            </a>
        </form>

        <p class="text-sm text-center mt-6 text-gray-200">Already have an account?
            <a href="<?= site_url('login'); ?>" class="text-[#9da4be] hover:text-white underline transition">Login</a>
        </p>
    </main>

    <script>
        const togglePassword = document.getElementById("togglePassword");
        const passwordField = document.getElementById("password");
        const eyePath = document.getElementById("eyePath");
        const eyePath2 = document.getElementById("eyePath2");

        const eyeSVGPaths = {
            eye: [
                "M15 12a3 3 0 11-6 0 3 3 0 016 0z",
                "M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
            ],
            eyeOff: [
                "M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.05 10.05 0 011.66-3.156M6.25 6.25l11.5 11.5",
                ""
            ]
        };

        togglePassword.addEventListener("click", function() {
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);

            if (type === "password") {
                eyePath.setAttribute("d", eyeSVGPaths.eye[0]);
                eyePath2.setAttribute("d", eyeSVGPaths.eye[1]);
            } else {
                eyePath.setAttribute("d", eyeSVGPaths.eyeOff[0]);
                eyePath2.setAttribute("d", eyeSVGPaths.eyeOff[1]);
            }
        });
    </script>
</body>

</html>