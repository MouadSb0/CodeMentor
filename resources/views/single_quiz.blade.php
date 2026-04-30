<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Quiz Player | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap"
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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        @keyframes bounce-scale {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.15);
            }
        }

        .animate-bounce-scale {
            animation: bounce-scale 0.4s ease-in-out 3;
        }
    </style>
</head>

<body x-data="quizApp()" class="bg-[#D0E3E6] text-on-surface antialiased" x-cloak>
    <!-- TopAppBar -->
    <header class="docked full-width top-0 sticky z-50 bg-white/80 backdrop-blur-xl shadow-sm">
        <div class="flex justify-between items-center w-full px-6 py-3 max-w-screen-2xl mx-auto">
            <div class="flex items-center gap-4 text-on-surface">
                <h1 class="text-xl font-bold tracking-tight font-headline">
                    <a href="{{ url('/') }}">{{ $quiz->title }}</a>
                </h1>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2 px-4 py-2 bg-surface-container-low rounded-xl transition-all border-2"
                    :class="timeLeft <= 5 ? 'bg-red-50 border-red-200 text-red-600 animate-pulse' : 'border-transparent'">
                    <span class="material-symbols-outlined transition-colors"
                        :class="timeLeft <= 5 ? 'text-red-600' : 'text-cyan-600'">timer</span>
                    <span class="font-mono font-bold transition-colors"
                        :class="timeLeft <= 5 ? 'text-red-600' : 'text-on-surface'" x-text="timeLeft + 's'"></span>
                </div>
                <button @click="if(confirm('Are you sure you want to submit the quiz now?')) finishQuiz()"
                    class="bg-gradient-to-br from-primary to-primary-container text-white px-5 py-2 rounded-xl font-bold font-headline shadow-sm">
                    Submit Quiz
                </button>
            </div>
        </div>
    </header>

    <div class="flex h-[calc(100vh-64px)]">
        <!-- Main Content Area -->
        <main class="flex-1 overflow-y-auto p-8 lg:p-12">
            <div class="max-w-4xl mx-auto space-y-8">
                <!-- Question Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div class="space-y-1">
                        <span x-text="currentQuestion.category || '{{ $quiz->course_name }}'"
                            class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold tracking-widest uppercase"></span>
                        <h1 x-text="'Question ' + (currentIdx + 1).toString().padStart(2, '0')"
                            class="text-4xl md:text-5xl font-bold text-on-surface leading-tight font-headline"></h1>
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="flex items-center gap-2 px-4 py-2 rounded-xl text-on-surface-variant hover:bg-surface-container-high transition-colors font-medium">
                            <span class="material-symbols-outlined">flag</span>
                            Flag for Review
                        </button>
                    </div>
                </div>

                <!-- Main Question Card -->
                <div
                    class="bg-surface-container-lowest rounded-[2rem] p-8 md:p-12 shadow-xl border border-outline-variant/10">
                    <div class="space-y-12">
                        <div class="prose prose-slate max-w-none">
                            <p x-text="currentQuestion.question || currentQuestion.text"
                                class="text-xl md:text-2xl text-on-surface leading-relaxed font-medium"></p>
                        </div>

                        <!-- Image Context -->
                        <template x-if="currentQuestion.image">
                            <div
                                class="relative group rounded-2xl overflow-hidden aspect-video bg-surface-container-low max-w-lg mx-auto">
                                <img :src="currentQuestion.image"
                                    class="w-full h-full object-cover mix-blend-multiply opacity-80" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent pointer-events-none">
                                </div>
                            </div>
                        </template>

                        <!-- Options Grid (Multi-Choice & True/False) -->
                        <template x-if="currentQuestion.type === 'mc' || currentQuestion.type === 'tf'">
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 gap-4">
                                    <template x-for="(option, index) in (currentQuestion.options || ['True', 'False'])"
                                        :key="index">
                                        <button @click="selectOption(index)" :class="{
                                                'ring-4 ring-primary/30 border-primary': isSelected(index) && !answered,
                                                'bg-green-500 text-white border-green-600 shadow-lg shadow-green-200': answered && isCorrect(index),
                                                'bg-red-500 text-white border-red-600 shadow-lg shadow-red-200': answered && isSelected(index) && !isCorrect(index),
                                                'bg-surface-container-low hover:bg-white hover:shadow-md border-transparent': !answered,
                                                'animate-bounce-scale': answered && isCorrect(index) && currentQuestion.type === 'tf'
                                            }"
                                            class="group relative flex items-center p-6 text-left rounded-2xl transition-all duration-300 border-2 shadow-sm active:scale-[0.98]">
                                            <div :class="(answered && isCorrect(index)) || isSelected(index) ? 'bg-white/20 text-white' : 'bg-white text-primary'"
                                                class="w-10 h-10 rounded-lg flex items-center justify-center font-bold mr-6 transition-colors shadow-sm"
                                                x-text="String.fromCharCode(65 + index)"></div>
                                            <span class="text-lg font-medium" x-text="option"></span>
                                            <div class="ml-auto" x-show="answered && isCorrect(index)">
                                                <span class="material-symbols-outlined text-white">check_circle</span>
                                            </div>
                                        </button>
                                    </template>
                                </div>
                                <!-- Feedback for MC/TF Timeout -->
                                <div x-show="answered && timeLeft === 0 && selectedAnswer === null"
                                    class="p-6 rounded-2xl border-2 bg-red-100 border-red-200 text-red-800">
                                    <p class="font-bold text-lg mb-1">Time's Up!</p>
                                    <p class="opacity-80">You didn't select an answer in time. The correct answer was
                                        highlighted above.</p>
                                </div>
                            </div>
                        </template>

                        <!-- Text Question Input -->
                        <template x-if="currentQuestion.type === 'text'">
                            <div class="space-y-6">
                                <div class="relative">
                                    <input type="text" x-model="textAnswer" :disabled="answered" :class="{
                                            'border-green-500 bg-green-50 focus:ring-green-500': answered && isTextCorrect(),
                                            'border-red-500 bg-red-50 focus:ring-red-500': answered && !isTextCorrect(),
                                            'border-outline-variant focus:ring-primary': !answered
                                        }"
                                        class="w-full p-6 text-xl rounded-2xl bg-white border-2 focus:ring-4 outline-none transition-all shadow-inner"
                                        placeholder="Type your answer here..." @keydown.enter="submitText" />
                                    <div class="absolute right-4 top-1/2 -translate-y-1/2" x-show="answered">
                                        <span class="material-symbols-outlined text-3xl"
                                            :class="isTextCorrect() ? 'text-green-500' : 'text-red-500'"
                                            x-text="isTextCorrect() ? 'check_circle' : 'cancel'"></span>
                                    </div>
                                </div>
                                <button @click="submitText" x-show="!answered"
                                    class="w-full py-4 bg-primary text-white rounded-xl font-bold shadow-lg shadow-primary/20 hover:opacity-90 active:scale-95 transition-all">
                                    Check Answer
                                </button>
                                <div x-show="answered" class="p-6 rounded-2xl border-2"
                                    :class="isTextCorrect() ? 'bg-green-100 border-green-200 text-green-800' : 'bg-red-100 border-red-200 text-red-800'">
                                    <p class="font-bold text-lg mb-1"
                                        x-text="timeLeft === 0 && !textAnswer ? 'Time\'s Up!' : (isTextCorrect() ? 'Excellent! Correct Answer.' : 'Not quite. Try again next time!')">
                                    </p>
                                    <p class="opacity-80" x-show="!isTextCorrect()">The correct answer was: <span
                                            class="font-bold"
                                            x-text="currentQuestion.answer || currentQuestion.correct"></span></p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Interaction Bar -->
                <div class="flex items-center justify-between pt-8">
                    <button @click="currentIdx > 0 && (currentIdx--, answered=true)" :disabled="currentIdx === 0"
                        class="flex items-center gap-2 px-8 py-4 rounded-2xl text-on-surface font-bold hover:bg-white transition-all shadow-sm"
                        :class="{ 'opacity-50 cursor-not-allowed': currentIdx === 0 }">
                        <span class="material-symbols-outlined">arrow_back</span>
                        Previous
                    </button>

                    <div class="hidden md:flex items-center gap-3">
                        <template x-for="(q, index) in questions" :key="index">
                            <div :class="index === currentIdx ? 'bg-primary w-8' : 'bg-white w-3'"
                                class="h-3 rounded-full transition-all duration-500 shadow-sm"></div>
                        </template>
                    </div>

                    <button @click="nextQuestion" :disabled="!answered || submitting"
                        class="flex items-center gap-2 px-10 py-4 rounded-2xl font-bold transition-all shadow-xl active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed"
                        :class="answered && !submitting ? 'bg-primary text-white hover:bg-primary-dim' : 'bg-slate-300 text-slate-500'">
                        <template x-if="submitting">
                            <span class="material-symbols-outlined animate-spin">sync</span>
                        </template>
                        <span x-text="submitting ? 'Submitting...' : (currentIdx === questions.length - 1 ? 'View Final Results' : 'Next Question')"></span>
                        <span x-show="!submitting" class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
            </div>
        </main>
    </div>

    <div x-show="showCountdown"
        class="fixed inset-0 z-[100] bg-[#006573] flex items-center justify-center p-6 text-center text-white">
        <div class="max-w-2xl space-y-8 animate-in fade-in zoom-in duration-500">
            <h2 class="text-4xl md:text-5xl font-bold font-headline">{{ $quiz->title }}</h2>
            <p class="text-xl md:text-2xl opacity-90 leading-relaxed">
                {{ $quiz->description ?? 'Prepare yourself for the challenge ahead!' }}</p>
            <div class="flex flex-col items-center gap-4 pt-8">
                <div class="w-24 h-24 rounded-full border-4 border-white/30 flex items-center justify-center">
                    <span class="text-5xl font-bold font-headline" x-text="countdown"></span>
                </div>
                <p class="font-bold tracking-widest uppercase opacity-70">Quiz starts in</p>
            </div>
        </div>
    </div>

    <script>
        function quizApp() {
            return {
                currentIdx: 0,
                answered: false,
                selectedAnswer: null,
                textAnswer: '',
                score: 0,
                startTime: null,
                timeLeft: 0,
                timerInterval: null,
                questions: @json($quiz->questions ?? []),
                showCountdown: true,
                countdown: 5,
                init() {
                    let timer = setInterval(() => {
                        if (this.countdown > 1) {
                            this.countdown--;
                        } else {
                            clearInterval(timer);
                            this.showCountdown = false;
                            this.startTime = Date.now();
                            this.startTimer();
                        }
                    }, 1000);
                },
                startTimer() {
                    if (this.timerInterval) clearInterval(this.timerInterval);

                    const durations = {
                        'mc': 15,
                        'tf': 10,
                        'text': 60
                    };

                    this.timeLeft = durations[this.currentQuestion.type] || 15;

                    this.timerInterval = setInterval(() => {
                        if (this.answered) {
                            clearInterval(this.timerInterval);
                            return;
                        }

                        if (this.timeLeft > 0) {
                            this.timeLeft--;
                        } else {
                            clearInterval(this.timerInterval);
                            this.timeUp();
                        }
                    }, 1000);
                },
                timeUp() {
                    if (this.answered) return;
                    this.answered = true;
                    // Auto-fail the question
                },
                get currentQuestion() {
                    return this.questions[this.currentIdx];
                },
                selectOption(idx) {
                    if (this.answered) return;
                    this.selectedAnswer = idx;
                    this.answered = true;
                    if (this.isCorrect(idx)) this.score++;
                },
                submitText() {
                    if (this.answered || !this.textAnswer) return;
                    this.answered = true;
                    if (this.isTextCorrect()) this.score++;
                },
                isTextCorrect() {
                    if (!this.textAnswer) return false;
                    const correctVal = (this.currentQuestion.answer || this.currentQuestion.correct).toString();
                    return this.textAnswer.toLowerCase().trim() === correctVal.toLowerCase().trim();
                },
                submitting: false,
                async finishQuiz() {
                    if (this.submitting) return;
                    this.submitting = true;

                    const timeTaken = Math.floor((Date.now() - this.startTime) / 1000);

                    try {
                        const response = await fetch("{{ route('quiz.result.store', $quiz->id) }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                score: this.score,
                                total_questions: this.questions.length,
                                time_taken: timeTaken
                            })
                        });

                        if (!response.ok) {
                            throw new Error('Server returned ' + response.status);
                        }
                        
                        const contentType = response.headers.get("content-type");
                        if (!contentType || !contentType.includes("application/json")) {
                            if (response.redirected || response.url.includes('login')) {
                                alert('Your session has expired. Please log in again.');
                                window.location.reload();
                                return;
                            }
                            throw new Error('Server returned non-JSON response. Session may have expired or unauthorized access.');
                        }

                        const data = await response.json();
                        if (data.success) {
                            window.location.href = "{{ url('result') }}/" + data.result_id;
                        } else {
                            alert('Failed to save results: ' + (data.message || 'Unknown error'));
                            this.submitting = false;
                        }
                    } catch (error) {
                        console.error('Error submitting quiz:', error);
                        alert('An error occurred while submitting your quiz. Please try again.');
                        this.submitting = false;
                    }
                },
                nextQuestion() {
                    if (this.currentIdx < this.questions.length - 1) {
                        this.currentIdx++;
                        this.answered = false;
                        this.selectedAnswer = null;
                        this.textAnswer = '';
                        this.startTimer();
                    } else {
                        this.finishQuiz();
                    }
                },
                isCorrect(idx) {
                    const correctVal = this.currentQuestion.answer !== undefined ? this.currentQuestion.answer : this.currentQuestion.correct;
                    // If it's True/False, compare the text
                    if (this.currentQuestion.type === 'tf') {
                        const options = this.currentQuestion.options || ['True', 'False'];
                        return options[idx] == correctVal;
                    }
                    return correctVal == idx;
                },
                isSelected(idx) {
                    return this.selectedAnswer === idx;
                }
            }
        }
    </script>
</body>

</html>