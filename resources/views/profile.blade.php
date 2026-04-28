<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Profile | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
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
            background-color: #f5f7f9;
            color: #2c2f31;
        }

        h1,
        h2,
        h3,
        .font-headline {
            font-family: 'Space Grotesk', sans-serif;
        }

        .kinetic-gradient {
            background: linear-gradient(135deg, #006573 0%, #3adffa 100%);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] dark:bg-[#0b0f10] text-on-surface min-h-screen transition-colors duration-300">
    <!-- TopAppBar Execution -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
                            alt=""></a></span>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors text-slate-500 font-bold"
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
                        <a href="{{ route('assesements') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Assesement</a>
                        <a href="{{ route('career') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Career</a>
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

    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="flex flex-col md:flex-row gap-12">
            <!-- Main Content Canvas -->
            <section class="flex-1 space-y-12 pb-24">
                <!-- Profile Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                    <div class="space-y-2">
                        <span
                            class="text-xs font-bold uppercase tracking-widest text-primary bg-primary/10 px-3 py-1 rounded-full">Member
                            Profile</span>
                        <h2 class="text-4xl md:text-5xl font-bold font-headline tracking-tight text-on-surface">
                            {{ auth()->user()->name }}
                        </h2>
                        <p class="text-secondary max-w-md">{{ auth()->user()->specialization ?? 'Aspiring Developer' }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4" x-data="{ 
                        showShareModal: false,
                        profileUrl: window.location.href,
                        copySuccess: false,
                        shareOnLinkedIn() {
                            window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(this.profileUrl), '_blank');
                        },
                        shareOnWhatsApp() {
                            window.open('https://wa.me/?text=' + encodeURIComponent('Check out my profile on CodeMentor: ' + this.profileUrl), '_blank');
                        },
                        shareViaEmail() {
                            window.location.href = 'mailto:?subject=CodeMentor Profile&body=' + encodeURIComponent('Check out my profile on CodeMentor: ' + this.profileUrl);
                        },
                        copyToClipboard() {
                            navigator.clipboard.writeText(this.profileUrl).then(() => {
                                this.copySuccess = true;
                                setTimeout(() => this.copySuccess = false, 2000);
                            });
                        }
                    }">
                        <button
                            @click="document.getElementById('settings').click(); $nextTick(() => { document.getElementById('section_settings').scrollIntoView({ behavior: 'smooth' }) })"
                            class="px-6 py-3 bg-surface-container-high text-on-surface rounded-xl font-bold text-sm hover:bg-surface-dim transition-colors active:scale-95">Edit
                            Profile</button>
                        <button @click="showShareModal = true"
                            class="px-6 py-3 bg-primary text-on-primary rounded-xl font-bold text-sm kinetic-gradient shadow-md hover:opacity-90 transition-opacity active:scale-95">Share
                            Profile</button>

                        <!-- Share Modal -->
                        <div x-show="showShareModal" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 z-[100] flex items-center justify-center p-6 bg-black/50 backdrop-blur-sm"
                            x-cloak>
                            <div @click.away="showShareModal = false"
                                class="bg-white dark:bg-slate-900 w-full max-w-md rounded-3xl shadow-2xl overflow-hidden border border-white/20">
                                <div class="p-8">
                                    <div class="flex justify-between items-center mb-8">
                                        <h3 class="text-2xl font-headline font-bold text-on-surface">Share Profile</h3>
                                        <button @click="showShareModal = false"
                                            class="text-on-surface-variant hover:text-on-surface transition-colors">
                                            <span class="material-symbols-outlined">close</span>
                                        </button>
                                    </div>

                                    <div class="grid grid-cols-1 gap-4">
                                        <button @click="shareOnLinkedIn()"
                                            class="flex items-center gap-4 p-4 rounded-2xl bg-[#0077b5]/10 text-[#0077b5] hover:bg-[#0077b5]/20 transition-all group">
                                            <div
                                                class="w-10 h-10 rounded-full bg-[#0077b5] flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                                    <path
                                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                                </svg>
                                            </div>
                                            <span class="font-bold">Share on LinkedIn</span>
                                        </button>

                                        <button @click="shareOnWhatsApp()"
                                            class="flex items-center gap-4 p-4 rounded-2xl bg-[#25d366]/10 text-[#25d366] hover:bg-[#25d366]/20 transition-all group">
                                            <div
                                                class="w-10 h-10 rounded-full bg-[#25d366] flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                                    <path
                                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.316 1.592 5.43.001 9.85-4.417 9.854-9.848.002-5.43-4.416-9.848-9.848-9.85-2.63-.001-5.101 1.025-6.958 2.885-1.858 1.86-2.881 4.332-2.883 6.961 0 2.096.549 4.14 1.595 5.945l-1.05 3.835 3.974-1.042zm11.381-1.474c-.253-.127-1.498-.739-1.73-.823-.232-.084-.401-.127-.57.127-.169.253-.654.823-.802.993-.147.17-.295.191-.548.064-.253-.126-1.069-.394-2.036-1.257-.752-.671-1.26-1.501-1.408-1.754-.148-.253-.016-.39.111-.516.114-.114.253-.295.38-.443.127-.147.169-.253.253-.422.084-.17.042-.317-.021-.443-.064-.126-.57-1.373-.781-1.884-.206-.499-.413-.431-.57-.439-.147-.008-.317-.009-.486-.009-.169 0-.444.063-.676.317-.232.253-.887.865-.887 2.11s.908 2.445 1.035 2.614c.127.169 1.787 2.729 4.328 3.825.605.261 1.077.416 1.444.533.608.193 1.161.166 1.598.101.487-.072 1.498-.612 1.709-1.203.211-.591.211-1.1.148-1.203-.063-.103-.232-.148-.485-.275z" />
                                                </svg>
                                            </div>
                                            <span class="font-bold">Share on WhatsApp</span>
                                        </button>

                                        <button @click="shareViaEmail()"
                                            class="flex items-center gap-4 p-4 rounded-2xl bg-tertiary-container/20 text-tertiary hover:bg-tertiary-container/30 transition-all group">
                                            <div
                                                class="w-10 h-10 rounded-full bg-tertiary flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                                <span class="material-symbols-outlined">mail</span>
                                            </div>
                                            <span class="font-bold">Share via Email</span>
                                        </button>

                                        <div class="mt-4 pt-6 border-t border-outline-variant/10">
                                            <p class="text-xs font-bold uppercase tracking-widest text-outline mb-4">Or
                                                Copy Link</p>
                                            <div
                                                class="flex items-center gap-2 p-2 bg-surface-container-low rounded-xl border border-outline-variant/10">
                                                <input type="text" readonly x-model="profileUrl"
                                                    class="flex-1 bg-transparent border-none text-xs text-on-surface-variant focus:ring-0 overflow-hidden text-ellipsis">
                                                <button @click="copyToClipboard()"
                                                    class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary rounded-lg text-xs font-bold hover:opacity-90 transition-all">
                                                    <span class="material-symbols-outlined text-sm"
                                                        x-text="copySuccess ? 'check' : 'content_copy'"></span>
                                                    <span x-text="copySuccess ? 'Copied!' : 'Copy'"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Tabs -->
                <div class="flex gap-8 border-b border-outline-variant/15 overflow-x-auto pb-px">
                    <button class="pb-4 text-sm font-bold border-b-2 border-primary text-primary transition-all"
                        id="btn_certifications">Certifications</button>
                    <button class="pb-4 text-sm font-medium text-secondary hover:text-on-surface transition-all"
                        id="settings">Settings</button>
                    <button class="pb-4 text-sm font-medium text-secondary hover:text-on-surface transition-all"
                        id="preferences">Preferences</button>
                    <button class="pb-4 text-sm font-medium text-secondary hover:text-on-surface transition-all"
                        id="privicies">Privacy</button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Achievements Section -->
                    <div class="lg:col-span-3" id="section_certifications">
                        <div class="flex flex-col lg:flex-row justify-between gap-6 items-stretch">
                            <!-- User Briefing Card -->
                            <div class="w-full lg:w-1/2 bg-surface-container-low rounded-2xl p-8 space-y-6 shadow-sm border border-outline-variant/5">
                                <div class="flex items-center gap-4">
                                    <div class="w-20 h-20 rounded-full overflow-hidden ring-4 ring-white shadow-md flex-shrink-0 transition-transform hover:scale-105 duration-300">
                                        <img alt="User Avatar" class="w-full h-full object-cover"
                                            src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=4F8EF7&color=fff' }}" />
                                    </div>
                                    <div class="min-w-0">
                                        <h3 class="text-xl font-bold font-headline text-on-surface truncate">{{ auth()->user()->name }}</h3>
                                        <p class="text-sm text-secondary font-medium truncate">{{ auth()->user()->specialization ?? 'Member' }}</p>
                                    </div>
                                </div>
                                
                                <div class="space-y-6 pt-6 border-t border-outline-variant/10">
                                    <div>
                                        <p class="text-[10px] font-black uppercase tracking-[0.2em] text-outline mb-3">Last Achievement</p>
                                        @if($lastAchievement = auth()->user()->achievements()->latest()->first())
                                            <div class="flex items-center gap-3 p-3 bg-white/60 rounded-2xl border border-white shadow-sm transition-all hover:shadow-md">
                                                <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-sm">
                                                    <span class="material-symbols-outlined text-2xl {{ $lastAchievement->color }}">{{ $lastAchievement->icon }}</span>
                                                </div>
                                                <div class="min-w-0">
                                                    <p class="text-sm font-bold text-on-surface truncate">{{ $lastAchievement->name }}</p>
                                                    <p class="text-[10px] text-on-surface-variant">{{ $lastAchievement->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @else
                                            <div class="p-4 bg-white/40 rounded-xl border border-dashed border-outline-variant/30 text-center">
                                                <p class="text-xs text-on-surface-variant italic">No badges earned yet.</p>
                                            </div>
                                        @endif
                                    </div>

                                    <div>
                                        <p class="text-[10px] font-black uppercase tracking-[0.2em] text-outline mb-3">Last Certification</p>
                                        <div class="flex items-center gap-3 p-3 bg-surface-container rounded-2xl opacity-60 border border-outline-variant/10">
                                            <div class="w-12 h-12 rounded-full bg-white/50 flex items-center justify-center">
                                                <span class="material-symbols-outlined text-2xl text-slate-400">verified</span>
                                            </div>
                                            <div class="min-w-0">
                                                <p class="text-sm font-bold text-slate-400">Not Certified Yet</p>
                                                <p class="text-[10px] text-slate-400">Complete a path to earn one</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Achievements Wall -->
                            <div class="w-full lg:w-1/2 bg-surface-container-low rounded-2xl p-8 space-y-6 shadow-sm border border-outline-variant/5">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold font-headline flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">military_tech</span>
                                        Achievements Wall
                                    </h3>
                                    <span class="text-[10px] font-bold text-primary bg-primary/10 px-2 py-1 rounded-md">{{ auth()->user()->achievements->count() }} Earned</span>
                                </div>
                                
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                                    @foreach(auth()->user()->achievements as $achievement)
                                        <div class="flex flex-col items-center gap-3 group relative">
                                            <div class="w-16 h-16 rounded-full bg-white shadow-sm flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg group-hover:ring-4 group-hover:ring-primary/5">
                                                <span class="material-symbols-outlined text-3xl {{ $achievement->color }}">{{ $achievement->icon }}</span>
                                            </div>
                                            <span class="text-[10px] text-center font-bold text-on-surface uppercase tracking-tighter">{{ $achievement->name }}</span>
                                            
                                            <!-- Tooltip -->
                                            <div class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 w-40 p-3 bg-slate-900/95 backdrop-blur-md text-white text-[10px] rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none z-10 text-center shadow-xl translate-y-2 group-hover:translate-y-0">
                                                <div class="font-bold border-b border-white/10 pb-1 mb-1">{{ $achievement->name }}</div>
                                                {{ $achievement->description }}
                                                <div class="absolute top-full left-1/2 -translate-x-1/2 border-8 border-transparent border-t-slate-900/95"></div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- Locked Achievement Placeholder -->
                                    <div class="flex flex-col items-center gap-3 opacity-30 group cursor-help">
                                        <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center border-2 border-dashed border-outline-variant transition-colors group-hover:border-primary">
                                            <span class="material-symbols-outlined text-slate-400 text-2xl group-hover:text-primary">lock</span>
                                        </div>
                                        <span class="text-[10px] text-center font-bold text-secondary uppercase tracking-tighter">Locked</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings Section -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 hidden lg:col-span-3" id="section_settings">

                        <div class="md:col-span-1 bg-surface-container-low p-6 rounded-xl">
                            <div
                                class="bg-surface-container-lowest p-8 rounded-lg flex flex-col items-center gap-4 text-center">
                                <div class="relative group cursor-pointer" x-data="{ showPhotoModal: false }">
                                    <div class="w-32 h-32 rounded-full overflow-hidden ring-4 ring-primary-container relative">
                                        <img alt="Avatar" class="w-full h-full object-cover"
                                            src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=random' }}" />
                                        <!-- Hover Overlay -->
                                        <div @click="showPhotoModal = true" class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <span class="material-symbols-outlined text-white text-3xl">edit</span>
                                        </div>
                                    </div>

                                    <!-- Photo Options Modal -->
                                    <div x-show="showPhotoModal" 
                                         x-data="{ 
                                            modalStep: 'main', 
                                            avatars: [
                                                { id: 1, name: 'Student 1', url: 'https://api.dicebear.com/7.x/avataaars/svg?seed=Felix' },
                                                { id: 2, name: 'Student 2', url: 'https://api.dicebear.com/7.x/avataaars/svg?seed=Aneka' },
                                                { id: 3, name: 'Teacher 1', url: 'https://api.dicebear.com/7.x/avataaars/svg?seed=Caleb' },
                                                { id: 4, name: 'Teacher 2', url: 'https://api.dicebear.com/7.x/avataaars/svg?seed=Eden' },
                                                { id: 5, name: 'AI Bot', url: 'https://api.dicebear.com/7.x/bottts/svg?seed=Robot' },
                                                { id: 6, name: 'Expert', url: 'https://api.dicebear.com/7.x/avataaars/svg?seed=Jasper' }
                                            ]
                                         }"
                                         x-transition:enter="transition ease-out duration-300"
                                         x-transition:enter-start="opacity-0"
                                         x-transition:enter-end="opacity-100"
                                         x-transition:leave="transition ease-in duration-200"
                                         x-transition:leave-start="opacity-100"
                                         x-transition:leave-end="opacity-0"
                                         class="fixed inset-0 z-[100] flex items-center justify-center p-6 bg-black/60 backdrop-blur-sm"
                                         x-cloak>
                                        <div @click.away="showPhotoModal = false" 
                                             class="bg-white dark:bg-slate-900 w-full max-w-sm rounded-3xl shadow-2xl overflow-hidden border border-white/20">
                                            <div class="p-6">
                                                <div class="flex justify-between items-center mb-6">
                                                    <div class="flex items-center gap-2">
                                                        <button x-show="modalStep !== 'main'" @click="modalStep = 'main'" class="material-symbols-outlined text-on-surface-variant hover:text-on-surface transition-colors">arrow_back</button>
                                                        <h3 class="text-xl font-headline font-bold text-on-surface" x-text="modalStep === 'main' ? 'Update Photo' : 'Select Avatar'"></h3>
                                                    </div>
                                                    <button @click="showPhotoModal = false; modalStep = 'main'" class="text-on-surface-variant hover:text-on-surface transition-colors">
                                                        <span class="material-symbols-outlined">close</span>
                                                    </button>
                                                </div>
                                                
                                                <!-- Main Options -->
                                                <div x-show="modalStep === 'main'" class="space-y-3">
                                                    <!-- Device Upload Form -->
                                                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="file" name="photo_file" id="photo_device" class="hidden" accept="image/*" @change="$el.form.submit()">
                                                        <button type="button" @click="document.getElementById('photo_device').click()" class="w-full flex items-center gap-4 p-4 rounded-2xl hover:bg-surface-container-low transition-all group">
                                                            <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all">
                                                                <span class="material-symbols-outlined">upload_file</span>
                                                            </div>
                                                            <div class="text-left">
                                                                <p class="font-bold text-sm">Choose from device</p>
                                                                <p class="text-[10px] text-on-surface-variant">Upload from your computer</p>
                                                            </div>
                                                        </button>
                                                    </form>

                                                    <button @click="window.open('https://drive.google.com', '_blank')" class="w-full flex items-center gap-4 p-4 rounded-2xl hover:bg-surface-container-low transition-all group">
                                                        <div class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-all">
                                                            <span class="material-symbols-outlined">add_to_drive</span>
                                                        </div>
                                                        <div class="text-left">
                                                            <p class="font-bold text-sm">Google Drive</p>
                                                            <p class="text-[10px] text-on-surface-variant">Import from your cloud</p>
                                                        </div>
                                                    </button>

                                                    <button @click="modalStep = 'avatars'" class="w-full flex items-center gap-4 p-4 rounded-2xl hover:bg-surface-container-low transition-all group">
                                                        <div class="w-10 h-10 rounded-full bg-tertiary-container text-on-tertiary-container flex items-center justify-center group-hover:bg-tertiary group-hover:text-white transition-all">
                                                            <span class="material-symbols-outlined">face</span>
                                                        </div>
                                                        <div class="text-left">
                                                            <p class="font-bold text-sm">Avatars</p>
                                                            <p class="text-[10px] text-on-surface-variant">Choose from library</p>
                                                        </div>
                                                    </button>
                                                </div>

                                                <!-- Avatar Selection -->
                                                <div x-show="modalStep === 'avatars'" class="grid grid-cols-3 gap-4 py-2">
                                                    <template x-for="avatar in avatars" :key="avatar.id">
                                                        <form action="{{ route('profile.update') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="photo" :value="avatar.url">
                                                            <button type="submit" 
                                                                    class="w-full group relative aspect-square rounded-2xl overflow-hidden border-2 border-transparent hover:border-primary transition-all bg-surface-container-low">
                                                                <img :src="avatar.url" :alt="avatar.name" class="w-full h-full object-cover">
                                                                <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                                                    <span class="material-symbols-outlined text-primary">check_circle</span>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-headline font-bold text-on-surface">Profile Photo</p>
                                    <p class="text-xs text-on-surface-variant mt-1">PNG, JPG up to 10MB</p>
                                </div>
                                
                                <!-- Bio Section -->
                                <form action="{{ route('profile.update') }}" method="POST" x-data="{ editingBio: false }" class="w-full mt-2">
                                    @csrf
                                    <div class="flex justify-between items-center mb-2">
                                        <label class="text-xs font-bold uppercase tracking-wider text-outline">Bio</label>
                                        <button type="button" @click="editingBio = !editingBio" class="flex items-center gap-1 text-primary hover:opacity-80 transition-all">
                                            <span class="material-symbols-outlined text-sm" x-text="editingBio ? 'close' : 'edit'"></span>
                                            <span class="text-[10px] font-bold" x-text="editingBio ? 'Cancel' : 'Edit'"></span>
                                        </button>
                                    </div>
                                    <div x-show="!editingBio" class="text-sm text-on-surface-variant text-left bg-surface-container-low p-3 rounded-xl min-h-[80px] border border-outline-variant/10">
                                        {{ auth()->user()->bio ?? 'No bio yet. Click the pen icon to share your story!' }}
                                    </div>
                                    <div x-show="editingBio" class="space-y-3">
                                        <textarea name="bio" class="w-full bg-white dark:bg-slate-800 border border-primary rounded-xl p-3 text-sm focus:ring-0 outline-none h-32 resize-none" placeholder="Write something about yourself...">{{ auth()->user()->bio }}</textarea>
                                        <button type="submit" class="w-full py-2 bg-primary text-on-primary rounded-lg font-bold text-xs hover:opacity-90 transition-all">Update Bio</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <form action="{{ route('profile.update') }}" method="POST" class="md:col-span-2 bg-surface-container-low p-6 rounded-xl space-y-6">
                            @csrf
                            @if (session('status'))
                                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
                                    x-transition.opacity
                                    class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                                    role="alert">
                                    <span class="block sm:inline">{{ session('status') }}</span>
                                </div>
                            @endif
                            <div class="bg-surface-container-lowest p-6 rounded-lg">
                                <h3 class="font-headline font-bold text-on-surface mb-6">Personal Information</h3>
                                <div class="space-y-4">
                                    <input class="w-full border p-3 rounded-xl" type="text" name="name"
                                        value="{{ auth()->user()->name }}" placeholder="Full Name" required />
                                    <input class="w-full border p-3 rounded-xl" type="email" name="email"
                                        value="{{ auth()->user()->email }}" placeholder="Email Address" required />
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <input class="w-full border p-3 rounded-xl" type="text" name="phone_number"
                                            value="{{ auth()->user()->phone_number }}" placeholder="Phone Number" />
                                        <input class="w-full border p-3 rounded-xl" type="text" name="github_account"
                                            value="{{ auth()->user()->github_account }}" placeholder="GitHub Account" />
                                    </div>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest p-6 rounded-lg">
                                <h3 class="font-headline font-bold text-on-surface mb-6">Professional Context</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-1">
                                        <label
                                            class="font-label text-xs font-semibold text-on-surface-variant px-1">SPECIALIZATION</label>
                                        <select name="specialization"
                                            class="w-full bg-surface-container-lowest border-outline-variant/15 border text-on-surface rounded-xl p-3 focus:border-primary focus:ring-0 transition-all font-body text-sm appearance-none outline-none">
                                            <option value="" {{ is_null(auth()->user()->specialization) ? 'selected' : '' }}>Select Specialization</option>
                                            <option value="Front-end Developer" {{ auth()->user()->specialization === 'Front-end Developer' ? 'selected' : '' }}>Front-end Developer</option>
                                            <option value="Back-end Developer" {{ auth()->user()->specialization === 'Back-end Developer' ? 'selected' : '' }}>Back-end Developer</option>
                                            <option value="Full-stack Developer" {{ auth()->user()->specialization === 'Full-stack Developer' ? 'selected' : '' }}>Full-stack Developer</option>
                                            <option value="Mobile Developer" {{ auth()->user()->specialization === 'Mobile Developer' ? 'selected' : '' }}>Mobile Developer</option>
                                            <option value="DevOps Engineer" {{ auth()->user()->specialization === 'DevOps Engineer' ? 'selected' : '' }}>DevOps Engineer</option>
                                            <option value="UI/UX Designer" {{ auth()->user()->specialization === 'UI/UX Designer' ? 'selected' : '' }}>UI/UX Designer</option>
                                            <option value="Data Scientist" {{ auth()->user()->specialization === 'Data Scientist' ? 'selected' : '' }}>Data Scientist</option>
                                        </select>
                                    </div>
                                    <div class="space-y-1">
                                        <label
                                            class="font-label text-xs font-semibold text-on-surface-variant px-1 uppercase">Institution/University</label>
                                        <input name="institution"
                                            class="w-full bg-surface-container-lowest border-outline-variant/15 border text-on-surface rounded-xl p-3 focus:border-primary focus:ring-0 transition-all font-body text-sm outline-none"
                                            type="text" placeholder="Enter your institution"
                                            value="{{ auth()->user()->institution }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end gap-4 pt-4">
                                <button type="submit"
                                    class="px-6 py-2.5 bg-primary text-on-primary rounded-xl font-bold">Save
                                    Changes</button>
                            </div>
                        </form>
                        <!-- Professional Info -->

                    </div>


                    <!-- Preferences Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 hidden lg:col-span-3"
                        id="section_preferences">
                        <!-- Appearance Section: Bento Large -->
                        <section
                            class="col-span-1 lg:col-span-2 bg-surface-container-lowest p-8 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)]">
                            <div class="flex items-center gap-3 mb-8">
                                <div
                                    class="w-10 h-10 rounded-lg bg-secondary-container flex items-center justify-center">
                                    <span class="material-symbols-outlined text-on-secondary-container">palette</span>
                                </div>
                                <h3 class="text-xl font-semibold font-headline">Appearance</h3>
                            </div>
                            <div class="grid grid-cols-2 gap-6" x-data="{ theme: localStorage.getItem('theme') || 'light' }">
                                <button
                                    @click="theme = 'light'; localStorage.setItem('theme', 'light'); document.documentElement.classList.remove('dark')"
                                    :class="theme === 'light' ? 'border-primary ring-offset-4 ring-primary-container/20' : 'border-transparent hover:bg-surface-container-low'"
                                    class="group relative flex flex-col items-center gap-4 p-4 rounded-xl border-2 transition-all">
                                    <div
                                        class="w-full aspect-[4/3] rounded-lg bg-surface border border-outline-variant/20 overflow-hidden relative shadow-sm">
                                        <div class="absolute inset-0 p-3 flex flex-col gap-2">
                                            <div class="h-2 w-2/3 bg-outline-variant/30 rounded-full"></div>
                                            <div class="h-2 w-full bg-outline-variant/20 rounded-full"></div>
                                            <div class="mt-auto h-6 w-full bg-white rounded shadow-sm"></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span x-show="theme === 'light'" class="material-symbols-outlined text-primary"
                                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                        <span x-show="theme !== 'light'"
                                            class="material-symbols-outlined text-on-surface-variant">light_mode</span>
                                        <span :class="theme === 'light' ? 'text-primary' : 'text-on-surface-variant'"
                                            class="font-medium">Light Mode</span>
                                    </div>
                                </button>
                                <button
                                    @click="theme = 'dark'; localStorage.setItem('theme', 'dark'); document.documentElement.classList.add('dark')"
                                    :class="theme === 'dark' ? 'border-primary ring-offset-4 ring-primary-container/20' : 'border-transparent hover:bg-surface-container-low'"
                                    class="group relative flex flex-col items-center gap-4 p-4 rounded-xl border-2 transition-all">
                                    <div
                                        class="w-full aspect-[4/3] rounded-lg bg-[#0b0f10] border border-outline-variant/20 overflow-hidden relative shadow-sm">
                                        <div class="absolute inset-0 p-3 flex flex-col gap-2">
                                            <div class="h-2 w-2/3 bg-slate-700 rounded-full"></div>
                                            <div class="h-2 w-full bg-slate-800 rounded-full"></div>
                                            <div class="mt-auto h-6 w-full bg-slate-900 rounded shadow-sm"></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span x-show="theme === 'dark'" class="material-symbols-outlined text-primary"
                                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                        <span x-show="theme !== 'dark'"
                                            class="material-symbols-outlined text-on-surface-variant">dark_mode</span>
                                        <span :class="theme === 'dark' ? 'text-primary' : 'text-on-surface-variant'"
                                            class="font-medium">Dark Mode</span>
                                    </div>
                                </button>
                            </div>
                        </section>
                        <!-- Interface Language -->
                        <section
                            class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] flex flex-col">
                            <div class="flex items-center gap-3 mb-8">
                                <div
                                    class="w-10 h-10 rounded-lg bg-tertiary-container flex items-center justify-center">
                                    <span class="material-symbols-outlined text-on-tertiary-container">language</span>
                                </div>
                                <h3 class="text-xl font-semibold font-headline">Language</h3>
                            </div>
                            <div class="flex-1 flex flex-col justify-center">
                                <label class="text-xs font-bold uppercase tracking-wider text-outline mb-3">System
                                    Language</label>
                                <div class="relative">
                                    <select
                                        class="w-full bg-surface-container-low border-none rounded-xl py-4 px-5 appearance-none focus:ring-2 focus:ring-primary cursor-pointer text-on-surface font-medium">
                                        <option value="en">English (US)</option>
                                        <option value="fr">French (Français)</option>
                                        <option value="es">Spanish (Español)</option>
                                        <option value="de">German (Deutsch)</option>
                                    </select>
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-outline">unfold_more</span>
                                </div>
                                <p class="text-xs text-on-surface-variant mt-4 leading-relaxed">System text, emails, and
                                    notifications will be sent in your preferred language.</p>
                            </div>
                        </section>
                        <!-- Learning Path: Multi-grid module -->
                        <section
                            class="col-span-1 lg:col-span-3 bg-surface-container-lowest p-10 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <div>
                                <div class="flex items-center gap-3 mb-6">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-primary-container/20 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary"
                                            data-icon="auto_awesome">auto_awesome</span>
                                    </div>
                                    <h3 class="text-xl font-semibold font-headline">Weekly Learning Goal</h3>
                                </div>
                                <div class="space-y-6">
                                    <div class="flex justify-between items-end">
                                        <span class="text-3xl font-black font-headline text-primary">12 <span
                                                class="text-sm font-medium text-on-surface-variant">hours /
                                                week</span></span>
                                        <span class="text-sm text-on-surface-variant">Optimal Growth</span>
                                    </div>
                                    <input
                                        class="w-full h-2 bg-surface-container rounded-lg appearance-none cursor-pointer accent-primary"
                                        max="40" min="1" type="range" value="12" />
                                    <div
                                        class="flex justify-between text-xs font-bold text-outline uppercase tracking-widest">
                                        <span>1h</span>
                                        <span>20h</span>
                                        <span>40h+</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-3 mb-6">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-primary-container/20 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary"
                                            data-icon="terminal">terminal</span>
                                    </div>
                                    <h3 class="text-xl font-semibold font-headline">Primary Tech Focus</h3>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <div
                                        class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-full text-sm font-semibold flex items-center gap-2">
                                        <span>TypeScript</span>
                                        <span class="material-symbols-outlined text-base" data-icon="close">close</span>
                                    </div>
                                    <div
                                        class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-full text-sm font-semibold flex items-center gap-2">
                                        <span>Next.js</span>
                                        <span class="material-symbols-outlined text-base" data-icon="close">close</span>
                                    </div>
                                    <div
                                        class="px-4 py-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-full text-sm font-semibold flex items-center gap-2">
                                        <span>Tailwind CSS</span>
                                        <span class="material-symbols-outlined text-base" data-icon="close">close</span>
                                    </div>
                                    <button
                                        class="px-4 py-2 bg-surface-container-high text-on-surface-variant rounded-full text-sm font-semibold border border-dashed border-outline-variant flex items-center gap-2 hover:bg-surface-variant transition-colors">
                                        <span class="material-symbols-outlined text-base" data-icon="add">add</span>
                                        <span>Add Focus</span>
                                    </button>
                                </div>
                            </div>
                        </section>
                        <!-- Privacy Section -->
                        <section class="col-span-1 lg:col-span-3 bg-surface-container-low p-10 rounded-xl">
                            <div class="flex items-center gap-3 mb-10">
                                <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined text-primary"
                                        data-icon="shield">shield</span>
                                </div>
                                <h3 class="text-xl font-semibold font-headline">Privacy &amp; Visibility</h3>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                <div
                                    class="flex items-start justify-between p-6 bg-surface-container-lowest rounded-xl shadow-sm">
                                    <div class="flex-1 pr-6">
                                        <h4 class="font-bold text-on-surface mb-1">Public Profile</h4>
                                        <p class="text-sm text-on-surface-variant">Allow other members to view your
                                            projects and certifications.</p>
                                    </div>
                                    <button
                                        class="relative inline-flex h-6 w-11 items-center rounded-full bg-primary transition-colors focus:outline-none">
                                        <span
                                            class="inline-block h-4 w-4 translate-x-6 transform rounded-full bg-white transition-transform"></span>
                                    </button>
                                </div>
                                <div
                                    class="flex items-start justify-between p-6 bg-surface-container-lowest rounded-xl shadow-sm">
                                    <div class="flex-1 pr-6">
                                        <h4 class="font-bold text-on-surface mb-1">Show Progress in Community</h4>
                                        <p class="text-sm text-on-surface-variant">Display your current learning
                                            milestones on the global leaderboard.</p>
                                    </div>
                                    <button
                                        class="relative inline-flex h-6 w-11 items-center rounded-full bg-outline-variant transition-colors focus:outline-none">
                                        <span
                                            class="inline-block h-4 w-4 translate-x-1 transform rounded-full bg-white transition-transform"></span>
                                    </button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- Privacy Section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 hidden lg:col-span-3" id="section_privicies">
                    <section class="bg-surface-container-low p-10 rounded-xl col-span-1 lg:col-span-3">
                        <header class="mb-12">
                            <h1 class="font-headline text-4xl font-bold text-on-surface mb-2">Privacy &amp; Security
                            </h1>
                            <p class="text-on-surface-variant max-w-2xl">Manage how your data is handled and secure your
                                Devrak account with enterprise-grade encryption controls.</p>
                        </header>
                        <!-- Bento Layout for Settings -->
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                            <!-- Section 1: Data Privacy -->
                            <section
                                class="lg:col-span-8 bg-surface-container-lowest rounded-xl p-8 shadow-[0px_4px_20px_rgba(44,47,49,0.04)]">
                                <div class="flex items-center gap-3 mb-8">
                                    <span class="material-symbols-outlined text-primary">visibility</span>
                                    <h2 class="text-xl font-headline font-semibold">Data Privacy</h2>
                                </div>
                                <div class="space-y-8">
                                    <div class="flex items-center justify-between group">
                                        <div class="max-w-md">
                                            <p class="font-semibold text-on-surface">Public Profile visibility</p>
                                            <p class="text-sm text-on-surface-variant mt-1">Allow other users to find
                                                and view your technical contributions and public repositories.</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input checked="" class="sr-only peer" type="checkbox" />
                                            <div
                                                class="w-11 h-6 bg-surface-container-high rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                            </div>
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-between group">
                                        <div class="max-w-md">
                                            <p class="font-semibold text-on-surface">Search engine indexing</p>
                                            <p class="text-sm text-on-surface-variant mt-1">Let Google, Bing, and other
                                                search engines index your profile and public project pages.</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input class="sr-only peer" type="checkbox" />
                                            <div
                                                class="w-11 h-6 bg-surface-container-high rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                            </div>
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-between group">
                                        <div class="max-w-md">
                                            <p class="font-semibold text-on-surface">Usage analytics</p>
                                            <p class="text-sm text-on-surface-variant mt-1">Share anonymized platform
                                                usage data to help us improve the Kinetic Lab experience.</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input checked="" class="sr-only peer" type="checkbox" />
                                            <div
                                                class="w-11 h-6 bg-surface-container-high rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </section>
                            <!-- Section 2: Security Side-Panel -->
                            <section
                                class="lg:col-span-4 bg-surface-container-low rounded-xl p-8 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-3 mb-8">
                                        <span class="material-symbols-outlined text-primary">verified_user</span>
                                        <h2 class="text-xl font-headline font-semibold">Security</h2>
                                    </div>
                                    <div class="space-y-4">
                                        <button
                                            class="w-full text-left p-4 bg-surface-container-lowest rounded-lg group hover:ring-2 hover:ring-primary-container transition-all">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-semibold">Change Password</p>
                                                <span
                                                    class="material-symbols-outlined text-outline-variant text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                                            </div>
                                        </button>
                                        <button
                                            class="w-full text-left p-4 bg-surface-container-lowest rounded-lg group hover:ring-2 hover:ring-primary-container transition-all">
                                            <div class="flex items-center justify-between mb-2">
                                                <p class="text-sm font-semibold">Two-Factor Auth</p>
                                                <span
                                                    class="px-2 py-0.5 bg-primary-container text-on-primary-container text-[10px] font-bold rounded-full uppercase tracking-wider">Active</span>
                                            </div>
                                            <p class="text-[10px] text-on-surface-variant">Your account is protected
                                                with TOTP authentication.</p>
                                        </button>
                                        <button
                                            class="w-full text-left p-4 bg-surface-container-lowest rounded-lg group hover:ring-2 hover:ring-primary-container transition-all">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-semibold">Manage Active Sessions</p>
                                                <span
                                                    class="material-symbols-outlined text-outline-variant text-sm">devices</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-12 pt-8 border-t border-outline-variant/15">
                                    <div class="flex items-center gap-3 text-primary-dim">
                                        <span class="material-symbols-outlined text-sm">history</span>
                                        <p class="text-[10px] font-medium uppercase tracking-widest">Last login: 2 hours
                                            ago from San Francisco, CA</p>
                                    </div>
                                </div>
                            </section>
                            <!-- Section 3: Data Management (Wide Footer Section) -->
                            <section class="lg:col-span-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div
                                    class="bg-surface-container-lowest rounded-xl p-8 border border-outline-variant/10">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <h3 class="font-headline font-semibold text-lg mb-2">Download My Data</h3>
                                            <p class="text-sm text-on-surface-variant mb-6">Get a copy of all your
                                                activity, files, and account metadata in a portable JSON format.</p>
                                            <button
                                                class="px-6 py-2.5 bg-primary text-on-primary rounded-xl font-bold text-sm flex items-center gap-2 hover:opacity-90 transition-all">
                                                <span class="material-symbols-outlined text-sm">download</span>
                                                Download Archive
                                            </button>
                                        </div>
                                        <div class="hidden md:block">
                                            <span
                                                class="material-symbols-outlined text-5xl text-surface-container-high">database</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-error-container/5 rounded-xl p-8 border border-error/10">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <h3 class="font-headline font-semibold text-lg text-error mb-2">Delete
                                                Account</h3>
                                            <p class="text-sm text-on-surface-variant mb-6">Permanently remove your
                                                account and all associated data. This action cannot be undone.</p>
                                            <button
                                                class="px-6 py-2.5 bg-error text-on-error rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-error-dim transition-all">
                                                <span class="material-symbols-outlined text-sm">delete_forever</span>
                                                Delete Account
                                            </button>
                                        </div>
                                        <div class="hidden md:block">
                                            <span
                                                class="material-symbols-outlined text-5xl text-error/20">warning</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Footer Visual Hint -->
                        <footer class="mt-16 flex justify-center opacity-30">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-1 bg-primary rounded-full"></div>
                                <div class="w-1 h-1 bg-primary rounded-full"></div>
                                <div class="w-1 h-1 bg-primary rounded-full"></div>
                            </div>
                        </footer>
                    </section>
                </div>

                <!-- Completed Certificates -->
                <div class="lg:col-span-2 space-y-6" id="section_completed_certificates">
                    <h3 class="text-xl font-bold font-headline px-2">Completed Certificates</h3>
                    <div
                        class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm flex flex-col md:flex-row gap-6 hover:shadow-lg transition-shadow">
                        <div class="w-full md:w-32 h-24 bg-surface-container rounded-lg overflow-hidden shrink-0">
                            <img alt="Cert" class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtL44jEjF2eDVydUx6kXYwwI1yz_WkNvSYlWMEdhqJFLIVnGOR7lvu1U4sArzo8klYIB_LUSBC9JGIq9PptiJx5ys14ljNjOfcVLIIHGCm0lW_Xr58_KvTWMU3WfZ7UzlzLMQS4YktHzu0N0PF3XK7BOELvE6SRaN1V_PTBsLiUWd9cGhwvwT7xFjjzK15kLzZX0Oq8FJTzI_iha9c0xUfqhrkUmKoaJZn70ogXcuSud2C28Nj4vtATCOWr1nmmv2z43f0Gz0VziRz" />
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-lg font-headline">Advanced React & Component Architecture</h4>
                            <p class="text-sm text-secondary">Completed Mar 12, 2024</p>
                            <button
                                class="mt-4 bg-surface-container-low px-4 py-2 rounded-lg text-xs font-bold hover:bg-surface-container-high transition-colors">Download
                                PDF</button>
                        </div>
                    </div>
                </div>
                <!-- Stats Module -->
                <div class="bg-surface-container-lowest rounded-3xl p-10 border border-outline-variant/10">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="text-center md:text-left">
                            <p class="text-[10px] uppercase tracking-widest font-bold text-secondary mb-2">Total Points
                            </p>
                            <p class="text-3xl font-bold font-headline">{{ number_format(auth()->user()->points) }}
                                <span class="text-sm font-medium text-primary-dim">XP</span>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-[10px] uppercase tracking-widest font-bold text-secondary mb-2">Projects
                                Completed</p>
                            <p class="text-3xl font-bold font-headline">34</p>
                        </div>
                    </div>
                </div>
        </div>


        </section>
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

    <script>
        const btnCert = document.getElementById('btn_certifications');
        const btnSettings = document.getElementById('settings');
        const btnPref = document.getElementById('preferences');
        const btnPriv = document.getElementById('privicies');

        const sectionCert = document.getElementById('section_certifications');
        const sectionSettings = document.getElementById('section_settings');
        const sectionPref = document.getElementById('section_preferences');
        const sectionPriv = document.getElementById('section_privicies');
        const sectionCompletedCert = document.getElementById('section_completed_certificates');

        const tabs = [btnCert, btnSettings, btnPref, btnPriv];
        const sections = [sectionCert, sectionSettings, sectionPref, sectionPriv];

        function hideAll() {
            sections.forEach(s => { if (s) s.classList.add('hidden') });
            if (sectionCompletedCert) sectionCompletedCert.classList.add('hidden');
            tabs.forEach(t => {
                if (t) {
                    t.classList.remove('border-b-2', 'border-primary', 'text-primary', 'font-bold');
                    t.classList.add('text-secondary', 'font-medium');
                }
            });
        }

        if (btnSettings) {
            btnSettings.addEventListener('click', () => {
                hideAll();
                btnSettings.classList.add('border-b-2', 'border-primary', 'text-primary', 'font-bold');
                btnSettings.classList.remove('text-secondary', 'font-medium');
                sectionSettings.classList.remove('hidden');
            });
        }

        if (btnCert) {
            btnCert.addEventListener('click', () => {
                hideAll();
                btnCert.classList.add('border-b-2', 'border-primary', 'text-primary', 'font-bold');
                btnCert.classList.remove('text-secondary', 'font-medium');
                sectionCert.classList.remove('hidden');
                if (sectionCompletedCert) sectionCompletedCert.classList.remove('hidden');
            });
        }

        if (btnPref) {
            btnPref.addEventListener('click', () => {
                hideAll();
                btnPref.classList.add('border-b-2', 'border-primary', 'text-primary', 'font-bold');
                btnPref.classList.remove('text-secondary', 'font-medium');
                sectionPref.classList.remove('hidden');
            });
        }

        if (btnPriv) {
            btnPriv.addEventListener('click', () => {
                hideAll();
                btnPriv.classList.add('border-b-2', 'border-primary', 'text-primary', 'font-bold');
                btnPriv.classList.remove('text-secondary', 'font-medium');
                sectionPriv.classList.remove('hidden');
            });
        }
    </script>
@include('partials.ai_chat')
</body>

</html>