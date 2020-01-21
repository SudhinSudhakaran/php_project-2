<!--All Doctors List viewing by Admin-->

<!----------------------------------------Header Starts--------------------------------------------------->
<?php include('header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<div class="row">
    <div class="col-md-3 p-3 text-center bor t-center">
        <h2 class="fontcol">Registred Doctors</h2>
    </div>

    <div class="col-md-4 p-3 bor text-right ">
        <p class=""><kbd>Search</kbd>
            <input class="p-2" id="myInput" type="text" placeholder="Search.."></p>
    </div>
</div>
<table class="container-fluid table">
    <thead>
        <tr>
            <th>Sl NO</th>
            <th>Registred Id</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>E-mail</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
					  require_once  'php_connection.php';
					  $sql = "select * from doctors";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {
						  ?>
        <tr>
            <th scope="row"><?php echo $row['did']; ?></th>
            <td><?php echo $row['d_regid']; ?></td>
            <td><?php echo $row['dname']; ?></td>
            <td><?php echo $row['dmobile']; ?></td>
            <td><?php echo $row['demail']; ?></td>
            <td><a href="doctor_profile-details.php?id=<?php echo $row['did']; ?>"
                    class="btn btn-outline-secondary  btn-arrow-right" role="button">More ></a></td>
            </td>
        </tr>
        <?php 
					  }
					  ?>
    </tbody>
</table>
<!----------------------------------------Footer Starts--------------------------------------------------->

<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->