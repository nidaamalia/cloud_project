<?php include 'route.php';?>

<!DOCTYPE html>
<html>

<?php include 'head.php';?>
<?php include 'navbar.php';?>

<body>
    <div class="container">
        <br><br><br>
        <div class="col text-center">
            <h4>Summary for /cloud-computing-registration</h4>
        </div>
        <br>
        <div class="table table-bordered">
        <table class="table">        
        <thead>
            <tr>
            <th class="text-center">Location</th>
            <th class="text-center">Time</th>
            <th class="text-center">Number of redirects</th>
            </tr>
        </thead>
        <tbody>
        <?php for ($i=0;$i<5;$i++) {?>
            <tr>
            <td>Brisbane, Australia</td>
            <td>10:00:00 am - 10:30:00 am &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30/08/2019</td>
            <td class="text-center">20</td>
            </tr>          
        <?php } ?>
        </tbody>
        </table>
        </div>

    
    </div>
</body>

</html>