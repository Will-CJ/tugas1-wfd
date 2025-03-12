@extends('base.layout')
@section('style')
    
@endsection

@section('content')
<div class="flex flex-col w-full">
    <section class="max-w-5xl mx-auto pt-20 pb-16 px-6">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800">Who We Are</h2>
            <p class="text-lg text-gray-600 mt-4">Your trusted partner in pet care, offering love and quality to every pet.</p>
        </div>

        <div class="mt-10 flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2">
                <img src="{{asset('images/petShop.jpg')}}" 
                    alt="Pet Shop" 
                    class="w-full rounded-lg shadow-lg">
            </div>

            <div class="md:w-1/2">
                <h3 class="text-2xl font-semibold text-gray-800">A Place Where Pets Are Family</h3>
                <p class="text-gray-600 mt-4">
                    Suddenly founded, <span class="text-blue-600 font-semibold">PetNom</span> is a passionate team of pet lovers dedicated to providing the best pet products and services. We offer nutritious food, fun toys, and expert grooming to ensure your pets live happy and healthy lives.  
                </p>
                <p class="text-gray-600 mt-3">
                    Whether you're a pet parent or planning to adopt, we are here to support you every step of the way!
                </p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto py-16 px-6">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800">What We Offer</h2>
        </div>

        <div class="mt-10 flex flex-wrap justify-center gap-6 mx-auto">
            <div class="p-6 bg-white rounded-lg shadow-md w-full max-w-sm">
                <h3 class="text-lg font-semibold text-gray-800">Premium Pet Food</h3>
                <p class="text-gray-600 mt-2">Nutritious and delicious meals for all pets.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md w-full max-w-sm">
                <h3 class="text-lg font-semibold text-gray-800">Fun Toys & Accessories</h3>
                <p class="text-gray-600 mt-2">Keep your pets entertained and stylish.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md w-full max-w-sm">
                <h3 class="text-lg font-semibold text-gray-800">Grooming Services</h3>
                <p class="text-gray-600 mt-2">Professional grooming and spa services for a fresh look.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md w-full max-w-sm">
                <h3 class="text-lg font-semibold text-gray-800">Veterinary Consultations</h3>
                <p class="text-gray-600 mt-2">Caring for your pet's health and wellness.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md w-full max-w-sm">
                <h3 class="text-lg font-semibold text-gray-800">Pet Adoption Support</h3>
                <p class="text-gray-600 mt-2">Helping animals find their forever homes.</p>
            </div>
        </div>
    </section>

    <section class="bg-gray-900 text-white py-16 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold">Visit Us Today!</h2>
            <p class="text-lg mt-4">Come visit our store or contact us for more details.</p>

            <div class="mt-8 space-y-4">
                <p><span class="font-semibold">Address:</span> My Street, My City</p>
                <p><span class="font-semibold">Phone:</span> (123) 456-7890</p>
                <p><span class="font-semibold">Email:</span> pet@petshop.com</p>
            </div>
        </div>
    </section>

</div>
@endsection

@section('script')
    
@endsection