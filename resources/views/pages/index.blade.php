<?php
 
use App\Models\Episode;
use Illuminate\Support\Stringable;
use function Livewire\Volt\computed;
use function Livewire\Volt\state;
 
state(['episodes' => fn () => Episode::get()]);

?>

<x-layout>
    @volt
    <div class="rounded-xl border border-gray-200 bg-white shadow">
        <ul class="divide-y divide-gray-100">
            @foreach ($this->episodes as $episode)
            <li wire:key="{{ $episode->number }}"
                class="flex items-center justify-between gap-x-6 gap-y-3 px-6 py-4">
                <div>
                    <a href="/episodes/{{ $episode->number }}" class="transition hover:text-[#220BAB]" wire:navigate.hover>
                        <h2>
                            No. {{ $episode->number }} - {{ $episode->title }}
                        </h2>
                    </a>
                    <div class="mt-1 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm text-gray-500">
                        <p>
                            {{ $episode->released_at->format('M j, Y') }}
                        </p>
                        <p>
                            {{ $episode->duration }}
                        </p>
                    </div>
                </div>
                <button x-data x-on:click="$dispatch('play-episode', @js($episode))" type="button"
                    class="flex shrink-0 items-center gap-1 text-sm font-medium text-[#220BAB] transition hover:opacity-60">
                    <x-play-icon />
                    <span>Play</span>
                </button>
            </li>
            @endforeach
        </ul>
    </div>
    @endvolt
</x-layout>