<x-layout>

    <h2>Create a Plan</h2>
    <a href="/">Back</a>
    <div class="create">
    <form method="POST" action="/store">
        @csrf
        <label>
            Day:
            <input name="day" />
        </label>

        <label>
            Exercise:
            <input name="exercise" />
        </label>

        <label>
            Reps:
            <input name="reps" />
        </label>

        <label>
            Sets:
            <input name="sets" />
        </label>

        <label>
            Rest(min):
            <input name="rest" />
        </label>
        <button type="submit">Create</button>
    </form>
    </div>
    </x-layout>