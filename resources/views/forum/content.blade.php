@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    @forelse($pertanyaan as $key=> $pertanyaan)
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">{{ $pertanyaan->nama_user}}</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">{{$pertanyaan->updated_at}}</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                      {{$pertanyaan->isi}}
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                      </p>
<form action="/jawaban" method="POST" enctype="media type"> 
                @csrf
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Type answer..">
                          <div class="input-group-append">
                            <button type="submit" name="isi" id="isi" value="{{old('isi','')}}" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                      @empty
                   <tr>
                    <td colspan="4" align="center"> No Post</td>
                   </tr>
                    @endforelse
                  </div>
                </div>
                <!-- /.tab-content -->
              </div>
</div>

@endsection