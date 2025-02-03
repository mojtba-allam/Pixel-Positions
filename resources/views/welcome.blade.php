<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="text-4xl font-bold">
                Let's find your next job
            </h1>
            <form action="" class="mt-5">
                <input type="text" placeholder="I'm looking for..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />

            </div>
        </section>

            <section>
                <x-section-heading>Tags</x-section-heading>
                <div class="mt-6 space-x-2">
                    <x-tag>Laravel</x-tag>
                    <x-tag>Vue</x-tag>
                    <x-tag>React</x-tag>
                    <x-tag>Node</x-tag>
                    <x-tag>Python</x-tag>
                    <x-tag>Ruby</x-tag>
                    <x-tag>Typescript</x-tag>
                    <x-tag>Docker</x-tag>
                    <x-tag>AWS</x-tag>
                    <x-tag>Git</x-tag>
                </div>
            </section>

            <section>

                <x-section-heading>Recent Jobs</x-section-heading>
                <div class="mt-6 space-y-6">
                    <x-job-card-wide />
                    <x-job-card-wide />
                    <x-job-card-wide />
                </div>

            </section>

            <section>


    </div>
</x-layout>
