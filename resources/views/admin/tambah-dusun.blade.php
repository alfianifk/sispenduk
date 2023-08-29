@include('layouts.header')
<body>
    @include('layouts.sidebar')
    @include('layouts.tutupheader')

    {{-- SECTION --}}
    <section class="section">

        {{-- ALERT --}}
        <div class="alert alert-warning alert-dismissible show fade">
            Silahkan Input Data Dusun
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
            <h4 class="card-title">{{ $title }}  Desa Singkir</h4>
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

            <form method="post" action="{{ route('dusun.store') }}">
              @csrf
            {{-- ROW FORM 12 --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nama_dusun">Masukan Nama Dusun</label>
                        <input required type="text" class="form-control" id="nama_dusun" name="nama_dusun" placeholder="Masukan Nama Dusun" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="kepala_dusun">Masukan Nama Kepala Dusun</label>
                        <input required type="text" class="form-control" id="kepala_dusun" name="kepala_dusun" placeholder="Masukan Nama Kepala Dusun" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
                </div>
            </div>
        </form>

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
