@extends("transaction.layout.main")

@section('content')

<div class="flex justify-center" id="container">
    <div class="mr-12">
        {{-- Transaction Info --}}
        <form action="{{ route('save.transaction') }}" method="POST">
            @csrf
            <div class="flex flex-col justify-center items-center" id="Transaction-info">
                <div class="bg-white rounded shadow p-6 m-4">
                    <div class="text-left">
                        <h1 class="text-2xl font-bold mb-1">Transaction Info</h1>
                        <p class="text-gray-600 mt-0 mb-8">Please enter yout transaction info</p>
                    </div>
                    <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                            <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Your Name" required>
                        </div>
                        <div>
                            <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="08XXXXXXXXX" required>
                        </div>
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                            <input type="text" name="address" id="address" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Your Address" required>
                        </div>
                        <div>
                            <label for="City" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                            <input type="text" name="city" id="city" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="City" required>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Rental Info --}}
            <div class="flex flex-col justify-center items-center" id="Rental-info">
                <div class="bg-white rounded shadow p-6 m-4">
                    <div class="text-left">
                        <h1 class="text-2xl font-bold mb-1">Rental Info</h1>
                        <p class="text-gray-600 m-0">Please select your rental info</p>
                    </div>
                    <h1 class="text-2xl font-bold my-8">Pick Up Info</h1>
                    <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
                        <div>
                            <label for="pick_up_date" class="block text-sm font-medium leading-6 text-gray-900">Pick Up Date</label>
                            <input type="date" name="pick_up_date" id="pick_up_date" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Date" required>
                        </div>
                        <div>
                            <label for="pick_up_location" class="block text-sm font-medium leading-6 text-gray-900">Pick Up Location</label>
                            <input type="text" name="pick_up_location" id="pick_up_location" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Location" required>
                        </div>
                        <div>
                            <label for="pick_up_time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
                            <input type="time" name="pick_up_time" id="pick_up_time" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Time" required>
                        </div>
                    </div>
                    <h1 class="text-2xl font-bold my-8">Drop Off Info</h1>
                    <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
                        <div>
                            <label for="drop_off_date" class="block text-sm font-medium leading-6 text-gray-900">Drop off Date</label>
                            <input type="date" name="drop_off_date" id="drop_off_date" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Date" required>
                        </div>
                        <div>
                            <label for="Drop off Location" class="block text-sm font-medium leading-6 text-gray-900">Drop off Location</label>
                            <input type="text" name="drop_off_location" id="drop_off_location" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Location" required>
                        </div>
                        <div>
                            <label for="drop_off_time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
                            <input type="time" name="drop_off_time" id="drop_off_time" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Time" required>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Payment Method --}}
            <div class="flex flex-col justify-center" id="Payment-method">
                <div class="bg-white rounded shadow p-6 m-4">
                    <div class="text-left">
                        <h1 class="text-2xl font-bold mb-1">Payment Method</h1>
                        <p class="text-gray-600 m-0">Please select your payment method</p>
                    </div>
                    <div>
                        <div class="flex flex-col my-6">
                            <div class="flex flex-row items-center mb-3">
                                <label for="bca" class="w-full flex items-center cursor-pointer">
                                    <input type="radio" name="payment_method" id="bca" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mr-2" required>
                                    <span class="text-sm leading-5 font-medium text-gray-700">BCA</span>
                                    <img src="../assets/bca-logo.png" alt="BCA Logo" class="ml-auto h-6 w-auto">
                                </label>
                            </div>
                            <div class="flex flex-row mb-3">
                                <label for="bni" class="w-full flex items-center cursor-pointer">
                                    <input type="radio" name="payment_method" id="bni" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mr-2" required>
                                    <span class="text-sm leading-5 font-medium text-gray-700">BNI</span>
                                    <img src="../assets/bni-logo.png" alt="BNI Logo" class="ml-auto h-6 w-auto">
                                </label>
                            </div>
                            <div class="flex flex-row mb-3">
                                <label for="bri" class="w-full flex items-center cursor-pointer">
                                    <input type="radio" name="payment_method" id="bri" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mr-2" required>
                                    <span class="text-sm leading-5 font-medium text-gray-700">BRI</span>
                                    <img src="../assets/bri-logo.png" alt="BRI Logo" class="ml-auto h-6 w-auto">
                                </label>
                            </div>
                            <div class="flex flex-row mb-3">
                                <label for="bsi" class="w-full flex items-center cursor-pointer">
                                    <input type="radio" name="payment_method" id="bsi" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mr-2" required>
                                    <span class="text-sm leading-5 font-medium text-gray-700">BSI</span>
                                    <img src="../assets/bsi-logo.png" alt="BSI Logo" class="ml-auto h-6 w-auto">
                                </label>
                            </div>
                            <div class="flex flex-row">
                                <label for="mandiri" class="w-full flex items-center cursor-pointer">
                                    <input type="radio" name="payment_method" id="mandiri" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mr-2" required>
                                    <span class="text-sm leading-5 font-medium text-gray-700">Mandiri</span>
                                    <img src="../assets/mandiri-logo.png" alt="Mandiri Logo" class="ml-auto h-6 w-auto">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="flex bg-indigo-600 hover:bg-indigo-700 text-white font-bold ml-4 mt-2 mb-8 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Pay Now
                <div class="ml-2">
                    <img src="../assets/ArrowRight.svg" alt="">
                </div>
            </button>
        </form>
    </div>
{{-- Aside --}}
    <div class="float-right ml-12">
        <div class="flex flex-col justify-center items-center" id="aside">
            <div class="bg-white rounded shadow p-6 m-4">
                <div class="text-left">
                    <h1 class="text-2xl font-bold mb-1">{{ $vehicles->name }}</h1>
                        <p class="text mb-6">{{ $categories->name }}</p>
                    <img src="{{ asset('assets/product-detail-'.$vehicles->id.'-1.jpg') }}" alt="product" width="284px" height="auto">
                </div>
                <h3 class="text-base font-bold my-6">Rent Summary</h3>
                <div class="divide-y-2 divide-neutral-950">
                    <div>
                        <div class="grid gap-x-auto gap-y-3 grid-cols-2 grid-rows-3 my-6">
                            <p class="text-sm text-left">Subtotal</p>
                            <p class="text-sm text-right">Rp {{ number_format($vehicles->price, 0, ',', '.') }}</p>
                            <p class="text-sm text-left">Tax</p>
                            <p class="text-sm text-right">Rp 0</p>
                            <p class="text-sm text-left">Service fee</p>
                            <p class="text-sm text-right">Rp {{ number_format($vehicles->price/100, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="grid gap-x-auto gap-y-auto grid-cols-2 grid-rows-1 my-6">
                            <p class="text-sm font-bold text-left">Total</p>
                            <p class="text-sm font-bold text-right">Rp {{ number_format($vehicles->price*101/100, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
