<!-- include header -->
@include('header')
<!-- end of include header -->

<!-- include navigation -->
@include('navigation')
<!-- end of include navigation -->

<div class="d-flex justify-content-center pt-5 pb-5 mb-5 mt-5">
    <div class="form-group row w-50">
        <form action="{{url('resultgroup')}}" method="POST">
            @csrf
            <label for="judulKelompok" class="form-label pt-4">Masukan Kode Unik</label>
            <input type="text" class="form-control" name="kode"/>

            <button type="submit" class="btn btn-dark mt-2">Submit</button><br/>
        </form>
    </div>
</div>

<!-- include footer -->
@include('footer')
<!-- end of include footer -->