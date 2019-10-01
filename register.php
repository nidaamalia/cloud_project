<?php include 'route.php';?>

<!DOCTYPE html>
<html>

<?php include 'head.php';?>

<?php include 'navbar.php';?>

<body>
    <div class="centerall">

    <div class="card" style="width: 25 rem;">
    <div class="card-body">
        <h4 class="card-title">Register</h4>
        <form action="" oninput='confirm_password.setCustomValidity(confirm_password.value != password.value ? "Password does not match." : "")'>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label >First name</label>
                    <input type="text" class="form-control" placeholder="First name" name="first_name" required>
                </div>
                <div class="col-sm-6">
                    <label >Last name</label>
                    <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
                </div>
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <label >Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required>
            </div>   
            <div class="col text-center">
                <button type="submit" class="btn btn-outline-secondary">Register</button>
            </div>                     
        </form>
    </div>
    </div>

    </div>
</body>

</html>