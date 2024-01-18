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
        <div class="card card-info card-outline">
            <div class="card-header">
               <h3>Edit Data Pegawai</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('edit-pegawai.update', $peg->id) }}" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pegawai" value="{{ $peg->nama }}">
                    </div>
                    <div class="form-group">
                        <select type="text" id="jabatan_id" name="jabatan_id" class="form-control" >
                            <option disabled value>Pilih Jabatan</option>
                            <option value="{{ $peg->jabatan_id }}">{{ $peg->jabatan->jabatan }}</option>
                            
                            @foreach ($jab as $item)
                            <option value="{{ $item->id }}">{{ $item->jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Pegawai">{{ $peg->alamat }}</textarea>
                    </div>
                    <div class=form-group>
                        <input type="date" id="tgllhr" name="tgllhr" class="form-control" value="{{ $peg->tgllhr }}">
                    </div>
                    <div class=form-group>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
