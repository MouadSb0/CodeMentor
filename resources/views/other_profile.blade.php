<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $user->name }} | CodeMentor Profile</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-surface-variant": "#595c5e",
                        "primary": "#006573",
                        "primary-container": "#3adffa",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#eef1f3",
                        "on-surface": "#2c2f31",
                        "outline-variant": "#abadaf",
                    },
                    borderRadius: {
                        "xl": "0.75rem",
                        "2xl": "1.5rem"
                    },
                    fontFamily: {
                        "headline": ["Space Grotesk"],
                        "body": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f5f7f9; }
        .font-headline { font-family: 'Space Grotesk', sans-serif; }
        .kinetic-gradient { background: linear-gradient(135deg, #006573 0%, #004b56 100%); }
    </style>
</head>

<body class="text-on-surface bg-[#D0E3E6] antialiased overflow-x-hidden">
    <!-- TopAppBar -->
    <header class="w-full top-0 sticky z-50 bg-[#D0E3E6] shadow-[0px_9px_20px_rgba(44,47,49,0.04)]">
        <div class="flex justify-between items-center px-6 py-3 w-full mx-auto">
            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" class="h-8" alt="Logo"></a>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-slate-600 hover:text-primary font-bold" href="{{ url('dashboard') }}">Dashboard</a>
                <a class="text-primary font-bold" href="{{ url('community') }}">Community</a>
            </nav>
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-sm">
                    <a href="{{ url('profile') }}">
                        <img src="{{ auth()->user()->photo ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) }}" class="w-full h-full object-cover">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-8 pb-12 px-6 min-h-screen">
        <div class="max-w-6xl mx-auto space-y-8">
            <!-- User Header -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 bg-white rounded-2xl p-8 flex flex-col md:flex-row items-center md:items-end gap-8 relative overflow-hidden shadow-sm border border-outline-variant/10">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-32 h-32 rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                            <img src="{{ $user->photo ?? 'https://ui-avatars.com/api/?name='.urlencode($user->name).'&background=006573&color=fff' }}" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 border-4 border-white rounded-full"></div>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h1 class="text-4xl font-headline font-bold text-on-surface mb-1">{{ $user->name }}</h1>
                        <div class="flex flex-wrap items-center justify-center md:justify-start gap-3 mb-6">
                            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-full uppercase tracking-wider">{{ $user->role ?? 'Community Member' }}</span>
                            <span class="text-on-surface-variant text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">location_on</span> {{ $user->institution ?? 'Global Community' }}
                            </span>
                        </div>
                        <div class="flex gap-3">
                            @if($connectionStatus === 'none')
                                <form method="POST" action="{{ route('connect', $user->id) }}">
                                    @csrf
                                    <button type="submit" class="px-8 py-3 kinetic-gradient text-white font-bold rounded-xl shadow-lg active:scale-95 transition-all">Connect</button>
                                </form>
                            @elseif($connectionStatus === 'pending')
                                <button class="px-8 py-3 bg-surface-container-high text-on-surface-variant font-bold rounded-xl shadow-sm cursor-default flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">hourglass_empty</span>
                                    {{ $isRequester ? 'Request Sent' : 'Request Pending' }}
                                </button>
                            @elseif($connectionStatus === 'accepted')
                                <button class="px-8 py-3 bg-green-100 text-green-700 font-bold rounded-xl shadow-sm cursor-default flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">verified</span>
                                    Connected
                                </button>
                            @endif
                            <button class="p-3 bg-surface-container-low text-on-surface-variant rounded-xl hover:bg-surface-container-high transition-colors">
                                <span class="material-symbols-outlined">mail</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="kinetic-gradient text-white rounded-2xl p-8 flex flex-col justify-between shadow-xl">
                    <p class="text-white/60 text-xs font-bold uppercase tracking-widest mb-4">Platform Authority</p>
                    <div class="space-y-6">
                        <div class="flex justify-between items-end">
                            <span class="text-sm font-medium">Karma Points</span>
                            <span class="text-3xl font-headline font-bold">{{ number_format($user->points ?? 0) }}</span>
                        </div>
                        <div class="flex justify-between items-end">
                            <span class="text-sm font-medium">Groups</span>
                            <span class="text-3xl font-headline font-bold">{{ $user->memberGroups->count() }}</span>
                        </div>
                        <div class="flex justify-between items-end">
                            <span class="text-sm font-medium">Discussions</span>
                            <span class="text-3xl font-headline font-bold">{{ $user->discussions->count() }}</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bio & Skills -->
            <section class="grid grid-cols-1 lg:grid-cols-5 gap-6">
                <div class="lg:col-span-3 bg-white/60 backdrop-blur-md rounded-2xl p-8 border border-white/20">
                    <h2 class="text-xl font-headline font-semibold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">fingerprint</span> Bio
                    </h2>
                    <p class="text-on-surface-variant leading-relaxed">
                        {{ $user->bio ?? 'This user is keeping their journey a mystery for now.' }}
                    </p>
                    <div class="mt-8 pt-8 border-t border-outline-variant/10 flex gap-8">
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Specialization</p>
                            <p class="font-headline font-bold text-lg text-primary">{{ $user->specialization ?? 'Exploring' }}</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Member Since</p>
                            <p class="font-headline font-bold text-lg">{{ $user->created_at->format('M Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 bg-white rounded-2xl p-8 shadow-sm">
                    <h2 class="text-xl font-headline font-semibold mb-6">Technical Interests</h2>
                    <div class="flex flex-wrap gap-2">
                        @php $tags = ['React', 'Laravel', 'AI', 'Tailwind', 'Cloud']; @endphp
                        @foreach($tags as $tag)
                            <span class="px-4 py-2 bg-surface-container-low text-on-surface-variant rounded-xl text-xs font-semibold hover:bg-primary/10 hover:text-primary transition-colors cursor-default">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Activity Feed -->
            <section class="bg-white rounded-2xl p-8 shadow-sm">
                <h2 class="text-xl font-headline font-semibold mb-8">Recent Activity</h2>
                <div class="space-y-6">
                    @forelse($user->discussions->take(3) as $discussion)
                        <div class="flex gap-4 items-start pb-6 border-b border-outline-variant/5 last:border-0">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-lg">forum</span>
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Started a discussion: <span class="text-primary">{{ $discussion->title }}</span></p>
                                <p class="text-xs text-on-surface-variant mt-1">{{ $discussion->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    @empty
                        <p class="text-sm text-on-surface-variant italic">No recent activity to show.</p>
                    @endforelse
                </div>
            </section>
        </div>
    </main>

    @include('partials.ai_chat')
</body>
</html>