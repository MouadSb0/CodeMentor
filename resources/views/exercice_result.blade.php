<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Quiz Results | The Kinetic Academy</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Space+Grotesk:wght@600;700&amp;display=swap"
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
                        "on-background": "#2c2f31",
                        "primary-dim": "#005865",
                        "outline": "#747779",
                        "on-tertiary-container": "#003064",
                        "on-secondary": "#eff2ff",
                        "on-secondary-fixed-variant": "#515c70",
                        "surface-container": "#e5e9eb",
                        "on-primary-fixed-variant": "#005561",
                        "primary-container": "#3adffa",
                        "surface-dim": "#d0d5d8",
                        "on-primary": "#daf8ff",
                        "inverse-on-surface": "#9a9d9f",
                        "surface": "#f5f7f9",
                        "primary-fixed-dim": "#1ad0eb",
                        "on-tertiary-fixed-variant": "#003874",
                        "outline-variant": "#abadaf",
                        "on-tertiary-fixed": "#001737",
                        "surface-bright": "#f5f7f9",
                        "on-surface": "#2c2f31",
                        "secondary-fixed": "#d8e3fb",
                        "secondary": "#515c70",
                        "on-primary-fixed": "#00363e",
                        "on-tertiary": "#eff2ff",
                        "surface-container-low": "#eef1f3",
                        "tertiary-dim": "#004e9d",
                        "secondary-fixed-dim": "#cad5ed",
                        "on-primary-container": "#004b56",
                        "background": "#f5f7f9",
                        "on-error": "#ffefee",
                        "surface-variant": "#d9dde0",
                        "surface-container-high": "#dfe3e6",
                        "inverse-primary": "#3adffa",
                        "error-container": "#fb5151",
                        "secondary-dim": "#455064",
                        "on-error-container": "#570008",
                        "on-secondary-fixed": "#354053",
                        "on-secondary-container": "#475266",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "error-dim": "#9f0519",
                        "tertiary-fixed": "#84b1ff",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#84b1ff",
                        "tertiary": "#005ab3",
                        "error": "#b31b25",
                        "on-surface-variant": "#595c5e",
                        "inverse-surface": "#0b0f10",
                        "surface-container-highest": "#d9dde0",
                        "primary-fixed": "#3adffa",
                        "primary": "#006573",
                        "secondary-container": "#d8e3fb",
                        "surface-tint": "#006573"
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

        .bg-kinetic-gradient {
            background: linear-gradient(135deg, #006573 0%, #3adffa 100%);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface font-body antialiased">
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
                        class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold">
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
                    <button class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors">
                        Careers
                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                    </button>
                    <div
                        class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                        <a href="{{ url('career') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Careers</a>
                        <a href="{{ url('certifications') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Certifications</a>
                    </div>
                </div>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
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
    <main class="pt-24 pb-32 px-6 max-w-7xl mx-auto min-h-screen">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Left Column: Success Hero & Score -->
            <div class="lg:col-span-7 space-y-8">
                <section
                    class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-8 md:p-12 shadow-[0px_10px_40px_rgba(0,101,115,0.06)]">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full -mr-20 -mt-20 blur-3xl">
                    </div>
                    <div class="relative z-10 flex flex-col md:flex-row items-center gap-10">
                        <!-- Score Visualization -->
                        <div class="relative flex items-center justify-center w-48 h-48">
                            <svg class="w-full h-full transform -rotate-90">
                                <circle class="text-surface-container-low" cx="96" cy="96" fill="transparent" r="88"
                                    stroke="currentColor" stroke-width="12"></circle>
                                <circle class="text-primary transition-all duration-1000" cx="96" cy="96"
                                    fill="transparent" r="88" stroke="currentColor" stroke-dasharray="553"
                                    stroke-dashoffset="83" stroke-width="12"></circle>
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <span class="font-headline text-5xl font-bold text-on-surface">85%</span>
                                <span class="font-label text-xs uppercase tracking-widest text-outline">Final
                                    Score</span>
                            </div>
                        </div>
                        <div class="flex-1 text-center md:text-left">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary mb-4">
                                <span class="material-symbols-outlined text-sm" data-icon="verified"
                                    style="font-variation-settings: 'FILL' 1;">verified</span>
                                <span class="text-xs font-bold tracking-wider uppercase font-label">Assessment
                                    Passed</span>
                            </div>
                            <h2 class="font-headline text-4xl font-bold leading-tight mb-4 text-on-background">Excellent
                                work, Developer.</h2>
                            <p class="text-on-surface-variant leading-relaxed max-w-md">
                                You've demonstrated a strong command of modern React architecture and performance
                                optimization strategies. You are officially certified in <span
                                    class="font-semibold text-on-surface">Advanced React Patterns</span>.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- Action Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <button
                        class="flex items-center justify-center gap-3 bg-kinetic-gradient text-on-primary py-5 px-8 rounded-xl font-headline font-bold text-lg shadow-[0px_10px_40px_rgba(0,101,115,0.15)] hover:opacity-90 transition-all active:scale-[0.98]">
                        <span class="material-symbols-outlined" data-icon="workspace_premium">workspace_premium</span>
                        Claim Certificate
                    </button>
                    <button
                        class="flex items-center justify-center gap-3 bg-surface-container-lowest border border-outline-variant/15 text-primary py-5 px-8 rounded-xl font-headline font-bold text-lg hover:bg-surface-container-low transition-all active:scale-[0.98]">
                        <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                        Review Answers
                    </button>
                </div>
            </div>
            <!-- Right Column: Category Breakdown (Bento Style) -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-surface-container-low rounded-xl p-6">
                    <h3 class="font-headline text-xl font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary" data-icon="analytics">analytics</span>
                        Category Analysis
                    </h3>
                    <div class="space-y-4">
                        <!-- Category: Hooks -->
                        <div
                            class="bg-surface-container-lowest p-5 rounded-lg flex items-center gap-4 transition-transform hover:scale-[1.02]">
                            <div
                                class="w-12 h-12 rounded-lg bg-tertiary/10 flex items-center justify-center text-tertiary">
                                <span class="material-symbols-outlined" data-icon="sync_alt">sync_alt</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-end mb-1">
                                    <span class="font-semibold text-on-surface">React Hooks</span>
                                    <span class="text-xs font-bold text-primary">100%</span>
                                </div>
                                <div class="h-1.5 w-full bg-surface-container-high rounded-full overflow-hidden">
                                    <div class="h-full bg-primary w-[100%] rounded-full"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Category: State Management -->
                        <div
                            class="bg-surface-container-lowest p-5 rounded-lg flex items-center gap-4 transition-transform hover:scale-[1.02]">
                            <div
                                class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined" data-icon="account_tree">account_tree</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-end mb-1">
                                    <span class="font-semibold text-on-surface">State Logic</span>
                                    <span class="text-xs font-bold text-primary">80%</span>
                                </div>
                                <div class="h-1.5 w-full bg-surface-container-high rounded-full overflow-hidden">
                                    <div class="h-full bg-primary w-[80%] rounded-full"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Category: Performance -->
                        <div
                            class="bg-surface-container-lowest p-5 rounded-lg flex items-center gap-4 transition-transform hover:scale-[1.02]">
                            <div
                                class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center text-secondary">
                                <span class="material-symbols-outlined" data-icon="speed">speed</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-end mb-1">
                                    <span class="font-semibold text-on-surface">Performance</span>
                                    <span class="text-xs font-bold text-error">65%</span>
                                </div>
                                <div class="h-1.5 w-full bg-surface-container-high rounded-full overflow-hidden">
                                    <div class="h-full bg-error-container w-[65%] rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 p-4 bg-tertiary-container/20 rounded-lg border border-tertiary-container/30">
                        <div class="flex gap-3">
                            <span class="material-symbols-outlined text-tertiary" data-icon="lightbulb">lightbulb</span>
                            <div class="text-sm">
                                <p class="font-bold text-on-tertiary-container mb-1">Kinetic Tip</p>
                                <p class="text-on-tertiary-container/80 leading-snug">Focus your next module on
                                    "Performance Profiling" to strengthen your weakest area.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Next Steps Card -->
                <div
                    class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/15 flex items-center gap-6 group cursor-pointer overflow-hidden relative">
                    <img alt="Next course"
                        class="w-16 h-16 rounded-lg object-cover grayscale group-hover:grayscale-0 transition-all"
                        data-alt="futuristic digital illustration of a rocket launching with blue and teal neon accents"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBET9h99_jPLNHfihH66fqKQOXtDoqXJOp0NdDjc13ml3mAOXZS7aKZH42wwwKtCEBbcjYjmfQ5ANDqzjHERuj_xkOpfxbS-Sl925sANPWwr6tY89G82_AV1tg8dUqUzS8BVeLz2vBFrHWtR76tMX2i-KWFxWPKk95Teb2Gg5forIdKlCJmy3tDurxmawg_vK0MtdqzdS-6-daO6o68MQXlwWYIkmrhS9vUQBpvC8BFCWGYNFI4T8nWdv5-t5ELXJee6kLjpYYRj1_7" />
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-outline mb-1">Recommended Next
                        </p>
                        <h4 class="font-headline font-bold text-on-surface group-hover:text-primary transition-colors">
                            Mastering Next.js 14</h4>
                        <p class="text-xs text-on-surface-variant">4.5 hours • 12 Modules</p>
                    </div>
                    <span
                        class="material-symbols-outlined ml-auto text-outline group-hover:translate-x-1 transition-transform"
                        data-icon="chevron_right">chevron_right</span>
                </div>
            </div>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-2 pb-safe md:hidden bg-[#ffffff]/80 dark:bg-slate-900/80 backdrop-blur-xl border-t border-[#abadaf]/15 shadow-[0px_-4px_20px_rgba(44,47,49,0.04)] rounded-t-2xl">
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/50 dark:text-slate-500 hover:opacity-80 active:scale-90 transition-transform"
            href="{{ url('courses') }}">
            <span class="material-symbols-outlined" data-icon="school">school</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Learn</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-[#006573] dark:bg-[#22d3ee] text-white dark:text-slate-950 rounded-xl px-3 py-1.5 active:scale-90 transition-transform"
            href="{{ url('assesement') }}">
            <span class="material-symbols-outlined" data-icon="timer">timer</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Test</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/50 dark:text-slate-500 hover:opacity-80 active:scale-90 transition-transform"
            href="#">
            <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Stats</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/50 dark:text-slate-500 hover:opacity-80 active:scale-90 transition-transform"
            href="{{ url('profile') }}">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Profile</span>
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