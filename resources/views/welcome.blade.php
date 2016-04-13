<!DOCTYPE html>
<html>
    <head>
        <title>FllixOffice</title>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/css/welcome.css')}}" type="text/css">                 
    </head>
    <body>
        <div class="jumbotron vertical-center">
            <div class="container text-center">
                <h1>FllixOffice</h1>                
                <p class="text-center" id="fllix-is">
                    Discover
                    <span id="ticker">
                        
                    </span>
                </p>
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/tickerscrambler.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</html>
