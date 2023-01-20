<div class="hidden md:fixed md:inset-y-0 md:flex md:w-80 md:flex-col">
    <div class="flex min-h-0 flex-1 flex-col bg-[#12141C]">
        <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
            <div class="flex flex-shrink-0 items-center px-6">
                <a href="/" class="flex items-center py-1 font-bold rounded-md text-white hover:text-[#77C1D2]">
                    <img src="{{ asset('images/laravel.svg') }}" class="h-12" alt="">
                    <span class="text-3xl ml-2 ">Laravel</span>
                </a>
            </div>
            <nav class="mt-5 flex-1 space-y-.5 px-6">
                <a href="/routing" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    Routing
                </a>
                <a href="/model" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    Model
                </a>
                <a href="/view" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    View
                </a>
                <a href="/controller" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    Controller
                </a>
                <a href="/eloquent" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    Eloquent ORM
                </a>
                <a href="/migrations" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    Migrations
                </a>
                <a href="/methods" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    Methods
                </a>

                @if (request()->is('methods'))
                    <a href="#" class="text-gray-500 hover:bg-gray-700 hover:text-[#77C1D2] flex items-center ml-2 px-2 py-1 rounded-md">
                        Methods 2
                    </a>
                    <a href="#" class="text-gray-500 hover:bg-gray-700 hover:text-[#77C1D2] flex items-center ml-2 px-2 py-1 rounded-md">
                        Methods 3
                    </a>
                @endif

                <a href="/helpers" x-on:click="selected !== helpers ? selected = helpers : selected = ''" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    Helpers
                </a>
                <a href="/naming-conventions" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    Naming Conventions
                </a>
                <a href="/users" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center px-2 py-1 font-bold rounded-md">
                    Users
                </a>

                @if (request()->is('users'))
                    <a href="#" class="text-gray-500 hover:bg-gray-700 hover:text-[#77C1D2] flex items-center ml-2 px-2 py-1 rounded-md">
                        Create New User
                    </a>
                @endif

                <a href="/test" class="text-gray-300 text-lg hover:bg-gray-700 hover:text-[#77C1D2] flex items-center mt-8 px-2 py-1 font-bold rounded-md">
                    Testing
                </a>

            </nav>
        </div>
    </div>
</div>
