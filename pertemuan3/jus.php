<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
    $ar_buah = ["Mangga","Sirsak","Jeruk","Alpukat","Durian"];
    // foreach($ar_buah as $k => );{ //
        echo '<br/>'
?>
    <form>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pemesan</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-address-card"></i>
            </div>
            </div> 
            <input id="nama" name="nama" type="text" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jus" class="col-4 col-form-label">Pilihan Juice</label> 
        <div class="col-8">
        <select id="jus" name="jus" class="custom-select">
            <option value="1">Jeruk</option>
            <option value="2">Mangga</option>
            <option value="3">FishSirsak</option>
            <?php
            //foreach($ar_buah as $k => %v){
                echo 'option value ="'. $s
            //};
            ?>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
        <select id="jumlah" name="jumlah" class="custom-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</body>
</html>