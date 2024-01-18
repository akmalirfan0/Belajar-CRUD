<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Menggunakan Bootstrap CSS untuk gaya dasar -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512..." crossorigin="anonymous" />
</head>
<body>
    <div class="content">
        <div class="card-header">
            <h3>Input Data</h3>
        </div>

        <div class="card card-info card-outline">
            <div class="card-tools">
                 <a href="{{ route('create-pegawai') }}" class='btn btn-success'>Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($dtPegawai as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jabatan->jabatan }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ date('d-m-Y', strtotime($item->tgllhr)) }}</td>
                    <td>
                        <a href="{{ url('edit-pegawai', $item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a> | 
                        <a href="{{ url('delete-pegawai', $item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                    </td>
                </tr>
                @endforeach
                
            </table>
        </div>

        <!--
        <div class="card-footer">
            {{-- $dtPegawai->links() --}}
        </div> -->
        
    </div>

    @include('sweetalert::alert')

</body>
</html>
