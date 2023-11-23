<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pembayaran</title>
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
    {{-- <script type="text/javascript" src="https://app.stg.midtrans.com/snap/snap.js" data-client-key=""></script> --}}
</head>
<body>
    <table>
        <tr>
            <td>Total Pembayaran</td>
            <td> : {{ $transaction->total_payment }}</td>
        </tr>
    </table>
    <button id="pay-button">Bayar Sekarang</button>

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
{{-- <script type="text/javascript">
    let payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      console.log("button clicked duar");

      window.snap.pay({{ $snapToken }}, {
            embedId: 'snap-container',
            onSuccess: function (result) {
              /* You may add your own implementation here */
              alert("payment success!"); console.log(result);
            },
            onPending: function (result) {
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function (result) {
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function () {
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          });
    });
</script> --}}
</html>