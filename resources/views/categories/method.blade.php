<x-layout>
    <div class="ml-24 mr-16">
        <h1 class="text-4xl text-center text-white font-bold my-5">Methods</h1>
        <table class="w-full text-left bg-gray-600 rounded-lg shadow-md">
            <thead class="text-white bg-gray-900">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Age</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Email Verified At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="text-white even:bg-gray-800">
                        <td class="border border-black px-4 py-2">{{ $user->name }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->age }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->email }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->email_verified_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</x-layout>
