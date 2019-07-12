$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var alamat = '/api/artikel'

    // Get Data Siswa
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function (berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                $(".data-artikel").append(
                    `
                    <tr>
                    <td>${value.judul}</td>
                    <td><img src="/assets/img/artikel/${value.foto}" width="100"></td>
                    <td>${value.slug}</td> 
                    <td>${value.konten}</td> 
                    <td>${value.kategori.nama_kategori}</td>
                    <td>${value.tag[0].nama_tag}</td>  
                    <td><button class="btn btn-danger btn-sm hapus-data" data-id="${value.id}">Hapus</button></td>
                    </tr>
                    `
                )
            })
        }
    })

    // Simpan Data
    $('.tambah-artikel').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            url: '/api/category',
            method: "GET",
            dataType: "JSON",
            success: function (data) {
                $.each(data.data, function(key, val) {
                    $('.kategori').append(
                        `
                        <option value="${val.id}">${val.nama}</option>
                        `
                    )
                })
            },
            error: function (err) {
                console.log(err);
            }
        });

        $.ajax({
            url: '/api/tag',
            method: "GET",
            dataType: "JSON",
            success: function (data) {
                $.each(data.data, function(key, val) {
                    $('.tag').append(
                        `
                        <option value="${val.id}">${val.nama}</option>
                        `
                    )
                })
            },
            error: function (err) {
                console.log(err);
            }
        });
    })

    var formData = new FormData();

    $('#form-create-artikel').on('submit', function (e) {
        e.preventDefault();

        var tag = $('.tag option:selected').attr('value');

        formData.append('foto', $('input[type="file"]')[0].files[0])
        formData.append('judul', $('.judul').val());
        formData.append('konten', $('.konten').val());
        // formData.append('', $('.foto').val());
        formData.append('kategori',  $('.kategori option:selected').attr('value'));
        formData.append('tag', [tag]);

        $.ajax({
            url: alamat,
            method: "POST",
            dataType: "JSON",
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res.message);
                location.reload();
            },
            error: function (err) {
                console.log(err);

            }
        })
    })

    $('.data-artikel').on('click', '.e-artikel', function() {

        var id = $(this).data('id')
        var judul = $(this).data('judul')
        var konten = $(this).data('konten')
        var foto = $(this).data('foto')
        var kategori = $(this).data('kategori')
        var tag = $(this).data('tag')

        $('.e-judul').val(judul)
        $('.e-konten').val(konten)
        $('.prev-foto').attr('src', '/assets/backend/artikel/img/'+foto)

        $.ajax({
            url: '/api/category',
            method: "GET",

        })
    })


    // Hapus Data
    $(".data-artikel").on('click', '.hapus-data', function () {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function (berhasil) {
                alert(berhasil.message)
                location.reload();
            },
            error: function (gagal) {
                console.log(gagal)
            }
        })
    })
})