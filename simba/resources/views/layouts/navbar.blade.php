	<!-- Navbar goes here -->
    <nav class="bg-white shadow-lg">
			<div class="max-w-screen- mx-12  px-4">
				<div class="flex justify-between">
					<div class="flex ">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
                            <img src="{{ URL::asset('dist/Logo_dirga_depan.png') }}" class="h-8 w-28 ">
								<!-- <span class="font-semibold text-green-500 text-lg">SIMBA</span> -->
							</a>
						</div>
						<!-- Primary Navbar items -->
					
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
                    
	                <a href=""class="py-2 px-2 flex font-medium text-gray-500 rounded hover:bg-yellow-300 hover:text-white transition duration-300"><svg class="w-6 h-6 mx-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg> Nama User</a>
					
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>