@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}">



{{-- Usar quando não tiver logos dos clientes: --}}
{{-- @props(['width'=>90])
<img src="http://picsum.photos/seed/{{ rand(0,100000)}}/{{$width}}" alt="" class="rounded-xl"> --}}
