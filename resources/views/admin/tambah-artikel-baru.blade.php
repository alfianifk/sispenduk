@include('layouts.header')
<body>
    @include('layouts.sidebar')
    @include('layouts.tutupheader')

    <section class="section">
        <div class="alert alert-warning">Untuk menambah gambar kedalam content upload dulu gambarnya terlebih dahulu agar menjadi link disini <a href="https://postimages.org/">Klik disini</a> atau bisa melihat dulu tutorial <a href="https://store.sirclo.com/help/cara-mengubah-gambar-menjadi-link/">Klik disini</a></div>
        <div class="card">
            <div class="card-header">
                <a href="/artikel" class="btn btn-light-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('input-artikel') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul Artikel</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Masukan Judul Artikel"/>
                    </div>
                    <div class="form-group">
                        <label for="author">Penulis</label>
                        <input type="text" class="form-control" name="author" id="author" placeholder="Masukan Nama Penulis"/>
                    </div>
                    <div class="form-group">
                        <label for="content">Isi Konten</label>
                        <textarea cols="8" id="summernote" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                </form>

                
            </div>
        </div>
    </section>
</body>

@include('layouts.footer')

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500,
            popover: {
                image: [
                    ['image', ['resizeHalf']]
                ],
            }
        });

       
    });
</script>
