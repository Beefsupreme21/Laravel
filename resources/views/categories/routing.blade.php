<x-layout>
    <div class="w-4/5 mx-auto text-white">
        <h1 class="text-4xl font-bold my-5">Routing</h1>
    
        <div class="mt-10 mb-5">
            <div class="flex items-center mb-5 -ml-10">
                <img src="{{ asset('images/hashtag.png') }}" class="w-8 h-8 mr-2" alt="My Image">
                <p class="text-3xl">Basic Routes</p>
            </div>
            <p class="mb-5">Generally routes are going to accept a URI and a closure</p>
            <script type="text/plain" class="language-javascript max-w-[640px]">
                Route::get('/', function () {
                    return view('home');
                });
            </script>
        </div>

        <div class="mt-10 mb-5">
            <div class="flex items-center my-5 -ml-6">
                <img src="{{ asset('images/hashtag.png') }}" class="w-4 h-4 mr-2" alt="My Image">
                <p class="text-xl">Routing to controller</p>
            </div>
            <p class="mb-5">By calling a controller from a route, you can separate the concerns of your application, making it easier to manage and maintain. The controller can handle the business logic of your application, while the route simply maps the request to the appropriate controller action.</p>
            <script type="text/plain" class="language-javascript max-w-[640px]">
                Route::get('/users', [UserController::class, 'index']);
            </script>
        </div>

        <div class="mt-10 mb-5">
            <div class="flex items-center my-5 -ml-6">
                <img src="{{ asset('images/hashtag.png') }}" class="w-4 h-4 mr-2" alt="My Image">
                <p class="text-xl">Typical CRUD App</p>
            </div>
            <script type="text/plain" class="language-javascript max-w-[640px]">
                Route::get('/users', [UserController::class, 'index']);
                Route::get('/users/create', [UserController::class, 'create']);
                Route::post('/users', [UserController::class, 'store']);
                Route::get('/users/{user}/edit', [UserController::class, 'edit']);
                Route::put('/users/{user}', [UserController::class, 'update']);
                Route::delete('/users/{user}', [UserController::class, 'destroy']);
                Route::get('/users/{user}', [UserController::class, 'show']);
            </script>
        </div>

        <div class="mt-10 mb-5">
            <div class="flex items-center my-5 -ml-6">
                <img src="{{ asset('images/hashtag.png') }}" class="w-4 h-4 mr-2" alt="My Image">
                <p class="text-xl">Resource Controllers</p>
            </div>
            <p class="mb-5">Using the resource helper, you can define a set of routes with a single line of code. </p>

            <script type="text/plain" class="language-javascript max-w-[640px]">
                Route::resource('users', UserController::class);
            </script>
        </div>
        
    </div>
      
      
</x-layout>
