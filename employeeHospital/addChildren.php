<?php include('index.php'); 
?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Регистерийн дугаар олгох</h4>
                        <form class="form-material m-t-40" method="POST" action="save.php">
                            <div class="form-group">
                                <label for="example-email">Эхийн нэр</label>
                                <select name="lastName" class="form-control">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "birthcertificate") or die("Алдаа гарлаа");
                                    $query = "SELECT * FROM citizen";
                                    $result = mysqli_query($conn, "SET NAMES utf8mb4");
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<option value='" . $row[0] . "'>" . $row[2] . "</option>";
                                    }
                                    $now = date("Y-m-d");
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-email">Регистерийн дугаар</label>
                                <select name="registerNumber" class="form-control">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "birthcertificate") or die("Алдаа гарлаа");
                                    $query = "SELECT * FROM organizationandregister where idorganization =".$_SESSION['idorganization'];
                                    echo $query;
                                    $result = mysqli_query($conn, "SET NAMES utf8mb4");
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<option value='" . $row[2] . "'>" . $row[2] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-email">Өндөр</label>
                                <input type="text" name="height" class="form-control" > 
                            </div>
                            <div class="form-group">
                                <label for="example-email">Жин</label>
                                <input type="text" name="weight" class="form-control" > 
                            </div>
                            <div class="form-group">
                                <label for="example-email">Хаяг</label>
                                <input type="text" name="address" class="form-control" > 
                            </div>
                            <div class="form-group">
                                <label for="example-email">Төрсөн огноо</label>
                                <input type="date" name="birthDate" class="form-control"  value="<?php echo $now;?>"> 
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Хадгалах</button>
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