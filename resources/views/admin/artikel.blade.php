@include('layouts.header')
<body>
    @include('layouts.sidebar')
    @include('layouts.tutupheader')

    <section class="section">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <a href="/tambah-artikel-baru" class="btn btn-light-primary">Tambah Artikel Baru</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Judul Artikel</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)     
                            <tr>
                                <td>{{ ($article->title) }}</td>
                                <td>
                                    <a href="/articles/{{ $article->id }}" class="badge bg-success mb-2">Lihat</a>

                                    <a href="{{route('penduduk.edit', $article->id)}}" class="badge bg-warning mb-2">Edit</a>

                                    <a href="/artikel/delete/{{ $article->id }}" onclick="return confirm('apakah anda yakin ?')" class="badge bg-danger mb-2">Hapus</a>
                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

@include('layouts.footer')