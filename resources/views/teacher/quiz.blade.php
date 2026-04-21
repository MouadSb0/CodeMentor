<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Quiz | CodeMentor</title>
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
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        };
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        body {
            background-color: #f5f7f9;
            color: #2c2f31;
            font-family: 'Inter', sans-serif;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface min-h-screen flex flex-col">
    <!-- TopAppBar Execution -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
                            alt=""></a></span>
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
                    <input class="bg-transparent border-none focus:ring-0 text-sm w-80" placeholder="Search courses..."
                        type="text" />
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
                            <span class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-0.5 rounded-full">2
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
                                        <span class="material-symbols-outlined text-on-primary text-sm">school</span>
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
                <div
                    class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center overflow-hidden border-2 border-white shadow-sm">
                    <a href="{{ url('/profile') }}">
                        <img alt="User profile avatar"
                            data-alt="Professional developer profile portrait with clean lighting and neutral studio background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9QfpggW4PCYoxv98_vXHeU9Ub5yVEJssOTWCd2qq8QX2y2KoLdoEQdL8HrRlO10bHQXGpRVyPE_D-FMLB998YaSOv7N_QAcAa8yMpq1wJPpDGf7qY8nPaZ6A2mmHFvVJC2JePX-IbespJz0cLoyOaYLYgVT0gMIVsCdIXC-9HHYjCrOIQG44l5zIXE3575lnynz3qooMCzi8GeLNjMkWiszET6TnsVI6UDJKUAXlJm9c03hNXOyHPKq9NB_lqQOcsM5QK9HhO1z7h" />
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="flex-grow max-w-7xl mx-auto w-full px-6 pt-8 pb-24 gap-8">


        <section class="flex-grow">

            <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <span
                        class="inline-block px-3 py-1 bg-tertiary-container/30 text-tertiary font-medium text-[10px] rounded-full uppercase tracking-widest mb-3">React
                        Advanced Patterns</span>
                    <h2 class="font-['Space_Grotesk'] text-3xl font-bold tracking-tight text-on-background">Recents</h2>
                </div>
                <div class="col-span-4">
                    <button
                        class="bg-white text-on-surface px-6 py-3 rounded-xl font-bold text-sm shadow-sm hover:bg-surface-container-high transition-colors">
                        Send Announcement
                    </button>
                    <button id="new_quiz_btn"
                        class="bg-gradient-to-br from-primary to-primary-container text-white px-6 py-3 rounded-xl font-bold text-sm shadow-lg hover:scale-[1.02] transition-all">
                        Create New Quiz
                    </button>
                </div>
            </div>
            <!-- Recents Section -->
            <div class="space-y-6 mb-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($recentQuizzes as $quiz)
                        <div id="exercice"
                            class="group relative bg-surface-container-lowest rounded-xl p-6 shadow-sm border border-outline-variant/10 hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <div
                                    class="w-10 h-10 bg-primary/10 text-primary rounded-lg flex items-center justify-center">
                                    <span class="material-symbols-outlined">quiz</span>
                                </div>
                                <span
                                    class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant bg-surface-container-high px-2 py-1 rounded">
                                    {{ count($quiz->questions) }} Questions
                                </span>
                            </div>
                            <h4 class="font-headline font-bold text-on-surface mb-2 line-clamp-1">{{ $quiz->title }}</h4>
                            <p class="text-xs text-on-surface-variant mb-4">{{ $quiz->course_name }}</p>
                            <div class="flex items-center justify-between mt-4 pt-4 border-t border-outline-variant/5">
                                <span class="text-[10px] font-medium text-on-surface-variant flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">timer</span>
                                    {{ $quiz->time_limit }} min
                                </span>
                                <div class="flex items-center gap-2">
                                    <button class="text-primary text-xs font-bold hover:underline">Manage Quiz</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div
                            class="col-span-full py-12 flex flex-col items-center justify-center bg-surface-container-low/30 rounded-2xl border-2 border-dashed border-outline-variant/20">
                            <span class="material-symbols-outlined text-4xl text-on-surface-variant/30 mb-4">history</span>
                            <p class="text-sm font-medium text-on-surface-variant">No recent quizzes found.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Discover Quizzes Section -->
            <div class="space-y-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="font-['Space_Grotesk'] text-2xl font-bold tracking-tight text-on-background">Discover
                        Quizzes</h2>
                    <button class="text-primary text-sm font-bold flex items-center gap-2 hover:gap-3 transition-all">
                        Show list of all quizzes
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($randomQuizzes as $quiz)
                        <div id="exercice"
                            class="group bg-surface-container-low/50 rounded-xl p-6 border border-outline-variant/10 hover:border-primary/30 transition-all duration-300">
                            <div class="flex items-center gap-3 mb-4">
                                <div
                                    class="w-8 h-8 bg-surface-container-high rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary text-sm">extension</span>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">{{ $quiz->course_name }}</span>
                            </div>
                            <h4 class="font-headline font-bold text-on-surface mb-4 line-clamp-2 min-h-[40px]">
                                {{ $quiz->title }}
                            </h4>
                            <div class="flex items-center justify-between">
                                <div class="flex -space-x-2">
                                    <div
                                        class="w-6 h-6 rounded-full bg-surface-container-high border-2 border-surface flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[10px]">person</span>
                                    </div>
                                    <div
                                        class="w-6 h-6 rounded-full bg-primary/10 border-2 border-surface flex items-center justify-center">
                                        <span class="text-[8px] font-bold text-primary">+</span>
                                    </div>
                                </div>
                                <a href="{{ route('single_quiz', $quiz->id) }}"
                                    class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-lg shadow-primary/20 scale-90 group-hover:scale-100 transition-transform">
                                    <span class="material-symbols-outlined text-sm">play_arrow</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <!-- Bento Contextual Module -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 bg-surface-container-low rounded-xl p-6 relative overflow-hidden">
                    <div class="relative z-10">
                        <h4 class="font-['Space_Grotesk'] font-bold text-lg mb-2">Need a refresher?</h4>
                        <p class="text-sm text-on-surface-variant max-w-sm">Explore the documentation on Hook Life
                            Cycles to master asynchronous side-effects in functional components.</p>
                        <button class="mt-4 text-primary font-semibold text-sm flex items-center gap-2">
                            View Documentation <span class="material-symbols-outlined text-sm"
                                data-icon="arrow_forward">arrow_forward</span>
                        </button>
                    </div>
                    <div class="absolute -right-12 -bottom-12 w-48 h-48 opacity-10">
                        <span class="material-symbols-outlined text-[160px]"
                            data-icon="auto_awesome">auto_awesome</span>
                    </div>
                </div>
                <div class="bg-primary text-white rounded-xl p-6 flex flex-col justify-between">
                    <span class="material-symbols-outlined text-3xl" data-icon="lightbulb">lightbulb</span>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-widest opacity-70 mb-1">Quick Tip</p>
                        <p class="text-sm font-medium leading-snug">Cleanup functions are essential for avoiding memory
                            leaks in long-lived subscriptions.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-2 pb-safe md:hidden bg-[#ffffff]/80 backdrop-blur-xl border-t border-[#abadaf]/15 shadow-[0px_-4px_20px_rgba(44,47,49,0.04)] rounded-t-2xl">
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/50 active:scale-90 transition-transform"
            href="{{ url('/courses') }}">
            <span class="material-symbols-outlined" data-icon="school">school</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Learn</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-[#006573] text-white rounded-xl px-3 py-1.5 active:scale-90 transition-transform"
            href="{{ url('/quizzes') }}">
            <span class="material-symbols-outlined" data-icon="timer">timer</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Test</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/50 active:scale-90 transition-transform"
            href="{{ url('/profile') }}">
            <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Stats</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/50 active:scale-90 transition-transform"
            href="{{ url('/profile') }}">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Profile</span>
        </a>
    </nav>

    <!-- Modal Overlay -->
    <div class="fixed inset-0 bg-on-surface/40 backdrop-blur-md z-[60] flex items-center justify-center p-6 hidden"
        id="modal_quiz">
        <!-- Create New Quiz Modal -->
        <div
            class="bg-surface-container-lowest w-full max-w-2xl rounded-xl shadow-[0px_10px_40px_rgba(0,101,115,0.06)] overflow-hidden flex flex-col max-h-[921px]">
            <!-- Modal Header -->
            <div
                class="px-8 py-6 border-b border-outline-variant/15 flex justify-between items-center bg-surface-container-low/30">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight text-on-surface font-headline">Create New Quiz</h2>
                    <p class="text-sm text-on-surface-variant font-medium">Design an assessment to measure student
                        engagement.</p>
                </div>
                <button
                    class="w-10 h-10 rounded-full hover:bg-surface-container-high transition-colors flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface-variant">close</span>
                </button>
            </div>
            <!-- Modal Content -->
            <div class="p-8 overflow-y-auto custom-scrollbar">
                <form class="space-y-8">
                    <!-- Basic Info Section -->
                    <div class="space-y-6">
                        <div class="group">
                            <label
                                class="block text-[11px] font-bold uppercase tracking-widest text-on-surface-variant mb-2 px-1">Quiz
                                Title</label>
                            <input
                                class="w-full bg-surface-container-low/50 border-none rounded-xl px-4 py-3.5 text-on-surface focus:ring-2 focus:ring-primary transition-all placeholder:text-outline-variant font-medium"
                                placeholder="e.g., Fundamentals of Kinematic Motion" type="text" />
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="group">
                                <label
                                    class="block text-[11px] font-bold uppercase tracking-widest text-on-surface-variant mb-2 px-1">Course
                                    Association</label>
                                <div class="relative">
                                    <select
                                        class="w-full appearance-none bg-surface-container-low/50 border-none rounded-xl px-4 py-3.5 text-on-surface focus:ring-2 focus:ring-primary transition-all font-medium">
                                        <option>Advanced Robotics 101</option>
                                        <option>Intro to Kinetic Arts</option>
                                        <option>Neural Engineering</option>
                                    </select>
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                                </div>
                            </div>
                            <div class="group">
                                <label
                                    class="block text-[11px] font-bold uppercase tracking-widest text-on-surface-variant mb-2 px-1">Time
                                    Limit (minutes)</label>
                                <div class="relative">
                                    <input
                                        class="w-full bg-surface-container-low/50 border-none rounded-xl px-4 py-3.5 text-on-surface focus:ring-2 focus:ring-primary transition-all font-medium"
                                        type="number" value="30" />
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50">timer</span>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <label
                                class="block text-[11px] font-bold uppercase tracking-widest text-on-surface-variant mb-2 px-1">Passing
                                Score (%)</label>
                            <div class="flex items-center gap-4">
                                <input class="flex-1 accent-primary h-1.5 rounded-full bg-surface-container-high"
                                    max="100" min="0" type="range" value="70" />
                                <span class="w-12 text-right font-bold text-primary font-headline">70%</span>
                            </div>
                        </div>
                    </div>
                    <!-- Add Questions Section -->
                    <div class="pt-4">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-on-surface">Questions</h3>
                            <span class="text-xs font-medium text-on-surface-variant">0 Questions added</span>
                        </div>
                        <!-- Empty State / Add Action -->
                        <button
                            class="w-full border-2 border-dashed border-outline-variant/30 rounded-xl p-8 hover:bg-surface-container-low/50 transition-all flex flex-col items-center justify-center gap-3 group"
                            type="button">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined"
                                    style="font-variation-settings: 'wght' 600;">add_circle</span>
                            </div>
                            <div class="text-center">
                                <p class="text-sm font-bold text-on-surface">Add First Question</p>
                                <p class="text-xs text-on-surface-variant">Multiple choice, true/false, or open-ended
                                </p>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div
                class="px-8 py-6 border-t border-outline-variant/15 flex items-center justify-end gap-4 bg-surface-container-low/30">
                <button
                    class="px-6 py-2.5 text-sm font-bold text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high rounded-xl transition-all">
                    Cancel
                </button>
                <button
                    class="px-8 py-2.5 text-sm font-bold text-on-primary bg-gradient-to-br from-primary to-primary-container rounded-xl shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all">
                    Save Quiz
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Overlay -->
    <div class="fixed inset-0 bg-on-surface/40 backdrop-blur-md z-[60] flex items-center justify-center p-6 hidden"
        id="modal_quiz1">
        <!-- Create New Quiz Modal -->
        <div
            class="bg-surface-container-lowest w-full max-w-2xl rounded-xl shadow-[0px_10px_40px_rgba(0,101,115,0.06)] overflow-hidden flex flex-col max-h-[921px]">
            <!-- Modal Header -->
            <div
                class="px-8 py-6 border-b border-outline-variant/15 flex justify-between items-center bg-surface-container-low/30">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight text-on-surface font-headline">Create New Quiz</h2>
                    <p class="text-sm text-on-surface-variant font-medium">Design an assessment to measure student
                        engagement.</p>
                </div>
                <button
                    class="w-10 h-10 rounded-full hover:bg-surface-container-high transition-colors flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface-variant">close</span>
                </button>
            </div>
            <!-- Modal Content -->
            <div class="p-8 overflow-y-auto custom-scrollbar">
                <form class="space-y-8">
                    <!-- Error Message Container -->
                    <div id="quiz1_error"
                        class="hidden mb-6 p-4 bg-error-container/10 border border-error-container/20 rounded-xl flex items-center gap-3 text-error animate-in fade-in slide-in-from-top-2 duration-300">
                        <span class="material-symbols-outlined text-lg">error</span>
                        <p class="text-xs font-bold" id="quiz1_error_text"></p>
                    </div>

                    <!-- Basic Info Section -->
                    <div class="space-y-6">
                        <div class="group">
                            <label
                                class="block text-[11px] font-bold uppercase tracking-widest text-on-surface-variant mb-2 px-1">Quiz
                                Title</label>
                            <input id="quiz_title" name="title" required
                                class="w-full bg-surface-container-low/50 border-none rounded-xl px-4 py-3.5 text-on-surface focus:ring-2 focus:ring-primary transition-all placeholder:text-outline-variant font-medium"
                                placeholder="e.g., Fundamentals of Kinematic Motion" type="text" />
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="group">
                                <label
                                    class="block text-[11px] font-bold uppercase tracking-widest text-on-surface-variant mb-2 px-1">Course
                                    Association</label>
                                <div class="relative">
                                    <select id="quiz_course" name="course_id" required
                                        class="w-full appearance-none bg-surface-container-low/50 border-none rounded-xl px-4 py-3.5 text-on-surface focus:ring-2 focus:ring-primary transition-all font-medium">
                                        <option value="">Select a course</option>
                                        <option>Advanced Robotics 101</option>
                                        <option>Intro to Kinetic Arts</option>
                                        <option>Neural Engineering</option>
                                    </select>
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                                </div>
                            </div>
                            <div class="group">
                                <label
                                    class="block text-[11px] font-bold uppercase tracking-widest text-on-surface-variant mb-2 px-1">Time
                                    Limit (minutes)</label>
                                <div class="relative">
                                    <input id="quiz_time" name="time_limit" required
                                        class="w-full bg-surface-container-low/50 border-none rounded-xl px-4 py-3.5 text-on-surface focus:ring-2 focus:ring-primary transition-all font-medium"
                                        type="number" value="30" />
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50">timer</span>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <label
                                class="block text-[11px] font-bold uppercase tracking-widest text-on-surface-variant mb-2 px-1">Passing
                                Score (%)</label>
                            <div class="flex items-center gap-4">
                                <input class="flex-1 accent-primary h-1.5 rounded-full bg-surface-container-high"
                                    max="100" min="0" type="range" value="70" />
                                <span class="w-12 text-right font-bold text-primary font-headline">70%</span>
                            </div>
                        </div>
                    </div>
                    <!-- Add Questions Section -->
                    <div class="pt-4">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-on-surface">Questions</h3>
                            <span class="text-xs font-medium text-on-surface-variant">0 Questions added</span>
                        </div>
                        <!-- Empty State / Add Action -->
                        <button id="add_question_quiz"
                            class="w-full border-2 border-dashed border-outline-variant/30 rounded-xl p-8 hover:bg-surface-container-low/50 transition-all flex flex-col items-center justify-center gap-3 group"
                            type="button">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined"
                                    style="font-variation-settings: 'wght' 600;">add_circle</span>
                            </div>
                            <div class="text-center">
                                <p class="text-sm font-bold text-on-surface">Add First Question</p>
                                <p class="text-xs text-on-surface-variant">Multiple choice, true/false, or open-ended
                                </p>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->

        </div>
    </div>

    <!-- Modal Overlay -->
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-inverse-surface/40 backdrop-blur-md p-6 hidden"
        id="modal_quiz2">
        <!-- Modal Container: Width and Height matched to SCREEN_34 (max-w-2xl and flex-col with overflow) -->
        <div
            class="bg-surface-container-lowest w-full max-w-2xl rounded-xl shadow-[0px_10px_40px_rgba(0,101,115,0.06)] overflow-hidden flex flex-col max-h-[90vh] animate-in fade-in zoom-in duration-300">
            <!-- Modal Header -->
            <div
                class="px-8 py-6 border-b border-outline-variant/15 flex justify-between items-center bg-surface-container-low/30">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span
                            class="bg-primary/10 text-primary px-2 py-0.5 rounded text-[10px] font-bold tracking-widest uppercase">Step
                            2</span>
                        <h2 class="text-2xl font-bold tracking-tight text-on-surface font-headline">Add Questions</h2>
                    </div>
                    <p class="text-sm text-on-surface-variant font-medium">Define the core challenges for <span
                            class="font-semibold text-on-surface">Kinetic Physics Intro</span></p>
                </div>
                <button
                    class="w-10 h-10 rounded-full hover:bg-surface-container-high transition-colors flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface-variant">close</span>
                </button>
            </div>
            <!-- Modal Content (Scrollable area like SCREEN_34) -->
            <div class="p-8 overflow-y-auto custom-scrollbar flex-1">
                <!-- Select Question Type Section -->
                <div class="mb-10">
                    <h3 class="text-[11px] font-bold uppercase tracking-widest text-primary mb-6">Select Question Type
                    </h3>
                    <div class="grid grid-cols-3 gap-4">
                        <!-- Multiple Choice -->
                        <button id="type_multi_choice"
                            class="group flex flex-col items-center justify-center p-4 bg-surface-container-low/30 rounded-xl border border-outline-variant/10 hover:border-primary-container hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-10 h-10 bg-primary-container/20 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-primary text-2xl">checklist</span>
                            </div>
                            <span class="font-headline font-bold text-on-surface text-sm">Multiple Choice</span>
                            <span class="text-[10px] text-on-surface-variant mt-1 text-center leading-tight">One correct
                                answer from many</span>
                        </button>
                        <!-- True or False -->
                        <button id="type_true_false"
                            class="group flex flex-col items-center justify-center p-4 bg-surface-container-low/30 rounded-xl border border-outline-variant/10 hover:border-primary-container hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-10 h-10 bg-primary-container/20 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-primary text-2xl">contrast</span>
                            </div>
                            <span class="font-headline font-bold text-on-surface text-sm">True or False</span>
                            <span class="text-[10px] text-on-surface-variant mt-1 text-center leading-tight">Binary
                                logic assessment</span>
                        </button>
                        <!-- Text Field -->
                        <button id="type_text_field"
                            class="group flex flex-col items-center justify-center p-4 bg-surface-container-low/30 rounded-xl border border-outline-variant/10 hover:border-primary-container hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-10 h-10 bg-primary-container/20 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-primary text-2xl">edit_note</span>
                            </div>
                            <span class="font-headline font-bold text-on-surface text-sm">Text Field</span>
                            <span class="text-[10px] text-on-surface-variant mt-1 text-center leading-tight">Open-ended
                                response</span>
                        </button>
                    </div>
                </div>

                <!-- Text Field Editor (Hidden by default) -->
                <div id="text_field_editor"
                    class="mb-10 space-y-6 hidden animate-in fade-in slide-in-from-top-4 duration-300">
                    <div class="flex items-center justify-between">
                        <h3 class="text-[11px] font-bold uppercase tracking-widest text-primary">Text Field Question
                            Editor</h3>
                        <button type="button" class="text-on-surface-variant hover:text-on-surface"
                            onclick="document.getElementById('text_field_editor').classList.add('hidden')">
                            <span class="material-symbols-outlined text-sm">close</span>
                        </button>
                    </div>

                    <div class="space-y-2">
                        <label
                            class="block text-[10px] font-bold uppercase tracking-wider text-on-surface-variant">Question
                            Text</label>
                        <textarea id="text_question_text"
                            class="w-full bg-surface-container-low border-none rounded-xl p-4 text-on-surface focus:ring-2 focus:ring-primary transition-all resize-none font-medium"
                            placeholder="Type your open-ended question here..." rows="3"></textarea>
                    </div>

                    <div class="space-y-2">
                        <label
                            class="block text-[10px] font-bold uppercase tracking-wider text-on-surface-variant">Expected
                            Answer</label>
                        <input type="text" id="text_question_answer" placeholder="Type the expected answer..."
                            class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary transition-all text-sm font-medium" />
                    </div>

                    <button type="button" id="submit_text_question"
                        class="w-full py-3 bg-primary/10 text-primary rounded-xl font-bold text-sm hover:bg-primary/20 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">add_task</span>
                        Add Question to List
                    </button>
                </div>

                <!-- True or False Editor (Hidden by default) -->
                <div id="true_false_editor"
                    class="mb-10 space-y-6 hidden animate-in fade-in slide-in-from-top-4 duration-300">
                    <div class="flex items-center justify-between">
                        <h3 class="text-[11px] font-bold uppercase tracking-widest text-primary">True or False Question
                            Editor</h3>
                        <button type="button" class="text-on-surface-variant hover:text-on-surface"
                            onclick="document.getElementById('true_false_editor').classList.add('hidden')">
                            <span class="material-symbols-outlined text-sm">close</span>
                        </button>
                    </div>

                    <div class="space-y-2">
                        <label
                            class="block text-[10px] font-bold uppercase tracking-wider text-on-surface-variant">Question
                            Text</label>
                        <textarea id="tf_question_text"
                            class="w-full bg-surface-container-low border-none rounded-xl p-4 text-on-surface focus:ring-2 focus:ring-primary transition-all resize-none font-medium"
                            placeholder="Type your True/False question here..." rows="3"></textarea>
                    </div>

                    <div class="space-y-4">
                        <label
                            class="block text-[10px] font-bold uppercase tracking-wider text-on-surface-variant">Correct
                            Answer</label>
                        <div class="grid grid-cols-2 gap-4">
                            <button type="button" id="tf_true_btn"
                                class="tf-choice-btn flex flex-col items-center gap-2 p-6 rounded-2xl border-2 border-green-500/20 bg-green-500/5 hover:bg-green-500/10 transition-all">
                                <span class="material-symbols-outlined text-green-600 text-3xl">check_circle</span>
                                <span class="font-headline font-bold text-green-700">True</span>
                            </button>
                            <button type="button" id="tf_false_btn"
                                class="tf-choice-btn flex flex-col items-center gap-2 p-6 rounded-2xl border-2 border-red-500/20 bg-red-500/5 hover:bg-red-500/10 transition-all">
                                <span class="material-symbols-outlined text-red-600 text-3xl">cancel</span>
                                <span class="font-headline font-bold text-red-700">False</span>
                            </button>
                        </div>
                    </div>

                    <button type="button" id="submit_tf_question"
                        class="w-full py-3 bg-primary/10 text-primary rounded-xl font-bold text-sm hover:bg-primary/20 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">add_task</span>
                        Add Question to List
                    </button>
                </div>

                <!-- Multiple Choice Editor (Hidden by default) -->
                <div id="multi_choice_editor"
                    class="mb-10 space-y-6 hidden animate-in fade-in slide-in-from-top-4 duration-300">
                    <div class="flex items-center justify-between">
                        <h3 class="text-[11px] font-bold uppercase tracking-widest text-primary">Multiple Choice
                            Question Editor</h3>
                        <button type="button" class="text-on-surface-variant hover:text-on-surface"
                            onclick="document.getElementById('multi_choice_editor').classList.add('hidden')">
                            <span class="material-symbols-outlined text-sm">close</span>
                        </button>
                    </div>

                    <div class="space-y-2">
                        <label
                            class="block text-[10px] font-bold uppercase tracking-wider text-on-surface-variant">Question
                            Text</label>
                        <textarea id="mc_question_text"
                            class="w-full bg-surface-container-low border-none rounded-xl p-4 text-on-surface focus:ring-2 focus:ring-primary transition-all resize-none font-medium"
                            placeholder="Type your question here..." rows="3"></textarea>
                    </div>

                    <div class="space-y-4">
                        <label
                            class="block text-[10px] font-bold uppercase tracking-wider text-on-surface-variant">Answer
                            Options (At least 2 required)</label>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[10px] font-bold text-primary">A</span>
                                <input type="text" id="mc_opt_a" placeholder="Option A" class="mc-option w-full bg-surface-container-low border-none rounded-xl pl-8 pr-4 py-3 text-on-surface focus:ring-2 focus:ring-primary transition-all text-sm font-medium" />
                            </div>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[10px] font-bold text-primary">B</span>
                                <input type="text" id="mc_opt_b" placeholder="Option B" class="mc-option w-full bg-surface-container-low border-none rounded-xl pl-8 pr-4 py-3 text-on-surface focus:ring-2 focus:ring-primary transition-all text-sm font-medium" />
                            </div>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[10px] font-bold text-primary">C</span>
                                <input type="text" id="mc_opt_c" placeholder="Option C" class="mc-option w-full bg-surface-container-low border-none rounded-xl pl-8 pr-4 py-3 text-on-surface focus:ring-2 focus:ring-primary transition-all text-sm font-medium" />
                            </div>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[10px] font-bold text-primary">D</span>
                                <input type="text" id="mc_opt_d" placeholder="Option D" class="mc-option w-full bg-surface-container-low border-none rounded-xl pl-8 pr-4 py-3 text-on-surface focus:ring-2 focus:ring-primary transition-all text-sm font-medium" />
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-4">
                            <div class="flex-1 relative">
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-on-surface-variant mb-2">Correct Letter (A, B, C, or D)</label>
                                <div id="mc_error_msg" class="absolute -top-6 left-0 text-[9px] text-red-500 font-bold hidden animate-bounce">There is no such option!</div>
                                <input type="text" id="mc_correct_opt" maxlength="1" placeholder="e.g. A" 
                                    class="w-20 bg-surface-container-low border-none rounded-xl px-4 py-3 text-center text-on-surface focus:ring-2 focus:ring-primary transition-all font-bold uppercase" />
                            </div>
                            <div class="flex-2 text-[10px] text-on-surface-variant italic pt-4">
                                Type the letter corresponding to the right answer.
                            </div>
                        </div>
                    </div>

                    <button type="button" id="submit_mc_question"
                        class="w-full py-3 bg-primary/10 text-primary rounded-xl font-bold text-sm hover:bg-primary/20 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">add_task</span>
                        Add Question to List
                    </button>
                </div>
                <!-- Question List Area -->
                <div class="space-y-4">
                    <div class="flex justify-between items-center mb-4 px-1">
                        <h3 class="text-[11px] font-bold uppercase tracking-widest text-on-surface-variant">Question
                            List (<span id="question_count">0</span>)</h3>
                        <button class="text-primary text-xs font-semibold flex items-center gap-1 hover:underline">
                            <span class="material-symbols-outlined text-sm">reorder</span>
                            Reorder All
                        </button>
                    </div>
                    <div id="questions_list_container" class="space-y-4">
                        <!-- Dynamic Questions will appear here -->
                    </div>
                    <!-- Add Another Trigger -->
                    <button id="add_another_question_trigger"
                        class="w-full border-2 border-dashed border-outline-variant/20 rounded-xl p-6 hover:bg-surface-container-low/50 transition-all flex flex-col items-center justify-center gap-2 group">
                        <div
                            class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-xl"
                                style="font-variation-settings: 'wght' 600;">add_circle</span>
                        </div>
                        <div class="text-center">
                            <p class="text-xs font-bold text-on-surface">+ Add Another Question</p>
                        </div>
                    </button>
                </div>
            </div>
            <!-- Modal Footer -->
            <div
                class="px-8 py-6 border-t border-outline-variant/15 flex items-center justify-between bg-surface-container-low/30">
                <button id="back_to_quiz1"
                    class="px-6 py-2.5 text-sm font-bold text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high rounded-xl transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg">arrow_back</span>
                    Back
                </button>
                <div class="flex gap-4">
                    <button
                        class="px-6 py-2.5 text-sm font-bold text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high rounded-xl transition-all">
                        Save Draft
                    </button>
                    <button id="save_quiz"
                        class="px-8 py-2.5 text-sm font-bold text-on-primary bg-gradient-to-br from-primary to-primary-container rounded-xl shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all">
                        Save Quiz
                    </button>
                </div>
            </div>
        </div>
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
                const modalQuiz1 = document.getElementById('modal_quiz1');
                const modalQuiz2 = document.getElementById('modal_quiz2');
                const newQuizBtn = document.getElementById('new_quiz_btn');
                const addQuestionBtn = document.getElementById('add_question_quiz');

                const showModal = (modal) => {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                };

                const hideModal = (modal) => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                };

                if (newQuizBtn) {
                    newQuizBtn.addEventListener('click', () => showModal(modalQuiz1));
                }

                // Close buttons logic (Only for header close and footer cancel)
                const globalCloseBtns = [
                    ...modalQuiz1.querySelectorAll('.border-b button, .border-t button'),
                    ...modalQuiz2.querySelectorAll('.border-b button, .border-t button')
                ];

                globalCloseBtns.forEach(btn => {
                    if (btn.querySelector('.material-symbols-outlined')?.textContent === 'close' || btn.textContent.trim() === 'Cancel') {
                        btn.addEventListener('click', () => {
                            hideModal(modalQuiz1);
                            hideModal(modalQuiz2);
                        });
                    }
                });

                if (addQuestionBtn) {
                    addQuestionBtn.addEventListener('click', () => {
                        // Validation
                        const title = document.getElementById('quiz_title');
                        const course = document.getElementById('quiz_course');
                        const time = document.getElementById('quiz_time');
                        const errorBox = document.getElementById('quiz1_error');
                        const errorText = document.getElementById('quiz1_error_text');

                        if (title.value.trim() === '' || course.value === '' || time.value === '') {
                            errorText.textContent = 'Please fill all required fields before proceeding to Step 2.';
                            errorBox.classList.remove('hidden');
                            modalQuiz1.querySelector('.overflow-y-auto').scrollTo({ top: 0, behavior: 'smooth' });
                            return;
                        }

                        // Hide error if valid
                        errorBox.classList.add('hidden');

                        // Smooth Switch Animation
                        modalQuiz1.querySelector('div').classList.add('animate-out', 'fade-out', 'zoom-out', 'duration-300');
                        setTimeout(() => {
                            hideModal(modalQuiz1);
                            modalQuiz1.querySelector('div').classList.remove('animate-out', 'fade-out', 'zoom-out');
                            showModal(modalQuiz2);
                        }, 300);
                    });
                }

                // Back button logic in Modal 2
                const backBtn = document.getElementById('back_to_quiz1');
                if (backBtn) {
                    backBtn.addEventListener('click', () => {
                        modalQuiz2.querySelector('div').classList.add('animate-out', 'fade-out', 'zoom-out', 'duration-300');
                        setTimeout(() => {
                            hideModal(modalQuiz2);
                            modalQuiz2.querySelector('div').classList.remove('animate-out', 'fade-out', 'zoom-out');
                            showModal(modalQuiz1);
                        }, 300);
                    });
                }
                // Toggle Multi-Choice Editor
                const typeMultiChoiceBtn = document.getElementById('type_multi_choice');
                const multiChoiceEditor = document.getElementById('multi_choice_editor');

                if (typeMultiChoiceBtn && multiChoiceEditor) {
                    typeMultiChoiceBtn.addEventListener('click', () => {
                        multiChoiceEditor.classList.remove('hidden');
                        multiChoiceEditor.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    });
                }

                // Multiple Choice Submission
                const submitMcBtn = document.getElementById('submit_mc_question');
                const questionsContainer = document.getElementById('questions_list_container');
                const questionCountSpan = document.getElementById('question_count');
                let qCount = 0;
                let editingCard = null; // Track which card we are editing

                if (submitMcBtn) {
                    submitMcBtn.addEventListener('click', () => {
                        const qText = document.getElementById('mc_question_text').value.trim();
                        const options = Array.from(document.querySelectorAll('.mc-option'))
                            .map(opt => opt.value.trim());
                        const filledOptions = options.filter(val => val !== '');

                        if (qText === '') {
                            alert('Please enter the question text.');
                            return;
                        }

                        if (filledOptions.length < 2) {
                            alert('Please provide at least 2 answer options.');
                            return;
                        }

                        const correctLetter = document.getElementById('mc_correct_opt').value.trim().toUpperCase();
                        const letterMap = { 'A': 0, 'B': 1, 'C': 2, 'D': 3 };
                        const errorMsg = document.getElementById('mc_error_msg');
                        errorMsg.classList.add('hidden');

                        if (!correctLetter || letterMap[correctLetter] === undefined || letterMap[correctLetter] >= filledOptions.length) {
                            errorMsg.textContent = `There is no option ${correctLetter || ''}!`;
                            errorMsg.classList.remove('hidden');
                            return;
                        }

                        if (editingCard) {
                            // UPDATE EXISTING CARD
                            editingCard.querySelector('p').textContent = qText;
                            editingCard.dataset.question = qText;
                            editingCard.dataset.options = JSON.stringify(options);
                            editingCard.dataset.answer = letterMap[correctLetter].toString();
                            editingCard.querySelector('.opt-count').textContent = `${filledOptions.length} Options`;

                            // Reset State
                            editingCard = null;
                            submitMcBtn.innerHTML = '<span class="material-symbols-outlined">add_task</span> Add Question to List';
                        } else {
                            // CREATE NEW CARD
                            qCount++;
                            questionCountSpan.textContent = qCount;

                            const card = document.createElement('div');
                            card.className = 'bg-surface-container-low/50 p-4 rounded-xl border border-outline-variant/10 flex items-center justify-between group animate-in slide-in-from-right duration-300';
                            card.dataset.question = qText;
                            card.dataset.options = JSON.stringify(options);
                            card.dataset.answer = letterMap[correctLetter].toString();
                            card.dataset.type = 'mc';

                            card.innerHTML = `
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 bg-surface-container-high/60 rounded flex items-center justify-center text-[10px] font-bold font-headline q-number">
                                    ${qCount.toString().padStart(2, '0')}
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-on-surface">${qText}</p>
                                    <div class="flex gap-3 mt-1">
                                        <span class="text-[10px] text-on-surface-variant flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">checklist</span> Multiple Choice
                                        </span>
                                        <span class="text-[10px] text-on-surface-variant flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">fact_check</span> <span class="opt-count">${filledOptions.length} Options</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button type="button" class="p-1.5 hover:bg-surface-container-high rounded-lg text-on-surface-variant edit-q-btn">
                                    <span class="material-symbols-outlined text-lg">edit</span>
                                </button>
                                <button type="button" class="p-1.5 hover:bg-error-container/10 rounded-lg text-error delete-q-btn">
                                    <span class="material-symbols-outlined text-lg">delete</span>
                                </button>
                            </div>
                        `;

                            // Edit Logic
                            card.querySelector('.edit-q-btn').addEventListener('click', () => {
                                editingCard = card;
                                const storedOptions = JSON.parse(card.dataset.options);
                                document.getElementById('mc_question_text').value = card.dataset.question;
                                const indexMap = { '0': 'A', '1': 'B', '2': 'C', '3': 'D' };
                                document.getElementById('mc_correct_opt').value = indexMap[card.dataset.answer] || 'A';
                                const inputs = document.querySelectorAll('.mc-option');
                                storedOptions.forEach((opt, i) => {
                                    if (inputs[i]) inputs[i].value = opt;
                                });

                                submitMcBtn.innerHTML = '<span class="material-symbols-outlined">edit</span> Update Question';
                                multiChoiceEditor.classList.remove('hidden');
                                multiChoiceEditor.scrollIntoView({ behavior: 'smooth', block: 'start' });
                            });

                            // Delete Logic
                            card.querySelector('.delete-q-btn').addEventListener('click', () => {
                                card.remove();
                                qCount--;
                                questionCountSpan.textContent = qCount;
                                // Update numbers of remaining cards
                                document.querySelectorAll('#questions_list_container .q-number').forEach((num, i) => {
                                    num.textContent = (i + 1).toString().padStart(2, '0');
                                });
                            });

                            questionsContainer.appendChild(card);
                        }

                        // Reset Editor
                        document.getElementById('mc_question_text').value = '';
                        document.querySelectorAll('.mc-option').forEach(opt => opt.value = '');
                        multiChoiceEditor.classList.add('hidden');
                        questionsContainer.scrollIntoView({ behavior: 'smooth', block: 'end' });
                    });
                }

                // Trigger for adding another
                const addAnotherBtn = document.getElementById('add_another_question_trigger');
                if (addAnotherBtn) {
                    addAnotherBtn.addEventListener('click', () => {
                        multiChoiceEditor.classList.remove('hidden');
                        multiChoiceEditor.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    });
                }
                // Toggle True/False Editor
                const typeTrueFalseBtn = document.getElementById('type_true_false');
                const trueFalseEditor = document.getElementById('true_false_editor');

                if (typeTrueFalseBtn && trueFalseEditor) {
                    typeTrueFalseBtn.addEventListener('click', () => {
                        multiChoiceEditor.classList.add('hidden');
                        trueFalseEditor.classList.remove('hidden');
                        trueFalseEditor.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    });
                }

                // True/False Selection Logic
                let tfCorrectAnswer = null;
                const tfBtns = document.querySelectorAll('.tf-choice-btn');
                tfBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        tfBtns.forEach(b => {
                            b.classList.remove('ring-4', 'ring-primary', 'border-primary');
                            b.classList.add('border-green-500/20', 'border-red-500/20');
                        });
                        btn.classList.add('ring-4', 'ring-primary', 'border-primary');
                        btn.classList.remove('border-green-500/20', 'border-red-500/20');
                        tfCorrectAnswer = btn.id === 'tf_true_btn' ? 'True' : 'False';
                    });
                });

                // True/False Submission
                const submitTfBtn = document.getElementById('submit_tf_question');
                if (submitTfBtn) {
                    submitTfBtn.addEventListener('click', () => {
                        const qText = document.getElementById('tf_question_text').value.trim();

                        if (qText === '') {
                            alert('Please enter the question text.');
                            return;
                        }

                        if (!tfCorrectAnswer) {
                            alert('Please select the correct answer (True or False).');
                            return;
                        }

                        if (editingCard) {
                            // Update Logic for TF (simplified for now as edit logic was MC-centric)
                            editingCard.querySelector('p').textContent = qText;
                            editingCard.dataset.question = qText;
                            editingCard.dataset.type = 'tf';
                            editingCard.dataset.answer = tfCorrectAnswer;
                            editingCard.querySelector('.opt-summary').innerHTML = `
                            <span class="material-symbols-outlined text-[14px]">contrast</span> True/False
                        `;
                            editingCard.querySelector('.opt-count').textContent = `Answer: ${tfCorrectAnswer}`;
                            editingCard = null;
                            submitTfBtn.innerHTML = '<span class="material-symbols-outlined">add_task</span> Add Question to List';
                        } else {
                            qCount++;
                            questionCountSpan.textContent = qCount;

                            const card = document.createElement('div');
                            card.className = 'bg-surface-container-low/50 p-4 rounded-xl border border-outline-variant/10 flex items-center justify-between group animate-in slide-in-from-right duration-300';
                            card.dataset.question = qText;
                            card.dataset.type = 'tf';
                            card.dataset.answer = tfCorrectAnswer;

                            card.innerHTML = `
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 bg-surface-container-high/60 rounded flex items-center justify-center text-[10px] font-bold font-headline q-number">
                                    ${qCount.toString().padStart(2, '0')}
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-on-surface">${qText}</p>
                                    <div class="flex gap-3 mt-1">
                                        <span class="opt-summary text-[10px] text-on-surface-variant flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">contrast</span> True/False
                                        </span>
                                        <span class="text-[10px] text-on-surface-variant flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">check_circle</span> <span class="opt-count">Answer: ${tfCorrectAnswer}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button type="button" class="p-1.5 hover:bg-surface-container-high rounded-lg text-on-surface-variant edit-tf-btn">
                                    <span class="material-symbols-outlined text-lg">edit</span>
                                </button>
                                <button type="button" class="p-1.5 hover:bg-error-container/10 rounded-lg text-error delete-q-btn">
                                    <span class="material-symbols-outlined text-lg">delete</span>
                                </button>
                            </div>
                        `;

                            // Edit Logic for TF
                            card.querySelector('.edit-tf-btn').addEventListener('click', () => {
                                editingCard = card;
                                document.getElementById('tf_question_text').value = card.dataset.question;
                                const isTrue = card.dataset.answer === 'True';
                                document.getElementById(isTrue ? 'tf_true_btn' : 'tf_false_btn').click();

                                submitTfBtn.innerHTML = '<span class="material-symbols-outlined">edit</span> Update Question';
                                trueFalseEditor.classList.remove('hidden');
                                multiChoiceEditor.classList.add('hidden');
                                trueFalseEditor.scrollIntoView({ behavior: 'smooth', block: 'start' });
                            });

                            // Delete Logic (same as MC)
                            card.querySelector('.delete-q-btn').addEventListener('click', () => {
                                card.remove();
                                qCount--;
                                questionCountSpan.textContent = qCount;
                                document.querySelectorAll('#questions_list_container .q-number').forEach((num, i) => {
                                    num.textContent = (i + 1).toString().padStart(2, '0');
                                });
                            });

                            questionsContainer.appendChild(card);
                        }

                        // Reset Editor
                        document.getElementById('tf_question_text').value = '';
                        tfCorrectAnswer = null;
                        tfBtns.forEach(b => b.classList.remove('ring-4', 'ring-primary', 'border-primary'));
                        trueFalseEditor.classList.add('hidden');
                        questionsContainer.scrollIntoView({ behavior: 'smooth', block: 'end' });
                    });
                }
                // Toggle Text Field Editor
                const typeTextFieldBtn = document.getElementById('type_text_field');
                const textFieldEditor = document.getElementById('text_field_editor');

                if (typeTextFieldBtn && textFieldEditor) {
                    typeTextFieldBtn.addEventListener('click', () => {
                        multiChoiceEditor.classList.add('hidden');
                        trueFalseEditor.classList.add('hidden');
                        textFieldEditor.classList.remove('hidden');
                        textFieldEditor.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    });
                }

                // Text Field Submission
                const submitTextBtn = document.getElementById('submit_text_question');
                if (submitTextBtn) {
                    submitTextBtn.addEventListener('click', () => {
                        const qText = document.getElementById('text_question_text').value.trim();
                        const answer = document.getElementById('text_question_answer').value.trim();

                        if (qText === '') {
                            alert('Please enter the question text.');
                            return;
                        }

                        if (answer === '') {
                            alert('Please enter the expected answer.');
                            return;
                        }

                        if (editingCard) {
                            editingCard.querySelector('p').textContent = qText;
                            editingCard.dataset.question = qText;
                            editingCard.dataset.type = 'text';
                            editingCard.dataset.answer = answer;
                            editingCard.querySelector('.opt-summary').innerHTML = `
                            <span class="material-symbols-outlined text-[14px]">edit_note</span> Text Field
                        `;
                            editingCard.querySelector('.opt-count').textContent = `Expected: ${answer}`;
                            editingCard = null;
                            submitTextBtn.innerHTML = '<span class="material-symbols-outlined">add_task</span> Add Question to List';
                        } else {
                            qCount++;
                            questionCountSpan.textContent = qCount;

                            const card = document.createElement('div');
                            card.className = 'bg-surface-container-low/50 p-4 rounded-xl border border-outline-variant/10 flex items-center justify-between group animate-in slide-in-from-right duration-300';
                            card.dataset.question = qText;
                            card.dataset.type = 'text';
                            card.dataset.answer = answer;

                            card.innerHTML = `
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 bg-surface-container-high/60 rounded flex items-center justify-center text-[10px] font-bold font-headline q-number">
                                    ${qCount.toString().padStart(2, '0')}
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-on-surface">${qText}</p>
                                    <div class="flex gap-3 mt-1">
                                        <span class="opt-summary text-[10px] text-on-surface-variant flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">edit_note</span> Text Field
                                        </span>
                                        <span class="text-[10px] text-on-surface-variant flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">info</span> <span class="opt-count">Expected: ${answer}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button type="button" class="p-1.5 hover:bg-surface-container-high rounded-lg text-on-surface-variant edit-text-btn">
                                    <span class="material-symbols-outlined text-lg">edit</span>
                                </button>
                                <button type="button" class="p-1.5 hover:bg-error-container/10 rounded-lg text-error delete-q-btn">
                                    <span class="material-symbols-outlined text-lg">delete</span>
                                </button>
                            </div>
                        `;

                            // Edit Logic for Text Field
                            card.querySelector('.edit-text-btn').addEventListener('click', () => {
                                editingCard = card;
                                document.getElementById('text_question_text').value = card.dataset.question;
                                document.getElementById('text_question_answer').value = card.dataset.answer;

                                submitTextBtn.innerHTML = '<span class="material-symbols-outlined">edit</span> Update Question';
                                textFieldEditor.classList.remove('hidden');
                                multiChoiceEditor.classList.add('hidden');
                                trueFalseEditor.classList.add('hidden');
                                textFieldEditor.scrollIntoView({ behavior: 'smooth', block: 'start' });
                            });

                            // Delete Logic
                            card.querySelector('.delete-q-btn').addEventListener('click', () => {
                                card.remove();
                                qCount--;
                                questionCountSpan.textContent = qCount;
                                document.querySelectorAll('#questions_list_container .q-number').forEach((num, i) => {
                                    num.textContent = (i + 1).toString().padStart(2, '0');
                                });
                            });

                            questionsContainer.appendChild(card);
                        }

                        // Reset Editor
                        document.getElementById('text_question_text').value = '';
                        document.getElementById('text_question_answer').value = '';
                        textFieldEditor.classList.add('hidden');
                        questionsContainer.scrollIntoView({ behavior: 'smooth', block: 'end' });
                    });
                }
                // Save Quiz Submission
                const saveQuizBtn = document.getElementById('save_quiz');
                if (saveQuizBtn) {
                    saveQuizBtn.addEventListener('click', () => {
                        // Collect Questions
                        const questions = Array.from(document.querySelectorAll('#questions_list_container > div')).map(card => {
                            const type = card.dataset.type || 'mc';
                            if (type === 'mc') {
                                return {
                                    type: 'mc',
                                    question: card.dataset.question,
                                    options: JSON.parse(card.dataset.options),
                                    answer: parseInt(card.dataset.answer) || 0
                                };
                            } else if (type === 'tf') {
                                return {
                                    type: 'tf',
                                    question: card.dataset.question,
                                    answer: card.dataset.answer
                                };
                            } else {
                                return {
                                    type: 'text',
                                    question: card.dataset.question,
                                    answer: card.dataset.answer
                                };
                            }
                        });

                        // Validation: At least 3 questions
                        if (questions.length < 3) {
                            alert('Please add at least 3 questions to the quiz before saving.');
                            return;
                        }

                        // Collect Form Data from Modal 1
                        const data = {
                            _token: '{{ csrf_token() }}',
                            title: document.getElementById('quiz_title').value,
                            course_name: document.getElementById('quiz_course').value,
                            time_limit: document.getElementById('quiz_time').value,
                            passing_score: 80, // Default for now
                            questions: questions
                        };

                        // Send to Server
                        saveQuizBtn.disabled = true;
                        saveQuizBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Saving...';

                        fetch('{{ route('teacher.quizzes.store') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify(data)
                        })
                            .then(response => response.json())
                            .then(result => {
                                if (result.success) {
                                    // Show Success Animation
                                    modalQuiz2.querySelector('.overflow-y-auto').innerHTML = `
                                <div class="flex flex-col items-center justify-center py-20 animate-in zoom-in duration-500">
                                    <div class="w-20 h-20 bg-green-500/10 text-green-500 rounded-full flex items-center justify-center mb-6">
                                        <span class="material-symbols-outlined text-5xl">check_circle</span>
                                    </div>
                                    <h3 class="text-2xl font-bold text-on-surface mb-2">${result.message}</h3>
                                    <p class="text-on-surface-variant mb-8">Your assessment is now live and ready for students.</p>
                                    <button onclick="window.location.reload()" class="px-8 py-3 bg-primary text-on-primary rounded-xl font-bold hover:scale-105 transition-all">
                                        Back to Dashboard
                                    </button>
                                </div>
                            `;
                                    // Hide footer buttons
                                    modalQuiz2.querySelector('.border-t').style.display = 'none';
                                } else {
                                    alert('Error: ' + (result.message || 'Something went wrong'));
                                    saveQuizBtn.disabled = false;
                                    saveQuizBtn.innerHTML = 'Save Quiz';
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Failed to save quiz. Please check your connection.');
                                saveQuizBtn.disabled = false;
                                saveQuizBtn.innerHTML = 'Save Quiz';
                            });
                    });
                }
            });
    </script>
</body>

</html>

</html>