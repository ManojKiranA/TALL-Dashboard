<div x-data="{ open: true }" class="h-screen sticky top-0 w-1/5 bg-white overflow-y-auto p-4">
    <div class="flex mb-4">
        <img class="h-10 w-10 rounded-full" src="/images/cabin2.svg" alt="" />
        <h1 class="ml-2 text-green-400 font-bold text-2xl hidden md:block lg:block">TALL Dashboard</h1>
    </div>

    <div class="hidden font-semibold text-center md:block lg:block space-y-4">
        <a href="" class="shadow-md bg-green-400 text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
            <span class="px-2 py-1">Dashboard</span>
        </a>

        <div class="text-gray-400 text-left text-base leading-tight px-2 py-2">
            APPS
        </div>

            <div x-data="{ open: false }">
                <a href="#" @click="open = true" class="group hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="24" height="24" viewBox="0 0 24 24"><title>bars</title><g fill="#000000"><path class="uim-primary" d="M21 13H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2zm0 5H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2zm0-10H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2z"></path></g></svg>
                    <span class="px-2 py-1">Pages</span>
                    <svg class="-mr-1 ml-20 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <ul x-show.transition.ease-out.duration-100.transform.opacity-0.scale-95.transform.opacity-100.scale-100.transition.ease-in.duration-75.transform.opacity-100.scale-100.transform.opacity-0.scale-95="open" 
                @click.away="open = false">
                    <a href="{{route('login')}}" class="hover:bg-green-200 text-gray-600 text-sm flex rounded px-8 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="24" height="24" viewBox="0 0 24 24"><title>sign-in-alt</title><g fill=""><path d="M20.5 15.1a1 1 0 0 0-1.34.45A8 8 0 1 1 12 4a7.93 7.93 0 0 1 7.16 4.45 1 1 0 0 0 1.8-.9 10 10 0 1 0 0 8.9 1 1 0 0 0-.46-1.35zM21 11h-9.59l2.3-2.29a1 1 0 1 0-1.42-1.42l-4 4a1 1 0 0 0-.21.33 1 1 0 0 0 0 .76 1 1 0 0 0 .21.33l4 4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42L11.41 13H21a1 1 0 0 0 0-2z"></path></g></svg>
                        <span class="px-2 py-1">Login</span>
                    </a>
                    <a href="{{route('register')}}" class="hover:bg-green-200 text-gray-600 text-sm flex rounded px-8 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="fill-current" viewBox="0 0 24 24"><title>user-plus</title><g fill=""><path d="M21 10.5h-1v-1a1 1 0 0 0-2 0v1h-1a1 1 0 0 0 0 2h1v1a1 1 0 0 0 2 0v-1h1a1 1 0 0 0 0-2zm-7.7 1.72A4.92 4.92 0 0 0 15 8.5a5 5 0 0 0-10 0 4.92 4.92 0 0 0 1.7 3.72A8 8 0 0 0 2 19.5a1 1 0 0 0 2 0 6 6 0 0 1 12 0 1 1 0 0 0 2 0 8 8 0 0 0-4.7-7.28zM10 11.5a3 3 0 1 1 3-3 3 3 0 0 1-3 3z"></path></g></svg>
                        <span class="px-2 py-1">Register</span>
                    </a>
                    <a href="{{route('profile')}}" class="hover:bg-green-200 text-gray-600 text-sm flex rounded px-8 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="24" height="24" viewBox="0 0 24 24"><title>user</title><g fill=""><path d="M15.71 12.71a6 6 0 1 0-7.42 0 10 10 0 0 0-6.22 8.18 1 1 0 0 0 2 .22 8 8 0 0 1 15.9 0 1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1 10 10 0 0 0-6.25-8.19zM12 12a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"></path></g></svg>
                        <span class="px-2 py-1">Profile</span>
                    </a>
                </ul>
            </div>

        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
            <span class="px-2 py-1">Reports</span>
        </div>

        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/></svg>
            <span class="px-2 py-1">Team</span>
        </div>
        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
            <span class="px-2 py-1">Reports</span>
        </div>
        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"/></svg>
            <span class="px-2 py-1">Projects</span>
        </div>
        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M17 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2V3a1 1 0 1 1 2 0v1h6V3a1 1 0 0 1 2 0v1zm-2 2H9v1a1 1 0 1 1-2 0V6H5v4h14V6h-2v1a1 1 0 0 1-2 0V6zm4 6H5v8h14v-8z"/></svg>
            <span class="px-2 py-1">Calendar</span>
        </div>

        <div class="text-gray-400 text-left text-base leading-tight px-2 py-2">
            UI
        </div>

        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
            <span class="px-2 py-1">Documents</span>
        </div>
        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
            <span class="px-2 py-1">Reports</span>
        </div>

        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/></svg>
            <span class="px-2 py-1">Team</span>
        </div>
        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
            <span class="px-2 py-1">Reports</span>
        </div>
        <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"/></svg>
            <span class="px-2 py-1">Projects</span>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="px-4 py-3 overflow-y-auto -mt-2">
            <div class="bg-green-500 text-white px-2 py-2 flex rounded mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
                <span class="font-semibold text-center text-lg px-2 py-1 hidden">Dashboard</span>
            </div>
            <div class="hover:bg-green-500 text-gray-600 hover:text-white px-2 py-2 flex rounded mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
                <span class="font-semibold text-center text-lg px-2 py-1 hidden">Documents</span>
            </div>
            <div class="hover:bg-green-500 hover:text-white text-gray-600 px-2 py-2 flex rounded mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                <span class="font-semibold text-center text-lg px-2 py-1 hidden">Reports</span>
            </div>

            <div class="hover:bg-green-500 text-gray-600 hover:text-white px-2 py-2 flex rounded mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/></svg>
                <span class="font-semibold text-center text-lg px-2 py-1 hidden">Team</span>
            </div>
            <div class="hover:bg-green-500 text-gray-600 hover:text-white px-2 py-2 flex rounded mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                <span class="font-semibold text-center text-lg px-2 py-1 hidden">Reports</span>
            </div>
            <div class="hover:bg-green-500 text-gray-600 hover:text-white px-2 py-2 flex rounded mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"/></svg>
                <span class="font-semibold text-center text-lg px-2 py-1 hidden">Projects</span>
            </div>
            <div class="hover:bg-green-500 text-gray-600 hover:text-white px-2 py-2 flex rounded mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M17 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2V3a1 1 0 1 1 2 0v1h6V3a1 1 0 0 1 2 0v1zm-2 2H9v1a1 1 0 1 1-2 0V6H5v4h14V6h-2v1a1 1 0 0 1-2 0V6zm4 6H5v8h14v-8z"/></svg>
                <span class="font-semibold text-center text-lg px-2 py-1 hidden">Calendar</span>
            </div>
            <div class="hover:bg-green-500 text-gray-600 hover:text-white px-2 py-2 flex rounded mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
                <span class="font-semibold text-center text-lg px-2 py-1 hidden">Documents</span>
            </div>
            <div class="hover:bg-green-500 text-gray-600 hover:text-white px-2 py-2 flex rounded mb-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" class="fill-current"
                    width="24"
                    height="24"
                >
                    <path class="heroicon-ui"
                            d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/>
                </svg>
                <span class="font-semibold text-center text-lg px-2 py-1 hidden">Reports</span>
            </div>
        </div>
    </div>
</div>