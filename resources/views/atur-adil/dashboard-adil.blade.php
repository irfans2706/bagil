<!-- include header -->
@include('header')
<!-- end of include header -->

<!-- include navigation -->
@include('navigation')
<!-- end of include navigation -->

<div class="container-fluid p-5 text-center">
    <h1 class="welcome fw-bold pb-5">Selamat Datang Irfan!</h1>
    <div class="d-flex justify-content-center align-items-center">
        <a href="/startgroup" class="btn btn-warning btn-service me-3 px-5 py-3 d-flex flex-wrap">Buat Pembagian Kelompok</a>
        <a href="/joingroup" class="btn btn-light btn-outline-warning btn-service px-5 py-3 d-flex flex-wrap">Join Pembagian Kelompok</a>
    </div>
</div>

<!-- include footer -->
@include('footer')
<!-- end of include footer -->