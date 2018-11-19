<?php
include('index.php');
$conn = mysqli_connect("localhost", "root", "", "birthcertificate") or die("Алдаа гарлаа");
$query = "SELECT t1.id,t2.name,t1.idRegister from organizationandregister t1 join affiliateorganization t2 on t2.id = t1.idOrganization";
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
                                        <th>Эмнэлэгийн нэр</th>
                                        <th>Регистерийн дугаар</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['idRegister'] ?></td>
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
