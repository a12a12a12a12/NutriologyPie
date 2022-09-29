<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container py-3">
    <header>
        <div class="pricing-header mx-auto text-center" style = "margin-top:160px">
        <h1 class="display-4 fw-normal">Use paypal to pay</h1>
        </div>
    </header>
    <br>
    <br>
    
<style>
#paypal-button-container h4{
    padding-left:5rem;
}
</style>

    <!-- Set up a container element for the button -->
    <div id="paypal-button-container" class="col-6 offset-3"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=AUD" data-sdk-integration-source="button-factory"></script>
    <script>
        function initPayPalButton() {
        paypal.Buttons({
            style: {
            shape: 'pill',
            color: 'blue',
            layout: 'vertical',
            label: 'paypal',
            
            },

            createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{"amount":{"currency_code":"AUD","value":15}}]
            });
            },

            onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                
                // Full available details
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                window.location.href = 'https://deco3801-numpy.uqcloud.net/NutriologyPie/login';
                // https://deco3801-numpy.uqcloud.net/NutriologyPie/index.php/homepage
                
            });
            },

            onError: function(err) {
            console.log(err);
            }
        }).render('#paypal-button-container');
        }
        initPayPalButton();
    </script>
</body>

</html>


