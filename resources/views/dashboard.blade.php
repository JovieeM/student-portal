
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Student Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">
                        Welcome, {{ auth()->user()->name }}!
                    </h3>

                    <p class="mb-2">
                        You are logged in to the Student Portal.
                    </p>

                    <p class="mb-2">
                        <strong>Email:</strong>
                        {{ auth()->user()->email }}
                    </p>

                    <p class="mb-2">
                        <strong>Account Created:</strong>
                        {{ auth()->user()->created_at->format('F d, Y') }}
                    </p>

                    <a
                        href="/student-resources"
                        style="display: inline-block; margin-top: 24px; padding: 12px 20px; background-color: #4f46e5; color: white; border-radius: 6px; text-decoration: none; font-weight: bold;"
                    >
                        View Student Resources
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
