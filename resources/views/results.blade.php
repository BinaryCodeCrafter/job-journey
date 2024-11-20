<x-layout>
    <section>
        <x-section-heading>Results</x-section-heading>

        <div class="mt-6 space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job" />
            @endforeach
        </div>
    </section>
</x-layout>
