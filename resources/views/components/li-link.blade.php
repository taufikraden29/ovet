@props(['active' => false])

<li class="{{ $active ? 'active' : '' }} menu-item ">
    <x-nav-link>
        {{ $slot }}
    </x-nav-link>
</li>
