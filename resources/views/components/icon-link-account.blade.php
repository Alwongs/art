@props(['route'])

<a href="{{ $route }}" class="icon-link icon-link-account">

	<svg width="20px" height="20px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
		<path class="cls-1" d="M256,250.8a73.34,73.34,0,1,1,73.33-73.34A73.41,73.41,0,0,1,256,250.8Zm0-125.53a52.2,52.2,0,1,0,52.19,52.19A52.25,52.25,0,0,0,256,125.27Z"/>
		<path class="cls-1" d="M373.07,407.87H138.93L128.36,397.3a127.64,127.64,0,1,1,255.28,0ZM150,386.73H362a106.51,106.51,0,0,0-212,0Z"/>
	</svg>
	<span>{{ $slot }}</span>
</a>