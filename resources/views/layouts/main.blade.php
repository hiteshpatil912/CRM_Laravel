@extends('layouts.app')
@section('content')
	<section class="w-full p-4">
		<div class="w-full h-64 border-dashed border-4 p- text-md">
			<div class="flex mb-4">
				<h1>Hey</h1>
				<div class="w-3/4">
					<strong>&nbsp;{{ auth()->user()->name }} !</strong>

				</div>
				<div class="w-1/4 h-12">
					<div class="inline-flex rounded-md shadow-sm relative" role="group">
						<button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:text-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600  dark:focus:text-white">
							<a href="add-taks">Add Task</a>
						</button>
						<button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:text-white">
							<a href="add-taskm">Add Metting</a>
						</button>

						<!-- drop down test -->
						<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
						<div class="inline-flex rounded-md shadow-sm relative" role="group">
							<div x-data="{ dropdownOpen: false }" class="relative ">
								<button @click="dropdownOpen = !dropdownOpen" class="py-2 px-4 rounded-r-md text-sm font-medium text-gray-900 bg-white rounded-r-rg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:text-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600  dark:focus:text-white">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
									</svg>
								</button>
								<div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
								<div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
									<a href="add-taks" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
										Follow up
									</a>
									<a href="add-taks" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
										Call reminder
									</a>
									<a href="add-taskm" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
										Meeting
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
@endsection