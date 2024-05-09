<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($planner) ? __('Edit Planner') : __('Create Planner') }}
        </h2>
    </x-slot>

    <div class="flex justify-center h-screen">
        <div class="max-w-lg mt-10">
            <form method="POST" action="{{ isset($planner) ? '/planners/'.$planner->id : '/store' }}" class="w-64 mx-auto">
                @csrf
                @if(isset($planner))
                    @method('PUT')
                @endif

                <div class="mb-4">
                    <label class="block text-black">
                        Day:
                        <select type="text" value="{{ isset($planner) ? $planner->day : '' }}" name="day" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block text-black">
                        Exercise:
                        <input type="text" value="{{ isset($planner) ? $planner->exercise : '' }}" name="exercise" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block text-black">
                        Reps:
                        <input type="number" value="{{ isset($planner) ? $planner->reps : '' }}" name="reps" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block text-black">
                        Sets:
                        <input type="number" value="{{ isset($planner) ? $planner->sets : '' }}" name="sets" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block text-black">
                        Rest(min):
                        <input type="number" value="{{ isset($planner) ? $planner->rest : '' }}" name="rest" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </label>
                </div>
                
                <button type="submit" class="w-full bg-gray-800 text-white py-2 px-4 rounded-md focus:outline-none focus:bg-gray-700 hover:bg-gray-700">{{ isset($planner) ? 'Update' : 'Create' }}</button>
            </form>
            <a href="/show/{{$planner->id}}" class="inline-block bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-4 block text-center">Back</a>        </div>
    </div>
</x-app-layout>