@props([
    'url' => '/jobs/create',
    'icon' => null,
    'bgClass' => 'bg-green-600',
    'hoverClass' => 'hover:bg-green-400 hover:text-gray-500',
    'textClass' => 'text-white',
    'block' => false,
])

<a href="{{$url}}" class="{{$bgClass}} {{$hoverClass}} {{$textClass}} {{$block ? 'block' : ''}} px-4 py-2 rounded hover:shadow-md transition duration-300">
    @if($icon)
    <i class="fa fa-{{$icon}}"></i>
    @endif
    {{ $slot }}
</a>