<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/contact.css">
    <title>Contact  </title>
</head>

<body>
    <style type="text/css">
        /* Set the size of the div element that contains the map */
#map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
    </style>
    <?php include 'includes/header.php'?>
    <main class="wrapper">
        <div>
            <h1>Contact  </h1>
        </div>

        <div class="container">
        <div>            
            <p>Speak with us by calling: <a href="tel:" title="Please call us"><b></b></a><a>
                    or provide your information below and an expert consultant will follow-up with you.</a></p>
        </div>
        
            <form action="">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name*">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name*">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email*">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Organization/Company*">
                    </div>
                </div>


                <div class="row align-items-end">
                    <div class="col ">
                        <input type="text" class="form-control" placeholder="Telephone*">
                    </div>
                    <div class="col">
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Country*:</label>
                        <select name="selectd" class="custom-select">
                            <option value="">Select</option>
                            <option value="one">1</option>
                            <option value="two">2</option>
                            <option value="three">3</option>
                            <option value="four">4</option>
                        </select>                
                      </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group ">
                            <label for="exampleInputEmail1">Who would you like to contact within  ?*:</label>
                            <select name="selectd" class="custom-select">
                                <option value="">Sale</option>
                                <option value="one">1</option>
                                <option value="two">2</option>
                                <option value="three">3</option>
                                <option value="four">4</option>
                            </select>                
                          </div>
                    </div>

                </div>



                <div class="row">                    
                        
                    <div class="col">
                        <textarea type="text" class="form-control" placeholder="Comment*"></textarea>
                    </div>
                </div>
                <div class="row justify-content-end pr-4">
                    <label class="checkbox-label">
                        <input type="checkbox" class="form-check-inline"> Yes, you can email me and process my data for marketing purposes.<br>                        
                      </label>
                </div>
                <div class="mb-5 w-25 ml-auto">
                    <button class="btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </main>

     <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=&v=weekly"
      async
    ></script>
   <script type="text/javascript">
       // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
   </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    
</body>

</html>