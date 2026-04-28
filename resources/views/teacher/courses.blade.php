<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Courses | CodeMonter</title>
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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Space Grotesk', sans-serif;
        }

        .modal-blur {
            backdrop-filter: blur(8px);
            background-color: rgba(0, 0, 0, 0.4);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface min-h-screen">
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
        @if(session('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition.duration.500ms
                class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 rounded-xl flex items-center gap-3">
                <span class="material-symbols-outlined">check_circle</span>
                <span class="font-bold">{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div
                class="mb-6 p-4 bg-error/10 border border-error/20 text-error rounded-xl animate-in fade-in slide-in-from-top duration-500">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li class="text-sm font-bold">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Hero Section -->
        <section class="mb-16">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
                <div class="max-w-2xl">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-3 py-1 rounded-full text-xs font-bold mb-6 tracking-widest uppercase bg-[#30D4ED]">
                        <span class="material-symbols-outlined text-sm"
                            style="font-variation-settings: 'FILL' 1;">bolt</span>
                        Active Learning
                    </div>
                    <h1 class="text-5xl md:text-7xl font-bold tracking-tighter leading-[0.9] text-on-surface mb-6">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Master</span>
                        the <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Modern</span>
                        Stack.
                    </h1>
                    <p class="text-on-surface-variant text-lg max-w-lg leading-relaxed">
                        Curated learning paths designed for clarity. High-performance engineering concepts broken down
                        into actionable modules.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <button id="new_course_btn"
                        class=" text-white px-6 py-3 rounded-xl font-bold flex items-center gap-2 shadow-sm bg-gradient-to-r from-primary to-primary-container hover:scale-[1.02] active:scale-95 transition-all">
                        create a new course <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Search and Filters -->
        <section class="mb-12 sticky top-24 z-40">
            <div
                class="bg-surface-container-low/80 backdrop-blur-xl p-4 rounded-2xl flex flex-wrap items-center gap-4 shadow-sm">
                <div class="flex-1 min-w-[280px]">
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                        <input
                            class="w-full bg-surface-container-lowest border-none py-4 pl-12 pr-4 rounded-xl focus:ring-2 focus:ring-primary/20 text-on-surface transition-all"
                            placeholder="Search 'JavaScript' or 'React'..." type="text" />
                    </div>
                </div>
                <div class="flex gap-2">
                    <div class="relative group">
                        <button
                            class="bg-surface-container-lowest px-4 py-4 rounded-xl text-sm font-medium flex items-center gap-2 hover:bg-surface-container-high transition-colors">
                            Level: <span class="font-bold text-primary">Beginner</span>
                            <span class="material-symbols-outlined text-sm">expand_more</span>
                        </button>
                    </div>
                    <div class="relative group">
                        <button
                            class="bg-surface-container-lowest px-4 py-4 rounded-xl text-sm font-medium flex items-center gap-2 hover:bg-surface-container-high transition-colors">
                            Tech: <span class="font-bold text-primary">JavaScript</span>
                            <span class="material-symbols-outlined text-sm">expand_more</span>
                        </button>
                    </div>
                    <div class="relative group">
                        <button
                            class="bg-surface-container-lowest px-4 py-4 rounded-xl text-sm font-medium flex items-center gap-2 hover:bg-surface-container-high transition-colors">
                            View: <span
                                class="font-bold text-primary">{{ request('filter') === 'my_courses' ? 'My Courses' : 'All Courses' }}</span>
                            <span class="material-symbols-outlined text-sm">expand_more</span>
                        </button>
                        <div
                            class="absolute top-[105%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                            <a href="{{ route('teacher.courses', ['filter' => 'all']) }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">All
                                Courses</a>
                            <a href="{{ route('teacher.courses', ['filter' => 'my_courses']) }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">My
                                Courses</a>
                        </div>
                    </div>
                    <button
                        class="bg-on-surface text-surface px-6 py-4 rounded-xl text-sm font-bold flex items-center gap-2 hover:opacity-90 transition-opacity">
                        <span class="material-symbols-outlined text-sm">tune</span>
                        Filters
                    </button>
                </div>
            </div>
        </section>
        <!-- Course Catalog Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($courses as $course)
                <div
                    class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(44,47,49,0.04)] hover:shadow-[0px_10px_40px_rgba(0,101,115,0.06)] transition-all flex flex-col">
                    <div class="relative h-56 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="{{ $course->image ? asset('storage/' . $course->image) : 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&q=80&w=800' }}"
                            alt="{{ $course->title }}" />
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span
                                class="bg-white/90 backdrop-blur-md text-primary text-[10px] font-bold px-2 py-1 rounded tracking-tighter uppercase">ACTIVE</span>
                            <span
                                class="bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-2 py-1 rounded tracking-tighter uppercase">{{ $course->category }}</span>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-xs font-semibold text-primary uppercase tracking-widest">{{ $course->category }}</span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant/30"></span>
                            <span class="text-xs text-on-surface-variant">{{ $course->modules_count ?? 0 }} Modules</span>
                        </div>
                        <h3 class="text-xl font-bold text-on-surface mb-3 group-hover:text-primary transition-colors">
                            {{ $course->title }}
                        </h3>
                        <p class="text-on-surface-variant text-sm line-clamp-2 mb-6">{{ $course->description }}</p>
                        <div class="mt-auto pt-6 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-on-surface-variant text-base">schedule</span>
                                <span class="text-xs font-medium text-on-surface-variant">Self-paced</span>
                            </div>
                            @if ($course->user_id === auth()->id())
                                <a class="text-primary font-bold text-sm flex items-center gap-1 hover:translate-x-1 transition-transform"
                                    href="{{ url('/teacher/courses/' . $course->id) }}">
                                    Manage <span class="material-symbols-outlined text-sm">settings</span>
                                </a>
                            @else
                                <a class="text-primary font-bold text-sm flex items-center gap-1 hover:translate-x-1 transition-transform"
                                    href="{{ url('/course/' . $course->id) }}">
                                    View Details <span class="material-symbols-outlined text-sm">chevron_right</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-20 flex flex-col items-center justify-center text-center">
                    <div class="w-20 h-20 bg-surface-container-high rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-4xl text-on-surface-variant">auto_stories</span>
                    </div>
                    <h3 class="text-2xl font-bold text-on-surface mb-2">No courses created yet</h3>
                    <p class="text-on-surface-variant max-w-sm mb-8">Start sharing your knowledge with the community by
                        creating your first high-performance course.</p>
                    <button onclick="document.getElementById('new_course_btn').click()"
                        class="bg-primary text-white px-8 py-3 rounded-xl font-bold hover:scale-[1.02] transition-all">
                        Create Your First Course
                    </button>
                </div>
            @endforelse
        </section>
        <!-- Pagination (Asymmetric Style) -->
        <div
            class="mt-20 flex flex-col md:flex-row items-center justify-between gap-8 border-t border-outline-variant/10 pt-12">
            <div>
                <p class="text-sm text-on-surface-variant">
                    Showing <span class="font-bold text-on-surface">{{ $courses->firstItem() ?? 0 }}</span> to
                    <span class="font-bold text-on-surface">{{ $courses->lastItem() ?? 0 }}</span> of
                    <span class="font-bold text-on-surface">{{ $courses->total() }}</span> total courses
                </p>
            </div>
            <div class="flex items-center gap-2" id="pages_number">
                @if ($courses->onFirstPage())
                    <span
                        class="w-12 h-12 rounded-full flex items-center justify-center bg-surface-container-high text-outline-variant cursor-not-allowed">
                        <span class="material-symbols-outlined">west</span>
                    </span>
                @else
                    <a href="{{ $courses->previousPageUrl() }}"
                        class="w-12 h-12 rounded-full flex items-center justify-center bg-surface-container-high text-on-surface hover:bg-primary hover:text-white transition-all">
                        <span class="material-symbols-outlined">west</span>
                    </a>
                @endif

                <div class="flex gap-1 px-4">
                    @foreach ($courses->getUrlRange(max(1, $courses->currentPage() - 1), min($courses->lastPage(), $courses->currentPage() + 1)) as $page => $url)
                        @if ($page == $courses->currentPage())
                            <button class="w-10 h-10 rounded-full font-bold bg-primary text-white">{{ $page }}</button>
                        @else
                            <a href="{{ $url }}"
                                class="w-10 h-10 rounded-full flex items-center justify-center font-bold hover:bg-surface-container-high transition-colors">{{ $page }}</a>
                        @endif
                    @endforeach

                    @if ($courses->lastPage() > $courses->currentPage() + 1)
                        @if ($courses->lastPage() > $courses->currentPage() + 2)
                            <span class="px-2 self-center text-outline-variant">...</span>
                        @endif
                        <a href="{{ $courses->url($courses->lastPage()) }}"
                            class="w-10 h-10 rounded-full flex items-center justify-center font-bold hover:bg-surface-container-high transition-colors">{{ $courses->lastPage() }}</a>
                    @endif
                </div>

                @if ($courses->hasMorePages())
                    <a href="{{ $courses->nextPageUrl() }}"
                        class="w-12 h-12 rounded-full flex items-center justify-center bg-surface-container-high text-on-surface hover:bg-primary hover:text-white transition-all">
                        <span class="material-symbols-outlined">east</span>
                    </a>
                @else
                    <span
                        class="w-12 h-12 rounded-full flex items-center justify-center bg-surface-container-high text-outline-variant cursor-not-allowed">
                        <span class="material-symbols-outlined">east</span>
                    </span>
                @endif
            </div>
        </div>
    </main>
    <!-- BottomNavBar Component (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl shadow-[0_-4px_20px_rgba(0,0,0,0.03)] rounded-t-[1.5rem] border-t border-[#abadaf]/15">
        <a href="{{ route('teacher.courses') }}"
            class="flex flex-col items-center justify-center bg-cyan-50 dark:bg-cyan-900/30 text-cyan-600 dark:text-cyan-300 rounded-2xl px-5 py-2 active:scale-90 transition-transform">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Courses</span>
        </a>
        <a href="{{ route('teacher.codeLab') }}"
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 active:scale-90 transition-transform">
            <span class="material-symbols-outlined">terminal</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Playground</span>
        </a>
        <a href="{{ route('teacher.careers') }}"
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 active:scale-90 transition-transform">
            <span class="material-symbols-outlined">work</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Mgmt</span>
        </a>
        <a href="{{ route('profile') }}"
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 active:scale-90 transition-transform">
            <span class="material-symbols-outlined">person</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Profile</span>
        </a>
    </nav>
    <!-- Modal Overlay -->
    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 modal-blur hidden" id="modal_course">
        <div
            class="bg-surface-container-lowest w-full max-w-2xl max-h-[90vh] overflow-y-auto rounded-2xl shadow-2xl animate-in fade-in zoom-in duration-300">
            <!-- Modal Header -->
            <div class="px-8 pt-8 pb-4 flex justify-between items-center">
                <h2 class="text-2xl font-bold font-headline text-on-background">
                    Create <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">New
                        Course</span> </h2>
                <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-all">
                    <span class="material-symbols-outlined" data-icon="close">close</span>
                </button>
            </div>
            <!-- Modal Content (Form) -->
            <form action="{{ route('teacher.courses.store') }}" method="POST" enctype="multipart/form-data"
                class="px-8 pb-8 space-y-6">
                @csrf
                <div class="space-y-4">
                    <!-- Course Title -->
                    <div class="space-y-1.5">
                        <label class="text-xs font-semibold text-on-surface-variant uppercase tracking-wide px-1"
                            for="course-title">Course Title</label>
                        <input name="title" required
                            class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary rounded-xl py-3 px-4 text-on-surface placeholder:text-outline-variant transition-all"
                            id="course-title" placeholder="e.g. Advanced Reactive Systems" type="text" />
                    </div>
                    <!-- Category Dropdown -->
                    <div class="space-y-1.5">
                        <label class="text-xs font-semibold text-on-surface-variant uppercase tracking-wide px-1"
                            for="category">Category</label>
                        <div class="relative">
                            <select name="category" required
                                class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary rounded-xl py-3 px-4 text-on-surface appearance-none cursor-pointer"
                                id="category">
                                <option disabled="" selected="" value="">Select a curriculum category</option>
                                <option value="frontend">Frontend Engineering</option>
                                <option value="backend">Backend Architecture</option>
                                <option value="ai">Artificial Intelligence</option>
                                <option value="ux">Design Systems &amp; UX</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant"
                                data-icon="expand_more">expand_more</span>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="space-y-1.5">
                        <label class="text-xs font-semibold text-on-surface-variant uppercase tracking-wide px-1"
                            for="description">Description</label>
                        <textarea name="description" required
                            class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary rounded-xl py-3 px-4 text-on-surface placeholder:text-outline-variant transition-all resize-none"
                            id="description" placeholder="Briefly describe the course objectives and target audience..."
                            rows="4"></textarea>
                    </div>
                    <!-- Upload Zone -->
                    <div class="space-y-1.5">
                        <label class="text-xs font-semibold text-on-surface-variant uppercase tracking-wide px-1">Cover
                            Image</label>
                        <div
                            class="group relative flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-outline-variant/30 rounded-2xl bg-surface-container-low hover:bg-surface-container hover:border-primary/50 transition-all cursor-pointer">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <div
                                    class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm mb-3 text-primary group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined" data-icon="cloud_upload">cloud_upload</span>
                                </div>
                                <p class="mb-1 text-sm text-on-surface font-medium">Click to upload or drag and drop</p>
                                <p class="text-xs text-on-surface-variant">SVG, PNG, JPG or GIF (max. 800x400px)</p>
                            </div>
                            <input name="image" required class="hidden" type="file" />
                        </div>
                    </div>
                    <!-- Modules Section -->
                    <div class="space-y-3" id="modules-container">
                        <div class="flex items-center justify-between">
                            <label class="text-xs font-semibold text-on-surface-variant uppercase tracking-wide px-1">Course Modules</label>
                            <button type="button" id="add_module_btn" class="text-xs bg-primary/10 text-primary font-bold px-3 py-1.5 rounded-lg hover:bg-primary/20 transition-colors flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">add</span> Add Module
                            </button>
                        </div>
                        <div id="modules_list" class="space-y-4 max-h-64 overflow-y-auto pr-2">
                            <!-- Dynamic modules will be appended here -->
                        </div>
                    </div>
                </div>
                <!-- Form Actions -->
                <div class="pt-4 flex items-center justify-end gap-4">
                    <button id="cancel_modal_btn"
                        class="px-6 py-2.5 text-on-surface-variant font-semibold hover:text-on-surface transition-colors"
                        type="button">
                        Cancel
                    </button>
                    <button
                        class="px-8 py-2.5 bg-gradient-to-br from-primary to-primary-dim text-on-primary font-bold rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all"
                        type="submit">
                        Create Course
                    </button>
                </div>
            </form>
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
        document.addEventListener('DOMContentLoaded', function () {
            const newCourseBtn = document.getElementById('new_course_btn');
            const modalCourse = document.getElementById('modal_course');
            const cancelModalBtn = document.getElementById('cancel_modal_btn');
            const closeModalBtn = modalCourse.querySelector('button .material-symbols-outlined[data-icon="close"]').parentElement;

            const uploadZone = document.querySelector('.group.relative.flex.flex-col.items-center.justify-center');
            const fileInput = document.querySelector('input[name="image"]');

            if (uploadZone && fileInput) {
                uploadZone.addEventListener('click', () => fileInput.click());
                fileInput.addEventListener('change', function () {
                    if (this.files && this.files[0]) {
                        const fileName = this.files[0].name;
                        const p = uploadZone.querySelector('p.mb-1');
                        if (p) p.textContent = `Selected: ${fileName}`;
                    }
                });
            }

            function showModal() {
                modalCourse.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function hideModal() {
                modalCourse.classList.add('hidden');
                document.body.style.overflow = '';
            }

            if (newCourseBtn) {
                newCourseBtn.addEventListener('click', showModal);
            }

            if (cancelModalBtn) {
                cancelModalBtn.addEventListener('click', hideModal);
            }

            if (closeModalBtn) {
                closeModalBtn.addEventListener('click', hideModal);
            }

            // Close modal on overlay click
            modalCourse.addEventListener('click', function (e) {
                if (e.target === modalCourse) {
                    hideModal();
                }
            });

            // Add Module Logic
            const addModuleBtn = document.getElementById('add_module_btn');
            const modulesList = document.getElementById('modules_list');
            let moduleIndex = 0;

            if (addModuleBtn && modulesList) {
                addModuleBtn.addEventListener('click', function() {
                    const moduleHtml = `
                        <div class="module-item p-4 bg-surface rounded-xl border border-outline-variant/20 relative group">
                            <button type="button" class="remove-module-btn absolute top-2 right-2 text-error opacity-0 group-hover:opacity-100 transition-opacity p-1 hover:bg-error/10 rounded-lg">
                                <span class="material-symbols-outlined text-[18px]">delete</span>
                            </button>
                            <div class="space-y-3">
                                <div class="space-y-1">
                                    <label class="text-[10px] font-bold text-on-surface-variant uppercase module-title-label">Module Title</label>
                                    <input name="modules[${moduleIndex}][title]" required class="w-full bg-white border-none focus:ring-2 focus:ring-primary rounded-lg py-2 px-3 text-sm text-on-surface placeholder:text-outline-variant" placeholder="e.g. Introduction" type="text" />
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[10px] font-bold text-on-surface-variant uppercase">Module Description</label>
                                    <textarea name="modules[${moduleIndex}][description]" required class="w-full bg-white border-none focus:ring-2 focus:ring-primary rounded-lg py-2 px-3 text-sm text-on-surface placeholder:text-outline-variant resize-none" rows="2" placeholder="type the module content here"></textarea>
                                </div>
                            </div>
                        </div>
                    `;
                    modulesList.insertAdjacentHTML('beforeend', moduleHtml);
                    moduleIndex++;
                    updateModuleLabels();
                });

                modulesList.addEventListener('click', function(e) {
                    const removeBtn = e.target.closest('.remove-module-btn');
                    if (removeBtn) {
                        removeBtn.closest('.module-item').remove();
                        updateModuleLabels();
                    }
                });

                function updateModuleLabels() {
                    const items = modulesList.querySelectorAll('.module-item');
                    items.forEach((item, index) => {
                        const label = item.querySelector('.module-title-label');
                        if (label) label.textContent = 'Module ' + (index + 1) + ' Title';
                    });
                }
            }
        });
    </script>
@include('partials.ai_chat')
</body>

</html>