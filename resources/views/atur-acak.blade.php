<!-- include header -->
@include('header')
<!-- end of include header -->

<!-- include navigation -->
@include('navigation')
<!-- end of include navigation -->

<div class="container p-5">
    <form class="row mb-3 mt-5" action="{{url('store-atur-acak')}}" method="POST">
        @csrf
        <div class="col-sm-6 col-12">
            <label class="form-label pt-4">Masukan Nama</label>
            <div class="form-floating d-flex align-items-center justify-content-end">
            <textarea class="form-control" placeholder="Leave a comment here" name="member"></textarea>
            <label for="floatingTextarea">pisahkan nama dengan enter</label>
            </div>
        </div>
        <div class="col-sm-6 col-12">
            <label for="jumlahKelompok" class="form-label pt-4">Masukan Jumlah Kelompok</label>
            <input type="number" class="form-control" name="jumlahKelompok"/>
            <button type="submit" class="btn btn-dark mt-2">Atur Kelompok Sekarang</button>
        </div>
    </form>
</div>

<!-- include footer -->
@include('footer')
<!-- end of include footer -->