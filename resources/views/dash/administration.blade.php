<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">
            <h2 class="text-2xl font-semibold mb-6">Administraion</h2>
            <a class=" text-white bg-indigo-600 hover:bg-indigo-800 py-2 px-4 rounded-lg my-4 "
                href="{{ route('administration.create') }}" wire:navigate>Create New Adminstration</a>
            @if (!$administrations->isEmpty())
                <!-- Table -->
                <div class="overflow-x-auto mt-2">
                    @if (session('success'))
                        <x-success />
                    @elseif(session('error'))
                        <x-errors />
                    @endif
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead class="bg-indigo-600 text-white">
                            <tr>
                                <th class="py-3 px-6 text-left">Id</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Phone</th>
                                <th class="py-3 px-6 text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($administrations as $administration)
                                <tr class="border-b hover:bg-gray-100">
                                    <td class="py-3 px-6">{{ $administration->id }}</td>
                                    <td class="py-3 px-6">{{ $administration->name }}</td>
                                    <td class="py-3 px-6">{{ $administration->phone }}</td>
                                    <td class="py-3 px-6 flex align-center justify-between">
                                        <!-- Edit Link -->
                                        <a href="{{ route('administration.edit', $administration) }}"
                                            class="text-blue-500 hover:text-blue-700 font-semibold transition-colors duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>

                                        </a>

                                        <!-- Delete Form -->
                                        @if (Auth::user()->is_principal)
                                            <form action="{{ route('administration.destroy', $administration) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-500 hover:text-red-700 font-semibold transition-colors duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>

                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <x-no-records />
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
