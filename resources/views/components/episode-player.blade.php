<div x-data="{
        activeEpisode: null,
        play(episode) {
            this.activeEpisode = episode
 
            this.$nextTick(() => {
                this.$refs.audio.play()
            })
        },
    }"
    x-on:play-episode.window="play($event.detail)"
    x-transition.opacity.duration.500ms
    class="fixed inset-x-0 bottom-0 w-full border-t border-gray-200 bg-white h-36"
    >

    <div x-show="!activeEpisode" class="mx-auto max-w-xl p-6 flex items-center justify-center h-full" style="display: none">
        <h3 class="text-center text-sm font-bold text-gray-600">Aucune écoute en cours</h3>
    </div>
    <div x-show="activeEpisode" class="mx-auto max-w-xl p-6 h-full" style="display: none">
        <h3 x-text="`Playing: No. ${activeEpisode?.number} - ${activeEpisode?.title}`"
            class="text-center text-sm font-bold text-gray-600 truncate"></h3>
        <audio x-ref="audio" class="mx-auto mt-3" :src="activeEpisode?.audio" controls></audio>
    </div>
</div>