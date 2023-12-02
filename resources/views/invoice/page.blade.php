
@extends("invoice.layout.main")

@section("content")

<div class="flex justify-center">
    <div class="mr-3 w-7/12">
        <div class="flex flex-col justify-start">
            {{-- Judul --}}
            <div class="bg-white rounded-md p-6 m-8 shadow-lg">
                <div class="text-left">
                    <h1 class="text-4xl font-bold mb-1 text-blue-900">Invoice</h1>
                    <p class="text-gray-600 mt-0 mb-2">Please check again your data</p>
                </div>
            </div>
            {{-- Car information --}}
            <div class="bg-zinc-50 m-4">
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-blue-700">Car Information</h1>
                </div>
            </div>
            {{-- Car information detail --}}
            <div class="bg-white rounded-md p-6 m-4 shadow-lg">
                <div class="m-8">
                    <img src="{{ asset('assets/product-detail-'.$vehicle->id.'-1.jpg') }}" alt="" class="w-367 h-287 aspect-video object-cover object-center rounded-md">
                </div>
                <div class="">
                    <h1 class="text-center text-2xl font-bold m-4">{{$vehicle->name}}</h1>
                    <div class="grid gap-x-40 gap-y-8 grid-cols-3 grid-rows-2 m-4">
                        <div class="ml-8">
                            <p class="text-left text-gray-600">Brand</p>
                            <p class="text-left text-xl font-semibold">{{$vehicle->brand_name}}</p>
                        </div>
                        <div>
                            <p class="text-left text-gray-600">Fuel Type</p>
                            <p class="text-left text-xl font-semibold">{{$vehicle->fuel_name}}</p>
                        </div>
                        <div>
                            <p class="text-left text-gray-600">Year</p>
                            <p class="text-left text-xl font-semibold">{{$vehicle->year}}</p>
                        </div>
                        <div class="ml-8">
                            <p class="text-left text-gray-600">Category</p>
                            <p class="text-left text-xl font-semibold">{{$vehicle->category_name}}</p>
                        </div>
                        <div>
                            <p class="text-left text-gray-600">Transmission Type</p>
                            <p class="text-left text-xl font-semibold">{{$vehicle->transmissions_type}}</p>
                        </div>
                        <div>
                            <p class="text-left text-gray-600">Price</p>
                            <p class="text-left text-l font-semibold">Rp {{number_format(($vehicle->price), 0, ',', '.')}}/day</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Customer information --}}
            <div class="bg-zinc-50 m-4">
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-blue-700">Detail Information</h1>
                </div>
            </div>
            {{-- customer information detail --}}
            <div class="bg-white rounded-md p-6 m-4 shadow-lg">            
                <div class="grid gap-x-16 gap-y-2 grid-cols-1 grid-rows-2 divide-y-2">
                    <div class="flex items-center justify-center flex-col">
                        <h1 class="text-center text-2xl font-bold m-4 text-blue-900">Tenant</h1>
                        <div class="grid gap-x-40 gap-y-8 grid-cols-2 grid-rows-2 m-8">
                            <div>
                                <p class="text-left text-gray-600">Name</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->name }}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Address</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->address }}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Phone Number</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->phone_number }}</p>
                            </div>
                            <div>
                                <p class="text-left text-xl font-semibold">{{ $transaction->city }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- rental information detail --}}
                    <div class="flex items-center justify-center flex-col">
                        <h1 class="text-center text-2xl font-bold m-4 text-blue-900">Rental</h1>
                        <div class="grid gap-x-40 gap-y-8 grid-cols-3 grid-rows-2 m-8">
                            <div>
                                <p class="text-left text-gray-600">Pick Up Date</p>
                                <p class="text-left text-xl font-semibold">{{ $pickUpDate->format('jS F Y')}}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Pick Up Location</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->pick_up_location }}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Rent Time</p>
                                <p class="text-left text-xl font-semibold">{{ $days }} Days</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Drop Off Date</p>
                                <p class="text-left text-xl font-semibold">{{ $dropOffDate->format('jS F Y')}}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Drop Off Location</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->drop_off_location }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Aside --}}
    <div class="float-right ml-3 w-3/12">
        <div class="flex flex-col justify-center items-center sticky top-5 w-full" id="aside">
            <div class="bg-white rounded shadow p-6 m-4 w-full">
                <h1 class="text-2xl font-bold mb-1 text-blue-900">Rent Summary</h1>
                <div class="divide-y-2 divide-neutral-950">
                    <div>
                        <div class="grid gap-x-auto gap-y-3 grid-cols-2 grid-rows-3 my-6">
                            <p class="text-sm text-left">Rent Price ({{ $days }} Day)</p>
                            <p class="text-sm text-right">Rp {{ number_format($totalPrice, 0, ',', '.') }}</p>
                            <p class="text-sm text-left">Tax</p>
                            <p class="text-sm text-right">Rp 0</p>
                            <p class="text-sm text-left">Service fee</p>
                            <p class="text-sm text-right">Rp {{ number_format($totalPrice/100, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="grid gap-x-auto gap-y-auto grid-cols-2 grid-rows-1 my-6 text-blue-900">
                            <p class="text-sm font-bold text-left">Total</p>
                            <p class="text-sm font-bold text-right">Rp {{ number_format($totalPrice*101/100, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <button id="pay-button" type="button" 
                        class="flex py-3 pl-6 pr-4 justify-center items-center gap-2 bg-blue-600 rounded-lg w-full">
                        <h3 class="text-base font-sans font-semibold text-white">Pay Now</h3>
                        <img src="assets/ArrowRight.svg" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        let payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
          // Also, use the embedId that you defined in the div above, here.
        window.snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
        alert("payment success!"); console.log(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
        alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
        alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
        alert('you closed the popup without finishing the payment');
        }
        });
        });
</script>

@endsection