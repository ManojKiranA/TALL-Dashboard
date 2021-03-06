@extends('layouts.admin')

@section('content')
    <div class="flex">
        @include('layouts._sidebar')

        <div class="p-4 w-4/5 bg-gray-100 overflow-y-hidden">
            @include('layouts.navbar')
            <div class="px-10 py-8">
                <h1 class="flex text-3xl text-gray-600">
                    <a href="{{url('/')}}" class="text-3xl font-semibold">Dashboard</a>
                    > <span class="text-green-400">Profile</span>
                </h1>

                <div class="w-full h-64 mt-6 relative" style="background-image: url('{{asset('images/Fluid-01.jpg')}}')">
                    <div class="absolute bottom-0 left-0 sm:ml-10 px-2 lg:ml-16 -mb-8">
                        <img src="{{asset('images/rix.jpg')}}" class="rounded-full w-16 h-16 border-4 border-white shadow-lg" alt="cover-image">
                    </div>
                    <div class="absolute flex bottom-0 right-0 mr-16 -mb-5">
                        <a href="#" class="block rounded-full bg-green-600 w-10 h-10 shadow-lg flex items-center justify-center">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>design-tool-quill-2</title><g fill=""><path d="M23.159.006A23.885 23.885 0 0 0 4.628 13.663l-2.635 5.825a.722.722 0 0 0-.046.133L.154 22.467a1 1 0 1 0 1.692 1.067l4.518-7.208a.5.5 0 0 1 .845.532L6.02 18.747a.25.25 0 0 0 .306.365L9.764 17.7a12.375 12.375 0 0 0 5.844-4.836.25.25 0 0 0-.021-.3l-2.277-2.65a.251.251 0 0 1 .19-.414H17a.219.219 0 0 0 .2-.134 10.816 10.816 0 0 1 2.049-3.2L23.8 1.26a.75.75 0 0 0-.641-1.254z"></path></g></svg>
                        </a>
                        <a href="#" class="block rounded-full bg-green-600 w-10 h-10 shadow-lg ml-4 flex items-center justify-center">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>cog</title><g fill=""><path d="M22.5 9.5h-1.862a8.955 8.955 0 0 0-.763-1.84l1.317-1.316a1.5 1.5 0 0 0 0-2.122l-1.415-1.414a1.5 1.5 0 0 0-2.121 0l-1.318 1.317a8.9 8.9 0 0 0-1.838-.762V1.5A1.5 1.5 0 0 0 13 0h-2a1.5 1.5 0 0 0-1.5 1.5v1.863a8.919 8.919 0 0 0-1.84.762L6.343 2.808a1.5 1.5 0 0 0-2.121 0L2.807 4.222a1.5 1.5 0 0 0 0 2.122l1.317 1.317A8.952 8.952 0 0 0 3.362 9.5H1.5A1.5 1.5 0 0 0 0 11v2a1.5 1.5 0 0 0 1.5 1.5h1.862a8.961 8.961 0 0 0 .762 1.84l-1.318 1.317a1.5 1.5 0 0 0 0 2.122l1.414 1.414a1.545 1.545 0 0 0 2.122 0l1.318-1.318a8.922 8.922 0 0 0 1.84.764V22.5A1.5 1.5 0 0 0 11 24h2a1.5 1.5 0 0 0 1.5-1.5v-1.861a8.988 8.988 0 0 0 1.839-.763l1.318 1.318a1.5 1.5 0 0 0 2.121 0l1.414-1.414a1.5 1.5 0 0 0 0-2.122l-1.317-1.318a8.909 8.909 0 0 0 .763-1.84H22.5A1.5 1.5 0 0 0 24 13v-2a1.5 1.5 0 0 0-1.5-1.5zM12 17a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5z"></path></g></svg>
                        </a>
                    </div>
                    <div x-data="{ open: false }" class="absolute bottom-0 right-0 -mb-16 mr-4 flex items-center sm:hidden">
                        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 focus:text-white transition duration-150 ease-in-out">
                          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                        <ul x-show.transition.ease-out.duration-100.transform.opacity-0.scale-95.transform.opacity-100.scale-100.transition.ease-in.duration-75.transform.opacity-100.scale-100.transform.opacity-0.scale-95="open" 
                        @click.away="open = false"
                        class="block relative bg-white w-full px-4 pl-8 py-2 text-green-600 font-sans font-medium"
                        >
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Timeline</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">About</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Photos</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Friends</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Videos</a></li>
                            <li><a href="#" class="inline-block px-3 py-1">Events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-wrap bg-white lg:h-16">
                    <div class="w-full md:w-1/4 p-4">
                    </div>
                    <div class="w-full md:w-3/4 p-4">
                        <ul class="lg:flex lg:text-sm hidden sm:text-xs md:block text-green-600 font-sans font-medium">
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Timeline</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">About</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Photos</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Friends</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Videos</a></li>
                            <li><a href="#" class="inline-block px-3 py-1">Events</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="lg:flex mt-10">
                    <div class="lg:w-1/4">
                        <div class="bg-white h-auto shadow-lg rounded-lg mb-4 p-4">
                            <h2 class="text-gray-800 leading-tight font-semibold text-2xl mb-4">About</h2>
                            <p class="text-gray-600 leading-normal font-semibold text-lg mb-2">
                                Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.
                            </p>
                            <p class="text-gray-600 leading-normal font-semibold text-lg mb-2">
                                Joined: <br>
                                November 15, 2015
                            </p>
                            <p class="text-gray-600 leading-normal font-semibold text-lg mb-2">
                                Lives: <br>
                                New York, USA
                            </p>
                            <p class="text-gray-600 leading-normal font-semibold text-lg mb-2">
                                Email: <br>
                                bucketful@fiendhead.org
                            </p>
                            <p class="text-gray-600 leading-normal font-semibold text-lg mb-2">
                                Website: <br>
                                www.pixinvent.com
                            </p>
                            <p class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-green-600" width="32" height="32" viewBox="0 0 24 24"><title>facebook</title><g fill=""><path d="M20.9 2H3.1A1.1 1.1 0 0 0 2 3.1v17.8A1.1 1.1 0 0 0 3.1 22h9.58v-7.75h-2.6v-3h2.6V9a3.64 3.64 0 0 1 3.88-4 20.26 20.26 0 0 1 2.33.12v2.7H17.3c-1.26 0-1.5.6-1.5 1.47v1.93h3l-.39 3H15.8V22h5.1a1.1 1.1 0 0 0 1.1-1.1V3.1A1.1 1.1 0 0 0 20.9 2z"></path></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-green-600" width="32" height="32" viewBox="0 0 448 512"><title>twitter-square</title><g fill=""><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-green-600" width="32" height="32" viewBox="0 0 24 24"><title>bxl-instagram</title><g fill=""><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></g></svg>
                            </p>
                        </div>
                        <div class="bg-white h-64 shadow-lg rounded-lg mb-4">
                        </div>
                        <div class="bg-white h-64 shadow-lg rounded-lg"></div>
                    </div>
                    <div class="lg:w-2/4">
                        <div class="bg-white ml-4 h-64 shadow-lg rounded-lg mb-4">
                            <div class="mx-auto flex p-6">
                                <div class="flex-shrink-0">
                                    <img class="rounded-full h-12 w-12" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                </div>
                                <div class="ml-6 pt-1">
                                    <h4 class="text-xl text-gray-900 leading-tight">名称 名称</h4>
                                    <p class="text-base text-gray-600 leading-normal">You have a new message!</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white ml-4 h-64 shadow-lg rounded-lg mb-4"></div>
                        <div class="bg-white ml-4 h-64 shadow-lg rounded-lg"></div>
                    </div>
                    <div class="lg:w-1/4">
                        <div class="bg-white ml-4 h-64 shadow-lg rounded-lg mb-4"></div>
                        <div class="bg-white ml-4 h-64 shadow-lg rounded-lg mb-4"></div>
                        <div class="bg-white ml-4 h-64 shadow-lg rounded-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
