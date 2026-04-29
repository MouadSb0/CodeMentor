<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact Us| CodeMentor</title>
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
                        "secondary-dim": "#455064",
                        "outline": "#747779",
                        "on-tertiary-fixed": "#001737",
                        "on-error-container": "#570008",
                        "on-primary-fixed": "#00363e",
                        "surface-bright": "#f5f7f9",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "on-primary-fixed-variant": "#005561",
                        "tertiary": "#005ab3",
                        "secondary": "#515c70",
                        "outline-variant": "#abadaf",
                        "secondary-fixed": "#d8e3fb",
                        "on-secondary": "#eff2ff",
                        "surface-dim": "#d0d5d8",
                        "surface-container": "#e5e9eb",
                        "on-background": "#2c2f31",
                        "surface-tint": "#006573",
                        "inverse-primary": "#3adffa",
                        "error-container": "#fb5151",
                        "surface-variant": "#d9dde0",
                        "inverse-surface": "#0b0f10",
                        "surface-container-high": "#dfe3e6",
                        "tertiary-fixed": "#84b1ff",
                        "on-secondary-container": "#475266",
                        "inverse-on-surface": "#9a9d9f",
                        "error-dim": "#9f0519",
                        "on-tertiary-fixed-variant": "#003874",
                        "on-surface": "#2c2f31",
                        "on-error": "#ffefee",
                        "on-secondary-fixed-variant": "#515c70",
                        "tertiary-container": "#84b1ff",
                        "primary-fixed": "#3adffa",
                        "primary-fixed-dim": "#1ad0eb",
                        "on-tertiary-container": "#003064",
                        "surface-container-lowest": "#ffffff",
                        "primary-container": "#3adffa",
                        "primary-dim": "#005865",
                        "surface-container-low": "#eef1f3",
                        "tertiary-dim": "#004e9d",
                        "primary": "#006573",
                        "on-tertiary": "#eff2ff",
                        "background": "#f5f7f9",
                        "on-primary-container": "#004b56",
                        "secondary-fixed-dim": "#cad5ed",
                        "on-secondary-fixed": "#354053",
                        "error": "#b31b25",
                        "on-primary": "#daf8ff",
                        "surface": "#f5f7f9",
                        "on-surface-variant": "#595c5e",
                        "surface-container-highest": "#d9dde0",
                        "secondary-container": "#d8e3fb"
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

