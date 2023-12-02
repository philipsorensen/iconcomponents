@props([
	'size' => 16,
	'color' => 'currentColor',
	'class' => ''
])

<svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" fill="{{ $color }}" class="bi bi-egg-fill {{ $class }}" viewBox="0 0 16 16">
	<path d="M14 10a6 6 0 0 1-12 0C2 5.686 5 0 8 0s6 5.686 6 10"/>
</svg> 