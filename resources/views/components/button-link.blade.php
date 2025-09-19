@props([
    'url' => '/jobs/create',
    'icon' => null,
    'bgClass' => 'bg-green-500',
    'hoverClass' => 'hover:bg-green-400',
    'textClass' => 'text-black'
])

<a href="{{$url}}" class="{{$bgClass}} {{$hoverClass}} {{$textClass}} px-4 py-2 rounded hover:shadow-md transition duration-300">
    @if($icon)
    <i class="fa fa-{{$icon}}"></i>
    @endif
    {{ $slot }}
</a>