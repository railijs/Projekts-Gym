<x-app-layout>
    <h2 class="text-4xl text-center mt-5 text-white">Create a Plan</h2>
    <a href="/index" class="block w-64 mx-auto text-center text-white mt-2 py-2 px-4 rounded-md bg-gray-800 hover:bg-gray-700">Back</a>
    <div class="mt-5 flex justify-center">
        <form method="POST" action="/store" class="w-64" id="planForm">
            @csrf
            <div class="mb-4">
    <label class="block text-black">
        Day:
        <select name="day" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
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

<div id="exerciseInputs">
    <div class="mb-4">
        <label class="block text-black">
            Exercise:
            <input name="exercise[]" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </label>
    </div>
</div>

<button type="button" onclick="addExercise()" class="inline-block bg-gray-800 text-white font-bold py-2 px-4 rounded-md mb-4">+</button>

<div class="mb-4">
    <label class="block text-black">
        Reps:
        <input name="reps" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    </label>
</div>

<div class="mb-4">
    <label class="block text-black">
        Sets:
        <input name="sets" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    </label>
</div>

<div class="mb-4">
    <label class="block text-black">
        Rest(min):
        <input name="rest" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    </label>
</div>            
            <button type="submit" class="w-full bg-gray-800 text-white py-2 px-4 rounded-md focus:outline-none focus:bg-gray-700 hover:bg-gray-700">Create</button>
        </form>
    </div>

    <script>
        function addExercise() {
            var exerciseInputs = document.getElementById("exerciseInputs");
            var input = document.createElement("input");
            input.name = "exercise[]";
            input.className = "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50";
            exerciseInputs.appendChild(input);
        }
    </script>
</x-app-layout>