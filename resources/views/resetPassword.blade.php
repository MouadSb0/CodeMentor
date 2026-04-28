<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Reset Password | DEVRAK</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Space+Grotesk:wght@600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-low": "#eef1f3",
                        "on-surface-variant": "#595c5e",
                        "on-secondary-fixed": "#354053",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#d8e3fb",
                        "on-secondary-container": "#475266",
                        "surface-container-high": "#dfe3e6",
                        "on-primary-fixed": "#00363e",
                        "on-error-container": "#570008",
                        "surface-dim": "#d0d5d8",
                        "on-error": "#ffefee",
                        "inverse-on-surface": "#9a9d9f",
                        "on-primary-container": "#004b56",
                        "background": "#f5f7f9",
                        "tertiary-fixed": "#84b1ff",
                        "secondary-dim": "#455064",
                        "error-container": "#fb5151",
                        "secondary-fixed-dim": "#cad5ed",
                        "outline-variant": "#abadaf",
                        "error-dim": "#9f0519",
                        "tertiary": "#005ab3",
                        "primary-fixed": "#3adffa",
                        "primary": "#006573",
                        "on-secondary": "#eff2ff",
                        "error": "#b31b25",
                        "tertiary-container": "#84b1ff",
                        "on-tertiary": "#eff2ff",
                        "inverse-primary": "#3adffa",
                        "secondary-fixed": "#d8e3fb",
                        "surface-container-highest": "#d9dde0",
                        "surface-variant": "#d9dde0",
                        "on-surface": "#2c2f31",
                        "primary-dim": "#005865",
                        "on-tertiary-container": "#003064",
                        "tertiary-dim": "#004e9d",
                        "on-primary-fixed-variant": "#005561",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "on-tertiary-fixed-variant": "#003874",
                        "inverse-surface": "#0b0f10",
                        "on-background": "#2c2f31",
                        "surface-container": "#e5e9eb",
                        "secondary": "#515c70",
                        "primary-container": "#3adffa",
                        "surface-tint": "#006573",
                        "surface-bright": "#f5f7f9",
                        "on-secondary-fixed-variant": "#515c70",
                        "surface": "#f5f7f9",
                        "primary-fixed-dim": "#1ad0eb",
                        "on-tertiary-fixed": "#001737",
                        "on-primary": "#daf8ff",
                        "outline": "#747779"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Space Grotesk"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .kinetic-grid {
            background-image: radial-gradient(circle, #abadaf 1px, transparent 1px);
            background-size: 40px 40px;
            opacity: 0.15;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(24px);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] font-body text-on-surface min-h-screen flex flex-col relative overflow-x-hidden">
    <!-- Subtle Background Elements -->
    <div class="fixed inset-0 kinetic-grid pointer-events-none"></div>
    <div
        class="fixed top-[-10%] right-[-10%] w-[500px] h-[500px] bg-primary-container/10 rounded-full blur-[120px] pointer-events-none">
    </div>
    <div
        class="fixed bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-tertiary-fixed/10 rounded-full blur-[120px] pointer-events-none">
    </div>
    <!-- Top Navigation (Shell suppressed for Transactional focus, but Brand identity remains) -->
    <header
        class="fixed top-0 w-full z-50 bg-[#D0E3E6] dark:bg-slate-950 flex justify-between items-center px-8 h-20 w-full mx-auto">
        <div class="flex items-center w-[20%]">
            <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
                        alt=""></a></span>
        </div>

    </header>
    <!-- Main Content Canvas -->
    <main class="flex-grow flex items-center justify-center px-6 pt-20 pb-12">
        <div class="w-full max-w-[440px] relative">
            <!-- Elevated Layer Card -->
            <div
                class="bg-surface-container-lowest rounded-xl p-10 md:p-12 shadow-[0px_10px_40px_rgba(0,101,115,0.06)] border border-outline-variant/15">
                <!-- Icon Header -->
                <div class="mb-8 flex justify-center">
                    <div class="w-16 h-16 rounded-xl bg-surface-container-low flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-3xl"
                            data-icon="lock_reset">lock_reset</span>
                    </div>
                </div>
                <!-- Typographic Hierarchy -->
                <div class="text-center mb-10">
                    <h1 class="font-headline text-3xl font-bold text-on-surface tracking-tight mb-3">Reset your password
                    </h1>
                    <p class="text-on-surface-variant text-body-md tracking-wide leading-relaxed">
                        Enter the email address associated with your account and we'll send you a link to reset your
                        password.
                    </p>
                </div>
                <!-- Action Form -->
                <form class="space-y-6" action="#" method="POST">
                    @csrf
                    <div class="space-y-2">
                        <label
                            class="font-label text-[11px] font-semibold uppercase tracking-widest text-on-surface-variant ml-1"
                            for="email">
                            Email Address
                        </label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-lg"
                                data-icon="mail">mail</span>
                            <input
                                class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl py-4 pl-12 pr-4 text-on-surface placeholder:text-outline/60 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                                id="email" name="email" placeholder="name@company.com" type="email" required />
                        </div>
                    </div>
                    <button
                        class="w-full bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-semibold py-4 rounded-xl shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all duration-300"
                        type="submit">
                        Send Reset Link
                    </button>
                </form>
                <!-- Footnote / Secondary Action -->
                <div class="mt-8 text-center">
                    <a class="inline-flex items-center gap-2 font-label text-sm font-medium text-primary hover:text-primary-dim transition-colors"
                        href="{{ route('login') }}">
                        <span class="material-symbols-outlined text-base" data-icon="arrow_back">arrow_back</span>
                        Back to Login
                    </a>
                </div>
            </div>
            <!-- Asymmetric Decoration Component -->
            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-surface-container-high/50 rounded-xl -z-10 blur-xl">
            </div>
        </div>
    </main>
    <div class="fixed bottom-12 right-12 hidden lg:flex flex-col gap-4">
        <button
            class="w-14 h-14 rounded-full bg-primary text-on-primary shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all group">
            <span class="material-symbols-outlined transition-transform group-hover:rotate-12"
                data-icon="chat_bubble">chat_bubble</span>
        </button>
        <button
            class="w-14 h-14 rounded-full bg-surface-container-lowest text-on-surface shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all group">
            <span class="material-symbols-outlined" data-icon="support_agent">support_agent</span>
        </button>
    </div>
    <!-- Footer -->
    <footer class="w-full py-12 flex flex-col md:flex-row justify-between items-center px-8 max-w-7xl mx-auto gap-4">
        <div class="font-body text-xs uppercase tracking-widest text-blue-700 dark:text-slate-500">
            © 2024 CodeMentor BytesLab
        </div>
        <div class="flex gap-8">
            <a class="font-body text-xs uppercase tracking-widest text-blue-700 dark:text-slate-500 hover:text-cyan-600 transition-colors"
                href="#">Privacy</a>
            <a class="font-body text-xs uppercase tracking-widest text-blue-700 dark:text-slate-500 hover:text-cyan-600 transition-colors"
                href="#">Terms</a>
            <a class="font-body text-xs uppercase tracking-widest text-blue-700 dark:text-slate-500 hover:text-cyan-600 transition-colors"
                href="#">Support</a>
        </div>
    </footer>
@include('partials.ai_chat')
</body>

</html>