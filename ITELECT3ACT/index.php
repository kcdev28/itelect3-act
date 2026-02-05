<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/indexstyle.css">
    <title>Home</title>
</head>
<body>
    <?php include('public/navbar.php'); ?>

   
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Customer Management System</h1>
                    <p class="lead mb-4">Streamline your customer data management with our intuitive and powerful CMS. Keep track of all your customer information in one secure place.</p>
                    <div class="d-flex gap-3">
                        <a href="add-customer.html" class="btn btn-primary btn-lg">Add New Customer</a>
                        <a href="#view-customers" class="btn btn-outline-primary btn-lg">View All Customers</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-container">
                        <img src="assets/images/communications.png" alt="Customer Management" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="features-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="fw-bold">Why Choose Our CMS?</h2>
                    <p class="text-muted">Powerful features to manage your customer relationships</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <img src="assets/images/user-app.png" alt="">
                            </div>
                            <h5 class="card-title">Easy Customer Addition</h5>
                            <p class="card-text text-muted">Quickly add new customers with our simple and intuitive form interface.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100  shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <img src="assets/images/cloud-computing.png" alt="">
                            </div>
                            <h5 class="card-title">Secure Data Storage</h5>
                            <p class="card-text text-muted">Your customer data is protected with industry-standard security measures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <img src="assets/images/magnifying-glass.png" alt="">
                            </div>
                            <h5 class="card-title">Quick Search & Access</h5>
                            <p class="card-text text-muted">Find any customer information instantly with our powerful search functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <?php include('public/footer.php'); ?>
   
</body>
</html>