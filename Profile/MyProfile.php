<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyProfile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  </head>
  <body style="background-color: #FEFEFE;">
    <div class="container mt-3">
        <div class="row d-flex">
            <div class="col d-flex justify-content-start">Profile</div>
            <div class="col d-flex justify-content-end">Edit Icon</div>
        </div>
        
        <div class="section mt-4">
            <div class="container">
                <div class="card shadow-sm" style="border: 1px solidrgb(0, 0, 0); border-radius: 10px;">
                     <div class="card-body">
                         <div class="row align-items-center">
                             <div class="col-auto d-flex justify-content-start">
                                 <img src="/assets/profile.png" alt="Profile" class="img-fluid rounded-circle" style="width: 50px; height: 50px; object-fit: cover; outline: 1px solid #000; outline-offset: 10px;">
                             </div>
                             <div class="col">
                                 <h5 class="card-title mb-0" style="font-size: 18px; color: #533626; font-weight: 700;">Juan Francisco Canapati</h5>
                                 <h6 class="card-text mt-2" style="font-size: 13px; color: #B1A18A;">@johndoe</h6>
                                 <p class="card-text mb-0" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             </div>
                         </div>
                         <div class="row mt-4 text-center">
                            <div class="col">
                                <i class="bi bi-bag-check" style="font-size: 20px; color: #6c757d;"></i>
                                <div style="font-size: 10px; margin-top: 5px;">Items sold</div>
                            </div>
                            <div class="col">
                                <i class="bi bi-list-ul" style="font-size: 20px; color: #6c757d;"></i>
                                <div style="font-size: 10px; margin-top: 5px;">Active Listings</div>
                            </div>
                            <div class="col">
                                <i class="bi bi-people" style="font-size: 20px; color: #6c757d;"></i>
                                <div style="font-size: 10px; margin-top: 5px;">Followers</div>
                            </div>
                            <div class="col">
                                <i class="bi bi-person-plus" style="font-size: 20px; color: #6c757d;"></i>
                                <div style="font-size: 10px; margin-top: 5px;">Following</div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>