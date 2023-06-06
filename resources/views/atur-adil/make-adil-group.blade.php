<!-- include header -->
@include('header')
<!-- end of include header -->

<!-- include navigation -->
@include('navigation')
<!-- end of include navigation -->

<div class="container my-5">
    <form action="{{url('store-atur-adil')}}" method="POST" class="make-group border border-warning p-5 mb-2 border-opacity-50">
        @csrf
        <label for="judulKelompok" class="form-label pt-4">
            <h3 class="fw-bold">Judul/Topik Pembuatan Kelompok</h3>
        </label>
        <input type="text" class="form-control" name="judulKelompok" placeholder="contoh: kelompok matemetika IPA 2"/>
        <div class="row mb-3">
            <div class="col">
                <label for="jumlahKelompok" class="form-label pt-4"><h4 class="fw-bold">Jumlah Kelompok</h4></label>
                <input type="number" class="form-control" name="jumlahKelompok"/>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-warning fw-bold">Periksa Hasil</button>
        </div>
    </form>
</div>

<!-- include footer -->
@include('footer')
<!-- end of include footer -->