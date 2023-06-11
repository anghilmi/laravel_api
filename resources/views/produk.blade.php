<!doctype html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <br>
<div class="container">
  <div class="bd-example">
  <table class="table table-hover">
      <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($daftarProduk as $produk)

    <tr>
      <th scope="row">{{$produk->id_produk}}</th>
      <td>{{$produk->nama_produk}}</td>
      <td>{{$produk->deskripsi_produk}}</td>
      <td>{{$produk->harga_produk}}</td>
      <td><img src="{{$produk->url_produk}}" width="50" ></td>
    </tr>
    @endforeach


    
  </tbody>

  </table>
</div>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>