<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Secure Checkout | CodeMentor</title>
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
                    "colors": {
                        "tertiary": "#005ab3",
                        "error": "#b31b25",
                        "primary-container": "#3adffa",
                        "primary": "#006573",
                        "on-tertiary-fixed-variant": "#003874",
                        "on-error": "#ffefee",
                        "primary-dim": "#005865",
                        "primary-fixed-dim": "#1ad0eb",
                        "background": "#f5f7f9",
                        "secondary-fixed-dim": "#cad5ed",
                        "secondary-dim": "#455064",
                        "surface-container-low": "#eef1f3",
                        "on-tertiary-fixed": "#001737",
                        "inverse-primary": "#3adffa",
                        "error-dim": "#9f0519",
                        "secondary": "#515c70",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-fixed": "#84b1ff",
                        "on-primary-container": "#004b56",
                        "on-background": "#2c2f31",
                        "surface": "#f5f7f9",
                        "outline-variant": "#abadaf",
                        "on-secondary": "#eff2ff",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "surface-container": "#e5e9eb",
                        "on-tertiary": "#eff2ff",
                        "on-error-container": "#570008",
                        "outline": "#747779",
                        "surface-dim": "#d0d5d8",
                        "on-secondary-fixed-variant": "#515c70",
                        "inverse-surface": "#0b0f10",
                        "on-primary-fixed": "#00363e",
                        "primary-fixed": "#3adffa",
                        "inverse-on-surface": "#9a9d9f",
                        "on-secondary-container": "#475266",
                        "on-tertiary-container": "#003064",
                        "surface-bright": "#f5f7f9",
                        "tertiary-dim": "#004e9d",
                        "secondary-container": "#d8e3fb",
                        "on-primary": "#daf8ff",
                        "tertiary-container": "#84b1ff",
                        "surface-tint": "#006573",
                        "on-surface": "#2c2f31",
                        "on-primary-fixed-variant": "#005561",
                        "error-container": "#fb5151",
                        "surface-container-highest": "#d9dde0",
                        "on-surface-variant": "#595c5e",
                        "surface-container-high": "#dfe3e6",
                        "secondary-fixed": "#d8e3fb",
                        "surface-variant": "#d9dde0",
                        "on-secondary-fixed": "#354053"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Space Grotesk"],
                        "display": ["Space Grotesk"],
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
        }

        h1,
        h2,
        h3,
        .brand-logo {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface antialiased">
    <!-- Back Button -->
    <div class="fixed top-0 left-0 w-full p-8 z-50 pointer-events-none">
        <a href="{{ route('upgrade') }}" class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/90 backdrop-blur-md shadow-lg text-primary hover:scale-110 active:scale-95 transition-all pointer-events-auto">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
    </div>

    <main class="max-w-[1440px] mx-auto px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left Column: Checkout -->
            <div class="flex-grow space-y-12">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-primary/10 text-primary rounded-full mb-6">
                        <span class="material-symbols-outlined text-sm"
                            style="font-variation-settings: 'FILL' 1;">lock</span>
                        <span class="font-label text-[0.75rem] font-semibold uppercase tracking-wider">Secure
                            Checkout</span>
                    </div>
                    <h1 class="text-[3.5rem] font-bold leading-[1.1] tracking-tighter mb-4 text-on-surface">Payment
                        Details.</h1>
                    <p class="text-on-surface-variant max-w-lg font-body text-sm leading-relaxed">
                        Complete your subscription to Devrak and unlock the full suite of editorial code analysis tools.
                        Surgical precision in every commit.
                    </p>
                </div>
                <!-- Saved Methods -->
                <section class="space-y-4">
                    <h2 class="text-sm font-semibold uppercase tracking-widest text-on-surface-variant">Saved Methods
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div
                            class="p-6 rounded-xl bg-surface-container-lowest shadow-[0px_4px_20px_rgba(44,47,49,0.04)] flex items-center justify-between cursor-pointer group hover:bg-primary-container/10 transition-all border border-transparent hover:border-primary/20">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-8 bg-surface-container-low rounded flex items-center justify-center">
                                    <span class="material-symbols-outlined text-on-surface-variant">credit_card</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-on-surface">Visa ending in 4242</p>
                                    <p class="text-xs text-on-surface-variant">Expires 12/26</p>
                                </div>
                            </div>
                            <div class="w-5 h-5 rounded-full border-2 border-primary flex items-center justify-center">
                                <div class="w-2.5 h-2.5 rounded-full bg-primary"></div>
                            </div>
                        </div>
                        <div
                            class="p-6 rounded-xl bg-surface-container-low/50 flex items-center justify-between cursor-pointer group hover:bg-surface-container-low transition-all">
                            <div class="flex items-center gap-4 opacity-60">
                                <div class="w-12 h-8 bg-surface-container-low rounded flex items-center justify-center">
                                    <span class="material-symbols-outlined text-on-surface-variant">payments</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-on-surface">Apple Pay</p>
                                    <p class="text-xs text-on-surface-variant">Not connected</p>
                                </div>
                            </div>
                            <div class="w-5 h-5 rounded-full border-2 border-outline-variant/30"></div>
                        </div>
                    </div>
                </section>
                <!-- Payment Form -->
                <form class="space-y-8 bg-surface-container-low p-8 rounded-xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="col-span-full space-y-2">
                            <label
                                class="text-xs font-semibold uppercase tracking-wider text-on-surface-variant">Cardholder
                                Name</label>
                            <input
                                class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant/30"
                                placeholder="ALEXANDER KINETIC" type="text" value="{{ auth()->user()->name }}" />
                        </div>
                        <div class="col-span-full space-y-2">
                            <label class="text-xs font-semibold uppercase tracking-wider text-on-surface-variant">Card
                                Number</label>
                            <div class="relative">
                                <input
                                    class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant/30"
                                    placeholder="0000 0000 0000 0000" type="text" />
                                <span
                                    class="absolute right-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-on-surface-variant/40">credit_score</span>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-semibold uppercase tracking-wider text-on-surface-variant">Expiry
                                Date</label>
                            <input
                                class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant/30"
                                placeholder="MM/YY" type="text" />
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-xs font-semibold uppercase tracking-wider text-on-surface-variant">CVV</label>
                            <input
                                class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant/30"
                                placeholder="•••" type="text" />
                        </div>
                    </div>
                    <div class="pt-6 border-t border-outline-variant/10">
                        <h3 class="text-xs font-semibold uppercase tracking-wider text-on-surface-variant mb-6">Billing
                            Address</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-full space-y-2">
                                <label class="text-xs font-medium text-on-surface-variant">Street Address</label>
                                <input
                                    class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant/30"
                                    placeholder="123 Innovation Way" type="text" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-medium text-on-surface-variant">City</label>
                                <input
                                    class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant/30"
                                    placeholder="San Francisco" type="text" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-medium text-on-surface-variant">Postal Code</label>
                                <input
                                    class="w-full bg-surface-container-lowest border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant/30"
                                    placeholder="94103" type="text" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Right Column: Summary -->
            <aside class="w-full lg:w-[400px] shrink-0">
                <div class="sticky top-24 space-y-6">
                    <div
                        class="bg-surface-container-lowest rounded-[1.5rem] p-8 shadow-[0px_10px_40px_rgba(0,101,115,0.06)] border border-outline-variant/10">
                        <div class="flex justify-between items-start mb-8">
                            <div>
                                <h3 class="font-headline text-2xl font-bold text-on-surface">{{ request()->query('plan', 'Pro') }} Plan</h3>
                                <p class="text-sm text-on-surface-variant mt-1">Billed monthly</p>
                            </div>
                            <div class="text-right">
                                <span class="text-2xl font-bold text-primary">${{ request()->query('amount', 19) }}</span>
                                <span class="text-sm text-on-surface-variant">/mo</span>
                            </div>
                        </div>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-sm text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Full Academy Access
                            </li>
                            <li class="flex items-center gap-3 text-sm text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Code Lab Assistant
                            </li>
                            <li class="flex items-center gap-3 text-sm text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Unlimited Projects
                            </li>
                            <li class="flex items-center gap-3 text-sm text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Priority Support
                            </li>
                        </ul>
                        <div class="space-y-3 pt-6 border-t border-outline-variant/10">
                            <div class="flex justify-between text-sm">
                                <span class="text-on-surface-variant">Subtotal</span>
                                <span class="font-medium text-on-surface">${{ number_format(request()->query('amount', 19), 2) }}</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-on-surface-variant">Tax (0%)</span>
                                <span class="font-medium text-on-surface">$0.00</span>
                            </div>
                            <div class="flex justify-between text-lg font-bold pt-4">
                                <span class="text-on-surface">Total Amount</span>
                                <span class="text-primary">${{ number_format(request()->query('amount', 19), 2) }}</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-8 py-4 px-6 rounded-xl bg-gradient-to-r from-primary to-primary-container text-on-primary font-bold tracking-tight hover:opacity-90 active:scale-[0.99] transition-all flex items-center justify-center gap-2">
                            Complete Payment
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                        <p class="text-[0.65rem] text-center text-on-surface-variant uppercase tracking-widest mt-6">
                            Encrypted by Devrak Security Protocols
                        </p>
                    </div>
                    <div class="p-6 rounded-xl bg-surface-container-low/50 relative overflow-hidden">
                        <img alt="Abstract tech background"
                            class="absolute inset-0 w-full h-full object-cover opacity-10 mix-blend-overlay"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCG-wlOrtKFF7xX3RTNJ8_iG0hly98ydTMIP5hfkFA_8LkRQT9f_bFN96cTg75LzO5Y2oKo4lHql1nvOPOhGVwQU2XgwEhAhTLzIVapRu4C6C5MLVTA9O3PB6UXphp68jp4HuAtBgEvxTJ2WMZsYwDBshVsZAjrX7QXLjyv1TJUlh-OWsZa3t1--QsVDgMD85IwESsMP69B3z7bs9mymsqsA79lhXfsZwa3z9N7Uj4QRlxA5sGmVZ9so9k2KJqlYkoBCT3aeBxjxcKW" />
                        <div class="relative z-10">
                            <h4 class="text-xs font-bold text-primary mb-2 uppercase tracking-tighter">Enterprise Need?
                            </h4>
                            <p class="text-xs text-on-surface-variant leading-relaxed">For teams larger than 50, contact
                                our architectural consultants for custom kinetic deployments.</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-transparent full-width py-12">
        <div
            class="max-w-[1440px] mx-auto flex flex-col md:flex-row justify-between items-center px-8 border-t border-[#abadaf15] pt-12 gap-6">
            <div class="font-['Space_Grotesk'] font-bold text-[#2c2f31]">KINETIC</div>
            <div class="flex gap-8">
                <a class="font-['Inter'] text-[0.75rem] tracking-wide uppercase text-[#2c2f31]/40 hover:text-[#2c2f31] transition-colors"
                    href="#">Terms</a>
                <a class="font-['Inter'] text-[0.75rem] tracking-wide uppercase text-[#2c2f31]/40 hover:text-[#2c2f31] transition-colors"
                    href="#">Privacy</a>
                <a class="font-['Inter'] text-[0.75rem] tracking-wide uppercase text-[#2c2f31]/40 hover:text-[#2c2f31] transition-colors"
                    href="#">Status</a>
                <a class="font-['Inter'] text-[0.75rem] tracking-wide uppercase text-[#2c2f31]/40 hover:text-[#2c2f31] transition-colors"
                    href="#">Support</a>
            </div>
            <div class="font-['Inter'] text-[0.75rem] tracking-wide uppercase text-[#2c2f31]/40">
                © 2024 Kinetic Editorial. Surgical Precision.
            </div>
        </div>
    </footer>
</body>

</html>
