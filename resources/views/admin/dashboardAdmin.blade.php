<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DEVRAK Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
                        "secondary-container": "#d8e3fb",
                        "surface-container-high": "#dfe3e6",
                        "surface-dim": "#d0d5d8",
                        "on-tertiary-fixed": "#001737",
                        "on-tertiary": "#eff2ff",
                        "inverse-primary": "#3adffa",
                        "error-container": "#fb5151",
                        "on-error": "#ffefee",
                        "outline": "#747779",
                        "on-background": "#2c2f31",
                        "secondary-fixed": "#d8e3fb",
                        "primary-container": "#3adffa",
                        "on-secondary-fixed": "#354053",
                        "outline-variant": "#abadaf",
                        "surface-container-low": "#eef1f3",
                        "secondary": "#515c70",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed-dim": "#1ad0eb",
                        "on-tertiary-container": "#003064",
                        "surface-tint": "#006573",
                        "on-surface": "#2c2f31",
                        "error-dim": "#9f0519",
                        "on-primary-fixed-variant": "#005561",
                        "on-primary": "#daf8ff",
                        "primary-dim": "#005865",
                        "tertiary-container": "#84b1ff",
                        "on-secondary": "#eff2ff",
                        "on-secondary-container": "#475266",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "inverse-surface": "#0b0f10",
                        "surface-container-highest": "#d9dde0",
                        "on-secondary-fixed-variant": "#515c70",
                        "tertiary": "#005ab3",
                        "on-surface-variant": "#595c5e",
                        "on-primary-container": "#004b56",
                        "on-primary-fixed": "#00363e",
                        "surface-bright": "#f5f7f9",
                        "secondary-dim": "#455064",
                        "inverse-on-surface": "#9a9d9f",
                        "on-tertiary-fixed-variant": "#003874",
                        "surface-container": "#e5e9eb",
                        "surface-variant": "#d9dde0",
                        "on-error-container": "#570008",
                        "error": "#b31b25",
                        "surface": "#f5f7f9",
                        "primary-fixed": "#3adffa",
                        "tertiary-fixed": "#84b1ff",
                        "secondary-fixed-dim": "#cad5ed",
                        "tertiary-dim": "#004e9d",
                        "primary": "#006573",
                        "background": "#f5f7f9"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7f9;
            color: #2c2f31;
        }

        .font-space {
            font-family: 'Space Grotesk', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface">
    <!-- Main Content Canvas -->
    <main class=" min-h-screen">
        <header
            class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
            <div class="flex justify-between items-center px-2 w-full mx-auto">
                <div class="flex items-center w-[20%]">
                    <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]"
                                src="{{ asset('img/logo.png') }}" alt=""></a></span>
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
                            <a href="{{ url('/career') }}"
                                class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Careers</a>
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
                        <input class="bg-transparent border-none focus:ring-0 text-sm w-80"
                            placeholder="Search courses..." type="text" />
                    </div>
                    <div class="relative" x-data="{ showNotifications: false }">
                        <button @click="showNotifications = !showNotifications" @click.away="showNotifications = false"
                            class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#eef1f3] transition-colors relative">
                            <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                            @if(($unreadNotificationsCount ?? 0) > 0)
                                <span class="absolute top-2 right-2.5 w-2 h-2 bg-error rounded-full border border-white animate-pulse"></span>
                            @endif
                        </button>

                        <!-- Notifications Dropdown -->
                        <div x-show="showNotifications" x-transition.opacity x-transition:enter.duration.200ms
                            x-transition:leave.duration.150ms x-cloak
                            class="absolute top-14 right-0 w-80 sm:w-96 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 z-[100] overflow-hidden flex flex-col">

                            <div
                                class="p-4 border-b border-outline-variant/10 flex justify-between items-center bg-surface-container-lowest">
                                <h3 class="font-bold text-on-surface text-sm">Notifications</h3>
                                <span class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-0.5 rounded-full">
                                    {{ $unreadNotificationsCount ?? 0 }} New
                                </span>
                            </div>

                            <div class="max-h-80 overflow-y-auto">
                                @forelse(($notifications ?? collect()) as $notification)
                                    @php
                                        $isUnread = is_null($notification->read_at);
                                        $icon = match ($notification->type) {
                                            'new_user' => 'person_add',
                                            'points' => 'military_tech',
                                            default => 'notifications',
                                        };
                                    @endphp
                                    <div class="p-4 border-b border-outline-variant/10 hover:bg-surface-container-lowest transition-colors cursor-pointer {{ $isUnread ? 'bg-primary/5' : '' }}">
                                        <div class="flex items-start gap-3 {{ $isUnread ? '' : 'opacity-70' }}">
                                            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="material-symbols-outlined text-on-primary text-sm">{{ $icon }}</span>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm text-on-surface font-medium leading-tight">{{ $notification->title }}</p>
                                                @if(filled($notification->body))
                                                    <p class="text-[11px] text-on-surface-variant mt-1">{{ $notification->body }}</p>
                                                @endif
                                                <p class="text-[11px] text-on-surface-variant mt-1">{{ $notification->created_at?->diffForHumans() }}</p>
                                            </div>
                                            @if($isUnread)
                                                <div class="w-2 h-2 bg-primary rounded-full mt-1.5 flex-shrink-0"></div>
                                            @endif
                                        </div>
                                    </div>
                                @empty
                                    <div class="p-6 text-sm text-on-surface-variant">
                                        No notifications yet.
                                    </div>
                                @endforelse
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
        <!-- Dashboard Content -->
        <div class="px-12 py-10 space-y-10 mx-[100px]">
            <!-- Page Header -->
            <div class="flex justify-between items-end">
                <div class="space-y-1">
                    <h2 class="text-5xl font-bold font-headline tracking-tighter text-on-background"><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Platform</span> Analytics
                    </h2>
                    <p class="text-on-surface-variant font-medium">Real-time system oversight and user engagement
                        metrics.</p>
                </div>
                <div class="flex gap-3">
                    <span
                        class="px-4 py-1.5 bg-tertiary-fixed text-on-tertiary-fixed text-xs font-bold rounded-full uppercase tracking-widest">Live
                        Monitoring</span>
                    <span
                        class="px-4 py-1.5 bg-surface-container-highest text-on-surface text-xs font-bold rounded-full uppercase tracking-widest">v2.4.0
                        Stable</span>
                </div>
            </div>
            <!-- Bento Grid Metrics -->
            <div class="grid grid-cols-12 gap-6">
                <!-- Total Revenue -->
                <div
                    class="col-span-12 md:col-span-4 bg-surface-container-lowest p-8 rounded-3xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] flex flex-col justify-between h-56 relative overflow-hidden group">
                    <div
                        class="absolute -right-4 -top-4 w-32 h-32 bg-primary-container/10 rounded-full blur-3xl group-hover:bg-primary-container/20 transition-all">
                    </div>
                    <div>
                        <div class="flex justify-between items-start">
                            <p
                                class="text-sm font-label font-bold text-on-surface-variant/60 uppercase tracking-widest">
                                Total Revenue</p>
                            <span class="material-symbols-outlined text-primary">payments</span>
                        </div>
                        <h3 class="text-4xl font-headline font-bold mt-4">${{ number_format($totalRevenue ?? 0, 2) }}</h3>
                    </div>
                    <div class="flex items-center gap-2 text-primary font-bold text-sm">
                        <span class="material-symbols-outlined text-sm">trending_up</span>
                        <span>{{ number_format(($totalRevenue ?? 0) > 0 ? (($totalRevenue ?? 0) * 0.03) : 0, 2) }} estimated growth today</span>
                    </div>
                </div>
                <!-- New Users -->
                <div
                    class="col-span-12 md:col-span-4 bg-surface-container-lowest p-8 rounded-3xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] flex flex-col justify-between h-56">
                    <div>
                        <div class="flex justify-between items-start">
                            <p
                                class="text-sm font-label font-bold text-on-surface-variant/60 uppercase tracking-widest">
                                Daily New Users</p>
                            <span class="material-symbols-outlined text-tertiary">person_add</span>
                        </div>
                        <h3 class="text-4xl font-headline font-bold mt-4">{{ number_format($dailyNewUsers ?? 0) }}</h3>
                    </div>
                    <div class="w-full bg-surface-container-low h-2 rounded-full overflow-hidden">
                        <div class="bg-tertiary h-full rounded-full"
                            style="width: {{ min(100, (int) round((($dailyNewUsers ?? 0) / max(1, $weeklyNewUsers ?? 1)) * 100)) }}%">
                        </div>
                    </div>
                    <p class="text-xs font-medium text-on-surface-variant">{{ number_format($weeklyNewUsers ?? 0) }} new users in the last 7 days</p>
                </div>
                <!-- System Up-time -->
                <div
                    class="col-span-12 md:col-span-4 bg-surface-container-lowest p-8 rounded-3xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] flex flex-col justify-between h-56">
                    <div>
                        <div class="flex justify-between items-start">
                            <p
                                class="text-sm font-label font-bold text-on-surface-variant/60 uppercase tracking-widest">
                                System Up-time</p>
                            <div class="flex h-3 w-3 relative">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                            </div>
                        </div>
                        <h3 class="text-4xl font-headline font-bold mt-4">{{ number_format($systemUptime ?? 99.50, 2) }}%</h3>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="flex -space-x-2">
                            <div class="w-2 h-8 bg-primary rounded-full"></div>
                            <div class="w-2 h-8 bg-primary rounded-full opacity-80 translate-x-3"></div>
                            <div class="w-2 h-8 bg-primary rounded-full opacity-60 translate-x-6"></div>
                            <div class="w-2 h-8 bg-primary rounded-full opacity-40 translate-x-9"></div>
                        </div>
                        <span class="ml-10 text-xs font-bold text-on-surface-variant">LAST 30 DAYS</span>
                    </div>
                </div>
            </div>
            <!-- Lower Layout Asymmetry -->
            <div class="grid grid-cols-12 gap-8">
                <!-- System Health & Actions (Left Column) -->
                <div class="col-span-12 lg:col-span-5 space-y-8">
                    <!-- System Health Monitor -->
                    <section class="bg-surface-container-low p-8 rounded-3xl space-y-6">
                        <h4 class="text-xl font-headline font-bold flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">analytics</span>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">System</span>  Health
                        </h4>
                        <div class="space-y-4">
                            <div class="bg-surface-container-lowest p-5 rounded-2xl flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="p-3 bg-primary/10 text-primary rounded-xl">
                                        <span class="material-symbols-outlined">dns</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">Server Cluster A</p>
                                        <p class="text-xs text-on-surface-variant">CPU: 42% | RAM: 5.2GB</p>
                                    </div>
                                </div>
                                <span
                                    class="px-3 py-1 bg-primary-container text-on-primary-container text-[10px] font-bold rounded-full">OPTIMAL</span>
                            </div>
                            <div class="bg-surface-container-lowest p-5 rounded-2xl flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="p-3 bg-tertiary/10 text-tertiary rounded-xl">
                                        <span class="material-symbols-outlined">database</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">PostgreSQL DB</p>
                                        <p class="text-xs text-on-surface-variant">Active Conns: 128</p>
                                    </div>
                                </div>
                                <span
                                    class="px-3 py-1 bg-primary-container text-on-primary-container text-[10px] font-bold rounded-full">OPTIMAL</span>
                            </div>
                            <div class="bg-surface-container-lowest p-5 rounded-2xl flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="p-3 bg-secondary/10 text-secondary rounded-xl">
                                        <span class="material-symbols-outlined">cloud_sync</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">S3 Storage</p>
                                        <p class="text-xs text-on-surface-variant">Latency: 14ms</p>
                                    </div>
                                </div>
                                <span
                                    class="px-3 py-1 bg-surface-container-highest text-on-surface text-[10px] font-bold rounded-full">NORMAL</span>
                            </div>
                        </div>
                    </section>
                    <!-- Recent Actions Log -->
                    <section
                        class="bg-surface-container-lowest p-8 rounded-3xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)]">
                        <div class="flex justify-between items-center mb-6">
                            <h4 class="text-xl font-headline font-bold">Admin Activity</h4>
                            <button class="text-primary text-sm font-bold hover:underline">View Log</button>
                        </div>
                        <div
                            class="space-y-6 relative before:absolute before:left-3 before:top-2 before:bottom-2 before:w-[2px] before:bg-surface-container">
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-6 h-6 bg-primary rounded-full flex items-center justify-center border-4 border-surface-container-lowest z-10">
                                </div>
                                <p class="text-sm font-bold">Alex Rivera <span
                                        class="font-normal text-on-surface-variant">updated platform permissions</span>
                                </p>
                                <p class="text-[10px] font-label text-on-surface-variant/60 uppercase mt-1">2 mins ago
                                </p>
                            </div>
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-6 h-6 bg-tertiary rounded-full flex items-center justify-center border-4 border-surface-container-lowest z-10">
                                </div>
                                <p class="text-sm font-bold">Sarah Chen <span
                                        class="font-normal text-on-surface-variant">resolved critical ticket #842</span>
                                </p>
                                <p class="text-[10px] font-label text-on-surface-variant/60 uppercase mt-1">45 mins ago
                                </p>
                            </div>
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-6 h-6 bg-secondary-dim rounded-full flex items-center justify-center border-4 border-surface-container-lowest z-10">
                                </div>
                                <p class="text-sm font-bold">System <span
                                        class="font-normal text-on-surface-variant">automatically deployed build
                                        v2.4.0</span></p>
                                <p class="text-[10px] font-label text-on-surface-variant/60 uppercase mt-1">2 hours ago
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- User Management Table (Right Column) -->
                <div class="col-span-12 lg:col-span-7 space-y-8">
                    <section
                        class="bg-surface-container-lowest rounded-3xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] overflow-hidden">
                        <div class="p-8 border-b border-surface-container flex justify-between items-center">
                            <div>
                                <h4 class="text-xl font-headline font-bold">User Overview</h4>
                                <p class="text-sm text-on-surface-variant">Managing 12,402 active platform members</p>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="p-2 bg-surface-container-low rounded-xl text-on-surface hover:bg-surface-container-high transition-colors">
                                    <span class="material-symbols-outlined">filter_list</span>
                                </button>
                                <button
                                    class="p-2 bg-surface-container-low rounded-xl text-on-surface hover:bg-surface-container-high transition-colors">
                                    <span class="material-symbols-outlined">download</span>
                                </button>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead class="bg-surface-container-low">
                                    <tr>
                                        <th
                                            class="px-8 py-4 text-[10px] font-bold text-on-surface-variant/70 uppercase tracking-[0.2em]">
                                            User</th>
                                        <th
                                            class="px-8 py-4 text-[10px] font-bold text-on-surface-variant/70 uppercase tracking-[0.2em]">
                                            Role</th>
                                        <th
                                            class="px-8 py-4 text-[10px] font-bold text-on-surface-variant/70 uppercase tracking-[0.2em]">
                                            Status</th>
                                        <th
                                            class="px-8 py-4 text-[10px] font-bold text-on-surface-variant/70 uppercase tracking-[0.2em]">
                                            Joined</th>
                                        <th class="px-8 py-4"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-surface-container">
                                    @forelse(($overviewUsers ?? collect()) as $user)
                                        @php
                                            $initials = collect(explode(' ', trim((string) $user->name)))
                                                ->filter()
                                                ->take(2)
                                                ->map(fn($part) => strtoupper(substr($part, 0, 1)))
                                                ->implode('');

                                            $isActive = $user->updated_at && $user->updated_at->gt(now()->subDays(7));
                                            $statusLabel = $isActive ? 'Active' : 'Away';
                                            $statusDotClass = $isActive ? 'bg-primary' : 'bg-outline-variant';

                                            $roleLabel = ucfirst((string) $user->role);
                                            $roleClass = match ($user->role) {
                                                'admin' => 'bg-primary/10 text-primary',
                                                'teacher' => 'bg-tertiary/10 text-tertiary',
                                                default => 'bg-secondary/10 text-secondary',
                                            };

                                            $avatarClass = match ($user->role) {
                                                'admin' => 'bg-primary-container text-on-primary-container',
                                                'teacher' => 'bg-tertiary-container text-on-tertiary-container',
                                                default => 'bg-secondary-container text-on-secondary-container',
                                            };
                                        @endphp
                                        <tr class="hover:bg-surface-container-low/30 transition-colors group">
                                            <td class="px-8 py-5">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-10 h-10 rounded-full {{ $avatarClass }} flex items-center justify-center font-bold">
                                                        {{ $initials !== '' ? $initials : 'NA' }}
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-bold">{{ $user->name }}</p>
                                                        <p class="text-xs text-on-surface-variant">{{ $user->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-8 py-5">
                                                <span class="text-xs font-semibold px-3 py-1 rounded-lg {{ $roleClass }}">{{ $roleLabel }}</span>
                                            </td>
                                            <td class="px-8 py-5">
                                                <div class="flex items-center gap-2">
                                                    <div class="w-2 h-2 rounded-full {{ $statusDotClass }}"></div>
                                                    <span class="text-xs font-medium">{{ $statusLabel }}</span>
                                                </div>
                                            </td>
                                            <td class="px-8 py-5 text-xs text-on-surface-variant">{{ optional($user->created_at)->format('M d, Y') }}</td>
                                            <td class="px-8 py-5 text-right">
                                                <button class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">more_vert</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-8 py-10 text-center text-sm text-on-surface-variant">
                                                No users found yet.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <!-- Support Ticket Summary -->
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div
                            class="bg-gradient-to-br from-tertiary to-tertiary-dim p-8 rounded-3xl text-on-tertiary shadow-lg">
                            <div class="flex justify-between items-start mb-4">
                                <span
                                    class="material-symbols-outlined p-3 bg-white/20 rounded-2xl">confirmation_number</span>
                                <span class="text-3xl font-headline font-bold">14</span>
                            </div>
                            <h5 class="text-lg font-headline font-bold">Open Tickets</h5>
                            <p class="text-sm text-on-tertiary/70 mt-1">Requiring immediate response from tech support.
                            </p>
                        </div>
                        <div
                            class="bg-surface-container-low p-8 rounded-3xl flex flex-col justify-between border border-primary/5">
                            <div class="flex justify-between items-center">
                                <h5 class="font-headline font-bold">Total Courses</h5>
                                <span class="material-symbols-outlined text-primary">school</span>
                            </div>
                            <div class="mt-4">
                                <span class="text-4xl font-headline font-bold text-primary">{{ number_format($totalCourses ?? 0) }}</span>
                                <p class="text-xs font-bold text-primary mt-1 uppercase tracking-widest">Published on platform</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- Footer / Bottom Space -->
        <footer
            class="px-12 py-10 flex justify-between items-center text-on-surface-variant/40 border-t border-surface-container mt-12">
            <p class="text-xs font-medium">© 2024 DEVRAK PLATFORM SYSTEMS. ALL RIGHTS RESERVED.</p>
            <div class="flex gap-6 text-xs font-bold uppercase tracking-widest">
                <a class="hover:text-primary transition-colors" href="#">Documentation</a>
                <a class="hover:text-primary transition-colors" href="#">API Status</a>
                <a class="hover:text-primary transition-colors" href="#">Privacy</a>
            </div>
        </footer>
    </main>
</body>

</html>