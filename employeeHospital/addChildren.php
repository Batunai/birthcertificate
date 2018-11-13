<?php include('index.php'); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Регистерийн дугаар олгох</h4>
                        <form class="form-material m-t-40" method="POST" action="save.php">
                            <div class="form-group">
                                <label for="example-email">Эцэгийн нэр</label>
                                <select name="lastName" class="form-control">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "birthcertificate") or die("Алдаа гарлаа");
                                    $query = "SELECT * FROM citizen";
                                    $result = mysqli_query($conn, "SET NAMES utf8mb4");
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<option value='" . $row[0] . "'>" . $row[2] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                                <label for="example-email">Регистерийн дугаар</label>
                                <input type="text" name="registerNumber" class="form-control" > 
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