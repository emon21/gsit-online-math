<x-admin-layout>
    @section('title','Adviser')
    @section('content')
    <div class="content">
       <x-page-bradecum></x-page-bradecum>
       <div class="container-fluid">
          <div class="row">
             <!-- /.col-md-6 -->
             <div class="col-lg-12">
                @if(session('success'))
                <x-success/>
                @elseif(session('error'))
                <x-error/>
                @endif
                <div class="row">
                   <div class="col-sm-2">
                      @include('admin.layouts.left-menu')
                   </div>
                   <div class="col-sm-10">
                      <div class="card  card-outline">
                         <div class="card-header bg-light">
                            <div class="d-flex justify-content-between align-content-center">
                               <h3 class="card-title pt-2">BOARD OF DIRECTOR</h3>
                               <a href="{{ route('director.create') }}" class="btn btn-outline-success">New Data</a>
                            </div>
                         </div>

                         <div class="d-flex flex-wrap">
                            @forelse ($board_of_director as $director)
                            <!--card item start -->
                            <div class="col-md-3 mt-2">
                                <div class="card">
                                <img class="card-img-top" src="{{ asset($director->img_upload) }}" alt="Card image" style="height: 350px">
                                <div class="card-body">
                                    <h2 class="card-text">{{$director->name}}</h2>
                                    <h4 class="card-title">{{$director->desination}}</h4>
                                   <p class="card-text"><strong>{{$director->work}}</strong>, {{$director->work}}</p>
                                   <div class="d-flex justify-content-between">
                                      <a href="{{ route('director.edit',$director->id) }}" class="btn btn-primary">Edit</a>
                                      <form action="{{ route('director.destroy',$director->id) }}" method="POST">
                                          @method('DELETE')
                                          @csrf
                                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete this Item...?')">Delete</button>
                                      </form>

                                   </div>
                                </div>
                                </div>
                            </div>
                            <!--card item end -->
                            @empty
                            <p>No data found</p>
                            @endforelse
                        </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- /.col-md-6 -->
       </div>
       <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    @endsection
 </x-admin-layout>
