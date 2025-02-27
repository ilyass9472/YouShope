
<x-app-layout>
    @role('admin')
        <div class="relative">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-white leading-tight z-50">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>
        </div>
    @endrole

    <div class="py-12 z-50" id="messageDeAutentification">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ sprintf(__("Bonjour Mr %s"), Auth::user()->name) }}
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('messageDeAutentification')?.remove();
        }, 3000);
    </script>

</x-app-layout>
