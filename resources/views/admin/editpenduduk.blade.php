@include('layouts.headeredit')
<body>
    @include('layouts.sidebar')
    @include('layouts.tutupheader')

    {{-- SECTION --}}
    <section class="section">

        {{-- CONTENT --}}
        <div class="card">

          {{-- CARD HEADER --}}
          <div class="card-header">
            <h4 class="card-title">{{ $title }} Penduduk Desa Singkir</h4>
          </div>
          {{-- END CARD HEADER --}}

          {{-- CARD BODY --}}
          <div class="card-body">

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="post" action="{{ route('penduduk.update', $penduduk->id) }}">
              @csrf

            {{-- ROW 6 --}}
            <div class="row">
              {{-- DATA ANGGOTA KELUARGA --}}
                <div id="dynamic-form-container">
                {{-- ROW 6--}}
                    <div class="row">
                    {{-- COL 1 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nik">Nomor NIK</label>
                        <input required type="number" class="form-control" id="nik" name="nik" placeholder="Masukan NIK" value="{{ $penduduk->nik }}"/>
                        </div>
                    </div>
                    {{-- END COL 1 --}}

                    {{-- COL 2 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input required type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" value="{{ $penduduk->nama_lengkap }}"/>
                        </div>
                    </div>
                    {{-- END COL 2 --}}

                    {{-- COL 3 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <fieldset class="form-group">
                        <select required class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                            @if ($penduduk->jenis_kelamin == 'Laki-laki')
                                <option value="Laki-laki" selected>Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            @else
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan" selected>Perempuan</option>
                            @endif
                        </select>
                      </fieldset>
                        </div>
                    </div>
                    {{-- END COL 3 --}}

                    {{-- COL 4 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input required type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="{{ $penduduk->tempat_lahir }}"/>
                        </div>
                    </div>
                    {{-- END COL 4 --}}

                    {{-- COL 5 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input required type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" value="{{ $penduduk->tanggal_lahir }}"/>
                        </div>
                    </div>
                    {{-- END COL 5 --}}

                    {{-- COL 6 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="agama">Agama</label>
                        <fieldset class="form-group">
                        <select required class="form-select" name="agama" id="agama">
                            @if ($penduduk->agama == 'Islam')
                                <option value="Islam" selected>Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            @elseif ($penduduk->agama == 'Kristen')
                                <option value="Islam">Islam</option>
                                <option value="Kristen" selected>Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            @elseif ($penduduk->agama == 'Katolik')
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik" selected>Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            @elseif ($penduduk->agama == 'Hindu')
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu" selected>Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            @elseif ($penduduk->agama == 'Budha')
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha" selected>Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            @else
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu" selected>Konghucu</option>
                            @endif
                        </select>
                        </fieldset>
                        </div>
                    </div>
                    {{-- END COL 6 --}}

                    {{-- COL 7 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="pendidikan">Pendidikan Terakhir</label>
                        <fieldset class="form-group">
                        <select required class="form-select" name="pendidikan" id="pendidikan">
                          @if ($penduduk->pendidikan == 'TAMAT SD/SEDERAJAT')
                            <option value="TAMAT SD/SEDERAJAT" selected>TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pendidikan == 'TIDAK/BELUM SEKOLAH')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH" selected>TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pendidikan == 'SLTA/SEDERAJAT')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT" selected>SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pendidikan == 'SLTP/SEDERAJAT')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT" selected>SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pendidikan == 'BELUM TAMAT SD/SEDERAJAT')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT" selected>BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pendidikan == 'DIPLOMA IV/STRATA I')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I" selected>DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pendidikan == 'DIPLOMA I/II')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II" selected>DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pendidikan == 'AKADEMI/DIPLOMA III/S. MUDA')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA" selected>AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pendidikan == 'STRATA II')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II" selected>STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @else
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III" selected>STRATA III</option>
                        @endif
                        </select>
                        </fieldset>
                        </div>
                    </div>
                    {{-- END COL 7 --}}

                    {{-- COL 8 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <fieldset class="form-group">
                        <select required class="form-select" name="pekerjaan" id="pekerjaan">
                        @if ($penduduk->pekerjaan == 'TAMAT SD/SEDERAJAT')
                            <option value="TAMAT SD/SEDERAJAT" selected>TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pekerjaan == 'TIDAK/BELUM SEKOLAH')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH" selected>TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pekerjaan == 'SLTA/SEDERAJAT')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT" selected>SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pekerjaan == 'SLTP/SEDERAJAT')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT" selected>SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pekerjaan == 'BELUM TAMAT SD/SEDERAJAT')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT" selected>BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pekerjaan == 'DIPLOMA IV/STRATA I')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I" selected>DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pekerjaan == 'DIPLOMA I/II')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II" selected>DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pekerjaan == 'AKADEMI/DIPLOMA III/S. MUDA')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA" selected>AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @elseif ($penduduk->pekerjaan == 'STRATA II')
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II" selected>STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        @else
                            <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                            <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III" selected>STRATA III</option>
                        @endif
                        </select>
                        </fieldset>
                        </div>
                    </div>
                    {{-- END COL 8 --}}

                    {{-- ROW --}}
                        <div class="col-md-2">
                            <div class="form-group">
                            <label for="goldar">Golongan Darah</label>
                            <fieldset class="form-group">
                                <select required class="form-select" name="goldar" id="goldar">
                                    @if ($penduduk->goldar == 'A')
                                        <option value="A" selected>A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    @elseif ($penduduk->goldar == 'B')
                                        <option value="A">A</option>
                                        <option value="B" selected>B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    @elseif ($penduduk->goldar == 'AB')
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB" selected>AB</option>
                                        <option value="O">O</option>
                                    @else
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O" selected>O</option>
                                    @endif
                                </select>
                            </fieldset>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                            <label for="status_perkawinan">Status Perkawinan</label>
                            <fieldset class="form-group">
                                <select required class="form-select" name="status_perkawinan" id="status_perkawinan">
                                    @if($penduduk->status_perkawinan == 'Belum Kawin')
                                        <option value="Belum Kawin" selected>Belum Kawin</option>
                                        <option value="Kawin Belum Tercatat">Kawin Belum Tercatat</option>
                                        <option value="Kawin Tercatat">Kawin Tercatat</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    @elseif($penduduk->status_perkawinan == 'Kawin Belum Tercatat')
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin Belum Tercatat" selected>Kawin Belum Tercatat</option>
                                        <option value="Kawin Tercatat">Kawin Tercatat</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    @elseif($penduduk->status_perkawinan == 'Kawin Tercatat')
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin Belum Tercatat">Kawin Belum Tercatat</option>
                                        <option value="Kawin Tercatat" selected>Kawin Tercatat</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    @elseif($penduduk->status_perkawinan == 'Cerai Hidup')
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin Belum Tercatat">Kawin Belum Tercatat</option>
                                        <option value="Kawin Tercatat">Kawin Tercatat</option>
                                        <option value="Cerai Hidup" selected>Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    @else
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin Belum Tercatat">Kawin Belum Tercatat</option>
                                        <option value="Kawin Tercatat">Kawin Tercatat</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati" selected>Cerai Mati</option>
                                    @endif
                                </select>
                            </fieldset>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="tanggal_perkawinan">Tanggal Perkawinan</label>
                                <input required type="date" class="form-control" id="tanggal_perkawinan" name="tanggal_perkawinan" placeholder="Masukan Tanggal Perkawinan" value="{{ $penduduk->tanggal_perkawinan }}"/>
                            </div>
                        </div>
                    {{-- END ROW --}}

                    {{-- COL - 10 --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status_hubungan">Status Hubungan</label>
                                <input required type="text" class="form-control" id="status_hubungan" name="status_hubungan" placeholder="Masukan Status Hubungan" value="{{ $penduduk->status_hubungan }}"/>
                            </div>
                        </div>
                    {{--  END COL - 10 --}}

                    {{-- COL - 11 --}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nama_orang_tua">Nama Orang Tua</label>
                                <input required type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" placeholder="cth: Andi/Lilis" value="{{ $penduduk->nama_orang_tua }}"/>
                            </div>
                        </div>
                    {{--  END COL - 11 --}}

                    {{-- COL - 12 --}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                <fieldset class="form-group">
                                <select required class="form-select" name="kewarganegaraan" id="kewarganegaraan">
                                @if ($penduduk->kewarganegaraan == 'WNI')
                                    <option value="WNI" selected>WNI</option>
                                    <option value="WNA">WNA</option>
                                @else
                                    <option value="WNI">WNI</option>
                                    <option value="WNA" selected>WNA</option>
                                @endif
                                </select>
                            </fieldset>
                            </div>
                        </div>
                    {{--  END COL - 12 --}}

                    {{-- COL - 13 --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_paspor">No Paspor</label>
                                <input required type="text" class="form-control" id="no_paspor" name="no_paspor" placeholder="isi - jika tidak ada" value="{{ $penduduk->no_paspor }}"/>   
                            </div>
                        </div>
                    {{--  END COL - 13 --}}


                    {{-- COL - 14 --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_kitap">No Kitap</label>
                                <input required type="text" class="form-control" id="no_kitap" name="no_kitap" placeholder="isi - jika tidak ada" value="{{ $penduduk->no_kitap }}"/>
                            </div>
                        </div>
                    {{--  END COL - 14 --}}
                    
                    </div>
                {{-- END ROW --}}
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
                  </div>
                </div>
              </form>
              
                

              {{-- END DATA ANGGOTA KELUARGA --}}
    

            </div>
            {{-- END ROW 6 --}}

          </div>
          {{-- END CARD BODY --}}

        </div>
        {{-- END CONTENT --}}

      </section>
      {{-- END SECTION --}}
  
      @include('layouts.footer')
</body>
</html>
