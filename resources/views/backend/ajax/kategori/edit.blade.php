<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kategori</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    {{-- <form action="">
                    </form> --}}
                    <div class="form-group">
                            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="float-right btn btn-primary btn-rounded btn-outline">Tambah Data</button>
                            <div id="id01" class="modal">
                            <form class="modal-content animate" action="/action_page.php">
                                <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <h2>Tambah Data</h2>
                                </div>
                                <div class="container">
                                    <label>Nama Kategori : </label>
                                    <input type="text" name="nama_kategori" class="form-control" required>
                                    </div
                                <div class="container" style="background-color:#f1f1f1">
                                    <button class="float-right btn btn-info btn-rounded btn-outline tombol-simpan">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>