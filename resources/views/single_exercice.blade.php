<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Responsive Grid Mastery | Kinetic Lab</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Space+Grotesk:wght@600;700;800;900&amp;family=Fira+Code:wght@400;500&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "error-dim": "#9f0519",
            "on-background": "#2c2f31",
            "on-secondary-container": "#475266",
            "surface": "#f5f7f9",
            "inverse-surface": "#0b0f10",
            "on-tertiary": "#eff2ff",
            "error-container": "#fb5151",
            "surface-container-high": "#dfe3e6",
            "secondary": "#515c70",
            "secondary-container": "#d8e3fb",
            "on-error": "#ffefee",
            "on-primary": "#daf8ff",
            "on-secondary-fixed": "#354053",
            "tertiary-dim": "#004e9d",
            "surface-tint": "#006573",
            "on-primary-container": "#004b56",
            "secondary-fixed-dim": "#cad5ed",
            "surface-container": "#e5e9eb",
            "surface-variant": "#d9dde0",
            "on-tertiary-container": "#003064",
            "on-secondary-fixed-variant": "#515c70",
            "background": "#f5f7f9",
            "surface-container-highest": "#d9dde0",
            "outline-variant": "#abadaf",
            "primary-dim": "#005865",
            "primary-container": "#3adffa",
            "surface-container-lowest": "#ffffff",
            "primary-fixed-dim": "#1ad0eb",
            "on-tertiary-fixed": "#001737",
            "on-error-container": "#570008",
            "primary-fixed": "#3adffa",
            "on-surface-variant": "#595c5e",
            "on-surface": "#2c2f31",
            "on-primary-fixed": "#00363e",
            "tertiary-container": "#84b1ff",
            "surface-bright": "#f5f7f9",
            "tertiary-fixed-dim": "#6aa3ff",
            "error": "#b31b25",
            "on-primary-fixed-variant": "#005561",
            "secondary-fixed": "#d8e3fb",
            "on-tertiary-fixed-variant": "#003874",
            "surface-dim": "#d0d5d8",
            "outline": "#747779",
            "surface-container-low": "#eef1f3",
            "secondary-dim": "#455064",
            "inverse-primary": "#3adffa",
            "tertiary": "#005ab3",
            "tertiary-fixed": "#84b1ff",
            "primary": "#006573",
            "on-secondary": "#eff2ff",
            "inverse-on-surface": "#9a9d9f"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "xxl": "1.5rem"
          },
          "fontFamily": {
            "headline": ["Space Grotesk", "sans-serif"],
            "body": ["Inter", "sans-serif"],
            "label": ["Inter", "sans-serif"],
            "mono": ["Fira Code", "monospace"]
          }
        },
      },
    }
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      vertical-align: middle;
    }

    body {
      font-family: 'Inter', sans-serif;
    }

    h1,
    h2,
    h3 {
      font-family: 'Space Grotesk', sans-serif;
    }

    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }

    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</head>

