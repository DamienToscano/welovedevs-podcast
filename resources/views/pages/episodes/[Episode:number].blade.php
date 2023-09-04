<?php
use Carbon\CarbonInterval;
use Illuminate\Support\Stringable;
use function Livewire\Volt\state;
 
state(['episode' => fn () => $episode]);

?>

<x-layout>
    @volt
    <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow">
        <div class="p-6">
            <div class="flex items-center justify-between gap-8">
                <div>
                    <h2 class="text-xl font-medium text-[#220BAB]">
                        No. {{ $episode->number }} -
                        {{ $episode->title }}
                    </h2>
                    <div class="mt-1 flex flex-col sm:flex-row sm:gap-3 text-sm text-gray-500">
                        <p>
                            {{ $episode->released_at->format('M j, Y') }}
                        </p>
                        <p>
                            {{ $episode->duration }}
                        </p>
                    </div>
                </div>
                <button x-on:click="$dispatch('play-episode', @js($episode))" type="button"
                    class="flex items-center gap-1 text-sm font-medium text-[#220BAB] transition hover:opacity-60">
                    <x-play-icon />
                    <span>Play</span>
                </button>
            </div>
            <div class="prose prose-sm mt-4">
                {!! $episode->notes !!}
            </div>
        </div>
        <div class="bg-gray-50 px-6 py-4">
            <a href="/" class="text-sm font-semibold text-gray-600 hover:text-[#220BAB]" wire:navigate.hover>
                &larr; Back to episodes
            </a>
        </div>
    </div>
    @endvolt
</x-layout>