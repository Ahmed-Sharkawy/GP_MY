<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div id="paypal-button-container"></div>
    <script
        src="https://www.paypal.com/sdk/js?client-id=Ad4YdgLJZEFVnWKIDsMT-yrYYJFh6WL96gZNGdDf5KrFdVt30hJwvK9OFHoMIrbCfC1VpgdCoFVtezop&components=buttons">
    </script>
    <script>
        paypal.Buttons({
            style: {
                layout: 'horizontal',
                color: 'gold',
                shape: 'pill',
                label: 'checkout',
                tagline: false,
            },
            createOrder() {
                return fetch("{{ route('home.paypal') }}", {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: [{
                        sku: "YOUR_PRODUCT_STOCK_KEEPING_UNIT",
                        quantity: "YOUR_PRODUCT_QUANTITY"
                    }]
                })
            }
        }).render('#paypal-button-container');
    </script>

    {{-- <script
        src="https://www.paypal.com/sdk/js?client-id=Ad4YdgLJZEFVnWKIDsMT-yrYYJFh6WL96gZNGdDf5KrFdVt30hJwvK9OFHoMIrbCfC1VpgdCoFVtezop">
    </script>

    <div id="paypal-button-container"></div>

    <script>
        document.querySelector('#myRadioField')
            .addEventListener('click', function() {
                paypal.Buttons().render('#paypal-button-container')
            });

        document.querySelector('#paypal-button-container')
            .style.display = 'none';

        paypal.Buttons().render('#paypal-button-container');

        document.querySelector('#myRadioField')
            .addEventListener('click', function() {
                document.querySelector('#paypal-button-container')
                    .style.display = 'block';
            });
    </script> --}}
</body>

</html>
