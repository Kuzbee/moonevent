@extends('front.layouts.app')
@section('content')

<section class="max-w-[400px] bg-[#F9F2EF] mx-auto px-4 py-8">
    <nav class="mt-8 px-4 w-full flex items-center justify-between">
        <a href="{{route('front.calendarbooking', $package_tours->slug)}}">
          <img src="{{asset('assets/icons/back.png')}}" alt="back">
        </a>
        <p class="text-center m-auto font-semibold">Booking</p>
  </nav>
    <div class="max-w-[400px] bg-[#F9F2EF] mx-auto px-4 py-8">
        <h4 class="text-center text-2xl font-bold mb-6">Detail Wedding Package</h4>
        <form>
            <!-- Venue -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Venue</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="venue">
                    <option value="venue1">Grand Ballroom</option>
                    <option value="venue2">Outdoor Garden</option>
                    <option value="venue3">Beachside</option>
                </select>
            </div>
            
            <!-- Catering -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Catering</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="catering">
                    <option value="diamond" selected>Diamond Catering</option>
                    <option value="nendang">Nendang Rasa</option>
                    <option value="caterindo">Caterindo</option>
                </select>
            </div>
            
            <!-- Decoration -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Decoration</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="decoration">
                    <option value="modern">Modern</option>
                    <option value="classic">Classic</option>
                    <option value="rustic">Rustic</option>
                </select>
            </div>
            
            <!-- Fashion Styling and Makeup -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Fashion Styling and Makeup</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="fashion_makeup">
                    <option value="simple">Simple</option>
                    <option value="elegant">Elegant</option>
                    <option value="luxury">Luxury</option>
                </select>
            </div>
            
            <!-- MC -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">MC</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="mc">
                    <option value="professional">Professional</option>
                    <option value="casual">Casual</option>
                    <option value="bilingual">Bilingual</option>
                </select>
            </div>
            
            <!-- Entertainment -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Entertainment</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="entertainment">
                    <option value="band">Live Band</option>
                    <option value="dj">DJ Performance</option>
                    <option value="acoustic">Acoustic</option>
                </select>
            </div>
            
            <!-- Photography -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Photography</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="photography">
                    <option value="traditional">Traditional</option>
                    <option value="candid">Candid</option>
                    <option value="cinematic">Cinematic</option>
                </select>
            </div>
            
            <!-- Confirm Button -->
            <div class="mt-6">
                <a href="{{ route('front.reservation.check') }}" class="block w-full text-center bg-indigo-600 text-white py-2 rounded-md shadow hover:bg-indigo-700 transition duration-200">
                    Confirm
                </a>
            </div>

        </form>
    </div>
</section>

@endsection
