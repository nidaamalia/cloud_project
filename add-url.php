<?php include 'route.php';?>

<!DOCTYPE html>
<html>

<?php include 'head.php';?>

<?php include 'navbar.php';?>

<body>
    <div class="container">
        <br><br><br>
        <form action="">
            <div class="form-group row">
                <div class="col-sm-5">                    
                    <input type="text" class="form-control" placeholder="Custom short url..">
                </div>
                <div class="col-sm-5">                    
                    <input type="text" class="form-control" placeholder="Copy long url..">
                </div>
                <div class="col-sm-2">                    
                    <button type="submit" class="form-control btn btn-outline-secondary">Add</button>
                </div>
            </div>
        </form>
        <br>
        <div class="table table-bordered">
        <table class="table">        
        <thead>
            <tr>
            <th class="text-center">Short url</th>
            <th class="text-center">Long url</th>
            <th class="text-center">View report</th>
            </tr>
        </thead>
        <tbody>
        <?php for ($i=0;$i<5;$i++) {?>
            <tr>
            <td>/cloud-computing-registration</td>
            <td>http://localhost/cloud_project/add-url.php</td>
            <td class="text-center"><a href="<?= $url; ?>summary.php"><button class="btn btn-sm btn-outline-secondary">View</button></a></td>
            </tr>          
        <?php } ?>
        </tbody>
        </table>
        </div>

    
    </div>
</body>

</html>