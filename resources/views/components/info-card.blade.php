@props([
    'title' => null,
    'value' => null,
    'icon' => 'fa-solid fa-circle-info',
    'badge' => null,
    'color' => 'blue',
])

<div {{ $attributes->merge(['class' => 'flex items-start gap-4 group']) }}>
    <!-- Left Icon in soft light-blue rounded box -->
    <div class="w-10 h-10 rounded-xl bg-blue-50 text-its-accent dark:bg-blue-950/80 dark:text-blue-400 flex items-center justify-center text-base shrink-0 shadow-2xs group-hover:scale-105 transition-transform duration-200">
        <i class="{{ $icon }}"></i>
    </div>

    <!-- Right Label & Value -->
    <div class="min-w-0 flex-1">
        @if($title)
            <span class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 dark:text-slate-400 mb-0.5">
                {{ $title }}
            </span>
        @endif

        @if($value)
            <p class="text-sm sm:text-base font-bold text-slate-800 dark:text-white leading-snug">
                {{ $value }}
            </p>
        @endif

        @if($slot->isNotEmpty())
            {{ $slot }}
        @endif
    </div>
</div>
