<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Quizzes | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#006573",
                        "primary-container": "#3adffa",
                        "on-surface": "#2c2f31",
                        "on-surface-variant": "#595c5e",
                        "surface-container-low": "#eef1f3",
                        "surface-container-high": "#dfe3e6",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#abadaf",
                    },
                    fontFamily: {
                        "headline": ["Space Grotesk"],
                        "body": ["Inter"],
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
        body { font-family: 'Inter', sans-serif; background-color: #f5f7f9; }
        .font-headline { font-family: 'Space Grotesk', sans-serif; }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface antialiased">
    <!-- TopAppBar -->
    <header class="w-full top-0 sticky z-50 bg-white/80 backdrop-blur-xl shadow-sm">
        <div class="flex justify-between items-center w-full px-6 py-3 max-w-screen-2xl mx-auto">
            <div class="flex items-center gap-8">
                <div class="text-xl font-bold font-headline text-slate-900">
                    <a href="{{ url('/') }}">CodeMentor</a>
                </div>
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-slate-500 hover:text-slate-900 transition-colors font-headline" href="{{ route('dashboard') }}">Dashboard</a>
                    <a class="text-cyan-600 font-semibold border-b-2 border-cyan-600 font-headline" href="{{ route('quizzes') }}">Quizzes</a>
                    <a class="text-slate-500 hover:text-slate-900 transition-colors font-headline" href="{{ route('result') }}">Results</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <div class="hidden sm:flex items-center bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant/15">
                    <span class="material-symbols-outlined text-sm text-on-surface-variant mr-2">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-sm w-64" placeholder="Search quizzes..." type="text" />
                </div>
                <img alt="User avatar" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7f5tlwBYY-BSnmFBf5tpXq42TEWa8ffrA0bDCEP9jh8fWE_iUAUxyEWSe4h5nRyYlH1qLAlKyCBaOCstTGThjKAKnnaa-ML1kJMQbLAViEnESBY0Rqt84Vp-3V_u2xg85JcbUb_4SPI-lN7Aea9JQuTFe-HceIAxRCpBlY2eizRFVggZOQjKzotBhZO-O-JNxwVeB3M9xKt5to5fAD48wIL2j35ITzN7GjkBCC440JUwNe07D30ZUeUnaRXW8Hg_TAo8sYpTVoWlt" />
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <!-- Hero Section -->
        <section class="mb-12">
            <h1 class="text-4xl md:text-6xl font-bold font-headline tracking-tight text-on-surface mb-4">
                Test Your <span class="text-primary">Knowledge</span>.
            </h1>
            <p class="text-on-surface-variant text-lg max-w-2xl">
                Choose from hundreds of interactive assessments. Master new concepts through instant feedback and curated learning paths.
            </p>
        </section>

        <!-- Categories / Filters -->
        <div class="flex flex-wrap gap-3 mb-10">
            <button class="bg-primary text-white px-6 py-2 rounded-full font-bold text-sm shadow-md">All Quizzes</button>
            <button class="bg-white text-on-surface-variant px-6 py-2 rounded-full font-bold text-sm hover:bg-surface-container-high transition-colors shadow-sm">Frontend</button>
            <button class="bg-white text-on-surface-variant px-6 py-2 rounded-full font-bold text-sm hover:bg-surface-container-high transition-colors shadow-sm">Backend</button>
            <button class="bg-white text-on-surface-variant px-6 py-2 rounded-full font-bold text-sm hover:bg-surface-container-high transition-colors shadow-sm">Science</button>
            <button class="bg-white text-on-surface-variant px-6 py-2 rounded-full font-bold text-sm hover:bg-surface-container-high transition-colors shadow-sm">Mobile</button>
        </div>

        <!-- Quiz Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($quizzes as $quiz)
            <div class="group bg-surface-container-lowest rounded-3xl p-6 border border-outline-variant/10 hover:border-primary/30 hover:shadow-2xl transition-all duration-500 flex flex-col relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-[4rem] -mr-8 -mt-8 transition-all group-hover:bg-primary/10"></div>
                
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-primary/10 text-primary rounded-2xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl">quiz</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-primary uppercase tracking-[0.2em]">{{ $quiz->course_name }}</span>
                        <h3 class="font-headline font-bold text-lg text-on-surface">{{ $quiz->title }}</h3>
                    </div>
                </div>

                <p class="text-on-surface-variant text-sm mb-8 line-clamp-2">Challenge yourself with this assessment on {{ $quiz->course_name }}.</p>
                
                <div class="mt-auto flex items-center justify-between">
                    <div class="flex items-center gap-4 text-xs font-bold text-on-surface-variant">
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">list</span> {{ is_array($quiz->questions) ? count($quiz->questions) : 0 }} Qs</span>
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">timer</span> {{ $quiz->time_limit }}m</span>
                    </div>
                    <a href="{{ route('single_quiz', $quiz->id) }}" class="w-12 h-12 bg-primary text-white rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 hover:scale-110 active:scale-95 transition-all">
                        <span class="material-symbols-outlined">play_arrow</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <!-- Footer Space -->
    <div class="h-24"></div>
</body>
</html>