<body class="bg-[#D0E3E6] text-on-surface min-h-screen overflow-x-hidden flex flex-col">
  <!-- TopAppBar Execution -->
  <header
    class="w-full top-0 sticky z-50 bg-[#D0E3E6] dark:bg-[#0f172a] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
    <div class="flex justify-between items-center px-2 w-full mx-auto">
      <div class="flex items-center w-[20%]">
        <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}"
              alt=""></a></span>
      </div>
      <nav class="hidden md:flex items-center gap-8">
        <a class="flex items-center gap-1 text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-medium"
          href="{{ auth()->user()->role === 'teacher' ? route('teacher.dashboard') : route('dashboard') }}">Dashboard</a>
        <div class="relative group py-4">
          <button class="text-cyan-600 dark:text-cyan-400 font-bold transition-colors">
            Learn
            <span class="material-symbols-outlined text-[20px]">expand_more</span>
          </button>
          <div
            class="absolute top-[80%] left-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] py-2 overflow-hidden">
            <a href="{{ auth()->user()->role === 'teacher' ? route('teacher.courses') : route('courses') }}"
              class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Courses</a>
            <a href="{{ auth()->user()->role === 'teacher' ? route('teacher.exercices') : route('exercices') }}"
              class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Exercices</a>
            <a href="{{ route('CodeLab') }}"
              class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Playground</a>
            <a href="{{ auth()->user()->role === 'teacher' ? route('teacher.quizzes') : route('quizzes') }}"
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
            <a href="{{ route('career') }}"
              class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Careers</a>
            <a href="{{ route('certifications') }}"
              class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-[#eef1f3] dark:hover:bg-slate-700 transition-colors">Certifications</a>
          </div>
        </div>
        <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors text-slate-500 font-bold"
          href="{{ route('community') }}">Community</a>
        <a class="text-slate-500 dark:text-slate-400 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors text-slate-500 font-bold"
          href="{{ route('contact') }}">Contact</a>

      </nav>
      <div class="flex items-center gap-4">
        <div
          class="hidden sm:flex items-center bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant/15">
          <span class="material-symbols-outlined text-sm text-on-surface-variant mr-2">search</span>
          <input class="bg-transparent border-none focus:ring-0 text-sm w-80" placeholder="Search courses..."
            type="text" />
        </div>
        <div class="relative" x-data="{ showNotifications: false }">
          <button @click="showNotifications = !showNotifications" @click.away="showNotifications = false"
            class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#eef1f3] transition-colors relative">
            <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
            <!-- Notification Badge -->
            <span class="absolute top-2 right-2.5 w-2 h-2 bg-error rounded-full border border-white animate-pulse"></span>
          </button>

          <!-- Notifications Dropdown -->
          <div x-show="showNotifications" x-transition.opacity x-transition:enter.duration.200ms
            x-transition:leave.duration.150ms x-cloak
            class="absolute top-14 right-0 w-80 sm:w-96 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-outline-variant/10 z-[100] overflow-hidden flex flex-col">

            <!-- Header -->
            <div
              class="p-4 border-b border-outline-variant/10 flex justify-between items-center bg-surface-container-lowest">
              <h3 class="font-bold text-on-surface text-sm">Notifications</h3>
              <span class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-0.5 rounded-full">2
                New</span>
            </div>

            <!-- List -->
            <div class="max-h-80 overflow-y-auto">
              <!-- Unread Item 1 -->
              <div
                class="p-4 border-b border-outline-variant/10 hover:bg-surface-container-lowest transition-colors cursor-pointer bg-primary/5">
                <div class="flex items-start gap-3">
                  <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 mt-1">
                    <span class="material-symbols-outlined text-on-primary text-sm">school</span>
                  </div>
                  <div class="flex-1">
                    <p class="text-sm text-on-surface font-medium leading-tight">Course
                      completed:
                      Advanced React Patterns</p>
                    <p class="text-[11px] text-on-surface-variant mt-1">2 hours ago</p>
                  </div>
                  <div class="w-2 h-2 bg-primary rounded-full mt-1.5 flex-shrink-0"></div>
                </div>
              </div>

              <!-- Unread Item 2 -->
              <div
                class="p-4 border-b border-outline-variant/10 hover:bg-surface-container-lowest transition-colors cursor-pointer bg-primary/5">
                <div class="flex items-start gap-3">
                  <div
                    class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center flex-shrink-0 mt-1">
                    <span class="material-symbols-outlined text-on-secondary-container text-sm">forum</span>
                  </div>
                  <div class="flex-1">
                    <p class="text-sm text-on-surface font-medium leading-tight">Alex replied to
                      your discussion in "Next.js routing"</p>
                    <p class="text-[11px] text-on-surface-variant mt-1">5 hours ago</p>
                  </div>
                  <div class="w-2 h-2 bg-primary rounded-full mt-1.5 flex-shrink-0"></div>
                </div>
              </div>

              <!-- Read Item -->
              <div class="p-4 hover:bg-surface-container-lowest transition-colors cursor-pointer">
                <div class="flex items-start gap-3 opacity-70">
                  <div
                    class="w-8 h-8 rounded-full bg-tertiary-container flex items-center justify-center flex-shrink-0 mt-1">
                    <span class="material-symbols-outlined text-on-tertiary-container text-sm">military_tech</span>
                  </div>
                  <div class="flex-1">
                    <p class="text-sm text-on-surface font-medium leading-tight">You earned the
                      "Fast Learner" badge!</p>
                    <p class="text-[11px] text-on-surface-variant mt-1">1 day ago</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Footer Actions -->
            <div class="p-2 border-t border-outline-variant/10 bg-surface-container-lowest">
              <button
                class="w-full py-2.5 text-sm text-primary font-bold hover:bg-primary/5 rounded-lg transition-colors flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[18px]">done_all</span>
                Mark all as read
              </button>
            </div>
          </div>
        </div>
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
  <!-- Main Workspace -->
  <main class="flex-1 w-full grid grid-cols-1 lg:grid-cols-12 overflow-hidden">
    <!-- Left Column: Instructions (Made More Prominent) -->
    <section
      class="lg:col-span-5 xl:col-span-4 bg-[#D0E3E6] dark:bg-slate-950 border-r border-outline-variant/10 p-8 lg:p-10 overflow-y-auto max-h-[calc(100vh-64px)] scrollbar-hide">
      <div class="max-w-2xl mx-auto lg:mx-0 space-y-10">
        <div class="space-y-6">
          <div class="flex flex-wrap gap-2">
            <span
              class="bg-tertiary-fixed text-on-tertiary-fixed px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">{{ $exercice->difficulty }}</span>
            <span
              class="bg-surface-container-highest text-on-surface-variant px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest flex items-center gap-1">
              <span class="material-symbols-outlined text-[14px]" data-icon="schedule">schedule</span> {{ $exercice->estimated_time }} Min
            </span>
          </div>
          <h1 class="text-5xl font-black text-on-surface leading-tight tracking-tighter">{{ $exercice->title }}</h1>
        </div>
        <div class="prose prose-slate prose-lg max-w-none text-on-surface-variant">
          <p class="text-xl font-medium text-on-surface leading-relaxed">{{ $exercice->description }}</p>
          <div class="bg-surface-container-low p-6 rounded-2xl mt-10 border border-primary/5 space-y-3">
            <h3 class="text-sm font-bold text-on-surface flex items-center gap-2">
              <span class="material-symbols-outlined text-primary" data-icon="lightbulb">lightbulb</span> Pro Tip
            </h3>
            <p class="text-sm italic leading-normal">Use
              <code>grid-template-columns: repeat(auto-fit, minmax(250px, 1fr))</code> to create a truly intrinsic
              layout that responds to the container size rather than the viewport.</p>
          </div>
        </div>
        <div class="pt-10 border-t border-outline-variant/10">
          <h2 class="text-2xl font-bold mb-8 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary" data-icon="fact_check">fact_check</span> Submission
            Checklist
          </h2>
          <ul class="space-y-5">
            <li class="flex items-start gap-4 group">
              <div
                class="mt-1 w-6 h-6 rounded-lg border-2 border-primary/30 flex items-center justify-center group-hover:border-primary transition-colors cursor-pointer shrink-0">
                <span class="material-symbols-outlined text-[18px] text-primary opacity-0 group-hover:opacity-100"
                  data-icon="check">check</span>
              </div>
              <span class="text-base font-medium">Implement a 3-column desktop layout</span>
            </li>
            <li class="flex items-start gap-4 group">
              <div
                class="mt-1 w-6 h-6 rounded-lg border-2 border-primary/30 flex items-center justify-center group-hover:border-primary transition-colors cursor-pointer shrink-0">
                <span class="material-symbols-outlined text-[18px] text-primary opacity-0 group-hover:opacity-100"
                  data-icon="check">check</span>
              </div>
              <span class="text-base font-medium">Define gap properties using `clamp()`</span>
            </li>
            <li class="flex items-start gap-4 group">
              <div
                class="mt-1 w-6 h-6 rounded-lg border-2 border-primary/30 flex items-center justify-center group-hover:border-primary transition-colors cursor-pointer shrink-0">
                <span class="material-symbols-outlined text-[18px] text-primary opacity-0 group-hover:opacity-100"
                  data-icon="check">check</span>
              </div>
              <span class="text-base font-medium">Use `grid-area` for semantic naming</span>
            </li>
            <li class="flex items-start gap-4 group">
              <div
                class="mt-1 w-6 h-6 rounded-lg border-2 border-primary/30 flex items-center justify-center group-hover:border-primary transition-colors cursor-pointer shrink-0">
                <span class="material-symbols-outlined text-[18px] text-primary opacity-0 group-hover:opacity-100"
                  data-icon="check">check</span>
              </div>
              <span class="text-base font-medium">Ensure overflow safety on grid items</span>
            </li>
          </ul>
        </div>
        <!-- Upgraded Pro CTA in sidebar replacement -->
        <div class="pt-8">
          <div
            class="bg-gradient-to-br from-primary/5 to-primary-container/20 p-6 rounded-2xl border border-primary/10">
            <h4 class="font-bold text-on-surface mb-2">Need more challenges?</h4>
            <p class="text-xs text-on-surface-variant mb-4 leading-relaxed">Unlock 500+ advanced algorithm and system
              design exercises with Kinetic Pro.</p>
            <button
              class="w-full py-3 bg-primary text-on-primary rounded-xl font-bold text-sm shadow-lg shadow-primary/20 hover:brightness-110 transition-all">
              Upgrade to Pro
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- Right Column: Code Editor -->
    <section x-data="{ 
          activeIndex: 0,
          showOverlay: false,
          overlayType: 'add',
          tempFileName: '',
          deleteIndex: null,
          files: @js($exercice->files ?? [
              ['name' => 'index.html', 'content' => ''],
              ['name' => 'styles.css', 'content' => ''],
              ['name' => 'main.js', 'content' => '']
          ]),
          get lines() { 
              return (this.files[this.activeIndex].content || '').split('\n').length 
          },
          openAddOverlay() {
              this.overlayType = 'add';
              this.tempFileName = 'new_file.js';
              this.showOverlay = true;
              setTimeout(() => this.$refs.fileNameInput && this.$refs.fileNameInput.focus(), 100);
          },
          openRenameOverlay(index) {
              this.overlayType = 'rename';
              this.activeIndex = index;
              this.tempFileName = this.files[index].name;
              this.showOverlay = true;
              setTimeout(() => this.$refs.fileNameInput && this.$refs.fileNameInput.focus(), 100);
          },
          confirmFileAction() {
              if (this.overlayType === 'delete') {
                  this.files.splice(this.deleteIndex, 1);
                  if (this.activeIndex >= this.files.length) this.activeIndex = this.files.length - 1;
                  this.showOverlay = false;
                  return;
              }

              const name = this.tempFileName.trim();
              if (!name) return;
              
              if (this.overlayType === 'add') {
                  this.files.push({ name: name, content: '' });
                  this.activeIndex = this.files.length - 1;
              } else {
                  this.files[this.activeIndex].name = name;
              }
              this.showOverlay = false;
          },
          openDeleteOverlay(index) {
              if (this.files.length > 1) {
                  this.overlayType = 'delete';
                  this.deleteIndex = index;
                  this.showOverlay = true;
              }
          }
      }" class="lg:col-span-7 xl:col-span-8 bg-inverse-surface flex flex-col h-[calc(100vh-64px)] relative">
      <!-- Editor Tabs -->
      <div class="flex items-center px-4 bg-[#1e2224] h-12 shrink-0 overflow-x-auto no-scrollbar">
        <div class="flex gap-1 h-full items-center">
          <template x-for="(file, index) in files" :key="index">
            <button
              @click="activeIndex = index"
              @dblclick="openRenameOverlay(index)"
              :class="activeIndex === index ? 'bg-[#2c2f31] text-cyan-400 border-t-2 border-cyan-500' : 'text-slate-400 hover:bg-[#2c2f31]/50'"
              class="px-6 h-full flex items-center gap-2 font-mono text-xs transition-colors shrink-0 group relative">
              <span class="material-symbols-outlined text-[16px]" x-text="file.name.endsWith('.html') ? 'html' : (file.name.endsWith('.css') ? 'css' : 'javascript')"></span>
              <span x-text="file.name"></span>
              <span @click.stop="openDeleteOverlay(index)" class="material-symbols-outlined text-[12px] ml-2 opacity-0 group-hover:opacity-100 hover:text-red-400 transition-opacity">close</span>
            </button>
          </template>
          
          <button @click="openAddOverlay()" class="p-2 text-slate-500 hover:text-cyan-400 transition-colors ml-2" title="Add New File">
            <span class="material-symbols-outlined">add</span>
          </button>
        </div>
        <div class="ml-auto flex items-center gap-4 text-slate-500">
          <span class="text-[10px] uppercase font-bold tracking-widest">UTF-8</span>
          <span class="material-symbols-outlined text-[18px] cursor-pointer hover:text-white transition-colors"
            data-icon="settings">settings</span>
        </div>
      </div>
      <!-- Main Code Area -->
      <div class="flex-1 flex overflow-hidden bg-[#1a1d1e] relative">
        <!-- Professional File Name Overlay -->
        <div x-show="showOverlay" x-cloak 
             class="absolute inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm px-6"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100">
            <div class="bg-[#2c2f31] w-full max-w-md p-8 rounded-2xl shadow-2xl border border-white/10" @click.away="showOverlay = false">
                <template x-if="overlayType !== 'delete'">
                    <div>
                        <h3 class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-6" x-text="overlayType === 'add' ? 'New File' : 'Rename File'"></h3>
                        <div class="relative">
                            <input type="text" 
                                x-ref="fileNameInput"
                                x-model="tempFileName" 
                                @keydown.enter="confirmFileAction()"
                                @keydown.escape="showOverlay = false"
                                class="w-full bg-[#1a1d1e] border-transparent rounded-xl p-4 text-slate-200 font-mono focus:ring-2 focus:ring-cyan-500 transition-all outline-none"
                                placeholder="filename.js">
                            <div class="mt-8 flex justify-end gap-4">
                                <button @click="showOverlay = false" class="px-6 py-2.5 text-xs font-bold text-slate-500 hover:text-slate-300 transition-colors uppercase tracking-widest">Cancel</button>
                                <button @click="confirmFileAction()" class="px-8 py-2.5 bg-cyan-600 hover:bg-cyan-500 text-white text-xs font-bold rounded-xl transition-all shadow-lg shadow-cyan-900/20 uppercase tracking-widest">Confirm</button>
                            </div>
                        </div>
                    </div>
                </template>
                
                <template x-if="overlayType === 'delete'">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-red-500/10 text-red-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="material-symbols-outlined text-3xl">delete_forever</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-200 mb-2">Delete File?</h3>
                        <p class="text-slate-400 text-sm mb-8">Are you sure you want to delete <span class="text-slate-200 font-mono" x-text="files[deleteIndex].name"></span>? This action cannot be undone.</p>
                        <div class="flex gap-4">
                            <button @click="showOverlay = false" class="flex-1 px-6 py-3 bg-white/5 hover:bg-white/10 text-slate-300 text-xs font-bold rounded-xl transition-all uppercase tracking-widest">Cancel</button>
                            <button @click="confirmFileAction()" class="flex-1 px-6 py-3 bg-red-600 hover:bg-red-500 text-white text-xs font-bold rounded-xl transition-all shadow-lg shadow-red-900/20 uppercase tracking-widest">Delete</button>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <div class="flex flex-1">
          <div class="w-12 text-slate-600 text-right pr-6 select-none border-r border-slate-800 mr-6 font-mono text-base leading-relaxed py-8">
            <template x-for="i in lines" :key="i">
              <div x-text="i"></div>
            </template>
          </div>
          <textarea 
            x-model="files[activeIndex].content"
            @keydown.tab.prevent="
                const start = $el.selectionStart;
                const end = $el.selectionEnd;
                $el.value = $el.value.substring(0, start) + '\t' + $el.value.substring(end);
                $el.selectionStart = $el.selectionEnd = start + 1;
                files[activeIndex].content = $el.value;
            "
            class="flex-1 bg-transparent border-none focus:ring-0 text-slate-300 font-mono text-base leading-relaxed py-8 pr-8 resize-none outline-none overflow-y-auto custom-scrollbar"
            spellcheck="false"
          ></textarea>
        </div>
      </div>
      <!-- Console / Output Area -->
      <div class="h-56 border-t border-slate-800 bg-[#121415] p-6 font-mono text-xs overflow-hidden shrink-0">
        <div class="flex items-center justify-between mb-4 border-b border-slate-800 pb-3">
          <div class="flex items-center gap-3">
            <span class="text-slate-500 uppercase tracking-widest font-bold">Terminal</span>
            <span class="text-slate-700">/</span>
            <span class="text-slate-500 uppercase tracking-widest font-bold">Output</span>
          </div>
          <span class="text-cyan-500 flex items-center gap-2">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
            </span>
            System Ready
          </span>
        </div>
        <div class="space-y-1.5">
          <p class="text-slate-500">[14:22:01] <span class="text-green-400">Compiling styles...</span></p>
          <p class="text-slate-500">[14:22:02] <span class="text-green-400">Success: Grid structure validated.</span>
          </p>
          <p class="text-slate-300">&gt; Listening for changes in index.html...</p>
          <div class="flex gap-2 mt-4">
            <span class="text-slate-500">$</span>
            <div class="w-2 h-4 bg-cyan-500/50 animate-pulse"></div>
          </div>
        </div>
      </div>
      <!-- Bottom Action Bar -->
      <div class="h-20 bg-inverse-surface border-t border-slate-800 px-8 flex items-center justify-between shrink-0">
        <div class="flex items-center gap-6">
          <div class="flex items-center gap-2 text-slate-400 hover:text-white cursor-pointer transition-colors group">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform"
              data-icon="replay">replay</span>
            <span class="text-xs font-bold uppercase tracking-wider">Reset</span>
          </div>
          <div class="flex items-center gap-2 text-slate-400 hover:text-white cursor-pointer transition-colors group">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform"
              data-icon="visibility">visibility</span>
            <span class="text-xs font-bold uppercase tracking-wider">Preview</span>
          </div>
        </div>
        <div class="flex items-center gap-4">
          <button
            class="px-8 py-3 bg-secondary text-on-secondary font-bold text-sm rounded-xl transition-all hover:bg-secondary-dim active:scale-95">
            Run Code
          </button>
          <form method="POST" action="{{ route('exercise.complete', $exercice->id) }}">
            @csrf
            <button type="submit"
              class="px-10 py-3 bg-gradient-to-r from-primary to-primary-container text-on-primary font-bold text-sm rounded-xl transition-all hover:shadow-[0_0_20px_rgba(58,223,250,0.4)] active:scale-95">
              Mark as Completed
            </button>
          </form>
        </div>
      </div>
    </section>
  </main>
  <!-- Floating Help Button -->
  <button
    class="fixed bottom-24 right-8 w-14 h-14 bg-surface-container-lowest text-primary rounded-full shadow-[0_10px_40px_rgba(0,101,115,0.15)] flex items-center justify-center hover:scale-110 transition-all z-50 border border-primary/10">
    <span class="material-symbols-outlined text-[28px]" data-icon="support_agent">support_agent</span>
  </button>
</body>

</html>