@props([
	'size' => 16,
	'color' => 'currentColor',
	'class' => ''
])

<svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" fill="{{ $color }}" class="bi bi-calendar3-event-fill {{ $class }}" viewBox="0 0 16 16">
	<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2h16a2 2 0 0 0-2-2zM0 14V3h16v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m12-8a1 1 0 1 0 2 0 1 1 0 0 0-2 0"/>
</svg>