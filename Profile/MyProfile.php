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
                <div class="card shadow-sm" style="border-shadow: 1px solidrgb(0, 0, 0); border-radius: 10px;">
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
                                <div style="font-size: 14px; font-weight: bold; margin-top: 3px;">24</div>
                                <div style="font-size: 10px; margin-top: 2px;">Items sold</div>
                            </div>
                            <div class="col">
                                <i class="bi bi-list-ul" style="font-size: 20px; color: #6c757d;"></i>
                                <div style="font-size: 14px; font-weight: bold; margin-top: 3px;">8</div>
                                <div style="font-size: 10px; margin-top: 2px;">Active Listings</div>
                            </div>
                            <div class="col">
                                <i class="bi bi-people" style="font-size: 20px; color: #6c757d;"></i>
                                <div style="font-size: 14px; font-weight: bold; margin-top: 3px;">156</div>
                                <div style="font-size: 10px; margin-top: 2px;">Followers</div>
                            </div>
                            <div class="col">
                                <i class="bi bi-person-plus" style="font-size: 20px; color: #6c757d;"></i>
                                <div style="font-size: 14px; font-weight: bold; margin-top: 3px;">42</div>
                                <div style="font-size: 10px; margin-top: 2px;">Following</div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>

        <style>
            .btn, .btn-link{
                background-color: #FEFEFE;
                width: 100%;
                text-decoration: none;
                color: inherit;
                border: none;
                padding: 10px 15px;
                text-align: left;
            }
            .btn-link:hover{
                background-color: #f8f9fa;
                color: inherit;
                text-decoration: none;
            }
            .logout-btn{
                margin-top: 25px;
                background-color: white;
                width:100%;
                text-decoration: none;
                color: #FF0000;
                border: solid 1px red;
                padding: 10px 15px;
                text-align: center;   
                border-radius: 10px;
            }
        </style>

        <section class="seller mt-3">
            <div class="container w-100">
                <h3 style="font-size: 18px; color: #533626; font-weight: 700; font-size: 15px;">Seller</h3>
                <div class="card shadow-sm" style="border-shadow: 1px solidrgb(0, 0, 0); border-radius: 10px;">
                     <div class="card-body">
                         <div class="row mb-3">
                             <div class="col d-flex justify-content-start">
                                 <a href="#" class="btn-link d-flex align-items-start">
                                     <i class="bi bi-shop me-2" style="margin-top: 2px;"></i>
                                     <div>
                                         <div>My Shop</div>
                                         <p class="text-muted" style="font-size: 10px;">Manage your products</p>
                                     </div>
                                 </a>
                             </div>
                         </div>
                         <div class="row mb-3">
                             <div class="col d-flex justify-content-start">
                                 <a href="#" class="btn-link d-flex align-items-start">
                                     <i class="bi bi-graph-up me-2" style="margin-top: 2px;"></i>
                                     <div>
                                         <div>My Sales</div>
                                         <p class="text-muted" style="font-size: 10px;">View sales analytics</p>
                                     </div>
                                 </a>
                             </div>
                         </div>
                         <div class="row mb-3">
                             <div class="col d-flex justify-content-start">
                                 <a href="#" class="btn-link d-flex align-items-start">
                                     <i class="bi bi-chat-dots me-2" style="font-size: 12px; margin-top: 2px;"></i>
                                     <div>
                                         <div>Buyer Comments</div>
                                         <p class="text-muted" style="font-size: 10px;">Read customer feedback</p>
                                     </div>
                                 </a>
                             </div>
                         </div>
                         <div class="row mb-3">
                             <div class="col d-flex justify-content-start">
                                 <a href="#" class="btn-link d-flex align-items-start">
                                     <i class="bi bi-credit-card me-2" style="margin-top: 2px;"></i>
                                     <div>
                                         <div>My Payment Methods</div>
                                         <p class="text-muted" style="font-size: 10px;">Manage payment options</p>
                                     </div>
                                 </a>
                             </div>
                         </div>
                         <div class="row mb-3">
                             <div class="col d-flex justify-content-start">
                                 <a href="#" class="btn-link d-flex align-items-start">
                                     <i class="bi bi-check-circle me-2" style="margin-top: 2px;"></i>
                                     <div>
                                         <div>My Payment Approvals</div>
                                         <p class="text-muted" style="font-size: 10px;">Review pending payments</p>
                                     </div>
                                 </a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </section>

        <section class="buyer mt-3 mb-3">
            <div class="container w-100">
                <h3 style="font-size: 18px; color: #533626; font-weight: 700; font-size: 15px;">Buyer</h3>
                <div class="card shadow-sm" style="border-shadow: 1px solidrgb(0, 0, 0); border-radius: 10px;">
                    <div class="card-body">
                     <div class="row mb-3">
                             <div class="col d-flex justify-content-start">
                                 <a href="#" class="btn-link d-flex align-items-start">
                                     <i class="bi bi-cart me-2" style="margin-top: 2px;"></i>
                                     <div>
                                         <div>My Orders</div>
                                         <p class="text-muted" style="font-size: 10px;">Track your purchases</p>
                                     </div> 
                                 </a>
                             </div>
                         </div>
                         <div class="row mb-3">
                             <div class="col d-flex justify-content-start">
                                 <a href="#" class="btn-link d-flex align-items-start">
                                     <i class="bi bi-heart me-2" style="margin-top: 2px;"></i>
                                     <div>
                                         <div>My Wishlist</div>
                                         <p class="text-muted" style="font-size: 10px;">Saved items</p>
                                     </div>
                                 </a>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="general" mt-3">
            <div class="container w-100">
                <h3 style="font-size: 18px; color: #533626; font-weight: 700; font-size: 15px;">General</h3>
                <div class="card shadow-sm" style="border-shadow: 1px solidrgb(0, 0, 0); border-radius: 10px;">
                    <div class="card-body">
                     <div class="row mb-3">
                             <div class="col d-flex justify-content-start">
                                 <a href="#" class="btn-link d-flex align-items-start">
                                     <i class="bi bi-house-door me-2" style="margin-top: 2px;"></i>
                                     <div>
                                         <div>My Address</div>
                                         <p class="text-muted" style="font-size: 10px;">Manage your addresses</p>
                                     </div> 
                                 </a>
                             </div>
                         </div>
                         <div class="row mb-3">
                             <div class="col d-flex justify-content-start">
                                 <a href="#" class="btn-link d-flex align-items-start">
                                     <i class="bi bi-key me-2" style="margin-top: 2px;"></i>
                                     <div>
                                         <div>My Password</div>
                                         <p class="text-muted" style="font-size: 10px;">Change Password</p>
                                     </div>
                                 </a>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="logout">
            <div class="container">
                <div class="col d-flex justify-content-start">
                    <button class="logout-btn">Logout</button>
                </div>
            </div>
        </section>
        <br><br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>