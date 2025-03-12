@extends('base.layout')
@section('style')
    <style>
        h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        p {
            font-family: 'Inter', sans-serif;
        }

        @keyframes idleScale {
            0%, 33% { transform: scale(1); }
            16% { transform: scale(1.1); }
        }

        .idle-scale {
            animation: idleScale 6s ease-in-out infinite;
        }

        .delay-1 { animation-delay: 0s; }
        .delay-2 { animation-delay: 2s; }
        .delay-3 { animation-delay: 4s; }
    </style>
@endsection
@section('content')
    <div class="flex flex-col">
        <div class="text-center text-white px-6 mb-18">
            <h1 class="text-6xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-200 drop-shadow-lg">
                PetNom 🍖
            </h1>
            <p class="text-lg mt-4 italic opacity-90">"Nourish. Love. Repeat."</p>
            <p class="text-xl mt-2 font-medium opacity-95">Quality pet food for a healthier tomorrow.</p>
            <a href="{{route('catalog')}}" class="mt-6 relative inline-block bg-white text-purple-600 font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-gray-100 transition duration-300">
                View Our Product
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <div class="p-6 bg-white rounded-lg shadow idle-scale delay-1">
                <h3 class="text-xl font-semibold text-purple-600">🐾 Premium Ingredients</h3>
                <p class="text-gray-600">Only high-quality, organic pet food.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow idle-scale delay-2">
                <h3 class="text-xl font-semibold text-purple-600">🚚 Fast & Free Delivery</h3>
                <p class="text-gray-600">Get your order in 24-48 hours.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow idle-scale delay-3">
                <h3 class="text-xl font-semibold text-purple-600">❤️ Loved by Pets</h3>
                <p class="text-gray-600">Over 10,000 happy customers!</p>
            </div>
        </div>
    </div>
@endsection
@section('script')
    
@endsection