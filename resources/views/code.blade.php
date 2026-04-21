<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Code Lab | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;family=Fira+Code:wght@400;500&amp;display=swap"
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
                        "label": ["Inter"],
                        "mono": ["Fira Code"]
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

        .code-syntax-keyword {
            color: #005ab3;
            font-weight: 500;
        }

        .code-syntax-string {
            color: #006573;
        }

        .code-syntax-function {
            color: #00363e;
            font-weight: 600;
        }

        .code-syntax-comment {
            color: #747779;
            font-style: italic;
        }

        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #abadaf;
            border-radius: 10px;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] font-body text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopAppBar Navigation Shell -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><img class="w-[100%]" src="{{ asset('img/logo.png') }}" alt=""></span>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors"
                    href="{{ url('dashboard') }}">Dashboard</a>
                <div class="relative group py-4">
                    <button
                        class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold">
                        Learn
                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                    </button>
                    <div
                        class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
                        <a href="{{ url('courses') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Courses</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Exercices</a>
                        <a href="{{ url('codeLab') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Playground</a>
                        <a href="{{ url('quiz') }}"
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
                        <a href="{{ url('assesement') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Assesement</a>
                        <a href="{{ url('carrer') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Career</a>
                        <a href="{{ url('certifications') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Certifications</a>
                    </div>
                </div>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ url('community') }}">Community</a>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
                    href="{{ url('contact') }}">Contact</a>

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
                    <a href="{{ url('profile') }}">
                        <img alt="User profile avatar"
                            data-alt="Professional developer profile portrait with clean lighting and neutral studio background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9QfpggW4PCYoxv98_vXHeU9Ub5yVEJssOTWCd2qq8QX2y2KoLdoEQdL8HrRlO10bHQXGpRVyPE_D-FMLB998YaSOv7N_QAcAa8yMpq1wJPpDGf7qY8nPaZ6A2mmHFvVJC2JePX-IbespJz0cLoyOaYLYgVT0gMIVsCdIXC-9HHYjCrOIQG44l5zIXE3575lnynz3qooMCzi8GeLNjMkWiszET6TnsVI6UDJKUAXlJm9c03hNXOyHPKq9NB_lqQOcsM5QK9HhO1z7h" />
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="flex h-[calc(100vh-80px)] overflow-hidden">
        <!-- Sidebar Navigation Drawer Shell -->
        <aside class="hidden lg:flex flex-col w-72 bg-[#eef1f3] h-full p-6 gap-8">
            <div class="space-y-1">
                <p class="text-[10px] uppercase tracking-widest font-bold text-outline mb-4 px-3">Main Workspace</p>
                <a class="flex items-center gap-3 px-4 py-3 bg-white text-cyan-600 shadow-sm rounded-xl font-medium transition-transform hover:translate-x-1"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="code_blocks">code_blocks</span>
                    <span>EDITOR</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-white/50 rounded-xl font-medium transition-transform hover:translate-x-1"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="translate">translate</span>
                    <span>TRANSLATOR</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-white/50 rounded-xl font-medium transition-transform hover:translate-x-1"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="pest_control">pest_control</span>
                    <span>DEBUGGER</span>
                </a>
            </div>
            <div
                class="mt-auto bg-surface-container-lowest p-5 rounded-2xl shadow-[0px_10px_40px_rgba(0,101,115,0.06)]">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-tertiary-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-tertiary-container text-sm"
                            data-icon="bolt">bolt</span>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-on-surface">Pro Status</h4>
                        <p class="text-[10px] text-outline">Level 42 Architect</p>
                    </div>
                </div>
                <div class="w-full bg-surface-container-high h-1.5 rounded-full mb-2">
                    <div class="bg-primary w-2/3 h-full rounded-full"></div>
                </div>
                <p class="text-[10px] text-center font-medium text-primary">850 / 1200 XP to Senior</p>
            </div>
        </aside>
        <!-- Main Code Canvas -->
        <section class="flex-1 flex flex-col min-w-0 bg-[#D0E3E6]">
            <!-- Toolbar / Editor Header -->
            <div class="px-6 py-3 bg-surface flex items-center justify-between border-b border-outline-variant/15">
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-error"></span>
                        <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                        <span class="w-2 h-2 rounded-full bg-primary-fixed"></span>
                    </div>
                    <div
                        class="flex items-center gap-1 bg-surface-container-lowest px-3 py-1.5 rounded-lg text-sm font-medium text-on-surface-variant">
                        <span class="material-symbols-outlined text-sm" data-icon="javascript">javascript</span>
                        <span>main.js</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <button
                        class="flex items-center gap-2 px-5 py-2 rounded-xl bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold text-sm shadow-sm active:scale-95 transition-all">
                        <span class="material-symbols-outlined text-lg" data-icon="play_arrow"
                            style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                        RUN CODE
                    </button>
                    <button
                        class="flex items-center gap-2 px-5 py-2 rounded-xl bg-secondary-container text-on-secondary-container font-bold text-sm hover:bg-secondary-fixed transition-colors active:scale-95">
                        <span class="material-symbols-outlined text-lg" data-icon="bug_report">bug_report</span>
                        DEBUG
                    </button>
                </div>
            </div>
            <!-- Code Editor Area -->
            <div
                class="flex-1 overflow-auto p-8 font-mono text-sm leading-relaxed bg-surface-container-lowest m-4 rounded-xl shadow-sm">
                <div class="flex gap-6">
                    <div class="text-outline-variant/40 text-right select-none pr-4 border-r border-outline-variant/10">
                        1<br />2<br />3<br />4<br />5<br />6<br />7<br />8<br />9<br />10<br />11<br />12<br />13<br />14
                    </div>
                    <div class="flex-1">
                        <span class="code-syntax-comment">// Kinetic Lab - Neural Architecture v4.2</span><br />
                        <span class="code-syntax-keyword">async function</span> <span
                            class="code-syntax-function">initializeCodeMentorCore</span>(config) {<br />
                        &nbsp;&nbsp;<span class="code-syntax-keyword">const</span> node = <span
                            class="code-syntax-keyword">await</span> Lab.<span
                            class="code-syntax-function">connect</span>({<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;id: <span class="code-syntax-string">"kinetic-alpha-01"</span>,<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;mode: <span class="code-syntax-string">"surgical-precision"</span><br />
                        &nbsp;&nbsp;});<br />
                        <br />
                        &nbsp;&nbsp;<span class="code-syntax-keyword">if</span> (!node.<span
                            class="code-syntax-function">isActive</span>()) {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-syntax-keyword">throw new</span> <span
                            class="code-syntax-function">Error</span>(<span class="code-syntax-string">"System offline:
                            Kinetic breach detected"</span>);<br />
                        &nbsp;&nbsp;}<br />
                        <br />
                        &nbsp;&nbsp;<span class="code-syntax-keyword">return</span> node.<span
                            class="code-syntax-function">spinUp</span>({<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;power: <span class="code-syntax-string">"max"</span>,<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;safety: <span class="code-syntax-keyword">false</span><br />
                        &nbsp;&nbsp;});<br />
                        }
                    </div>
                </div>
            </div>
            <!-- Terminal Output -->
            <div class="h-48 bg-surface-container-low mx-4 mb-4 rounded-xl p-5 flex flex-col">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-sm text-outline"
                            data-icon="terminal">terminal</span>
                        <span class="text-[10px] uppercase tracking-widest font-bold text-outline">Terminal
                            Output</span>
                    </div>
                    <button class="text-outline hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-sm" data-icon="close">close</span>
                    </button>
                </div>
                <div class="flex-1 overflow-auto font-mono text-xs text-on-surface-variant/80 space-y-1">
                    <p class="text-primary font-bold">● Running main.js...</p>
                    <p>[14:22:01] System initializing...</p>
                    <p>[14:22:02] Connected to Kinetic Lab Cloud (v4.2.1)</p>
                    <p>[14:22:03] Neural mapping complete. Safety protocols bypassed.</p>
                    <p class="text-error-dim font-medium">&gt; Warning: High energy consumption detected.</p>
                    <p class="text-tertiary">_</p>
                </div>
            </div>
        </section>
        <!-- Right Side AI Assistant Panel -->
        <aside class="hidden xl:flex flex-col w-80 bg-surface border-l border-outline-variant/10 p-6">
            <div class="flex items-center gap-3 mb-8">
                <div class="relative">
                    <div
                        class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-primary to-primary-fixed-dim flex items-center justify-center text-white shadow-lg">
                        <span class="material-symbols-outlined" data-icon="smart_toy"
                            style="font-variation-settings: 'FILL' 1;">smart_toy</span>
                    </div>
                    <span
                        class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                </div>
                <div>
                    <h3 class="font-headline font-bold text-on-surface">RAK AI</h3>
                    <p class="text-xs text-outline font-medium">Ready to optimize</p>
                </div>
            </div>
            <div class="flex-1 flex flex-col gap-4 overflow-auto">
                <div class="bg-surface-container-low p-4 rounded-2xl text-xs leading-relaxed text-on-surface-variant">
                    I've noticed your <span class="font-bold text-primary">initializeCodeMentorCore</span> function
                    lacks a retry logic. Would you like me to inject an exponential backoff wrapper?
                </div>
                <div class="grid grid-cols-1 gap-2">
                    <button
                        class="text-left p-3 rounded-xl border border-outline-variant/20 hover:bg-primary-container/20 hover:border-primary-fixed transition-all text-[11px] font-medium group">
                        <span class="text-primary group-hover:underline">Inject retry logic</span>
                        <p class="text-outline text-[10px] mt-1">Improves system resilience by 40%</p>
                    </button>
                    <button
                        class="text-left p-3 rounded-xl border border-outline-variant/20 hover:bg-primary-container/20 hover:border-primary-fixed transition-all text-[11px] font-medium group">
                        <span class="text-primary group-hover:underline">Refactor to TypeScript</span>
                        <p class="text-outline text-[10px] mt-1">Add strong typing for config object</p>
                    </button>
                </div>
                <div class="mt-auto space-y-4">
                    <div class="relative">
                        <input
                            class="w-full bg-surface-container-lowest border-none rounded-xl py-3 px-4 text-sm focus:ring-2 focus:ring-primary shadow-sm placeholder:text-outline-variant/60"
                            placeholder="Ask RAK anything..." type="text" />
                        <button class="absolute right-2 top-1.5 p-1.5 bg-primary text-on-primary rounded-lg">
                            <span class="material-symbols-outlined text-sm" data-icon="arrow_upward">arrow_upward</span>
                        </button>
                    </div>
                </div>
            </div>
        </aside>
    </main>
    <!-- Floating Action Button (Only Mobile/Contextual) -->
    <div class="md:hidden fixed bottom-24 right-6 z-50">
        <button
            class="w-14 h-14 bg-primary text-on-primary rounded-full shadow-2xl flex items-center justify-center active:scale-90 transition-transform">
            <span class="material-symbols-outlined" data-icon="add"
                style="font-variation-settings: 'wght' 600;">add</span>
        </button>
    </div>
    <!-- BottomNavBar for Mobile -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full z-50 bg-white/80 backdrop-blur-xl flex justify-around items-center px-4 pb-6 pt-3 shadow-[0_-4px_20px_rgba(0,0,0,0.03)] rounded-t-[1.5rem] border-t border-outline-variant/15">
        <a class="flex flex-col items-center justify-center bg-cyan-50 text-cyan-600 rounded-2xl px-5 py-2" href="#">
            <span class="material-symbols-outlined" data-icon="auto_stories"
                style="font-variation-settings: 'FILL' 1;">auto_stories</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Learn</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 py-2" href="#">
            <span class="material-symbols-outlined" data-icon="terminal">terminal</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Build</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 py-2" href="#">
            <span class="material-symbols-outlined" data-icon="work">work</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Jobs</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 py-2" href="#">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-['Inter'] text-[10px] uppercase tracking-widest font-bold mt-1">Profile</span>
        </a>
    </nav>
    <!-- Background Decorative Elements -->
    <div class="fixed top-0 left-0 w-full h-full pointer-events-none -z-10 overflow-hidden opacity-30">
        <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] bg-primary-container/20 blur-[120px] rounded-full">
        </div>
        <div
            class="absolute bottom-[-10%] left-[-10%] w-[30%] h-[30%] bg-tertiary-container/20 blur-[100px] rounded-full">
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
</body>

</html>