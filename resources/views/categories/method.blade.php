<x-layout>
    <div class="w-4/5 mx-auto text-white">
        <h1 class="text-4xl font-bold my-5">Methods</h1>
    
        <div>
            <div class="my-5">
                <div class="flex items-center mt-5 mb-2 -ml-6">
                    <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                    <p>Retrieving</p>
                </div>
                <div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>get</p>
                    </div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>first</p>
                    </div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>findOrFail</p>
                    </div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>pluck</p>
                    </div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>value</p>
                    </div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>firstWhere</p>
                    </div>
                </div>
            </div>
    
            <div class="my-5">
                <div class="flex items-center mt-5 mb-2 -ml-6">
                    <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                    <p>Filtering</p>
                </div>
                <div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>contains</p>
                    </div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>filter</p>
                    </div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>firstWhere</p>
                    </div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>pluck</p>
                    </div>
                    <div class="flex items-center ml-6">
                        <img src="{{ asset('images/hashtag.png') }}" class="w-3 h-3 mr-2">
                        <p>value</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="mt-10 mb-5">
                <div class="flex items-center mb-5 -ml-10">
                    <img src="{{ asset('images/hashtag.png') }}" class="w-8 h-8 mr-2">
                    <p class="text-3xl">Retrieving</p>
                </div>
                <p class="mb-5">Quick explain</p>
            </div>
    
            <div class="mt-10 mb-5">
                <div class="flex items-center my-5 -ml-6">
                    <img src="{{ asset('images/hashtag.png') }}" class="w-4 h-4 mr-2">
                    <p class="text-xl">get</p>
                </div>
                <p class="mb-5">By calling a controller from a route, you can separate the concerns of your application, making it easier to manage and maintain. The controller can handle the business logic of your application, while the route simply maps the request to the appropriate controller action.</p>
                <script type="text/plain" class="language-javascript max-w-[640px]">
                    Route::get('/users', [UserController::class, 'index']);
                </script>
            </div>
    
        </div>

        <div>
            <div class="mt-10 mb-5">
                <div class="flex items-center mb-5 -ml-10">
                    <img src="{{ asset('images/hashtag.png') }}" class="w-8 h-8 mr-2">
                    <p class="text-3xl">Filtering</p>
                </div>
                <p class="mb-5">Filters can be used to authenticate users, cache responses, or perform other tasks. Filters can be applied to specific routes or groups of routes, and can also be assigned parameters.</p>
            </div>
    
            <div class="mt-10 mb-5">
                <div class="flex items-center my-5 -ml-6">
                    <img src="{{ asset('images/hashtag.png') }}" class="w-4 h-4 mr-2">
                    <p class="text-xl">where</p>
                </div>
                <p class="mb-5">The where method uses "loose" comparisons when checking item values, meaning a string with an integer value will be considered equal to an integer of the same value.</p>
                <table class="mb-5">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    @foreach ($filteredUsers as $filteredUser)
                        <tr>
                            <td>{{ $filteredUser->name }}</td>
                            <td>{{ $filteredUser->age }}</td>
                        </tr>
                    @endforeach
                </table>
                <script type="text/plain" class="language-javascript max-w-[640px]">
                    $filteredUsers = User::where('age', '>', 96)->get();
                </script>
            </div>
    
            <div class="mt-10 mb-5">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                        </tr>
                    </thead>
                    @foreach ($whereUsers as $whereUser)
                        <tr>
                            <td>{{ $whereUser->name }}</td>
                        </tr>
                    @endforeach
                </table>
                <script type="text/plain" class="language-javascript max-w-[750px]">
                    $whereUsers = User::where('name', 'John')->orWhere('name', 'Steve')->get();
                </script>
            </div>

            <div class="mt-10 mb-5">
                <div class="flex items-center my-5 -ml-6">
                    <img src="{{ asset('images/hashtag.png') }}" class="w-4 h-4 mr-2">
                    <p class="text-xl">whereBetween</p>
                </div>
                <p class="mb-5">The whereBetween method filters the collection by determining if a specified item value is within a given range</p>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email Verified At</th>
                        </tr>
                    </thead>
                    @foreach ($whereBetweenUsers as $whereBetweenUser)
                        <tr>
                            <td>{{ $whereBetweenUser->name }}</td>
                            <td>{{ $whereBetweenUser->email_verified_at }}</td>
                        </tr>
                    @endforeach
                </table>
                <script type="text/plain" class="language-javascript max-w-[640px]">
                    $whereBetweenUsers = User::whereBetween('email_verified_at', 
                    ['2023-01-13 00:00:00', '2023-01-14 23:59:59'])->get();
                </script>
            </div>

            <div class="mt-10 mb-5">
                <div class="flex items-center my-5 -ml-6">
                    <img src="{{ asset('images/hashtag.png') }}" class="w-4 h-4 mr-2">
                    <p class="text-xl">latestUsers / oldestUsers </p>
                </div>
                <p class="mb-5">This will retrieve the 5 latest or oldest user from the users table.</p>
                <table>
                    <thead>
                        <tr>
                            <th>Name - Oldest</th>
                            <th>Created at</th>
                        </tr>
                    </thead>
                    @foreach ($latestUsers as $latestUser)
                        <tr>
                            <td>{{ $latestUser->name }}</td>
                            <td>{{ $latestUser->created_at }}</td>
                        </tr>
                    @endforeach
                    <thead>
                        <tr>
                            <th>Name - Latest</th>
                            <th>Created at</th>
                        </tr>
                    </thead>
                    @foreach ($oldestUsers as $oldestUser)
                        <tr>
                            <td>{{ $oldestUser->name }}</td>
                            <td>{{ $oldestUser->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
                <script type="text/plain" class="language-javascript max-w-[640px]">
                    $latestUsers = User::latest()->take(5)->get();
                    $oldestUsers = User::oldest()->take(5)->get();
                </script>
            </div>

        </div>
    </div>
      
      
</x-layout>
