<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Marcus Thorne | Kinetic Lab</title>
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
                    "colors": {
                        "on-surface-variant": "#595c5e",
                        "tertiary-dim": "#004e9d",
                        "outline": "#747779",
                        "on-error-container": "#570008",
                        "on-secondary": "#eff2ff",
                        "secondary-fixed-dim": "#cad5ed",
                        "inverse-primary": "#3adffa",
                        "background": "#f5f7f9",
                        "secondary-dim": "#455064",
                        "surface-container-high": "#dfe3e6",
                        "surface-container-highest": "#d9dde0",
                        "surface-dim": "#d0d5d8",
                        "surface-bright": "#f5f7f9",
                        "on-secondary-fixed": "#354053",
                        "surface": "#f5f7f9",
                        "on-surface": "#2c2f31",
                        "primary-dim": "#005865",
                        "on-tertiary": "#eff2ff",
                        "inverse-surface": "#0b0f10",
                        "on-primary": "#daf8ff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed": "#d8e3fb",
                        "inverse-on-surface": "#9a9d9f",
                        "primary": "#006573",
                        "tertiary-container": "#84b1ff",
                        "on-secondary-fixed-variant": "#515c70",
                        "surface-tint": "#006573",
                        "primary-fixed-dim": "#1ad0eb",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "on-tertiary-fixed": "#001737",
                        "surface-container": "#e5e9eb",
                        "on-error": "#ffefee",
                        "surface-container-low": "#eef1f3",
                        "outline-variant": "#abadaf",
                        "secondary-container": "#d8e3fb",
                        "on-background": "#2c2f31",
                        "on-primary-fixed-variant": "#005561",
                        "tertiary-fixed": "#84b1ff",
                        "error-dim": "#9f0519",
                        "on-primary-fixed": "#00363e",
                        "primary-fixed": "#3adffa",
                        "on-tertiary-container": "#003064",
                        "surface-variant": "#d9dde0",
                        "tertiary": "#005ab3",
                        "on-primary-container": "#004b56",
                        "on-tertiary-fixed-variant": "#003874",
                        "primary-container": "#3adffa",
                        "on-secondary-container": "#475266",
                        "error": "#b31b25",
                        "error-container": "#fb5151",
                        "secondary": "#515c70"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1.5rem"
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
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7f9;
        }

        .font-headline {
            font-family: 'Space Grotesk', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="text-on-surface bg-[#D0E3E6] antialiased overflow-x-hidden">
    <!-- TopAppBar -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
                            alt=""></a></span>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ url('dashboard') }}">Dashboard</a>
                <div class="relative group py-4">
                    <button
                        class="flex items-center gap-1 text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-medium">
                        Learn
                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                    </button>
                    <div
                        class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                        <a href="{{ url('courses') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Courses</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Exercices</a>
                        <a href="{{ url('codeLab') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Playground</a>
                        <a href="{{ url('quiz') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Quizzes</a>
                    </div>
                </div>
                <div class="relative group py-4">
                    <button
                        class="flex items-center gap-1 text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-medium">
                        Careers
                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                    </button>
                    <div
                        class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                        <a href="{{ url('assesement') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Assesement</a>
                        <a href="{{ url('carrer') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Career</a>
                        <a href="{{ url('certifications') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Certifications</a>
                    </div>
                </div>
                <a class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors"
                    href="{{ url('community') }}">Community</a>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ url('contact') }}">Contact</a>

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
                <div
                    class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center overflow-hidden border-2 border-white shadow-sm">
                    <a href="{{ url('profile') }}">
                        <img alt="User profile avatar"
                            data-alt="Professional developer profile portrait with clean lighting and neutral studio background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9QfpggW4PCYoxv98_vXHeU9Ub5yVEJssOTWCd2qq8QX2y2KoLdoEQdL8HrRlO10bHQXGpRVyPE_D-FMLB998YaSOv7N_QAcAa8yMpq1wJPpDGf7qY8nPaZ6A2mmHFvVJC2JePX-IbespJz0cLoyOaYLYgVT0gMIVsCdIXC-9HHYjCrOIQG44l5zIXE3575lnynz3qooMCzi8GeLNjMkWiszET6TnsVI6UDJKUAXlJm9c03hNXOyHPKq9NB_lqQOcsM5QK9HhO1z7h" />
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Canvas -->
    <main class="pt-24 pb-12 lg:pl-72 pr-6 min-h-screen">
        <div class="max-w-6xl mx-auto space-y-8">
            <!-- User Header Bento -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Profile Identity Card -->
                <div
                    class="lg:col-span-2 bg-surface-container-lowest rounded-2xl p-8 flex flex-col md:flex-row items-center md:items-end gap-8 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-32 h-32 rounded-2xl overflow-hidden shadow-2xl shadow-primary/10">
                            <img alt="Marcus Thorne Profile" class="w-full h-full object-cover"
                                data-alt="Sharp portrait of a creative professional man with short beard, wearing a charcoal turtleneck, neutral studio lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBUE5Dw8azrb1OtSN3KaTHtX78gRq5Civ4cCWx-r0PUl40b5WK3k6OwhuCKO120GN2DffaBPqQhYymhRU-8g1Acxfc3-XBkgKo6P6JcpTYGAbsObEb3ytE0Fl8ckaNIVHKHfu4I65xh5An0lfSxwGeb1j6ekU79qQhs_tZLEz94i3DhVsYMq_iGMiRukpAyYZ8nO8K0H8HUBWwxtssRPqMrSxt_rLAx5g9bmg-GcSPqkHiOOBgnHebkXvR9OXFBFCWPOqNjWA0Ouop" />
                        </div>
                        <div
                            class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 border-4 border-white rounded-full">
                        </div>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h1 class="text-4xl font-headline font-bold text-on-surface tracking-tight mb-1">Marcus Thorne
                        </h1>
                        <div class="flex flex-wrap items-center justify-center md:justify-start gap-3 mb-6">
                            <span
                                class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-full uppercase tracking-wider">Core
                                Contributor</span>
                            <span class="text-on-surface-variant text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">location_on</span> San Francisco, CA
                            </span>
                        </div>
                        <div class="flex gap-3">
                            <button
                                class="px-8 py-3 bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold rounded-xl shadow-lg shadow-primary/20 active:scale-95 transition-all">
                                Connect
                            </button>
                            <button
                                class="p-3 bg-surface-container-low text-on-surface-variant rounded-xl hover:bg-surface-container-high transition-colors">
                                <span class="material-symbols-outlined">more_horiz</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Stats Bar -->
                <div
                    class="bg-primary text-on-primary rounded-2xl p-8 flex flex-col justify-between shadow-xl shadow-primary/20">
                    <div>
                        <p class="text-primary-fixed opacity-70 text-xs font-bold uppercase tracking-widest mb-4">
                            Platform Authority</p>
                        <div class="space-y-6">
                            <div class="flex justify-between items-end">
                                <span class="text-sm font-medium">Karma Points</span>
                                <span class="text-3xl font-headline font-bold">12,480</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <span class="text-sm font-medium">Courses Completed</span>
                                <span class="text-3xl font-headline font-bold">42</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <span class="text-sm font-medium">Certifications</span>
                                <span class="text-3xl font-headline font-bold">08</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bio & Skills Section -->
            <section class="grid grid-cols-1 lg:grid-cols-5 gap-6">
                <!-- About Section -->
                <div class="lg:col-span-3 bg-surface-container-low rounded-2xl p-8">
                    <h2 class="text-xl font-headline font-semibold mb-6 text-on-surface flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">fingerprint</span> Professional Bio
                    </h2>
                    <p class="text-on-surface-variant leading-relaxed body-md">
                        Full-stack engineer specializing in high-performance React architectures and editorial-driven UX
                        design. Currently leading the open-source initiative at Devrak, focusing on building scalable
                        component libraries and developer experience tools. 10+ years of experience in turning complex
                        data into intuitive, beautiful interfaces.
                    </p>
                    <div class="mt-8 pt-8 border-t border-outline-variant/20 flex gap-8">
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Articles</p>
                            <p class="font-headline font-bold text-xl">154</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Followers</p>
                            <p class="font-headline font-bold text-xl">8.2k</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Impact</p>
                            <p class="font-headline font-bold text-xl">Top 1%</p>
                        </div>
                    </div>
                </div>
                <!-- Skills Chip Cloud -->
                <div class="lg:col-span-2 bg-surface-container-lowest rounded-2xl p-8">
                    <h2 class="text-xl font-headline font-semibold mb-6 text-on-surface">Technical Stack</h2>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl text-xs font-semibold shadow-sm">React
                            18</span>
                        <span
                            class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl text-xs font-semibold shadow-sm">Next.js
                            14</span>
                        <span
                            class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl text-xs font-semibold shadow-sm">Tailwind
                            CSS</span>
                        <span
                            class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl text-xs font-semibold shadow-sm">TypeScript</span>
                        <span
                            class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl text-xs font-semibold shadow-sm">GraphQL</span>
                        <span
                            class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl text-xs font-semibold shadow-sm">Node.js</span>
                        <span
                            class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl text-xs font-semibold shadow-sm">PostgreSQL</span>
                        <span
                            class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl text-xs font-semibold shadow-sm">Docker</span>
                        <span
                            class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl text-xs font-semibold shadow-sm">AWS</span>
                    </div>
                    <div class="mt-8">
                        <div class="p-4 bg-primary/5 rounded-xl border border-primary/10">
                            <p class="text-xs font-bold text-primary mb-1">Most Endorsed</p>
                            <p class="text-sm font-medium text-on-surface">Advanced UI Patterns &amp; Animations</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Activity & Achievements Section -->
            <section class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Recent Activity Feed -->
                <div class="bg-surface-container-lowest rounded-2xl p-8">
                    <div class="flex justify-between items-center mb-8">
                        <h2 class="text-xl font-headline font-semibold text-on-surface">Recent Activity</h2>
                        <button class="text-primary text-xs font-bold hover:underline">View All</button>
                    </div>
                    <div class="space-y-6">
                        <div class="flex gap-4 items-start">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 flex-shrink-0">
                                <span class="material-symbols-outlined text-lg">school</span>
                            </div>
                            <div class="flex-1 border-b border-outline-variant/10 pb-4">
                                <p class="text-on-surface text-sm font-medium">Completed <span
                                        class="text-primary">Next.js 14 Masterclass</span></p>
                                <p class="text-on-surface-variant text-xs mt-1">Earned 500 Karma points • 2 hours ago
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div
                                class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 flex-shrink-0">
                                <span class="material-symbols-outlined text-lg">forum</span>
                            </div>
                            <div class="flex-1 border-b border-outline-variant/10 pb-4">
                                <p class="text-on-surface text-sm font-medium">Started a new discussion in <span
                                        class="text-primary">Community</span></p>
                                <p class="text-on-surface-variant text-xs mt-1">"The future of Server Components" • 5
                                    hours ago</p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div
                                class="w-10 h-10 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 flex-shrink-0">
                                <span class="material-symbols-outlined text-lg">workspace_premium</span>
                            </div>
                            <div class="flex-1 pb-4">
                                <p class="text-on-surface text-sm font-medium">Earned the <span
                                        class="text-primary">Quality Contributor</span> badge</p>
                                <p class="text-on-surface-variant text-xs mt-1">Milestone reached: 100+ helpful comments
                                    • Yesterday</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Achievements Grid -->
                <div class="bg-surface-container-low rounded-2xl p-8">
                    <h2 class="text-xl font-headline font-semibold mb-8 text-on-surface">Digital Achievements</h2>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-xl flex flex-col items-center text-center shadow-sm">
                            <div
                                class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center text-amber-600 mb-3">
                                <span class="material-symbols-outlined"
                                    style="font-variation-settings: 'FILL' 1;">military_tech</span>
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-tighter text-slate-400">Pioneer</p>
                            <p class="text-xs font-semibold text-on-surface mt-1">Beta Member</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl flex flex-col items-center text-center shadow-sm">
                            <div
                                class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 mb-3">
                                <span class="material-symbols-outlined"
                                    style="font-variation-settings: 'FILL' 1;">terminal</span>
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-tighter text-slate-400">Code Master</p>
                            <p class="text-xs font-semibold text-on-surface mt-1">100+ Merges</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl flex flex-col items-center text-center shadow-sm">
                            <div
                                class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 mb-3">
                                <span class="material-symbols-outlined"
                                    style="font-variation-settings: 'FILL' 1;">verified</span>
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-tighter text-slate-400">Expert</p>
                            <p class="text-xs font-semibold text-on-surface mt-1">Certified Architect</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl flex flex-col items-center text-center shadow-sm">
                            <div
                                class="w-12 h-12 bg-rose-100 rounded-full flex items-center justify-center text-rose-600 mb-3">
                                <span class="material-symbols-outlined"
                                    style="font-variation-settings: 'FILL' 1;">favorite</span>
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-tighter text-slate-400">Helpful</p>
                            <p class="text-xs font-semibold text-on-surface mt-1">Community Mentor</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl flex flex-col items-center text-center shadow-sm">
                            <div
                                class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 mb-3 opacity-40">
                                <span class="material-symbols-outlined">lock</span>
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-tighter text-slate-400">Locked</p>
                            <p class="text-xs font-semibold text-slate-400 mt-1">Top Speaker</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl flex flex-col items-center text-center shadow-sm">
                            <div
                                class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 mb-3 opacity-40">
                                <span class="material-symbols-outlined">lock</span>
                            </div>
                            <p class="text-[10px] font-bold uppercase tracking-tighter text-slate-400">Locked</p>
                            <p class="text-xs font-semibold text-slate-400 mt-1">Hackathon Winner</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 w-full bg-white/90 backdrop-blur-lg px-6 py-4 flex justify-between items-center z-50 border-t border-slate-100">
        <button class="p-2 text-primary">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
        </button>
        <button class="p-2 text-slate-400">
            <span class="material-symbols-outlined">explore</span>
        </button>
        <button class="p-3 bg-primary text-white rounded-2xl shadow-lg -mt-10">
            <span class="material-symbols-outlined">add</span>
        </button>
        <button class="p-2 text-slate-400">
            <span class="material-symbols-outlined">mail</span>
        </button>
        <button class="p-2 text-slate-400">
            <span class="material-symbols-outlined">person</span>
        </button>
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
</body>

</html>