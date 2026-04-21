<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Select Account Type | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#abadaf",
                        "error-dim": "#9f0519",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "on-tertiary-fixed-variant": "#003874",
                        "on-tertiary-container": "#003064",
                        "on-error": "#ffefee",
                        "error-container": "#fb5151",
                        "surface-dim": "#d0d5d8",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed": "#d8e3fb",
                        "inverse-surface": "#0b0f10",
                        "tertiary-dim": "#004e9d",
                        "surface-container-highest": "#d9dde0",
                        "on-tertiary-fixed": "#001737",
                        "on-primary": "#daf8ff",
                        "on-error-container": "#570008",
                        "on-secondary-fixed": "#354053",
                        "surface-variant": "#d9dde0",
                        "primary-fixed-dim": "#1ad0eb",
                        "on-surface": "#2c2f31",
                        "on-secondary-container": "#475266",
                        "surface": "#f5f7f9",
                        "outline": "#747779",
                        "on-primary-container": "#004b56",
                        "secondary-container": "#d8e3fb",
                        "on-tertiary": "#eff2ff",
                        "on-surface-variant": "#595c5e",
                        "inverse-on-surface": "#9a9d9f",
                        "surface-tint": "#006573",
                        "background": "#f5f7f9",
                        "on-secondary-fixed-variant": "#515c70",
                        "tertiary": "#005ab3",
                        "surface-container-high": "#dfe3e6",
                        "surface-container": "#e5e9eb",
                        "tertiary-container": "#84b1ff",
                        "surface-container-low": "#eef1f3",
                        "error": "#b31b25",
                        "primary-dim": "#005865",
                        "primary": "#006573",
                        "secondary-fixed-dim": "#cad5ed",
                        "secondary": "#515c70",
                        "tertiary-fixed": "#84b1ff",
                        "primary-fixed": "#3adffa",
                        "on-secondary": "#eff2ff",
                        "on-background": "#2c2f31",
                        "inverse-primary": "#3adffa",
                        "secondary-dim": "#455064",
                        "on-primary-fixed": "#00363e",
                        "primary-container": "#3adffa",
                        "on-primary-fixed-variant": "#005561",
                        "surface-bright": "#f5f7f9"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {},
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
            background-image: radial-gradient(circle at 2px 2px, rgba(0, 101, 115, 0.05) 1px, transparent 0);
            background-size: 40px 40px;
        }
    </style>
</head>

