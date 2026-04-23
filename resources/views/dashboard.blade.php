<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard | CodeMonter</title>
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
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7f9;
            color: #2c2f31;
            min-height: max(884px, 100dvh);
        }

        .font-headline {
            font-family: 'Space Grotesk', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>

</head>

<body class="bg-[#D0E3E6] selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopAppBar Execution -->
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
                        class="flex items-center gap-1 text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-medium">
                        Learn
                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                    </button>
                    <div
                        class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                        <a href="{{ url('/courses') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Courses</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Exercices</a>
                        <a href="{{ url('/codeLab') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Playground</a>
                        <a href="{{ url('/quizzes') }}"
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
                        <a href="{{ url('/assesement') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Assesement</a>
                        <a href="{{ url('/career') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Career</a>
                        <a href="{{ url('/certifications') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Certifications</a>
                    </div>
                </div>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors text-slate-500 font-bold"
                    href="{{ url('/community') }}">Community</a>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors text-slate-500 font-bold"
                    href="{{ url('/contact') }}">Contact</a>

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
                                        <p class="text-sm text-on-surface font-medium leading-tight">Course completed:
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
                    <a href="{{ url('/profile') }}" class="block w-full h-full">
                        <img alt="User profile avatar" class="w-full h-full object-cover"
                            src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=random' }}" />
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="max-w-7xl mx-auto px-6 py-8 pb-32">
        @if (session('success'))
            <div class="mb-6 p-4 bg-primary/10 border border-primary/20 text-primary rounded-xl flex items-center gap-3">
                <span class="material-symbols-outlined">check_circle</span>
                <p class="font-medium">{{ session('success') }}</p>
            </div>
        @endif
        <!-- Hero Welcome Section -->
        <section class="mb-12">
            <h1 class="text-5xl md:text-6xl font-headline font-bold text-on-surface tracking-tight leading-tight">
                Welcome back, <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Alex!</span>
            </h1>
            <p class="text-on-surface-variant mt-4 text-lg max-w-2xl font-body">
                You're on a <span class="font-bold text-on-surface">12-day streak</span>. Keep the momentum going and
                reach your daily XP goal to unlock the Senior Architect badge.
            </p>
        </section>
        <!-- Bento Grid Dashboard -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Progress Tracker: Spans 8 cols -->
            <div
                class="md:col-span-8 bg-surface-container-lowest rounded-xl p-8 shadow-[0px_4px_20px_rgba(44,47,49,0.04)] border border-outline-variant/10">
                <div class="flex justify-between items-end mb-8">
                    <div>
                        <h2 class="text-2xl font-headline font-semibold text-on-surface">Learning Progress</h2>
                        <p class="text-sm text-on-surface-variant">Full-Stack Mastery Path</p>
                    </div>
                    <div class="text-right">
                        <span class="text-4xl font-headline font-bold text-primary">74%</span>
                        <p class="text-[10px] uppercase tracking-tighter text-outline">Overall Completion</p>
                    </div>
                </div>
                <div class="relative h-4 w-full bg-surface-container rounded-full overflow-hidden mb-10">
                    <div
                        class="absolute top-0 left-0 h-full bg-gradient-to-r from-primary to-primary-container rounded-full w-[74%]">
                    </div>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <div class="bg-surface-container-low p-4 rounded-lg">
                        <span class="material-symbols-outlined text-primary mb-2">bolt</span>
                        <p class="text-xs text-on-surface-variant uppercase font-bold tracking-widest">Streak</p>
                        <p class="text-xl font-headline font-bold">12 Days</p>
                    </div>
                    <div class="bg-surface-container-low p-4 rounded-lg">
                        <span class="material-symbols-outlined text-primary mb-2">military_tech</span>
                        <p class="text-xs text-on-surface-variant uppercase font-bold tracking-widest">Points</p>
                        <p class="text-xl font-headline font-bold" id="user-points-display">
                            {{ number_format(auth()->user()->points) }} XP</p>
                    </div>
                    <div class="bg-surface-container-low p-4 rounded-lg">
                        <span class="material-symbols-outlined text-primary mb-2">menu_book</span>
                        <p class="text-xs text-on-surface-variant uppercase font-bold tracking-widest">Courses</p>
                        <p class="text-xl font-headline font-bold">6 Active</p>
                    </div>
                    <div class="bg-surface-container-low p-4 rounded-lg">
                        <span class="material-symbols-outlined text-primary mb-2">timer</span>
                        <p class="text-xs text-on-surface-variant uppercase font-bold tracking-widest">Hours</p>
                        <p class="text-xl font-headline font-bold">124 Total</p>
                    </div>
                </div>
            </div>
            <!-- Streak Visualizer: Spans 4 cols -->
            <div
                class="md:col-span-4 bg-primary text-on-primary rounded-xl p-8 flex flex-col justify-between relative overflow-hidden shadow-[0px_10px_40px_rgba(0,101,115,0.06)]">
                <div class="relative z-10">
                    <h3 class="text-xl font-headline font-bold mb-2">Daily Goal</h3>
                    <p class="text-sm opacity-80">850 / 1000 XP</p>
                </div>
                <div class="relative z-10 mt-8">
                    <div class="flex items-center gap-1 mb-4">
                        <div class="h-12 w-2 bg-on-primary/20 rounded-full"></div>
                        <div class="h-16 w-2 bg-on-primary/40 rounded-full"></div>
                        <div class="h-10 w-2 bg-on-primary/20 rounded-full"></div>
                        <div class="h-20 w-2 bg-on-primary rounded-full"></div>
                        <div class="h-14 w-2 bg-on-primary/60 rounded-full"></div>
                        <div class="h-18 w-2 bg-on-primary rounded-full"></div>
                        <div class="h-24 w-2 bg-primary-fixed rounded-full"></div>
                    </div>
                    <button
                        class="w-full bg-primary-fixed text-white font-bold py-3 rounded-lg hover:scale-105 transition-transform active:scale-95 bg-gradient-to-r from-primary to-primary-container">
                        Claim Daily Bonus
                    </button>
                </div>
                <!-- Abstract decorative element -->
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-primary-container/20 rounded-full blur-3xl">
                </div>
            </div>
            <!-- Recent Activity Feed: Spans 6 cols -->
            <div class="md:col-span-6 space-y-4" x-data="{ showAll: false }">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="text-xl font-headline font-bold text-on-surface">Recent Activity</h3>
                    @if($activities->count() > 3)
                        <button @click="showAll = !showAll" class="text-sm text-primary font-semibold hover:underline"
                            x-text="showAll ? 'Show less' : 'View all'">
                            View all
                        </button>
                    @endif
                </div>

                <!-- Recent Activities (Top 3) -->
                <div class="space-y-4" x-show="!showAll">
                    @forelse($recentActivities as $activity)
                        <div
                            class="bg-surface-container-lowest rounded-xl p-4 flex items-center gap-4 shadow-sm group hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-lg 
                                    @if($activity->type == 'coding') bg-tertiary-container @elseif($activity->type == 'course') bg-primary-container @elseif($activity->type == 'project') bg-secondary-container @else bg-surface-variant @endif 
                                    flex items-center justify-center">
                                <span
                                    class="material-symbols-outlined 
                                        @if($activity->type == 'coding') text-on-tertiary-container @elseif($activity->type == 'course') text-on-primary-container @elseif($activity->type == 'project') text-on-secondary-container @else text-on-surface-variant @endif">
                                    {{ $activity->icon ?? ($activity->type == 'coding' ? 'code' : ($activity->type == 'course' ? 'school' : ($activity->type == 'project' ? 'dashboard' : 'research'))) }}
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-bold">{{ $activity->title }}</p>
                                <p class="text-xs text-on-surface-variant">{{ $activity->created_at->diffForHumans() }} •
                                    {{ ucfirst($activity->type) }}</p>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline-variant opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                        </div>
                    @empty
                        <p class="text-sm text-on-surface-variant italic">No recent activities found.</p>
                    @endforelse
                </div>

                <!-- All Activities -->
                <div class="space-y-4" x-show="showAll" x-cloak x-transition>
                    @foreach($activities as $activity)
                        <div
                            class="bg-surface-container-lowest rounded-xl p-4 flex items-center gap-4 shadow-sm group hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-lg 
                                    @if($activity->type == 'coding') bg-tertiary-container @elseif($activity->type == 'course') bg-primary-container @elseif($activity->type == 'project') bg-secondary-container @else bg-surface-variant @endif 
                                    flex items-center justify-center">
                                <span
                                    class="material-symbols-outlined 
                                        @if($activity->type == 'coding') text-on-tertiary-container @elseif($activity->type == 'course') text-on-primary-container @elseif($activity->type == 'project') text-on-secondary-container @else text-on-surface-variant @endif">
                                    {{ $activity->icon ?? ($activity->type == 'coding' ? 'code' : ($activity->type == 'course' ? 'school' : ($activity->type == 'project' ? 'dashboard' : 'research'))) }}
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-bold">{{ $activity->title }}</p>
                                <p class="text-xs text-on-surface-variant">{{ $activity->created_at->diffForHumans() }} •
                                    {{ ucfirst($activity->type) }}</p>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline-variant opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Featured Courses / Career: Spans 6 cols -->
            <div class="md:col-span-6 space-y-4">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="text-xl font-headline font-bold text-on-surface">Continue Learning</h3>
                </div>
                <div class="relative rounded-xl overflow-hidden aspect-[16/7] shadow-lg group">
                    <img alt="Cybersecurity"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="Futuristic glowing digital security interface with complex data structures and blue neon light"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAu3nmXhUJ8w9csFHG9GcBsjQY8EJuyLjgi0DMGCoony9gjHsfF3nFwF8cWrrRpmQsgbnbicXyMp1Qf-ZLj_geTeY2UxEPYTQBJFJdresqKyQNKrTZs2ukUz7Cs8BgLgP3y5g-e3uZ61B6MBJK45snv2MgIe0GVhvj1ZrViq2fwgdwNY6QU48rXQvTAh5zzSW-hx45Run51qT1ZVaFGX2kcIUWFzUuf72G5yg6LchHthlMxOMa0kczvArRjyfmip2lwnTrfjIVLImOl" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-6 flex flex-col justify-end">
                        <span
                            class="bg-primary-fixed text-on-primary-fixed text-[10px] font-bold px-2 py-1 rounded w-fit mb-2 uppercase">In
                            Progress</span>
                        <h4 class="text-white text-xl font-headline font-bold">Advanced Cybersecurity</h4>
                        <p class="text-white/70 text-sm">Module 4: Network Penetration</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-surface-container-lowest p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <h4 class="font-bold text-sm mb-1">Code Lab</h4>
                        <p class="text-xs text-on-surface-variant mb-3">Practice real projects</p>
                        <div class="flex -space-x-2">
                            <img alt="user" class="w-6 h-6 rounded-full border-2 border-surface-container-lowest"
                                data-alt="Avatar of a female software developer"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZr1MYyd3vxgSwLDXAgSIerSOLEWFQ-hj-rQsGaX5Uz3-6N3VaiUWkQoQVM2E_xYfeobV2Yzy3BbL8i08CwuFhgALJwYquFFJk7rTYWk6kqju7xXtovHbiFgODPSbzzjhTnqKgHGkjAxe6H8bFDusNY8l6sOMPFZPv_wCWPShJsG8jkaX3ufOVcowd1Bz8v4hzpE_6Weo-gt3X4aOpt_PycN2firqNzXBf5GcSEHZZOWxyJDfHGl1FjqJ6rV5fx-CD3vrZ3NpY4RBf" />
                            <img alt="user" class="w-6 h-6 rounded-full border-2 border-surface-container-lowest"
                                data-alt="Avatar of a male software developer"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtYaZoQHZ45SItv1EmspsV-THcjtXzGa5ihUr5EghdqbJXuAFMmLDQ91Gm2OConnUdnTj04MJ9vc-7CmF1iuGYrMyTfrm2YtrR9hhyqCAyP9p2AYbjaoLIrxi2ObaYKjFBFNTqzsadbb7XyqUSUtUa1s_pV4Pw0FwMVcB6XweTSaPssphocdUgzvT9g3Lt-Oxk-mpFESiP90Ehm9r-JVsj2HDdrie0w3b6ByoZTlo9I5ecnd-YjS3Hsp9s9dmIzkMn16SG9jBhnniJ" />
                            <div
                                class="w-6 h-6 rounded-full bg-surface-container text-[8px] flex items-center justify-center font-bold">
                                +12</div>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <h4 class="font-bold text-sm mb-1">Career Hub</h4>
                        <p class="text-xs text-on-surface-variant mb-3">3 new job matches</p>
                        <span
                            class="inline-flex items-center text-primary text-[10px] font-bold uppercase tracking-widest">Explore
                            <span class="material-symbols-outlined text-[14px] ml-1">arrow_forward</span></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- NavigationDrawer (Contextual Mobile Overlay / Left Rail) -->
    <aside
        class="hidden lg:flex fixed left-0 top-0 h-screen z-40 flex-col p-4 bg-[#eef1f3] dark:bg-slate-900 h-full w-72 rounded-r-2xl shadow-[0px_10px_40px_rgba(0,101,115,0.06)] transform -translate-x-full transition-transform hover:translate-x-0 group">
        <!-- Drawer Content would go here, activated on hover or toggle -->
        <div class="flex flex-col h-full">
            <div class="p-4 mb-8">
                <span class="text-xl font-bold text-cyan-600 font-headline">Kinetic</span>
            </div>
            <nav class="space-y-2">
                <a class="flex items-center gap-4 p-4 bg-white dark:bg-slate-800 text-cyan-600 dark:text-cyan-400 shadow-sm rounded-xl font-medium"
                    href="{{ url('/courses') }}">
                    <span class="material-symbols-outlined">school</span> Courses
                </a>
                <a class="flex items-center gap-4 p-4 text-slate-600 dark:text-slate-400 hover:bg-white/50 rounded-xl transition-all hover:translate-x-1"
                    href="{{ url('/code') }}">
                    <span class="material-symbols-outlined">code_blocks</span> Playground
                </a>
                <a class="flex items-center gap-4 p-4 text-slate-600 dark:text-slate-400 hover:bg-white/50 rounded-xl transition-all hover:translate-x-1"
                    href="{{ url('/certifications') }}">
                    <span class="material-symbols-outlined">verified</span> Certifications
                </a>
                <a class="flex items-center gap-4 p-4 text-slate-600 dark:text-slate-400 hover:bg-white/50 rounded-xl transition-all hover:translate-x-1"
                    href="{{ url('/community') }}">
                    <span class="material-symbols-outlined">group</span> Community
                </a>
            </nav>
        </div>
    </aside>
    <!-- BottomNavBar Execution -->
    <nav
        class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 md:hidden bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl rounded-t-[1.5rem] shadow-[0_-4px_20px_rgba(0,0,0,0.03)] border-t border-[#abadaf]/15">
        <a class="flex flex-col items-center justify-center bg-cyan-50 dark:bg-cyan-900/30 text-cyan-600 dark:text-cyan-300 rounded-2xl px-5 py-2 active:scale-90 transition-transform"
            href="{{ url('/dashboard') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Learn</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90"
            href="{{ url('/playground') }}">
            <span class="material-symbols-outlined">terminal</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Build</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90"
            href="{{ url('/career') }}">
            <span class="material-symbols-outlined">work</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Jobs</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90"
            href="{{ url('/profile') }}">
            <span class="material-symbols-outlined">person</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Profile</span>
        </a>
    </nav>
    <!-- Contextual FAB (Only for Home/Dashboard) -->
    <button
        class="fixed right-6 bottom-24 md:bottom-8 w-14 h-14 bg-gradient-to-br from-primary to-primary-container text-on-primary rounded-full shadow-lg flex items-center justify-center hover:scale-110 active:scale-95 transition-all z-40">
        <span class="material-symbols-outlined text-3xl" id="add_activity_btn">add</span>
    </button>


    <!-- Daily Bonus Modal -->
    <div x-data="{ 
            open: {{ $showBonusModal ? 'true' : 'false' }}, 
            bonus: {{ $bonusAmount }},
            claiming: false,
            claimed: false
        }" x-show="open" x-cloak class="fixed inset-0 z-[100] flex items-center justify-center p-6">
        <div class="absolute inset-0 bg-[#2c2f31]/60 backdrop-blur-md" @click="open = false"></div>

        <div class="relative bg-surface-container-lowest w-full max-w-md rounded-3xl shadow-2xl overflow-hidden border border-white/20 transform transition-all"
            x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100">

            <!-- Modal Header / Decoration -->
            <div
                class="h-32 bg-gradient-to-br from-primary to-primary-container flex items-center justify-center relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
                <div class="absolute -left-10 -bottom-10 w-32 h-32 bg-white/10 rounded-full blur-xl"></div>
                <span class="material-symbols-outlined text-6xl text-white animate-bounce"
                    style="font-variation-settings: 'FILL' 1;">military_tech</span>
            </div>

            <div class="p-8 text-center">
                <h2 class="text-3xl font-headline font-bold text-on-surface mb-2">Daily Bonus!</h2>
                <p class="text-on-surface-variant leading-relaxed mb-8">
                    Congrats, you're daily bonus is here, keep going till you get it.
                </p>

                <div class="bg-surface-container-low rounded-2xl p-6 mb-8 border border-outline-variant/10">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-outline mb-2">You Received</p>
                    <div class="flex items-center justify-center gap-2">
                        <span class="text-4xl font-headline font-black text-primary" x-text="bonus"></span>
                        <span class="text-xl font-bold text-primary-fixed-dim">XP</span>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <button @click="
                            claiming = true;
                            fetch('{{ route('bonus.claim') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({ amount: bonus })
                            })
                            .then(res => res.json())
                            .then(data => {
                                if(data.success) {
                                    claimed = true;
                                    const display = document.getElementById('user-points-display');
                                    if(display) {
                                        display.innerText = new Intl.NumberFormat().format(data.new_points) + ' XP';
                                    }
                                    setTimeout(() => { open = false }, 1500);
                                }
                            })
                            .finally(() => claiming = false)
                        "
                        class="w-full py-4 bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold rounded-2xl shadow-lg shadow-primary/20 hover:shadow-primary/40 hover:-translate-y-1 transition-all active:scale-95 disabled:opacity-70 flex items-center justify-center gap-2"
                        :disabled="claiming || claimed">
                        <template x-if="!claiming && !claimed">
                            <span>Claim Points</span>
                        </template>
                        <template x-if="claiming">
                            <span class="flex items-center gap-2">
                                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                </svg>
                                Claiming...
                            </span>
                        </template>
                        <template x-if="claimed">
                            <span class="flex items-center gap-2">
                                <span class="material-symbols-outlined">check_circle</span>
                                Claimed!
                            </span>
                        </template>
                    </button>

                    <button @click="open = false"
                        class="w-full py-3 text-sm font-bold text-on-surface-variant hover:text-on-surface transition-colors">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Backdrop -->
    <div class="fixed inset-0 z-50 flex items-center justify-center p-6 sm:p-12 hidden transition-all duration-1000 ease-in-out"
        id="modal_activity">
        <div class="absolute inset-0 bg-[#2c2f31]/40 backdrop-blur-sm"></div>
        <!-- Modal Content -->
        <div
            class="relative bg-surface-container-lowest w-full max-w-2xl rounded-xl shadow-[0px_10px_40px_rgba(0,101,115,0.1)] overflow-hidden flex flex-col sm:flex-row">
            <!-- Modal Left Side (Editorial Decorative) -->


            <div
                class="hidden sm:flex flex-col justify-between p-8 bg-surface-container-low w-1/3 relative overflow-hidden">
                <div class="relative z-10">
                    <span
                        class="px-3 py-1 bg-primary/10 text-primary text-[10px] font-extrabold uppercase tracking-widest rounded-full">New
                        Entry</span>
                    <h3 class="font-headline font-bold text-3xl mt-4 leading-tight">Define Your Motion</h3>
                    <p class="text-sm text-on-surface-variant mt-4 leading-relaxed">
                        Precision starts with capturing every experiment, course, and project milestone.
                    </p>
                </div>
                <div class="relative z-10">
                    <div class="flex -space-x-2">
                        <img alt="Team member" class="w-8 h-8 rounded-full border-2 border-white"
                            data-alt="close-up portrait of a smiling woman with glasses in a professional studio setting with soft lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKE7R0X0smNUFtCUtovxw_05IcFyMGFsX0HlP86BG0I5tXK8RzuN8XFsO1B4O1FTw2RqND6aT6PFsPjsDMm7pj7J3wIflhs9PCdkhofcuKJwIkN1mtEM0SjUJNm9ZB9r4RHhjtr-i1pxYKjR1mvFIDtmja_ThTo534E7diB9hDmmzLZI3WSg15YyHmwlimAryOoM_oTFFJ_vJpL4Sd3hvlVlmQGVVkbI-CgY3ltECMOemN0iqbTaUsQxt8BBbuV1zGhVigov2tlaZm" />
                        <img alt="Team member" class="w-8 h-8 rounded-full border-2 border-white"
                            data-alt="professional headshot of a middle-aged man with short beard and friendly expression in corporate attire"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjMo1UX2h_mUSRaJJ0WFfdsTRIXkhmC6Iue4S2QF5ATUsSfLS8k_K5HFY2wSjmByosqNNFbexBuby3pJ_RDSKU3l8PRH5o8r4iO5Fsy9JpGR0KKA_Xke8NvU_b0WGUj1EDAkWmbHH02mKc-_IrN_-JxPnfD8lyFgpfV7y3_fjaVMMS6zq81-hlv5w5mXi6e3uLhFz6gXxhDtFsHp-m4bepgKXoPKx9dAQE6pbebKyskbN1tWseQxChiU3eNjbmIMRibFnsT9QgGZmx" />
                    </div>
                    <p class="text-[10px] text-outline mt-2 font-medium">Synced with Lab HQ</p>
                </div>
                <!-- Background Abstract -->
                <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-primary-container/20 rounded-full blur-3xl">
                </div>
            </div>
            <!-- Form Side -->
            <div class="flex-1 p-8 sm:p-10 ">
                <div class="flex justify-between items-start mb-8">
                    <div>
                        <h2 class="text-2xl font-headline font-bold">Add New Activity</h2>
                        <p class="text-sm text-on-surface-variant">Fill in the technical specifications below.</p>
                    </div>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-container-low transition-colors text-outline"
                        id="close_modal_activity">
                        <span class="material-symbols-outlined" data-icon="close">close</span>
                    </button>
                </div>
                <form action="{{ route('activities.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Activity Type -->
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-wider text-outline px-1">Activity
                                Type</label>
                            <div class="relative">
                                <select name="type" required
                                    class="w-full appearance-none bg-surface-container-low border-none rounded-xl py-3 px-4 text-on-surface focus:ring-2 focus:ring-primary transition-all cursor-pointer font-medium">
                                    <option disabled="" selected="" value="">Select activity type...</option>
                                    <option value="coding">Coding Lab</option>
                                    <option value="course">Academy Course</option>
                                    <option value="project">Project Milestone</option>
                                    <option value="research">Neural Research</option>
                                </select>
                                <span
                                    class="absolute right-4 top-1/2 -translate-y-1/2 material-symbols-outlined pointer-events-none text-outline"
                                    data-icon="expand_more">expand_more</span>
                            </div>
                        </div>
                        <!-- Title -->
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-wider text-outline px-1">Activity
                                Title</label>
                            <input name="title" required
                                class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-on-surface placeholder:text-outline/50 focus:ring-2 focus:ring-primary transition-all font-medium"
                                placeholder="e.g. Neural Path Optimization" type="text" />
                        </div>
                        <!-- Description -->
                        <div class="space-y-2">
                            <label
                                class="text-xs font-bold uppercase tracking-wider text-outline px-1">Description</label>
                            <textarea name="description"
                                class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-on-surface placeholder:text-outline/50 focus:ring-2 focus:ring-primary transition-all font-medium resize-none"
                                placeholder="Define the core objectives and expected outputs..." rows="3"></textarea>
                        </div>
                        <!-- Tags -->
                        <div class="space-y-3">
                            <label class="text-xs font-bold uppercase tracking-wider text-outline px-1">System
                                Tags</label>
                            <div class="flex flex-wrap gap-2">
                                <div
                                    class="px-3 py-1.5 bg-tertiary-fixed text-on-tertiary-fixed text-xs font-bold rounded-lg flex items-center gap-2">
                                    <span>High Priority</span>
                                    <button class="material-symbols-outlined text-sm leading-none"
                                        data-icon="close">close</button>
                                </div>
                                <div
                                    class="px-3 py-1.5 bg-tertiary-fixed text-on-tertiary-fixed text-xs font-bold rounded-lg flex items-center gap-2">
                                    <span>Sprint_04</span>
                                    <button class="material-symbols-outlined text-sm leading-none"
                                        data-icon="close">close</button>
                                </div>
                                <button
                                    class="px-3 py-1.5 border border-dashed border-outline-variant text-outline-variant text-xs font-bold rounded-lg flex items-center gap-2 hover:bg-surface-container-low transition-colors">
                                    <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                                    <span>Add Tag</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="pt-6 flex items-center justify-end gap-4 border-t border-outline-variant/10">
                        <button
                            class="px-6 py-3 text-sm font-bold text-on-surface-variant hover:text-on-surface transition-colors"
                            type="button">Discard</button>
                        <button
                            class="px-8 py-3 bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold rounded-xl shadow-[0px_4px_15px_rgba(0,101,115,0.2)] hover:shadow-[0px_6px_20px_rgba(0,101,115,0.3)] transition-all active:scale-95"
                            type="submit">
                            Add Activity
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
            <script src="{{ asset('js/modals.js') }}"></script>
</body>

</html>