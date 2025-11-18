<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="text-4xl font-bold">Welcome to JobBoard</h1>

            <form action="#" class="mt-6">
                <input type="text" placeholder="Search jobs..." class="w-full max-w-xl border bg-white/5 border-white/10 rounded-xl p-2" />
            </form>
        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                <x-tag size='large'>Tag</x-tag>
                <x-tag size='large'>Tag</x-tag>
                <x-tag size='large'>Tag</x-tag>
                <x-tag size='large'>Tag</x-tag>
                <x-tag size='large'>Tag</x-tag>
                <x-tag size='large'>Tag</x-tag>
                <x-tag size='large'>Tag</x-tag>
                <x-tag size='large'>Tag</x-tag>
                <x-tag size='large'>Tag</x-tag>
                <x-tag size='large'>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                <x-job-card-wide class="mt-6" />
                <x-job-card-wide class="mt-6" />
            </div>
        </section>
    </div>
</x-layout>