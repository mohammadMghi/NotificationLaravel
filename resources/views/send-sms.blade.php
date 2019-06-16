<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .move{
            margin-left: 20px;
            margin-top: 20px;
        }
        .form-contact{
           margin-top: 5%;
        }
    </style>
</head>
<body>
 
    <div class="container">
    <!--Section: Contact v.2-->
<section class="form-contact">

<div >

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
    <form action="{{ route('notification.send.email') }}" method="POST">
            @csrf
            <!--Grid row-->
            <div >
 

                <!--Grid column-->
                <div class="col-md-8">
                    <div class="md-form mb-0">
                            <label for="email" class="">Number</label>
                        <input type="text" id="email" name="email" class="form-control">
                     
                    </div>
                </div>
          
                <!--Grid column-->
                <div class="col-md-8">

                    <div class="md-form">
                            <label for="message">Your message</label>
                        <textarea type="text" id="message" name="message" rows="8" class="form-control md-textarea"></textarea>
                   
                    </div>

                </div>
            </div>
            <!--Grid row-->
            <button class="btn btn-primary move" href="{{route('notification.send.email')}}">Send</button>
        </form>
 
    </div>
  

</div>

</section>
<!--Section: Contact v.2-->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>