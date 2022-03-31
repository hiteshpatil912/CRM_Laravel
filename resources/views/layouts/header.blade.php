<header class="w-full bg-gray-700 p-4 flex justify-between items-center">
  <!-- <nav class="wrapper-container"> -->
  <div id="ember2403" class="ember-view unified360-main-logo">
    <div class="unified360-simple-main-logo">
        <div id="ember2412" class="ember-view">
            <a id="ember2413" href="dashboard" data-s360product-info="freshsales" class="unified360-list-item ember-view active">			      
                <div class="unified360-valign">
                    <svg class="unified360-icon" width="68" height="40" viewBox="0 0 68 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.9.063h25.525C64.211.063 68 3.85 68 8.636v25.525c0 18.745-15.155 33.9-33.9 33.9h-.2c-18.745 0-33.9-15.155-33.9-33.9C0 15.417 15.155.262 33.9.062z" fill="#E67300"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.5 22.313a7.437 7.437 0 1 1-14.875 0 7.437 7.437 0 0 1 14.875 0zM31.918 44.14L19.125 31.875H51L38.207 44.14V51h-6.289v-6.86z" fill="#fff"></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</div>
 <!-- </nav> -->
 
<div class="flex flex-col justify-center ">
<div class="flex items-center justify-center">
  <div class=" relative inline-block text-left dropdown">
    <span class="rounded-md shadow-sm"
      >
      <button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5  transition duration-150 ease-in-out  rounded-md focus:outline-none  focus:shadow-outline-blue active:text-gray-800" 
       type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
       <img class="rounded-full h-10 w-10" src="{{asset('img/IMG_1626.jpg')}}" />
        
        </button
    ></span>
    <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
      <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
        <div class="py-1">
          {{ auth()->user()->email }}
          <a href="{{ route('logout') }}" tabindex="3" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >Sign out</a>
        </div>
      </div>
    </div>
  </div>
</div>              
</div>

<style>
.dropdown:focus-within .dropdown-menu {
  opacity:1;
  transform: translate(0) scale(1);
  visibility: visible;
}
    </style>



</header>
