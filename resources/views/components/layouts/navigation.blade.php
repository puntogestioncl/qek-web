<section class="bg-body-nav" x-data="{ mobileNavOpen: false }">
    <div class="container px-4 mx-auto">
        <div class="flex items-center justify-between ">
            <div class="w-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-auto">
                        <a class="relative z-10 inline-block" href="{{ route('home') }}">
                            <img src="{{ asset('img/logo-qek.png') }}" alt="logo QEK" >
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-auto hidden lg:block">
                        <ul class="flex items-center mr-12">
                            <li class="mr-12 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="{{ route('home') }}">Inicio</a></li>
                            <li class="mr-12 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="{{ route('list-events') }}">Eventos</a></li>
                            <li class="mr-12 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="#">Grupos</a></li>
                            <li class="mr-12 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="#">Restaurantes</a></li>
                            <li class="text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="#" >Nosotros</a></li>
                        </ul>
                    </div>
                    <div class="w-auto lg:hidden">
                        <button x-on:click="mobileNavOpen = !mobileNavOpen" class="relative z-10 inline-block">
                            <svg class="text-green-500" width="51" height="51" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" data-config-id="svg-fe4768-1">
                                <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                                <path d="M37 32H19M37 24H19" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-auto hidden lg:block p-2">
                <button x-on:click="mobileNavOpen = !mobileNavOpen">
                    <svg width="18" height="17" viewbox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg" data-config-id="svg-fe4768-2"><rect width="5" height="5" rx="2.5" fill="white"></rect><rect x="13" width="5" height="5" rx="2.5" fill="white"></rect><rect x="13" y="12" width="5" height="5" rx="2.5" fill="white"></rect><rect y="12" width="5" height="5" rx="2.5" fill="white"></rect></svg>
                </button>
            </div>
        </div>
    </div>
    <div :class="{'block': mobileNavOpen, 'hidden': !mobileNavOpen}" class="hidden fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
        <div x-on:click="mobileNavOpen = !mobileNavOpen" class="fixed inset-0 bg-black opacity-60"></div>
        <nav class="relative z-10 px-9 pt-8 h-full bg-black overflow-y-auto" data-config-target=".navbar-menu" data-config-class="hidden">
            <div class="flex flex-wrap justify-between h-full">
                <div class="w-full">
                    <div class="flex items-center justify-between -m-2">
                        <div class="w-auto p-2">
                            <a class="inline-block" href="#">
                                <img src="{{ asset('img/logo-qek.png') }}" alt="Logo QEK" data-config-id="img-fe4768-2">
                            </a>
                        </div>
                        <div class="w-auto p-2">
                            <button x-on:click="mobileNavOpen = !mobileNavOpen" class="inline-block text-white">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-config-id="svg-fe4768-3">
                                    <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center py-16 w-full">
                    <ul>
                        <li class="mb-8 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="{{ url('admin/login') }}">Logueo</a></li>
                        <li class="text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
