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
    <title>View Customers</title>
</head>
<body>
    <?php include('public/navbar.php') ?>
    <div class="container-fluid p-5">
        <h1 class="text-start text-bold mb-3">Customer's List</h1>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact No.</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        foreach($_SESSION['customer'] as $id => $cus):
                    ?>

                        <td><?= $id ?> </td>
                        <td><?= htmlspecialchars($cus['fullname'])?> </td>
                        <td><?= htmlspecialchars($cus['email'])?> </td>
                         <td><?= htmlspecialchars($cus['contact'])?> </td>
                        <td>
                            <a href="?delete=<?= $id?>" class="btn btn-danger btn-sm" onclick="return confirmDelete(<?= $id ?>)">Delete</a>
                        </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        

         <?php include('public/footer.php') ?>
</body>



<script>
function confirmDelete(id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You want to delete Customer Number " + id + "?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Delete"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '?delete=' + id;
        }
    });
    
    return false;
}
</script>

</html>

<?php

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    unset($_SESSION['customer'][$id]);
    header("Location:" . $_SERVER['PHP_SELF']);
    exit;
}

?>