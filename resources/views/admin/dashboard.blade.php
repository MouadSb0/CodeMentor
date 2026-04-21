<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DEVRAK Admin Dashboard</title>
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
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- SideNavBar Shell -->
    <aside class="fixed left-0 top-0 h-full w-72 flex flex-col bg-[#eef1f3] dark:bg-slate-900 px-6 py-8 z-50">
        <div class="mb-10 px-4">
            <h1 class="text-2xl font-bold font-headline text-[#2c2f31] dark:text-white tracking-tight">DEVRAK</h1>
            <p class="text-xs font-label text-on-surface-variant/60 uppercase tracking-widest mt-1">Educational Platform
            </p>
        </div>
        <nav class="flex-grow space-y-2">
            <a class="flex items-center gap-4 px-4 py-3 text-[#2c2f31]/70 dark:text-slate-400 font-medium hover:bg-[#f5f7f9] dark:hover:bg-slate-800 transition-all rounded-xl scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">menu_book</span>
                <span class="font-headline font-semibold">Courses</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-[#2c2f31]/70 dark:text-slate-400 font-medium hover:bg-[#f5f7f9] dark:hover:bg-slate-800 transition-all rounded-xl scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">group</span>
                <span class="font-headline font-semibold">Students</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-[#006573] dark:text-[#3adffa] font-bold border-r-4 border-[#006573] bg-[#f5f7f9] dark:bg-slate-800 rounded-xl scale-95"
                href="{{ url('/admin/dashboard') }}">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-headline font-semibold">Analytics</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-[#2c2f31]/70 dark:text-slate-400 font-medium hover:bg-[#f5f7f9] dark:hover:bg-slate-800 transition-all rounded-xl scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">settings_suggest</span>
                <span class="font-headline font-semibold">System Health</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-[#2c2f31]/70 dark:text-slate-400 font-medium hover:bg-[#f5f7f9] dark:hover:bg-slate-800 transition-all rounded-xl scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">manage_accounts</span>
                <span class="font-headline font-semibold">User Management</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-[#2c2f31]/70 dark:text-slate-400 font-medium hover:bg-[#f5f7f9] dark:hover:bg-slate-800 transition-all rounded-xl scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">assessment</span>
                <span class="font-headline font-semibold">Reports</span>
            </a>
        </nav>
        <div class="mt-auto pt-8 border-t border-outline-variant/10 space-y-2">
            <button
                class="w-full py-4 px-4 rounded-2xl bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-bold mb-6 hover:opacity-90 transition-opacity">
                Upgrade Plan
            </button>
            <a class="flex items-center gap-4 px-4 py-2 text-[#2c2f31]/70 dark:text-slate-400 font-medium hover:text-[#006573] transition-colors"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-headline">Settings</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-2 text-[#2c2f31]/70 dark:text-slate-400 font-medium hover:text-error transition-colors"
                href="{{ url('/logout') }}">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-headline">Logout</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="ml-72 min-h-screen">
        <!-- TopAppBar -->
        <header
            class="w-full h-20 sticky top-0 z-40 bg-[#f5f7f9]/80 backdrop-blur-xl flex justify-between items-center px-12 shadow-[0px_4px_20px_rgba(44,47,49,0.04)]">
            <div class="flex items-center gap-8 flex-1">
                <div class="relative w-full max-w-md">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                    <input
                        class="w-full bg-surface-container-lowest border-none rounded-xl py-2.5 pl-12 pr-4 focus:ring-2 focus:ring-primary-container transition-all text-sm"
                        placeholder="Search platform analytics..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-6">
                <button
                    class="flex items-center gap-2 px-6 py-2.5 bg-primary text-on-primary rounded-xl font-headline font-semibold text-sm hover:opacity-90 transition-all">
                    <span>Create New</span>
                    <span class="material-symbols-outlined text-lg">add</span>
                </button>
                <div class="flex items-center gap-4 text-on-surface-variant">
                    <button class="p-2 hover:bg-surface-container rounded-full transition-colors relative">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
                    </button>
                    <button class="p-2 hover:bg-surface-container rounded-full transition-colors">
                        <span class="material-symbols-outlined">help_outline</span>
                    </button>
                </div>
                <div
                    class="h-10 w-10 rounded-xl overflow-hidden bg-surface-container-high border-2 border-primary-container/20">
                    <img alt="Admin profile"
                        data-alt="professional portrait of a high-tech platform administrator with a confident expression in a brightly lit studio environment"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeUM7gHj0yOa3q50wRr6Oga3gAyEcj3flw5fnH2q495nybeIjZQ4-M42gRT6EhaOa-3U3VGzroQ3Qm_PM2uHOQnyecG8zi4YTfv248kMHaQvEppGHtHhOuzIqgD6XgIwRViX3WNo9H_kidTghLSbZ-bKpjbJ4HgumTzBMhiclXubKEY__luZp1-5NUGnYbEEq9xwppVeRm6vseJ_MY0YchCSjIaE2YfDlMCgN3_hir9RGM5QCT1JZfuGmHmWnFrsebcuEV0seZ2u8o" />
                </div>
            </div>
        </header>
        <!-- Dashboard Content -->
        <div class="px-12 py-10 space-y-10">
            <!-- Page Header -->
            <div class="flex justify-between items-end">
                <div class="space-y-1">
                    <h2 class="text-4xl font-bold font-headline tracking-tighter text-on-background">Platform Analytics
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
                        <h3 class="text-4xl font-headline font-bold mt-4">$248,592.00</h3>
                    </div>
                    <div class="flex items-center gap-2 text-primary font-bold text-sm">
                        <span class="material-symbols-outlined text-sm">trending_up</span>
                        <span>+12.5% from last month</span>
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
                        <h3 class="text-4xl font-headline font-bold mt-4">1,284</h3>
                    </div>
                    <div class="w-full bg-surface-container-low h-2 rounded-full overflow-hidden">
                        <div class="bg-tertiary h-full w-3/4 rounded-full"></div>
                    </div>
                    <p class="text-xs font-medium text-on-surface-variant">75% of weekly target reached</p>
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
                        <h3 class="text-4xl font-headline font-bold mt-4">99.98%</h3>
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
                            System Health
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
                                    <tr class="hover:bg-surface-container-low/30 transition-colors group">
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center font-bold text-on-secondary-container">
                                                    JS</div>
                                                <div>
                                                    <p class="text-sm font-bold">Julian Smith</p>
                                                    <p class="text-xs text-on-surface-variant">julian.s@devrak.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-8 py-5">
                                            <span
                                                class="text-xs font-semibold px-3 py-1 bg-tertiary/10 text-tertiary rounded-lg">Instructor</span>
                                        </td>
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-2">
                                                <div class="w-2 h-2 rounded-full bg-primary"></div>
                                                <span class="text-xs font-medium">Active</span>
                                            </div>
                                        </td>
                                        <td class="px-8 py-5 text-xs text-on-surface-variant">Oct 12, 2023</td>
                                        <td class="px-8 py-5 text-right">
                                            <button
                                                class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">more_vert</button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-surface-container-low/30 transition-colors group">
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center font-bold text-on-primary-container">
                                                    EM</div>
                                                <div>
                                                    <p class="text-sm font-bold">Elena Martinez</p>
                                                    <p class="text-xs text-on-surface-variant">elena.m@devrak.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-8 py-5">
                                            <span
                                                class="text-xs font-semibold px-3 py-1 bg-secondary/10 text-secondary rounded-lg">Student</span>
                                        </td>
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-2">
                                                <div class="w-2 h-2 rounded-full bg-primary"></div>
                                                <span class="text-xs font-medium">Active</span>
                                            </div>
                                        </td>
                                        <td class="px-8 py-5 text-xs text-on-surface-variant">Nov 04, 2023</td>
                                        <td class="px-8 py-5 text-right">
                                            <button
                                                class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">more_vert</button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-surface-container-low/30 transition-colors group">
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-error-container/20 flex items-center justify-center font-bold text-error">
                                                    DK</div>
                                                <div>
                                                    <p class="text-sm font-bold">David Kross</p>
                                                    <p class="text-xs text-on-surface-variant">d.kross@devrak.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-8 py-5">
                                            <span
                                                class="text-xs font-semibold px-3 py-1 bg-secondary/10 text-secondary rounded-lg">Student</span>
                                        </td>
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-2">
                                                <div class="w-2 h-2 rounded-full bg-outline-variant"></div>
                                                <span class="text-xs font-medium">Away</span>
                                            </div>
                                        </td>
                                        <td class="px-8 py-5 text-xs text-on-surface-variant">Dec 19, 2023</td>
                                        <td class="px-8 py-5 text-right">
                                            <button
                                                class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">more_vert</button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-surface-container-low/30 transition-colors group">
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center font-bold text-on-surface">
                                                    LW</div>
                                                <div>
                                                    <p class="text-sm font-bold">Liam White</p>
                                                    <p class="text-xs text-on-surface-variant">l.white@devrak.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-8 py-5">
                                            <span
                                                class="text-xs font-semibold px-3 py-1 bg-primary/10 text-primary rounded-lg">Admin</span>
                                        </td>
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-2">
                                                <div class="w-2 h-2 rounded-full bg-primary"></div>
                                                <span class="text-xs font-medium">Active</span>
                                            </div>
                                        </td>
                                        <td class="px-8 py-5 text-xs text-on-surface-variant">Jan 02, 2024</td>
                                        <td class="px-8 py-5 text-right">
                                            <button
                                                class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">more_vert</button>
                                        </td>
                                    </tr>
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
                                <h5 class="font-headline font-bold">Avg. Response Time</h5>
                                <span class="material-symbols-outlined text-primary">schedule</span>
                            </div>
                            <div class="mt-4">
                                <span class="text-4xl font-headline font-bold text-primary">1h 24m</span>
                                <p class="text-xs font-bold text-primary mt-1 uppercase tracking-widest">Top 5% Industry
                                    Std.</p>
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
