<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/app.css">

    <title>Contact Form #2</title>
  </head>
  <body>
  

  <div class="content" style="margin-top: 10%;">
    
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <h2>Contact Us</h2>
          <p class="mb-5">We are happy to respond to any request our client or potential partners has , please contact us.</p>

          <ul class="list-unstyled pl-md-5 mb-5">
            <li class="d-flex text-black mb-2">
              <span class="mr-3"><span class="icon-map"></span></span> Rue bir anzarane , tangier <br> Morocco
            </li>
            <li class="d-flex text-black mb-2"><span class="mr-3"><span class="icon-phone"></span></span> (+212) 66 66 66 66 6</li>
          </ul>
        </div>

        <div class="col-md-6">
        {{Form::open(['route'=>'contact.store','method'=>'POST'])}}
          <form class="mb-5" method="post" id="contactForm" name="contactForm">
            <div class="row">
              
              <div class="col-md-12 form-group">
                <label for="name" class="col-form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email" class="col-form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message" class="col-form-label">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}

              </div>
            </div>
          </form>
          {{form::close()}}
      </div>
  </div>
    <script src="/js/app.js"></script>
  </body>
</html>