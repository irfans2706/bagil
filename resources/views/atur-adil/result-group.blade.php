<!-- include header -->
@include('header')
<!-- end of include header -->

<!-- include navigation -->
@include('navigation')
<!-- end of include navigation -->

<div class="container-sm my-5 result">
    <h1 class="fw-bold">Hasil Pembagian Kelompok</h1>
    @if($aturacak == false)
        <div class="mt-5 result-info">
            <div class="row">
                <div class="col">Total yang telah mengisi</div>
                <div class="col">: {{count($members)}}</div>
            </div>
            <div class="row">
                <div class="col">Kode</div>
                <div class="col">: {{$kelompok->kode}}</div>
            </div>
            <div class="row">
                <div class="col">Jumlah Kelompok</div>
                <div class="col">: {{$kelompok->jumlah}}</div>
            </div>
        </div>
    @endif
    <div class="d-flex justify-content-evenly flex-wrap mt-3">
        @foreach($groups as $key => $value)
            <div class="card mt-3">
                <div class="card-header">Kelompok {{$key+1}}</div>
                <ul class="list-group list-group-flush">
                    @foreach($value as $item)
                        <li class="list-group-item">{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>

<!-- include footer -->
@include('footer')
<!-- end of include footer -->