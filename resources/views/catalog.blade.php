@extends('base.layout')
@section('style')
    
@endsection
@section('content')
    <div class="min-h-screen p-6 pt-20 bg-transparent">
        <h1 class="text-4xl font-bold text-center text-white mb-8">Our Products</h1>
        @php
            $products = [
                [
                    'image' => 'images/dogFood.jpg',
                    'name' => 'Premium Dog Food',
                    'price' => '$19.99',
                    'description' => 'Makanan anjing berkualitas tinggi dengan kandungan protein tinggi dan vitamin untuk menjaga kesehatan anjing Anda.',
                ],
                [
                    'image' => 'images/catTreats.jpg',
                    'name' => 'Organic Cat Treats',
                    'price' => '$12.99',
                    'description' => 'Camilan organik untuk kucing dengan rasa lezat dan bahan alami tanpa bahan pengawet.',
                ],
                [
                    'image' => 'images/petShampoo.jpg',
                    'name' => 'Pet Shampoo',
                    'price' => '$9.99',
                    'description' => 'Sampo khusus hewan peliharaan dengan ekstrak herbal untuk menjaga kelembutan dan kesehatan bulu.',
                ],
                [
                    'image' => 'images/petBed.jpg',
                    'name' => 'Luxury Pet Bed',
                    'price' => '$49.99',
                    'description' => 'Kasur mewah untuk hewan peliharaan dengan bahan lembut dan desain yang nyaman.',
                ],
                [
                    'image' => 'images/petLeash.jpg',
                    'name' => 'Dog Leash & Collar',
                    'price' => '$14.99',
                    'description' => 'Tali dan kalung anjing berkualitas tinggi dengan bahan tahan lama dan nyaman digunakan.',
                ],
                [
                    'image' => 'images/catLitter.jpg',
                    'name' => 'Premium Cat Litter',
                    'price' => '$7.99',
                    'description' => 'Pasir kucing premium dengan daya serap tinggi dan bebas bau.',
                ],
                [
                    'image' => 'images/hamsterCage.jpg',
                    'name' => 'Hamster Cage',
                    'price' => '$29.99',
                    'description' => 'Kandang hamster lengkap dengan roda mainan dan tempat makan.',
                ],
                [
                    'image' => 'images/chewToys.jpg',
                    'name' => 'Chew Toys for Dogs',
                    'price' => '$5.99',
                    'description' => 'Mainan kunyah untuk anjing yang membantu menjaga kesehatan gigi dan gusi.',
                ],
            ];

        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $key => $product)
                <div class="bg-white/20 backdrop-blur-md shadow-md rounded-lg overflow-hidden p-4 transition-transform duration-300 hover:scale-110">
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-48 object-cover rounded-lg">
                    <h2 class="text-lg font-semibold mt-4 text-white">{{ $product['name'] }}</h2>
                    <p class="text-gray-200">{{ $product['price'] }}</p>
                    <button onclick="openModal({{ $key }})" class="mt-3 w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700">Detail</button>
                </div>
            @endforeach
        </div>
    </div>

    <div id="productModal" class="fixed inset-0 hidden bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 transition-opacity duration-300">
        <div id="modalContent" class="bg-white rounded-lg p-6 w-96 shadow-lg relative transform scale-75 opacity-0 transition-transform duration-300">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-red-600 text-xl">✖</button>
            <img id="modalImage" src="" alt="Product Image" class="w-full h-64 object-cover rounded-lg mt-4">
            <h2 id="modalTitle" class="text-xl font-semibold mt-4"></h2>
            <p id="modalPrice" class="text-gray-700 font-bold"></p>
            <p id="modalDescription" class="text-gray-600 mt-2"></p>
        </div>
    </div>    
@endsection
@section('script')
<script>
    let products = @json($products);

    function openModal(index) {
        let modal = document.getElementById("productModal");
        let modalContent = document.getElementById("modalContent");

        document.getElementById("modalImage").src = "{{ asset('') }}" + products[index].image;
        document.getElementById("modalTitle").innerText = products[index].name;
        document.getElementById("modalPrice").innerText = products[index].price;
        document.getElementById("modalDescription").innerText = products[index].description;

        modal.classList.remove("hidden"); 
        setTimeout(() => {
            modal.classList.replace("opacity-0", "opacity-100"); 
            modalContent.classList.replace("scale-75", "scale-100"); 
            modalContent.classList.replace("opacity-0", "opacity-100");
        }, 10);
    }

    function closeModal() {
        let modal = document.getElementById("productModal");
        let modalContent = document.getElementById("modalContent");

        modalContent.classList.replace("scale-100", "scale-75");


        setTimeout(() => {
            modal.classList.add("hidden");
            modalContent.classList.replace("opacity-100", "opacity-0");
            modal.classList.replace("opacity-100", "opacity-0");
        }, 150);
    }
</script>

@endsection