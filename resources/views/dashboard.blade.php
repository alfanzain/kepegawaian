<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome!
                </div>
                <br />
                @if( \Auth::user()->role == 2) 
                <a href="attend?employee_id={{ \Auth::id() }}" class="p-6 bg-white border-b border-gray-200">
                    <button
                    class="inline-flex items-center px-6 py-3 text-white font-semibold bg-blue-700 rounded-md shadow-sm"
                    >
                    <span>Attendance Check</span>
                    <svg class="ml-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                        fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                        ></path>
                    </svg>
                    </button>
                </a>
                <br />
                <br />
                <br />
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
