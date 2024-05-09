<x-app-layout>
    <h1 class="text-4xl text-center text-white mt-4 mb-8">{{ $planner->day }}</h1>
    <div class="flex justify-center mb-8">
        <a href="/edit/{{$planner->id}}" class="inline-block bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-4">
            Edit
        </a>
        <form method="POST" action="/planners/{{$planner->id}}" class="inline">
            @csrf
            @method("DELETE")
            <button type="submit" class="inline-block bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                ❌
            </button>
        </form>
    </div>

    <div class="max-w-md mx-auto">
        <ul class="text-white text-center">
            <li class="mb-2 bg-gray-700 hover:bg-gray-600 rounded-md py-2 px-4">Exercises: {{ $planner->exercise }}</li>
            <li class="mb-2 bg-gray-700 hover:bg-gray-600 rounded-md py-2 px-4">Goal Rep Count for Each Exercise: {{ $planner->reps }}</li>
            <li class="mb-2 bg-gray-700 hover:bg-gray-600 rounded-md py-2 px-4">Sets for Each Exercise: {{ $planner->sets }}</li>
            <li class="mb-4 bg-gray-700 hover:bg-gray-600 rounded-md py-2 px-4">Rest Period Between Sets: {{ $planner->rest }} minutes</li>
            <li>
                <a href="/index" class="inline-block bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back
                </a>
            </li>
        </ul>
    </div>
</x-app-layout>