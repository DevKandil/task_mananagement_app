<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 pb-2 text-gray-900">
                    Welcome : {{ auth()->user()->name }}
                </div>
                <div class="px-6 pt-3 pb-5  text-gray-900">
                    Go to tasks list :
                    <a href="{{ route('tasks.index') }}" class="text-blue-500">Tasks</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
