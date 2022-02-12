<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="/biner">Cari Angka Biner to Decimal</a><br>
    <a href="/decimal">Cari Angka Decimal to Biner</a><br>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
    <div class="table">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>tanggal order</th>
                    <th>status</th>
                    <th>tanggal pembayaran</th>
                    <th>total</th>
                    <th>Jumlah Barang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->transaksi->id}}</td>
                    <td>{{ $transaction->tgl_order}}</td>
                    <td>{{ $transaction->transaksi->status_pelunasan}}</td>
                    <td>{{ $transaction->transaksi->tgl_pembayaran}}</td>
                    <td>{{ $transaction->subtotal}}</td>
                    <td>{{ $transaction->jumlah}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>