<body class="bg-[#D0E3E6] text-on-surface font-body selection:bg-primary-container selection:text-on-primary-container">
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
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ route('community') }}">Community</a>
                <a class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors"
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
    <main class="max-w-7xl mx-auto px-6 py-12 md:py-24">
        <!-- Hero Section -->
        <div class="mb-16 md:mb-24">
            <h1
                class="font-headline font-bold text-5xl md:text-7xl lg:text-8xl tracking-tight text-on-surface mb-6 leading-[1.1]">
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Get</span>
                in touch
            </h1>
            <p class="font-body text-on-surface-variant text-lg md:text-xl max-w-2xl leading-relaxed">
                Connect with our specialized engineering teams to solve complex integration challenges or discuss
                strategic infrastructure partnerships.
            </p>
        </div>
        <!-- Bento Grid Contact Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Support Categories (Asymmetric Cards) -->
            <div class="lg:col-span-5 flex flex-col gap-6">
                <div
                    class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_4px_20px_rgba(44,47,49,0.04)] border border-outline-variant/15 group hover:border-primary-fixed transition-all duration-300">
                    <div class="flex items-start justify-between mb-8">
                        <div class="bg-primary-container/20 p-4 rounded-xl">
                            <span class="material-symbols-outlined text-primary text-3xl"
                                data-icon="construction">construction</span>
                        </div>
                        <span class="font-label text-xs font-semibold tracking-widest text-primary uppercase">Tier 1
                            Support</span>
                    </div>
                    <h3 class="font-headline text-2xl font-bold mb-3">Technical</h3>
                    <p class="text-on-surface-variant font-body leading-relaxed mb-6">Integration bottlenecks, API
                        documentation queries, and low-level system debugging.</p>
                    <div class="flex items-center gap-2 text-primary font-medium group-hover:gap-4 transition-all">
                        <span>Open a ticket</span>
                        <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_4px_20px_rgba(44,47,49,0.04)] border border-outline-variant/15 group hover:border-primary-fixed transition-all duration-300">
                    <div class="flex items-start justify-between mb-8">
                        <div class="bg-tertiary-container/20 p-4 rounded-xl">
                            <span class="material-symbols-outlined text-tertiary text-3xl"
                                data-icon="payments">payments</span>
                        </div>
                    </div>
                    <h3 class="font-headline text-2xl font-bold mb-3">Billing</h3>
                    <p class="text-on-surface-variant font-body leading-relaxed mb-6">Manage enterprise licensing,
                        high-volume credit allocation, and custom invoicing.</p>
                    <div class="flex items-center gap-2 text-tertiary font-medium group-hover:gap-4 transition-all">
                        <span>View accounts</span>
                        <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
                    </div>
                </div>
                <div
                    class="bg-surface-container-low p-8 rounded-xl border border-outline-variant/10 group hover:bg-surface-container transition-all">
                    <div class="flex items-start justify-between mb-8">
                        <div class="bg-on-background/5 p-4 rounded-xl">
                            <span class="material-symbols-outlined text-on-background text-3xl"
                                data-icon="handshake">handshake</span>
                        </div>
                    </div>
                    <h3 class="font-headline text-2xl font-bold mb-3 text-on-background">Partnerships</h3>
                    <p class="text-on-surface-variant font-body leading-relaxed">Strategic collaborations for node
                        providers and ecosystem developers.</p>
                </div>
            </div>
            <!-- Message Form (The Kinetic Card) -->
            <div class="lg:col-span-7">
                <div
                    class="bg-surface-container-lowest p-8 md:p-12 rounded-xl shadow-[0_10px_40px_rgba(0,101,115,0.06)] border border-outline-variant/10">
                    <form class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label
                                    class="font-label text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Full
                                    Name</label>
                                <input
                                    class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary transition-all text-on-surface placeholder:text-outline-variant"
                                    placeholder="John Doe" type="text" />
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="font-label text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Email
                                    Address</label>
                                <input
                                    class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary transition-all text-on-surface placeholder:text-outline-variant"
                                    placeholder="john@kinetic.dev" type="email" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="font-label text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Subject</label>
                            <input
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary transition-all text-on-surface placeholder:text-outline-variant"
                                placeholder="How can we help?" type="text" />
                        </div>
                        <div class="space-y-2">
                            <label
                                class="font-label text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Message</label>
                            <textarea
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary transition-all text-on-surface placeholder:text-outline-variant resize-none"
                                placeholder="Describe your project requirements..." rows="5"></textarea>
                        </div>
                        <button
                            class="kinetic-gradient text-on-primary w-full py-5 rounded-xl font-headline font-bold text-lg shadow-lg hover:shadow-cyan-200 transition-all active:scale-[0.98] duration-150 flex items-center justify-center gap-3"
                            type="submit">
                            Transmit Signal
                            <span class="material-symbols-outlined" data-icon="send">send</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Social Connections Section -->
        <section class="mt-32">
            <div
                class="flex flex-col md:flex-row items-center justify-between gap-12 bg-surface-container-low p-12 rounded-[2rem]">
                <div class="max-w-md">
                    <h2
                        class="font-headline text-4xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">
                        Other ways to connect</h2>
                    <p class="text-on-surface-variant leading-relaxed">Join our developer ecosystem on secondary
                        channels for real-time updates and community support.</p>
                </div>
                <div class="flex flex-wrap gap-4">
                    <a class="flex items-center gap-4 bg-surface-container-lowest px-8 py-6 rounded-2xl shadow-sm hover:shadow-md transition-all group border border-outline-variant/5"
                        href="#">
                        <div class="w-12 h-12 rounded-full bg-[#5865F2]/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-[#5865F2]" data-icon="forum">forum</span>
                        </div>
                        <div>
                            <p class="font-headline font-bold text-lg">Discord</p>
                            <p class="text-xs text-on-surface-variant font-medium">Community Chat</p>
                        </div>
                    </a>
                    <a class="flex items-center gap-4 bg-surface-container-lowest px-8 py-6 rounded-2xl shadow-sm hover:shadow-md transition-all group border border-outline-variant/5"
                        href="#">
                        <div class="w-12 h-12 rounded-full bg-on-background/5 flex items-center justify-center">
                            <span class="material-symbols-outlined text-on-background" data-icon="share">share</span>
                        </div>
                        <div>
                            <p class="font-headline font-bold text-lg">Twitter</p>
                            <p class="text-xs text-on-surface-variant font-medium">@CodeMentor_LABS</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Aesthetic Detail: Large Background Image/Element -->
        <div class="mt-32 relative h-[400px] w-full rounded-[3rem] overflow-hidden">
            <img class="w-full h-full object-cover"
                data-alt="high-tech clean engineering office with glass walls, neon blue accents, and modern ergonomic workstations in a soft clinical white lighting"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuApeWwIIwEc9tebKd3Wgjms3jZFYNZTyTar3NuVjNY23Kgfjuo0lETIEcBbkHcOHSQ_lNUv1BaXsdep2l23U70cqbamu1N-hI2dj-uxakizhkArAxLJKNXa5IAzk9_Qvt3hevQiNbgx090llwmtLZkQcKpzZ6zB7zwVLq267LPQxfnAlrK3hxT4g9P9EC5ZiQ_UAFuInzvGXDrEbVpOv7hWzCI62H5u_35etndsnsPdv816ZiAGNMOYVCyj2wfTx8IOPqDbQuoZKCS9" />
            <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent"></div>
            <div class="absolute bottom-12 left-12 right-12 flex flex-col md:flex-row md:items-end justify-between">
                <div>
                    <span
                        class="font-label text-xs font-bold bg-primary px-3 py-1 rounded-full text-on-primary mb-4 inline-block tracking-widest uppercase">Global
                        Operations</span>
                    <p class="font-headline text-3xl font-bold text-on-surface max-w-sm">Serving builders from 42 global
                        availability zones.</p>
                </div>
                <div class="mt-8 md:mt-0 text-right">
                    <p class="font-label text-sm text-on-surface-variant">Lab HQ / Sector 7</p>
                    <p class="font-headline font-bold text-xl">San Francisco, CA</p>
                </div>
            </div>
        </div>
    </main>
    <div class="fixed bottom-12 right-12 hidden lg:flex flex-col gap-4">
        <button
            class="w-14 h-14 rounded-full bg-surface-container-lowest text-on-surface shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all group">
            <span class="material-symbols-outlined" data-icon="support_agent">support_agent</span>
        </button>
    </div>
    <!-- BottomNavBar -->
    <footer
        class="md:hidden fixed bottom-0 left-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-around items-center px-4 pb-safe pt-2 rounded-t-2xl shadow-[0_-4px_20px_rgba(44,47,49,0.04)]">
        <a href="{{ route('courses') }}"
            class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 px-4 py-1 hover:text-cyan-500 dark:hover:text-cyan-300 active:scale-90 duration-150">
            <span class="material-symbols-outlined" data-icon="school">school</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Learn</span>
        </a>
        <a href="{{ route('contact') }}"
            class="flex flex-col items-center justify-center bg-cyan-100/50 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-xl px-4 py-1 active:scale-90 duration-150">
            <span class="material-symbols-outlined" data-icon="mail">mail</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Contact</span>
        </a>
        <a href="{{ route('profile') }}"
            class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 px-4 py-1 hover:text-cyan-500 dark:hover:text-cyan-300 active:scale-90 duration-150">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Account</span>
        </a>
    </footer>
</body>

</html>