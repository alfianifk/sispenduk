@include('home.partials.header')

<div class="content-wrapper container">
    <div class="page-content">
        <section>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card p-4">
                                <p>Penulis : {{ $article->author }}</p>
                                <h1>{{  $article->title  }}</h1>
                                {!! $article->content !!}
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-left">
                            <a href="/" class="btn btn-light-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('home.partials.footer')

<script>
     var articleContent = {!! json_encode($article->content) !!};
     $('#content').summernote('code', articleContent);
</script>