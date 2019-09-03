<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#ff6600" />

        <title>ADC</title>
        <!--icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!--icons-->
        <!--bootstrap-->
          <script src="{{ asset('js/app.js') }}" defer></script>
          <script src="{{ asset('js/jquerylatest.js') }}" defer></script>
          <script src="{{ asset('js/application.js') }}" defer></script>


          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #19273d;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                color: white;
            }
            @media screen and (max-width: 992px) {
            .right-header-info {display: none}
           
            
       }
                  
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;

            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {

               
                font-size: 13px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Poppins', sans-serif;
                float: right;
                padding: 10px  10px;
                border: 1px solid rgb(100, 150, 200);
                margin: 5px;
                color: white;
            }
             .links > a:hover{
                background-color: rgb(100, 150, 200);
                color: white;
             }
            

            .header{
                text-align: center;
                position:absolute;
                top: 0;
                
                background-color: red;

            }
            .m-b-md {
                margin-bottom: 30px;

            }
            .text-center{
                margin:5px 5px;
            }
            .welcome-nav{
                height: 80px;
                width: 100%;
                
            }
            .welcome-nav-icon{
               padding: 10px;
               color: white;
            }
            .welcome-side-nav{
                display: none;
                position: relative;
                width: 70px;
                background-color: rgb(100, 150, 200);
                color: white;
                border-radius: 100%;
                border: 3px solid #fff;
                text-align: center;

            }
                .welcome-side-nav li{
                display: block;
                list-style:none;
            }
             .welcome-side-nav a{
    
                color: #111;
                padding-top: 30px;

            }
           
            .welcome-button:hover{
                -webkit-transform:rotateZ(150deg);
                transform: rotateZ(10deg);
                transition: all 0.3s ease-in-out;
                width: 200px;
            }
        
            .intro-1{
               
                color: white;
                width: 100%;
                

            }
            .satisfied-clients{
                border-bottom: 5px solid rgb(100, 150, 200);
            }
            .card-header{
                text-align: center;
                font-weight: 600;
                margin-top: 0;
            }
            .welcome-header{
                color: white;
                position: relative;
                display: none;
                font-size: 80px;
            }
            .welcome-button{
                display: none;
            }
            .welcome-header-p{
                position: relative;
                display: none;
                color: white;
                font-size: 40px;

            }
           
            .header-fluid{
                background-image: url('https://cdn.pixabay.com/photo/2018/03/09/08/36/businessman-3210932_960_720.jpg');
                background-size: cover;
                background-repeat: none;
                background-position: center;
                padding: 20px;
           

            }

            .adc-icon{
                color:white;
                padding: 10px;
                line-height: 50px;
                font-size: 30px;

            }
            .right-header-info{
                color: white;
                font-family: arial;
                text-align: left;
                line-height: 100px;
                padding: 50px;
            }
            .right-header-info{
                text-align: center;
            }
            .create-ticket{
                position: fixed;
                padding: 20px;
               
            }
             .close-ticket{
                 position:absolute;
                 padding: 20px;
               
            }
            .edit-ticket{
                position: fixed;
                 padding: 20px;

            }
            .create-ticket-box{
                display: flex;
                justify-content: center;
                align-content: center;
            }
             
             .edit-ticket-box{
                display: flex;
                justify-content: center;
                align-content: center;
            } .close-ticket-box{
                display: flex;
                justify-content: center;
                align-content: center;
            }
            .create-ticket-box{
                display: none;
            }
           .edit-ticket-box{
                display: none;
            }
           .close-ticket-box{
                display: none;
            }
</style>
    </head>
    <body>
  
            <nav class="welcome-nav">
            <div class="adc-icon">
                ADC
            </div>
                   
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </nav>
            <div class="container-fluid header-fluid" >
                <div class="row first-row">
                    <div class="col-md-6 test">
                    <div class="welcome-center text-center test">
                    <h3 class="welcome-header" >Adc Support Sytem</h3>
                    <p class="welcome-header-p" >Raise Your Issue And We Assure You To Reach You  ASAP</p>
                    <a href="{{ route('register') }}" class="btn btn-danger btn-lg welcome-button">Get Started</a> 
                </div> 
                </div>
               
            </div>
        </div>
        <div class="container-fluid info-fluid">
                <div class="row">
                <div class="col-md-4 create-ticket-box">
                   <div class="text-center">
                   <img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/128/ticket-icon.png" height="100px" width="100px">
                   <h3>Create Ticket</h3>
                   </div>
                        <p>Through This System You Can Send a Ticket To Adc And we assure You That we are going To Reach You As soon as possible</p>
                        <div class="text-center">  <a href="{{ route('register') }}" class="btn btn-danger welcome-button">Get Started</a> </div>

                </div>

                <div class="col-md-4 edit-ticket-box">
                   <div class="text-center">  
                   <img src="https://cdn1.iconfinder.com/data/icons/symbol-color-vacation-1/32/ticket-edit-512.png" height="100px" width="100px">
                    <h3>Edit Ticket</h3>
                   </div>
                    <p>
                        Hey please i didnt tell,You can also Edit Your Ticket if You think there is somehing Wrong With It,
                    You can modify it and resend it
                    </p>
                     <div class="text-center"><a href="{{ route('register') }}" class="btn btn-danger  welcome-button">Get Started</a> </div>

                </div>
                 <div class="col-md-4 close-ticket-box">
                   <div class="text-center">
                   <img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-4/256/Ticket-add-icon.png" height="100px" width="100px">
                    <h3>Close Ticket</h3>
                   </div>
                   <p>Has Your Problem been solved, if Thats Ok Boss You can close the ticket.....please Dont Forget To rate Us....thanks</p>
                    <div class="text-center"> <a href="{{ route('register') }}" class="btn btn-danger welcome-button">Get Started</a> </div>

                </div> 
            </div>
        </div>
        <div class="container-fuild my-5">
    <div class="container">      

           <div class="intro-1" style="">
               <h5 class="text-center">This Platform Will Help You Submit Your Issue And ADC will Be Notified To Take Action As Soon  As Possible</h5>
                <p class="text-center">So Feel Free TO Submit Any Querry</p>
           </div>
                    <div class="text-center"><button class="btn btn-danger">About Us</button></div>

                    <div class="card-body text-center ">
                        Africa Distribution Company is a company founded with the aim of providing specialized solutions to private and public organizations. Incorporated in Uganda with limited liability. The company was set up to develop and maintain high standards of corporate social responsibility and performance through logistics support and development, aimed at improving the quality of services delivered so that they effectively contribute to clients investment objectives and ultimately to national development 
                        <a href="http://afridisco.com/about-us/"><i class="fas fa-arrow-right" style="font-size: 25px; padding-left: 20px">
                        </i></a>
                    </div>
             
         
     </div>  
        </div> 
 <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
  </script>
  <script >
  $(document).ready(function(){
    $('.welcome-header').fadeIn(3000);
    $('.welcome-header-p').toggle(4000).css('fontWeight', '400');
    $('.welcome-button').fadeIn(2000);
    $('.create-ticket-box').delay(2000).fadeIn(4000);
    $('.edit-ticket-box').delay(4000).fadeIn(2000);
    $('.close-ticket-box').delay(2000).fadeIn(4000);

  })
    
  </script>
    </body>
</html>
