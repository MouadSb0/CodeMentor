<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sign In | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
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

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-[#D0E3E6] selection:bg-primary-container selection:text-on-primary-container">
    <header class="bg-[#D0E3E6] dark:bg-slate-950 fixed top-0 w-full z-50">
        <div class="flex justify-between items-center w-full px-6 py-4 mx-auto max-w-7xl">
            <div class="flex items-center gap-2">
                <span class="w-[35%]"><a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}"
                            alt="CodeMentor"></a></span>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-slate-500 text-sm font-medium">Do not have an account yet?</span>
                <a href="{{ route('account-type') }}"
                    class="text-primary font-semibold hover:text-primary-dim transition-colors text-sm">Sign Up</a>
            </div>
        </div>
    </header>

    <main class="min-h-screen pt-24 pb-12 px-6 flex flex-col items-center justify-center">
        <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            {{-- ── Left panel ── --}}
            <section class="lg:col-span-5 space-y-8">
                <div>
                    <h1
                        class="text-5xl md:text-7xl font-headline font-bold text-on-surface leading-[1.1] tracking-tight">
                        Welcome Back <br /><span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Genius</span>
                    </h1>
                    <p class="mt-6 text-body-md text-on-surface-variant max-w-md leading-relaxed">
                        Scale your development velocity with the next generation of modular architecture. Connect,
                        build, and deploy within the Kinetic Lab.
                    </p>
                </div>

                {{-- Feature highlights --}}
                <div class="relative overflow-hidden rounded-xl bg-surface-container-low p-8 space-y-6">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">lock</span>
                        </div>
                        <div>
                            <h3 class="font-headline font-semibold text-on-surface">Secure Access</h3>
                            <p class="text-label-md text-on-surface-variant">Enterprise-grade encryption for your data.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-tertiary-container flex items-center justify-center text-on-tertiary-container">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">verified_user</span>
                        </div>
                        <div>
                            <h3 class="font-headline font-semibold text-on-surface">Trusted Platform</h3>
                            <p class="text-label-md text-on-surface-variant">Trusted by thousands of developers
                                worldwide.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ── Right panel – Login Form ── --}}
            <section class="lg:col-span-7 mt-[100px]">
                <div
                    class="bg-surface-container-lowest rounded-xl p-8 md:p-12 shadow-[0_10px_40px_rgba(0,101,115,0.06)] border border-outline-variant/15">

                    <div class="mb-8">
                        <h2 class="text-2xl font-headline font-bold text-on-surface">Sign in to your account</h2>
                        <p class="text-sm text-on-surface-variant mt-1">Enter your credentials to continue.</p>
                    </div>

                    {{-- ── Rate-limit / credential error banner ── --}}
                    @if ($errors->any())
                        <div
                            class="mb-6 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700 flex items-start gap-3">
                            <span class="material-symbols-outlined text-red-500 mt-0.5 text-lg">error</span>
                            <div>
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Session status (e.g. "Password reset link sent") --}}
                    @if (session('status'))
                        <div
                            class="mb-6 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700 flex items-center gap-2">
                            <span class="material-symbols-outlined text-green-500 text-lg">check_circle</span>
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- ── Login Form ── --}}
                    <form action="{{ route('login.submit') }}" method="POST" class="space-y-6 " x-data="{
                            showPassword: false,
                            email: '{{ old('email') }}',
                            password: '',
                            loading: false
                        }" @submit="loading = true" novalidate>
                        @csrf

                        {{-- Email --}}
                        <div class="space-y-2">
                            <label class="text-xs font-semibold text-on-surface-variant px-1" for="email">
                                Email Address <span class="text-error">*</span>
                            </label>
                            <input id="email" name="email" type="email" required autocomplete="email" x-model="email"
                                value="{{ old('email') }}" placeholder="alex@devrak.io"
                                class="w-full bg-surface-container-low border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 transition-all outline-none text-on-surface placeholder:text-outline-variant {{ $errors->has('email') ? 'ring-2 ring-error/50' : '' }}" />
                            @error('email')
                                <p class="text-xs text-error mt-1 px-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="space-y-2">
                            <div class="flex items-center justify-between px-1">
                                <label class="text-xs font-semibold text-on-surface-variant" for="password">
                                    Password <span class="text-error">*</span>
                                </label>
                                {{-- Password reset placeholder link --}}
                                <a href="{{ route('password.request') }}" class="text-xs text-primary hover:underline font-medium">Forgot
                                    password?</a>
                            </div>
                            <div class="relative">
                                <input id="password" name="password" :type="showPassword ? 'text' : 'password'" required
                                    autocomplete="current-password" x-model="password" placeholder="••••••••••••"
                                    class="w-full bg-surface-container-low border-none rounded-lg p-4 pr-12 focus:ring-2 focus:ring-primary/20 transition-all outline-none text-on-surface placeholder:text-outline-variant {{ $errors->has('password') ? 'ring-2 ring-error/50' : '' }}" />
                                <button type="button" @click="showPassword = !showPassword" id="toggle-password"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-outline-variant hover:text-on-surface transition-colors">
                                    <span class="material-symbols-outlined text-xl"
                                        x-text="showPassword ? 'visibility_off' : 'visibility'">visibility</span>
                                </button>
                            </div>
                            @error('password')
                                <p class="text-xs text-error mt-1 px-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Remember me --}}
                        <div class="flex items-center gap-3">
                            <input id="remember" name="remember" type="checkbox"
                                class="w-5 h-5 rounded border-outline-variant/30 text-primary focus:ring-primary/20 bg-surface-container-low cursor-pointer" />
                            <label class="text-sm text-on-surface-variant cursor-pointer select-none" for="remember">
                                Keep me signed in
                            </label>
                        </div>

                        {{-- Submit --}}
                        <button id="btn-login" type="submit"
                            class="w-full kinetic-gradient text-on-primary font-bold py-4 rounded-xl shadow-lg shadow-primary/20 active:scale-[0.98] transition-all hover:brightness-110 flex items-center justify-center gap-2 disabled:opacity-70 disabled:cursor-wait"
                            :disabled="loading">
                            <span x-text="loading ? 'Signing in…' : 'Sign In'">Sign In</span>
                            <span class="material-symbols-outlined text-xl" x-show="!loading">arrow_forward</span>
                            {{-- Spinner --}}
                            <svg x-show="loading" x-cloak class="animate-spin h-5 w-5 text-on-primary"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                            </svg>
                        </button>


                    </form>

                    {{-- Social sign-in --}}
                    <div
                        class="mt-8 pt-8 border-t border-outline-variant/10 flex flex-col md:flex-row items-center justify-between gap-4">
                        <span class="text-xs font-medium text-outline">Or sign in with</span>
                        <div class="flex gap-4 w-full md:w-auto">
                            <button
                                class="flex-1 md:flex-none flex items-center justify-center gap-2 px-6 py-2 rounded-lg bg-surface-container border border-outline-variant/10 hover:bg-surface-container-high transition-colors text-sm font-medium">
                                <img alt="Google" class="w-4 h-4"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJCd8pMytsgukfgrQH_vEAojXI8w3oR9twbPQOTQcekkr2IxsqTNO4vXPjbNJpJkyVAlIfgUjE78xfy9m44jrM48UmuA10nxgoxra-5oaoCRmvZ9zKe3gD8W_ziAG1R00R90yISdi65k-v7XHreIbDSRCuhWrdHqdSXtwsffsDS3rtPtvOOdzmWkTWjg_wsmhlJniguoK7KTICcglKOPDjZi_-xoIqEE2xK58z2_KyFX4uSEpfqAUuacVEOoVGxgWYVVriQbFNzhau" />
                                Google
                            </button>
                            <button
                                class="flex-1 md:flex-none flex items-center justify-center gap-2 px-6 py-2 rounded-lg bg-surface-container border border-outline-variant/10 hover:bg-surface-container-high transition-colors text-sm font-medium">
                                <span class="material-symbols-outlined text-lg">code</span>
                                GitHub
                            </button>
                        </div>
                    </div>

                    {{-- Logout button (shown only when authenticated) --}}
                    @auth
                        <div class="mt-6 pt-6 border-t border-outline-variant/10">
                            <form action="{{ route('logout') }}" method="POST" class="flex justify-center">
                                @csrf
                                <button id="btn-logout" type="submit"
                                    class="flex items-center gap-2 text-sm font-medium text-on-surface-variant hover:text-error transition-colors">
                                    <span class="material-symbols-outlined text-lg">logout</span>
                                    Sign out from current session
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>
            </section>

        </div>
    </main>

    {{-- Floating status badge --}}
    <div class="fixed bottom-12 right-12 hidden xl:block">
        <div
            class="bg-surface-container-lowest/80 backdrop-blur-xl p-4 rounded-2xl shadow-xl border border-outline-variant/10 max-w-xs">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
                <span class="text-[10px] font-bold uppercase tracking-tighter text-on-surface-variant font-label">System
                    Status</span>
            </div>
            <p class="text-[11px] text-on-surface-variant leading-normal">
                Node groups in <span class="text-primary font-bold">us-east-1</span> are operating at optimal capacity.
                Ecosystem invites are currently open.
            </p>
        </div>
    </div>

    <footer class="mt-auto py-8 text-center border-t border-outline-variant/5">
        <p class="text-label-md text-outline text-[#0D1B2A]">© 2024 CodeMentor ARCHITECTURE SYSTEMS. ALL RIGHTS
            RESERVED.</p>
    </footer>
</body>

</html>