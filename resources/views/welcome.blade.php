@extends('layouts.user')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Pustaka Virtual</h1>
                        <p class="lead fw-normal text-white-50 mb-4">
                            Pustaka Virtual adalah sebuah platform e-library yang menyediakan akses 24/7 ke koleksi buku
                            digital yang luas dari berbagai genre dan topik. Pengguna dapat dengan mudah melakukan
                            peminjaman dan pengembalian buku secara online, serta menikmati fitur-fitur seperti preview
                            buku, rekomendasi personalisasi, dan fitur pencarian yang efisien. Antarmuka yang ramah pengguna
                            dan fitur interaktif seperti forum diskusi juga tersedia untuk memfasilitasi interaksi antara
                            pengguna. Pustaka Virtual juga menyediakan buku dalam berbagai bahasa dan format digital,
                            sehingga dapat diakses melalui berbagai perangkat.
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img class="img-fluid rounded-3 my-5" src="{{ asset('asset/images/pustakavirtual.png') }}" alt="..."
                        style="width: 300px; height: auto;" />
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">Keunggulan dari Pustaka Virtual</h2>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-collection"></i></div>
                            <h2 class="h5">Akses 24/7</h2>
                            <p class="mb-0">Pengguna dapat mengakses koleksi buku kapan pun mereka inginkan, tanpa terikat
                                oleh jam operasional perpustakaan fisik</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-building"></i></div>
                            <h2 class="h5">Pilihan Buku yang Luas</h2>
                            <p class="mb-0">Menyediakan koleksi buku yang luas dari berbagai genre dan topik, memungkinkan
                                pengguna untuk menemukan buku sesuai dengan minat dan kebutuhan mereka</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-toggles2"></i></div>
                            <h2 class="h5">Peminjaman dan Pengembalian Online</h2>
                            <p class="mb-0">Memungkinkan pengguna untuk melakukan proses peminjaman dan pengembalian buku
                                secara online, menjadikan proses ini lebih nyaman dan efisien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">"Informasi adalah senjata yang sangat kuat."</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="rounded-circle me-3" src="{{ asset('asset/images/faces/nikorobin.png') }}"
                                alt="..." style="width: 50px; heigth: auto;" />
                            <div class="fw-bold">
                                Niko Robin
                                <span class="fw-bold text-primary mx-1">/</span>
                                Arkeolog
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Buku Rekomendasi</h2>
                        <p class="lead fw-normal text-muted mb-5">
                            Mari memajukan bangsa dengan memperbanyak literasi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @php
                    $maxNumberOfItems = 3;
                @endphp
                @foreach ($data as $item)
                    @if ($loop->index < $maxNumberOfItems)
                        <div class="col-lg-4 mb-5 mx-auto">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top mx-auto mt-3"
                                    src="{{ asset('asset/images/cover/' . $item->cover) }}" alt="..."
                                    style="width: 250px; height:auto" />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                                        @if ($category = $categories->where('kategoriid', $item->kategori)->first())
                                            {{ $category->namakategori }}
                                        @else
                                            Tidak Terkategori
                                        @endif
                                    </div>
                                    @auth
                                        <a class="text-decoration-none link-dark stretched-link" data-bs-toggle="modal"
                                            data-bs-target="#detailModal{{ $item->bukuid }}" href="">
                                        </a>
                                    @else
                                        <a class="text-decoration-none link-dark stretched-link"
                                            href="{{ route('user.login') }}">
                                    @endauth
                                    <div class="h5 card-title mb-3">{{ $item->judul }}</div>
                                    </a>
                                    <p class="card-text mb-0">
                                        {{ substr($item->sinopsis, 0, 50) }}{{ strlen($item->sinopsis) > 100 ? '...' : '' }}
                                    </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                                <div class="fw-bold">{{ $item->penulis }}</div>
                                                <div class="text-muted">{{ $item->created_at }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                    @break
                @endif
            @endforeach
        </div>
    </div>
</section>
</main>
@endsection

{{-- Modal Detail --}}
@foreach ($data as $item)
<div class="modal fade" id="detailModal{{ $item->bukuid }}" tabindex="-1" aria-labelledby="detailModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5 my-auto">
                        <img class="mx-3 my-3" src="{{ asset('asset/images/cover/' . $item->cover) }}" alt=""
                            style="width: 270px; height: auto;">
                    </div>
                    <div class="col-sm-7">
                        <table class="table table-borderless">
                            <tr class="row">
                                <td class="display-6 fw-bolder">{{ $item->judul }}</td>
                                <td class="col-sm-2 badge bg-primary bg-gradient rounded-pill mb-2 text-white">
                                    @if ($category = $categories->where('kategoriid', $item->kategori)->first())
                                        {{ $category->namakategori }}
                                    @else
                                        Tidak Terkategori
                                    @endif
                                </td>
                                <td class="fs-5 mt-0">
                                    <span>{{ $item->penulis }}</span>
                                </td>
                                <td class="small">
                                    {{ $item->penerbit }}
                                </td>
                                <td class="small">
                                    {{ $item->tahunterbit }}
                                </td>
                                <td class="lead fs-6">
                                    {{ $item->sinopsis }}
                                </td>
                                <td>
                                    Stok Buku : {{ $item->stok }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        @foreach ($data as $item)
                            <form action="{{ url('buku/peminjaman/' . $item->bukuid) }}" class="d-flex"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex mb-3">
                                    <label for="inputQuantity" class="col-form-label mt-3 me-2">Jumlah buku
                                        :</label>
                                    <input type="num" class="form-control text-center me-5 mt-3"
                                        id="inputQuantity" value="1" name="stok"
                                        style="max-width: 3rem">
                                </div>
                                <button type="submit" class="btn btn-block btn-primary my-auto"
                                    style="max-width: 8rem; height: 3rem"><i
                                        class="bi bi-calendar3-range-fill"></i>
                                    Pinjam
                                </button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endforeach
