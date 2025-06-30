<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div> -->
                <div class="p-6 text-gray-900">
                    Hi <strong>{{ auth()->user()->username }}</strong>,
                    <br>
                    You are logged in with the email: <strong>{{ auth()->user()->email }}</strong>
                    <br>
                    and you registered on: <strong>{{ auth()->user()->created_at->format('d/m/Y H:i') }}</strong>
                </div>

                @if (auth()->user()->is_admin)
                    <div class="border-t border-gray-200 p-6">
                        <h3 class="text-lg font-medium text-gray-900">Admin Panel</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            You have access to the administration area.
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('admin.users.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Manage Users
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
