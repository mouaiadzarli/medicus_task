<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
        rel="stylesheet"
    />
    <title>QR_info</title>
</head>
<body>
<form method="post" action="{{url('/qrcode')}}" class=" container center_div col-md-4 col-md-offset-4 border border-secondary">
    @csrf
    <div class="mb-3">
        <label for="numberQR" class="form-label">Enter Number of QR codes in the file</label>
        <input required type="text" class="form-control" id="numberQR"  name="numberQR">
    </div>
    <div class="mb-3">
        <label for="color" class="form-label">Enter the color of QR</label>
        <select name="color" class="form-select" aria-label="Default select example">
            <option value="green" selected>green</option>
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="gray">gray</option>
        </select>

    </div>
    <div class="mb-3">
        <label for="color" class="form-label">Enter the QR prefix</label>
        <select name="QR prefix" class="form-select" aria-label="Default select example">
            <option value="QRCODE" selected>QRCODE</option>
            <option value="C39">C39</option>
            <option value="PDF417">PDF417</option>
            <option value="DATAMATRIX">DATAMATRIX</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="number" class="form-label">Enter Number of PDF</label>
        <input required type="number" class="form-control" id="number"  name="number">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<style>
    .center_div{
        margin: 100px auto;
        padding: 50px;
   }
</style>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
></script>

</html>
