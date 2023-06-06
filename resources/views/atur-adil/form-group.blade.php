<!-- include header -->
@include('header')
<!-- end of include header -->

<!-- include navigation -->
@include('navigation')
<!-- end of include navigation -->

<div class="container">
    <h1 class="fw-bold pt-5 pb-3">isi Pertanyaan Berikut dengan JUJUR</h1>
    <form action="{{url('join-atur-adil')}}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <label for="nama" class="form-label pt-4">Nama</label>
                <input type="text" class="form-control" name="nama"/>

                <label for="nilaiUts" class="form-label pt-4">Nilai UTS</label>
                <input type="text" class="form-control" name="nilaiUts"/>

                <label for="nilaiTugas" class="form-label pt-4">Nilai Tugas</label>
                <input type="text" class="form-control" name="nilaiTugas"/>

                <label for="nilaiTugas" class="form-label pt-4">Kode Pembagian Kelompok</label>
                <input type="text" class="form-control" name="kode"/>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <button type="submit" class="btn btn-dark mt-2 mb-5 col-auto">Periksa Hasil</button>
            </div>
        </div>
    </form>
</div>

<!-- include footer -->
@include('footer')
<!-- end of include footer -->