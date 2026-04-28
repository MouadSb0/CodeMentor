<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Certifications | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap"
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
                    colors: {
                        "on-primary": "#daf8ff",
                        "inverse-surface": "#0b0f10",
                        "tertiary-dim": "#004e9d",
                        "surface-variant": "#d9dde0",
                        "on-error": "#ffefee",
                        "surface-container-lowest": "#ffffff",
                        "primary-container": "#3adffa",
                        "on-tertiary": "#eff2ff",
                        "primary": "#006573",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "surface-container-highest": "#d9dde0",
                        "secondary": "#515c70",
                        "on-surface-variant": "#595c5e",
                        "secondary-dim": "#455064",
                        "error-container": "#fb5151",
                        "surface": "#f5f7f9",
                        "error-dim": "#9f0519",
                        "secondary-fixed": "#d8e3fb",
                        "tertiary-container": "#84b1ff",
                        "surface-container-high": "#dfe3e6",
                        "tertiary-fixed": "#84b1ff",
                        "background": "#f5f7f9",
                        "on-surface": "#2c2f31",
                        "on-secondary-fixed-variant": "#515c70",
                        "surface-bright": "#f5f7f9",
                        "secondary-container": "#d8e3fb",
                        "on-tertiary-fixed": "#001737",
                        "surface-tint": "#006573",
                        "surface-dim": "#d0d5d8",
                        "on-primary-container": "#004b56",
                        "on-primary-fixed-variant": "#005561",
                        "tertiary": "#005ab3",
                        "on-secondary-fixed": "#354053",
                        "inverse-on-surface": "#9a9d9f",
                        "outline": "#747779",
                        "on-tertiary-fixed-variant": "#003874",
                        "on-secondary-container": "#475266",
                        "on-tertiary-container": "#003064",
                        "on-background": "#2c2f31",
                        "on-secondary": "#eff2ff",
                        "outline-variant": "#abadaf",
                        "error": "#b31b25",
                        "surface-container-low": "#eef1f3",
                        "on-error-container": "#570008",
                        "on-primary-fixed": "#00363e",
                        "primary-dim": "#005865",
                        "secondary-fixed-dim": "#cad5ed",
                        "primary-fixed": "#3adffa",
                        "surface-container": "#e5e9eb",
                        "primary-fixed-dim": "#1ad0eb",
                        "inverse-primary": "#3adffa"
                    },
                    fontFamily: {
                        "headline": ["Space Grotesk"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .kinetic-grid {
            background-image: radial-gradient(#abadaf 0.5px, transparent 0.5px);
            background-size: 24px 24px;
            opacity: 0.15;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] font-body text-on-surface">
    <!-- TopAppBar -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}" alt=""></a></span>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ route('dashboard') }}">Dashboard</a>
                <div class="relative group py-4">
                    <button
                        class="flex items-center gap-1 text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-medium">
                        Learn
                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                    </button>
                    <div
                        class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                        <a href="{{ route('courses') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Courses</a>
                        <a href="{{ route('exercices') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Exercices</a>
                        <a href="{{ route('CodeLab') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Playground</a>
                        <a href="{{ route('quizzes') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Quizzes</a>
                    </div>
                </div>
                <div class="relative group py-4">
                    <button class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors">
                        Careers
                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                    </button>
                    <div
                        class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                        <a href="{{ route('assesements') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Assesement</a>
                        <a href="{{ route('career') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Career</a>
                        <a href="{{ route('certifications') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Certifications</a>
                    </div>
                </div>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ route('community') }}">Community</a>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ route('contact') }}">Contact</a>

            </nav>
            <div class="flex items-center gap-4">
                <div
                    class="hidden sm:flex items-center bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant/15">
                    <span class="material-symbols-outlined text-sm text-on-surface-variant mr-2">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-sm w-80" placeholder="Search courses..."
                        type="text" />
                </div>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#eef1f3] transition-colors">
                    <span class="material-symbols-outlined text-on-surface-variant"
                        data-icon="notifications">notifications</span>
                </button>
                <div class="relative group/avatar">
                    <div
                        class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center overflow-hidden border-2 border-white shadow-sm cursor-pointer ring-2 ring-transparent group-hover/avatar:ring-primary/40 transition-all">
                        <a href="{{ url('profile') }}" class="block w-full h-full">
                            <img alt="User profile avatar" class="w-full h-full object-cover"
                                src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=4F8EF7&color=fff' }}" />
                        </a>
                    </div>
                    <!-- Logout Dropdown -->
                    <div class="absolute right-0 top-12 w-56 bg-white rounded-2xl shadow-2xl border border-outline-variant/20 opacity-0 invisible group-hover/avatar:opacity-100 group-hover/avatar:visible transition-all duration-200 translate-y-2 group-hover/avatar:translate-y-0 z-[999]">
                        <div class="p-3 border-b border-outline-variant/10">
                            <p class="text-xs font-bold text-on-surface truncate">{{ auth()->user()->name }}</p>
                            <p class="text-[10px] text-outline truncate">{{ auth()->user()->email }}</p>
                        </div>
                        <div class="p-2">
                            <a href="{{ url('profile') }}" class="flex items-center gap-2 px-3 py-2 rounded-xl text-sm text-on-surface hover:bg-surface-container transition-colors">
                                <span class="material-symbols-outlined text-base">person</span>
                                <span>Mon profil</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2 px-3 py-2 rounded-xl text-sm text-error hover:bg-red-50 transition-colors">
                                    <span class="material-symbols-outlined text-base">logout</span>
                                    <span>Se deconnecter</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="relative min-h-screen pb-32">
        <div class="absolute inset-0 kinetic-grid pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-6 pt-8 space-y-12 relative z-10">
            <!-- Hero Section: Featured Certification & Stats -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Featured Card -->
                <section
                    class="lg:col-span-8 bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_10px_40px_rgba(0,101,115,0.06)] flex flex-col md:flex-row">
                    <div class="md:w-2/5 relative min-h-[240px]">
                        <img alt="Full-Stack Architect Track" class="absolute inset-0 w-full h-full object-cover"
                            data-alt="Futuristic server room with glowing blue and cyan lights, representing high-end infrastructure and architectural complexity"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoLgjJe51pAHnVEixRxgRiJvuU9NnsqR157sd_dpncYXOSpBoaV1tF0wC3PVGJYTSyXnrUIqYOrsON9wW_pHFykxAxQQUvvPmCTk82mVYu-nCfEKy5rlWHFHnZJzgWTtWh7yAZq9iYGzglrBuRcKyHlj1iLpd1NbJLswKxL1o0QNpatVWYcorprq4oVPxfLkJ07sAeSTLc6mxLzYkbyMZ_FpdMrW5cv-DAZb2RR_6gRBj-2aIl2OipsW-SMkb6HnDUDKMER7hu6VY4" />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <span
                                class="bg-primary-container text-on-primary-container text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider font-label">Elite
                                Track</span>
                        </div>
                    </div>
                    <div class="md:w-3/5 p-8 flex flex-col justify-center space-y-4">
                        <h2 class="font-headline text-3xl font-bold leading-tight">Full-Stack Architect</h2>
                        <p class="text-on-surface-variant body-md">Master the art of scalable systems, microservices
                            orchestration, and advanced DevOps integration. This certification marks you as a leader in
                            technical execution.</p>
                        <div class="flex items-center gap-6 pt-2">
                            <button
                                class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-bold px-8 py-3 rounded-xl shadow-lg active:scale-95 transition-all">
                                Enroll Now
                            </button>
                            <div class="flex flex-col">
                                <span class="text-xs font-label text-outline uppercase tracking-widest">Duration</span>
                                <span class="font-semibold">24 Modules</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Platform Stats -->
                <section class="lg:col-span-4 bg-surface-container-low p-8 rounded-xl space-y-8">
                    <h3 class="font-headline text-xl font-semibold">Your Standing</h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="p-3 bg-white rounded-xl text-primary">
                                    <span class="material-symbols-outlined"
                                        data-icon="workspace_premium">workspace_premium</span>
                                </div>
                                <span class="font-medium">Total Earned</span>
                            </div>
                            <span class="text-3xl font-headline font-bold text-primary">14</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="p-3 bg-white rounded-xl text-primary">
                                    <span class="material-symbols-outlined" data-icon="trending_up">trending_up</span>
                                </div>
                                <span class="font-medium">Global Rank</span>
                            </div>
                            <span class="text-3xl font-headline font-bold text-primary">Top 4%</span>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                            <div class="bg-primary-container h-full w-[96%]"></div>
                        </div>
                        <p class="text-xs text-outline mt-3 text-center uppercase tracking-widest font-label">4% until
                            Platinum Badge</p>
                    </div>
                </section>
            </div>
            <!-- In-Progress Tracker -->
            <section class="space-y-6">
                <div class="flex items-end justify-between">
                    <h2 class="font-headline text-2xl font-bold">In-Progress Tracks</h2>
                    <a class="text-primary text-sm font-semibold hover:underline" href="#">View All Learning</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Progress Card 1 -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-6">
                            <div class="space-y-1">
                                <h3 class="font-semibold text-lg">Cloud Native Expert</h3>
                                <p class="text-sm text-outline">Kubernetes &amp; Serverless</p>
                            </div>
                            <span class="text-primary font-bold font-headline">68%</span>
                        </div>
                        <div class="w-full bg-surface-container-low h-1.5 rounded-full overflow-hidden mb-6">
                            <div class="bg-primary h-full w-[68%]"></div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-medium text-on-surface-variant">4/12 Modules left</span>
                            <button class="flex items-center gap-2 text-primary font-bold text-sm">
                                Continue <span class="material-symbols-outlined text-sm"
                                    data-icon="arrow_forward">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                    <!-- Progress Card 2 -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-6">
                            <div class="space-y-1">
                                <h3 class="font-semibold text-lg">AI Integration Spec</h3>
                                <p class="text-sm text-outline">LLM Orchestration</p>
                            </div>
                            <span class="text-primary font-bold font-headline">32%</span>
                        </div>
                        <div class="w-full bg-surface-container-low h-1.5 rounded-full overflow-hidden mb-6">
                            <div class="bg-primary h-full w-[32%]"></div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-medium text-on-surface-variant">9/15 Modules left</span>
                            <button class="flex items-center gap-2 text-primary font-bold text-sm">
                                Continue <span class="material-symbols-outlined text-sm"
                                    data-icon="arrow_forward">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                    <!-- Progress Card 3 -->
                    <div
                        class="bg-surface-container-lowest p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow border-2 border-dashed border-outline-variant/30 flex flex-col items-center justify-center min-h-[160px] group cursor-pointer">
                        <span
                            class="material-symbols-outlined text-4xl text-outline-variant group-hover:text-primary transition-colors"
                            data-icon="add_circle">add_circle</span>
                        <span class="mt-2 text-sm font-semibold text-outline">Browse New Tracks</span>
                    </div>
                </div>
            </section>
            <!-- Earned Credentials -->
            <section class="space-y-6">
                <h2 class="font-headline text-2xl font-bold">Earned Credentials</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Credential Card 1 -->
                    <div class="bg-surface-container-lowest rounded-xl overflow-hidden group">
                        <div class="h-40 bg-surface-container-low flex items-center justify-center p-8 relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
                            <img alt="React Senior Badge"
                                class="w-24 h-24 object-contain grayscale group-hover:grayscale-0 transition-all duration-300"
                                data-alt="A stylized geometric digital badge featuring a central atomic symbol, glowing cyan and white accents on a glass background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtcy1_aShsypI4t9G3RL6-nCh3axZZ3fWSs0m6_J32I60nl6XzctBymWEVw6mXyrGaRYGD8t_BFmRCIn8aSZt08ivI1EX54NxuovdSQRq_w-hTldT-Xcha90T4W_HoIqd-GHWNb7k2FvIzDNpaty6gNAYZQeDBAuFEZDm0i_BclLl0lH6xXPnI4AY70NW_wrPZOJJuqt8_xFTgpsRDCr0Sx_JRoi75GFefhXRwSmRvxd1nPXAu57uUTp-BMzi8k40yKrAtlRuF9kui" />
                        </div>
                        <div class="p-5 space-y-3">
                            <div>
                                <h4 class="font-bold text-sm">Senior React Developer</h4>
                                <p class="text-[10px] text-outline uppercase tracking-widest font-label mt-1">Verified:
                                    Oct 2023</p>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="flex-1 bg-surface-container-low py-2 rounded-lg text-xs font-bold hover:bg-surface-container-high transition-colors">Verify</button>
                                <button
                                    class="p-2 bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
                                    <span class="material-symbols-outlined text-sm" data-icon="download">download</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Credential Card 2 -->
                    <div class="bg-surface-container-lowest rounded-xl overflow-hidden group">
                        <div class="h-40 bg-surface-container-low flex items-center justify-center p-8 relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
                            <img alt="Go Backend Badge"
                                class="w-24 h-24 object-contain grayscale group-hover:grayscale-0 transition-all duration-300"
                                data-alt="A minimal and modern digital badge with a bold Gopher mascot silhouette, metallic finish with teal highlights"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTKzLJC1M7Wbz4hNohT_owWTg5eWp1RG0_rDVXa8970C4uoLZJdMpx3BZc2l64-TfqHz-pjOLvW4-NbthQPWNIgOrJfNN1oMsw55Q4E9bfGdybzYwC89-VGhoR2gvUJ5jcYCzQ1QtkJpBxRMliAwrJEfI8ESCxKlPDDt8P5eaUCeSS7rRV1Hs-rWKR3nUpFWZ0whVVgb3ef-9lm9Je__XXf7x5nMKtPAsceSHNG3rQ06MK3IYqIebRfxdQ0YNO4sid3DS5IRInUk32" />
                        </div>
                        <div class="p-5 space-y-3">
                            <div>
                                <h4 class="font-bold text-sm">Go Systems Engineer</h4>
                                <p class="text-[10px] text-outline uppercase tracking-widest font-label mt-1">Verified:
                                    Jan 2024</p>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="flex-1 bg-surface-container-low py-2 rounded-lg text-xs font-bold hover:bg-surface-container-high transition-colors">Verify</button>
                                <button
                                    class="p-2 bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
                                    <span class="material-symbols-outlined text-sm" data-icon="download">download</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Credential Card 3 -->
                    <div class="bg-surface-container-lowest rounded-xl overflow-hidden group">
                        <div class="h-40 bg-surface-container-low flex items-center justify-center p-8 relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
                            <img alt="Data Analytics Badge"
                                class="w-24 h-24 object-contain grayscale group-hover:grayscale-0 transition-all duration-300"
                                data-alt="A sleek digital certificate badge with abstract data bar charts and a golden checkmark on a frosted glass texture"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDe6q-0OQz6wVKkSDM4fGueaVGST7KZCRqLqk3Q8vZWgu1An7J8oQzBc-hMw7vIMaX_g0_i36xXaTL2hMEgJpAMdLXrMWAdPoFK_aBpXHFFCYnFadt9f_apWqaOjLz_08tVQyU_W1qKvZvns4XsUADm4r6dJCZZir9q2IanwiQNYyoJgP_J2hCSzdSW_BqoD2zbGmGOZ6eOsveHkqLe_P6K0cTdLkwiBTU2TEhrSqs4QlayfIT50XOOFFKVZpt6eOHEERReRPGWr0Q3" />
                        </div>
                        <div class="p-5 space-y-3">
                            <div>
                                <h4 class="font-bold text-sm">Data Pipeline Architect</h4>
                                <p class="text-[10px] text-outline uppercase tracking-widest font-label mt-1">Verified:
                                    Feb 2024</p>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="flex-1 bg-surface-container-low py-2 rounded-lg text-xs font-bold hover:bg-surface-container-high transition-colors">Verify</button>
                                <button
                                    class="p-2 bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
                                    <span class="material-symbols-outlined text-sm" data-icon="download">download</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Credential Card 4 -->
                    <div class="bg-surface-container-lowest rounded-xl overflow-hidden group">
                        <div class="h-40 bg-surface-container-low flex items-center justify-center p-8 relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
                            <img alt="Cybersecurity Badge"
                                class="w-24 h-24 object-contain grayscale group-hover:grayscale-0 transition-all duration-300"
                                data-alt="An intricate digital emblem of a hexagonal shield with digital circuitry patterns and vibrant blue neon glow"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpJ8XTmD0RyhTDmiAXgsqSTxPzMwCW2v6JMX0K0ZkPw586h4-RkEeHWjZ8T0t6N0ch4ExiBUzUsNSdYI27eYxnHuQqoyUpITXu_JxOTUgpkSTcGdWAnWk_SWh3JIXGz86B1LeTG-WPUrR3_nVVVG_w7diP8uuWqIwxtJ0kJZVFX9gQbUXIC2UXjzMjyegD0wIxbtDHb3rw6lWnsVkJBAJbL1yff3rH0N-7bez3bHrn5uy3spGJ9SOzX6xAQJJF_94FR7wSQXsncRgI" />
                        </div>
                        <div class="p-5 space-y-3">
                            <div>
                                <h4 class="font-bold text-sm">SecOps Professional</h4>
                                <p class="text-[10px] text-outline uppercase tracking-widest font-label mt-1">Verified:
                                    Apr 2024</p>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="flex-1 bg-surface-container-low py-2 rounded-lg text-xs font-bold hover:bg-surface-container-high transition-colors">Verify</button>
                                <button
                                    class="p-2 bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
                                    <span class="material-symbols-outlined text-sm" data-icon="download">download</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- BottomNavBar -->
    <nav
        class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl border-t border-[#abadaf]/15 shadow-[0px_-4px_20px_rgba(44,47,49,0.04)] rounded-t-[1.5rem]">
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/60 dark:text-slate-500 px-5 py-2 hover:text-[#006573] transition-transform active:scale-90"
            href="{{ route('courses') }}">
            <span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
            <span class="font-['Inter'] text-[10px] font-medium uppercase tracking-[0.05em] mt-1">Learn</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-[#3adffa]/10 text-[#006573] dark:text-[#22d3ee] rounded-2xl px-5 py-2 transition-transform active:scale-90"
            href="{{ route('certifications') }}">
            <span class="material-symbols-outlined" data-icon="workspace_premium"
                style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
            <span class="font-['Inter'] text-[10px] font-medium uppercase tracking-[0.05em] mt-1">Certify</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/60 dark:text-slate-500 px-5 py-2 hover:text-[#006573] transition-transform active:scale-90"
            href="{{ route('community') }}">
            <span class="material-symbols-outlined" data-icon="forum">forum</span>
            <span class="font-['Inter'] text-[10px] font-medium uppercase tracking-[0.05em] mt-1">Social</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/60 dark:text-slate-500 px-5 py-2 hover:text-[#006573] transition-transform active:scale-90"
            href="{{ route('profile') }}">
            <span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
            <span class="font-['Inter'] text-[10px] font-medium uppercase tracking-[0.05em] mt-1">Profile</span>
        </a>
    </nav>
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
@include('partials.ai_chat')
</body>

</html>