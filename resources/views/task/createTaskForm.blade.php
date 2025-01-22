@include('components.header')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="{{asset('logo.png')}}" alt="Your Company">
        <h3 class="mt-3 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Add new Task</h3>
    </div>

    <div class="mt-3 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{route('task.submitTask')}}" method="POST">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-900">Title</label>
                <div class="mt-1">
                    <input id="title" name="title" type="text" autocomplete="title" required
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="description" class="block text-sm font-medium text-gray-900">Description</label>
                </div>
                <div class="mt-1">
                    <textarea name="description" id="description" required
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-900">Status</label>
                <div class="mt-1">
                    <select name="status" required id="status"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="due_date" class="block text-sm font-medium text-gray-900">Status</label>
                <div class="mt-1">
                    <input type="date" name="due_date" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button type="submit" name="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Task List
            <a href="{{route('task.taksList')}}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Here.</a>
        </p>
    </div>
</div>



<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->

    {{-- <h2>Add new Task</h2>
    <form action="{{ route('task.submitTask') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title"><br>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea><br>
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="">Select Status</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select><br>
        <label for="due_date">Due Date</label>
        <input type="date" name="due_date"><br>
        <input type="submit">
    </form> --}}
</div>
