<nav x-data="{ open: true }" class="shadow-lg bg-white">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex-shrink-0">
                <img class="block lg:hidden h-8 w-auto" src="/img/logos/workflow-mark-on-dark.svg" alt="" />
                <img class="hidden lg:block h-8 w-auto" src="/img/logos/workflow-logo-on-dark.svg" alt="" />
            </div>
            <div class="hidden sm:block sm:ml-6">
                <div class="leading-5 relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
                    <input
                        type="text"
                        class="bg-gray-200 text-sm rounded w-64 px-4 pl-8 py-2 focus:outline-none focus:shadow-outline" placeholder="Search for..."
                        x-ref="search"
                    >
                    <div class="z-50 absolute top-0">
                        <svg class="text-gray-500 fill-current w-4 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui"
                                  d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button class="relative p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-gray-100 hover:bg-gray-300 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <div class="absolute flex top-0 right-0 text-white">
                    <div class="block rounded-full bg-green-600 w-6 h-6 font-medium flex items-center justify-center">5</div>
                </div>
            </button>
            <div @click.away="open = false" class="ml-3 relative" x-data="{ open: false }">
                <div>
                    <button @click="open = !open" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out">
                        <div class="px-3 py-2 text-gray-500">John Doe</div>
                        <img class="h-8 w-8 rounded-full" src="/images/rix.jpg" alt="" />
                    </button>
                </div>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                    <div class="py-1 rounded-md bg-white shadow-xs">
                    <a href="{{url('profile')}}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Settings</a>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
            {{--            @endguest--}}
        </div>
      </div>
    </div>
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
      <div class="px-2 pt-2 pb-3">
          <div class="block relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
              <input
                  type="text"
                  class="bg-gray-200 text-sm rounded w-64 px-4 pl-8 py-2 focus:outline-none focus:shadow-outline" placeholder="Search for..."
                  x-ref="search"
              >
              <div class="z-50 absolute top-0">
                  <i class="fas fa-search text-gray-500 fill-current w-4 mt-2 ml-2"></i>
              </div>
          </div>
      </div>
    </div>
</nav>
