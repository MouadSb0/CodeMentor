<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $course->title }} | CodeMentor</title>
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
                        "on-tertiary-container": "#003064",
                        "primary-dim": "#005865",
                        "inverse-surface": "#0b0f10",
                        "secondary-container": "#d8e3fb",
                        "inverse-primary": "#3adffa",
                        "surface-container": "#e5e9eb",
                        "on-primary": "#daf8ff",
                        "on-background": "#2c2f31",
                        "on-tertiary": "#eff2ff",
                        "primary-container": "#3adffa",
                        "on-tertiary-fixed-variant": "#003874",
                        "on-surface": "#2c2f31",
                        "secondary-fixed": "#d8e3fb",
                        "on-primary-fixed-variant": "#005561",
                        "on-secondary": "#eff2ff",
                        "inverse-on-surface": "#9a9d9f",
                        "error": "#b31b25",
                        "background": "#f5f7f9",
                        "on-error": "#ffefee",
                        "surface-variant": "#d9dde0",
                        "on-secondary-fixed-variant": "#515c70",
                        "secondary-fixed-dim": "#cad5ed",
                        "tertiary-fixed": "#84b1ff",
                        "surface-container-highest": "#d9dde0",
                        "surface-container-low": "#eef1f3",
                        "surface-dim": "#d0d5d8",
                        "on-tertiary-fixed": "#001737",
                        "outline-variant": "#abadaf",
                        "on-secondary-fixed": "#354053",
                        "on-secondary-container": "#475266",
                        "secondary-dim": "#455064",
                        "on-primary-container": "#004b56",
                        "error-dim": "#9f0519",
                        "secondary": "#515c70",
                        "tertiary-container": "#84b1ff",
                        "surface-container-lowest": "#ffffff",
                        "error-container": "#fb5151",
                        "surface-bright": "#f5f7f9",
                        "outline": "#747779",
                        "tertiary-dim": "#004e9d",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "on-error-container": "#570008",
                        "primary": "#006573",
                        "on-primary-fixed": "#00363e",
                        "surface-tint": "#006573",
                        "tertiary": "#005ab3",
                        "primary-fixed-dim": "#1ad0eb",
                        "primary-fixed": "#3adffa",
                        "on-surface-variant": "#595c5e",
                        "surface-container-high": "#dfe3e6",
                        "surface": "#f5f7f9"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1.5rem"
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
        }

        h1,
        h2,
        h3,
        .brand-font {
            font-family: 'Space Grotesk', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .bg-gradient-kinetic {
            background: linear-gradient(135deg, #006573 0%, #3adffa 100%);
        }

        .tonal-shift {
            background-color: #eef1f3;
        }

        details summary {
            list-style: none;
        }

        details summary::-webkit-details-marker {
            display: none;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    @php
        $isTeacherManage = isset($teacherExercises) && isset($teacherQuizzes);
        $userCourseRating = $userCourseRating ?? null;
        $notifications = $notifications ?? collect();
        $unreadNotificationsCount = $unreadNotificationsCount ?? 0;
        $descriptionPoints = collect(preg_split('/(?<=[\.\!\?])\s+/', trim((string) $course->description)))
            ->map(fn($point) => trim($point))
            ->filter(fn($point) => $point !== '');

        $modulePoints = $course->modules
            ->pluck('description')
            ->filter(fn($description) => filled($description))
            ->flatMap(function ($description) {
                return preg_split('/(?<=[\.\!\?])\s+/', trim((string) $description)) ?: [];
            })
            ->map(fn($point) => trim((string) $point))
            ->filter(fn($point) => $point !== '');

        $learnPoints = $descriptionPoints
            ->concat($modulePoints)
            ->map(function ($point) {
                $cleanPoint = preg_replace('/\s+/', ' ', strip_tags((string) $point));
                return trim((string) $cleanPoint);
            })
            ->filter(fn($point) => mb_strlen($point) >= 20)
            ->unique(fn($point) => mb_strtolower($point))
            ->take(4)
            ->values();

        if ($learnPoints->isEmpty()) {
            $learnPoints = collect([
                'Understand the main concepts covered in this course.',
                'Apply practical techniques presented throughout the modules.',
                'Build confidence through real examples and guided content.',
            ]);
        }
    @endphp
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
                    <button class="text-primary font-bold transition-colors">
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
                <div class="relative" x-data="{ showNotifications: false }">
                    <button @click="showNotifications = !showNotifications" @click.away="showNotifications = false"
                        class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#eef1f3] transition-colors relative">
                        <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                        @if($unreadNotificationsCount > 0)
                            <span class="absolute top-2 right-2.5 w-2 h-2 bg-error rounded-full border border-white animate-pulse"></span>
                        @endif
                    </button>

                    <div x-show="showNotifications" x-transition.opacity x-transition:enter.duration.200ms
                        x-transition:leave.duration.150ms x-cloak
                        class="absolute top-14 right-0 w-80 sm:w-96 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 z-[100] overflow-hidden flex flex-col">
                        <div class="p-4 border-b border-outline-variant/10 flex justify-between items-center bg-surface-container-lowest">
                            <h3 class="font-bold text-on-surface text-sm">Notifications</h3>
                            <span class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-0.5 rounded-full">
                                {{ $unreadNotificationsCount }} New
                            </span>
                        </div>

                        <div class="max-h-80 overflow-y-auto">
                            @forelse($notifications as $notification)
                                @php
                                    $isUnread = is_null($notification->read_at);
                                    $icon = $notification->type === 'points' ? 'military_tech' : 'notifications';
                                    $iconBg = $notification->type === 'points' ? 'bg-tertiary-container' : 'bg-primary';
                                    $iconText = $notification->type === 'points' ? 'text-on-tertiary-container' : 'text-on-primary';
                                @endphp
                                <div class="p-4 border-b border-outline-variant/10 hover:bg-surface-container-lowest transition-colors cursor-pointer {{ $isUnread ? 'bg-primary/5' : '' }}">
                                    <div class="flex items-start gap-3 {{ $isUnread ? '' : 'opacity-70' }}">
                                        <div class="w-8 h-8 rounded-full {{ $iconBg }} flex items-center justify-center flex-shrink-0 mt-1">
                                            <span class="material-symbols-outlined {{ $iconText }} text-sm">{{ $icon }}</span>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm text-on-surface font-medium leading-tight">{{ $notification->title }}</p>
                                            @if(filled($notification->body))
                                                <p class="text-[11px] text-on-surface-variant mt-1 leading-snug">{{ $notification->body }}</p>
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
    <main class="max-w-screen-2xl mx-auto px-8 pt-12">
        @if(session('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition.duration.500ms
                class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-700 font-medium">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-6 p-4 rounded-xl bg-error/10 border border-error/20 text-error">
                <ul class="list-disc list-inside space-y-1 text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Breadcrumbs -->
        <nav class="flex items-center space-x-2 text-label-md text-on-surface-variant mb-8 tracking-wide">
            <a href="{{ $isTeacherManage ? route('teacher.courses') : url('/courses') }}" class="hover:text-primary cursor-pointer">Academy</a>
            <span class="material-symbols-outlined text-sm">chevron_right</span>
            <span class="hover:text-primary cursor-pointer">{{ $course->category }}</span>
            <span class="material-symbols-outlined text-sm">chevron_right</span>
            <span class="text-on-surface font-semibold">{{ $course->title }}</span>
        </nav>
        <!-- Hero Section -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-16 items-start">
            <div class="lg:col-span-8">
                <h1 class="text-5xl lg:text-7xl font-bold text-on-surface leading-[1.1] mb-6 tracking-tight">
                    {{ $course->title }}
                </h1>
                <div class="flex flex-wrap items-center gap-6 mb-8">
                    <div class="flex items-center bg-surface-container-low px-4 py-2 rounded-full">
                        <span class="material-symbols-outlined text-yellow-500 mr-2"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-bold text-on-surface">{{ number_format($course->rating, 1) }}</span>
                    </div>
                    <div class="flex items-center text-on-surface-variant text-sm font-medium">
                        <span class="material-symbols-outlined mr-2 text-primary">schedule</span>
                        {{ $course->duration ?? 'Self-paced' }}
                    </div>
                    <div class="flex items-center text-on-surface-variant text-sm font-medium">
                        <span class="material-symbols-outlined mr-2 text-primary">layers</span>
                        {{ $course->lessons_count }} Lessons
                    </div>
                    <div class="flex items-center text-on-surface-variant text-sm font-medium">
                        <span class="material-symbols-outlined mr-2 text-primary">equalizer</span>
                        {{ $course->level }} Level
                    </div>
                </div>
                <p class="text-xl text-on-surface-variant leading-relaxed max-w-3xl mb-10">
                    {{ $course->description }}
                </p>
                <div class="flex flex-wrap gap-4">
                    @if(!$isTeacherManage)
                        @if(!($isEnrolled ?? false))
                            <form method="POST" action="{{ route('course.enroll', $course->id) }}">
                                @csrf
                                <button type="submit"
                                    class="bg-gradient-kinetic text-on-primary px-8 py-4 rounded-xl text-lg font-bold hover:scale-[0.98] transition-transform shadow-xl shadow-primary/20">
                                    Enroll Now - {{ $course->price_label }}
                                </button>
                            </form>
                        @else
                            <button type="button"
                                class="bg-gradient-kinetic text-on-primary px-8 py-4 rounded-xl text-lg font-bold shadow-xl shadow-primary/20 cursor-default">
                                Progress: {{ $progressPercent ?? 0 }}%
                            </button>
                        @endif
                    @endif
                    @if($isTeacherManage)
                        <a href="#manage-modules" id="open-manage-modules-btn"
                            class="inline-flex items-center bg-surface-container-highest text-on-surface px-8 py-4 rounded-xl text-lg font-bold hover:bg-surface-container-high transition-colors">
                            Manage Course Content
                        </a>
                    @else
                        <button
                            class="bg-surface-container-highest text-on-surface px-8 py-4 rounded-xl text-lg font-bold hover:bg-surface-container-high transition-colors">
                            Watch Preview
                        </button>
                    @endif
                </div>
            </div>
            <div class="lg:col-span-4 sticky top-28">
                <div class="bg-surface-container-lowest rounded-2xl p-2 shadow-2xl shadow-on-surface/5">
                    <div class="relative aspect-video rounded-xl overflow-hidden mb-4 group">
                        <img alt="{{ $course->title }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            src="{{ $course->thumbnail }}" />
                        <div class="absolute inset-0 bg-on-surface/40 flex items-center justify-center">
                            <div
                                class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-primary shadow-xl scale-100 hover:scale-110 transition-transform cursor-pointer">
                                <span class="material-symbols-outlined text-4xl"
                                    style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-headline text-lg font-bold mb-4">Course Highlights</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">verified</span>
                                <span class="text-sm text-on-surface-variant">Lifetime access to all modules</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">description</span>
                                <span class="text-sm text-on-surface-variant">25+ Downloadable resources</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">workspace_premium</span>
                                <span class="text-sm text-on-surface-variant">Verified Certificate of Completion</span>
                            </li>
                        </ul>
                        @if(!$isTeacherManage)
                            <div class="mt-6 pt-4 border-t border-outline-variant/15">
                                <h4 class="text-sm font-bold mb-3">Rate this course</h4>
                                <form method="POST" action="{{ route('course.rate', $course->id) }}" class="flex items-center gap-2">
                                    @csrf
                                    @for($i = 1; $i <= 5; $i++)
                                        <button type="submit" name="rating" value="{{ $i }}" class="group" title="{{ $i }} star{{ $i > 1 ? 's' : '' }}">
                                            <span
                                                class="material-symbols-outlined text-3xl {{ (($userCourseRating ?? 0) >= $i) ? 'text-yellow-500' : 'text-surface-dim group-hover:text-yellow-400' }}"
                                                style="font-variation-settings: 'FILL' {{ (($userCourseRating ?? 0) >= $i) ? 1 : 0 }};">
                                                star
                                            </span>
                                        </button>
                                    @endfor
                                </form>
                                <p class="mt-2 text-xs text-on-surface-variant">
                                    {{ $userCourseRating ? 'Your rating: ' . $userCourseRating . '/5' : 'Click a star to rate this course.' }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            <!-- Main Content Area -->
            <div class="lg:col-span-8">
                <!-- Tabs -->
                <div class="flex space-x-12 border-b border-outline-variant/15 mb-12">
                    <button
                        class="pb-4 text-primary border-b-2 border-primary font-bold tracking-tight">Overview</button>
                </div>
                <!-- Curriculum Section -->
                <section class="mb-20" id="manage-modules">
                    <h2 class="text-3xl font-bold mb-8 flex items-center">
                        Course Curriculum
                        <span
                            class="ml-4 text-sm font-medium bg-surface-container-low px-3 py-1 rounded-full text-on-surface-variant">{{ $course->modules->count() }}
                            Modules</span>
                    </h2>
                    @if($isTeacherManage)
                        <div id="module-management-tools" class="hidden bg-surface-container-lowest rounded-2xl p-6 mb-6 border border-outline-variant/15">
                            <h3 class="text-lg font-bold mb-4">Add New Module</h3>
                            <form method="POST" action="{{ route('teacher.course.modules.store', $course->id) }}" class="space-y-3">
                                @csrf
                                <input name="title" type="text" required placeholder="Module title"
                                    class="w-full rounded-xl border-none bg-surface-container-low py-3 px-4 text-sm focus:ring-2 focus:ring-primary" />
                                <div class="text-format-toolbar flex flex-wrap items-center gap-2 p-3 rounded-xl bg-surface-container-low">
                                    <button type="button" data-wrap-open="<strong>" data-wrap-close="</strong>" class="px-2 py-1 text-xs font-bold rounded bg-white">Strong</button>
                                    <button type="button" data-wrap-open="<em>" data-wrap-close="</em>" class="px-2 py-1 text-xs font-bold rounded bg-white">Italic</button>
                                    <button type="button" data-wrap-open="<u>" data-wrap-close="</u>" class="px-2 py-1 text-xs font-bold rounded bg-white">Underline</button>
                                    <select data-style-type="color" class="text-xs rounded border-none bg-white py-1">
                                        <option value="">Text color</option>
                                        <option value="#0D1B2A">Navy</option>
                                        <option value="#16a34a">Green</option>
                                        <option value="#ef4444">Red</option>
                                        <option value="#2563eb">Blue</option>
                                    </select>
                                    <select data-style-type="background-color" class="text-xs rounded border-none bg-white py-1">
                                        <option value="">Background</option>
                                        <option value="#fef08a">Yellow</option>
                                        <option value="#bfdbfe">Blue</option>
                                        <option value="#fecaca">Red</option>
                                        <option value="#bbf7d0">Green</option>
                                    </select>
                                    <select data-style-type="font-size" class="text-xs rounded border-none bg-white py-1">
                                        <option value="">Text size</option>
                                        <option value="12px">12</option>
                                        <option value="14px">14</option>
                                        <option value="16px">16</option>
                                        <option value="20px">20</option>
                                    </select>
                                    <select data-style-type="font-family" class="text-xs rounded border-none bg-white py-1">
                                        <option value="">Font family</option>
                                        <option value="Inter, sans-serif">Inter</option>
                                        <option value="Space Grotesk, sans-serif">Space Grotesk</option>
                                        <option value="monospace">Monospace</option>
                                        <option value="serif">Serif</option>
                                    </select>
                                </div>
                                <textarea name="description" rows="3" required placeholder="Module content/description"
                                    class="js-format-target w-full rounded-xl border-none bg-surface-container-low py-3 px-4 text-sm focus:ring-2 focus:ring-primary resize-none"></textarea>
                                <div class="flex items-center gap-2">
                                    <button type="submit"
                                        class="bg-primary text-white px-5 py-2.5 rounded-xl text-sm font-bold hover:opacity-90 transition-opacity">
                                        Add Module
                                    </button>
                                    <button type="button" id="cancel-manage-modules-btn"
                                        class="px-5 py-2.5 rounded-xl text-sm font-bold bg-surface-container-high text-on-surface hover:bg-surface-container transition-colors">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endif
                    <div class="space-y-4">
                        @forelse($course->modules as $index => $module)
                            @php
                                $escapedModuleDescription = e($module->description);
                                $highlightedModuleDescription = preg_replace_callback(
                                    '/(&lt;!--[\s\S]*?--&gt;)|(&lt;\/?[^&]*?&gt;)/',
                                    function ($matches) {
                                        if (!empty($matches[1])) {
                                            return '<span class="text-green-600 font-semibold">' . $matches[1] . '</span>';
                                        }

                                        return '<span class="text-[#0D1B2A] font-semibold">' . $matches[2] . '</span>';
                                    },
                                    $escapedModuleDescription
                                );
                            @endphp
                            <details class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm group">
                                <summary
                                    class="p-6 flex items-center justify-between cursor-pointer hover:bg-surface-container-low/50 transition-colors">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-primary-container/20 flex items-center justify-center text-primary font-bold">
                                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                                        <h3 class="font-bold text-lg">{{ $module->title }}</h3>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        @if(!$isTeacherManage)
                                            @php
                                                $isCompleted = in_array($module->id, $completedModuleIds ?? [], true);
                                                $enrolled = (bool) ($isEnrolled ?? false);
                                            @endphp
                                            @if($isCompleted)
                                                <span class="inline-flex items-center gap-1 text-emerald-700 text-xs font-bold bg-emerald-500/10 border border-emerald-500/20 px-2 py-1 rounded-full">
                                                    <span class="material-symbols-outlined text-base" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                                    Completed
                                                </span>
                                            @else
                                                <form method="POST" action="{{ route('course.module.complete', [$course->id, $module->id]) }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="inline-flex items-center justify-center w-10 h-10 rounded-xl border border-outline-variant/20 hover:bg-surface-container-low transition-colors {{ $enrolled ? '' : 'opacity-50 cursor-not-allowed' }}"
                                                        title="{{ $enrolled ? 'Mark as completed' : 'Enroll to unlock module completion' }}"
                                                        {{ $enrolled ? '' : 'disabled' }}>
                                                        <span class="material-symbols-outlined text-on-surface-variant">check</span>
                                                    </button>
                                                </form>
                                            @endif
                                        @endif
                                        <span class="material-symbols-outlined text-on-surface-variant transition-transform group-open:rotate-180">
                                            expand_more
                                        </span>
                                    </div>
                                </summary>
                                <div class="px-6 pb-6 pt-2 border-t border-outline-variant/10">
                                    <p class="text-sm text-on-surface-variant leading-relaxed whitespace-pre-wrap [tab-size:4]">{!! $highlightedModuleDescription !!}</p>
                                    @if($isTeacherManage)
                                        <div class="module-edit-controls hidden mt-5 pt-4 border-t border-outline-variant/10">
                                            <p class="text-xs uppercase font-semibold text-on-surface-variant mb-3">Edit Module</p>
                                            <form method="POST" action="{{ route('teacher.course.modules.update', [$course->id, $module->id]) }}"
                                                class="space-y-3">
                                                @csrf
                                                @method('PUT')
                                                <input name="title" type="text" required value="{{ $module->title }}"
                                                    class="w-full rounded-xl border-none bg-surface-container-low py-3 px-4 text-sm focus:ring-2 focus:ring-primary" />
                                                <div class="text-format-toolbar flex flex-wrap items-center gap-2 p-3 rounded-xl bg-surface-container-low">
                                                    <button type="button" data-wrap-open="<strong>" data-wrap-close="</strong>" class="px-2 py-1 text-xs font-bold rounded bg-white">Strong</button>
                                                    <button type="button" data-wrap-open="<em>" data-wrap-close="</em>" class="px-2 py-1 text-xs font-bold rounded bg-white">Italic</button>
                                                    <button type="button" data-wrap-open="<u>" data-wrap-close="</u>" class="px-2 py-1 text-xs font-bold rounded bg-white">Underline</button>
                                                    <select data-style-type="color" class="text-xs rounded border-none bg-white py-1">
                                                        <option value="">Text color</option>
                                                        <option value="#0D1B2A">Navy</option>
                                                        <option value="#16a34a">Green</option>
                                                        <option value="#ef4444">Red</option>
                                                        <option value="#2563eb">Blue</option>
                                                    </select>
                                                    <select data-style-type="background-color" class="text-xs rounded border-none bg-white py-1">
                                                        <option value="">Background</option>
                                                        <option value="#fef08a">Yellow</option>
                                                        <option value="#bfdbfe">Blue</option>
                                                        <option value="#fecaca">Red</option>
                                                        <option value="#bbf7d0">Green</option>
                                                    </select>
                                                    <select data-style-type="font-size" class="text-xs rounded border-none bg-white py-1">
                                                        <option value="">Text size</option>
                                                        <option value="12px">12</option>
                                                        <option value="14px">14</option>
                                                        <option value="16px">16</option>
                                                        <option value="20px">20</option>
                                                    </select>
                                                    <select data-style-type="font-family" class="text-xs rounded border-none bg-white py-1">
                                                        <option value="">Font family</option>
                                                        <option value="Inter, sans-serif">Inter</option>
                                                        <option value="Space Grotesk, sans-serif">Space Grotesk</option>
                                                        <option value="monospace">Monospace</option>
                                                        <option value="serif">Serif</option>
                                                    </select>
                                                </div>
                                                <textarea name="description" rows="3" required
                                                    class="js-format-target w-full rounded-xl border-none bg-surface-container-low py-3 px-4 text-sm focus:ring-2 focus:ring-primary resize-none">{{ $module->description }}</textarea>
                                                <div class="flex flex-wrap gap-2">
                                                    <button type="submit"
                                                        class="bg-primary text-white px-4 py-2 rounded-lg text-xs font-bold hover:opacity-90 transition-opacity">
                                                        Save Changes
                                                    </button>
                                                </div>
                                            </form>
                                            <form method="POST"
                                                action="{{ route('teacher.course.modules.destroy', [$course->id, $module->id]) }}"
                                                onsubmit="return confirm('Delete this module?');" class="mt-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-error/10 text-error px-4 py-2 rounded-lg text-xs font-bold hover:bg-error/20 transition-colors">
                                                    Delete Module
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </details>
                        @empty
                            <div class="bg-surface-container-lowest rounded-2xl p-6 text-sm text-on-surface-variant">
                                No modules available for this course yet.
                            </div>
                        @endforelse
                    </div>
                </section>
                <!-- Instructor Section -->
                <section class="mb-20">
                    <h2 class="text-3xl font-bold mb-10">Meet Your Mentor</h2>
                    <div class="bg-surface-container-low rounded-2xl p-8 flex flex-col md:flex-row gap-8 items-start">
                        <img alt="{{ $course->user->name ?? 'Instructor' }}"
                            class="w-32 h-32 rounded-2xl object-cover shrink-0 grayscale hover:grayscale-0 transition-all duration-500"
                            data-alt="{{ $course->user->name ?? 'Instructor' }}"
                            src="{{ $course->user->photo ?? 'https://ui-avatars.com/api/?name=' . urlencode($course->user->name ?? 'Instructor') . '&background=4F8EF7&color=fff' }}" />
                        <div>
                            <h3 class="text-2xl font-bold mb-2">{{ $course->user->name ?? 'Instructor' }}</h3>
                            <p class="text-primary font-bold mb-4 uppercase tracking-widest text-xs">{{ $course->user->specialization ?? 'Instructor' }}</p>
                            <p class="text-on-surface-variant leading-relaxed mb-6">
                                {{ $course->user->bio ?? 'An experienced instructor ready to guide you.' }}
                            </p>
                            <div class="flex gap-6">
                                <div class="text-center">
                                    <div class="text-xl font-bold">45k+</div>
                                    <div class="text-xs text-on-surface-variant uppercase tracking-tighter">Students
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xl font-bold">{{ $course->user ? $course->user->courses->count() : 1 }}</div>
                                    <div class="text-xs text-on-surface-variant uppercase tracking-tighter">Courses
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xl font-bold">4.95</div>
                                    <div class="text-xs text-on-surface-variant uppercase tracking-tighter">Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Sidebar Content Area -->
            <aside class="lg:col-span-4 space-y-10">
                @if($isTeacherManage)
                    <div class="bg-surface-container-lowest rounded-2xl p-8 border border-outline-variant/10">
                        <h3 class="text-xl font-bold mb-6">Manage References</h3>
                        <form method="POST" action="{{ route('teacher.course.references.attach', $course->id) }}" class="space-y-4">
                            @csrf
                            <div>
                                <label class="block text-xs font-semibold text-on-surface-variant uppercase mb-2">Attach Exercise</label>
                                <select name="exercise_id" class="w-full rounded-xl border-none bg-surface-container-low py-3 px-4 text-sm focus:ring-2 focus:ring-primary">
                                    <option value="">Choose one of your exercises</option>
                                    @foreach($teacherExercises as $exercise)
                                        <option value="{{ $exercise->id }}">{{ $exercise->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-on-surface-variant uppercase mb-2">Attach Quiz</label>
                                <select name="quiz_id" class="w-full rounded-xl border-none bg-surface-container-low py-3 px-4 text-sm focus:ring-2 focus:ring-primary">
                                    <option value="">Choose one of your quizzes</option>
                                    @foreach($teacherQuizzes as $quiz)
                                        <option value="{{ $quiz->id }}">{{ $quiz->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="w-full bg-primary text-white py-3 rounded-xl font-bold hover:opacity-90 transition-opacity">
                                Save References
                            </button>
                        </form>
                        <div class="mt-6 space-y-4">
                            <div>
                                <p class="text-xs font-semibold text-on-surface-variant uppercase mb-2">Attached Exercises</p>
                                <ul class="space-y-2">
                                    @forelse($course->exercises as $exercise)
                                        <li class="text-sm bg-surface-container-low px-3 py-2 rounded-lg">{{ $exercise->title }}</li>
                                    @empty
                                        <li class="text-sm text-on-surface-variant">No exercise attached.</li>
                                    @endforelse
                                </ul>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-on-surface-variant uppercase mb-2">Attached Quizzes</p>
                                <ul class="space-y-2">
                                    @forelse($course->quizzes as $quiz)
                                        <li class="text-sm bg-surface-container-low px-3 py-2 rounded-lg">{{ $quiz->title }}</li>
                                    @empty
                                        <li class="text-sm text-on-surface-variant">No quiz attached.</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- What you'll learn -->
                <div class="bg-surface-container-lowest rounded-2xl p-8 border border-outline-variant/10">
                    <h3 class="text-xl font-bold mb-6">What you'll learn</h3>
                    <ul class="space-y-4">
                        @foreach($learnPoints as $point)
                            <li class="flex gap-3">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="text-sm text-on-surface-variant leading-tight">{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Prerequisites -->
                <div>
                    <h3 class="text-xl font-bold mb-4 px-2">Course Requirements</h3>
                    <div class="bg-surface p-6 rounded-2xl space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-on-surface-variant">code</span>
                            <span class="text-sm">Solid understanding of React Hooks</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-on-surface-variant">javascript</span>
                            <span class="text-sm">Modern ES6+ JavaScript proficiency</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-on-surface-variant">terminal</span>
                            <span class="text-sm">Familiarity with Node.js and NPM</span>
                        </div>
                    </div>
                </div>
                <!-- Related Courses -->
                <div>
                    <h3 class="text-xl font-bold mb-6 px-2">Related Pathways</h3>
                    <div class="space-y-6">
                        @forelse($relatedCourses as $related)
                        <a href="{{ route('course', $related->id) }}" class="group cursor-pointer block">
                            <div class="flex gap-4 items-center">
                                <img alt="{{ $related->title }}" class="w-16 h-16 rounded-xl object-cover"
                                    src="{{ $related->thumbnail }}" />
                                <div>
                                    <h4 class="font-bold text-sm group-hover:text-primary transition-colors">{{ $related->title }}</h4>
                                    <p class="text-xs text-on-surface-variant mt-1">{{ number_format($related->rating, 1) }} ★ @if($related->duration) • {{ $related->duration }} @endif</p>
                                </div>
                            </div>
                        </a>
                        @empty
                        <p class="text-sm text-on-surface-variant">No related courses found.</p>
                        @endforelse
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <!-- Footer -->
    <footer class="w-full py-12 mt-20 border-t border-[#abadaf]/15 bg-[#0D1B2A] dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="font-['Space_Grotesk'] font-bold text-[#30D4ED] dark:text-white uppercase">
                <span class="text-[#D0E3E6]">Code</span>Mentor
            </div>
            <div class="flex flex-wrap justify-center gap-8 text-xs font-['Inter'] tracking-normal text-slate-500">
                <a class="text-[#D0E3E6] hover:text-[#30D4ED] underline underline-offset-4 transition-opacity"
                    href="#">Terms of
                    Service</a>
                <a class="text-[#D0E3E6] hover:text-[#30D4ED] underline underline-offset-4 transition-opacity"
                    href="#">Privacy
                    Policy</a>
                <a class="text-[#D0E3E6] hover:text-[#30D4ED] underline underline-offset-4 transition-opacity"
                    href="#">Help Center</a>
                <a class="text-[#D0E3E6] hover:text-[#30D4ED] underline underline-offset-4 transition-opacity"
                    href="#">Support</a>
            </div>
            <p class="text-xs text-[#D0E3E6] font-['Inter']">© 2024 DEVRAK Academy. The Kinetic Editorial System.</p>
        </div>
    </footer>
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
    @if($isTeacherManage)
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const openBtn = document.getElementById('open-manage-modules-btn');
                const cancelBtn = document.getElementById('cancel-manage-modules-btn');
                const tools = document.getElementById('module-management-tools');
                const editControls = document.querySelectorAll('.module-edit-controls');
                const detailsEls = document.querySelectorAll('#manage-modules details');

                function setManageMode(enabled) {
                    if (!tools) return;

                    tools.classList.toggle('hidden', !enabled);
                    editControls.forEach((el) => el.classList.toggle('hidden', !enabled));

                    if (!enabled) {
                        const addForm = tools.querySelector('form');
                        if (addForm) addForm.reset();
                        detailsEls.forEach((details) => details.removeAttribute('open'));
                    }
                }

                if (openBtn) {
                    openBtn.addEventListener('click', function () {
                        setManageMode(true);
                    });
                }

                if (cancelBtn) {
                    cancelBtn.addEventListener('click', function () {
                        setManageMode(false);
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    });
                }

                function wrapSelectedText(textarea, openTag, closeTag) {
                    const start = textarea.selectionStart;
                    const end = textarea.selectionEnd;
                    const value = textarea.value;
                    const selectedText = value.slice(start, end);
                    const wrappedText = openTag + selectedText + closeTag;

                    textarea.value = value.slice(0, start) + wrappedText + value.slice(end);
                    textarea.focus();
                    textarea.selectionStart = start + openTag.length;
                    textarea.selectionEnd = end + openTag.length;
                }

                function initFormattingToolbars() {
                    document.querySelectorAll('.text-format-toolbar').forEach((toolbar) => {
                        const form = toolbar.closest('form');
                        const target = form ? form.querySelector('.js-format-target') : null;
                        if (!target) return;

                        toolbar.querySelectorAll('button[data-wrap-open]').forEach((btn) => {
                            btn.addEventListener('click', function () {
                                wrapSelectedText(target, btn.dataset.wrapOpen, btn.dataset.wrapClose || '');
                            });
                        });

                        toolbar.querySelectorAll('select[data-style-type]').forEach((select) => {
                            select.addEventListener('change', function () {
                                if (!select.value) return;
                                wrapSelectedText(
                                    target,
                                    '<span style="' + select.dataset.styleType + ': ' + select.value + ';">',
                                    '</span>'
                                );
                                select.value = '';
                            });
                        });
                    });
                }

                initFormattingToolbars();
            });
        </script>
    @endif
@include('partials.ai_chat')
</body>

</html>