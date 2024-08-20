<div>
    <section class="py-24 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="relative flex bg-clip-border rounded-xl bg-white text-gray-700 shadow-md w-full max-w-[48rem] flex-row">
                    <div
                        class="relative w-2/5 m-0 overflow-hidden text-gray-700 bg-white rounded-r-none bg-clip-border rounded-xl shrink-0">
                        <img
                            src="{{ Storage::url($event->image_url) }}"
                            alt="card-image" class="object-cover w-full h-full" />
                    </div>
                    <div class="p-6">
                        <h6
                            class="block mb-4 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-gray-700 uppercase">
                            {{ $event->title }}

                        </h6>
                        <h4 class="block mb-2 font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            {{ $event->date->format("d-m-Y") }}
                        </h4>
                        <p class="block mb-8 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                            {!! $event->body !!}
                        </p>
                        <p class="block">{{ $event->place }}
                            <a class="text-white" href="http://maps.google.com/?q={{ $event->place }}" target="_blank">
                                <svg class="text-red-basic w-5 h-5" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"></path>
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
