<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <title>Laravel paypal test Arab Apps </title>
  
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
  
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: rgb(20, 141, 57);
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
            }
            .content {
                margin-top: 100px;
                text-align: center;
            }
            .tx-1 {
                text-align: center;
                position: relative;
                top: 4rem;
                color: #28a745;
                font-family:  sans-serif;

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
  
            <div class="content">
                <h1 style="color: #009cde; font-family:  sans-serif;">Arab Apps test integration task</h1>
                  
                <table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td></tr></table>
  
                <a href="{{ route('payment') }}" class="btn btn-success">Pay $100 from Paypal</a>
  
            </div>
        </div>
    </body>
</html>
