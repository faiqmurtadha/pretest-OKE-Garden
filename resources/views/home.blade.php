<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OKE Garden Pre-Test</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand bg-white shadow p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="#">
                <img src="/img/logo.png" alt="logo" height="40">
            </a>
            <div class="collapse navbar-collapse d-flex justify-content-center fw-semibold" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item me-3">
                  <a class="nav-link" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Layanan
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Layanan 1</a></li>
                      <li><a class="dropdown-item" href="#">Layanan 2</a></li>
                      <li><a class="dropdown-item" href="#">Layanan 3</a></li>
                    </ul>
                  </li>
                <li class="nav-item dropdown me-3">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Blog
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Blog 1</a></li>
                    <li><a class="dropdown-item" href="#">Blog 2</a></li>
                    <li><a class="dropdown-item" href="#">Blog 3</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Mitra
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Mitra 1</a></li>
                      <li><a class="dropdown-item" href="#">Mitra 2</a></li>
                      <li><a class="dropdown-item" href="#">Mitra 3</a></li>
                    </ul>
                  </li>
              </ul>
            </div>
            <a class="collapse d-flex justify-content-end me-4" href="#">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle-profil" data-bs-toggle="dropdown"><img src="/img/profile.jpg" alt="logo" width="40" height="40" class="rounded-circle logo-profil"></a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </a>
          </div>
    </nav>
    <div class="container">
        <div class="title text-center mb-5">
            <h3 class="fw-bold pt-4">Konsultasi Taman</h3>
            <p class="fw-semibold title-desc pt-2">klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultan kami</p>
        </div>
        <div class="row mb-5">
            <div class="col-sm-5">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <div class="input-group date">
                      <div id="datepicker"></div>
                        <input type="hidden" id="my_hidden_input">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="card">
                <div class="card-body">
                  <div class="container">
                    <h5 class="text-center fw-semibold mt-4" id="hari"></h5>
                    <p class="text-center mb-4" id="tanggal"></p>
                    <h5 class="card-title fw-semibold">Pilih Waktu</h5>
                    <p>Durasi Konsultasi 30 Menit</p>
                    <div class="row row-cols-2 text-center">
                      <div class="col mb-3">
                        <button class="btn btn-waktu" data-bs-toggle="button" id="jam9">09.00</button>
                      </div>
                      <div class="col mb-3">
                        <button class="btn btn-waktu" data-bs-toggle="button" id="jam13">13.00</button>
                      </div>
                      <div class="col mb-3">
                        <button class="btn btn-waktu" data-bs-toggle="button" id="jam10">10.00</button>
                      </div>
                      <div class="col mb-3">
                        <button class="btn btn-waktu" data-bs-toggle="button" id="jam14">14.00</button>
                      </div>
                      <div class="col mb-3">
                        <button class="btn btn-waktu" data-bs-toggle="button" id="jam11">11.00</button>
                      </div>
                      <div class="col mb-3">
                        <button class="btn btn-waktu" data-bs-toggle="button" id="jam15">15.00</button>
                      </div>
                      <div class="col mb-3">
                        <button class="btn btn-waktu" data-bs-toggle="button" id="jam12">12.00</button>
                      </div>
                      <div class="col mb-3">
                        <button class="btn btn-waktu" data-bs-toggle="button" id="jam16">16.00</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="card mb-5">
              <div class="container">
                <div class="list-group list-group-flush">
                  <div class="list-group-item mt-5 ms-4 pb-5">
                    <div class="informasi-data row me-5">
                      <h3 class="fw-bold ">Informasi Data Diri</h3>
                      <div class="col">
                        <div class="mt-3">
                          <label for="inputNama" class="form-label fw-semibold">Nama Lengkap</label>
                          <input type="text" class="form-control" id="inputNama" placeholder="Yudha Wahyu" disabled>
                        </div>
                      </div>
                      <div class="col">
                        <div class="mt-3">
                          <label for="inputHP" class="form-label fw-semibold">No HP</label>
                          <input type="text" class="form-control" id="inputHP" placeholder="+62 852 2324 4747" disabled>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <p class="col-1">Alamat</p>
                        <div class="card card-alamat col-9">
                          <div class="card-body">
                            <p class="card-text text-start pb-4">Jl. serangkai 1 Perum. Bumi Jaya blok A No.12 Kelurahan samping, Kecamatan Baru, Kota Tanjungpinang, Kepulauan Riau 29125, Indonesia</p>
                            <a class="btn btn-link btn-tambah-alamat d-flex align-item-end" data-bs-toggle="modal" data-bs-target="#tambah-alamat-baru">Tambah Alamat Baru</a>
                            <div class="modal fade" id="tambah-alamat-baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Alamat Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="mb-3">
                                      <label for="inputAlamat" class="form-label">Alamat</label>
                                      <textarea class="form-control" id="inputAlamat" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                      <label for="inputKelurahan" class="form-label">Kelurahan</label>
                                      <input type="text" class="form-control" id="inputKelurahan">
                                    </div>
                                    <div class="mb-3">
                                      <label for="inputKecamatan" class="form-label">Kecamatan</label>
                                      <input type="text" class="form-control" id="inputKecamatan">
                                    </div>
                                    <div class="mb-3">
                                      <label for="inputKota" class="form-label">Kota/Kabupaten</label>
                                      <input type="text" class="form-control" id="inputKota">
                                    </div>
                                    <div class="mb-3">
                                      <label for="inputProvinsi" class="form-label">Provinsi</label>
                                      <input type="text" class="form-control" id="inputProvinsi">
                                    </div>
                                    <div class="mb-3">
                                      <label for="inputKodePos" class="form-label">Kode Pos</label>
                                      <input type="text" class="form-control" id="inputKodePos">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-success">Tambah</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item mt-4 ms-4">
                    <div class="informasi-konsul row">
                      <h3 class="fw-bold ">Informasi Konsultasi Taman</h3>
                      <div class="info-lahan mt-3 mb-4">
                        <h6 class="fw-semibold">Lahan Taman</h6>
                        <p class="title-desc">Pilih jumlah lahan taman yang akan dibuat.</p>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="1-taman">1 Lahan Taman</button>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="2-taman">2 Lahan Taman</button>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="banyak-taman">Lebih dari 2 Lahan Taman</button>
                      </div>
                      <div class="tema-taman mt-3 mb-5">
                        <h6 class="fw-semibold">Tema Taman</h6>
                        <p class="title-desc">Pilih tema taman yang akan dibuat.</p>
                        <div class="catatan-tema col-sm-9">
                          <div class="card pt-3 ps-3">
                            <p><b>Catatan : </b> Jika anda belum memiliki inspirasi tema taman maka anda bisa melewati tahapan ini, konsultan kami akan memberikan rekomendasi terbaik untuk taman anda.</p>
                          </div>
                        </div>
                        <div class="pilih-tema">
                          <div class="row mt-5">
                            <div class="col">
                              <button type="button" class="btn btn-tema p-0" data-bs-toggle="button" id="tema1">
                                <div class="card">
                                  <img src="/img/taman-minimalis.jpg" class="card-img-top rounded" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title text-start fw-bold mt-3">Taman Minimalis</h5>
                                    <p class="card-text text-start">Taman yang indah dilahan yang sempit.</p>
                                    <a class="btn btn-link btn-pilih-tema">Pilih</a>
                                  </div>
                                </div>
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn btn-tema p-0" data-bs-toggle="button" id="tema2">
                                <div class="card">
                                  <img src="/img/taman-kering.jpg" class="card-img-top rounded" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title text-start fw-bold mt-3">Taman Kering</h5>
                                    <p class="card-text text-start">Taman yang dirancang untuk menghasilkan suasana alam didalam dan diluar rumah</p>
                                    <a class="btn btn-link btn-pilih-tema">Pilih</a>
                                  </div>
                                </div>
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn btn-tema p-0" data-bs-toggle="button" id="tema3">
                                <div class="card">
                                  <img src="/img/taman-tropis.jpg" class="card-img-top rounded" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title text-start fw-bold mt-3">Taman Tropis</h5>
                                    <p class="card-text text-start">Taman yang paling sesuai dengan iklim di Indonesia</p>
                                    <a class="btn btn-link btn-pilih-tema d-flex align-item-end">Pilih</a>
                                  </div>
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="estimasi">
                        <h6 class="fw-semibold mb-4">Estimasi Ukuran Taman</h6>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="luas1">{{ "<10m2" }}</button>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="luas2">11-20m2</button>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="luas3">21-30m2</button>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="luas4">31-40m2</button>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="luas5">41-50m2</button>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="luas6">51-60m2</button>
                        <button type="button" class="btn btn-outline-success me-3 fw-semibold border border-success border-2" data-bs-toggle="button" aria-pressed="true" id="luas7">{{ ">100m2" }}</button>
                      </div>
                      <div class="button-finish d-flex flex-row-reverse mb-4">
                        <button type="button" class="btn btn-success me-3 fw-semibold">OKE</button>
                        <button type="button" class="btn btn-light me-3 fw-semibold" style="color: darkgreen">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/script.js"></script>
  </body>
</html>