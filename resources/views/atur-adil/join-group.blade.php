<!-- include header -->
@include('header')
<!-- end of include header -->

<!-- include navigation -->
@include('navigation')
<!-- end of include navigation -->

<div class="d-flex justify-content-center pt-5 pb-5">
    <div class="form-group row w-50">
    <label for="judulKelompok" class="form-label pt-4">Masukan Kode Unik</label>
    <input type="text" class="form-control" id="judulKelompok"/>

    <a href="formgroup" type="button" class="btn btn-dark mt-2">Submit</a><br/>
    <a href="resultgroup" type="button" class="btn btn-light btn-outline-dark mt-2">Lihat Hasil</a>
    </div>
</div>

<!-- include footer -->
@include('footer')
<!-- end of include footer -->