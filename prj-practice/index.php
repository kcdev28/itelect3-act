<?php
session_start();

if (!isset($_SESSION['employee'])){
    $_SESSION['employee'] = [   
        1 => ['empnum' => 'CSTA1', 'lastname' => 'CABLAO'],
        2 => ['empnum' => 'CSTA2', 'lastname' => 'SABIDOR'],
        3 => ['empnum' => 'CSTA3', 'lastname' => 'ACEBES'],
        4 => ['empnum' => 'CSTA5', 'lastname' => 'SANTIAGO'],
        5 => ['empnum' => 'CSTA6', 'lastname' => 'RAYOSO']
    ];

}

if (isset($_POST['save'])){
    $empnum = $_POST['empnum'];
    $lastname = $_POST['lastname'];
    $id = $_POST['id'];

    if($id == ""){
      
        $newid = count($_SESSION['employee']) > 0
        ? max(array_keys($_SESSION['employee'])) + 1 
        : 1;    

        $_SESSION['employee'][$newid] = [
            'empnum'=> $empnum,
            'lastname'=> $lastname
        ];
    }else{
     
        $_SESSION['employee'][$id] = [
            'empnum'=> $empnum,
            'lastname'=> $lastname
        ];
    }
    header("Location:" . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    unset($_SESSION['employee'][$id]);
    header("Location:" . $_SERVER['PHP_SELF']);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/headerstyle.css">
    <link rel="stylesheet" href="assets/css/indexstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>ITELECT 3 3-1</title>

</head>


<body>
    <?php
    include("public/header.php");
    ?>

    <div class="con container-fluid p-5">
        <h3 class="mb-3 text-center">EMPLOYEE INFORMATION</h3>
        <form method="POST" action="" class=" ms-5 mb-3">
            <input type="hidden" name="id" value="">
            <div class="row">
                <div class="col">
                    <input type="text" name="empnum" id=" " class="form-control" required placeholder="Enter Employee Number" required>
                </div>
                <div class="col">
                    <input type="text" name="lastname" id=" " class="form-control" placeholder="Enter Last Name"
                        required>
                </div>
                <div class="col">
                    <button name="save" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Employee Number</th>
                    <th scope="col">Last Name</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        foreach($_SESSION['employee'] as $id => $emp):
                    ?>

                        <td><?= $id ?> </td>
                        <td><?= htmlspecialchars($emp['empnum'])?> </td>
                        <td><?= htmlspecialchars($emp['lastname'])?> </td>
                        <td>
                            <a href="?delete=<?= $id?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this record')">Delete</a>
                        </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>