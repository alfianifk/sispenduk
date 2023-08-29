@include('home.partials.header')

<div class="content-wrapper container">
    <div class="page-heading">
        <h3>Dokumentasi Kegiatan</h3>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="assets/images/carousel/1.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/images/carousel/2.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousel/3.jpeg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <h4 class="card-title">Gambaran Umum Desa Singkir</h4>
                    <p class="card-text text-justify">
                      Desa Singkir adalah sebuah desa yang terletak di Kecamatan Cikalong, Kabupaten Tasikmalaya, Jawa Barat, Indonesia. <br> <br> Desa ini memiliki luas wilayah sekitar 975,75 Ha dan terletak di ketinggian sekitar 1500 meter di atas permukaan laut. <br> <br>  Desa ini dikelilingi oleh perbukitan dan hamparan sawah yang hijau. Udara yang sejuk dan pemandangan yang indah membuat desa ini menjadi tempat yang cocok untuk bersantai dan melepas penat.
                    </p>
                  </div>

                  <div class="card-footer d-flex justify-content-between">
                    <span>{{ date("d, M Y") }}</span>
                    <button class="btn btn-light-primary">Selengkapnya</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
<div class="page-heading mt-3">
    <h3>Artikel terkini</h3>
</div>
<div class="page-content">
    <section>
        <div class="row">
            <div class="col-md-8">

                {{-- ROW ARTIKEL --}}
                @foreach ($articles as $article)
                
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content">
                              <div class="card-body">
                                <h4 class="card-title">
                                  <a href="/articles/{{ $article->id }}">{{ $article->title; }}</a>
                                </h4>
                                <p class="card-text">
                                  <p id="content">{{ htmlspecialchars(substr($article->content, 700, 250)) }}{{ strlen($article->content) > 250 ? '...' : '' }}</p>
                                  <a href="/articles/{{ $article->id }}" class="btn btn-light-primary">Baca selengkapnya</a>
                                </p>
                              </div>

                              <div class="card-footer d-flex justify-content-between">
                                <span>Penulis : {{ $article->author; }}</span>
                              </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                {{-- END ROW ARTIKEL --}}
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <h4 class="card-title">Aparatur Desa Singkir</h4>
                  </div>
                  <div
                    id="carouselExampleSlidesOnly"
                    class="carousel slide"
                    data-bs-ride="carousel"
                  >
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img
                          src="assets/images/thumbnail/img.png"
                          class="d-block w-100"
                          alt="Image Architecture"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="assets/images/thumbnail/img.png"
                          class="d-block w-100"
                          alt="Image Mountain"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="assets/images/thumbnail/img.png"
                          class="d-block w-100"
                          alt="Image Jump"
                        />
                      </div>
                    </div>
                    <a
                      class="carousel-control-prev"
                      href="#carouselExampleControls"
                      role="button"
                      data-bs-slide="prev"
                    >
                      <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a
                      class="carousel-control-next"
                      href="#carouselExampleControls"
                      role="button"
                      data-bs-slide="next"
                    >
                      <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Sunt assumenda mollitia officia dolorum eius
                      quasi.Chocolate sesame snaps apple pie danish cupcake
                      sweet roll jujubes tiramisu.
                    </p>
                    <p class="card-text">
                      Gummies bonbon apple pie fruitcake icing biscuit apple
                      pie jelly-o sweet roll. Toffee sugar plum sugar plum
                      jelly-o jujubes bonbon dessert carrot cake. Sweet pie
                      candy jelly. Sesame snaps biscuit sugar plum. Sweet roll
                      topping fruitcake. Caramels liquorice biscuit ice cream
                      fruitcake cotton candy tart.
                    </p>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </section>

    <div class="page-heading mt-3">
        <h3>Data Desa Singkir</h3>
    </div>

    @include('home.partials.data')
</div>

@include('home.partials.footer')
<script>
  var articleContent = {!! json_encode($article->content) !!};
  $('#content').summernote('code', articleContent);
</script>