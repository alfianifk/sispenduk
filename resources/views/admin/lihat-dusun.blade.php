@include('layouts.header')

<body>
    @include('layouts.sidebar')
    @include('layouts.tutupheader')

    <section class="section">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible show fade">{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible show fade">{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="alert alert-info alert-dismissible show fade">
            Data ini diambil per {{ date('M Y') }} dan di reset setiap bulan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="card">
            <div class="card-header">
                <h5>Data KK Dusun {{ $dusun->nama_dusun }}</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nomor KK</th>
                            <th>NIK KK</th>
                            <th>Nama KK</th>
                            <th>Jumlah Anggota Keluarga</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dusun->kk as $kk)
                            <tr>
                                <td>{{ $kk->no_kk }}</td>
                                <td>{{ $kk->nik_kk }}</td>
                                <td>{{ $kk->nama_kk }}</td>
                                <td>{{ $kk->jumlah_anggota_keluarga }}</td>
                                <td>{{ $kk->rt }}</td>
                                <td>{{ $kk->rw }}</td>
                                <td><a href="{{ route('dusun.penduduk', $kk->id) }}" class="btn btn-sm btn-primary">Lihat</a></td>
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
