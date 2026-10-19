{{-- Dipakai: @include('partials.icon', ['nama' => 'panel']) --}}
<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @if ($nama === 'panel')
        <path d="M4 15 7 5h13l-3 10H4Z"/><path d="M5.5 10h13M10 5l-2 10M15 5l-2 10M11 15v4M7 19h8"/>
    @elseif ($nama === 'servis')
        <path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3.6 17.4a1.4 1.4 0 0 0 2 2l5.7-5.7a4 4 0 0 0 5.4-5.4l-2.5 2.5-2-.5-.5-2 2.5-2.5Z"/>
    @elseif ($nama === 'grafik')
        <path d="M4 20V4M4 20h16"/><path d="m7 15 4-4 3 3 5-6"/><path d="M15 8h4v4"/>
    @endif
</svg>