<body
    class="bg-[#D0E3E6] overflow-x-hidden font-body text-on-surface min-h-screen relative selection:bg-primary-container selection:text-on-primary-container">
    <!-- Top Navigation Anchor -->
    <nav class="bg-[#D0E3E6] dark:bg-[#0f172a] fixed top-0 w-full z-50">
        <div class="flex justify-between items-center w-full px-8 py-6 max-w-7xl mx-auto">
            <div class="flex items-center w-[40%]">
                <span class="w-[50%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
                            alt=""></a></span>
            </div>
            <div class="flex items-center gap-6">
                <span
                    class="material-symbols-outlined text-cyan-400 dark:text-cyan-300 transition-all scale-95 active:opacity-80"
                    data-icon="help_outline">help_outline</span>
            </div>
        </div>
    </nav>
    <main class="pt-32 pb-20 px-6 min-h-screen flex flex-col items-center kinetic-grid overflow-x-hidden">
        <!-- Progress Indicator -->
        <div class="w-full max-w-lg mb-12">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-widest text-primary font-label">Step 1 of 3</span>
                <span class="text-xs font-medium text-outline">Pathway Selection</span>
            </div>
            <div class="h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                <div class="h-full w-1/3 bg-gradient-to-r from-primary to-primary-container rounded-full"></div>
            </div>
        </div>
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="font-headline text-5xl md:text-6xl font-bold tracking-tight text-on-surface mb-4">
                Choose your <span class="text-primary">pathway.</span>
            </h1>
            <p class="text-on-surface-variant text-lg max-w-md mx-auto leading-relaxed">
                Personalize your experience by selecting the account type that best matches your goals.
            </p>
        </div>
        <!-- Account Selection Grid -->
        <form action="{{ route('register') }}" method="GET" class="w-full max-w-5xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
                <!-- Student Card -->
                <label class="group relative cursor-pointer">
                    <input checked="" class="peer sr-only" name="role" type="radio" value="student" />
                    <div
                        class="h-full bg-surface-container-lowest p-10 rounded-xl border-2 border-transparent peer-checked:border-primary-fixed peer-checked:ring-4 peer-checked:ring-primary-container/20 transition-all duration-300 flex flex-col items-center text-center hover:bg-white hover:shadow-2xl hover:shadow-primary/5">
                        <div
                            class="w-20 h-20 mb-8 rounded-xl bg-secondary-container flex items-center justify-center text-primary transition-transform duration-300 group-hover:scale-110">
                            <span class="material-symbols-outlined text-4xl" data-icon="school">school</span>
                        </div>
                        <h2 class="font-headline text-2xl font-semibold mb-4 text-on-surface">Student Account</h2>
                        <p class="text-on-surface-variant body-md leading-relaxed mb-8">
                            I want to learn, practice code, and build my career.
                        </p>
                        <div
                            class="mt-auto flex items-center gap-2 text-sm font-medium text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                            <span>Select Student Path</span>
                            <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                        </div>
                        <!-- Visual Indicator for Selected State -->
                        <div
                            class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-outline-variant peer-checked:bg-primary peer-checked:border-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-white text-xs" data-icon="check"
                                style="font-variation-settings: 'wght' 700;">check</span>
                        </div>
                    </div>
                </label>
                <!-- Teacher Card -->
                <label class="group relative cursor-pointer">
                    <input class="peer sr-only" name="role" type="radio" value="teacher" />
                    <div
                        class="h-full bg-surface-container-lowest p-10 rounded-xl border-2 border-transparent peer-checked:border-primary-fixed peer-checked:ring-4 peer-checked:ring-primary-container/20 transition-all duration-300 flex flex-col items-center text-center hover:bg-white hover:shadow-2xl hover:shadow-primary/5">
                        <div
                            class="w-20 h-20 mb-8 rounded-xl bg-secondary-container flex items-center justify-center text-primary transition-transform duration-300 group-hover:scale-110">
                            <span class="material-symbols-outlined text-4xl" data-icon="co_present">co_present</span>
                        </div>
                        <h2 class="font-headline text-2xl font-semibold mb-4 text-on-surface">Teacher Account</h2>
                        <p class="text-on-surface-variant body-md leading-relaxed mb-8">
                            I want to create courses, manage students, and share expertise.
                        </p>
                        <div
                            class="mt-auto flex items-center gap-2 text-sm font-medium text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                            <span>Select Mentor Path</span>
                            <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                        </div>
                        <!-- Visual Indicator for Selected State -->
                        <div
                            class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-outline-variant peer-checked:bg-primary peer-checked:border-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-white text-xs" data-icon="check"
                                style="font-variation-settings: 'wght' 700;">check</span>
                        </div>
                    </div>
                </label>
            </div>
            <!-- Footer Action -->
            <div class="mt-16 w-full flex flex-col items-center">
                <button
                    type="submit"
                    class="w-full max-w-sm py-4 rounded-xl bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold text-lg shadow-lg shadow-primary/20 hover:shadow-primary/40 hover:-translate-y-1 transition-all duration-300 active:scale-95">
                    Continue to Registration
                </button>
                <p class="mt-6 text-on-surface-variant label-md">
                    Already have an account? <a class="text-primary font-semibold hover:underline"
                        href="{{ url('/login') }}">Log in</a>
                </p>
            </div>
        </form>
        <!-- Decorative Kinetic Elements -->
        <div class="absolute top-1/4 -left-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
        <div
            class="absolute bottom-0 -right-20 w-96 h-96 bg-primary-container/10 rounded-full blur-3xl pointer-events-none">
        </div>
        <!-- Background Image for Editorial Feel (Implicit Context) -->
        <div class="fixed top-0 right-0 w-1/3 h-full opacity-[0.03] pointer-events-none z-[-1]">
            <img alt="abstract tech" class="w-full h-full object-cover"
                data-alt="abstract close up of computer circuit board with glowing cyan neon paths and surgical tech aesthetic"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDctKMpPAJP0SBRi9aBMVO3U8jUX1D7tpIJuStGXNXHFLMBYnFAXaV9iENZWOaoj2TqulEUlCM5siAlY1hkLZoPmDrz9GBapts7gPnLtC6REsr2TeXtnBMVUPv52QwZr6PL6eKw8iQzr5hiASBJ9l4cNLQyX4JcbLXjzBYkvfb-WUjpq0rWTikqbB36qCyKKuRQlLemQAn0o62DyyAVc5StBBsdVDne-IPfnFkDM2aLmsq9A7necG6RoBnE1VY9sRYoxqoO6ilwVoDY" />
        </div>
    </main>
    <!-- Footer Identity Anchor (Simplified for transactional page) -->

</body>

</html>