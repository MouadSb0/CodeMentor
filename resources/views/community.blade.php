<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Community | CodeMentor</title>
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
                        "on-secondary": "#eff2ff",
                        "kinetic-cyan": "#30D4ED"
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
            background-color: #f5f7f9;
            color: #2c2f31;
        }

        .kinetic-gradient {
            background: linear-gradient(135deg, #006573 0%, #3adffa 100%);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] min-h-screen pb-24 md:pb-0">
    <!-- TopAppBar -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
                            alt=""></a></span>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ url('/dashboard') }}">Dashboard</a>
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
                        <a href="{{ route('assesements') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Assesement</a>
                        <a href="{{ route('career') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Career</a>
                        <a href="{{ route('certifications') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Certifications</a>
                    </div>
                </div>
                <a class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors"
                    href="{{ url('/community') }}">Community</a>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ url('/contact') }}">Contact</a>

            </nav>
            <div class="flex items-center gap-4">
                <div
                    class="hidden sm:flex items-center bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant/15">
                    <span class="material-symbols-outlined text-sm text-on-surface-variant mr-2">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-sm w-80" placeholder="Search courses..."
                        type="text" />
                </div>
                <div class="relative group/notif">
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#eef1f3] transition-colors">
                        <span class="material-symbols-outlined text-on-surface-variant relative"
                            data-icon="notifications">
                            notifications
                            @if(auth()->check() && auth()->user()->notifications()->whereNull('read_at')->count() > 0)
                                <span
                                    class="absolute top-0 right-0 w-2.5 h-2.5 bg-error rounded-full border border-white"></span>
                            @endif
                        </span>
                    </button>
                    <!-- Notifications Dropdown -->
                    @if(auth()->check())
                        <div
                            class="absolute right-0 top-12 w-80 bg-white rounded-2xl shadow-2xl border border-outline-variant/20 opacity-0 invisible group-hover/notif:opacity-100 group-hover/notif:visible transition-all duration-200 translate-y-2 group-hover/notif:translate-y-0 z-[1000] overflow-hidden">
                            <div
                                class="p-4 border-b border-outline-variant/10 flex justify-between items-center bg-surface-container-low">
                                <h3 class="font-bold text-on-surface">Notifications</h3>
                                @if(auth()->user()->notifications()->whereNull('read_at')->count() > 0)
                                    <span
                                        class="text-[10px] bg-primary text-white px-2 py-0.5 rounded-full">{{ auth()->user()->notifications()->whereNull('read_at')->count() }}
                                        New</span>
                                @endif
                            </div>
                            <div class="max-h-[300px] overflow-y-auto">
                                @forelse(auth()->user()->notifications()->latest()->take(10)->get() as $notification)
                                    <div
                                        class="p-3 border-b border-outline-variant/5 hover:bg-surface-container-lowest transition-colors {{ is_null($notification->read_at) ? 'bg-primary/5' : '' }}">
                                        <p class="text-sm font-bold text-on-surface">{{ $notification->title }}</p>
                                        <p class="text-xs text-on-surface-variant mt-1">{{ $notification->body }}</p>
                                        
                                        @if($notification->type === 'connection_request' && isset($notification->data['connection_id']))
                                            <div class="flex gap-2 mt-3">
                                                <form method="POST" action="{{ route('connect.handle', $notification->data['connection_id']) }}">
                                                    @csrf
                                                    <input type="hidden" name="status" value="accepted">
                                                    <button type="submit" class="text-[10px] bg-primary text-white px-3 py-1 rounded-lg font-bold hover:opacity-90 transition-opacity">Accept</button>
                                                </form>
                                                <form method="POST" action="{{ route('connect.handle', $notification->data['connection_id']) }}">
                                                    @csrf
                                                    <input type="hidden" name="status" value="rejected">
                                                    <button type="submit" class="text-[10px] bg-surface-container-high text-on-surface-variant px-3 py-1 rounded-lg font-bold hover:bg-surface-container-highest transition-colors">Reject</button>
                                                </form>
                                            </div>
                                        @endif

                                        <p class="text-[10px] text-outline mt-2">
                                            {{ $notification->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                @empty
                                    <div class="p-6 text-center text-on-surface-variant text-sm">
                                        No notifications yet.
                                    </div>
                                @endforelse
                            </div>
                            <div class="p-2 border-t border-outline-variant/10 text-center bg-surface-container-lowest">
                                <a href="#" class="text-xs font-bold text-primary hover:underline">Mark all as read</a>
                            </div>
                        </div>
                    @endif
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
                    <div
                        class="absolute right-0 top-12 w-56 bg-white rounded-2xl shadow-2xl border border-outline-variant/20 opacity-0 invisible group-hover/avatar:opacity-100 group-hover/avatar:visible transition-all duration-200 translate-y-2 group-hover/avatar:translate-y-0 z-[999]">
                        <div class="p-3 border-b border-outline-variant/10">
                            <p class="text-xs font-bold text-on-surface truncate">{{ auth()->user()->name }}</p>
                            <p class="text-[10px] text-outline truncate">{{ auth()->user()->email }}</p>
                        </div>
                        <div class="p-2">
                            <a href="{{ url('profile') }}"
                                class="flex items-center gap-2 px-3 py-2 rounded-xl text-sm text-on-surface hover:bg-surface-container transition-colors">
                                <span class="material-symbols-outlined text-base">person</span>
                                <span>Mon profil</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full flex items-center gap-2 px-3 py-2 rounded-xl text-sm text-error hover:bg-red-50 transition-colors">
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
    <main class=" mx-20 py-8 flex flex-col md:flex-row gap-4">
        <!-- Left Sidebar: User Standing & Navigation -->
        <aside class="w-full md:w-72 flex flex-col gap-6">
            <!-- User Standing Card -->
            <div class="bg-surface-container-lowest rounded-xl p-6 shadow-[0px_10px_40px_rgba(0,101,115,0.06)]">
                <div class="flex items-center gap-4 mb-4">
                    <img alt="{{ auth()->user()->name }}" class="w-12 h-12 rounded-full object-cover"
                        src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=006573&color=fff' }}" />
                    <div class="min-w-0">
                        <p class="font-headline font-semibold text-on-surface truncate">{{ auth()->user()->name }}</p>
                        <p class="text-xs font-medium text-primary capitalize">{{ auth()->user()->role ?? 'Member' }}</p>
                    </div>
                </div>
                @php
                    $points = auth()->user()->points ?? 0;
                    $level = floor($points / 500) + 1;
                    $progress = (($points % 500) / 500) * 100;
                @endphp
                <div class="space-y-3">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-on-surface-variant">Level {{ $level }}</span>
                        <span class="font-bold text-on-surface">{{ number_format($points) }} XP</span>
                    </div>
                    <div class="w-full bg-surface-container-low h-2 rounded-full overflow-hidden">
                        <div class="bg-primary h-full transition-all duration-1000" style="width: {{ $progress }}%"></div>
                    </div>
                    <div class="flex gap-2 pt-2">
                        <span
                            class="bg-tertiary-fixed text-on-tertiary-fixed px-2 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider">Top
                            Contributor</span>
                        <span
                            class="bg-secondary-fixed text-on-secondary-fixed px-2 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider">Bug
                            Hunter</span>
                    </div>
                </div>
            </div>
            <!-- Navigation Drawer Replaced with Suggested Groups -->
            <div class="hidden md:flex flex-col bg-surface-container-low rounded-xl p-4 space-y-4">
                <h3 class="font-headline font-bold text-on-surface">Suggested Groups</h3>
                @if(isset($randomGroups) && $randomGroups->count() > 0)
                    @foreach($randomGroups as $group)
                        <div class="bg-white dark:bg-slate-800 p-4 rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.02)] flex flex-col gap-2 border border-outline-variant/10 hover:border-primary/30 transition-colors">
                            <div class="flex justify-between items-start">
                                <a href="{{ route('groups.show', $group->id) }}" class="hover:text-primary transition-colors truncate">
                                    <h4 class="font-headline font-bold text-sm text-on-surface truncate pr-2">{{ $group->name ?? 'Community Group' }}</h4>
                                </a>
                                <a href="{{ route('groups.show', $group->id) }}" class="text-primary hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[18px]">group</span>
                                </a>
                            </div>
                            <p class="text-xs text-on-surface-variant line-clamp-2 leading-relaxed">
                                {{ $group->description ?? 'Join this group to collaborate, share knowledge, and connect with peers.' }}
                            </p>
                            <a href="{{ route('groups.show', $group->id) }}" class="text-[11px] font-bold text-primary mt-1 inline-flex items-center gap-1 hover:text-primary-dim transition-colors w-fit">
                                View Group <span class="material-symbols-outlined text-[14px]">arrow_right_alt</span>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="text-center p-4 bg-white/50 rounded-xl border border-outline-variant/10">
                        <span class="material-symbols-outlined text-outline mb-2">groups</span>
                        <p class="text-xs text-on-surface-variant">No groups available at the moment.</p>
                    </div>
                @endif
            </div>
        </aside>
        <!-- Main Content Area -->
        <section class="flex-1 space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                <div>
                    <span class="text-primary font-bold tracking-[0.2em] text-[10px] uppercase">Join the Movement</span>
                    <h2 class="font-headline text-4xl font-bold tracking-tight mt-1 text-on-surface"><span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Build
                        </span>Together</h2>
                    <p class="text-on-surface-variant max-w-lg mt-2 font-body text-sm leading-relaxed">
                        The Kinetic Lab is where elite developers share, learn, and engineer the future of
                        high-performance software.
                    </p>
                </div>
                <button
                    class="kinetic-gradient text-on-primary px-6 py-3 rounded-xl font-semibold shadow-lg active:scale-95 transition-all text-sm flex items-center gap-2"
                    id="add_discussion_btn">
                    <span class="material-symbols-outlined text-sm">add</span>
                    New Discussion
                </button>
            </div>
            <!-- Trending Discussions Bento -->
            <div class="space-y-6">
                <h3 class="font-headline text-xl font-semibold text-on-surface flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">trending_up</span>
                    Trending Discussions
                </h3>
                
                @forelse($trendingDiscussions as $discussion)
                    <article class="bg-surface-container-lowest p-6 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] flex gap-6 hover:shadow-md transition-shadow group">
                        <div class="flex flex-col items-center gap-1 bg-surface-container-low rounded-lg p-2 h-fit">
                            <button class="text-on-surface-variant hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">expand_less</span>
                            </button>
                            <span class="font-headline font-bold text-sm">{{ $discussion->comments_count }}</span>
                            <button class="text-on-surface-variant hover:text-error transition-colors">
                                <span class="material-symbols-outlined">expand_more</span>
                            </button>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="bg-primary-container/20 text-on-primary-container text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">{{ $discussion->category }}</span>
                                <span class="text-on-surface-variant text-[11px]">Posted by 
                                    <a href="{{ route('other_profile', $discussion->user->id) }}" class="font-bold hover:text-primary transition-colors">@ {{ $discussion->user->name }}</a> 
                                    • {{ $discussion->created_at->diffForHumans() }}
                                </span>
                            </div>
                            <h4 class="font-headline text-lg font-semibold text-on-surface group-hover:text-primary transition-colors">
                                {{ $discussion->title }}
                            </h4>
                            <p class="text-on-surface-variant text-sm mt-2 line-clamp-2 leading-relaxed">
                                {{ $discussion->content }}
                            </p>
                            
                            @if($discussion->attachment_url)
                                <div class="mt-4 rounded-xl overflow-hidden border border-outline-variant/10 shadow-sm">
                                    @if($discussion->attachment_type === 'image')
                                        <img src="{{ $discussion->attachment_url }}" class="w-full max-h-96 object-cover hover:scale-[1.01] transition-transform cursor-pointer" onclick="window.open(this.src)">
                                    @elseif($discussion->attachment_type === 'video')
                                        <video src="{{ $discussion->attachment_url }}" controls class="w-full bg-black"></video>
                                    @elseif($discussion->attachment_type === 'pdf')
                                        <div class="flex items-center gap-4 p-4 bg-surface-container-low">
                                            <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center">
                                                <span class="material-symbols-outlined text-2xl">picture_as_pdf</span>
                                            </div>
                                            <div class="flex-1 truncate">
                                                <p class="text-sm font-bold text-on-surface truncate">{{ $discussion->attachment_name }}</p>
                                                <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">PDF Document</p>
                                            </div>
                                            <a href="{{ $discussion->attachment_url }}" target="_blank" class="px-4 py-2 bg-primary text-white text-[10px] font-bold rounded-lg uppercase tracking-wider hover:bg-primary-dim transition-colors">View</a>
                                        </div>
                                    @else
                                        <div class="flex items-center gap-4 p-4 bg-surface-container-low">
                                            <div class="w-12 h-12 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
                                                <span class="material-symbols-outlined text-2xl">description</span>
                                            </div>
                                            <div class="flex-1 truncate">
                                                <p class="text-sm font-bold text-on-surface truncate">{{ $discussion->attachment_name }}</p>
                                                <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">File Attachment</p>
                                            </div>
                                            <a href="{{ $discussion->attachment_url }}" download class="px-4 py-2 bg-primary text-white text-[10px] font-bold rounded-lg uppercase tracking-wider hover:bg-primary-dim transition-colors">Download</a>
                                        </div>
                                    @endif
                                </div>
                            @endif
                            <div class="flex items-center gap-4 mt-4 text-on-surface-variant text-xs font-medium">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">chat_bubble</span> {{ $discussion->comments->count() }} Comments
                                </div>
                                <button onclick="openShareModal({{ $discussion->id }}, '{{ addslashes($discussion->title) }}')"
                                    class="flex items-center gap-1 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-sm">share</span> Share
                                </button>
                            </div>
                        </div>
                    </article>
                @empty
                    <p class="text-sm text-on-surface-variant">No trending discussions yet.</p>
                @endforelse
            </div>

            <!-- Recent Feed -->
            <div class="space-y-6 pt-4">
                <h3 class="font-headline text-xl font-semibold text-on-surface flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">feed</span>
                    Recent Feed
                </h3>

                @forelse($discussions as $discussion)
                    <article class="bg-white p-6 rounded-xl border border-outline-variant/10 hover:shadow-md transition-shadow group">
                        <div class="flex items-start gap-4">
                            <a href="{{ route('other_profile', $discussion->user->id) }}" class="shrink-0">
                                <img src="{{ $discussion->user->photo ?? 'https://ui-avatars.com/api/?name='.urlencode($discussion->user->name) }}" class="w-10 h-10 rounded-full object-cover border border-outline-variant/10 hover:border-primary transition-colors">
                            </a>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1">
                                    <a href="{{ route('other_profile', $discussion->user->id) }}" class="font-bold text-sm hover:text-primary transition-colors">{{ $discussion->user->name }}</a>
                                    <span class="text-[10px] text-on-surface-variant uppercase">{{ $discussion->category }}</span>
                                    <span class="text-[10px] text-outline ml-auto">{{ $discussion->created_at->diffForHumans() }}</span>
                                </div>
                                <h4 class="font-headline font-semibold text-on-surface group-hover:text-primary transition-colors truncate">
                                    {{ $discussion->title }}
                                </h4>
                                <p class="text-sm text-on-surface-variant mt-1 line-clamp-2">{{ $discussion->content }}</p>

                                @if($discussion->attachment_url)
                                    <div class="mt-3 rounded-xl overflow-hidden border border-outline-variant/10 shadow-sm">
                                        @if($discussion->attachment_type === 'image')
                                            <img src="{{ $discussion->attachment_url }}" class="w-full max-h-64 object-cover hover:opacity-95 transition-opacity cursor-pointer" onclick="window.open(this.src)">
                                        @elseif($discussion->attachment_type === 'video')
                                            <video src="{{ $discussion->attachment_url }}" controls class="w-full bg-black"></video>
                                        @else
                                            <div class="flex items-center gap-3 p-3 bg-surface-container-low">
                                                <span class="material-symbols-outlined text-primary">{{ $discussion->attachment_type === 'pdf' ? 'picture_as_pdf' : 'description' }}</span>
                                                <span class="text-xs font-bold text-on-surface truncate flex-1">{{ $discussion->attachment_name }}</span>
                                                <a href="{{ $discussion->attachment_url }}" target="_blank" class="text-[10px] font-bold text-primary hover:underline">OPEN</a>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                                <div class="flex items-center gap-4 mt-3 text-[11px] text-on-surface-variant">
                                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-xs">chat_bubble</span> {{ $discussion->comments->count() }}</span>
                                    <button onclick="openShareModal({{ $discussion->id }}, '{{ addslashes($discussion->title) }}')"
                                        class="flex items-center gap-1 hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-xs">share</span> Share
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                    <p class="text-sm text-on-surface-variant">No discussions yet.</p>
                @endforelse
            </div>
            <!-- Study Groups Section (Asymmetric Layout) -->
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <h3 class="font-headline text-xl font-semibold text-on-surface">Active Study Groups</h3>
                    <a class="text-primary text-xs font-bold uppercase tracking-widest hover:underline"
                        href="{{ url('/groups') }}">View All</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @forelse($randomGroups->take(2) as $group)
                        <div onclick="window.location='{{ route('groups.show', $group->id) }}'"
                            class="bg-primary/5 p-5 rounded-xl flex items-center justify-between group cursor-pointer hover:bg-primary/10 transition-colors">
                            <div class="flex items-center gap-4">
                                <div class="bg-white w-12 h-12 rounded-lg flex items-center justify-center shadow-sm overflow-hidden">
                                    {{-- Placeholder for cover photo / icon --}}
                                    <img src="https://picsum.photos/seed/{{ $group->id }}/200/200" alt="Group cover" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h5 class="font-headline font-semibold text-on-surface hover:text-primary transition-colors">{{ $group->name }}</h5>
                                    <p class="text-[11px] text-on-surface-variant">{{ $group->members->count() }} Active Members • {{ $group->discussions->count() }} Discussions</p>
                                </div>
                            </div>
                            <span
                                class="material-symbols-outlined text-primary-fixed-dim opacity-0 group-hover:opacity-100 transition-opacity">arrow_forward</span>
                        </div>
                    @empty
                        <div class="col-span-2 text-center p-8 bg-surface-container-low rounded-xl">
                            <p class="text-sm text-on-surface-variant">No active study groups found.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- Right Sidebar: Mentors & Meta -->
        <aside class="w-full md:w-80 flex flex-col gap-8">
            <div class="bg-surface-container-low rounded-xl p-6">
                <h3 class="font-headline font-bold text-on-surface mb-6">Network Suggestions</h3>
                <div class="space-y-6">
                    @forelse($suggestedUsers as $sUser)
                    <div class="flex items-center justify-between group/user">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('other_profile', $sUser->id) }}" class="relative shrink-0">
                                <img alt="{{ $sUser->name }}"
                                    class="w-10 h-10 rounded-full object-cover grayscale group-hover/user:grayscale-0 transition-all border border-outline-variant/10 group-hover/user:border-primary"
                                    src="{{ $sUser->photo ?? 'https://ui-avatars.com/api/?name='.urlencode($sUser->name).'&background=006573&color=fff' }}" />
                                <div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 border-2 border-surface-container-low rounded-full"></div>
                            </a>
                            <div class="min-w-0">
                                <a href="{{ route('other_profile', $sUser->id) }}" class="text-sm font-bold text-on-surface hover:text-primary transition-colors block truncate">{{ $sUser->name }}</a>
                                <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter truncate">{{ $sUser->specialization ?? 'Member' }}</p>
                            </div>
                        </div>
                        <a href="{{ route('other_profile', $sUser->id) }}"
                            class="text-primary text-[11px] font-bold px-3 py-1.5 bg-white rounded-lg shadow-sm hover:bg-primary hover:text-white transition-all">Connect</a>
                    </div>
                    @empty
                    <p class="text-xs text-on-surface-variant italic">No suggestions available.</p>
                    @endforelse
                </div>
            </div>
            <!-- Create Group Card -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-outline-variant/10 text-center relative overflow-hidden group">
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">group_add</span>
                    </div>
                    <h4 class="font-headline font-bold text-xl text-on-surface mb-1">Start a Group</h4>
                    <p class="text-on-surface-variant text-xs mb-4">Bring people together around a shared topic.</p>
                    <button onclick="document.getElementById('modal_group').classList.remove('hidden')" class="w-full bg-primary text-white py-2.5 rounded-xl text-sm font-bold mt-2 hover:bg-primary-dim transition-colors shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                        Create New Group
                    </button>
                </div>
            </div>
        </aside>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl border-t border-[#abadaf]/15 shadow-[0_-4px_20px_rgba(0,0,0,0.03)] rounded-t-[1.5rem]">
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90"
            href="{{ route('courses') }}">
            <span class="material-symbols-outlined">auto_stories</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold">Learn</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90"
            href="{{ route('CodeLab') }}">
            <span class="material-symbols-outlined">terminal</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold">Build</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-cyan-50 dark:bg-cyan-900/30 text-cyan-600 dark:text-cyan-300 rounded-2xl px-5 py-2 transition-all active:scale-90"
            href="{{ route('community') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">group</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold">Join</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90"
            href="{{ route('profile') }}">
            <span class="material-symbols-outlined">person</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold">Profile</span>
        </a>
    </nav>


    <!-- Modal Overlay -->
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-on-surface/5 backdrop-blur-xl p-6 hidden"
        id="modal_discussion">
        <div class="flex flex-col lg:flex-row items-center justify-center gap-8 w-full max-w-6xl">
            <!-- Discussion Modal -->
            <div
                class="w-full lg:w-3/4 bg-white rounded-[32px] shadow-[0_20px_60px_rgba(0,101,115,0.1)] overflow-hidden relative border border-white/40 flex flex-col">
                <!-- Close Button -->
                <button
                    class="absolute top-6 right-8 p-2 rounded-full hover:bg-surface-container-low transition-colors text-on-surface-variant z-10"
                    id="close_modal_discussion">
                    <span class="material-symbols-outlined">close</span>
                </button>
                <!-- Modal Content Wrapper -->
                <div class="p-10 flex flex-col h-full">
                    <!-- Modal Header -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="px-2.5 py-0.5 bg-kinetic-cyan/10 text-kinetic-cyan text-[10px] font-black tracking-widest uppercase rounded">Draft
                                Mode</span>
                        </div>
                        <h2 class="text-3xl font-headline font-bold text-on-surface tracking-tight">Start <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Discussion</span>
                        </h2>
                        <p class="text-on-surface-variant text-sm mt-1">Contribute your insights to the Kinetic Lab
                            ecosystem.</p>
                    </div>
                    <!-- Modal Form -->
                    <form action="{{ route('discussions.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 flex-1">
                        @csrf
                        <!-- Title Field -->
                        <div class="space-y-2">
                            <label
                                class="text-[10px] font-bold tracking-widest text-on-surface-variant uppercase ml-1">Discussion
                                Title</label>
                            <input name="title" required
                                class="w-full bg-surface-container-low/50 border-none rounded-2xl p-4 text-on-surface placeholder:text-on-surface-variant/40 focus:ring-2 focus:ring-kinetic-cyan/20 focus:bg-white transition-all font-headline font-medium text-lg"
                                placeholder="What's on your mind?" type="text" />
                        </div>
                        <!-- Category Field (Horizontal Chips) -->
                        <input type="hidden" name="category" id="selected_category" value="Technical">
                        <div class="space-y-3">
                            <label
                                class="text-[10px] font-bold tracking-widest text-on-surface-variant uppercase ml-1">Select
                                Category</label>
                            <div class="flex flex-wrap gap-2.5">
                                <button
                                    class="category-btn px-5 py-2.5 rounded-xl bg-primary text-white font-semibold text-xs flex items-center gap-2 shadow-md shadow-primary/10 transition-all hover:scale-[1.02] active:scale-[0.98]"
                                    type="button" onclick="setCategory('Technical', this)">
                                    <span class="material-symbols-outlined text-[18px]">terminal</span> Technical
                                </button>
                                <button
                                    class="category-btn px-5 py-2.5 rounded-xl bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high font-semibold text-xs flex items-center gap-2 transition-all"
                                    type="button" onclick="setCategory('Career', this)">
                                    <span class="material-symbols-outlined text-[18px]">trending_up</span> Career
                                </button>
                                <button
                                    class="category-btn px-5 py-2.5 rounded-xl bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high font-semibold text-xs flex items-center gap-2 transition-all"
                                    type="button" onclick="setCategory('Mentorship', this)">
                                    <span class="material-symbols-outlined text-[18px]">psychology</span> Mentorship
                                </button>
                                <button
                                    class="category-btn px-5 py-2.5 rounded-xl bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high font-semibold text-xs flex items-center gap-2 transition-all"
                                    type="button" onclick="setCategory('Research', this)">
                                    <span class="material-symbols-outlined text-[18px]">science</span> Research
                                </button>
                            </div>
                        </div>
                        <!-- Content Field (Rich Text Area) -->
                        <div class="space-y-2">
                            <label
                                class="text-[10px] font-bold tracking-widest text-on-surface-variant uppercase ml-1">Content</label>
                            <div
                                class="bg-surface-container-low/50 rounded-2xl overflow-hidden border border-transparent focus-within:border-kinetic-cyan/20 focus-within:ring-2 focus-within:ring-kinetic-cyan/10 focus-within:bg-white transition-all">
                                <div
                                    class="flex items-center gap-1 px-3 py-2 border-b border-surface-container-high/50 bg-surface-container-high/20">
                                    <button
                                        class="p-1.5 hover:bg-white rounded text-on-surface-variant transition-colors"
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">format_bold</span></button>
                                    <button
                                        class="p-1.5 hover:bg-white rounded text-on-surface-variant transition-colors"
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">format_italic</span></button>
                                    <button
                                        class="p-1.5 hover:bg-white rounded text-on-surface-variant transition-colors"
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">link</span></button>
                                    <div class="w-[1px] h-4 bg-outline-variant/20 mx-1"></div>
                                    <button
                                        class="p-1.5 hover:bg-white rounded text-on-surface-variant transition-colors"
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">format_list_bulleted</span></button>
                                    <button
                                        class="p-1.5 hover:bg-white rounded text-on-surface-variant transition-colors"
                                        type="button" onclick="document.getElementById('post_attachment').click()">
                                        <span class="material-symbols-outlined text-[20px]">image</span>
                                    </button>
                                    <button
                                        class="p-1.5 hover:bg-white rounded text-on-surface-variant transition-colors"
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">code</span></button>
                                </div>
                                <textarea name="content"
                                    class="w-full bg-transparent border-none p-5 text-on-surface placeholder:text-on-surface-variant/40 focus:ring-0 resize-none font-body leading-relaxed"
                                    placeholder="Describe your topic in detail..." rows="4" required></textarea>
                                
                                <div id="attachment_preview" class="hidden px-5 pb-3">
                                    <div class="flex items-center gap-2 p-2 bg-primary/5 rounded-xl border border-primary/10">
                                        <span class="material-symbols-outlined text-primary text-sm">attach_file</span>
                                        <span id="attachment_filename" class="text-xs text-primary font-medium truncate flex-1"></span>
                                        <button type="button" onclick="clearAttachment()" class="text-error hover:scale-110 transition-transform">
                                            <span class="material-symbols-outlined text-sm">close</span>
                                        </button>
                                    </div>
                                </div>
                                
                                <input type="file" name="attachment" id="post_attachment" class="hidden" onchange="updateAttachmentName(this)">
                                
                                <div class="flex justify-between items-center px-5 pb-3">
                                    <span class="text-[10px] text-on-surface-variant/60 font-medium">Markdown
                                        supported</span>
                                    <span class="text-[10px] text-on-surface-variant/60 font-medium">Add PDF, Video or Images via the icon</span>
                                </div>
                            </div>
                        </div>
                        <!-- Action Footer -->
                        <div class="flex items-center justify-end gap-5 pt-2">
                            <button
                                class="px-6 py-3 text-on-surface-variant hover:text-on-surface font-bold text-sm transition-colors rounded-xl hover:bg-surface-container-low"
                                type="button" id="btn_discard_discussion">
                                Discard
                            </button>
                            <button
                                class="group overflow-hidden px-10 py-3.5 bg-gradient-to-r from-kinetic-cyan to-primary rounded-xl text-white font-bold text-sm shadow-xl shadow-kinetic-cyan/20 hover:shadow-kinetic-cyan/30 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center gap-3"
                                type="submit">
                                <span>Post Discussion</span>
                                <span
                                    class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">send</span>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Signature Bottom Bar -->
                <div class="h-1.5 w-full bg-gradient-to-r from-kinetic-cyan via-primary to-kinetic-cyan opacity-40">
                </div>
            </div>
            <!-- Context Panel (Right Side) -->
            <div class="hidden lg:flex flex-col gap-6 w-[280px]">
                <div class="bg-white/40 backdrop-blur-md p-8 rounded-[24px] border border-white/50 shadow-sm">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="material-symbols-outlined text-kinetic-cyan text-sm">lightbulb</span>
                        <h4 class="text-[10px] font-black uppercase tracking-[0.2em] text-primary">Lab Protocol</h4>
                    </div>
                    <p class="text-[11px] leading-relaxed text-on-surface-variant font-medium">
                        Engage the community by phrasing your title as a question.
                        <br /><br />
                        Threads with clear code snippets or research links receive <span
                            class="text-primary font-bold">40% more engagement</span>.
                    </p>
                </div>
                <div class="relative rounded-[24px] overflow-hidden aspect-[4/3] group shadow-lg">
                    <img class="object-cover w-full h-full grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000 scale-110 group-hover:scale-100"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxHIMbjcnWOPXd1RoHDSZuiTeCWhew70sfK05IMHUXxUI42gBgMt8CZfZBNaCfHD_Xrao6U6NqEDPT-Zr28z021buLLJkoHr7WN78b2LfzNRcWtJblrM0Ba_zgievyJ7DxwtB8H7CI4d4_J_XJL7GKm2_gNd1pHinbioHpHgklLgAa-urpsHqtjcZxk82xZ6lmLRNjJeCdjhs4T7dhZzhMBKyDMb3DemAMYc11pEEZ2r-lx5p2ApqMwYilgBNsuGCqJxN5JqkH5KIX" />
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent mix-blend-overlay">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Group Creation -->
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-on-surface/5 backdrop-blur-xl p-6 hidden"
        id="modal_group">
        <div class="flex flex-col lg:flex-row items-center justify-center gap-8 w-full max-w-xl">
            <!-- Group Modal -->
            <div class="w-full bg-white rounded-[32px] shadow-[0_20px_60px_rgba(0,101,115,0.1)] overflow-hidden relative border border-white/40 flex flex-col">
                <!-- Close Button -->
                <button
                    onclick="document.getElementById('modal_group').classList.add('hidden')"
                    class="absolute top-6 right-8 p-2 rounded-full hover:bg-surface-container-low transition-colors text-on-surface-variant z-10"
                    type="button">
                    <span class="material-symbols-outlined">close</span>
                </button>
                <!-- Modal Content Wrapper -->
                <div class="p-10 flex flex-col h-full">
                    <!-- Modal Header -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-2.5 py-0.5 bg-primary/10 text-primary text-[10px] font-black tracking-widest uppercase rounded">New</span>
                        </div>
                        <h2 class="text-3xl font-headline font-bold text-on-surface tracking-tight">Create <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Group</span></h2>
                        <p class="text-on-surface-variant text-sm mt-1">Start a community around your favorite tech stack.</p>
                    </div>
                    <!-- Modal Form -->
                    <form method="POST" action="{{ route('groups.store') }}" class="space-y-6 flex-1">
                        @csrf
                        <!-- Group Name -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold tracking-widest text-on-surface-variant uppercase ml-1">Group Name</label>
                            <input name="name" class="w-full bg-surface-container-low/50 border-none rounded-2xl p-4 text-on-surface placeholder:text-on-surface-variant/40 focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all font-headline font-medium" placeholder="e.g. Advanced Rust Development" type="text" required />
                        </div>
                        <!-- Group Description -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold tracking-widest text-on-surface-variant uppercase ml-1">Description</label>
                            <textarea name="description" class="w-full bg-surface-container-low/50 border-none rounded-2xl p-4 text-on-surface placeholder:text-on-surface-variant/40 focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all resize-none" placeholder="What is this group about?" rows="3" required></textarea>
                        </div>
                        <!-- Action Footer -->
                        <div class="flex items-center justify-end gap-5 pt-2">
                            <button onclick="document.getElementById('modal_group').classList.add('hidden')" class="px-6 py-3 text-on-surface-variant hover:text-on-surface font-bold text-sm transition-colors rounded-xl hover:bg-surface-container-low" type="button">
                                Cancel
                            </button>
                            <button class="group overflow-hidden px-10 py-3 bg-primary rounded-xl text-white font-bold text-sm shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center gap-3" type="submit">
                                <span>Create Group</span>
                                <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">add_circle</span>
                            </button>
                        </div>
                    </form>
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
    <!-- Share Modal -->
    <div id="share_modal" class="fixed inset-0 z-[100] flex items-center justify-center p-6 hidden">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="closeShareModal()"></div>
        <div class="relative bg-white w-full max-w-md rounded-2xl shadow-2xl overflow-hidden p-8">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-headline font-bold">Share Discussion</h3>
                <button onclick="closeShareModal()" class="text-outline hover:text-on-surface">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <p class="text-sm text-on-surface-variant mb-6">Share "<span id="share_title" class="font-bold text-on-surface"></span>" with others.</p>
            
            <form id="share_form" class="space-y-6">
                @csrf
                <input type="hidden" id="share_id">
                
                <div class="space-y-4">
                    <label class="flex items-center gap-3 p-4 rounded-xl border border-outline-variant/10 hover:border-primary/50 cursor-pointer transition-all bg-surface-container-lowest group">
                        <input type="radio" name="destination" value="profile" checked class="text-primary focus:ring-primary">
                        <div class="flex-1">
                            <p class="text-sm font-bold group-hover:text-primary">My Profile</p>
                            <p class="text-[10px] text-on-surface-variant">Post this to your activity feed</p>
                        </div>
                        <span class="material-symbols-outlined text-outline group-hover:text-primary">person</span>
                    </label>

                    @if($myGroups->count() > 0)
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 p-4 rounded-xl border border-outline-variant/10 hover:border-primary/50 cursor-pointer transition-all bg-surface-container-lowest group">
                                <input type="radio" name="destination" value="group" class="text-primary focus:ring-primary">
                                <div class="flex-1">
                                    <p class="text-sm font-bold group-hover:text-primary">A Group</p>
                                    <p class="text-[10px] text-on-surface-variant">Share to a group you belong to</p>
                                </div>
                                <span class="material-symbols-outlined text-outline group-hover:text-primary">groups</span>
                            </label>
                            
                            <select id="target_group_id" class="w-full bg-surface-container-low border-none rounded-xl p-3 text-sm hidden">
                                <option value="" disabled selected>Select a group...</option>
                                @foreach($myGroups as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>

                <button type="submit" class="w-full kinetic-gradient text-white py-3 rounded-xl font-bold shadow-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2 mt-8">
                    <span class="material-symbols-outlined text-sm">send</span>
                    Share Now
                </button>
            </form>
        </div>
    </div>

    <script>
        function openShareModal(id, title) {
            document.getElementById('share_id').value = id;
            document.getElementById('share_title').innerText = title;
            document.getElementById('share_modal').classList.remove('hidden');
        }

        function closeShareModal() {
            document.getElementById('share_modal').classList.add('hidden');
        }

        });

        function setCategory(cat, btn) {
            document.getElementById('selected_category').value = cat;
            document.querySelectorAll('.category-btn').forEach(b => {
                b.classList.remove('bg-primary', 'text-white', 'shadow-md', 'shadow-primary/10');
                b.classList.add('bg-surface-container-low', 'text-on-surface-variant');
            });
            btn.classList.add('bg-primary', 'text-white', 'shadow-md', 'shadow-primary/10');
            btn.classList.remove('bg-surface-container-low', 'text-on-surface-variant');
        }

        function updateAttachmentName(input) {
            const preview = document.getElementById('attachment_preview');
            const nameSpan = document.getElementById('attachment_filename');
            if (input.files && input.files[0]) {
                nameSpan.innerText = input.files[0].name;
                preview.classList.remove('hidden');
            } else {
                preview.classList.add('hidden');
            }
        }

        function clearAttachment() {
            const input = document.getElementById('post_attachment');
            input.value = '';
            document.getElementById('attachment_preview').classList.add('hidden');
        }

        document.getElementById('btn_discard_discussion')?.addEventListener('click', () => {
            document.getElementById('modal_discussion').classList.add('hidden');
        });

        document.getElementById('share_form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const id = document.getElementById('share_id').value;
            const destination = document.querySelector('input[name="destination"]:checked').value;
            const group_id = document.getElementById('target_group_id')?.value;

            if (destination === 'group' && !group_id) {
                alert('Please select a group.');
                return;
            }

            try {
                const response = await fetch(`/discussions/${id}/share`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ destination, group_id })
                });
                const data = await response.json();
                if (data.success) {
                    alert(data.message);
                    closeShareModal();
                } else {
                    alert(data.message || 'Error sharing discussion.');
                }
            } catch (error) {
                alert('An error occurred.');
            }
        });
    </script>
    <script src="{{ asset('js/modals.js') }}"></script>
    @include('partials.ai_chat')
</body>

</html>