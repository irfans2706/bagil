<!-- include header -->
@include('header')
<!-- end of include header -->

<!-- include navigation -->
@include('navigation')
<!-- end of include navigation -->

<div class="container p-5">
    <div class="row">
    <div class="col-sm-6 col-12">
        <h3>Masukan Nama</h3>
        <div class="form-floating d-flex align-items-center justify-content-end">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"></textarea>
        <label for="floatingTextarea">pisahkan nama dengan enter</label>
        </div>
    </div>
    <div class="col-sm-6 col-12">
        <label for="jumlahKelompok" class="form-label pt-4">Masukan Jumlah Kelompok</label>
        <input type="number" class="form-control" id="jumlahKelompok"/>
        <button type="button" class="btn btn-dark mt-2">Atur Kelompok Sekarang</button>
    </div>
    </div>
</div>

<!-- include footer -->
@include('footer')
<!-- end of include footer -->