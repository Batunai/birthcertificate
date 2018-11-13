<?php include('index.php'); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Регистерийн дугаар бүртгэл хийх</h4>
                        <form class="form-material m-t-40" method="POST" action="save.php">
                            <div class="form-group">
                                <label for="example-email">Регистерийн дугаар</label>
                                <select name="registerNumber" class="form-control">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "birthcertificate") or die("Алдаа гарлаа");
                                    $query = "SELECT * FROM registerNumber";
                                    $result = mysqli_query($conn, "SET NAMES utf8mb4");
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<option value='" . $row['idRegister'] . "'>" . $row['idRegister'] . "</option>";
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
                                <input type="date" name="birthDate" class="form-control" > 
                            </div>
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