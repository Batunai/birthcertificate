<?php
include('index.php');
$conn = mysqli_connect("localhost", "root", "", "birthcertificate") or die("Алдаа гарлаа");
$query = "SELECT registerNumber.*,state.name as stateName 
    FROM registerNumber join state on registerNumber.idState = state.id 
    join organizationandregister on organizationandregister.idRegister = registerNumber.idRegister
    where organizationandregister.idOrganization =".$_SESSION['idorganization'];
$result = mysqli_query($conn, "SET NAMES utf8mb4");
$result = mysqli_query($conn, $query);
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Жагсаалт</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Регистерийн дугаар</th>
                                        <th>Өндөр</th>
                                        <th>Жин</th>
                                        <th>Хаяг</th>
                                        <th>Төрсөн огноо</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['idRegister'] ?></td>
                                            <td><?php echo $row['height'] ?></td>
                                            <td><?php echo $row['weight'] ?></td>
                                            <td><?php echo $row['address'] ?></td>
                                            <td><?php echo $row['date'] ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    © 2018 G.Byambadorj
</footer>
</div>
</body>