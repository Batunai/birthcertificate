<?php include('index.php'); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Төрөх эмнэлэг бүртгэх</h4>
                        <form class="form-material m-t-40" method="POST" action="saveBirthHospital.php">
                            <div class="form-group">
                                <label>Эмнэлэгийн нэр</label>
                                <input type="text" name="name" class="form-control" > 
                            </div>
                            <div class="form-group">
                                <label>Хаяг</label>
                                <input type="text" name="address" class="form-control" > 
                            </div>
                            <div class="form-group">
                                <label>Утасны дугаар</label>
                                <input type="text" name="phoneNumber" class="form-control" > 
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