<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Teacher Dashboard | CodeMentor</title>
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
                        "xxl": "1.5rem"
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

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7f9;
            color: #2c2f31;
        }

        .font-headline {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>
</head>

<body class="flex min-h-screen bg-[#D0E3E6]">
    <!-- Main Content Canvas -->
    <main class="flex-1 min-h-screen pb-20">
        <!-- TopAppBar Execution -->
        <header
            class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
            <div class="flex justify-between items-center px-2 w-full mx-auto">
                <div class="flex items-center w-[20%]">
                    <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]"
                                src="{{ asset('img/logo.png') }}" alt=""></a></span>
                </div>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors"
                        href="{{ route('teacher.dashboard') }}">Dashboard</a>
                    <div class="relative group py-4">
                        <button
                            class="flex items-center gap-1 text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-medium">
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
                                            'course_enrollment' => 'person_add',
                                            'course_rating' => 'star',
                                            'quiz_completed', 'exercise_completed' => 'task_alt',
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
                            <form action="{{ route('notifications.markAllRead') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full py-2.5 text-sm text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]">done_all</span>
                                    Mark all as read
                                </button>
                            </form>
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
        <section class="px-4 py-16 mx-[100px]">
            <!-- Editorial Header Section -->
            <div class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <span class="text-primary font-bold tracking-widest text-xs uppercase mb-2 block">Instructor
                        Hub</span>
                    <h2 class="text-5xl font-bold font-headline text-on-surface tracking-tight">Morning, <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Dr.
                            Aris</span> </h2>
                    <p class="text-on-surface-variant mt-3 max-w-md text-lg leading-relaxed">Your students have
                        completed 84% of their modules this week. The engagement is peaking.</p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="bg-surface-container-lowest text-on-surface px-6 py-3 rounded-xl font-bold text-sm shadow-sm hover:bg-surface-container-high transition-colors">
                        Send Announcement
                    </button>
                    <a href="{{ route('teacher.courses') }}"
                        class="bg-gradient-to-br from-primary to-primary-container text-white px-6 py-3 rounded-xl font-bold text-sm shadow-lg shadow-cyan-900/10 scale-100 hover:scale-[1.02] transition-transform">
                        Create New Course
                    </a>
                </div>
            </div>
            <!-- Bento Grid Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                <div
                    class="bg-surface-container-lowest p-8 rounded-xxl shadow-sm flex flex-col justify-between group hover:bg-primary transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-primary group-hover:text-white text-3xl transition-colors"
                        data-icon="groups">groups</span>
                    <div class="mt-8">
                        <p
                            class="text-3xl font-bold font-headline text-on-surface group-hover:text-white transition-colors">
                            {{ number_format($totalStudents) }}</p>
                        <p
                            class="text-sm font-medium text-on-surface-variant group-hover:text-white/80 transition-colors">
                            Total Students</p>
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-8 rounded-xxl shadow-sm flex flex-col justify-between group hover:bg-primary transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-primary group-hover:text-white text-3xl transition-colors"
                        data-icon="auto_stories">auto_stories</span>
                    <div class="mt-8">
                        <p
                            class="text-3xl font-bold font-headline text-on-surface group-hover:text-white transition-colors">
                            {{ $coursesActive }}</p>
                        <p
                            class="text-sm font-medium text-on-surface-variant group-hover:text-white/80 transition-colors">
                            Courses Active</p>
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-8 rounded-xxl shadow-sm flex flex-col justify-between group hover:bg-primary transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-primary group-hover:text-white text-3xl transition-colors"
                        data-icon="star">star</span>
                    <div class="mt-8">
                        <p
                            class="text-3xl font-bold font-headline text-on-surface group-hover:text-white transition-colors">
                            {{ $averageGrade }}</p>
                        <p
                            class="text-sm font-medium text-on-surface-variant group-hover:text-white/80 transition-colors">
                            Average Grade</p>
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-8 rounded-xxl shadow-sm flex flex-col justify-between group hover:bg-primary transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-primary group-hover:text-white text-3xl transition-colors"
                        data-icon="timer">timer</span>
                    <div class="mt-8">
                        <p
                            class="text-3xl font-bold font-headline text-on-surface group-hover:text-white transition-colors">
                            {{ round($hoursTaught, 1) }}h</p>
                        <p
                            class="text-sm font-medium text-on-surface-variant group-hover:text-white/80 transition-colors">
                            Hours Taught</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Course Management (Large Bento Cell) -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-surface-container-low p-10 rounded-xxl">
                        <div class="flex justify-between items-center mb-10">
                            <h3 class="text-2xl font-bold font-headline tracking-tight">Course Management</h3>
                            <button class="text-primary font-bold text-sm hover:underline">View All</button>
                        </div>
                        <div class="space-y-6">
                            @forelse($myCourses as $course)
                                <div class="bg-surface-container-lowest p-6 rounded-xl flex items-center justify-between shadow-sm">
                                    <div class="flex items-center gap-6">
                                        <div class="h-16 w-16 bg-primary-container/20 rounded-lg flex items-center justify-center overflow-hidden">
                                            @if($course->image)
                                                <img src="{{ $course->image }}" class="w-full h-full object-cover">
                                            @else
                                                <span class="material-symbols-outlined text-primary text-2xl" data-icon="terminal">terminal</span>
                                            @endif
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-lg">{{ $course->title }}</h4>
                                            <div class="flex gap-4 mt-1">
                                                <span class="text-xs text-on-surface-variant flex items-center gap-1">
                                                    <span class="material-symbols-outlined text-[14px]" data-icon="person">person</span> {{ $course->enrolled_users_count }} Students
                                                </span>
                                                <span class="text-xs text-on-surface-variant flex items-center gap-1">
                                                    <span class="material-symbols-outlined text-[14px]" data-icon="update">update</span> Updated {{ $course->updated_at->diffForHumans() }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right flex flex-col items-end gap-2">
                                        <a href="{{ route('teacher.course.manage', $course->id) }}" class="text-xs font-bold text-primary hover:underline">Manage Course</a>
                                        <span class="text-[10px] uppercase tracking-wider bg-secondary-container text-on-secondary-container px-2 py-1 rounded font-bold">{{ $course->category }}</span>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-10 text-on-surface-variant italic">
                                    You haven't created any courses yet.
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <!-- Student Analytics Preview -->
                    <div
                        class="bg-surface-container-lowest p-10 rounded-xxl shadow-sm border border-outline-variant/10">
                        <div class="flex justify-between items-start mb-8">
                            <div>
                                <h3 class="text-2xl font-bold font-headline tracking-tight">Engagement Analytics</h3>
                                <p class="text-sm text-on-surface-variant mt-1">Daily interaction metrics across all
                                    active courses.</p>
                            </div>
                            <select
                                class="bg-surface-container-low border-none rounded-lg text-xs font-bold py-2 px-4 focus:ring-0">
                                <option>Last 30 Days</option>
                                <option>Last 7 Days</option>
                            </select>
                        </div>
                        <div class="h-64 flex items-end gap-3 justify-between pb-4">
                            <div
                                class="flex-1 bg-primary-container/20 hover:bg-primary-container transition-colors rounded-t-lg relative group h-[40%]">
                                <span
                                    class="opacity-0 group-hover:opacity-100 absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded">M</span>
                            </div>
                            <div
                                class="flex-1 bg-primary-container/20 hover:bg-primary-container transition-colors rounded-t-lg relative group h-[65%]">
                                <span
                                    class="opacity-0 group-hover:opacity-100 absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded">T</span>
                            </div>
                            <div
                                class="flex-1 bg-primary-container/20 hover:bg-primary-container transition-colors rounded-t-lg relative group h-[55%]">
                                <span
                                    class="opacity-0 group-hover:opacity-100 absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded">W</span>
                            </div>
                            <div
                                class="flex-1 bg-primary group-hover:bg-primary transition-colors rounded-t-lg relative h-[90%]">
                                <span
                                    class="opacity-100 absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded">T</span>
                            </div>
                            <div
                                class="flex-1 bg-primary-container/20 hover:bg-primary-container transition-colors rounded-t-lg relative group h-[75%]">
                                <span
                                    class="opacity-0 group-hover:opacity-100 absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded">F</span>
                            </div>
                            <div
                                class="flex-1 bg-primary-container/20 hover:bg-primary-container transition-colors rounded-t-lg relative group h-[30%]">
                                <span
                                    class="opacity-0 group-hover:opacity-100 absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded">S</span>
                            </div>
                            <div
                                class="flex-1 bg-primary-container/20 hover:bg-primary-container transition-colors rounded-t-lg relative group h-[20%]">
                                <span
                                    class="opacity-0 group-hover:opacity-100 absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded">S</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent Submissions & Sidebar Tasks -->
                <div class="space-y-8">
                    <div class="bg-surface-container-highest p-8 rounded-xxl">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-xl font-bold font-headline">Recent Submissions</h3>
                            <span class="bg-primary text-white text-[10px] font-bold px-2 py-1 rounded-full">14
                                NEW</span>
                        </div>
                        <div class="space-y-4">
                            <!-- Submission 1 -->
                            <div
                                class="bg-surface-container-lowest p-5 rounded-xl flex items-center gap-4 hover:translate-x-1 transition-transform cursor-pointer">
                                <div class="h-10 w-10 rounded-full bg-slate-200 overflow-hidden border-2 border-white">
                                    <img alt="Student avatar" class="w-full h-full object-cover"
                                        data-alt="Close-up profile of a young woman with curly hair looking directly at camera, soft studio lighting"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmA2iUiSp6IpAeOKPGiADTsn_1MVO_UFqSCIdeBIcFWVRECtuIByCpxg0hWL7hu4HdSoxBctdH6nULYX3RypPqBikXuGpDBhnu8aRavMdfsAgAX36S7aC3pVNfwfAF3VPFV65Oa9ZndQzPCFOjPX8CFGR2VCSB1qq8PjBALRl6GrTwYq1obSrha27GpBIIt5iv6PEdeTciK5KWtFWomjpgwHcju7U-EIS3LprM-9JKSx3V9vLiNrfKYuFY6NRd5ZXWr1ZrkRlIj4hP" />
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <h5 class="font-bold text-sm truncate">Elena Vance</h5>
                                    <p class="text-xs text-on-surface-variant truncate">Module 4: Async Patterns</p>
                                </div>
                                <span class="material-symbols-outlined text-primary"
                                    data-icon="edit_note">edit_note</span>
                            </div>
                            <!-- Submission 2 -->
                            <div
                                class="bg-surface-container-lowest p-5 rounded-xl flex items-center gap-4 hover:translate-x-1 transition-transform cursor-pointer">
                                <div class="h-10 w-10 rounded-full bg-slate-200 overflow-hidden border-2 border-white">
                                    <img alt="Student avatar" class="w-full h-full object-cover"
                                        data-alt="Portrait of a young man with glasses and a thoughtful expression, professional lighting in a modern interior"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDx-T6Ti64U_tYf3awc55zSpgr7v_iYm66hKXzC0zhikZUE9wd27P6AZhgqUemNJN0QZjCsSspsnbfEcAWaZy30lTfguhWnO0lH9z-799Vej9j2YrqDCV0dsymPxG9_SmjbG-S68sqN4lNt_RRMj-Ltyw8KbGcnLnRSH2uEL21OE--aJFMNBb9VIby-ybEyZG9hpWP1BgFHxW1v4AkRlefR1jQyqFwM42Oh0uOxEAYWIq-ozWXGkqgoYpJ_n8loi3l4hJmdKhl8BpJ" />
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <h5 class="font-bold text-sm truncate">Marcus Chen</h5>
                                    <p class="text-xs text-on-surface-variant truncate">Module 3: Grid Structures</p>
                                </div>
                                <span class="material-symbols-outlined text-primary"
                                    data-icon="edit_note">edit_note</span>
                            </div>
                            <!-- Submission 3 -->
                            <div
                                class="bg-surface-container-lowest p-5 rounded-xl flex items-center gap-4 hover:translate-x-1 transition-transform cursor-pointer">
                                <div class="h-10 w-10 rounded-full bg-slate-200 overflow-hidden border-2 border-white">
                                    <img alt="Student avatar" class="w-full h-full object-cover"
                                        data-alt="Headshot of a smiling woman with long dark hair, natural sunlight and vibrant outdoor background"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlyy3xYjzPRC3H69UVjgHjsCbuEC6eKq2UfqvIzYS-pDbWg7ovvdwgSiHbiRvhd8oYpwQKtzU4GnTjj2_XuzG0fKb_3A_TF1IYpgVPjcIUZf7gC9JeZ5y24NZ-BTOIypWZ8yA6Z3ughJkDyx7VE25-1ZVtFWQ1pYBGTwFYd9YLN2X0YFYE_cYZZV3uotIR_WJb8h9Ff98Sb8VJ4bjzSQaK9H3NkuYB7hB5w7rbU2dtFvFY310TYSUtP9J1P7ERlpHUYDiX1mDtm2Rf" />
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <h5 class="font-bold text-sm truncate">Sarah Jenkins</h5>
                                    <p class="text-xs text-on-surface-variant truncate">Capstone Project Draft</p>
                                </div>
                                <span class="material-symbols-outlined text-primary"
                                    data-icon="edit_note">edit_note</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 py-3 border-2 border-dashed border-outline-variant/30 text-on-surface-variant text-xs font-bold rounded-xl hover:bg-surface-container-low transition-colors">
                            Enter Grading Mode
                        </button>
                    </div>
                    <div
                        class="relative overflow-hidden rounded-xxl bg-primary p-8 text-white h-72 flex flex-col justify-end">
                        <div class="absolute top-0 right-0 p-4 opacity-20">
                            <span class="material-symbols-outlined text-8xl"
                                data-icon="rocket_launch">rocket_launch</span>
                        </div>
                        <h4 class="text-2xl font-bold font-headline mb-2 leading-tight">Prepare for the Semester Finale.
                        </h4>
                        <p class="text-white/80 text-sm mb-6">Final grades are due in 4 days. Ready to review the
                            cohort?</p>
                        <button
                            class="bg-white text-primary px-4 py-2 rounded-lg font-bold text-xs w-max hover:bg-primary-container hover:text-on-primary-container transition-all">
                            View Deadline Details
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Contextual FAB (Hidden as per suppression rules on dashboard, but listed as feature) -->
    <!-- Suppressed on Dashboard to prioritize editorial canvas -->
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