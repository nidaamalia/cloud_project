<?php include 'route.php';?>

<!DOCTYPE html>
<html>

<?php include 'head.php';?>

<?php include 'navbar.php';?>

<body>
    <div class="centerall">

    <div class="card" style="width: 25 rem;">
    <div class="card-body">
        <h4 class="card-title">Login</h4>
        <form action="add-url.php">
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>   
            <div class="col text-center">
                <button type="submit" class="btn btn-outline-secondary">Login</button>
            </div>                     
        </form>
    </div>
    </div>

    </div>
</body>

</html>