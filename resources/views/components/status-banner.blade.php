@props([
    'type' => 'info', // success, welcome, info, warning, error
    'title' => null,
    'dismissible' => true,
])

@php
    $types = [
        'success' => [
            'wrapper' => 'bg-emerald-50 dark:bg-emerald-950/60 border-emerald-200 dark:border-emerald-800 text-emerald-900 dark:text-emerald-100',
            'icon' => 'fa-solid fa-circle-check',
            'icon_box' => 'bg-emerald-100 dark:bg-emerald-900 text-emerald-600 dark:text-emerald-300',
            'badge' => 'Sukses',
        ],
        'welcome' => [
            'wrapper' => 'bg-gradient-to-r from-blue-50 via-indigo-50 to-purple-50 dark:from-blue-950/70 dark:via-indigo-950/70 dark:to-purple-950/70 border-blue-200 dark:border-blue-800 text-slate-900 dark:text-slate-100 shadow-sm',
            'icon' => 'fa-solid fa-sparkles',
            'icon_box' => 'bg-its-accent text-white shadow-md shadow-blue-500/30 animate-pulse',
            'badge' => 'Selamat Datang',
        ],
        'info' => [
            'wrapper' => 'bg-blue-50 dark:bg-blue-950/60 border-blue-200 dark:border-blue-800 text-blue-900 dark:text-blue-100',
            'icon' => 'fa-solid fa-circle-info',
            'icon_box' => 'bg-blue-100 dark:bg-blue-900 text-its-accent dark:text-blue-300',
            'badge' => 'Informasi',
        ],
        'warning' => [
            'wrapper' => 'bg-amber-50 dark:bg-amber-950/60 border-amber-200 dark:border-amber-800 text-amber-900 dark:text-amber-100',
            'icon' => 'fa-solid fa-triangle-exclamation',
            'icon_box' => 'bg-amber-100 dark:bg-amber-900 text-amber-600 dark:text-amber-300',
            'badge' => 'Perhatian',
        ],
        'error' => [
            'wrapper' => 'bg-rose-50 dark:bg-rose-950/60 border-rose-200 dark:border-rose-800 text-rose-900 dark:text-rose-100',
            'icon' => 'fa-solid fa-circle-xmark',
            'icon_box' => 'bg-rose-100 dark:bg-rose-900 text-rose-600 dark:text-rose-300',
            'badge' => 'Gagal',
        ],
    ];

    $config = $types[$type] ?? $types['info'];
@endphp

<div {{ $attributes->merge(['class' => 'rounded-2xl border p-4 sm:p-5 flex items-start justify-between gap-4 transition-all duration-300 ' . $config['wrapper']]) }} role="alert">
    <div class="flex items-start gap-3.5">
        <div class="w-9 h-9 rounded-xl {{ $config['icon_box'] }} flex items-center justify-center shrink-0 mt-0.5 text-sm">
            <i class="{{ $config['icon'] }}"></i>
        </div>
        <div class="space-y-1">
            <div class="flex items-center gap-2">
                <span class="text-[10px] font-black uppercase tracking-wider px-2 py-0.5 rounded-full bg-white/70 dark:bg-black/40 border border-current opacity-80">
                    {{ $config['badge'] }}
                </span>
                @if($title)
                    <h5 class="text-sm font-bold tracking-tight">
                        {{ $title }}
                    </h5>
                @endif
            </div>

            <div class="text-xs sm:text-sm leading-relaxed opacity-95">
                {{ $slot }}
            </div>
        </div>
    </div>

    @if($dismissible)
        <button type="button" onclick="this.closest('[role=alert]').remove()"
            class="text-current opacity-50 hover:opacity-100 transition p-1 text-xs shrink-0"
            aria-label="Tutup notifikasi">
            <i class="fa-solid fa-xmark text-sm"></i>
        </button>
    @endif
</div>
