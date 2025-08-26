@props(['image' => null, 'name' => 'Product Name', 'price' => 'Rp 0'])

<div class="overflow-hidden transition bg-white shadow rounded-xl hover:shadow-lg">
    <div class="w-full h-64 overflow-hidden">
        <img src="{{ $image ?? asset('img/placeholder.png') }}" 
             alt="{{ $name }}" 
             class="object-cover w-full h-full transition duration-300 hover:scale-105">
    </div>
    <div class="p-4 text-center">
        <h3 class="text-lg font-semibold text-gray-800">{{ $name }}</h3>
        <p class="mt-1 font-bold text-brand-default">{{ $price }}</p>
    </div>
</div>
