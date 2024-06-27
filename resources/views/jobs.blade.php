<x-layout>
    <x-slot:heading>
        Jobs listing
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a class="block px-4 py-6 border-gray-200 rounded-lg" href="{{ route('jobs.show', $job['id']) }}">
                <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div>
                    <strong>
                    {{ $job['title'] }}, pays: {{ $job['salary'] }} per year
                    </strong>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>