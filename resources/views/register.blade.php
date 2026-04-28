<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Join the Ecosystem | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
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
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7f9;
            color: #2c2f31;
            min-height: max(884px, 100dvh);
        }
        .kinetic-gradient {
            background: linear-gradient(135deg, #006573 0%, #3adffa 100%);
        }
        /* Error field highlight */
        .field-error input, .field-error select, .field-error textarea {
            ring: 2px solid #b31b25;
        }
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-[#D0E3E6] selection:bg-primary-container selection:text-on-primary-container">
    <header class="bg-[#D0E3E6] dark:bg-slate-950 fixed top-0 w-full z-50">
        <div class="flex justify-between items-center w-full px-6 py-4 mx-auto max-w-7xl">
            <div class="flex items-center gap-2">
                <span class="w-[35%]"><a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="CodeMentor"></a></span>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-slate-500 text-sm font-medium">Already have an account?</span>
                <a href="{{ route('login') }}"
                    class="text-primary font-semibold hover:text-primary-dim transition-colors text-sm">Sign In</a>
            </div>
        </div>
    </header>

    <main class="min-h-screen pt-24 pb-12 px-6 flex flex-col items-center justify-center mt-[50px]">
        <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            {{-- ── Left panel ── --}}
            <section class="lg:col-span-5 space-y-8">
                <div>
                    <h1 class="text-5xl md:text-7xl font-headline font-bold text-on-surface leading-[1.1] tracking-tight">
                        @if($isFirstUser ?? false)
                            Initialize <br /><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">System</span>
                        @else
                            Join the <br /><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">ecosystem</span>
                        @endif
                    </h1>
                    <p class="mt-6 text-body-md text-on-surface-variant max-w-md leading-relaxed">
                        {{ ($isFirstUser ?? false) 
                            ? 'As the first user, you will be granted Administrative privileges to manage the entire platform.' 
                            : 'Scale your development velocity with the next generation of modular architecture. Connect, build, and deploy within the Kinetic Lab.' }}
                    </p>
                </div>
                <div class="relative overflow-hidden rounded-xl bg-surface-container-low p-8 space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">bolt</span>
                        </div>
                        <div>
                            <h3 class="font-headline font-semibold text-on-surface">Instant Provisioning</h3>
                            <p class="text-label-md text-on-surface-variant">Get your environment ready in under 60 seconds.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-tertiary-container flex items-center justify-center text-on-tertiary-container">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">hub</span>
                        </div>
                        <div>
                            <h3 class="font-headline font-semibold text-on-surface">Global Edge Network</h3>
                            <p class="text-label-md text-on-surface-variant">Deploy code closer to your users, everywhere.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ── Right panel – Form ── --}}
            <section class="lg:col-span-7">
                <div class="bg-surface-container-lowest rounded-xl p-8 md:p-12 shadow-[0_10px_40px_rgba(0,101,115,0.06)] border border-outline-variant/15">

                    {{-- Step indicator --}}
                    <div class="flex items-center gap-4 mb-10">
                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-surface-container text-on-surface-variant font-bold text-xs">1</div>
                        <div class="h-px w-8 bg-outline-variant/30"></div>
                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-primary text-on-primary font-bold text-xs">2</div>
                        <div class="h-px w-8 bg-outline-variant/30"></div>
                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-surface-container text-on-surface-variant font-bold text-xs">3</div>
                        <span class="ml-auto text-xs font-semibold uppercase tracking-widest text-primary font-label">
                            {{ ($isFirstUser ?? false) ? 'Administrative Setup' : 'Step 2: Account Details' }}
                        </span>
                    </div>

                    {{-- ── Server-side general error bag ── --}}
                    @if ($errors->any())
                        <div class="mb-6 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700 space-y-1">
                            <p class="font-semibold">Please fix the following errors:</p>
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- ── Registration Form ── --}}
                    <form
                        action="{{ route('register.submit') }}"
                        method="POST"
                        class="space-y-6"
                        x-data="{
                            showPassword: false,
                            showConfirm: false,
                            name: '{{ old('name') }}',
                            email: '{{ old('email') }}',
                            phone: '{{ old('phone_number') }}',
                            github: '{{ old('github_account') }}',
                            password: '',
                            passwordConfirm: '',
                            terms: false,
                            get passwordStrength() {
                                if (this.password.length === 0) return 0;
                                let score = 0;
                                if (this.password.length >= 8) score++;
                                if (/[A-Z]/.test(this.password)) score++;
                                if (/[0-9]/.test(this.password)) score++;
                                if (/[^A-Za-z0-9]/.test(this.password)) score++;
                                return score;
                            },
                            get strengthLabel() {
                                return ['', 'Weak', 'Fair', 'Good', 'Strong'][this.passwordStrength] || '';
                            },
                            get strengthColor() {
                                return ['', 'bg-red-400', 'bg-yellow-400', 'bg-blue-400', 'bg-green-500'][this.passwordStrength] || 'bg-gray-200';
                            }
                        }"
                        novalidate
                    >
                        @csrf
                        <input type="hidden" name="role" value="{{ old('role', $selectedRole ?? request()->get('role')) }}">

                        {{-- Name + Email --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-semibold text-on-surface-variant px-1" for="name">Full Name <span class="text-error">*</span></label>
                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    required
                                    autocomplete="name"
                                    x-model="name"
                                    value="{{ old('name') }}"
                                    placeholder="Alex Rivera"
                                    class="w-full bg-surface-container-low border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 transition-all outline-none text-on-surface placeholder:text-outline-variant {{ $errors->has('name') ? 'ring-2 ring-error/50' : '' }}" />
                                @error('name')
                                    <p class="text-xs text-error mt-1 px-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-semibold text-on-surface-variant px-1" for="email">Email Address <span class="text-error">*</span></label>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    required
                                    autocomplete="email"
                                    x-model="email"
                                    value="{{ old('email') }}"
                                    placeholder="alex@devrak.io"
                                    class="w-full bg-surface-container-low border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 transition-all outline-none text-on-surface placeholder:text-outline-variant {{ $errors->has('email') ? 'ring-2 ring-error/50' : '' }}" />
                                @error('email')
                                    <p class="text-xs text-error mt-1 px-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="space-y-2">
                            <label class="text-xs font-semibold text-on-surface-variant px-1" for="phone_number">Phone Number <span class="text-error">*</span></label>
                            <input
                                id="phone_number"
                                name="phone_number"
                                type="tel"
                                required
                                autocomplete="tel"
                                x-model="phone"
                                value="{{ old('phone_number') }}"
                                placeholder="+1 555 000 0000"
                                class="w-full bg-surface-container-low border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 transition-all outline-none text-on-surface placeholder:text-outline-variant {{ $errors->has('phone_number') ? 'ring-2 ring-error/50' : '' }}" />
                            @error('phone_number')
                                <p class="text-xs text-error mt-1 px-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- GitHub (optional) --}}
                        <div class="space-y-2">
                            <label class="text-xs font-semibold text-on-surface-variant px-1" for="github_account">
                                GitHub Account <span class="text-outline text-[10px] font-normal">(optional)</span>
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-outline-variant text-sm font-mono">github.com/</span>
                                <input
                                    id="github_account"
                                    name="github_account"
                                    type="text"
                                    autocomplete="off"
                                    x-model="github"
                                    value="{{ old('github_account') }}"
                                    placeholder="your-username"
                                    class="w-full bg-surface-container-low border-none rounded-lg p-4 pl-[104px] focus:ring-2 focus:ring-primary/20 transition-all outline-none text-on-surface placeholder:text-outline-variant {{ $errors->has('github_account') ? 'ring-2 ring-error/50' : '' }}" />
                            </div>
                            @error('github_account')
                                <p class="text-xs text-error mt-1 px-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="space-y-2">
                            <label class="text-xs font-semibold text-on-surface-variant px-1" for="password">Password <span class="text-error">*</span></label>
                            <div class="relative">
                                <input
                                    id="password"
                                    name="password"
                                    :type="showPassword ? 'text' : 'password'"
                                    required
                                    autocomplete="new-password"
                                    x-model="password"
                                    placeholder="••••••••••••"
                                    class="w-full bg-surface-container-low border-none rounded-lg p-4 pr-12 focus:ring-2 focus:ring-primary/20 transition-all outline-none text-on-surface placeholder:text-outline-variant {{ $errors->has('password') ? 'ring-2 ring-error/50' : '' }}" />
                                <button
                                    type="button"
                                    @click="showPassword = !showPassword"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-outline-variant hover:text-on-surface transition-colors">
                                    <span class="material-symbols-outlined text-xl" x-text="showPassword ? 'visibility_off' : 'visibility'">visibility</span>
                                </button>
                            </div>
                            {{-- Strength meter --}}
                            <div class="flex gap-1 mt-2" x-show="password.length > 0">
                                <template x-for="i in 4">
                                    <div class="h-1 flex-1 rounded-full transition-all duration-300"
                                         :class="i <= passwordStrength ? strengthColor : 'bg-outline-variant/30'"></div>
                                </template>
                                <span class="text-[10px] text-on-surface-variant ml-1 self-center" x-text="strengthLabel"></span>
                            </div>
                            @error('password')
                                <p class="text-xs text-error mt-1 px-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Password Confirmation --}}
                        <div class="space-y-2">
                            <label class="text-xs font-semibold text-on-surface-variant px-1" for="password_confirmation">Password Confirmation <span class="text-error">*</span></label>
                            <div class="relative">
                                <input
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    :type="showConfirm ? 'text' : 'password'"
                                    required
                                    autocomplete="new-password"
                                    x-model="passwordConfirm"
                                    placeholder="••••••••••••"
                                    class="w-full bg-surface-container-low border-none rounded-lg p-4 pr-12 focus:ring-2 focus:ring-primary/20 transition-all outline-none text-on-surface placeholder:text-outline-variant"
                                    :class="passwordConfirm.length > 0 && password !== passwordConfirm ? 'ring-2 ring-error/50' : ''" />
                                <button
                                    type="button"
                                    @click="showConfirm = !showConfirm"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-outline-variant hover:text-on-surface transition-colors">
                                    <span class="material-symbols-outlined text-xl" x-text="showConfirm ? 'visibility_off' : 'visibility'">visibility</span>
                                </button>
                            </div>
                            <p class="text-xs text-error mt-1 px-1"
                               x-show="passwordConfirm.length > 0 && password !== passwordConfirm"
                               x-cloak>Passwords do not match.</p>
                            @error('password_confirmation')
                                <p class="text-xs text-error mt-1 px-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Terms --}}
                        <div class="flex items-start gap-3 py-2">
                            <div class="flex items-center h-5">
                                <input
                                    id="terms"
                                    name="terms"
                                    type="checkbox"
                                    x-model="terms"
                                    class="w-5 h-5 rounded border-outline-variant/30 text-primary focus:ring-primary/20 bg-surface-container-low cursor-pointer" />
                            </div>
                            <label class="text-sm text-on-surface-variant leading-tight cursor-pointer" for="terms">
                                I agree to the <a class="text-primary font-medium hover:underline" href="#">Terms of Service</a>
                                and <a class="text-primary font-medium hover:underline" href="#">Privacy Policy</a> regarding data handling.
                            </label>
                        </div>
                        @error('terms')
                            <p class="text-xs text-error -mt-4 px-1">{{ $message }}</p>
                        @enderror

                        {{-- Submit --}}
                        <button
                            type="submit"
                            :disabled="passwordConfirm.length > 0 && password !== passwordConfirm"
                            class="w-full kinetic-gradient text-on-primary font-bold py-4 rounded-xl shadow-lg shadow-primary/20 active:scale-[0.98] transition-all hover:brightness-110 flex items-center justify-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span>Create Account</span>
                            <span class="material-symbols-outlined text-xl">arrow_forward</span>
                        </button>
                    </form>

                    {{-- Social sign-up --}}
                    <div class="mt-8 pt-8 border-t border-outline-variant/10 flex flex-col md:flex-row items-center justify-between gap-4">
                        <span class="text-xs font-medium text-outline">Or sign up with</span>
                        <div class="flex gap-4 w-full md:w-auto">
                            <button class="flex-1 md:flex-none flex items-center justify-center gap-2 px-6 py-2 rounded-lg bg-surface-container border border-outline-variant/10 hover:bg-surface-container-high transition-colors text-sm font-medium">
                                <img alt="Google" class="w-4 h-4"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJCd8pMytsgukfgrQH_vEAojXI8w3oR9twbPQOTQcekkr2IxsqTNO4vXPjbNJpJkyVAlIfgUjE78xfy9m44jrM48UmuA10nxgoxra-5oaoCRmvZ9zKe3gD8W_ziAG1R00R90yISdi65k-v7XHreIbDSRCuhWrdHqdSXtwsffsDS3rtPtvOOdzmWkTWjg_wsmhlJniguoK7KTICcglKOPDjZi_-xoIqEE2xK58z2_KyFX4uSEpfqAUuacVEOoVGxgWYVVriQbFNzhau" />
                                Google
                            </button>
                            <button class="flex-1 md:flex-none flex items-center justify-center gap-2 px-6 py-2 rounded-lg bg-surface-container border border-outline-variant/10 hover:bg-surface-container-high transition-colors text-sm font-medium">
                                <span class="material-symbols-outlined text-lg">code</span>
                                GitHub
                            </button>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    {{-- Floating status badge --}}
    <div class="fixed bottom-12 right-12 hidden xl:block">
        <div class="bg-surface-container-lowest/80 backdrop-blur-xl p-4 rounded-2xl shadow-xl border border-outline-variant/10 max-w-xs">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
                <span class="text-[10px] font-bold uppercase tracking-tighter text-on-surface-variant font-label">System Status</span>
            </div>
            <p class="text-[11px] text-on-surface-variant leading-normal">
                Node groups in <span class="text-primary font-bold">us-east-1</span> are operating at optimal capacity.
                Ecosystem invites are currently open.
            </p>
        </div>
    </div>

    <footer class="mt-auto py-8 text-center border-t border-outline-variant/5">
        <p class="text-label-md text-outline">© 2024 CodeMentor ARCHITECTURE SYSTEMS. ALL RIGHTS RESERVED.</p>
    </footer>
</body>

</html>