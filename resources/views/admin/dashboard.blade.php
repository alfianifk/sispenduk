@include('layouts.header')

<body>
    @include('layouts.sidebar')
    @include('layouts.tutupheader')
            
    <section class="section">
    @if(session('success'))
            <div class="alert alert-success alert-dismissible show fade">{{ session('success') }}
              <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
            
            </div>
            @endif
        
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible show fade">{{ session('error') }}
                  <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="alert"
                      aria-label="Close"
                    ></button>
                </div>
            @endif
        <div class="alert alert-info alert-dismissible show fade">
            Data ini diambil per {{ date("M Y") }} dan di reset setiap bulan
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon green mb-2">
                        <i class="iconly-boldShow"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">
                        Jumlah Penduduk
                      </h6>
                      <h6 class="font-extrabold mb-0">{{ $pendudukCount }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon blue mb-2">
                        <i class="iconly-boldProfile"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Jumlah KK</h6>
                      <h6 class="font-extrabold mb-0">{{ $kkCount }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon purple mb-2">
                        <i class="iconly-boldAdd-User"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Jumlah Dusun</h6>
                      <h6 class="font-extrabold mb-0">{{ $dusunCount }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon red mb-2">
                        <i class="iconly-boldBookmark"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Article</h6>
                      <h6 class="font-extrabold mb-0">{{ $artikelCount }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="card">
            <div class="card-header">
                <h5>Data Penduduk Desa Singkir</h5>
            </div>
            <div class="card-body">
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
                    @foreach ($penduduk as $p)
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
                        <td>
                           <a href="/tampilkan" class="badge bg-success mb-2">Lihat</a>

                           <a href="{{route('penduduk.edit', $p->id)}}" class="badge bg-warning mb-2">Edit</a>

                           <a href="/penduduk/delete/{{ $p->id }}" onclick="return confirm('apakah anda yakin ?')" class="badge bg-danger mb-2">Hapus</a>
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
