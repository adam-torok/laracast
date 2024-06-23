<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <p>This job pays {{ $job['salary'] }} yearly.</p>
</x-layout>