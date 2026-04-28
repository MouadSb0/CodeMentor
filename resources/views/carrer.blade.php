<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <title>Career | CodeMentor</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap"
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
                    colors: {
                        "primary": "#006573",
                        "surface-container-low": "#eef1f3",
                        "surface-dim": "#d0d5d8",
                        "secondary-fixed-dim": "#cad5ed",
                        "surface-tint": "#006573",
                        "primary-fixed": "#3adffa",
                        "on-error-container": "#570008",
                        "error-container": "#fb5151",
                        "tertiary-fixed": "#84b1ff",
                        "inverse-primary": "#3adffa",
                        "outline": "#747779",
                        "error-dim": "#9f0519",
                        "surface-container-lowest": "#ffffff",
                        "on-error": "#ffefee",
                        "tertiary": "#005ab3",
                        "secondary": "#515c70",
                        "on-tertiary": "#eff2ff",
                        "on-primary-fixed-variant": "#005561",
                        "on-primary-container": "#004b56",
                        "background": "#f5f7f9",
                        "on-secondary-fixed-variant": "#515c70",
                        "on-secondary-container": "#475266",
                        "on-primary": "#daf8ff",
                        "tertiary-container": "#84b1ff",
                        "tertiary-dim": "#004e9d",
                        "outline-variant": "#abadaf",
                        "error": "#b31b25",
                        "surface-container-high": "#dfe3e6",
                        "on-tertiary-fixed-variant": "#003874",
                        "on-surface-variant": "#595c5e",
                        "on-surface": "#2c2f31",
                        "on-tertiary-container": "#003064",
                        "surface": "#f5f7f9",
                        "on-secondary-fixed": "#354053",
                        "on-tertiary-fixed": "#001737",
                        "surface-container": "#e5e9eb",
                        "secondary-fixed": "#d8e3fb",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "secondary-dim": "#455064",
                        "on-primary-fixed": "#00363e",
                        "surface-variant": "#d9dde0",
                        "primary-fixed-dim": "#1ad0eb",
                        "primary-dim": "#005865",
                        "primary-container": "#3adffa",
                        "inverse-surface": "#0b0f10",
                        "on-background": "#2c2f31",
                        "inverse-on-surface": "#9a9d9f",
                        "surface-container-highest": "#d9dde0",
                        "surface-bright": "#f5f7f9",
                        "secondary-container": "#d8e3fb",
                        "on-secondary": "#eff2ff"
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

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface font-body selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- TopAppBar -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
                            alt=""></a></span>
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
    <main class="max-w-7xl mx-auto px-6 pt-12 pb-32">
        <!-- Hero Editorial Header -->
        <div class="mb-16">
            <h2 class="font-headline text-5xl md:text-6xl font-bold text-on-surface leading-[1.1] mb-6 max-w-3xl">
                Accelerate your <span class="text-primary italic">Career Kinetic</span>.
            </h2>
            <p class="text-on-surface-variant text-lg max-w-2xl leading-relaxed">
                We've analyzed 42,000+ data points to benchmark your performance. Use the engines below to simulate your
                future and bridge the technical gap.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Portfolio Engine - Bento Large -->
            <section
                class="lg:col-span-8 bg-surface-container-lowest rounded-xl p-8 shadow-[0px_4px_20px_rgba(44,47,49,0.04)] overflow-hidden relative group">
                <div class="relative z-10">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-12">
                        <div>
                            <span class="text-primary text-[10px] font-bold uppercase tracking-widest mb-2 block">Career
                                Engine v2.0</span>
                            <h3 class="font-headline text-3xl font-semibold">Portfolio Engine</h3>
                        </div>
                        <div class="flex gap-3">
                            <button
                                class="px-6 py-3 bg-surface-container-high text-on-surface font-semibold rounded-xl hover:bg-surface-dim transition-colors active:scale-95 duration-200 flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
                                Edit Builder
                            </button>
                            <button
                                class="px-6 py-3 bg-gradient-to-br from-primary to-primary-container text-on-primary font-semibold rounded-xl shadow-lg hover:shadow-primary/20 transition-all active:scale-95 duration-200 flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm"
                                    data-icon="picture_as_pdf">picture_as_pdf</span>
                                Generate PDF
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 rounded-xl bg-surface-container-low">
                            <h4 class="font-headline font-bold text-on-surface mb-2">Live Status</h4>
                            <div class="flex items-center gap-2 text-tertiary font-medium mb-4">
                                <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                                Currently Deploying
                            </div>
                            <div
                                class="h-40 bg-surface-container-highest rounded-lg overflow-hidden border border-outline-variant/15">
                                <img alt="Dashboard preview"
                                    data-alt="A clean minimalist portfolio website layout showing code snippets and elegant typography for a developer resume"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCJWWYYJkyZe355ehRPQs8-gPeio4zSDZNHbol-43Y_OtR5AeqkN3ofhf_x6uTwlEs2knPkdnlSKg5U35lYncWi0QI0Rl3nUfGp-tK6XXPP4CnbgLj2fY623TQ2CgwFmyyeClW5bQtvlFjlYuneb7YgJVO55BqxcemDyhH_k8R751PNYaeAUeCbhDpEPWxhoVcTnKx5jgfmOdCtxyXPWoKp6_yo5KSbR4dF7z6VotznMDdDsWtM8FVvbuyU8egUhiLVijn99hlPrO9" />
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-4 bg-surface-container-low rounded-xl">
                                <div>
                                    <p class="text-xs text-outline font-medium">Views this week</p>
                                    <p class="text-xl font-headline font-bold">1,284</p>
                                </div>
                                <span class="text-primary material-symbols-outlined"
                                    data-icon="trending_up">trending_up</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-surface-container-low rounded-xl">
                                <div>
                                    <p class="text-xs text-outline font-medium">SEO Score</p>
                                    <p class="text-xl font-headline font-bold">98/100</p>
                                </div>
                                <span class="text-tertiary material-symbols-outlined"
                                    data-icon="rocket_launch">rocket_launch</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-surface-container-low rounded-xl">
                                <div>
                                    <p class="text-xs text-outline font-medium">Active Links</p>
                                    <p class="text-xl font-headline font-bold">12</p>
                                </div>
                                <span class="text-secondary material-symbols-outlined" data-icon="link">link</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Salary Simulator - Sidebar Style -->
            <section class="lg:col-span-4 bg-surface-container-low rounded-xl p-8 flex flex-col justify-between">
                <div>
                    <h3 class="font-headline text-2xl font-semibold mb-8">Salary Simulator</h3>
                    <div class="space-y-10">
                        <div class="space-y-4">
                            <div class="flex justify-between text-sm font-medium">
                                <label class="text-on-surface">Experience Level</label>
                                <span class="text-primary">6 Years</span>
                            </div>
                            <input
                                class="w-full h-2 bg-surface-container-high rounded-lg appearance-none cursor-pointer accent-primary"
                                max="20" min="0" type="range" value="6" />
                            <div
                                class="flex justify-between text-[10px] text-outline font-bold uppercase tracking-tighter">
                                <span>Junior</span>
                                <span>Senior</span>
                                <span>Staff</span>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <label class="text-sm font-medium block">Tech Focus</label>
                            <div class="flex flex-wrap gap-2">
                                <button
                                    class="px-4 py-2 rounded-full bg-white text-primary text-xs font-bold border border-primary/20">React</button>
                                <button
                                    class="px-4 py-2 rounded-full bg-primary text-on-primary text-xs font-bold">Node.js</button>
                                <button
                                    class="px-4 py-2 rounded-full bg-white text-on-surface-variant text-xs font-medium border border-outline-variant/20">AWS</button>
                                <button
                                    class="px-4 py-2 rounded-full bg-white text-on-surface-variant text-xs font-medium border border-outline-variant/20">Golang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="mt-12 p-6 rounded-xl bg-gradient-to-br from-on-surface to-on-surface-variant text-white shadow-xl shadow-on-surface/10">
                    <p class="text-[10px] uppercase tracking-[0.2em] font-bold opacity-60 mb-2">Estimated Market Rate
                    </p>
                    <div class="flex items-baseline gap-2">
                        <span class="text-3xl font-headline font-bold">$142k</span>
                        <span class="text-primary-fixed-dim text-sm">+12% vs last month</span>
                    </div>
                    <div class="mt-4 pt-4 border-t border-white/10 flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm" data-icon="info">info</span>
                        <p class="text-[10px] opacity-80">Based on SF/Remote average</p>
                    </div>
                </div>
            </section>
            <!-- Skills Gap Analysis -->
            <section
                class="lg:col-span-5 bg-surface-container-lowest rounded-xl p-8 shadow-[0px_4px_20px_rgba(44,47,49,0.04)]">
                <div class="flex justify-between items-end mb-8">
                    <h3 class="font-headline text-2xl font-semibold">Skills Gap Analysis</h3>
                    <span class="text-xs font-bold text-outline-variant">Update: 2h ago</span>
                </div>
                <div class="space-y-8">
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm mb-1">
                            <span class="font-bold">Distributed Systems</span>
                            <span class="text-tertiary font-bold">85%</span>
                        </div>
                        <div class="w-full h-3 bg-surface-container-low rounded-full overflow-hidden">
                            <div class="h-full bg-tertiary w-[85%] rounded-full"></div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm mb-1">
                            <span class="font-bold">React Architecture</span>
                            <span class="text-primary font-bold">92%</span>
                        </div>
                        <div class="w-full h-3 bg-surface-container-low rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-[92%] rounded-full"></div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm mb-1">
                            <span class="font-bold">TypeScript Core</span>
                            <span class="text-secondary font-bold">64%</span>
                        </div>
                        <div class="w-full h-3 bg-surface-container-low rounded-full overflow-hidden">
                            <div class="h-full bg-secondary w-[64%] rounded-full"></div>
                        </div>
                    </div>
                    <div class="pt-6 border-t border-outline-variant/10">
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            <span class="font-bold text-primary">Recommendation:</span> Focus on Advanced TypeScript
                            Patterns to unlock the Staff Engineer benchmark in your current market.
                        </p>
                    </div>
                </div>
            </section>
            <!-- Target Opportunities - Job Board -->
            <section
                class="lg:col-span-7 bg-surface-container-lowest rounded-xl p-8 shadow-[0px_4px_20px_rgba(44,47,49,0.04)]">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
                    <h3 class="font-headline text-2xl font-semibold">Target Opportunities</h3>
                    <div class="flex items-center gap-2">
                        <span
                            class="px-3 py-1 bg-primary-fixed/20 text-on-primary-fixed text-[10px] font-bold rounded-full uppercase tracking-wider">Top
                            Matches</span>
                    </div>
                </div>
                <div class="space-y-4">
                    <!-- Job Card 1 -->
                    <div
                        class="group flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-surface-container-low rounded-xl hover:bg-surface-container transition-colors border border-transparent hover:border-primary-fixed/30">
                        <div class="flex gap-4 items-center">
                            <div
                                class="w-12 h-12 bg-white rounded-lg flex items-center justify-center shadow-sm border border-outline-variant/10">
                                <span class="material-symbols-outlined text-primary" data-icon="cloud">cloud</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">Senior Infrastructure Engineer</h4>
                                <p class="text-xs text-on-surface-variant font-medium">Stellar Systems • Remote</p>
                            </div>
                        </div>
                        <div class="mt-4 sm:mt-0 flex items-center gap-4 w-full sm:w-auto">
                            <span class="text-sm font-bold text-on-surface">$160k - $190k</span>
                            <button
                                class="flex-1 sm:flex-none px-4 py-2 bg-on-surface text-white text-xs font-bold rounded-lg hover:bg-primary transition-colors active:scale-95 duration-200">
                                Quick Apply
                            </button>
                        </div>
                    </div>
                    <!-- Job Card 2 -->
                    <div
                        class="group flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-surface-container-low rounded-xl hover:bg-surface-container transition-colors border border-transparent hover:border-primary-fixed/30">
                        <div class="flex gap-4 items-center">
                            <div
                                class="w-12 h-12 bg-white rounded-lg flex items-center justify-center shadow-sm border border-outline-variant/10">
                                <span class="material-symbols-outlined text-tertiary"
                                    data-icon="data_object">data_object</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">Lead React Architect</h4>
                                <p class="text-xs text-on-surface-variant font-medium">Fintech Flow • New York</p>
                            </div>
                        </div>
                        <div class="mt-4 sm:mt-0 flex items-center gap-4 w-full sm:w-auto">
                            <span class="text-sm font-bold text-on-surface">$175k - $210k</span>
                            <button
                                class="flex-1 sm:flex-none px-4 py-2 bg-on-surface text-white text-xs font-bold rounded-lg hover:bg-primary transition-colors active:scale-95 duration-200">
                                Quick Apply
                            </button>
                        </div>
                    </div>
                    <!-- Job Card 3 -->
                    <div
                        class="group flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-surface-container-low rounded-xl hover:bg-surface-container transition-colors border border-transparent hover:border-primary-fixed/30">
                        <div class="flex gap-4 items-center">
                            <div
                                class="w-12 h-12 bg-white rounded-lg flex items-center justify-center shadow-sm border border-outline-variant/10">
                                <span class="material-symbols-outlined text-secondary"
                                    data-icon="security">security</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">Security Operations Dev</h4>
                                <p class="text-xs text-on-surface-variant font-medium">SecureNode • Hybrid</p>
                            </div>
                        </div>
                        <div class="mt-4 sm:mt-0 flex items-center gap-4 w-full sm:w-auto">
                            <span class="text-sm font-bold text-on-surface">$145k - $170k</span>
                            <button
                                class="flex-1 sm:flex-none px-4 py-2 bg-on-surface text-white text-xs font-bold rounded-lg hover:bg-primary transition-colors active:scale-95 duration-200">
                                Quick Apply
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- BottomNavBar - Mobile -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl shadow-[0_-4px_20px_rgba(0,0,0,0.03)] rounded-t-[1.5rem] border-t border-[#abadaf]/15">
        <a href="{{ route('courses') }}"
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90 duration-300">
            <span class="material-symbols-outlined mb-1" data-icon="auto_stories">auto_stories</span>
            <span class="font-label text-[10px] uppercase tracking-widest font-bold">Learn</span>
        </a>
        <a href="{{ route('CodeLab') }}"
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90 duration-300">
            <span class="material-symbols-outlined mb-1" data-icon="terminal">terminal</span>
            <span class="font-label text-[10px] uppercase tracking-widest font-bold">Build</span>
        </a>
        <a href="{{ route('career') }}"
            class="flex flex-col items-center justify-center bg-cyan-50 dark:bg-cyan-900/30 text-cyan-600 dark:text-cyan-300 rounded-2xl px-5 py-2 active:scale-90 transition-transform">
            <span class="material-symbols-outlined mb-1" data-icon="work">work</span>
            <span class="font-label text-[10px] uppercase tracking-widest font-bold">Jobs</span>
        </a>
        <a href="{{ route('profile') }}"
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90 duration-300">
            <span class="material-symbols-outlined mb-1" data-icon="person">person</span>
            <span class="font-label text-[10px] uppercase tracking-widest font-bold">Profile</span>
        </a>
    </nav>
    <!-- Floating UI Decorative Element (The Kinetic Anchor) -->
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