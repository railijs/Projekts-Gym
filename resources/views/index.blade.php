<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Planner') }}
        </h2>
    </x-slot>

    <div class="max-w-lg mx-auto mt-5">
        <ul>
            @foreach ($planners as $planner)
                <li class="bg-gray-800 text-white py-2 px-4 mb-2 rounded-lg hover:bg-gray-700">
                    <a href="show/{{ $planner->id }}" class="block">{{ $planner->day }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>