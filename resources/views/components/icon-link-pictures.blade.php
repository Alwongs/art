@props(['route'])

<a href="{{ $route }}" class="icon-link icon-link-pictures">
	<svg version="1.1" id="PICTURE" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		width="18px" height="18px" viewBox="0 0 1800 1800" enable-background="new 0 0 1800 1800" xml:space="preserve"
	>
		<g>
			<path d="M1715.855,4.642H84.157c-43.845,0-79.514,35.665-79.514,79.501v1631.71
				c0,43.836,35.669,79.505,79.514,79.505h1631.698c43.837,0,79.502-35.669,79.502-79.505V84.143
				C1795.357,40.307,1759.692,4.642,1715.855,4.642z M1715.855,1732.477H84.157c-9.172,0-16.633-7.457-16.633-16.624v-197.206
				l588.122-588.126l571.393,571.401c6.141,6.136,14.186,9.207,22.234,9.207c8.044,0,16.093-3.071,22.233-9.207
				c12.276-12.281,12.276-32.187,0-44.468L677.878,863.827c-6.139-6.141-14.185-9.209-22.231-9.207
				c-8.047-0.002-16.093,3.068-22.231,9.207L67.524,1429.715V84.143c0-9.163,7.461-16.619,16.633-16.619h1631.698
				c9.164,0,16.62,7.456,16.62,16.619v1332.726l-553.04-553.041c-2.303-2.303-4.873-4.171-7.611-5.612
				c-11.859-6.237-26.879-4.364-36.857,5.612l-123.512,123.521c-12.277,12.277-12.277,32.182,0.004,44.464
				c6.137,6.136,14.186,9.206,22.229,9.206s16.093-3.07,22.233-9.211l101.279-101.283l571.393,571.397
				c1.219,1.215,2.531,2.28,3.882,3.255v210.676C1732.476,1725.02,1725.02,1732.477,1715.855,1732.477z"
			/>
			<path d="M1088.885,560.165c0-97.651-79.443-177.1-177.095-177.1c-97.651,0-177.095,79.448-177.095,177.1
				S814.139,737.26,911.79,737.26C1009.441,737.26,1088.885,657.816,1088.885,560.165z M911.79,674.379
				c-62.978,0-114.213-51.236-114.213-114.214c0-62.982,51.236-114.218,114.213-114.218s114.214,51.235,114.214,114.218
				C1026.004,623.143,974.768,674.379,911.79,674.379z"
			/>
		</g>
	</svg>
	<span>{{ $slot }}</span>
</a>