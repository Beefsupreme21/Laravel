<x-layout>
    <div class="min-h-screen ml-24 mr-16">
        <h1 class="text-4xl text-center text-white font-bold my-5">Users</h1>
        <form action="/user-search" method="POST">
            @csrf
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" name="searchQuery" value="{{ request('searchQuery') ?? null }}" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Search" required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        <table class="w-full text-left bg-gray-600 rounded-lg shadow-md mt-8">
            <thead class="text-white bg-gray-900">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Age</th>
                    <th class="px-4 py-2">Role</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Email Verified At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="text-white even:bg-gray-800">
                        <td class="border border-black px-4 py-2">{{ $user->name }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->age }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->role->name }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->email }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->email_verified_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

