@props(['active' => false, 'type' => 'a'])


<li class="{{ $active ? 'bg-gray-900' : null}}">
    @if ($type == 'button') <button {{ $attributes }}>{{ $slot }}</button>
    @else <a {{ $attributes }}>{{ $slot }}</a>
    @endif
</li>