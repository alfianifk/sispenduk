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
                    <img src="assets/images/carousel/1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/images/carousel/2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/carousel/3.jpg" class="d-block w-100" alt="...">
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
                    <h4 class="card-title">Aparatur Desa</h4>
                    <p class="card-text">
                        Aparatur desa terdiri dari berbagai posisi atau jabatan yang ada di tingkat pemerintahan desa. Setiap jabatan memiliki tanggung jawab dan peran yang berbeda dalam menjalankan tugas-tugas pemerintahan, pembangunan, dan pelayanan masyarakat di tingkat desa. 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia veniam laborum nostrum porro, doloribus, rem obcaecati eos animi voluptatum consequatur quae.
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="card-img-top img-fluid" src="assets/images/thumbnail/img.png" alt="Card image cap" />
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="card-title">Judul Artikel 1</h4>
                                        <p class="card-text">
                                            Jelly-o sesame snaps cheesecake topping. Cupcake
                                            fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar muffin. Dessert bonbon caramels brownie
                                            chocolate bar chocolate tart dragée.
                                        </p>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="card-img-top img-fluid" src="assets/images/thumbnail/img.png" alt="Card image cap" />
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="card-title">Judul Artikel 1</h4>
                                        <p class="card-text">
                                            Jelly-o sesame snaps cheesecake topping. Cupcake
                                            fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar muffin. Dessert bonbon caramels brownie
                                            chocolate bar chocolate tart dragée.
                                        </p>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="card-img-top img-fluid" src="assets/images/thumbnail/img.png" alt="Card image cap" />
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="card-title">Judul Artikel 1</h4>
                                        <p class="card-text">
                                            Jelly-o sesame snaps cheesecake topping. Cupcake
                                            fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar muffin. Dessert bonbon caramels brownie
                                            chocolate bar chocolate tart dragée.
                                        </p>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
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