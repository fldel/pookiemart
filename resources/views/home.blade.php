<x-app-layout>
    <div class="relative w-full h-screen overflow-hidden" 
         x-data="carousel()" 
         x-init="init()">
        
        <!-- Slides Wrapper -->
        <div class="relative w-full h-[800px] overflow-hidden" 
     x-data="carousel()" 
     x-init="init()">
    
    <!-- Slides Wrapper -->
    <div class="flex h-full transition-transform duration-700 ease-in-out"
         :style="`transform: translateX(-${activeIndex * 100}%)`">
        
        <template x-for="(slide, index) in slides" :key="index">
            <div class="flex-shrink-0 w-full h-full">
                <!-- Gambar -->
                <img x-show="slide.type === 'image'" 
                     :src="slide.src" 
                     class="object-cover w-full h-full" />
                
                <!-- Video -->
                <video x-show="slide.type === 'video'" 
                       :src="slide.src" 
                       class="object-cover w-full h-full"
                       autoplay muted playsinline
                       @ended="next()"></video>
            </div>
        </template>
    </div>

    <!-- Next / Prev -->
    <button @click="prev()" 
        class="absolute flex items-center justify-center text-white -translate-y-1/2 rounded-full h-14 w-14 w-15 left-4 top-1/2 bg-black/40 hover:bg-black/60">
        ‹
    </button>

    <button @click="next()" 
        class="absolute flex items-center justify-center text-white -translate-y-1/2 rounded-full tetx-lg h-14 w-14 right-4 top-1/2 bg-black/40 hover:bg-black/60">
        ›
    </button>

    <!-- Indicators -->
    <div class="absolute flex w-1/3 gap-2 -translate-x-1/2 bottom-4 left-1/2">
        <template x-for="(slide, index) in slides" :key="index">
            <div class="flex-1 h-1 overflow-hidden bg-gray-400 rounded-full">
                <div class="h-full transition-all duration-500 bg-brand-default"
                     :style="activeIndex === index ? `width:${progress}%` : 'width:0%'"></div>
            </div>
        </template>
    </div>
</div>

</x-app-layout>
