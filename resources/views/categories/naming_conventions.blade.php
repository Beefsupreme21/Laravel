<x-layout>
    <div class="w-4/5 mx-auto text-white">
        <h1 class="text-4xl font-bold my-5">Standard Naming Conventions</h1>
    
        <div class="mt-10 mb-5">
            <div class="flex items-center mb-5 -ml-10">
                <img src="{{ asset('images/hashtag.png') }}" class="w-8 h-8 mr-2" alt="My Image">
                <p class="text-3xl">Routes</p>
            </div>
            <p class="mb-5">Use the plural form of the resource name.</p>
            <script type="text/plain" class="language-javascript max-w-[640px]">
                Route::get('/posts', function () {
                    return view('posts.index');
                });
            </script>
        </div>

        <div class="mt-10 mb-5">
            <div class="flex items-center mb-5 -ml-10">
                <img src="{{ asset('images/hashtag.png') }}" class="w-8 h-8 mr-2" alt="My Image">
                <p class="text-3xl">Controllers</p>
            </div>
            <p class="mb-5">They should be in singular case, no spacing between words, be in PascalCase/CapitalCase, and end with "Controller". </p>
            <div class="flex justify-evenly">
                <div>
                    <p class="text-lg ml-2 underline">Good Examples</p>
                    <ul class="list-disc pl-6">
                        <li>BlogController</li>
                        <li>PostController</li>
                        <li>UserController</li>
                    </ul>
                </div>
                <div>
                    <p class="text-lg ml-4 underline">Bad Examples</p>
                    <ul class="list-disc pl-6">
                        <li>UsersController</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-10 mb-5">
            <div class="flex items-center mb-5 -ml-10">
                <img src="{{ asset('images/hashtag.png') }}" class="w-8 h-8 mr-2" alt="My Image">
                <p class="text-3xl">Models</p>
            </div>
            <p class="mb-5">A model name should meet the following criteria:</p>
            <ul class="list-disc mb-5 pl-6">
                <li>Singular</li>
                <li>Capitalised</li>
                <li>No spacing between words</li>
                <li>PascalCase/CapitalCase</li>
            </ul>
            <div class="flex justify-evenly">
                <div>
                    <p class="text-lg ml-2 underline">Good Examples</p>
                    <ul class="list-disc pl-6">
                        <li>User</li>
                        <li>Comment</li>
                    </ul>
                </div>
                <div>
                    <p class="text-lg ml-4 underline">Bad Examples</p>
                    <ul class="list-disc pl-6">
                        <li>Users</li>
                        <li>ForumPosts</li>
                        <li>blogpost</li>
                        <li>blog_post</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</x-layout>
