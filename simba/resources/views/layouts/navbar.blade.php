<!-- Navbar goes here -->
<nav class="bg-white shadow-lg">
	<div class="max-w-screen- mx-12  px-4">
		<div class="flex justify-between">
			@if (auth()->check())
			<div class="flex ">
				<div>
					<!-- Website Logo -->
					<a href="/Admin" class="flex items-center py-4 px-2">
						<img src="{{ URL::asset('dist/as.png') }}" class="h-12 w-28 ">
						<!-- <span class="font-semibold text-green-500 text-lg">SIMBA</span> -->
					</a>
				</div>
				<!-- Primary Navbar items -->
				<ul
					class="flex flex-col pt-7 pl-8 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
					<li>
						<a href="/Admin"
							class="block py-3 mt-1 pl-3 pr-4 text-yellow-400 bg-yellow-400 rounded md:bg-transparent md:text-yellow-400 md:p-0 dark:text-white hover:scale-110 hover:-translate-y-1 hover:shadow-xl"
							aria-current="page">Home</a>
					</li>

				</ul>
			</div>
			<!-- Secondary Navbar items -->
			<div class="hidden md:flex items-center space-x-3 ">

				<div class="relative inline-block text-left">
					<div>
						<span class="rounded-md shadow-sm">
							<button id="dropdown-button" type="button"
								class="py-2 px-2 flex font-medium text-gray-500 rounded hover:bg-yellow-400 hover:text-white transition duration-500 hover:shadow-2xl hover:scale-1 hover:-translate-y-1">
								Hi, {{ auth()->user()->name }} <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20"
									fill="currentColor">
									<path fill-rule="evenodd"
										d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
										clip-rule="evenodd" />
								</svg>
							</button>
						</span>
					</div>
					<div id="dropdown-menu"
						class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg hidden">
						<div class="rounded-md bg-white shadow-xs">
							<div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
								<a href="/Admin"
									class="block px-4 py-2 text-sm leading-5 text-gray-700  hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
									role="menuitem">Home</a>
								<form method="POST" action="/logout">
									@csrf

									<button class="min-w-full text-left block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100
										focus:outline-none focus:bg-gray-100" role="menuitem">Logout
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<script>
					const button = document.getElementById('dropdown-button');
				const menu = document.getElementById('dropdown-menu');

				button.addEventListener('click', () => {
 				 menu.classList.toggle('hidden');
});
				</script>
				@else
				<div class="flex ">
					<div>
						<!-- Website Logo -->
						<a href="/" class="flex items-center py-4 px-2">
							<img src="{{ URL::asset('dist/as.png') }}" class="h-12 w-28 ">
							<!-- <span class="font-semibold text-green-500 text-lg">SIMBA</span> -->
						</a>
					</div>
					<!-- Primary Navbar items -->
					<ul
						class="flex flex-col pt-7 pl-8 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
						<li>
							<a href="/"
								class="block py-2 mt-1 pl-3 pr-4 text-yellow-400 bg-yellow-400 rounded md:bg-transparent md:text-yellow-400 md:p-0 dark:text-white"
								aria-current="page">Home</a>
						</li>

					</ul>
				</div>
				<a href="/login"
					class="py-3 my-4 px-2 flex font-medium text-gray-500 rounded hover:bg-yellow-400 hover:text-white transition duration-600"><svg
						class="w-6 h-6 mx-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
							clip-rule="evenodd"></path>
					</svg> Login</a>





				@endif
</nav>