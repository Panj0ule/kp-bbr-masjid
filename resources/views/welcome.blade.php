<!DOCTYPE html>
  @extends('layouts.main')
  @section('main-container')
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('https://source.unsplash.com/1200x400/?islam?mosque?muslim');">
                    <div class="img-bg-inner">
                      <h2>Slide 1</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('https://source.unsplash.com/1200x400/?mosque?muslim');">
                    <div class="img-bg-inner">
                      <h2>Slide 2</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('https://source.unsplash.com/1200x400/?islam?muslim');">
                    <div class="img-bg-inner">
                      <h2>Slide 3</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('https://source.unsplash.com/1200x400/?islam?mosque?');">
                    <div class="img-bg-inner">
                      <h2>Slide 4</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    {{-- Section Informasi --}}
    <section>
      <div class="container py-4 pb-3 mb-4">
        <div class="row align-items-md-stretch">
          <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-teal rounded-3">
              <h2>Informasi Kajian</h2>
              <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
              <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-cyan border rounded-3">
              <h2>Informasi Umum</h2>
              <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
              <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- End Section Informasi --}}

    {{-- Section Laporan Infaq --}}
    <section>

    </section>
    {{-- End Section Laporan Infaq --}}
      <div class="container px-4 py-4 bg-green rounded font-family:serif">
        <div class="row py-2">
          <div class="col-8">
            <h3><span class="badge bg-black">LAPORAN INFAQ</span></h3>
          </div>
        </div>

        <div class="row flex-lg-row g-2 py-3 bg-white">
          <div class="col-8 col-sm-8 px-4">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="text-success">JUMLAH</th>
                  <th scope="col">TGL</th>
                  <th scope="col">DARI</th>
                </tr>
              </thead>
              <tbody>
                @for ($i = 0; $i < 7; $i++)          {{-- COnnect ke database --}}
                <tr>
                  <td class="text-success">Rp. 123.456</td>
                  <td>12-12-2022</td>
                  <td>terima infaq dari abcd</td>
                </tr>
                @endfor
              </tbody>
            </table>
          </div>
          <div class="col-lg-4 align-self-center">
            <h6>LAPORAN SALDO INFAQ</h6>
            <div class="row">
              <div class="col-4">
                <h3 class="">SALDO:</h3>
              </div>
              <div class="col-6">
                <h3 class="font-weight: bold text-info">Rp 1.234.567,-</h3>
              </div>
            </div>
            <h6 class="border-bottom"> Salurkan infaq Anda melalui rekening berikut:</h6>
            <div class="row py-2 px-5">
              <div class="container border border-info py-2">
                <p class="text-center">NAMA BANK</p>
                <p class="text-center">No Rekening: 12345678978</p>
                <p class="text-center">Atas nama: Masjid babburahman</p>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-outline-info btn-lg ">Lihat Laporan</button>
            </div>
          </div>
        </div>
      </div>
    <!--Section Tentang BBR-->
    <section>
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{ asset('LOGO masjidbabburahman.png') }}" class="d-block mx-lg-auto img-fluid " alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Tetang Masjid Babburahman</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Content 1</button>
              <button type="button" class="btn btn-outline-secondary btn-lg px-4">Content 2</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Location Section --}}
    <section>
      <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold">Temukan Lokasi Kami disini</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Lokasi Masjid Babburahman terdapat pada ... ... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-4">
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">
              <a href="https://goo.gl/maps/vbUvP1PExuZvwMQEA" target="_blank">Lokasi</a>
            </button>
          </div>
        </div>
        <div class="overflow-hidden mb-4">
          <div class="container px-5">
            {{-- <img src="bootstrap-docs.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy"> --}}
            <iframe class=" align-items-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.407815473134!2d107.63858831485827!3d-6.96112529497087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e84922aec4b3%3A0xe6306913d96e56e!2sMasjid%20Baburrahman!5e0!3m2!1sid!2sid!4v1655989531802!5m2!1sid!2sid" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>
  @endsection('main-container')

</html>
