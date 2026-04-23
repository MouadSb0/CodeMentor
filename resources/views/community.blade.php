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
                        <a href="{{ url('/courses') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Courses</a>
                        <a href="{{ url('/exercices') }}"
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
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#eef1f3] transition-colors">
                    <span class="material-symbols-outlined text-on-surface-variant"
                        data-icon="notifications">notifications</span>
                </button>
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
    <main class="max-w-7xl mx-auto px-2 py-8 flex flex-col md:flex-row gap-4">
        <!-- Left Sidebar: User Standing & Navigation -->
        <aside class="w-full md:w-72 flex flex-col gap-6">
            <!-- User Standing Card -->
            <div class="bg-surface-container-lowest rounded-xl p-6 shadow-[0px_10px_40px_rgba(0,101,115,0.06)]">
                <div class="flex items-center gap-4 mb-4">
                    <img alt="Alex Dev" class="w-12 h-12 rounded-full"
                        data-alt="close up avatar of a young man with glasses and a friendly expression"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOOV-7xZTfYBf80Szh9QEIplVmVvpL1hI9-yOzlxEEHwRa0Px7Pn4ojpMGkTz67BqxbBPpoNRvkh-CvHt2XDCpt4RdcZRTgk0NogxhXDWTosbF9RCJXCervXEkN5hHi_3uYv9ZK1hgxtqdlIAY3t3Zx0fUQIEArLiWI7OxEWQTgcLyO1sXFfkVZsE5MK-NDykwcn7j9ejw-BrTiwI8fhvjAH34m0SMNxK4uBkXymhB4wzUPoHqamQV4Qtc8HPuu3EJ3rxel__J1OnO" />
                    <div>
                        <p class="font-headline font-semibold text-on-surface">Alex Dev</p>
                        <p class="text-xs font-medium text-primary">Pro Member</p>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-on-surface-variant">Level 42</span>
                        <span class="font-bold text-on-surface">12,450 XP</span>
                    </div>
                    <div class="w-full bg-surface-container-low h-2 rounded-full overflow-hidden">
                        <div class="bg-primary h-full w-[72%]"></div>
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
            <!-- Navigation Drawer (Desktop Shell Implementation) -->
            <nav class="hidden md:flex flex-col bg-surface-container-low rounded-xl p-4 space-y-2">
                <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:translate-x-1 transition-transform font-['Inter'] text-sm font-medium"
                    href="{{ url('/courses') }}">
                    <span class="material-symbols-outlined">school</span> Courses
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:translate-x-1 transition-transform font-['Inter'] text-sm font-medium"
                    href="{{ url('/playground') }}">
                    <span class="material-symbols-outlined">code_blocks</span> Playground
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:translate-x-1 transition-transform font-['Inter'] text-sm font-medium"
                    href="{{ url('/certifications') }}">
                    <span class="material-symbols-outlined">verified</span> Certifications
                </a>
                <a class="flex items-center gap-3 px-4 py-3 bg-white dark:bg-slate-800 text-cyan-600 dark:text-cyan-400 shadow-sm rounded-xl font-['Inter'] text-sm font-bold"
                    href="{{ url('/community') }}">
                    <span class="material-symbols-outlined">group</span> Community
                </a>
            </nav>
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
            <div class="grid grid-cols-1 gap-6">
                <h3 class="font-headline text-xl font-semibold text-on-surface">Trending Discussions</h3>
                <!-- Discussion Card 1 -->
                <article
                    class="bg-surface-container-lowest p-6 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] flex gap-6 hover:shadow-md transition-shadow group">
                    <div class="flex flex-col items-center gap-1 bg-surface-container-low rounded-lg p-2 h-fit">
                        <button class="text-on-surface-variant hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">expand_less</span>
                        </button>
                        <span class="font-headline font-bold text-sm">1.2k</span>
                        <button class="text-on-surface-variant hover:text-error transition-colors">
                            <span class="material-symbols-outlined">expand_more</span>
                        </button>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="bg-primary-container/20 text-on-primary-container text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Performance</span>
                            <span class="text-on-surface-variant text-[11px]">Posted by <b>@lucas_arch</b> • 4h
                                ago</span>
                        </div>
                        <h4
                            class="font-headline text-lg font-semibold text-on-surface group-hover:text-primary transition-colors">
                            Architecting for 0ms Latency: Lessons from High-Frequency Trading Systems</h4>
                        <p class="text-on-surface-variant text-sm mt-2 line-clamp-2 leading-relaxed">
                            Deep dive into kernel bypass, cache-friendly data structures, and why your garbage collector
                            might be your biggest enemy in ultra-low latency environments.
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-on-surface-variant text-xs font-medium">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">chat_bubble</span> 84 Comments
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">share</span> Share
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Discussion Card 2 -->
                <article
                    class="bg-surface-container-lowest p-6 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] flex gap-6 hover:shadow-md transition-shadow group">
                    <div class="flex flex-col items-center gap-1 bg-surface-container-low rounded-lg p-2 h-fit">
                        <button class="text-on-surface-variant hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">expand_less</span>
                        </button>
                        <span class="font-headline font-bold text-sm">856</span>
                        <button class="text-on-surface-variant hover:text-error transition-colors">
                            <span class="material-symbols-outlined">expand_more</span>
                        </button>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="bg-tertiary-container/20 text-on-tertiary-container text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Rust</span>
                            <span class="text-on-surface-variant text-[11px]">Posted by <b>@rust_ace</b> • 12h
                                ago</span>
                        </div>
                        <h4
                            class="font-headline text-lg font-semibold text-on-surface group-hover:text-primary transition-colors">
                            Why I'm replacing all our Node.js microservices with Rust/Axum</h4>
                        <p class="text-on-surface-variant text-sm mt-2 line-clamp-2 leading-relaxed">
                            The productivity gap is closing, but the memory safety and concurrency benefits are scaling
                            much better for our cloud costs...
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-on-surface-variant text-xs font-medium">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">chat_bubble</span> 142 Comments
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">share</span> Share
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Study Groups Section (Asymmetric Layout) -->
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <h3 class="font-headline text-xl font-semibold text-on-surface">Active Study Groups</h3>
                    <a class="text-primary text-xs font-bold uppercase tracking-widest hover:underline"
                        href="{{ url('/groups') }}">View All</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div
                        class="bg-primary/5 p-5 rounded-xl flex items-center justify-between group cursor-pointer hover:bg-primary/10 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="bg-white w-12 h-12 rounded-lg flex items-center justify-center shadow-sm">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">terminal</span>
                            </div>
                            <div>
                                <h5 class="font-headline font-semibold text-on-surface">Rust Fundamentals</h5>
                                <p class="text-[11px] text-on-surface-variant">12 Active Members • Next Session:
                                    Tomorrow</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-primary-fixed-dim opacity-0 group-hover:opacity-100 transition-opacity">arrow_forward</span>
                    </div>
                    <div
                        class="bg-secondary-container/10 p-5 rounded-xl flex items-center justify-between group cursor-pointer hover:bg-secondary-container/20 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="bg-white w-12 h-12 rounded-lg flex items-center justify-center shadow-sm">
                                <span class="material-symbols-outlined text-secondary"
                                    style="font-variation-settings: 'FILL' 1;">cloud</span>
                            </div>
                            <div>
                                <h5 class="font-headline font-semibold text-on-surface">Cloud Native Architectures</h5>
                                <p class="text-[11px] text-on-surface-variant">45 Active Members • Session Ongoing</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-secondary opacity-0 group-hover:opacity-100 transition-opacity">arrow_forward</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Right Sidebar: Mentors & Meta -->
        <aside class="w-full md:w-80 flex flex-col gap-8">
            <div class="bg-surface-container-low rounded-xl p-6">
                <h3 class="font-headline font-bold text-on-surface mb-6">Expert Mentors</h3>
                <div class="space-y-6">
                    <!-- Mentor 1 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img alt="Sarah Chen"
                                class="w-10 h-10 rounded-full grayscale hover:grayscale-0 transition-all cursor-pointer"
                                data-alt="close up of a professional woman with a minimalist modern aesthetic and soft rim lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB87tCeqdzU8NsVX8qJbPy5ulBgLeghlq5EXhr6pYKFCor7UozmrBsUEFdzdIVlRy-20n6c78_kcXYsG8j3mH0t18g_90XcNqR1VhYSAZX-cXfbuHBDM4_IrPvY3_IfQswhziypz_fH-5zZNEqmBRNuKdZ0bsUmj4ZT5zzevUFV3xbeF0p1kCIQjEr7dXCfJD_ZgLArmO_PvilWHcHUkMB71r25FBIJSvtp2zAKu9YgNRrrfsRdaBTBTmfOZB57UhXNJkT_J45kllOV" />
                            <div>
                                <p class="text-sm font-bold text-on-surface">Sarah Chen</p>
                                <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">Distributed
                                    Systems</p>
                            </div>
                        </div>
                        <button
                            class="text-primary text-[11px] font-bold px-3 py-1.5 bg-white rounded-lg shadow-sm hover:bg-primary hover:text-white transition-all">Connect</button>
                    </div>
                    <!-- Mentor 2 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img alt="David Miller"
                                class="w-10 h-10 rounded-full grayscale hover:grayscale-0 transition-all cursor-pointer"
                                data-alt="close up profile of a mature male engineer with short graying hair and intense focused look"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBf22V1THjmU2VLgDnPDMzvoZDiZNGJimdqZGJsJR4tqenOfkv2iHGL1MpaVnX6BvzSSI3FRr_2AKDQVbsk1B1h3gaE7HUxUPd-zYnWsO-zDRvetrsnCiX9mRP-jqWaAWISKbf9wfbVHVQDBaCsaX98kFqGqg-Sh6FZMZO9Lk95UPU0gFKVCBsnwztsqq_99vRIhM3_hUjg5KR3dErXHF_F9TBtpt_zxxJ6FNEmxbvR6FfPccdBmWMYQHsO3SPrxOvOc4ZpRVtkuZ0s" />
                            <div>
                                <p class="text-sm font-bold text-on-surface">David Miller</p>
                                <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">Security &amp;
                                    Infosec</p>
                            </div>
                        </div>
                        <button
                            class="text-primary text-[11px] font-bold px-3 py-1.5 bg-white rounded-lg shadow-sm hover:bg-primary hover:text-white transition-all">Connect</button>
                    </div>
                    <!-- Mentor 3 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img alt="Elena Rodriguez"
                                class="w-10 h-10 rounded-full grayscale hover:grayscale-0 transition-all cursor-pointer"
                                data-alt="profile shot of a creative tech woman with vibrant background and soft focus studio lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfMYz9oKnEh44MDgILAhTch5DKewJzSA16xAIikFAamyWmXOLcedUk6FScKnH4vXwtKpi25A_YVuTrStkeDRv9F9dJIUTufxH7daFVpVHZ7oJWbXH-rznBNehL1ytC19PzsTlDOYee79szOkGl1Jojg0LyYjmkzj-Vb-6rKQQsdYUbx0xH0f5OWKCKmnO4SYh7TS3VtbKMm07I7oxiPvhFafqzKPRZyNlKy9rqcoNjaVMC_cTfO2beIQuN9mW56ISLCZLSnGshS6Ti" />
                            <div>
                                <p class="text-sm font-bold text-on-surface">Elena Rodriguez</p>
                                <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">UI/UX
                                    Engineering</p>
                            </div>
                        </div>
                        <button
                            class="text-primary text-[11px] font-bold px-3 py-1.5 bg-white rounded-lg shadow-sm hover:bg-primary hover:text-white transition-all">Connect</button>
                    </div>
                </div>
            </div>
            <!-- Kinetic Card: Community Stats -->
            <div class="bg-inverse-surface text-white p-6 rounded-2xl relative overflow-hidden group">
                <div class="relative z-10">
                    <h4 class="font-headline font-bold text-xl mb-1">Global Impact</h4>
                    <p class="text-white/60 text-xs mb-4">You're part of something bigger.</p>
                    <div class="space-y-4">
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-2xl font-bold">142k+</p>
                                <p class="text-[10px] uppercase opacity-60">Contributors</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold">1.2M</p>
                                <p class="text-[10px] uppercase opacity-60">Commits</p>
                            </div>
                        </div>
                        <button
                            class="w-full bg-primary-fixed text-white py-2 rounded-lg text-sm font-bold mt-2 hover:bg-primary-fixed-dim transition-colors bg-gradient-to-r from-primary to-primary-container">Join
                            Leaderboard</button>
                    </div>
                </div>
                <!-- Abstract BG decoration -->
                <div class="absolute -right-8 -top-8 w-32 h-32 bg-primary opacity-20 blur-3xl rounded-full"></div>
            </div>
        </aside>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl border-t border-[#abadaf]/15 shadow-[0_-4px_20px_rgba(0,0,0,0.03)] rounded-t-[1.5rem]">
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90"
            href="{{ url('/courses') }}">
            <span class="material-symbols-outlined">auto_stories</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold">Learn</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90"
            href="{{ url('/playground') }}">
            <span class="material-symbols-outlined">terminal</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold">Build</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-cyan-50 dark:bg-cyan-900/30 text-cyan-600 dark:text-cyan-300 rounded-2xl px-5 py-2 transition-all active:scale-90"
            href="{{ url('/community') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">group</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold">Join</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-2 hover:text-cyan-500 transition-all active:scale-90"
            href="{{ url('/profile') }}">
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
                    <form class="space-y-6 flex-1">
                        <!-- Title Field -->
                        <div class="space-y-2">
                            <label
                                class="text-[10px] font-bold tracking-widest text-on-surface-variant uppercase ml-1">Discussion
                                Title</label>
                            <input
                                class="w-full bg-surface-container-low/50 border-none rounded-2xl p-4 text-on-surface placeholder:text-on-surface-variant/40 focus:ring-2 focus:ring-kinetic-cyan/20 focus:bg-white transition-all font-headline font-medium text-lg"
                                placeholder="What's on your mind?" type="text" />
                        </div>
                        <!-- Category Field (Horizontal Chips) -->
                        <div class="space-y-3">
                            <label
                                class="text-[10px] font-bold tracking-widest text-on-surface-variant uppercase ml-1">Select
                                Category</label>
                            <div class="flex flex-wrap gap-2.5">
                                <button
                                    class="px-5 py-2.5 rounded-xl bg-primary text-white font-semibold text-xs flex items-center gap-2 shadow-md shadow-primary/10 transition-all hover:scale-[1.02] active:scale-[0.98]"
                                    type="button">
                                    <span class="material-symbols-outlined text-[18px]">terminal</span> Technical
                                </button>
                                <button
                                    class="px-5 py-2.5 rounded-xl bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high font-semibold text-xs flex items-center gap-2 transition-all"
                                    type="button">
                                    <span class="material-symbols-outlined text-[18px]">trending_up</span> Career
                                </button>
                                <button
                                    class="px-5 py-2.5 rounded-xl bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high font-semibold text-xs flex items-center gap-2 transition-all"
                                    type="button">
                                    <span class="material-symbols-outlined text-[18px]">psychology</span> Mentorship
                                </button>
                                <button
                                    class="px-5 py-2.5 rounded-xl bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high font-semibold text-xs flex items-center gap-2 transition-all"
                                    type="button">
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
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">image</span></button>
                                    <button
                                        class="p-1.5 hover:bg-white rounded text-on-surface-variant transition-colors"
                                        type="button"><span
                                            class="material-symbols-outlined text-[20px]">code</span></button>
                                </div>
                                <textarea
                                    class="w-full bg-transparent border-none p-5 text-on-surface placeholder:text-on-surface-variant/40 focus:ring-0 resize-none font-body leading-relaxed"
                                    placeholder="Describe your topic in detail..." rows="4"></textarea>
                                <div class="flex justify-between items-center px-5 pb-3">
                                    <span class="text-[10px] text-on-surface-variant/60 font-medium">Markdown
                                        supported</span>
                                    <span class="text-[10px] text-on-surface-variant/60 font-medium">0 / 2000</span>
                                </div>
                            </div>
                        </div>
                        <!-- Action Footer -->
                        <div class="flex items-center justify-end gap-5 pt-2">
                            <button
                                class="px-6 py-3 text-on-surface-variant hover:text-on-surface font-bold text-sm transition-colors rounded-xl hover:bg-surface-container-low"
                                type="button">
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