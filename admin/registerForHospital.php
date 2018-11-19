<?php include('index.php'); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Төрөх эмнэлэгт регистерийн дугаар хуваарилах</h4>
                        <form class="form-material m-t-40" method="POST" action="saveRegisterAndHospital.php">
                            <div class="form-group col-md-12" >
                                <label for="example-email">Төрөх эмнэлэг</label>
                                <select name="nameOfBirthHospital" class="form-control">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "birthcertificate") or die("Алдаа гарлаа");
                                    $query = "SELECT * FROM affiliateorganization";
                                    $result = mysqli_query($conn, "SET NAMES utf8mb4");
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                    }
                                    $now = date("Ymd");
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-9">
                                    <label>Регистерийн дугаар</label>
                                    <input type="text" name="numberRegister" class="form-control" value = "<?php echo $now; ?>"> 
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Тоо</label>
                                    <input type="number" name="number" class="form-control" value = "10"> 
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Хадгалах</button>
                    </div>
                    </form>
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