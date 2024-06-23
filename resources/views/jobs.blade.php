<x-layout>
    <x-slot:heading>
        Jobs listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="{{ route('jobs.show', $job['id']) }}">
                {{ $job['title'] }}, pays: {{ $job['salary'] }} per year
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>