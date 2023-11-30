@extends("transaction.layout.main")

@section('content')

<div class="flex justify-center" id="container">
    <div class="mr-12">
        {{-- Transaction Info --}}
        <form action="/product/transaction" method="post">
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
                            <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Your Name" required>
                        </div>
                        <div>
                            <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="08XXXXXXXXX" required>
                        </div>
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                            <input type="text" name="address" id="address" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Your Address" required>
                        </div>
                        <div>
                            <label for="City" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                            <input type="text" name="city" id="city" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="City" required>
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
                            <input type="date" name="pick_up_date" id="pick_up_date" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Date" required>
                        </div>
                        <div>
                            <label for="pick_up_location" class="block text-sm font-medium leading-6 text-gray-900">Pick Up Location</label>
                            <input type="text" name="pick_up_location" id="pick_up_location" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Location" required>
                        </div>
                        <div>
                            <label for="pick_up_time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
                            <input type="time" name="pick_up_time" id="pick_up_time" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Time" required>
                        </div>
                    </div>
                    <h1 class="text-2xl font-bold my-8">Drop Off Info</h1>
                    <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
                        <div>
                            <label for="drop_off_date" class="block text-sm font-medium leading-6 text-gray-900">Drop off Date</label>
                            <input type="date" name="drop_off_date" id="drop_off_date" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Date" required>
                        </div>
                        <div>
                            <label for="Drop off Location" class="block text-sm font-medium leading-6 text-gray-900">Drop off Location</label>
                            <input type="text" name="drop_off_location" id="drop_off_location" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Location" required>
                        </div>
                        <div>
                            <label for="drop_off_time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
                            <input type="time" name="drop_off_time" id="drop_off_time" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Time" required>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="tenant_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="vehicle_id" value="{{ $vehicles->id }}">
            <input type="hidden" name="total_payment" value="{{ $vehicles->price }}">
            <div class="flex justify-start flex-row-reverse p-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold ml-4 mt-2 mb-8 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Next
                <div class="ml-2">
                    <img src="../assets/ArrowRight.svg" alt="">
                </div>
            </button>
        </form>
            <a href="/product" class="bg-red-600 hover:bg-red-700 text-white font-bold ml-4 mt-2 mb-8 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Cancel
                <div class="ml-2">
                    <img src="../assets/ArrowRight.svg" alt="">
                </div>
            </a>
        </div>
    </div>
</div>

@endsection