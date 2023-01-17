<x-layout>
    <div class="max-w-screen-lg min-h-screen sm:px-16 md:px-24">

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
        </div>
        
    </div>
</x-layout>
