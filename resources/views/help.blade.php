<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>CodeMentor | Help Center</title>
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
            "surface-bright": "#f5f7f9",
            "surface-container-highest": "#d9dde0",
            "background": "#f5f7f9",
            "secondary-fixed": "#d8e3fb",
            "outline": "#747779",
            "inverse-primary": "#3adffa",
            "on-error": "#ffefee",
            "tertiary-container": "#84b1ff",
            "inverse-on-surface": "#9a9d9f",
            "surface-tint": "#006573",
            "error": "#b31b25",
            "on-surface": "#2c2f31",
            "on-primary": "#daf8ff",
            "on-primary-fixed-variant": "#005561",
            "primary-container": "#3adffa",
            "surface": "#f5f7f9",
            "surface-container-low": "#eef1f3",
            "on-primary-container": "#004b56",
            "on-secondary-container": "#475266",
            "inverse-surface": "#0b0f10",
            "tertiary-dim": "#004e9d",
            "on-secondary-fixed-variant": "#515c70",
            "secondary-container": "#d8e3fb",
            "surface-dim": "#d0d5d8",
            "error-container": "#fb5151",
            "tertiary-fixed-dim": "#6aa3ff",
            "on-primary-fixed": "#00363e",
            "secondary": "#515c70",
            "on-secondary-fixed": "#354053",
            "on-surface-variant": "#595c5e",
            "on-tertiary-fixed-variant": "#003874",
            "tertiary-fixed": "#84b1ff",
            "secondary-dim": "#455064",
            "on-tertiary-container": "#003064",
            "primary-fixed-dim": "#1ad0eb",
            "primary": "#006573",
            "primary-fixed": "#3adffa",
            "surface-container-high": "#dfe3e6",
            "secondary-fixed-dim": "#cad5ed",
            "primary-dim": "#005865",
            "surface-container-lowest": "#ffffff",
            "on-tertiary": "#eff2ff",
            "on-tertiary-fixed": "#001737",
            "on-secondary": "#eff2ff",
            "tertiary": "#005ab3",
            "surface-container": "#e5e9eb",
            "on-error-container": "#570008",
            "surface-variant": "#d9dde0",
            "on-background": "#2c2f31",
            "outline-variant": "#abadaf",
            "error-dim": "#9f0519"
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
        }
      }
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
</head>

