@include('layouts.header')

<body>
    @include('layouts.sidebar')
    @include('layouts.tutupheader')

    <section class="section">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="alert alert-info alert-dismissible show fade">
            Data ini diambil per {{ date('M Y') }} dan di reset setiap bulan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="card">
            <div class="card-header">
                <h5>Data Penduduk Desa Singkir</h5>
                <a href="{{ route('dusun.create') }}" class="badge bg-primary mb-2 py-2">Tambah Data Dusun</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Dusun</th>
                            <th>Kepala Dusun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dusun as $data)
                            <tr>
                                <td>{{ $data->nama_dusun }}</td>
                                <td>{{ $data->kepala_dusun }}</td>
                                <td>
                                    <a href="{{ route('dusun.edit', $data->id) }}"
                                        class="btn btn-sm bg-warning mb-2">Edit</a>


                                    <form action="{{ route('dusun.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('apakah anda yakin ?')"
                                            class="btn btn-sm text-white bg-danger mb-2">Hapus</button>
                                    </form>

                                    <a href="{{ route('dusun.show', $data->id) }}"
                                        class="btn btn-sm bg-warning mb-2">Lihat</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    </div>

    @include('layouts.footer')

</body>

</html>
