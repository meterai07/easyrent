<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation Page</title>
    <script type="text/javascript"
    src="{{ config('midtrans.snap_url') }}"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>
<body>
        <div class="flex flex-col justify-center items-center" id="Transaction-info">
            <div class="bg-white rounded shadow p-6 m-4">
                <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
                  <h1>{{ $transaction->total_payment }}</h1>
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <input disabled value="{{ $transaction->name }}" type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="name">
                    </div>
                    <div>
                        <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                        <input disabled value="{{ $transaction->phone_number }}" type="text" name="phone_number" id="phone_number" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="08XXXXXXXXX">
                    </div>
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                        <input disabled value="{{ $transaction->name }}" type="text" name="address" id="address" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Your Address">
                    </div>
                    <div>
                        <label for="City" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                        <input disabled value="{{ $transaction->city }}" type="text" name="city" id="city" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="City">
                    </div>
                </div>
            </div>
        </div>
        {{-- Rental Info --}}
        <div class="flex flex-col justify-center items-center" id="Rental-info">
            <div class="bg-white rounded shadow p-6 m-4">
                <h1 class="text-2xl font-bold my-8">Pick Up Info</h1>
                <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
                    <div>
                        <label for="pick_up_date" class="block text-sm font-medium leading-6 text-gray-900">Pick Up Date</label>
                        <input disabled value="{{ $transaction->pick_up_date}}" type="date" name="pick_up_date" id="pick_up_date" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Date">
                    </div>
                    <div>
                        <label for="pick_up_location" class="block text-sm font-medium leading-6 text-gray-900">Pick Up Location</label>
                        <input disabled value="{{ $transaction->pick_up_location }}" type="text"  name="pick_up_location" id="pick_up_location" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Location">
                    </div>
                    <div>
                        <label for="pick_up_time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
                        <input disabled value="{{ $transaction->pick_up_time }}" type="time" name="pick_up_time" id="pick_up_time" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Time">
                    </div>
                </div>
                <h1 class="text-2xl font-bold my-8">Drop Off Info</h1>
                <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
                    <div>
                        <label for="drop_off_date" class="block text-sm font-medium leading-6 text-gray-900">Drop off Date</label>
                        <input disabled value="{{ $transaction->drop_off_date }}" type="date" name="drop_off_date" id="drop_off_date" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Date">
                    </div>
                    <div>
                        <label for="Drop off Location" class="block text-sm font-medium leading-6 text-gray-900">Drop off Location</label>
                        <input disabled value="{{ $transaction->drop_off_location }}" type="text" name="drop_off_location" id="drop_off_location" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Location">
                    </div>
                    <div>
                        <label for="drop_off_time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
                        <input disabled value="{{ $transaction->drop_off_time }}" type="time" name="drop_off_time" id="drop_off_time" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Time">
                    </div>
                </div>
            </div>
        </div>
        <button id="pay-button" class="flex bg-indigo-600 hover:bg-indigo-700 text-white font-bold ml-4 mt-2 mb-8 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Pay Now
            <div class="ml-2">
                <img src="../assets/ArrowRight.svg" alt="">
            </div>
        </button>
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
</body>
</html>