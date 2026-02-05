<?php
require('public/process.php');
require('public/delete.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/indexstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Add Customer</title>
</head>
<body>
     <?php include('public/navbar.php');?>
    <section class="content-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-dark text-white py-3">
                            <h3 class="mb-0">
                                Add New Customer
                            </h3>
                        </div>
                        <div class="card-body p-4">
                            <form id="customerForm" method="POST" action="" >
                                <div class="mb-4">
                                    <label for="fullname" class="form-label fw-semibold">
                                        Full Name <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg" 
                                        name="fullname"
                                        placeholder="Enter Customer's Full Name"
                                        required
                                    >
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="form-label fw-semibold">
                                        Email Address <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="email" 
                                        class="form-control form-control-lg" 
                                        name="email"
                                        placeholder="Enter Email Address"
                                        required
                                    >
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="contact" class="form-label fw-semibold">
                                        Contact Number <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="tel"
                                        class="form-control form-control-lg" 
                                        name="contact"
                                        placeholder="+09XXXXXXX"
                                        required
                                    >
                                    <div class="invalid-feedback">
                                        Please enter a valid contact number.
                                    </div>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                    <button type="reset" class="btn btn-outline-secondary btn-lg px-4">      
                                        Clear
                                    </button>
                                    <button type="submit" name="submit"  class="btn btn-primary btn-lg px-4">
                                        Add
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


      <?php include('public/footer.php'); ?>
</body>

<?php if (isset($_SESSION['success'])): ?>

<script>

    Swal.fire({
     title: "<?= $_SESSION['success']; ?>",
     icon: "success"
    });

</script>
<?php unset($_SESSION['success']); endif; ?>
</html>