<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $group->name }} | CodeMentor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#006573", "surface-container-low": "#eef1f3",
                        "surface-dim": "#d0d5d8", "primary-fixed": "#3adffa",
                        "outline": "#747779", "error": "#b31b25",
                        "surface-container-lowest": "#ffffff", "on-error": "#ffefee",
                        "tertiary": "#005ab3", "secondary": "#515c70",
                        "on-primary-container": "#004b56", "background": "#f5f7f9",
                        "on-secondary-container": "#475266", "on-primary": "#daf8ff",
                        "tertiary-container": "#84b1ff", "outline-variant": "#abadaf",
                        "error-container": "#fb5151", "surface-container-high": "#dfe3e6",
                        "on-surface-variant": "#595c5e", "on-surface": "#2c2f31",
                        "surface": "#f5f7f9", "surface-container": "#e5e9eb",
                        "secondary-fixed": "#d8e3fb", "primary-container": "#3adffa",
                        "inverse-surface": "#0b0f10", "on-background": "#2c2f31",
                        "surface-container-highest": "#d9dde0", "surface-bright": "#f5f7f9",
                        "secondary-container": "#d8e3fb", "on-secondary": "#eff2ff",
                        "primary-dim": "#005865", "tertiary-fixed": "#84b1ff",
                        "on-tertiary-container": "#003064", "on-tertiary-fixed": "#001737",
                        "secondary-fixed-dim": "#cad5ed", "kinetic-cyan": "#30D4ED"
                    },
                    fontFamily: { "headline": ["Space Grotesk"], "body": ["Inter"], "label": ["Inter"] },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4 { font-family: 'Space Grotesk', sans-serif; }
        .kinetic-gradient { background: linear-gradient(135deg, #006573 0%, #3adffa 100%); }
    </style>
</head>
<body class="bg-[#D0E3E6] text-on-background min-h-screen flex flex-col">

    {{-- ── Top Nav ──────────────────────────────────────────────────────────── --}}
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-2 w-full mx-auto">
            <div class="flex items-center w-[20%]">
                <span class="w-[75%]"><a href="{{ url('/') }}"><img class="w-[100%]" src="{{ asset('img/logo.png') }}" alt=""></a></span>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-slate-500 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold" href="{{ url('/dashboard') }}">Dashboard</a>
                <a class="text-cyan-600 font-bold" href="{{ url('/community') }}">Community</a>
                <a class="text-slate-500 hover:bg-[#eef1f3] px-3 py-1 rounded-lg transition-colors font-bold" href="{{ url('/contact') }}">Contact</a>
            </nav>
            <div class="flex items-center gap-4">
                <div class="relative group/avatar">
                    <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center overflow-hidden border-2 border-white shadow-sm cursor-pointer">
                        <a href="{{ url('profile') }}" class="block w-full h-full">
                            <img alt="avatar" class="w-full h-full object-cover"
                                src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name).'&background=4F8EF7&color=fff' }}" />
                        </a>
                    </div>
                    <div class="absolute right-0 top-12 w-56 bg-white rounded-2xl shadow-2xl border border-outline-variant/20 opacity-0 invisible group-hover/avatar:opacity-100 group-hover/avatar:visible transition-all duration-200 z-[999]">
                        <div class="p-3 border-b border-outline-variant/10">
                            <p class="text-xs font-bold text-on-surface truncate">{{ auth()->user()->name }}</p>
                            <p class="text-[10px] text-outline truncate">{{ auth()->user()->email }}</p>
                        </div>
                        <div class="p-2">
                            <a href="{{ url('profile') }}" class="flex items-center gap-2 px-3 py-2 rounded-xl text-sm text-on-surface hover:bg-surface-container transition-colors">
                                <span class="material-symbols-outlined text-base">person</span><span>Mon profil</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2 px-3 py-2 rounded-xl text-sm text-error hover:bg-red-50 transition-colors">
                                    <span class="material-symbols-outlined text-base">logout</span><span>Se deconnecter</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- ── Flash Messages ───────────────────────────────────────────────────── --}}
    @if(session('group_created'))
        <div x-data="{ showModal: true }" x-show="showModal" class="fixed inset-0 z-[100] flex items-center justify-center">
            <!-- Backdrop -->
            <div x-show="showModal" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm"></div>
            
            <!-- Modal content -->
            <div x-show="showModal" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-90 translate-y-4"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                 x-transition:leave-end="opacity-0 scale-90 translate-y-4"
                 class="relative bg-white rounded-3xl shadow-2xl p-8 max-w-sm w-full mx-4 text-center border border-slate-100 z-10 flex flex-col items-center">
                
                <div class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center mb-5 text-emerald-600 shadow-inner">
                    <span class="material-symbols-outlined text-4xl">task_alt</span>
                </div>
                
                <h3 class="text-2xl font-bold text-slate-800 mb-2">Group Created!</h3>
                <p class="text-slate-500 mb-8">{{ session('group_created') }}</p>
                
                <button @click="showModal = false" class="w-full bg-[#006573] hover:bg-[#004b56] text-white font-semibold py-3.5 px-6 rounded-2xl transition-all shadow-md hover:shadow-lg active:scale-95">
                    Done
                </button>
            </div>
        </div>
    @endif

    @if(session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition.duration.500ms
            class="mx-auto mt-4 max-w-4xl w-full px-4">
            <div class="bg-green-50 border border-green-200 text-green-800 rounded-xl px-4 py-3 text-sm font-medium flex items-center gap-2">
                <span class="material-symbols-outlined text-green-600 text-base">check_circle</span>
                {{ session('success') }}
            </div>
        </div>
    @endif
    @if(session('error'))
        <div class="mx-auto mt-4 max-w-4xl w-full px-4">
            <div class="bg-red-50 border border-red-200 text-red-800 rounded-xl px-4 py-3 text-sm font-medium flex items-center gap-2">
                <span class="material-symbols-outlined text-red-600 text-base">error</span>
                {{ session('error') }}
            </div>
        </div>
    @endif

    <main class="flex-1 max-w-6xl mx-auto w-full px-4 py-8 flex flex-col md:flex-row gap-6">

        {{-- ═══════════════════════════════════════════════════════════════════
             LEFT: Group info + Members + Admin Panel
        ════════════════════════════════════════════════════════════════════ --}}
        <aside class="w-full md:w-80 flex flex-col gap-5 shrink-0">

            {{-- Group Hero Card --}}
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-outline-variant/10">
                {{-- Group Cover Photo --}}
                <div class="h-32 w-full relative group/cover">
                    <img id="group_cover_img" 
                        src="{{ $group->cover_photo ?? 'https://picsum.photos/seed/'.$group->id.'/800/300' }}" 
                        alt="Group Cover" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    
                    @if($isAdmin)
                        <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover/cover:opacity-100 transition-opacity cursor-pointer group/pen"
                             onclick="document.getElementById('cover_upload_input').click()">
                            <div class="bg-white/20 backdrop-blur-md p-2.5 rounded-full border border-white/40 text-white shadow-2xl transition-transform group-hover/pen:scale-110">
                                <span class="material-symbols-outlined text-2xl">edit</span>
                            </div>
                            <span class="absolute bottom-2 right-2 text-[10px] text-white/70 font-bold uppercase tracking-wider">Change Cover</span>
                        </div>
                        <form id="cover_upload_form" action="{{ route('groups.updateCover', $group->id) }}" method="POST" enctype="multipart/form-data" class="hidden">
                            @csrf
                            <input type="file" name="cover_photo" id="cover_upload_input" accept="image/*" onchange="document.getElementById('cover_upload_form').submit()">
                        </form>
                    @endif
                </div>
                <div class="kinetic-gradient p-6 text-white relative -mt-16 mx-4 rounded-2xl shadow-lg border-2 border-white/20 backdrop-blur-sm">
                    <div class="relative z-10 flex items-center gap-4">
                        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center backdrop-blur-md border border-white/30 shrink-0">
                            <span class="material-symbols-outlined text-white text-3xl" style="font-variation-settings:'FILL' 1;">group</span>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold leading-tight">{{ $group->name }}</h1>
                            <p class="text-white/80 text-xs mt-1">{{ $group->members->count() }} member{{ $group->members->count() !== 1 ? 's' : '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <p class="text-sm text-on-surface-variant leading-relaxed">{{ $group->description ?? 'No description provided.' }}</p>
                    <div class="flex items-center gap-2 mt-3 pt-3 border-t border-outline-variant/10">
                        <img class="w-6 h-6 rounded-full object-cover"
                            src="{{ $group->admin?->photo ?? 'https://ui-avatars.com/api/?name='.urlencode($group->admin?->name ?? 'Admin').'&background=006573&color=fff' }}" alt="admin" />
                        <span class="text-xs text-on-surface-variant">Admin: <span class="font-bold text-on-surface">{{ $group->admin?->name ?? 'N/A' }}</span></span>
                        @if($isAdmin)
                            <span class="ml-auto text-[10px] bg-primary text-white px-2 py-0.5 rounded-full font-bold">YOU</span>
                        @endif
                    </div>
                </div>
                {{-- Join / Leave --}}
                <div class="px-5 pb-5">
                    @if($isAdmin)
                        <div class="w-full py-2 bg-primary/10 text-primary text-sm font-bold rounded-xl text-center">
                            <span class="material-symbols-outlined text-sm align-middle">admin_panel_settings</span> You are the Admin
                        </div>
                    @elseif($isMember)
                        <form method="POST" action="{{ route('groups.leave', $group->id) }}">
                            @csrf
                            <button type="submit" class="w-full py-2.5 bg-red-50 text-error text-sm font-bold rounded-xl hover:bg-red-100 transition-colors flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">logout</span> Leave Group
                            </button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('groups.join', $group->id) }}">
                            @csrf
                            <button type="submit" class="w-full kinetic-gradient text-white py-2.5 text-sm font-bold rounded-xl hover:opacity-90 transition-opacity flex items-center justify-center gap-2 shadow-lg shadow-primary/20">
                                <span class="material-symbols-outlined text-sm">group_add</span> Join Group
                            </button>
                        </form>
                    @endif
                </div>
            </div>

            {{-- Members List --}}
            <div class="bg-white rounded-2xl shadow-sm border border-outline-variant/10 p-5">
                <h3 class="font-bold text-on-surface mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-base">people</span>
                    Members <span class="ml-auto text-xs text-on-surface-variant font-normal">{{ $group->members->count() }}</span>
                </h3>
                <div class="space-y-3 max-h-64 overflow-y-auto pr-1">
                    @foreach($group->members as $member)
                        <div class="flex items-center gap-3">
                            <a href="{{ route('other_profile', $member->id) }}" class="shrink-0">
                                <img class="w-8 h-8 rounded-full object-cover border border-outline-variant/10 hover:border-primary transition-colors"
                                    src="{{ $member->photo ?? 'https://ui-avatars.com/api/?name='.urlencode($member->name).'&background=4F8EF7&color=fff' }}"
                                    alt="{{ $member->name }}" />
                            </a>
                            <div class="flex-1 min-w-0">
                                <a href="{{ route('other_profile', $member->id) }}" class="text-sm font-medium text-on-surface truncate hover:text-primary transition-colors">{{ $member->name }}</a>
                                @if($member->id === $group->admin_id)
                                    <span class="text-[10px] text-primary font-bold">Admin</span>
                                @endif
                            </div>
                            @if($isAdmin && $member->id !== $group->admin_id)
                                <form method="POST" action="{{ route('groups.members.remove', [$group->id, $member->id]) }}">
                                    @csrf @method('DELETE')
                                    <button type="submit" title="Remove member"
                                        class="w-7 h-7 flex items-center justify-center rounded-full hover:bg-red-50 text-on-surface-variant hover:text-error transition-colors"
                                        onclick="return confirm('Remove {{ $member->name }} from this group?')">
                                        <span class="material-symbols-outlined text-[16px]">person_remove</span>
                                    </button>
                                </form>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Member: Invite Member Panel --}}
            @if($isMember && $nonMembers->count() > 0)
                <div class="bg-white rounded-2xl shadow-sm border border-primary/20 p-5">
                    <h3 class="font-bold text-on-surface mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-base">person_add</span>
                        Invite Member
                    </h3>
                    <form method="POST" action="{{ route('groups.members.invite', $group->id) }}" class="flex flex-col gap-3">
                        @csrf
                        <select name="user_id" required
                            class="w-full bg-surface-container-low border-none rounded-xl p-3 text-sm text-on-surface focus:ring-2 focus:ring-primary/20">
                            <option value="">Select a user…</option>
                            @foreach($nonMembers as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="w-full bg-primary text-white py-2.5 rounded-xl text-sm font-bold hover:bg-primary-dim transition-colors">
                            Send Invitation
                        </button>
                    </form>
                </div>
            @endif
        </aside>

        {{-- ═══════════════════════════════════════════════════════════════════
             RIGHT: Discussions Feed + Post Discussion
        ════════════════════════════════════════════════════════════════════ --}}
        <section class="flex-1 flex flex-col gap-6">

            {{-- Post Discussion (members & admin only) --}}
            @if($isMember || $isAdmin)
                <div class="bg-white rounded-2xl shadow-sm border border-outline-variant/10 p-6">
                    <h3 class="font-bold text-on-surface mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-base">edit_note</span>
                        Post a Discussion
                    </h3>
                    <form method="POST" action="{{ route('groups.discussions.store', $group->id) }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <input name="title" required placeholder="Discussion title…"
                            class="w-full bg-surface-container-low border-none rounded-xl p-3 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all font-headline font-medium" />
                        <textarea name="content" rows="3" required placeholder="Share your thoughts with the group…"
                            class="w-full bg-surface-container-low border-none rounded-xl p-3 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all resize-none"></textarea>
                        
                        <div id="attachment_preview" class="hidden flex items-center gap-2 p-2 bg-primary/5 rounded-xl border border-primary/10">
                            <span class="material-symbols-outlined text-primary text-sm">attach_file</span>
                            <span id="attachment_filename" class="text-xs text-primary font-medium truncate flex-1"></span>
                            <button type="button" onclick="clearAttachment()" class="text-error hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-sm">close</span>
                            </button>
                        </div>

                        <input type="file" name="attachment" id="post_attachment" class="hidden" onchange="updateAttachmentName(this)">

                        <div class="flex justify-between items-center">
                            <button type="button" onclick="document.getElementById('post_attachment').click()" class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-xl">attach_file</span>
                                <span class="text-xs font-bold">Add Photo/Video/PDF</span>
                            </button>
                            <button type="submit" class="kinetic-gradient text-white px-6 py-2.5 rounded-xl text-sm font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-opacity flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">send</span> Post
                            </button>
                        </div>
                    </form>
                </div>
            @endif

            {{-- Discussions Feed --}}
            <div class="space-y-5">
                <h3 class="font-headline font-bold text-xl text-on-surface flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">forum</span>
                    Discussions
                    <span class="ml-auto text-sm font-normal text-on-surface-variant">{{ $group->discussions->count() }} total</span>
                </h3>

                @forelse($group->discussions as $discussion)
                    <article class="bg-white rounded-2xl shadow-sm border border-outline-variant/10 p-6 group/disc">
                        {{-- Discussion Header --}}
                        <div class="flex items-start gap-3 mb-3">
                            <a href="{{ route('other_profile', $discussion->user?->id ?? 0) }}" class="shrink-0">
                                <img class="w-10 h-10 rounded-xl object-cover border border-outline-variant/10 hover:border-primary transition-colors"
                                    src="{{ $discussion->user?->photo ?? 'https://ui-avatars.com/api/?name='.urlencode($discussion->user?->name ?? 'User').'&background=4F8EF7&color=fff' }}"
                                    alt="{{ $discussion->user?->name }}" />
                            </a>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 flex-wrap">
                                    <a href="{{ route('other_profile', $discussion->user?->id ?? 0) }}" class="font-bold text-sm text-on-surface hover:text-primary transition-colors">{{ $discussion->user?->name ?? 'Unknown' }}</a>
                                    <span class="text-[10px] bg-primary-container/20 text-on-primary-container px-2 py-0.5 rounded uppercase font-bold">{{ $discussion->category }}</span>
                                    <span class="text-xs text-on-surface-variant ml-auto">{{ $discussion->created_at->diffForHumans() }}</span>
                                </div>
                                <h4 class="font-headline font-semibold text-on-surface mt-1 group-hover/disc:text-primary transition-colors">{{ $discussion->title }}</h4>
                            </div>
                            {{-- Admin: remove discussion --}}
                            @if($isAdmin)
                                <form method="POST" action="{{ route('groups.discussions.remove', [$group->id, $discussion->id]) }}">
                                    @csrf @method('DELETE')
                                    <button type="submit" title="Remove discussion"
                                        class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-red-50 text-on-surface-variant hover:text-error transition-colors shrink-0"
                                        onclick="return confirm('Delete this discussion and all its comments?')">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </form>
                            @endif
                        </div>

                        <p class="text-sm text-on-surface-variant leading-relaxed mb-4 line-clamp-3">{{ $discussion->content }}</p>

                        @if($discussion->attachment_url)
                            <div class="mb-4 rounded-xl overflow-hidden border border-outline-variant/10 shadow-sm">
                                @if($discussion->attachment_type === 'image')
                                    <img src="{{ $discussion->attachment_url }}" class="w-full max-h-96 object-cover hover:scale-[1.01] transition-transform cursor-pointer" onclick="window.open(this.src)">
                                @elseif($discussion->attachment_type === 'video')
                                    <video src="{{ $discussion->attachment_url }}" controls class="w-full bg-black"></video>
                                @elseif($discussion->attachment_type === 'pdf')
                                    <div class="flex items-center gap-4 p-4 bg-surface-container-low">
                                        <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center">
                                            <span class="material-symbols-outlined text-2xl">picture_as_pdf</span>
                                        </div>
                                        <div class="flex-1 truncate">
                                            <p class="text-sm font-bold text-on-surface truncate">{{ $discussion->attachment_name }}</p>
                                            <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">PDF Document</p>
                                        </div>
                                        <a href="{{ $discussion->attachment_url }}" target="_blank" class="px-4 py-2 bg-primary text-white text-[10px] font-bold rounded-lg uppercase tracking-wider hover:bg-primary-dim transition-colors">View</a>
                                    </div>
                                @else
                                    <div class="flex items-center gap-4 p-4 bg-surface-container-low">
                                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
                                            <span class="material-symbols-outlined text-2xl">description</span>
                                        </div>
                                        <div class="flex-1 truncate">
                                            <p class="text-sm font-bold text-on-surface truncate">{{ $discussion->attachment_name }}</p>
                                            <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">File Attachment</p>
                                        </div>
                                        <a href="{{ $discussion->attachment_url }}" download class="px-4 py-2 bg-primary text-white text-[10px] font-bold rounded-lg uppercase tracking-wider hover:bg-primary-dim transition-colors">Download</a>
                                    </div>
                                @endif
                            </div>
                        @endif

                        {{-- Comments --}}
                        @if($discussion->comments->count() > 0)
                            <div class="border-t border-outline-variant/10 pt-4 space-y-3">
                                <p class="text-[11px] font-bold text-on-surface-variant uppercase tracking-wider">
                                    {{ $discussion->comments->count() }} Comment{{ $discussion->comments->count() !== 1 ? 's' : '' }}
                                </p>
                                @foreach($discussion->comments->take(3) as $comment)
                                    <div class="flex items-start gap-2 group/comment">
                                        <a href="{{ route('other_profile', $comment->user?->id ?? 0) }}" class="shrink-0">
                                            <img class="w-7 h-7 rounded-full object-cover border border-outline-variant/10 hover:border-primary transition-colors"
                                                src="{{ $comment->user?->photo ?? 'https://ui-avatars.com/api/?name='.urlencode($comment->user?->name ?? 'User').'&background=515c70&color=fff' }}"
                                                alt="{{ $comment->user?->name }}" />
                                        </a>
                                        <div class="flex-1 bg-surface-container-low rounded-xl px-3 py-2">
                                            <a href="{{ route('other_profile', $comment->user?->id ?? 0) }}" class="text-xs font-bold text-on-surface hover:text-primary transition-colors">{{ $comment->user?->name ?? 'Unknown' }}</a>
                                            <p class="text-xs text-on-surface-variant mt-0.5">{{ $comment->content }}</p>
                                            
                                            <div class="flex items-center gap-3 mt-2">
                                                <button onclick="reactToComment({{ $comment->id }}, this)" 
                                                    class="flex items-center gap-1 text-[10px] font-bold transition-colors {{ $comment->userReaction ? 'text-primary' : 'text-on-surface-variant hover:text-primary' }}">
                                                    <span class="material-symbols-outlined text-sm" style="{{ $comment->userReaction ? 'font-variation-settings: \'FILL\' 1;' : '' }}">thumb_up</span>
                                                    <span class="reaction-count">{{ $comment->reactions->count() }}</span>
                                                </button>
                                            </div>
                                        </div>
                                        {{-- Admin: remove comment --}}
                                        @if($isAdmin)
                                            <form method="POST" action="{{ route('groups.comments.remove', [$group->id, $comment->id]) }}">
                                                @csrf @method('DELETE')
                                                <button type="submit" title="Remove comment"
                                                    class="w-7 h-7 flex items-center justify-center rounded-full hover:bg-red-50 text-on-surface-variant hover:text-error transition-colors opacity-0 group-hover/comment:opacity-100"
                                                    onclick="return confirm('Delete this comment?')">
                                                    <span class="material-symbols-outlined text-[16px]">close</span>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                @endforeach
                                @if($discussion->comments->count() > 3)
                                    <p class="text-xs text-primary font-bold pl-9">+ {{ $discussion->comments->count() - 3 }} more comment{{ $discussion->comments->count() - 3 !== 1 ? 's' : '' }}</p>
                                @endif
                            </div>
                        @endif

                        {{-- Add comment (members only) --}}
                        @if($isMember || $isAdmin)
                            <form method="POST" action="{{ route('comments.store', $discussion->id) }}" class="flex items-center gap-2 mt-4 pt-4 border-t border-outline-variant/10">
                                @csrf
                                <img class="w-7 h-7 rounded-full object-cover shrink-0"
                                    src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name).'&background=4F8EF7&color=fff' }}"
                                    alt="me" />
                                <input name="content" placeholder="Write a comment…" required
                                    class="flex-1 bg-surface-container-low border-none rounded-xl px-3 py-2 text-xs text-on-surface placeholder:text-on-surface-variant/50 focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all" />
                                <button type="submit" class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center hover:bg-primary-dim transition-colors shrink-0">
                                    <span class="material-symbols-outlined text-[16px]">send</span>
                                </button>
                            </form>
                        @endif
                    </article>
                @empty
                    <div class="bg-white rounded-2xl border border-dashed border-outline-variant/30 p-12 text-center">
                        <span class="material-symbols-outlined text-4xl text-outline mb-3 block">forum</span>
                        <p class="text-on-surface-variant text-sm">No discussions yet.</p>
                        @if($isMember || $isAdmin)
                            <p class="text-xs text-primary font-bold mt-1">Be the first to start one!</p>
                        @else
                            <p class="text-xs text-on-surface-variant mt-1">Join the group to participate.</p>
                        @endif
                    </div>
                @endforelse
            </div>
        </section>
    </main>

    <div class="fixed bottom-6 right-6">
        <a href="{{ url('/community') }}"
            class="w-12 h-12 bg-white rounded-full shadow-xl flex items-center justify-center border border-outline-variant/20 hover:bg-surface-container-low transition-colors text-on-surface-variant hover:text-primary"
            title="Back to Community">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
    </div>

    <script>
        function updateAttachmentName(input) {
            const preview = document.getElementById('attachment_preview');
            const nameSpan = document.getElementById('attachment_filename');
            if (input.files && input.files[0]) {
                nameSpan.innerText = input.files[0].name;
                preview.classList.remove('hidden');
            } else {
                preview.classList.add('hidden');
            }
        }

        function clearAttachment() {
            const input = document.getElementById('post_attachment');
            input.value = '';
            document.getElementById('attachment_preview').classList.add('hidden');
        }

        async function reactToComment(id, btn) {
            try {
                const response = await fetch(`/comments/${id}/react`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({ type: 'like' })
                });
                
                const data = await response.json();
                if (data.status === 'success') {
                    const countSpan = btn.querySelector('.reaction-count');
                    const iconSpan = btn.querySelector('.material-symbols-outlined');
                    
                    countSpan.innerText = data.count;
                    
                    if (data.action === 'added' || data.action === 'updated') {
                        btn.classList.remove('text-on-surface-variant');
                        btn.classList.add('text-primary');
                        iconSpan.style.fontVariationSettings = "'FILL' 1";
                    } else {
                        btn.classList.remove('text-primary');
                        btn.classList.add('text-on-surface-variant');
                        iconSpan.style.fontVariationSettings = "'FILL' 0";
                    }
                }
            } catch (error) {
                console.error('Reaction error:', error);
            }
        }
    </script>
    @include('partials.ai_chat')
</body>
</html>