<body class="bg-[#D0E3E6] font-body text-on-surface selection:bg-primary-container selection:text-on-primary-container">
  <div class="flex  min-h-screen">
    <!-- Main Content Area -->
    <main class="mx-8 flex-1">
      <div class="pt-8 px-12">
        <a href="{{ url()->previous() }}"
          class="inline-flex items-center gap-2 text-primary hover:text-primary-dim font-bold transition-colors group">
          <span class="material-symbols-outlined transition-transform group-hover:-translate-x-1">arrow_back</span>
          Go Back
        </a>
      </div>
      <!-- Hero Section -->
      <section class="relative pt-12 pb-20 px-12 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full opacity-10 pointer-events-none">
          <img class="w-full h-full object-cover rounded-bl-[10rem]"
            data-alt="Abstract macro shot of tech hardware with glowing blue neon lines and futuristic geometry"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0FMHLdovS3gfEBL7zOqHv6zE3WaxWGFlwi1PhspNyqDxgA7Bn3cmll6HhqdGTP4IwISEDzj-y4YO0JxDHBZpvPaAhZU2FSfr64dlAAAE36-eyIbsjkKvfoNuOYPLgRx9YFASs8IQWJJ64DYPtbeo84RYD9dSr9fG3-9f6xbIr3b0UhtqG1FVOfUKu7Nr-apg_3JZ3LRIrMRVEWddNbuGaCf6S7mX6NhK7Je_v7pfcnXm86frJgVsz6Jy9kBOQwjMN0X1m5twJpSj9" />
        </div>
        <div class="max-w-4xl">
          <h1 class="font-headline text-5xl md:text-6xl text-on-surface font-bold tracking-tight mb-8">
            How can we <span
              class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">help you</span>
            today?
          </h1>

        </div>
      </section>
      <div class="px-12 grid grid-cols-12 gap-8 pb-20">
        <!-- Content Canvas (Grid of Categories) -->
        <div class="col-span-12 lg:col-span-8 space-y-12">
          <div>
            <div class="flex justify-between items-end mb-8">
              <h2 class="font-headline text-2xl font-semibold">Support Categories</h2>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Category Cards (Bento Style) -->
              <div
                class="group bg-surface-container-lowest p-8 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] hover:shadow-[0px_10px_40px_rgba(0,101,115,0.08)] transition-all cursor-pointer">
                <div
                  class="w-12 h-12 rounded-xl bg-primary-container/30 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined"
                    style="font-variation-settings: 'FILL' 1;">rocket_launch</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-2">Getting Started</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-4">Learn the basics of DevAcademy, platform
                  navigation, and setting up your first project.</p>
                <span class="text-xs font-bold text-primary tracking-widest uppercase">12 ARTICLES</span>
              </div>
              <div
                class="group bg-surface-container-lowest p-8 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] hover:shadow-[0px_10px_40px_rgba(0,101,115,0.08)] transition-all cursor-pointer">
                <div
                  class="w-12 h-12 rounded-xl bg-tertiary-container/30 flex items-center justify-center text-tertiary mb-6 group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">security</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-2">Account &amp; Security</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-4">Manage your profile, update security
                  settings, and set up two-factor authentication.</p>
                <span class="text-xs font-bold text-tertiary tracking-widest uppercase">8 ARTICLES</span>
              </div>
              <div
                class="group bg-surface-container-lowest p-8 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] hover:shadow-[0px_10px_40px_rgba(0,101,115,0.08)] transition-all cursor-pointer">
                <div
                  class="w-12 h-12 rounded-xl bg-secondary-container flex items-center justify-center text-secondary mb-6 group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">school</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-2">Academy &amp; Courses</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-4">Questions about curriculum,
                  certification paths, and community-led workshops.</p>
                <span class="text-xs font-bold text-secondary tracking-widest uppercase">24 ARTICLES</span>
              </div>
              <div
                class="group bg-surface-container-lowest p-8 rounded-xl shadow-[0px_4px_20px_rgba(44,47,49,0.04)] hover:shadow-[0px_10px_40px_rgba(0,101,115,0.08)] transition-all cursor-pointer">
                <div
                  class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                  <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">terminal</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-2">Code Lab Tools</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-4">Debugging the cloud IDE, environment
                  variables, and sandbox limits.</p>
                <span class="text-xs font-bold text-primary tracking-widest uppercase">15 ARTICLES</span>
              </div>
            </div>
          </div>
          <!-- FAQ Section -->
          <div class="pt-8">
            <h2 class="font-headline text-2xl font-semibold mb-8">Frequently Asked Questions</h2>
            <div class="space-y-4">
              <!-- Accordion Item 1 -->
              <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm border-l-4 border-primary">
                <div class="flex justify-between items-center cursor-pointer">
                  <h4 class="font-semibold text-on-surface">How do I reset my API keys for the Code Lab?</h4>
                  <span class="material-symbols-outlined text-primary">expand_more</span>
                </div>
                <div class="mt-4 text-on-surface-variant text-sm leading-relaxed">
                  Navigate to Account Settings &gt; Security &gt; API Management. Click "Revoke and Regenerate" on the
                  desired key. Note that this will break existing integrations immediately.
                </div>
              </div>
              <!-- Accordion Item 2 -->
              <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm">
                <div class="flex justify-between items-center cursor-pointer">
                  <h4 class="font-semibold text-on-surface">Can I export my course progress to LinkedIn?</h4>
                  <span class="material-symbols-outlined text-outline">expand_more</span>
                </div>
              </div>
              <!-- Accordion Item 3 -->
              <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm">
                <div class="flex justify-between items-center cursor-pointer">
                  <h4 class="font-semibold text-on-surface">What payment methods are accepted for Team Academy?</h4>
                  <span class="material-symbols-outlined text-outline">expand_more</span>
                </div>
              </div>
              <!-- Accordion Item 4 -->
              <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm">
                <div class="flex justify-between items-center cursor-pointer">
                  <h4 class="font-semibold text-on-surface">How do I upgrade from Student to Pro tier?</h4>
                  <span class="material-symbols-outlined text-outline">expand_more</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Right Sidebar / Quick Nav -->
        <div class="col-span-12 lg:col-span-4 space-y-8">
          <!-- Quick Navigation -->
          <div class="bg-surface-container-low p-8 rounded-xl space-y-6 my-16">
            <h3 class="font-headline text-lg font-bold">Quick Links</h3>
            <ul class="space-y-3">
              <li>
                <a class="flex items-center gap-3 p-3 bg-white/40 hover:bg-white rounded-lg transition-all group"
                  href="#">
                  <span
                    class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">menu_book</span>
                  <span class="font-medium text-sm">Knowledge Base</span>
                </a>
              </li>
              <li>
                <a class="flex items-center gap-3 p-3 bg-white/40 hover:bg-white rounded-lg transition-all group"
                  href="{{ url('/community') }}">
                  <span
                    class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">forum</span>
                  <span class="font-medium text-sm">Community Support</span>
                </a>
              </li>
              <li>
                <a class="flex items-center gap-3 p-3 bg-white/40 hover:bg-white rounded-lg transition-all group"
                  href="{{ url('/contact') }}">
                  <span
                    class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">confirmation_number</span>
                  <span class="font-medium text-sm">Submit a Ticket</span>
                </a>
              </li>
              <li>
                <a class="flex items-center gap-3 p-3 bg-white/40 hover:bg-white rounded-lg transition-all group"
                  href="#">
                  <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                  <span class="font-medium text-sm">System Status: Operational</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- Prominent Contact Card -->
          <div
            class="relative overflow-hidden rounded-xl bg-inverse-surface p-8 text-white shadow-xl shadow-slate-900/10">
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/20 blur-3xl"></div>
            <div class="relative z-10">
              <h3 class="font-headline text-xl font-bold mb-4">Still need help?</h3>
              <p class="text-inverse-on-surface text-sm mb-8 leading-relaxed">Our world-class support engineers are
                available 24/7 to help you resolve technical hurdles.</p>
              <div class="space-y-4">
                <a href="{{ url('/contact') }}"
                  class="w-full kinetic-gradient text-on-primary font-bold py-4 rounded-xl flex items-center justify-center gap-2">
                  <span class="material-symbols-outlined text-lg">headset_mic</span>
                  Chat with Support
                </a>
                <p class="text-center text-[10px] text-inverse-on-surface/50 uppercase tracking-widest font-bold">AVG
                  RESPONSE TIME: 2 MINS</p>
              </div>
            </div>
          </div>
          <!-- Mini Academy Promotion -->
          <div class="bg-primary-container p-6 rounded-xl">
            <div class="flex gap-4">
              <div class="flex-shrink-0">
                <span class="material-symbols-outlined text-on-primary-container text-4xl">lightbulb</span>
              </div>
              <div>
                <h4 class="font-headline font-bold text-on-primary-container leading-tight">Master the platform with
                  Academy</h4>
                <p class="text-on-primary-container/70 text-xs mt-2 mb-4">Get certified in DevOps and Full-stack
                  engineering.</p>
                <a class="text-on-primary-container font-bold text-xs underline underline-offset-4"
                  href="{{ url('/courses') }}">Explore
                  Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <!-- Mobile Navigation Shell -->
  <footer
    class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-white/90 backdrop-blur-md flex items-center justify-around px-4 z-50 border-t border-outline-variant/10">
    <a class="flex flex-col items-center gap-1 text-slate-400" href="{{ url('/dashboard') }}">
      <span class="material-symbols-outlined">dashboard</span>
      <span class="text-[10px]">Overview</span>
    </a>
    <a class="flex flex-col items-center gap-1 text-slate-400" href="{{ url('/courses') }}">
      <span class="material-symbols-outlined">school</span>
      <span class="text-[10px]">Academy</span>
    </a>
    <a class="flex flex-col items-center gap-1 text-primary" href="{{ url('/help') }}">
      <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">help</span>
      <span class="text-[10px] font-bold">Support</span>
    </a>
    <a class="flex flex-col items-center gap-1 text-slate-400" href="{{ url('/profile') }}">
      <span class="material-symbols-outlined">person</span>
      <span class="text-[10px]">Profile</span>
    </a>
  </footer>
</body>

</html>