@props([
	'size' => 16,
	'color' => 'currentColor',
	'class' => ''
])

<svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" fill="{{ $color }}" class="bi bi-filetype-wav {{ $class }}" viewBox="0 0 16 16">
	<path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.784 15.849l.741-2.789h.033l.74 2.789h.73l1.055-3.999h-.858l-.595 2.903h-.041l-.706-2.903H2.2l-.706 2.903h-.038l-.6-2.903H0l1.055 3.999h.73Zm3.715 0 .314-1.028h1.336l.313 1.028h.841L6.967 11.85h-.926L4.7 15.849h.8Zm1.002-3.234.49 1.617H5.977l.49-1.617H6.5Zm3.604 3.234h-.952L7.814 11.85h.917l.897 3.138h.038l.888-3.138h.879z"/>
</svg>