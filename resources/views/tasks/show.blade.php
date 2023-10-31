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
                                            {{ $task->title }}
                                        </h2>
                                    </div>

                                    <div>
                                        <div class="inline-flex gap-x-2">

                                            <a class="inline-flex items-center justify-center gap-2 rounded-md border border-transparent bg-blue-500 px-3 py-2 text-sm font-semibold text-white transition-all hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                                               href="/tasks">
                                                Tasks list
                                            </a>

                                            <a class="inline-flex items-center justify-center gap-2 rounded-md border border-transparent bg-teal-500 px-2 py-1 text-xs text-white transition-all hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                                               href="tasks/{{ $task->id }}/edit">
                                                Edit
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
                                    <div class="py-8 px-4 mx-auto ">


                                        <div class="sm:col-span-2 mb-4">
                                            Due Date : {{ $task->due_date }}
                                        </div>

                                        <div class="sm:col-span-2">
                                            Description :
                                            <p>
                                                {{ $task->description }}
                                            </p>
                                        </div>




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
