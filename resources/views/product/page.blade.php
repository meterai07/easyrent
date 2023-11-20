@extends('product.layout.main')

@section('title', 'Page')

@section('content')
    <div class="w-full h-full px-32 py-4 bg-gray-100">
        <div class="pt-7 flex flex-col gap-8">
            <div
                class="h-96 flex flex-col rounded-3xl bg-cover bg-[url('../../../public/assets/product-page-bg.jpg')] justify-center items-center gap-3 text-white">
                <h1 class="text-6xl font-sans">Lorem Ipsum</h1>
                <h3 class="text-base font-sans">Lorem ipsum dolor sit amet consectetur. Tempor id nunc cursus euismod id
                    egestas. Iaculis nec cursus sit proin urna lorem ac potenti morbi.</h3>
            </div>
            <div class="flex justify-between w-full gap-4">
                <div class="flex items-start justify-between gap-4">
                    <div class="relative justify-between inline-block text-left w-48">
                        <div>
                            <button type="button" class="inline-flex w-full justify-between rounded-md bg-white px-3 py-2 text-sm font-sans font-normal text-gray-400 shadow-sm ring-1 ring-inset ring-gray-400 hover:bg-gray-50" id="categories-button" aria-expanded="true" aria-haspopup="true">
                                Categories
                                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                            role="menu" aria-orientation="vertical" aria-labelledby="categories-button" tabindex="-1"
                            id="categories-dd">
                            <div role="none">
                                <form action="/product" method="get">
                                    <button type="submit" name="category" class="w-full font-sans text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="categories-menu-item-0" value="all">All Categories</button>
                                    @foreach ($categories as $category)
                                        <button type="submit" name="category" class="w-full font-sans text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="categories-menu-item-{{ $category->id - 1 }}" value="{{ $category->name }}">{{ $category->name }}</button>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="relative justify-between inline-block text-left w-48">
                        <div>
                            <button type="button" class="inline-flex w-full justify-between rounded-md bg-white px-3 py-2 text-sm font-sans font-normal text-gray-400 shadow-sm ring-1 ring-inset ring-gray-400 hover:bg-gray-50" id="type-button" aria-expanded="true" aria-haspopup="true">
                                Type
                                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="type-button" tabindex="-1" id="type-dd">
                            <div class="py-1" role="none">
                                <a href="#" class="font-sans text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="type-menu-item-0">Motorcycle</a>
                                <a href="#" class="font-sans text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="type-menu-item-1">Car</a>
                                <form method="POST" action="#" role="none"></form>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="relative justify-between inline-block text-left w-48">
                        <div>
                            <button type="button" class="inline-flex w-full justify-between rounded-md bg-white px-3 py-2 text-sm font-sans font-normal text-gray-400 shadow-sm ring-1 ring-inset ring-gray-400 hover:bg-gray-50" id="price-range-button" aria-expanded="true" aria-haspopup="true">
                                Price Range
                                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="price-range-button" tabindex="-1" id="price-range-dd">
                            <div class="py-1" role="none">
                                <a href="#" class="font-sans text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="price-range-menu-item-0">Motorcycle</a>
                                <a href="#" class="font-sans text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="price-range-menu-item-1">Car</a>
                                <form method="POST" action="#" role="none"></form>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <form action="/product" method="get">
                    <div class="flex w-96 h-[36px] justify-between rounded-md bg-white px-6 py-2 text-sm font-sans font-normal text-gray-400 shadow-sm ring-1 ring-gray-400">
                        <input name="name" type="text" placeholder="Search your car" class="outline-none w-full">
                        <button type="submit">
                            <img src="assets/MagnifyingGlass.svg" alt="search">
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-10 my-4" id="vehicleList">
            @if ($categoriesRequest != null)
                @foreach ($vehicles as $vehicle)
                    @if ($vehicle->category_id == $categoriesRequest->id)
                        <div class="p-6 rounded-lg shadow-lg">
                            <h2 class="text-4xl font-sans font-bold">Mobil {{ $vehicle->name }}</h2>
                            @foreach ($categories as $category)
                                @if ($vehicle->category_id == $category->id)
                                    <h3 class="text-base font-sans">{{ $category->name }}</h3>
                                @endif
                            @endforeach
                            <img src="assets/item-product.png" alt="product" class=" w-full my-4">
                            <div class="flex justify-between items-center">
                                <h5 class="text-base font-sans font-normal text-black">Rp. {{ $vehicle->price }}/day</h5>
                                <a href="/product/{{ $vehicle->id }}">
                                    <button type="button"
                                        class="flex py-3 pl-6 pr-4 justify-center items-center gap-2 bg-blue-600 rounded-lg">
                                        <h3 class="text-base font-sans font-semibold text-white">Rent</h3>
                                        <img src="assets/ArrowRight.svg" alt="">
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
            @foreach ($vehicles as $vehicle)
                <div class="p-6 rounded-lg shadow-lg">
                    <h2 class="text-4xl font-sans font-bold">Mobil {{ $vehicle->name }}</h2>
                    @foreach ($categories as $category)
                        @if ($vehicle->category_id == $category->id)
                            <h3 class="text-base font-sans">{{ $category->name }}</h3>
                        @endif
                    @endforeach
                    <img src="assets/item-product.png" alt="product" class=" w-full my-4">
                    <div class="flex justify-between items-center">
                        <h5 class="text-base font-sans font-normal text-black">Rp. {{ $vehicle->price }}/day</h5>
                        <a href="/product/{{ $vehicle->id }}">
                            <button type="button"
                                class="flex py-3 pl-6 pr-4 justify-center items-center gap-2 bg-blue-600 rounded-lg">
                                <h3 class="text-base font-sans font-semibold text-white">Rent</h3>
                                <img src="assets/ArrowRight.svg" alt="">
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
        {{-- <div class="flex justify-center gap-6 mt-4">
            <a href="#" class="px-6 py-4 font-sans bg-gray-100 text-blue-600 border-blue-600 rounded-lg border-[1.5px] hover:bg-blue-600 hover:text-white hover:border-white">1</a>
            <a href="#" class="px-6 py-4 font-sans bg-gray-100 text-blue-600 border-blue-600 rounded-lg border-[1.5px] hover:bg-blue-600 hover:text-white hover:border-white">2</a>
            <a href="#" class="px-6 py-4 font-sans bg-gray-100 text-blue-600 border-blue-600 rounded-lg border-[1.5px] hover:bg-blue-600 hover:text-white hover:border-white">3</a>
            <a href="#" class="px-6 py-4 font-sans bg-gray-100 text-blue-600 border-blue-600 rounded-lg border-[1.5px] hover:bg-blue-600 hover:text-white hover:border-white">4</a>
            <a href="#" class="px-6 py-4 font-sans bg-gray-100 text-blue-600 border-blue-600 rounded-lg border-[1.5px] hover:bg-blue-600 hover:text-white hover:border-white">5</a>
        </div> --}}
    </div>
@endsection
