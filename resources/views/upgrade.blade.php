<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Upgrade | CodeMentor</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "surface-bright": "#f5f7f9",
            "tertiary-container": "#84b1ff",
            "background": "#f5f7f9",
            "error": "#b31b25",
            "surface-container-high": "#dfe3e6",
            "on-tertiary-fixed-variant": "#003874",
            "on-secondary-fixed": "#354053",
            "on-secondary-fixed-variant": "#515c70",
            "surface-tint": "#006573",
            "primary-container": "#3adffa",
            "surface-container-highest": "#d9dde0",
            "surface-container-lowest": "#ffffff",
            "on-tertiary-fixed": "#001737",
            "inverse-on-surface": "#9a9d9f",
            "on-surface": "#2c2f31",
            "on-primary-container": "#004b56",
            "secondary": "#515c70",
            "tertiary": "#005ab3",
            "tertiary-dim": "#004e9d",
            "surface-dim": "#d0d5d8",
            "outline": "#747779",
            "on-background": "#2c2f31",
            "inverse-surface": "#0b0f10",
            "inverse-primary": "#3adffa",
            "on-error-container": "#570008",
            "secondary-fixed": "#d8e3fb",
            "on-error": "#ffefee",
            "primary": "#006573",
            "on-tertiary": "#eff2ff",
            "tertiary-fixed-dim": "#6aa3ff",
            "secondary-container": "#d8e3fb",
            "on-secondary-container": "#475266",
            "secondary-fixed-dim": "#cad5ed",
            "on-primary": "#daf8ff",
            "on-tertiary-container": "#003064",
            "surface-container": "#e5e9eb",
            "surface": "#f5f7f9",
            "on-surface-variant": "#595c5e",
            "surface-container-low": "#eef1f3",
            "secondary-dim": "#455064",
            "surface-variant": "#d9dde0",
            "primary-fixed": "#3adffa",
            "primary-dim": "#005865",
            "error-container": "#fb5151",
            "on-secondary": "#eff2ff",
            "error-dim": "#9f0519",
            "outline-variant": "#abadaf",
            "on-primary-fixed": "#00363e",
            "on-primary-fixed-variant": "#005561",
            "tertiary-fixed": "#84b1ff",
            "primary-fixed-dim": "#1ad0eb"
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
      color: #2c2f31;
    }

    .kinetic-gradient {
      background: linear-gradient(135deg, #006573 0%, #3adffa 100%);
    }

    .ambient-shadow {
      box-shadow: 0px 4px 20px rgba(44, 47, 49, 0.04), 0px 10px 40px rgba(0, 101, 115, 0.06);
    }
  </style>
</head>

<body class="min-h-screen flex flex-col bg-[#D0E3E6] selection:bg-primary-container selection:text-on-primary-container">
  <!-- Back Button -->
  <div class="fixed top-0 left-0 w-full p-8 z-50 pointer-events-none">
    <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/90 backdrop-blur-md shadow-lg text-primary hover:scale-110 active:scale-95 transition-all pointer-events-auto">
        <span class="material-symbols-outlined">arrow_back</span>
    </a>
  </div>

  <main class="flex-grow pt-32 pb-24 px-6 max-w-[1440px] mx-auto w-full">
    <!-- Hero Section -->
    <header class="mb-20 text-center md:text-left max-w-4xl">
      <h1 class="text-5xl md:text-7xl font-bold font-headline tracking-tighter text-on-surface leading-[1.1] mb-6">
        Elevate your <span class="text-primary">kinetic</span> potential.
      </h1>
      <p class="text-lg md:text-xl text-on-surface-variant max-w-2xl font-body leading-relaxed">
        Choose the tier that aligns with your engineering trajectory. From curious builders to enterprise architects,
        Devrak powers every step of the journey.
      </p>
    </header>
    <!-- Pricing Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-24">
      <!-- Free Tier -->
      <div
        class="flex flex-col p-8 rounded-[1.5rem] bg-surface-container-low transition-all duration-300 hover:bg-surface-container">
        <div class="mb-8">
          <span class="text-xs font-bold uppercase tracking-widest text-secondary font-label">Entry</span>
          <h3 class="text-3xl font-bold font-headline mt-2">Free</h3>
          <div class="mt-4 flex items-baseline gap-1">
            <span class="text-4xl font-bold text-on-surface">$0</span>
            <span class="text-on-surface-variant font-label">/mo</span>
          </div>
        </div>
        <p class="text-on-surface-variant text-sm mb-8 leading-relaxed">Essential access to the Devrak ecosystem for
          individuals starting their journey.</p>
        <ul class="space-y-4 mb-10 flex-grow">
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Academy Fundamentals</span>
          </li>
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Community Forums</span>
          </li>
          <li class="flex items-start gap-3 text-sm opacity-40">
            <span class="material-symbols-outlined text-[20px]" data-icon="block">block</span>
            <span>Code Lab Assistant</span>
          </li>
        </ul>
        <button
          class="w-full py-4 rounded-xl font-bold bg-surface-container-highest text-on-surface-variant hover:bg-surface-container-high transition-colors">Current
          Plan</button>
      </div>
      <!-- Pro Tier (Highlighted) -->
      <div
        class="relative flex flex-col p-8 rounded-[1.5rem] bg-surface-container-lowest ambient-shadow border-2 border-primary/10">
        <div
          class="absolute -top-4 left-1/2 -translate-x-1/2 kinetic-gradient text-white text-[10px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest">
          Most Popular
        </div>
        <div class="mb-8">
          <span class="text-xs font-bold uppercase tracking-widest text-primary font-label">Acceleration</span>
          <h3 class="text-3xl font-bold font-headline mt-2">Pro</h3>
          <div class="mt-4 flex items-baseline gap-1">
            <span class="text-4xl font-bold text-on-surface">$19</span>
            <span class="text-on-surface-variant font-label">/mo</span>
          </div>
        </div>
        <p class="text-on-surface-variant text-sm mb-8 leading-relaxed">The standard for professional developers seeking
          structured growth.</p>
        <ul class="space-y-4 mb-10 flex-grow">
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Full Academy Access</span>
          </li>
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Code Lab Assistant</span>
          </li>
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Standard Certifications</span>
          </li>
        </ul>
        <a href="{{ route('payment', ['plan' => 'Pro', 'amount' => 19]) }}"
          class="w-full py-4 rounded-xl font-bold kinetic-gradient text-on-primary active:scale-[0.98] transition-all flex items-center justify-center">Upgrade
          to Pro</a>
      </div>
      <!-- Gold Tier -->
      <div
        class="flex flex-col p-8 rounded-[1.5rem] bg-surface-container-low transition-all duration-300 hover:bg-surface-container">
        <div class="mb-8">
          <span class="text-xs font-bold uppercase tracking-widest text-secondary font-label">Mentorship</span>
          <h3 class="text-3xl font-bold font-headline mt-2">Gold</h3>
          <div class="mt-4 flex items-baseline gap-1">
            <span class="text-4xl font-bold text-on-surface">$49</span>
            <span class="text-on-surface-variant font-label">/mo</span>
          </div>
        </div>
        <p class="text-on-surface-variant text-sm mb-8 leading-relaxed">Direct expert guidance to fast-track your career
          milestones.</p>
        <ul class="space-y-4 mb-10 flex-grow">
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Personalized Mentorship</span>
          </li>
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Priority Support Hub</span>
          </li>
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Advanced Career Tools</span>
          </li>
        </ul>
        <a href="{{ route('payment', ['plan' => 'Gold', 'amount' => 49]) }}"
          class="w-full py-4 rounded-xl font-bold bg-on-surface text-surface-container-lowest hover:bg-on-surface/90 transition-colors flex items-center justify-center">Select
          Gold</a>
      </div>
      <!-- Diamond Tier -->
      <div
        class="flex flex-col p-8 rounded-[1.5rem] bg-surface-container-low transition-all duration-300 hover:bg-surface-container">
        <div class="mb-8">
          <span class="text-xs font-bold uppercase tracking-widest text-secondary font-label">Enterprise</span>
          <h3 class="text-3xl font-bold font-headline mt-2">Diamond</h3>
          <div class="mt-4 flex items-baseline gap-1">
            <span class="text-4xl font-bold text-on-surface">$99</span>
            <span class="text-on-surface-variant font-label">/mo</span>
          </div>
        </div>
        <p class="text-on-surface-variant text-sm mb-8 leading-relaxed">Unlimited resources for senior architects and
          enterprise teams.</p>
        <ul class="space-y-4 mb-10 flex-grow">
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Unlimited Live Coding</span>
          </li>
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Exclusive Networking</span>
          </li>
          <li class="flex items-start gap-3 text-sm">
            <span class="material-symbols-outlined text-primary text-[20px]"
              data-icon="check_circle">check_circle</span>
            <span>Custom Learning Paths</span>
          </li>
        </ul>
        <a href="{{ route('payment', ['plan' => 'Diamond', 'amount' => 99]) }}"
          class="w-full py-4 rounded-xl font-bold bg-surface-container-highest text-on-surface hover:bg-surface-container-high transition-colors flex items-center justify-center">Go
          Diamond</a>
      </div>
    </div>
    <!-- Bento Comparison Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2 bg-surface-container-low rounded-[1.5rem] p-10">
        <h4 class="text-2xl font-bold font-headline mb-8">Detailed Feature Comparison</h4>
        <div class="overflow-x-auto">
          <table class="w-full text-left">
            <thead>
              <tr class="border-b border-outline-variant/20">
                <th class="pb-4 font-semibold text-on-surface-variant">Core Modules</th>
                <th class="pb-4 font-semibold text-center text-secondary">Free</th>
                <th class="pb-4 font-semibold text-center text-primary">Pro</th>
                <th class="pb-4 font-semibold text-center text-on-surface">Gold</th>
                <th class="pb-4 font-semibold text-center text-on-surface">Diamond</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/10">
              <tr>
                <td class="py-4 text-sm">Devrak Academy Access</td>
                <td class="py-4 text-center text-xs">Basics</td>
                <td class="py-4 text-center text-xs font-bold text-primary">Full</td>
                <td class="py-4 text-center text-xs font-bold text-primary">Full</td>
                <td class="py-4 text-center text-xs font-bold text-primary">Full</td>
              </tr>
              <tr>
                <td class="py-4 text-sm">Code Lab Assistant</td>
                <td class="py-4 text-center"><span class="material-symbols-outlined text-on-surface-variant/20"
                    data-icon="remove">remove</span></td>
                <td class="py-4 text-center"><span class="material-symbols-outlined text-primary"
                    data-icon="check">check</span></td>
                <td class="py-4 text-center"><span class="material-symbols-outlined text-primary"
                    data-icon="check">check</span></td>
                <td class="py-4 text-center"><span class="material-symbols-outlined text-primary"
                    data-icon="check">check</span></td>
              </tr>
              <tr>
                <td class="py-4 text-sm">Live Coding Sessions</td>
                <td class="py-4 text-center text-xs">None</td>
                <td class="py-4 text-center text-xs">1/mo</td>
                <td class="py-4 text-center text-xs">4/mo</td>
                <td class="py-4 text-center text-xs font-bold">Unlimited</td>
              </tr>
              <tr>
                <td class="py-4 text-sm">Certification Track</td>
                <td class="py-4 text-center text-xs">Audit Only</td>
                <td class="py-4 text-center text-xs">Standard</td>
                <td class="py-4 text-center text-xs font-bold">Premium</td>
                <td class="py-4 text-center text-xs font-bold">Elite</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="bg-primary-container/20 rounded-[1.5rem] p-10 flex flex-col justify-between overflow-hidden relative">
        <div class="relative z-10">
          <h4 class="text-2xl font-bold font-headline text-on-primary-container mb-4">Enterprise Inquiries?</h4>
          <p class="text-on-primary-container/80 text-sm mb-8">For teams of 10+ engineers, we offer bespoke onboarding
            and internal knowledge base integrations.</p>
          <a class="inline-flex items-center gap-2 text-primary font-bold hover:gap-4 transition-all" href="#">
            Talk to Sales <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
          </a>
        </div>
        <div class="absolute -bottom-10 -right-10 w-48 h-48 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="mt-12 bg-surface-container-lowest/50 p-4 rounded-xl border border-primary/5">
          <div class="flex items-center gap-3">
            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
            <span class="text-xs font-medium">9 active mentors available now</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Asymmetric -->
    <section class="mt-32 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
      <div class="relative">
        <img alt="Engineer Workspace"
          class="rounded-[2rem] grayscale hover:grayscale-0 transition-all duration-700 shadow-2xl"
          data-alt="Modern high-tech software engineering workspace with multiple monitors displaying code and soft ambient cyan lighting"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6LxPCeYoa3Cjgpx-VBJIwxFCrvN4riui841-2NxF661FfMWi5VICukOlyvMP4a62Sb7thx910dS0sQLOGMjaD3MxgE7tk_qXZzUgYBcScciGivpi28AALBaIKimvP0Q6u0MWMspl3egLHaWJFI19JPmIKZxuXlGWcWE_pAHPON-eB5aCTVbaB_fu7lyXp-6zDGlZ84Xdos_7UzU0rp0oF7_Fk4O78WG4qy6D8vURpyMnmK4zZ4q5tSYQQdHSvO79SnYqlKhmD0vZ0" />
        <div
          class="absolute -bottom-8 -right-8 bg-surface-container-lowest p-8 rounded-2xl ambient-shadow max-w-[280px]">
          <p class="italic text-sm text-on-surface-variant leading-relaxed">"Upgrading to Pro was the catalyst for my
            move from Junior to Senior. The Code Lab assistant is essentially a 24/7 mentor."</p>
          <div class="mt-4 flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-secondary-container"></div>
            <div>
              <p class="text-xs font-bold">Sarah Jenkins</p>
              <p class="text-[10px] text-on-surface-variant">L5 Engineer @ NexaCorp</p>
            </div>
          </div>
        </div>
      </div>
      <div class="md:pl-12">
        <h2 class="text-4xl font-bold font-headline mb-8 leading-tight">Trusted by the next generation of architects.
        </h2>
        <div class="grid grid-cols-2 gap-8">
          <div>
            <p class="text-4xl font-bold font-headline text-primary">12k+</p>
            <p class="text-sm text-on-surface-variant font-label mt-1">Active Graduates</p>
          </div>
          <div>
            <p class="text-4xl font-bold font-headline text-primary">85%</p>
            <p class="text-sm text-on-surface-variant font-label mt-1">Salary Increase Avg.</p>
          </div>
          <div>
            <p class="text-4xl font-bold font-headline text-primary">24/7</p>
            <p class="text-sm text-on-surface-variant font-label mt-1">Expert Support</p>
          </div>
          <div>
            <p class="text-4xl font-bold font-headline text-primary">500+</p>
            <p class="text-sm text-on-surface-variant font-label mt-1">Partner Labs</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer class="w-full py-16 mt-auto bg-slate-100 dark:bg-slate-900 font-['Inter'] text-sm tracking-wide">
    <div class="flex flex-col md:flex-row justify-between items-center px-12 max-w-7xl mx-auto space-y-6 md:space-y-0">
      <div class="font-['Space_Grotesk'] font-bold text-slate-900 dark:text-white text-xl">
        Code.
      </div>
      <div class="flex space-x-8">
        <a class="text-slate-500 dark:text-slate-400 hover:text-cyan-600 dark:hover:text-cyan-400 transition-colors"
          href="#">Privacy Policy</a>
        <a class="text-slate-500 dark:text-slate-400 hover:text-cyan-600 dark:hover:text-cyan-400 transition-colors"
          href="#">Terms of Service</a>
        <a class="text-slate-500 dark:text-slate-400 hover:text-cyan-600 dark:hover:text-cyan-400 transition-colors"
          href="#">Support Hub</a>
        <a class="text-slate-500 dark:text-slate-400 hover:text-cyan-600 dark:hover:text-cyan-400 transition-colors"
          href="#">Platform Status</a>
      </div>
      <div class="text-slate-500 dark:text-slate-400">
        © 2024 Devrak Lab. Kinetic Editorial System.
      </div>
    </div>
  </footer>
</body>

</html>
