<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">


                <div class="flex flex-col">
                    <div class="overflow-x-auto -m-1.5">
                        <div class="inline-block min-w-full align-middle p-1.5">
                            <div
                                class="overflow-hidden rounded-xl border border-gray-200 bg-white pb-4 shadow-sm dark:border-gray-700 dark:bg-slate-900">
                                <!-- Header -->
                                <div
                                    class="grid gap-3 border-b border-gray-200 px-6 py-4 dark:border-gray-700 md:flex md:items-center md:justify-between">
                                    <div>
                                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                            Edit Task
                                        </h2>
                                    </div>

                                    <div>
                                        <div class="inline-flex gap-x-2">

                                            <a class="inline-flex items-center justify-center gap-2 rounded-md border border-transparent bg-blue-500 px-3 py-2 text-sm font-semibold text-white transition-all hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                                               href="/tasks">
                                                Tasks list
                                            </a>

                                            <form action="/tasks/{{ $task->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="javascript:{}" onclick="this.closest('form').submit();return false;" class="inline-flex items-center justify-center gap-2 rounded-md border border-transparent bg-red-500 px-3 py-2 text-sm font-semibold text-white transition-all hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                                                    Delete
                                                </a>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Header -->


                                <section class="bg-white dark:bg-gray-900">
                                    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">


                                        <form action="/tasks/{{ $task->id }}" method="post">
                                            @csrf
                                            @method('PATCH')

                                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                                <div class="sm:col-span-2">
                                                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task title</label>
                                                    <input type="text" value="{{ $task->title }}" name="title" id="title" class="bg-gray-50 border @error('title') border-red-300 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type task name">
                                                    @error('title')
                                                        <div class="text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                                <div class="sm:col-span-2">
                                                    <label for="due_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Due Date</label>
                                                    <input type="date" value="{{ $task->due_date }}" name="due_date" id="due_date" class="bg-gray-50 border @error('due_date') border-red-300 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    @error('due_date')
                                                        <div class="text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                                <div class="sm:col-span-2">
                                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                                    <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border @error('description') border-red-300 @else border-gray-300 @enderror focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here">{{ $task->description }}</textarea>
                                                    @error('description')
                                                        <div class="text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>


                                                    <button type="submit" class="mt-4 inline-flex items-center justify-center gap-2 rounded-md border border-transparent bg-blue-500 me-2 px-3 py-2 text-sm font-semibold text-white transition-all hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                                                        Update
                                                    </button>

                                        </form>


                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
