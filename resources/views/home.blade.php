<x-app-layout>
    <div class="fixed bottom-6 right-6 z-50">
    <div class="relative">
        <div class="absolute inset-[-8px] rounded-full bg-gradient-to-r from-brand-default via-purple-500 to-brand-dark blur-1xl opacity-90 animate-pulse"></div>
        
        <button 
        class="relative flex items-center justify-center w-16 h-16 rounded-full bg-white transition-transform duration-300 ease-in-out hover:scale-110 text-white shadow-lg">
            <img src="{{ asset('img/pookielogo.png') }}" alt="Chatbot" class="w-14 h-13">
        </button>
        </div>
    </div>    
<!-- Wrapper slider -->
    <div class="relative w-[90%] md:w-[96%] mx-auto mt-10 overflow-hidden rounded-2xl"
         x-data="carousel()" x-init="init()">

        <!-- Slides Wrapper -->
        <div class="flex h-[750px] transition-transform duration-700 ease-in-out"
             :style="`transform: translateX(-${activeIndex * 100}%)`">

            <!-- Slide -->
            <template x-for="(slide, index) in slides" :key="index">
                <div class="relative flex-shrink-0 w-full h-full">
                    <!-- Image -->
                    <img x-show="slide.type === 'image'" :src="slide.src"
                         class="object-cover w-full h-full" />

                    <!-- Video -->
                    <video x-show="slide.type === 'video'" :src="slide.src"
                        class="object-cover w-full h-full"
                           autoplay muted playsinline
                           @ended="next()" 
                           x-ref="videoEls[index]"></video>

                    <!-- Gradient Overlay (bottom) -->
                    <div class="absolute bottom-0 left-0 w-full h-32 pointer-events-none bg-gradient-to-t from-brand-dark/30 to-transparent rounded-b-2xl">
                    </div>
                </div>
            </template>
        </div>

        <!-- Next / Prev -->
        <button @click="prev()" 
                class="absolute flex items-center justify-center w-10 h-10 text-white -translate-y-1/2 rounded-full left-4 top-1/2 bg-black/50 hover:bg-black/70">
            ‹
        </button>
        <button @click="next()" 
                class="absolute flex items-center justify-center w-10 h-10 text-white -translate-y-1/2 rounded-full right-4 top-1/2 bg-black/50 hover:bg-black/70">
            ›
        </button>

        <!-- Indicators (dots) -->
        <div class="absolute flex items-center gap-2 -translate-x-1/2 bottom-4 left-1/2">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="goTo(index)"
                        class="w-3 h-3 transition-all rounded-full"
                        :class="activeIndex === index ? 'bg-brand-default' : 'bg-gray-300'">
                </button>
            </template>
        </div>
    </div>

<!-- Hero Section -->
<section class="w-[90%] md:w-[95%] mx-auto mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Gambar Kiri -->
    <div class="overflow-hidden rounded-xl h-[650px]" data-aos="fade-right">
        <img src="{{ asset('img/pookieai.png') }}" 
            alt="Pookie Kitkat" 
            class="object-cover w-full h-full">
    </div>

    <!-- Teks Kanan -->
    <div class="mx-6 mt-16" data-aos="fade-left">
        <h1 class="mb-3 text-5xl font-bold">Pookie, Smart <br> Shopping Assistant</h1>
        <h1 class="mb-16 text-2xl text-gray-600">Don't judge before you try it</h1>
        <button class="px-16 py-5 font-semibold text-white rounded-lg shadow bg-brand-default hover:bg-brand-dark" data-aos="zoom-in" data-aos-delay="300">
            Meet Pookie
        </button>
    </div>
</section>

<!-- New Products Section -->
<section class="w-[90%] mx-auto mt-16" data-aos="fade-up">
    <h2 class="mb-8 text-5xl font-bold text-center">New Products</h2>
    <hr class="mx-auto mb-12 border-gray-500 w-100">
    
    <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
        @foreach($products as $product)
            <div class="p-6 transition bg-white shadow rounded-xl hover:shadow-lg" 
                 data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                <img src="{{ asset('storage/'.$product->image) }}" 
                    alt="{{ $product->name }}" 
                    class="object-cover w-full h-48 mb-4 rounded-lg">

                <h3 class="text-xl font-semibold">{{ $product->name }}</h3>
                <p class="mt-2 text-sm text-gray-600">{{ $product->description }}</p>
                <p class="mt-3 text-lg font-bold">Rp {{ number_format($product->price) }}</p>
            </div>
        @endforeach
    </div>
</section>

</x-app-layout>
