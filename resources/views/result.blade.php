<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Quiz Results | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Space+Grotesk:wght@600;700&amp;display=swap"
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
                        "on-background": "#2c2f31",
                        "primary-dim": "#005865",
                        "outline": "#747779",
                        "on-tertiary-container": "#003064",
                        "on-secondary": "#eff2ff",
                        "on-secondary-fixed-variant": "#515c70",
                        "surface-container": "#e5e9eb",
                        "on-primary-fixed-variant": "#005561",
                        "primary-container": "#3adffa",
                        "surface-dim": "#d0d5d8",
                        "on-primary": "#daf8ff",
                        "inverse-on-surface": "#9a9d9f",
                        "surface": "#f5f7f9",
                        "primary-fixed-dim": "#1ad0eb",
                        "on-tertiary-fixed-variant": "#003874",
                        "outline-variant": "#abadaf",
                        "on-tertiary-fixed": "#001737",
                        "surface-bright": "#f5f7f9",
                        "on-surface": "#2c2f31",
                        "secondary-fixed": "#d8e3fb",
                        "secondary": "#515c70",
                        "on-primary-fixed": "#00363e",
                        "on-tertiary": "#eff2ff",
                        "surface-container-low": "#eef1f3",
                        "tertiary-dim": "#004e9d",
                        "secondary-fixed-dim": "#cad5ed",
                        "on-primary-container": "#004b56",
                        "background": "#f5f7f9",
                        "on-error": "#ffefee",
                        "surface-variant": "#d9dde0",
                        "surface-container-high": "#dfe3e6",
                        "inverse-primary": "#3adffa",
                        "error-container": "#fb5151",
                        "secondary-dim": "#455064",
                        "on-error-container": "#570008",
                        "on-secondary-fixed": "#354053",
                        "on-secondary-container": "#475266",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "error-dim": "#9f0519",
                        "tertiary-fixed": "#84b1ff",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#84b1ff",
                        "tertiary": "#005ab3",
                        "error": "#b31b25",
                        "on-surface-variant": "#595c5e",
                        "inverse-surface": "#0b0f10",
                        "surface-container-highest": "#d9dde0",
                        "primary-fixed": "#3adffa",
                        "primary": "#006573",
                        "secondary-container": "#d8e3fb",
                        "surface-tint": "#006573"
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

        .bg-kinetic-gradient {
            background: linear-gradient(135deg, #006573 0%, #3adffa 100%);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface font-body antialiased">
    <!-- TopAppBar -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
                            alt=""></a></span>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors"
                    href="{{ url('/dashboard') }}">Dashboard</a>
                <div class="relative group py-4">
                    <button
                        class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold">
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
                        <a href="{{ url('/assesement') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Assesement</a>
                        <a href="{{ url('/career') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Career</a>
                        <a href="{{ url('/certifications') }}"
                            class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Certifications</a>
                    </div>
                </div>
                <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold"
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
                    <a href="{{ url('/profile') }}">
                        <img alt="User profile avatar"
                            data-alt="Professional developer profile portrait with clean lighting and neutral studio background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9QfpggW4PCYoxv98_vXHeU9Ub5yVEJssOTWCd2qq8QX2y2KoLdoEQdL8HrRlO10bHQXGpRVyPE_D-FMLB998YaSOv7N_QAcAa8yMpq1wJPpDGf7qY8nPaZ6A2mmHFvVJC2JePX-IbespJz0cLoyOaYLYgVT0gMIVsCdIXC-9HHYjCrOIQG44l5zIXE3575lnynz3qooMCzi8GeLNjMkWiszET6TnsVI6UDJKUAXlJm9c03hNXOyHPKq9NB_lqQOcsM5QK9HhO1z7h" />
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="pt-24 pb-32 px-6 max-w-7xl mx-auto min-h-screen mt-[50px]">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Left Column: Success Hero & Score -->
            <div class="lg:col-span-7 space-y-8">
                <section
                    class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-8 md:p-12 shadow-[0px_10px_40px_rgba(0,101,115,0.06)]">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full -mr-20 -mt-20 blur-3xl">
                    </div>
                    <div class="relative z-10 flex flex-col md:flex-row items-center gap-10">
                        <!-- Score Visualization -->
                        @php
                            $percentage = ($result->score / $result->total_questions) * 100;
                            $dashOffset = 553 - (553 * $percentage / 100);
                            $userRank = $leaderboard->search(function($item) use ($result) {
                                return $item->id == $result->id;
                            }) + 1;
                        @endphp
                        <div class="relative flex items-center justify-center w-48 h-48">
                            <svg class="w-full h-full transform -rotate-90">
                                <circle class="text-surface-container-low" cx="96" cy="96" fill="transparent" r="88"
                                    stroke="currentColor" stroke-width="12"></circle>
                                <circle class="text-primary transition-all duration-1000" cx="96" cy="96"
                                    fill="transparent" r="88" stroke="currentColor" stroke-dasharray="553"
                                    stroke-dashoffset="{{ $dashOffset }}" stroke-width="12"></circle>
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <span class="font-headline text-5xl font-bold text-on-surface">{{ round($percentage) }}%</span>
                                <span class="font-label text-xs uppercase tracking-widest text-outline">Final
                                    Score</span>
                            </div>
                            <!-- Rank Badge -->
                            <div class="absolute -top-2 -right-2 w-14 h-14 rounded-full bg-white shadow-lg flex flex-col items-center justify-center border-2 
                                {{ $userRank == 1 ? 'border-yellow-400' : ($userRank == 2 ? 'border-slate-400' : ($userRank == 3 ? 'border-orange-400' : 'border-primary/20')) }}">
                                <span class="text-[10px] font-bold text-outline-variant leading-none">RANK</span>
                                <span class="text-xl font-headline font-bold text-on-surface">#{{ $userRank }}</span>
                            </div>
                        </div>
                        <div class="flex-1 text-center md:text-left">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary mb-4">
                                <span class="material-symbols-outlined text-sm" data-icon="verified"
                                    style="font-variation-settings: 'FILL' 1;">verified</span>
                                <span class="text-xs font-bold tracking-wider uppercase font-label">
                                    {{ $userRank == 1 ? 'Podium Finisher' : ($percentage >= 80 ? 'Assessment Passed' : 'Assessment Completed') }}
                                </span>
                            </div>
                            <h2 class="font-headline text-4xl font-bold leading-tight mb-4 text-on-background">
                                @if($userRank == 1)
                                    👑 Champion of this Quiz!
                                @elseif($userRank <= 3)
                                    🥉 Top 3 Performance!
                                @else
                                    {{ $percentage >= 80 ? 'Excellent work!' : 'Good effort!' }}
                                @endif
                            </h2>
                            <p class="text-on-surface-variant leading-relaxed max-w-md">
                                You've completed the <span class="font-semibold text-on-surface">{{ $result->quiz->title }}</span> assessment.
                                You are ranked <span class="font-bold text-primary">#{{ $userRank }}</span> out of <span class="font-bold text-primary">{{ $leaderboard->count() }}</span> participants.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- Action Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a href="{{ route('quizzes') }}"
                        class="flex items-center justify-center gap-3 bg-kinetic-gradient text-white py-5 px-8 rounded-xl font-headline font-bold text-lg shadow-[0px_10px_40px_rgba(0,101,115,0.15)] hover:opacity-90 transition-all active:scale-[0.98]">
                        <span class="material-symbols-outlined">refresh</span>
                        Try Another Quiz
                    </a>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center justify-center gap-3 bg-surface-container-lowest border border-outline-variant/15 text-primary py-5 px-8 rounded-xl font-headline font-bold text-lg hover:bg-surface-container-low transition-all active:scale-[0.98]">
                        <span class="material-symbols-outlined">dashboard</span>
                        Back to Dashboard
                    </a>
                </div>
            </div>
            <!-- Right Column: Leaderboard -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-surface-container-low rounded-xl p-6">
                    <h3 class="font-headline text-xl font-bold mb-6 flex items-center gap-2 text-primary">
                        <span class="material-symbols-outlined">leaderboard</span>
                        Quiz Leaderboard
                    </h3>
                    <div class="space-y-3">
                        @foreach($leaderboard as $index => $entry)
                        <div class="bg-surface-container-lowest p-4 rounded-xl flex items-center gap-4 border {{ $entry->user_id == auth()->id() ? 'border-primary shadow-md ring-1 ring-primary/20' : 'border-transparent' }}">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm
                                {{ $index == 0 ? 'bg-yellow-400 text-white shadow-sm' : '' }}
                                {{ $index == 1 ? 'bg-slate-400 text-white shadow-sm' : '' }}
                                {{ $index == 2 ? 'bg-orange-400 text-white shadow-sm' : '' }}
                                {{ $index > 2 ? 'bg-surface-container-high text-on-surface-variant' : '' }}">
                                {{ $index + 1 }}
                            </div>
                            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-sm flex-shrink-0">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($entry->user->name) }}&background=random" alt="{{ $entry->user->name }}">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-bold text-sm truncate {{ $entry->user_id == auth()->id() ? 'text-primary' : 'text-on-surface' }}">
                                    {{ $entry->user->name }}
                                    @if($entry->user_id == auth()->id())
                                        <span class="text-[10px] bg-primary/10 px-2 py-0.5 rounded-full ml-1">YOU</span>
                                    @endif
                                </p>
                                <p class="text-[10px] text-on-surface-variant">Time: {{ floor($entry->time_taken / 60) }}m {{ $entry->time_taken % 60 }}s</p>
                            </div>
                            <div class="text-right">
                                <p class="font-headline font-bold text-lg text-primary">{{ round(($entry->score / $entry->total_questions) * 100) }}%</p>
                                <p class="text-[9px] font-bold text-outline-variant uppercase tracking-tighter">{{ $entry->score }}/{{ $entry->total_questions }} Qs</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Encouragement Card -->
                <div class="bg-primary text-white p-6 rounded-2xl shadow-xl relative overflow-hidden group">
                    <div class="absolute -right-4 -bottom-4 w-32 h-32 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10">
                        <h4 class="font-headline font-bold text-xl mb-2">Want to climb higher?</h4>
                        <p class="text-white/80 text-sm mb-6 leading-relaxed">The leaderboard ranks players by accuracy first, then speed. Review your weak spots and try again!</p>
                        <a href="{{ route('single_quiz', $result->quiz_id) }}" class="inline-flex items-center gap-2 px-6 py-2 bg-white text-primary rounded-xl font-bold text-sm hover:shadow-lg transition-all active:scale-95">
                            <span class="material-symbols-outlined text-sm">play_arrow</span>
                            Retry Quiz
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-2 pb-safe md:hidden bg-[#ffffff]/80 dark:bg-slate-900/80 backdrop-blur-xl border-t border-[#abadaf]/15 shadow-[0px_-4px_20px_rgba(44,47,49,0.04)] rounded-t-2xl">
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/50 dark:text-slate-500 hover:opacity-80 active:scale-90 transition-transform"
            href="{{ url('/courses') }}">
            <span class="material-symbols-outlined" data-icon="school">school</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Learn</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-[#006573] dark:bg-[#22d3ee] text-white dark:text-slate-950 rounded-xl px-3 py-1.5 active:scale-90 transition-transform"
            href="{{ url('/quizzes') }}">
            <span class="material-symbols-outlined" data-icon="timer">timer</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Test</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/50 dark:text-slate-500 hover:opacity-80 active:scale-90 transition-transform"
            href="{{ url('/profile') }}">
            <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Stats</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#2c2f31]/50 dark:text-slate-500 hover:opacity-80 active:scale-90 transition-transform"
            href="{{ url('/profile') }}">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-['Inter'] text-[10px] font-medium tracking-wide">Profile</span>
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
</body>

</html>