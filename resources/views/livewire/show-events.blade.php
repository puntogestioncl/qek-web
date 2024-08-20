<div>

    <section class="py-24 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="mb-20 md:max-w-2xl text-center mx-auto">
                <span class="inline-block mb-4 text-sm text-red-basic font-medium tracking-tighter">QEK</span>
                <h2 class="font-heading mb-8 text-7xl lg:text-8xl text-white tracking-7xl lg:tracking-8xl">Proximos eventos</h2>
                <p class="mb-12 text-gray-300 max-w-sm mx-auto">Proximos eventos, para ir a disfrutar de la chilena, zapateo, comida, copete y a,migos, no han de faltar</p>
            </div>
            <div class="flex flex-wrap -m-4">

                @foreach( $events as $event)
                    <div wire:key="{{ $event->id }}" class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="relative px-8 pt-12 pb-12 h-full bg-gradient-radial-dark border-2 border-gray-900 border-opacity-30 overflow-hidden rounded-5xl">
                            <p class="mb-2 text-lg text-white font-light">{{ $event->date->format('d-m') }}</p>
                            <p class="mb-6 text-gray-300">{{ $event->title }}</p>

                            <img class="mb-10" src="{{ Storage::url( $event->image_url ) }}">

                            <div class="mb-4 text-white">
                                {!! $event->body !!}
                            </div>

                            <div class="flex items-center mb-4">
                                <div class="flex items-center justify-center w-5 h-5 mr-4 rounded-full">
                                    <svg class="text-red-basic"  fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"></path>
                                    </svg>
                                </div>
                                <p class="text-white flex-1">{{ $event->place }}</p>
                                <a class="text-white" href="http://maps.google.com/?q={{ $event->place }}" target="_blank">
                                    <svg class="text-red-basic w-5 h-5" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                </a>
                            </div>

                            <a href="{{ route('event', $event->id ) }}" class="relative z-10 block px-14 py-4 text-center font-medium tracking-2xl border-2 border-red-basic bg-red-basic hover:bg-red-700 text-white focus:ring-4 focus:ring-red-800 focus:ring-opacity-40 rounded-full transition duration-500">VER</a>
                            <img class="absolute bottom-0 right-0" src="" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
