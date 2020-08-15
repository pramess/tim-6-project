@extends('layouts.app')
@section('content')
  <div class="ml-3 mt-3">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ask a Question!</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/pertanyaan">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="nama_user" id="nama_user" value="{{ Auth::user()->name }}">
                    <label for="judul">judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value=" {{old('judul','')}} " placeholder="Type a judul">
                    @error('judul')
              <div class="alert alert-danger">Mohon diisi</div>
          @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value=" {{old('isi','')}} " placeholder="Type a question">
                    @error('isi')
              <div class="alert alert-danger">Mohon diisi</div>
          @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>
@endsection
@push('script')
<!-- bs-custom-file-input -->
<script src="{{asset ('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('adminlte/dist/js/adminlte.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>