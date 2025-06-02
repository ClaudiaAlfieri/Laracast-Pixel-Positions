@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo></x-employer-logo>
    </div>
    <div class="flex-1 flex flex-col">
        <a htef="#" class="self-start text-sm text-gray-400">Laracasts</a>

        <h3 class="font-bold text-xg mt-3 group-hover:text-blue-800 text-xl transition-colors duration-300">Vídeo
            Producer</h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time - From $60,000</p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag>Backend</x-tag>
        @endforeach

    </div>
</x-panel>
