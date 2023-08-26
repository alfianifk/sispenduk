@include('layouts.header')
<body>
    @include('layouts.sidebar')
    @include('layouts.tutupheader')

    {{-- SECTION --}}
    <section class="section">

        {{-- ALERT --}}
        <div class="alert alert-warning alert-dismissible show fade">
            Silahkan Input Data Kepala Keluarga Terlebih Dahulu !
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
        </div>
        {{-- END ALERT --}}

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

            <form method="post" action="{{ route('penduduk.store') }}">
              @csrf
            {{-- ROW FORM 12 --}}
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="no_kk">Nomor Kartu Keluarga</label>
                    <input required type="number" class="form-control" id="no_kk" name="no_kk" placeholder="Masukan Nomor Kartu Keluarga" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="jumlah_anggota_keluarga">Jumlah Anggota Keluarga</label>
                    <input required type="number" class="form-control" id="jumlah_anggota_keluarga" name="jumlah_anggota_keluarga"/>
                    </div>
                </div>
            </div>
            {{-- END ROW 12 --}}

            {{-- ROW 6 --}}
            <div class="row">

              {{-- COL 1 --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nik_kk">NIK Kepala Keluarga</label>
                  <input required type="number" class="form-control" id="nik_kk" name="nik_kk" placeholder="Masukan NIK Kepala Keluarga"/>
                </div>
              </div>
              {{-- END COL 1 --}}

              {{-- COL 2 --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nama_kk">Masukan Nama Lengkap</label>
                  <input required type="text" class="form-control" id="nama_kk" name="nama_kk" placeholder="Nama Lengkap Kepala Keluarga"/>
                </div>
              </div>
              {{-- END COL 2 --}}

              {{-- ROW ALAMAT --}}
              <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <label for="alamar">Alamat</label>
                      <fieldset class="form-group">
                        <select required class="form-select" id="alamat" name="dusun_id">
                          <option>== Pilih Dusun ==</option>
                          <option value="1">Singkir 1</option>
                          <option value="2" >Singkir 2</option>
                          <option value="3">Desakolot</option>
                          <option value="4">Jadimulya</option>
                          <option value="5">Ciheulang</option>
                        </select>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="form-group">
                      <label class="text-white">shsgsh</label>
                      <input required type="number" class="form-control" id="rt" name="rt" placeholder="Masukan RT"/>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4">
                    <div class="form-group">
                      <label class="text-white">shsgsh</label>
                      <input required type="number" class="form-control" id="rw" name="rw" placeholder="Masukan RW"/>
                    </div>
                  </div>
              </div>
              {{-- END ROW ALAMAT --}}
              <hr>

              {{-- DATA ANGGOTA KELUARGA --}}
                <div class="row">
                    <div class="col-md-4">
                      Tambah data Anggota 
                        <button type="button" class="btn btn-primary btn-sm" id="add-form"> <i class="bi bi-plus"></i></button>
                    </div>
                </div>
               
                <div id="dynamic-form-container">
                    {{-- disini --}}
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
      @include('layouts.script')
</body>
</html>
