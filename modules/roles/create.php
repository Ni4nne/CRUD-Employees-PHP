<?php include("../../database.php");

if ($_POST) {

    $roledescription = (isset($_POST["roledescription"]) ? $_POST["roledescription"] : "");
    $sql = $con->prepare("INSERT INTO roles(id,roledescription) VALUES (null, :roledescription)");
    $sql->bindParam(":roledescription", $roledescription);
    $sql->execute();
    
    $message = "Item added";
    header("location: index.php?message=" . $message);
} ?>

<?php include("../../templates/header.php"); ?>

<br>
<div class="card">
    <div class="card-header">
        Role information
    </div>
    <div class="card-body">
        <form action="" method="POST">

            <div class="mb-3">
                <label for="roledescription" class="form-label">Name</label>
                <input type="text" class="form-control" name="roledescription" id="roledescription" aria-describedby="helpId">
            </div>

            <button type="submit" class="btn btn-success"> Submit </button>
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancel</a>
        </form>
    </div>
</div>

<?php include("../../templates/footer.php"); ?>