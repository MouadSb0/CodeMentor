<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Exercices | CodeMentor</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Space+Grotesk:wght@600;700&amp;display=swap"
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
                        "on-tertiary-fixed-variant": "#003874",
                        "inverse-on-surface": "#9a9d9f",
                        "on-error": "#ffefee",
                        "on-primary-fixed": "#00363e",
                        "surface": "#f5f7f9",
                        "tertiary": "#005ab3",
                        "secondary-dim": "#455064",
                        "primary": "#006573",
                        "on-surface-variant": "#595c5e",
                        "tertiary-container": "#84b1ff",
                        "on-tertiary-container": "#003064",
                        "on-primary": "#daf8ff",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-dim": "#004e9d",
                        "on-secondary-container": "#475266",
                        "on-background": "#2c2f31",
                        "primary-fixed-dim": "#1ad0eb",
                        "tertiary-fixed": "#84b1ff",
                        "background": "#f5f7f9",
                        "secondary-fixed-dim": "#cad5ed",
                        "on-error-container": "#570008",
                        "secondary": "#515c70",
                        "error": "#b31b25",
                        "on-primary-container": "#004b56",
                        "surface-tint": "#006573",
                        "secondary-container": "#d8e3fb",
                        "primary-fixed": "#3adffa",
                        "on-secondary": "#eff2ff",
                        "error-dim": "#9f0519",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "surface-container-high": "#dfe3e6",
                        "on-secondary-fixed": "#354053",
                        "on-tertiary": "#eff2ff",
                        "error-container": "#fb5151",
                        "primary-dim": "#005865",
                        "surface-container-highest": "#d9dde0",
                        "inverse-primary": "#3adffa",
                        "primary-container": "#3adffa",
                        "secondary-fixed": "#d8e3fb",
                        "inverse-surface": "#0b0f10",
                        "outline-variant": "#abadaf",
                        "on-primary-fixed-variant": "#005561",
                        "surface-container": "#e5e9eb",
                        "on-secondary-fixed-variant": "#515c70",
                        "surface-container-low": "#eef1f3",
                        "on-surface": "#2c2f31",
                        "surface-bright": "#f5f7f9",
                        "on-tertiary-fixed": "#001737",
                        "surface-dim": "#d0d5d8",
                        "surface-variant": "#d9dde0",
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
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7f9;
            color: #2c2f31;
        }

        .font-headline {
            font-family: 'Space Grotesk', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(24px);
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    <!-- SideNavBar Shell -->

    <!-- Main Content Canvas -->
    <main class="ml-40 min-h-screen">
        <!-- TopAppBar -->
        <header
            class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
            <div class="flex justify-between items-center px-2 w-full mx-auto">
                <div class="flex items-center w-[20%]">
                    <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]"
                                src="{{ asset('img/logo.png') }}" alt=""></a></span>
                </div>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors"
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
                        <button
                            class="flex items-center gap-1 text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-medium">
                            Careers
                            <span class="material-symbols-outlined text-[20px]">expand_more</span>
                        </button>
                        <div
                            class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                            <a href="{{ route('career') }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Careers</a>
                            <a href="{{ route('certifications') }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Certifications</a>
                        </div>
                    </div>
                    <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors text-slate-500 font-bold"
                        href="{{ route('community') }}">Community</a>
                    <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors text-slate-500 font-bold"
                        href="{{ route('contact') }}">Contact</a>

                </nav>
                <div class="flex items-center gap-4">
                    <div
                        class="hidden sm:flex items-center bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant/15">
                        <span class="material-symbols-outlined text-sm text-on-surface-variant mr-2">search</span>
                        <input class="bg-transparent border-none focus:ring-0 text-sm w-80"
                            placeholder="Search courses..." type="text" />
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
        <div class="px-12 py-8">
            <!-- Hero Dashboard Asymmetric Section -->
            <div class="grid grid-cols-12 gap-8 mb-12 items-end">
                <div class="col-span-8">
                    <h2 class="text-5xl font-bold font-headline tracking-tight text-on-surface mb-4">Master Your <span
                            class="text-primary italic">Kinetic</span> Potential.</h2>
                    <p class="text-on-surface-variant max-w-lg leading-relaxed">Choose from over 450+ interactive
                        challenges designed to bridge the gap between theory and surgical execution.</p>
                </div>
                <div class="col-span-4">
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-l-4 border-primary">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-[10px] uppercase tracking-widest text-outline font-bold">Daily Streak</p>
                                <p class="text-2xl font-headline font-bold text-on-surface">12 Days</p>
                            </div>
                            <div class="bg-primary-container/20 p-2 rounded-lg">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">local_fire_department</span>
                            </div>
                        </div>
                        <div class="w-full bg-surface-container-low h-1.5 rounded-full overflow-hidden">
                            <div class="w-3/4 h-full bg-primary"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Grid with Filters -->
            <div class="grid grid-cols-12 gap-12">
                <!-- Filters Sidebar -->
                <div class="col-span-3 space-y-10">
                    <section>
                        <h3 class="text-sm font-bold font-headline uppercase tracking-widest text-outline mb-6">
                            Categories</h3>
                        <div class="flex flex-col gap-2">
                            <label
                                class="flex items-center gap-3 group cursor-pointer p-2 hover:bg-surface-container-low rounded-lg transition-colors">
                                <input checked="" class="rounded border-outline text-primary focus:ring-primary w-4 h-4"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-on-surface group-hover:text-primary transition-colors">Frontend
                                    Systems</span>
                            </label>
                            <label
                                class="flex items-center gap-3 group cursor-pointer p-2 hover:bg-surface-container-low rounded-lg transition-colors">
                                <input class="rounded border-outline text-primary focus:ring-primary w-4 h-4"
                                    type="checkbox" />
                                <span class="text-sm text-on-surface group-hover:text-primary transition-colors">Backend
                                    Infrastructure</span>
                            </label>
                            <label
                                class="flex items-center gap-3 group cursor-pointer p-2 hover:bg-surface-container-low rounded-lg transition-colors">
                                <input class="rounded border-outline text-primary focus:ring-primary w-4 h-4"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-on-surface group-hover:text-primary transition-colors">Algorithms
                                    &amp; Logic</span>
                            </label>
                            <label
                                class="flex items-center gap-3 group cursor-pointer p-2 hover:bg-surface-container-low rounded-lg transition-colors">
                                <input class="rounded border-outline text-primary focus:ring-primary w-4 h-4"
                                    type="checkbox" />
                                <span class="text-sm text-on-surface group-hover:text-primary transition-colors">DevOps
                                    &amp; Cloud</span>
                            </label>
                        </div>
                    </section>
                    <section>
                        <h3 class="text-sm font-bold font-headline uppercase tracking-widest text-outline mb-6">
                            Difficulty</h3>
                        <div class="flex flex-wrap gap-2">
                            <button
                                class="px-4 py-2 bg-surface-container-lowest text-xs font-bold rounded-full border border-outline-variant/15 hover:bg-primary-container/20 hover:text-primary transition-all">Easy</button>
                            <button
                                class="px-4 py-2 bg-primary-container text-on-primary-container text-xs font-bold rounded-full border border-primary/20">Medium</button>
                            <button
                                class="px-4 py-2 bg-surface-container-lowest text-xs font-bold rounded-full border border-outline-variant/15 hover:bg-primary-container/20 hover:text-primary transition-all">Hard</button>
                        </div>
                    </section>
                    <section class="bg-surface-container-low p-6 rounded-xl">
                        <h3 class="text-sm font-bold font-headline text-on-surface mb-2">Weekly Goal</h3>
                        <p class="text-xs text-on-surface-variant mb-4">You've completed 8 of your 10 target exercises
                            this week.</p>
                        <div class="flex gap-1 mb-4">
                            <div class="h-1 flex-1 bg-primary rounded-full"></div>
                            <div class="h-1 flex-1 bg-primary rounded-full"></div>
                            <div class="h-1 flex-1 bg-primary rounded-full"></div>
                            <div class="h-1 flex-1 bg-primary rounded-full"></div>
                            <div class="h-1 flex-1 bg-primary rounded-full"></div>
                            <div class="h-1 flex-1 bg-primary rounded-full"></div>
                            <div class="h-1 flex-1 bg-primary rounded-full"></div>
                            <div class="h-1 flex-1 bg-primary rounded-full"></div>
                            <div class="h-1 flex-1 bg-surface-container-highest rounded-full"></div>
                            <div class="h-1 flex-1 bg-surface-container-highest rounded-full"></div>
                        </div>
                        <button
                            class="text-[10px] font-bold text-primary uppercase tracking-tighter flex items-center gap-1">
                            Adjust Goal <span class="material-symbols-outlined text-xs">chevron_right</span>
                        </button>
                    </section>
                </div>
                <!-- Bento Grid Exercises -->
                <div class="col-span-9">
                    <div class="grid grid-cols-2 gap-6">
                        <!-- Card 1 (Large Feature) -->
                        <div
                            class="col-span-2 group relative overflow-hidden bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-xl transition-all duration-300">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div class="p-8 flex items-center justify-between">
                                <div class="max-w-md">
                                    <span
                                        class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-bold uppercase tracking-widest rounded-full">Premium
                                        Access</span>
                                    <h4 class="text-2xl font-headline font-bold text-on-surface mt-4 mb-2">
                                        Micro-Frontend Orchestration</h4>
                                    <p class="text-sm text-on-surface-variant leading-relaxed">Learn to architect
                                        scalable web apps using module federation and shared state across distributed
                                        teams.</p>
                                    <div class="flex items-center gap-4 mt-6">
                                        <button
                                            class="px-6 py-2.5 bg-on-background text-surface-container-lowest font-headline font-bold rounded-lg text-sm active:scale-95 transition-transform">Start
                                            Lab</button>
                                        <div class="flex items-center gap-1 text-outline">
                                            <span class="material-symbols-outlined text-sm">schedule</span>
                                            <span class="text-xs font-medium">45 mins</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="w-48 h-48 bg-surface-container-low rounded-2xl flex items-center justify-center rotate-3 group-hover:rotate-6 transition-transform">
                                    <span class="material-symbols-outlined text-6xl text-primary-fixed-dim"
                                        style="font-variation-settings: 'wght' 200;">layers</span>
                                </div>
                            </div>
                        </div>
                        @foreach($exercices as $ex)
                        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm hover:translate-y-[-4px] transition-all flex flex-col">
                            <div class="flex justify-between items-start mb-6">
                                <div class="w-12 h-12 bg-primary-container/30 rounded-lg flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">
                                        @if(in_array('React', $ex->tech_stack ?? [])) webhook 
                                        @elseif(in_array('JS', $ex->tech_stack ?? [])) code_blocks
                                        @else terminal
                                        @endif
                                    </span>
                                </div>
                                <span class="text-[10px] font-bold py-1 px-2 bg-surface-container-low rounded text-on-surface-variant uppercase">{{ $ex->difficulty }}</span>
                            </div>
                            <h4 class="font-headline font-bold text-lg mb-2">{{ $ex->title }}</h4>
                            <p class="text-xs text-on-surface-variant mb-6 line-clamp-2">{{ $ex->description }}</p>
                            <div class="mt-auto pt-4 flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-xs text-outline">schedule</span>
                                    <span class="text-[10px] font-bold text-outline">{{ $ex->estimated_time }} MIN</span>
                                </div>
                                <a href="{{ route('single_exercice', $ex->id) }}"
                                    class="p-2 bg-surface-container-low rounded-full text-primary hover:bg-primary-container transition-colors">
                                    <span class="material-symbols-outlined">play_arrow</span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination / Load More (Editorial Style) -->
                    <div class="mt-12 flex justify-center">
                        <button class="group flex flex-col items-center gap-2">
                            <span
                                class="w-12 h-12 rounded-full border-2 border-outline-variant/30 flex items-center justify-center group-hover:border-primary group-hover:text-primary transition-all">
                                <span class="material-symbols-outlined">expand_more</span>
                            </span>
                            <span
                                class="text-[10px] font-bold font-headline uppercase tracking-widest text-outline group-hover:text-primary transition-colors">Discover
                                More Modules</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress Mini-Dash (Fixed Footer Style) -->
        <div class="fixed bottom-8 right-8 z-50">
            <div class="glass-panel p-4 rounded-2xl shadow-2xl flex items-center gap-8 border border-white/40">
                <div class="flex flex-col items-center border-r border-outline-variant/30 pr-8">
                    <p class="text-[10px] font-bold font-headline text-outline uppercase">Completed</p>
                    <p class="text-xl font-bold text-on-surface">34</p>
                </div>
                <div class="flex flex-col items-center border-r border-outline-variant/30 pr-8">
                    <p class="text-[10px] font-bold font-headline text-outline uppercase">Points</p>
                    <div class="flex items-center gap-1 text-primary">
                        <span class="material-symbols-outlined text-sm"
                            style="font-variation-settings: 'FILL' 1;">stars</span>
                        <p class="text-xl font-bold">4,820</p>
                    </div>
                </div>
                <button
                    class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center text-on-primary shadow-lg shadow-primary/30 active:scale-90 transition-transform">
                    <span class="material-symbols-outlined">analytics</span>
                </button>
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
@include('partials.ai_chat')
</body>

</html>