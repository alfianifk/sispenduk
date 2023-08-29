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
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($kk as $p)
                    <tr>
                        <td>{{ $p->no_kk }}</td>
                        <td>{{ $p->nik_kk }}</td>
                        <td>{{ $p->nama_kk }}</td>
                        <td>{{ $p->t_dusun->nama_dusun  }}</td>
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
