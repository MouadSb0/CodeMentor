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
  <!-- TopNavBar -->
  <header
    class="flex justify-between items-center px-8 h-16 w-full sticky top-0 z-50 bg-[#f5f7f9]/80 dark:bg-slate-950/80 backdrop-blur-xl shadow-[0_4px_20px_rgba(44,47,49,0.04)] font-['Inter'] tracking-tight">
    <div class="flex items-center gap-8">
      <span class="font-['Space_Grotesk'] text-2xl font-bold tracking-tighter text-slate-900 dark:text-white">Kinetic
        Lab</span>
      <nav class="hidden md:flex items-center gap-6">
        <a class="text-slate-500 dark:text-slate-400 font-medium hover:text-slate-900 dark:hover:text-white transition-colors"
          href="#">Curriculum</a>
        <a class="text-cyan-600 dark:text-cyan-400 font-bold border-b-2 border-cyan-500" href="#">Exercises</a>
        <a class="text-slate-500 dark:text-slate-400 font-medium hover:text-slate-900 dark:hover:text-white transition-colors"
          href="#">Community</a>
        <a class="text-slate-500 dark:text-slate-400 font-medium hover:text-slate-900 dark:hover:text-white transition-colors"
          href="#">Settings</a>
      </nav>
    </div>
    <div class="flex items-center gap-4">
      <button class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors rounded-full">
        <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
      </button>
      <button class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors rounded-full">
        <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
      </button>
      <div class="h-8 w-8 rounded-full overflow-hidden border border-outline-variant/20">
        <img alt="User profile"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuCR7lobt-Co20hVyghbX3qYhle-eq_t1s7Q5blg2El0zz8pxCbA0QGqYn7nxo2O8jIasM10xcJ5MsZxvfebmcDewHiGjAQiqHibAogNU3C28Yfy7iaUQXRru_8LN-qcbSuaydy5kAUhm3uC9A2cN-jTsDyO5RXNtMrIwkDxgyiIP_668NKKwdJpnlC3_t9ifemDUfpcssBMcscf_9yV0Ka0ctuJ6JcvWWl3DUjjQbd4aD_xPRyJZ58KtF7ajAvuPhD-YrwAcaWvx-Gj" />
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
          <button
            class="px-10 py-3 bg-gradient-to-r from-primary to-primary-container text-on-primary font-bold text-sm rounded-xl transition-all hover:shadow-[0_0_20px_rgba(58,223,250,0.4)] active:scale-95">
            Request Correction
          </button>
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