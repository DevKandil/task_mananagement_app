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
                                            Tasks
                                        </h2>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Manage tasks, edit and more.
                                        </p>
                                    </div>

                                    <div>
                                        <div class="inline-flex gap-x-2">

                                            <a class="inline-flex items-center justify-center gap-2 rounded-md border border-transparent bg-blue-500 px-3 py-2 text-sm font-semibold text-white transition-all hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                                               href="tasks/create">
                                                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                     height="16"
                                                     viewBox="0 0 16 16" fill="none">
                                                    <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                          stroke="currentColor"
                                                          stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                                New task
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Header -->

                                <!-- Table -->
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-slate-800">
                                    <tr>
                                        <th scope="col" class="py-3 pl-6 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-800 dark:text-gray-200">
                                                    #ID
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="py-3 pl-6 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-800 dark:text-gray-200">
                                                    Title
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="py-3 pr-6 pl-6 text-left lg:pl-3 xl:pl-0">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-800 dark:text-gray-200">
                                                    Description
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-800 dark:text-gray-200">
                                                    Due Date
                                                </span>
                                            </div>
                                        </th>


                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-800 dark:text-gray-200">
                                                    Created At
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-right">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold tracking-wide text-gray-800 dark:text-gray-200">
                                                    Action
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                                    @foreach ($tasks as $task)
                                        <tr>

                                            <td class="">
                                                <div class="px-6 py-3">
                                                    <span class="text-sm text-gray-500">{{ $task->id }}</span>
                                                </div>
                                            </td>


                                            <td class="">
                                                <div class="px-6 py-3">
                                                    <span class="text-sm text-gray-500">{{ $task->title }}</span>
                                                </div>
                                            </td>


                                            <td class="">
                                                <div class="px-6 py-3">
                                                    <span class="text-sm text-gray-500">{{ $task->description }}</span>
                                                </div>
                                            </td>


                                            <td class="w-32">
                                                <div class="px-6 py-3">
                                                    <span class="text-sm text-gray-500">{{ $task->due_date }}</span>
                                                </div>
                                            </td>


                                            <td class="h-px w-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="text-sm text-gray-500">{{ $task->created_at }}</span>
                                                </div>
                                            </td>


                                            <td class="h-px w-px whitespace-nowrap">
                                                <div class="px-6 py-1.5">
                                                    <a class="inline-flex items-center justify-center gap-2 rounded-md border border-transparent bg-gray-400 px-2 py-1 text-xs text-white transition-all hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                                                       href="/tasks/{{ $task->id }}">
                                                        Show
                                                    </a>

                                                    <a class="inline-flex items-center justify-center gap-2 rounded-md border border-transparent bg-blue-500 px-2 py-1 text-xs text-white transition-all hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                                                       href="tasks/{{ $task->id }}/edit">
                                                        Edit
                                                    </a>

                                                    <form method="POST" action="tasks/{{ $task->id }}" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            class="inline-flex items-center justify-center gap-2 rounded-md border border-transparent bg-red-400 px-2 py-1 text-xs text-white transition-all hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                                                            Delete
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>


                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <!-- End Table -->

                                <!-- Footer -->
                                <div class="p-3 pb-0">
                                    {{ $tasks->links() }}
                                </div>
                                <!-- End Footer -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
