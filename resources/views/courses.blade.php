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
    <style>
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
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface min-h-screen">
    <!-- TopAppBar Component -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
                            alt=""></a></span>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors"
                    href="{{ url('/dashboard') }}">Dashboard</a>
                <div class="relative group py-4">
                    <button
                        class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold">
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
                        <a href="{{ route('assesements') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Assesement</a>
                        <a href="{{ route('career') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Career</a>
                        <a href="{{ url('/certifications') }}"
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
                    <button
                        class=" text-white px-6 py-3 rounded-xl font-bold flex items-center gap-2 shadow-sm bg-gradient-to-r from-primary to-primary-container hover:scale-[1.02] active:scale-95 transition-all">
                        Resume Learning <span class="material-symbols-outlined">arrow_forward</span>
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
                            Duration: <span class="font-bold text-primary">Any</span>
                            <span class="material-symbols-outlined text-sm">expand_more</span>
                        </button>
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
            <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(44,47,49,0.04)] hover:shadow-[0px_10px_40px_rgba(0,101,115,0.06)] transition-all flex flex-col">
                <!-- Thumbnail -->
                <div class="relative h-56 overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        src="{{ $course->thumbnail }}"
                        alt="{{ $course->title }}" />
                    <div class="absolute top-4 left-4 flex gap-2">
                        @if($course->is_premium)
                            <span class="bg-primary text-on-primary text-[10px] font-bold px-2 py-1 rounded tracking-tighter uppercase">PRO</span>
                        @else
                            <span class="bg-white/90 backdrop-blur-md text-primary text-[10px] font-bold px-2 py-1 rounded tracking-tighter uppercase">FREE</span>
                        @endif
                        <span class="bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-2 py-1 rounded tracking-tighter uppercase">{{ $course->level }}</span>
                    </div>
                    @if($course->rating > 0)
                    <div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md rounded-lg px-2 py-1 flex items-center gap-1 shadow-sm">
                        <span class="material-symbols-outlined text-yellow-500 text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="text-xs font-bold text-on-surface">{{ number_format($course->rating, 1) }}</span>
                    </div>
                    @endif
                </div>
                <!-- Body -->
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs font-semibold text-primary uppercase tracking-widest">{{ $course->category }}</span>
                        @if($course->modules_count > 0)
                            <span class="w-1 h-1 rounded-full bg-outline-variant/30"></span>
                            <span class="text-xs text-on-surface-variant">{{ $course->modules_count }} Modules</span>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-on-surface mb-3 group-hover:text-primary transition-colors">
                        {{ $course->title }}
                    </h3>
                    <p class="text-on-surface-variant text-sm line-clamp-2 mb-6">{{ $course->description }}</p>
                    <div class="mt-auto pt-6 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            @if($course->duration)
                                <span class="material-symbols-outlined text-on-surface-variant text-base">schedule</span>
                                <span class="text-xs font-medium text-on-surface-variant">{{ $course->duration }}</span>
                            @endif
                        </div>
                        <a class="text-primary font-bold text-sm flex items-center gap-1 hover:translate-x-1 transition-transform"
                            href="{{ route('course', $course->id) }}">
                            View Details <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 py-24 flex flex-col items-center justify-center text-center">
                <span class="material-symbols-outlined text-6xl text-outline-variant mb-4">school</span>
                <h3 class="text-xl font-bold text-on-surface mb-2">No courses available yet</h3>
                <p class="text-on-surface-variant text-sm max-w-sm">Teachers haven't published any courses yet. Check back soon!</p>
            </div>
            @endforelse
        </section>

        <!-- Pagination -->
        @if($courses->hasPages())
        <div class="mt-20 flex flex-col md:flex-row items-center justify-between gap-8 border-t border-outline-variant/10 pt-12">
            <div>
                <p class="text-sm text-on-surface-variant">Showing <span class="font-bold text-on-surface">{{ $courses->firstItem() }}–{{ $courses->lastItem() }}</span> of {{ $courses->total() }} courses</p>
            </div>
            <div class="flex items-center gap-2">
                @if($courses->onFirstPage())
                    <span class="w-12 h-12 rounded-full flex items-center justify-center bg-surface-container text-outline cursor-not-allowed opacity-50">
                        <span class="material-symbols-outlined">west</span>
                    </span>
                @else
                    <a href="{{ $courses->previousPageUrl() }}" class="w-12 h-12 rounded-full flex items-center justify-center bg-surface-container-high text-on-surface hover:bg-primary hover:text-white transition-all">
                        <span class="material-symbols-outlined">west</span>
                    </a>
                @endif
                <div class="flex gap-1 px-4">
                    @for($p = 1; $p <= $courses->lastPage(); $p++)
                        @if($p == $courses->currentPage())
                            <span class="w-10 h-10 rounded-full font-bold bg-primary text-white flex items-center justify-center">{{ $p }}</span>
                        @else
                            <a href="{{ $courses->url($p) }}" class="w-10 h-10 rounded-full font-bold hover:bg-surface-container-high flex items-center justify-center transition-colors">{{ $p }}</a>
                        @endif
                    @endfor
                </div>
                @if($courses->hasMorePages())
                    <a href="{{ $courses->nextPageUrl() }}" class="w-12 h-12 rounded-full flex items-center justify-center bg-surface-container-high text-on-surface hover:bg-primary hover:text-white transition-all">
                        <span class="material-symbols-outlined">east</span>
                    </a>
                @else
                    <span class="w-12 h-12 rounded-full flex items-center justify-center bg-surface-container text-outline cursor-not-allowed opacity-50">
                        <span class="material-symbols-outlined">east</span>
                    </span>
                @endif
            </div>
        </div>
        @endif
    </main>
    <!-- BottomNavBar Component (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl shadow-[0_-4px_20px_rgba(0,0,0,0.03)] rounded-t-[1.5rem] border-t border-[#abadaf]/15">
        <a href="{{ route('courses') }}"
            class="flex flex-col items-center justify-center bg-cyan-50 dark:bg-cyan-900/30 text-cyan-600 dark:text-cyan-300 rounded-2xl px-5 py-2 active:scale-90 transition-transform">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Learn</span>
        </a>
        <a href="{{ url('/playground') }}"
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 active:scale-90 transition-transform">
            <span class="material-symbols-outlined">terminal</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Build</span>
        </a>
        <a href="{{ route('career') }}"
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 active:scale-90 transition-transform">
            <span class="material-symbols-outlined">work</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Jobs</span>
        </a>
        <a href="{{ url('/profile') }}"
            class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 active:scale-90 transition-transform">
            <span class="material-symbols-outlined">person</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Profile</span>
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
