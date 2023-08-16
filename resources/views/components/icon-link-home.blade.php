@props(['route'])

<a href="{{ $route }}" class="icon-link icon-link-home">
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		width="18px" height="18px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
		<g>
			<g id="Shape_6">
				<g>
					<path d="M68.838,324.037V612h173.923V422.268h126.494V612h173.923V324.037L306,95.062L68.838,324.037z M527.352,596.19H385.049
						V406.458H226.936V596.19H84.648V330.75L306,117.036l221.352,213.729V596.19z M306,0L0,306l11.183,11.183L306,22.35
						l294.817,294.817L612,305.984L306,0z"/>
				</g>
			</g>
		</g>
	</svg>
	<span>{{ $slot }}</span>
</a>