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
                <h5>Data KK {{ $kk->no_kk }}</h5>
            </div>
            <div class="card-body" style="overflow: auto">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nomor KK</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Pendidikan</th>
                            <th>Pekerjaan</th>
                            <th>Golongan Darah</th>
                            <th>Status Perkawinan</th>
                            <th>Tanggal Perkawinan</th>
                            <th>Status Hubungan</th>
                            <th>Kewarganegaraan</th>
                            <th>No. Paspor</th>
                            <th>No. Kitap</th>
                            <th>Nama Orang Tua</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($kk->penduduk as $p)
                    <tr>
                        <td>{{ $p->kk->no_kk }}</td>
                        <td>{{ $p->nik }}</td>
                        <td>{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->jenis_kelamin }}</td>
                        <td>{{ $p->tempat_lahir }}, {{ $p->tanggal_lahir }}</td>
                        <td>{{ $p->agama }}</td>
                        <td>{{ $p->pendidikan }}</td>
                        <td>{{ $p->pekerjaan }}</td>
                        <td>{{ $p->goldar }}</td>
                        <td>{{ $p->status_perkawinan }}</td>
                        <td>{{ $p->tanggal_perkawinan }}</td>
                        <td>{{ $p->status_hubungan }}</td>
                        <td>{{ $p->kewarganegaraan }}</td>
                        <td>{{ $p->no_paspor }}</td>
                        <td>{{ $p->no_kitas }}</td>
                        <td>{{ $p->nama_orang_tua }}</td>
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
