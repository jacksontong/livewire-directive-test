<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex flex-col space-y-6 p-3">
                <h3>Test Livewire custom directive</h3>

                <div x-data="test" x-text="text"></div>

                <div wire:sortable>
                    Sortable livewire directive
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('test', () => ({
                    text: 'From Alpine component'
                }));
            });
            document.addEventListener('alpine:init', () => {
                Livewire.directive('sortable', (el) => {
                    console.log('sortable', el); // no output on console
                });
            });
        </script>
    </div>
</x-app-layout>
