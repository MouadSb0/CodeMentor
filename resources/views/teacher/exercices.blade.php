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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

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
        <!-- TopAppBar Execution -->
        <header
            class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
            <div class="flex justify-between items-center px-2 w-full mx-auto">
                <div class="flex items-center w-[20%]">
                    <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]"
                                src="{{ asset('img/logo.png') }}" alt=""></a></span>
                </div>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="flex items-center gap-1 text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-medium"
                        href="{{ route('teacher.dashboard') }}">Dashboard</a>
                    <div class="relative group py-4">
                        <button class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors">
                            Learn
                            <span class="material-symbols-outlined text-[20px]">expand_more</span>
                        </button>
                        <div
                            class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                            <a href="{{ route('teacher.courses') }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Courses</a>
                            <a href="{{ route('teacher.exercices') }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Exercices</a>
                            <a href="{{ route('CodeLab') }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Playground</a>
                            <a href="{{ route('teacher.quizzes') }}"
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
                            <a href="{{ route('teacher.careers') }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Management</a>
                            <a href="{{ route('career') }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Career
                                Center</a>
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
                    <div class="relative" x-data="{ showNotifications: false }">
                        <button @click="showNotifications = !showNotifications" @click.away="showNotifications = false"
                            class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#eef1f3] transition-colors relative">
                            <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                            <!-- Notification Badge -->
                            <span
                                class="absolute top-2 right-2.5 w-2 h-2 bg-error rounded-full border border-white animate-pulse"></span>
                        </button>

                        <!-- Notifications Dropdown -->
                        <div x-show="showNotifications" x-transition.opacity x-transition:enter.duration.200ms
                            x-transition:leave.duration.150ms x-cloak
                            class="absolute top-14 right-0 w-80 sm:w-96 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 z-[100] overflow-hidden flex flex-col">

                            <!-- Header -->
                            <div
                                class="p-4 border-b border-outline-variant/10 flex justify-between items-center bg-surface-container-lowest">
                                <h3 class="font-bold text-on-surface text-sm">Notifications</h3>
                                <span
                                    class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-0.5 rounded-full">2
                                    New</span>
                            </div>

                            <!-- List -->
                            <div class="max-h-80 overflow-y-auto">
                                <!-- Unread Item 1 -->
                                <div
                                    class="p-4 border-b border-outline-variant/10 hover:bg-surface-container-lowest transition-colors cursor-pointer bg-primary/5">
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 mt-1">
                                            <span
                                                class="material-symbols-outlined text-on-primary text-sm">school</span>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm text-on-surface font-medium leading-tight">Course
                                                completed:
                                                Advanced React Patterns</p>
                                            <p class="text-[11px] text-on-surface-variant mt-1">2 hours ago</p>
                                        </div>
                                        <div class="w-2 h-2 bg-primary rounded-full mt-1.5 flex-shrink-0"></div>
                                    </div>
                                </div>

                                <!-- Unread Item 2 -->
                                <div
                                    class="p-4 border-b border-outline-variant/10 hover:bg-surface-container-lowest transition-colors cursor-pointer bg-primary/5">
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center flex-shrink-0 mt-1">
                                            <span
                                                class="material-symbols-outlined text-on-secondary-container text-sm">forum</span>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm text-on-surface font-medium leading-tight">Alex replied to
                                                your discussion in "Next.js routing"</p>
                                            <p class="text-[11px] text-on-surface-variant mt-1">5 hours ago</p>
                                        </div>
                                        <div class="w-2 h-2 bg-primary rounded-full mt-1.5 flex-shrink-0"></div>
                                    </div>
                                </div>

                                <!-- Read Item -->
                                <div class="p-4 hover:bg-surface-container-lowest transition-colors cursor-pointer">
                                    <div class="flex items-start gap-3 opacity-70">
                                        <div
                                            class="w-8 h-8 rounded-full bg-tertiary-container flex items-center justify-center flex-shrink-0 mt-1">
                                            <span
                                                class="material-symbols-outlined text-on-tertiary-container text-sm">military_tech</span>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm text-on-surface font-medium leading-tight">You earned the
                                                "Fast Learner" badge!</p>
                                            <p class="text-[11px] text-on-surface-variant mt-1">1 day ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Actions -->
                            <div class="p-2 border-t border-outline-variant/10 bg-surface-container-lowest">
                                <button
                                    class="w-full py-2.5 text-sm text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]">done_all</span>
                                    Mark all as read
                                </button>
                            </div>
                        </div>
                    </div>
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
            @if (session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition.duration.500ms
                    class="mb-6 flex items-center gap-3 bg-green-500/10 border border-green-500/20 text-green-600 px-6 py-4 rounded-xl">
                    <span class="material-symbols-outlined">check_circle</span>
                    <p class="text-sm font-bold">{{ session('success') }}</p>
                    <button @click="show = false" class="ml-auto">
                        <span class="material-symbols-outlined text-sm">close</span>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                <div
                    class="mb-6 bg-error/10 border border-error/20 text-error px-6 py-4 rounded-xl animate-in fade-in slide-in-from-top-4 duration-300">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="material-symbols-outlined">error</span>
                        <p class="text-sm font-bold">Please fix the following errors:</p>
                    </div>
                    <ul class="list-disc list-inside text-xs space-y-1 ml-9">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Hero Dashboard Asymmetric Section -->
            <div class="grid grid-cols-12 gap-8 mb-12 items-end">
                <div class="col-span-8">
                    <h2 class="text-5xl font-bold font-headline tracking-tight text-on-surface mb-4">Master Your <span
                            class="text-primary italic">Kinetic</span> Potential.</h2>
                    <p class="text-on-surface-variant max-w-lg leading-relaxed">Choose from over 450+ interactive
                        challenges designed to bridge the gap between theory and surgical execution.</p>
                </div>
                <div class="col-span-4">
                    <button
                        class="bg-surface-container-lowest text-on-surface px-6 py-3 rounded-xl font-bold text-sm shadow-sm hover:bg-surface-container-high transition-colors">
                        Send Announcement
                    </button>
                    <button id="new_exercice_btn"
                        class="bg-gradient-to-br from-primary to-primary-container text-white px-6 py-3 rounded-xl font-bold text-sm shadow-lg shadow-cyan-900/10 scale-100 hover:scale-[1.02] transition-transform">
                        Create New Exercice
                    </button>
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
                                        @if($exercises->isNotEmpty())
                                        <a href="{{ route('single_exercice', $exercises->first()->id) }}"
                                            class="px-6 py-2.5 bg-on-background text-surface-container-lowest font-headline font-bold rounded-lg text-sm active:scale-95 transition-transform inline-block">Start
                                            Lab</a>
                                        @else
                                        <button disabled
                                            class="px-6 py-2.5 bg-slate-300 text-slate-500 font-headline font-bold rounded-lg text-sm cursor-not-allowed">Start
                                            Lab</button>
                                        @endif
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

                        @foreach ($exercises as $exercise)
                            <div class="exercice-card bg-surface-container-lowest p-6 rounded-xl shadow-sm hover:translate-y-[-4px] transition-all flex flex-col h-full relative">
                                <div class="flex justify-between items-start mb-6">
                                    <div
                                        class="w-12 h-12 bg-secondary-container/30 rounded-lg flex items-center justify-center">
                                        <span class="material-symbols-outlined text-secondary">
                                            @php
                                                $icon = match ($exercise->difficulty) {
                                                    'Beginner' => 'child_care',
                                                    'Intermediate' => 'code_blocks',
                                                    'Advanced' => 'webhook',
                                                    'Expert' => 'security',
                                                    default => 'terminal',
                                                };
                                            @endphp
                                            {{ $icon }}
                                        </span>
                                    </div>
                                    <span
                                        class="text-[10px] font-bold py-1 px-2 bg-surface-container-low rounded text-on-surface-variant uppercase tracking-wider">
                                        {{ $exercise->difficulty }}
                                    </span>
                                </div>
                                <h4 class="font-headline font-bold text-lg mb-2">{{ $exercise->title }}</h4>
                                <p class="text-xs text-on-surface-variant mb-6 line-clamp-2">
                                    {{ $exercise->description }}
                                </p>
                                <div class="flex flex-wrap gap-1 mb-6">
                                    @foreach ($exercise->tech_stack as $tech)
                                        <span
                                            class="text-[9px] px-2 py-0.5 bg-surface-container-low rounded text-outline font-medium">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                                <div
                                    class="flex items-center justify-between mt-auto pt-4 border-t border-outline-variant/5">
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-sm text-outline">schedule</span>
                                        <span class="text-[10px] font-bold text-outline">{{ $exercise->estimated_time }}
                                            min</span>
                                    </div>
                                    <a href="{{ route('single_exercice', $exercise->id) }}"
                                        class="relative z-20 p-2 bg-surface-container-low rounded-full text-primary hover:bg-primary-container transition-colors flex items-center justify-center">
                                        <span class="material-symbols-outlined pointer-events-none">play_arrow</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        @if ($exercises->isEmpty())
                            <div class="col-span-2 py-20 flex flex-col items-center justify-center text-center">
                                <div
                                    class="w-20 h-20 bg-surface-container-low rounded-full flex items-center justify-center mb-4">
                                    <span class="material-symbols-outlined text-4xl text-outline-variant">inventory_2</span>
                                </div>
                                <h3 class="text-xl font-headline font-bold text-on-surface">No Exercises Yet</h3>
                                <p class="text-sm text-on-surface-variant max-w-xs mt-2">
                                    Start by creating your first interactive coding challenge for your students.
                                </p>
                            </div>
                        @endif
                    </div>
                    <!-- Pagination / Load More (Editorial Style) -->
                    <div class="mt-12">
                        {{ $exercises->links() }}
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
    <!-- Modal Overlay -->
    <div class="fixed inset-0 hidden z-50 flex items-center justify-center bg-on-surface/20 backdrop-blur-md px-6"
        id="modal_exercice">
        <!-- Centered Modal - Adjusted max-width and vertical scale -->
        <form action="{{ route('teacher.exercices.store') }}" method="POST"
            class="bg-surface-container-lowest w-full max-w-4xl max-h-[90vh] overflow-hidden rounded-xl shadow-[0px_10px_40px_rgba(0,101,115,0.1)] flex flex-col relative">
            @csrf
            <!-- Modal Header - Reduced padding -->
            <div class="p-6 pb-2 flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-semibold tracking-tight text-on-surface font-headline">Create <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container"></span>New
                        Exercise</span>
                    </h2>
                    <p class="text-sm text-on-surface-variant mt-0.5">Design a new coding challenge for your students.
                    </p>
                </div>
                <button type="button" id="close_exercice_modal"
                    class="p-2 hover:bg-surface-container-low rounded-full transition-colors">
                    <span class="material-symbols-outlined text-on-surface-variant">close</span>
                </button>
            </div>
            <!-- Modal Body (Scrollable) - Reduced vertical spacing -->
            <div class="px-6 pb-6 flex-grow overflow-y-auto custom-scrollbar space-y-4">
                <!-- Field: Title -->
                <div class="space-y-1.5">
                    <label
                        class="text-[10px] font-semibold uppercase tracking-wider text-on-surface-variant font-label">Exercise
                        Title</label>
                    <input name="title" required
                        class="w-full bg-surface-container-low border-transparent rounded-xl p-3 text-on-surface placeholder-on-surface-variant/50 focus:ring-primary focus:bg-surface-container-lowest transition-all"
                        placeholder="e.g., Responsive Grid Mastery" type="text" />
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Field: Difficulty -->
                    <div class="space-y-1.5">
                        <label
                            class="text-[10px] font-semibold uppercase tracking-wider text-on-surface-variant font-label">Difficulty
                            Level</label>
                        <div class="relative">
                            <select name="difficulty" required
                                class="w-full appearance-none bg-surface-container-low border-transparent rounded-xl p-3 text-on-surface focus:ring-primary focus:bg-surface-container-lowest transition-all cursor-pointer">
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Advanced">Advanced</option>
                                <option value="Expert">Expert</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                        </div>
                    </div>
                    <!-- Field: Estimated Time -->
                    <div class="space-y-1.5">
                        <label
                            class="text-[10px] font-semibold uppercase tracking-wider text-on-surface-variant font-label">Time
                            Est. (min)</label>
                        <input name="estimated_time" required
                            class="w-full bg-surface-container-low border-transparent rounded-xl p-3 text-on-surface focus:ring-primary transition-all"
                            placeholder="30" type="number" />
                    </div>
                </div>
                <!-- Field: Tech Stack Chips -->
                <div class="space-y-2">
                    <label
                        class="text-[10px] font-semibold uppercase tracking-wider text-on-surface-variant font-label">Tech
                        Stack</label>
                    <div class="flex flex-wrap gap-2" id="tech_chips_container">
                        <input type="hidden" name="tech_stack[]" value="React">
                        <input type="hidden" name="tech_stack[]" value="Tailwind CSS">
                        <input type="hidden" name="tech_stack[]" value="TypeScript">
                        <span
                            class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-xs font-bold rounded-full flex items-center gap-1.5 shadow-sm">
                            React <span class="material-symbols-outlined text-[14px] cursor-pointer"
                                onclick="this.parentElement.remove(); document.querySelector('input[value=\'React\']').remove();">close</span>
                        </span>
                        <span
                            class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-xs font-bold rounded-full flex items-center gap-1.5 shadow-sm">
                            Tailwind CSS <span class="material-symbols-outlined text-[14px] cursor-pointer"
                                onclick="this.parentElement.remove(); document.querySelector('input[value=\'Tailwind CSS\']').remove();">close</span>
                        </span>
                        <span
                            class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-xs font-bold rounded-full flex items-center gap-1.5 shadow-sm">
                            TypeScript <span class="material-symbols-outlined text-[14px] cursor-pointer"
                                onclick="this.parentElement.remove(); document.querySelector('input[value=\'TypeScript\']').remove();">close</span>
                        </span>
                        <div class="relative inline-flex items-center">
                            <input type="text" id="add_tech_input"
                                class="bg-surface-container-low border-none rounded-full px-4 py-1 text-xs w-24 focus:w-32 focus:ring-1 focus:ring-primary transition-all"
                                placeholder="+ Add Tech">
                        </div>
                    </div>
                </div>
                <!-- Field: Description - Reduced rows -->
                <div class="space-y-1.5">
                    <label
                        class="text-[10px] font-semibold uppercase tracking-wider text-on-surface-variant font-label">Description</label>
                    <textarea name="description" required
                        class="w-full bg-surface-container-low border-transparent rounded-xl p-3 text-on-surface focus:ring-primary focus:bg-surface-container-lowest transition-all resize-none"
                        placeholder="Provide context and requirements for the exercise..." rows="2"></textarea>
                </div>
                <!-- Field: Multi-File Starter Code Editor -->
                <div x-data="{ 
                    files: [
                        { name: 'index.html', content: '' },
                        { name: 'styles.css', content: '' },
                        { name: 'main.js', content: '' }
                    ],
                    activeIndex: 0,
                    addFile() {
                        const name = prompt('File name:', 'new_file.js');
                        if (name) {
                            this.files.push({ name: name, content: '' });
                            this.activeIndex = this.files.length - 1;
                        }
                    },
                    deleteFile(index) {
                        if (this.files.length > 1) {
                            this.files.splice(index, 1);
                            if (this.activeIndex >= this.files.length) this.activeIndex = this.files.length - 1;
                        }
                    },
                    renameFile(index) {
                        const newName = prompt('New name:', this.files[index].name);
                        if (newName) this.files[index].name = newName;
                    }
                }" class="space-y-3">
                    <div class="flex justify-between items-center">
                        <label class="text-[10px] font-semibold uppercase tracking-wider text-on-surface-variant font-label">Starter Code</label>
                        <div class="flex items-center gap-1 bg-surface-container-low rounded-lg p-1 overflow-x-auto no-scrollbar max-w-[70%]">
                            <template x-for="(file, index) in files" :key="index">
                                <button type="button" 
                                    @click="activeIndex = index" 
                                    @dblclick="renameFile(index)"
                                    :class="activeIndex === index ? 'bg-white shadow-sm text-primary' : 'text-on-surface-variant'" 
                                    class="px-3 py-1 rounded-md text-[10px] font-bold transition-all whitespace-nowrap flex items-center gap-2 group">
                                    <span x-text="file.name"></span>
                                    <span @click.stop="deleteFile(index)" class="material-symbols-outlined text-[12px] opacity-0 group-hover:opacity-100 hover:text-red-500 transition-opacity">close</span>
                                </button>
                            </template>
                            <button type="button" @click="addFile()" class="p-1 text-primary hover:bg-white rounded transition-all">
                                <span class="material-symbols-outlined text-sm">add</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="relative group/editor">
                        <textarea x-model="files[activeIndex].content"
                            class="w-full bg-[#1e293b] rounded-xl p-6 font-mono text-sm text-white/90 border border-outline-variant/10 focus:ring-2 focus:ring-primary/50 transition-all resize-none min-h-[200px] custom-scrollbar"
                            :placeholder="'Enter code for ' + files[activeIndex].name + '...'"></textarea>
                        
                        <!-- Hidden Input for Form Submission -->
                        <input type="hidden" name="files_json" :value="JSON.stringify(files)">

                        <div class="absolute top-4 right-4 flex gap-2">
                            <button type="button" onclick="document.getElementById('file_upload_starter').click()"
                                class="flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white/70 hover:text-white px-3 py-1.5 rounded-lg text-[10px] font-bold transition-all backdrop-blur-sm border border-white/10">
                                <span class="material-symbols-outlined text-sm">upload_file</span>
                                Upload
                            </button>
                            <input type="file" id="file_upload_starter" class="hidden"
                                accept=".js,.jsx,.ts,.tsx,.html,.css" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Footer Actions - Reduced padding -->
            <div class="p-6 pt-3 bg-surface-container-low/50 flex justify-end gap-4 border-t border-outline-variant/10">
                <button type="button" id="cancel_exercice_modal"
                    class="px-5 py-2.5 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-colors duration-200">
                    Cancel
                </button>
                <button type="submit"
                    class="px-8 py-2.5 text-sm font-bold text-on-primary rounded-xl bg-gradient-to-br from-primary to-primary-container shadow-md hover:scale-[1.02] active:scale-[0.98] transition-all">
                    Publish Exercise
                </button>
            </div>
        </form>
    </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modalExercice = document.getElementById('modal_exercice');
            const newExerciceBtn = document.getElementById('new_exercice_btn');
            const closeExerciceBtn = document.getElementById('close_exercice_modal');
            const cancelExerciceBtn = document.getElementById('cancel_exercice_modal');

            const showModal = () => {
                modalExercice.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            };

            const hideModal = () => {
                modalExercice.classList.add('hidden');
                document.body.style.overflow = '';
            };

            if (newExerciceBtn) newExerciceBtn.addEventListener('click', showModal);
            if (closeExerciceBtn) closeExerciceBtn.addEventListener('click', hideModal);
            if (cancelExerciceBtn) cancelExerciceBtn.addEventListener('click', hideModal);

            // Starter Code File Upload Handler
            const fileUploadStarter = document.getElementById('file_upload_starter');
            const starterCodeTextarea = document.getElementById('starter_code');

            if (fileUploadStarter && starterCodeTextarea) {
                fileUploadStarter.addEventListener('change', function (e) {
                    const file = e.target.files[0];
                    if (!file) return;

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        starterCodeTextarea.value = e.target.result;
                    };
                    reader.readAsText(file);
                });
            }

            // Close on click outside
            modalExercice.addEventListener('click', (e) => {
                if (e.target === modalExercice) hideModal();
            });

            // Auto-dismiss success alert
            const successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.classList.add('opacity-0', '-translate-y-4', 'transition-all', 'duration-500');
                    setTimeout(() => successAlert.remove(), 500);
                }, 5000);
            }

            // Add Tech Stack Management
            const addTechInput = document.getElementById('add_tech_input');
            const techChipsContainer = document.getElementById('tech_chips_container');

            if (addTechInput && techChipsContainer) {
                addTechInput.addEventListener('keypress', function (e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        const val = this.value.trim();
                        if (val) {
                            const hiddenInput = document.createElement('input');
                            hiddenInput.type = 'hidden';
                            hiddenInput.name = 'tech_stack[]';
                            hiddenInput.value = val;
                            techChipsContainer.appendChild(hiddenInput);

                            const chip = document.createElement('span');
                            chip.className =
                                'px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-xs font-bold rounded-full flex items-center gap-1.5 shadow-sm';
                            chip.innerHTML = `${val} <span class="material-symbols-outlined text-[14px] cursor-pointer" onclick="this.parentElement.remove(); document.querySelector('input[value=\\'${val.replace(/'/g, "\\'")}\\']').remove();">close</span>`;
                            techChipsContainer.insertBefore(chip, addTechInput.parentElement);
                            this.value = '';
                        }
                    }
                });
            }
        });
    </script>
@include('partials.ai_chat')
</body>

</html>