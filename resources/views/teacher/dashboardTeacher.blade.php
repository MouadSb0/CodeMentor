<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DEVRAK Teacher Dashboard</title>
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
    <style>
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

<body class="flex min-h-screen bg-surface">
    <!-- SideNavBar Component -->
    <aside
        class="h-screen w-72 flex flex-col fixed left-0 top-0 bg-slate-50 dark:bg-slate-950 no-border bg-slate-100/50 dark:bg-slate-900/50 flex flex-col p-6 gap-y-2 z-40">
        <div class="mb-10 px-2">
            <h1 class="font-['Space_Grotesk'] font-bold text-xl text-cyan-700">DEVRAK</h1>
            <p class="text-xs text-slate-500 font-medium">Management Suite</p>
        </div>
        <nav class="flex-1 space-y-1">
            <!-- Courses (Active State Logic applied based on Dashboard intent) -->
            <a class="flex items-center gap-3 px-4 py-3 bg-white dark:bg-slate-900 text-cyan-600 dark:text-cyan-400 rounded-xl shadow-sm font-bold duration-300 ease-in-out"
                href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span class="font-['Inter'] font-medium text-sm">Courses</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:translate-x-1 transition-transform hover:bg-cyan-50/50 dark:hover:bg-cyan-900/20 duration-300 ease-in-out"
                href="#">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                <span class="font-['Inter'] font-medium text-sm">Students</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:translate-x-1 transition-transform hover:bg-cyan-50/50 dark:hover:bg-cyan-900/20 duration-300 ease-in-out"
                href="#">
                <span class="material-symbols-outlined" data-icon="insights">insights</span>
                <span class="font-['Inter'] font-medium text-sm">Analytics</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:translate-x-1 transition-transform hover:bg-cyan-50/50 dark:hover:bg-cyan-900/20 duration-300 ease-in-out"
                href="#">
                <span class="material-symbols-outlined"
                    data-icon="settings_input_component">settings_input_component</span>
                <span class="font-['Inter'] font-medium text-sm">System Health</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:translate-x-1 transition-transform hover:bg-cyan-50/50 dark:hover:bg-cyan-900/20 duration-300 ease-in-out"
                href="#">
                <span class="material-symbols-outlined" data-icon="manage_accounts">manage_accounts</span>
                <span class="font-['Inter'] font-medium text-sm">User Management</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:translate-x-1 transition-transform hover:bg-cyan-50/50 dark:hover:bg-cyan-900/20 duration-300 ease-in-out"
                href="#">
                <span class="material-symbols-outlined" data-icon="assessment">assessment</span>
                <span class="font-['Inter'] font-medium text-sm">Reports</span>
            </a>
        </nav>
        <div class="mt-auto pt-6 border-t border-slate-200 dark:border-slate-800 flex flex-col gap-y-1">
            <button
                class="mb-4 w-full bg-gradient-to-br from-primary to-primary-container text-white py-3 rounded-xl font-bold text-sm shadow-lg shadow-cyan-500/20 active:scale-95 transition-transform">
                New Entry
            </button>
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="text-sm">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="contact_support">contact_support</span>
                <span class="text-sm">Support</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="flex-1 ml-72 min-h-screen pb-20">
        <!-- TopNavBar Component -->
        <header
            class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl docked full-width top-0 sticky z-50 shadow-sm shadow-cyan-900/5 flex justify-between items-center px-8 h-16 w-full">
            <div class="flex items-center gap-8">
                <div class="relative flex items-center">
                    <span class="material-symbols-outlined absolute left-3 text-slate-400"
                        data-icon="search">search</span>
                    <input
                        class="pl-10 pr-4 py-1.5 bg-surface-container-low border-none rounded-full text-sm w-64 focus:ring-2 focus:ring-primary-container transition-all"
                        placeholder="Search resources..." type="text" />
                </div>
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-cyan-600 dark:text-cyan-400 border-b-2 border-cyan-600 font-semibold font-['Space_Grotesk'] text-lg"
                        href="#">Dashboard</a>
                    <a class="text-slate-500 dark:text-slate-400 hover:text-slate-900 transition-colors font-['Space_Grotesk'] text-lg"
                        href="#">Resources</a>
                    <a class="text-slate-500 dark:text-slate-400 hover:text-slate-900 transition-colors font-['Space_Grotesk'] text-lg"
                        href="#">Community</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-full transition-colors relative">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <button
                    class="p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-full transition-colors">
                    <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
                </button>
                <div class="h-8 w-8 rounded-full bg-slate-200 overflow-hidden ml-2 border border-white shadow-sm">
                    <img alt="User profile avatar" class="w-full h-full object-cover"
                        data-alt="Close-up portrait of a professional man in a dark suit with a friendly expression and blurred office background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQk_RvrA65Q-nV4r92pDRxB1gv1NNKoWKiB57ftL_L8BMUC5VI6jzpiqF3EF4wajM0D6y_kOSod_fFycN9QpaepJb0ZeK1YWITedQWTFj7j4l1gl5chNM19MQNeGmHKJ4LTVP2RM3kvVdIkb9hLSb8Fjfp4FdQrHOjJKwArw8iffMPLOXe0dWyl18aygkOVeRkuAGQawSyK5hODP3Hpoha4KdNn9etgPgo0jG68bemPejxZhFJOQJ3tQ52w8xojnED10XkzmaiYQt6" />
                </div>
            </div>
        </header>
        <section class="px-8 py-10">
            <!-- Editorial Header Section -->
            <div class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <span class="text-primary font-bold tracking-widest text-xs uppercase mb-2 block">Instructor
                        Hub</span>
                    <h2 class="text-5xl font-bold font-headline text-on-surface tracking-tight">Morning, Dr. Aris.</h2>
                    <p class="text-on-surface-variant mt-3 max-w-md text-lg leading-relaxed">Your students have
                        completed 84% of their modules this week. The engagement is peaking.</p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="bg-surface-container-lowest text-on-surface px-6 py-3 rounded-xl font-bold text-sm shadow-sm hover:bg-surface-container-high transition-colors">
                        Send Announcement
                    </button>
                    <button
                        class="bg-gradient-to-br from-primary to-primary-container text-white px-6 py-3 rounded-xl font-bold text-sm shadow-lg shadow-cyan-900/10 scale-100 hover:scale-[1.02] transition-transform">
                        Create New Course
                    </button>
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
                            1,284</p>
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
                            12</p>
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
                            A-</p>
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
                            42h</p>
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
                            <!-- Course Item 1 -->
                            <div
                                class="bg-surface-container-lowest p-6 rounded-xl flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-6">
                                    <div
                                        class="h-16 w-16 bg-primary-container/20 rounded-lg flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary text-2xl"
                                            data-icon="terminal">terminal</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-lg">Full-Stack Kinetic Web Systems</h4>
                                        <div class="flex gap-4 mt-1">
                                            <span class="text-xs text-on-surface-variant flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[14px]"
                                                    data-icon="person">person</span> 412 Students
                                            </span>
                                            <span class="text-xs text-on-surface-variant flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[14px]"
                                                    data-icon="update">update</span> Updated 2h ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right flex flex-col items-end gap-2">
                                    <div class="flex items-center gap-3">
                                        <span class="text-xs font-bold text-primary">78% Progress</span>
                                        <div class="w-32 h-1.5 bg-surface-container-high rounded-full overflow-hidden">
                                            <div class="w-[78%] h-full bg-primary"></div>
                                        </div>
                                    </div>
                                    <span
                                        class="text-[10px] uppercase tracking-wider bg-secondary-container text-on-secondary-container px-2 py-1 rounded font-bold">In-Demand</span>
                                </div>
                            </div>
                            <!-- Course Item 2 -->
                            <div
                                class="bg-surface-container-lowest p-6 rounded-xl flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-6">
                                    <div
                                        class="h-16 w-16 bg-tertiary-container/20 rounded-lg flex items-center justify-center">
                                        <span class="material-symbols-outlined text-tertiary text-2xl"
                                            data-icon="design_services">design_services</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-lg">UI Architecture: Editorial Design</h4>
                                        <div class="flex gap-4 mt-1">
                                            <span class="text-xs text-on-surface-variant flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[14px]"
                                                    data-icon="person">person</span> 285 Students
                                            </span>
                                            <span class="text-xs text-on-surface-variant flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[14px]"
                                                    data-icon="update">update</span> Updated 1d ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right flex flex-col items-end gap-2">
                                    <div class="flex items-center gap-3">
                                        <span class="text-xs font-bold text-tertiary">92% Progress</span>
                                        <div class="w-32 h-1.5 bg-surface-container-high rounded-full overflow-hidden">
                                            <div class="w-[92%] h-full bg-tertiary"></div>
                                        </div>
                                    </div>
                                    <span
                                        class="text-[10px] uppercase tracking-wider bg-primary-container text-on-primary-container px-2 py-1 rounded font-bold">Trending</span>
                                </div>
                            </div>
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
</body>

</html>
