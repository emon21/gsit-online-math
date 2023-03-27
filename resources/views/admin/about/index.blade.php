<x-admin-layout>
    @section('title','Adviser')
    @section('content')
    <div class="content">
       <x-page-bradecum></x-page-bradecum>
       <div class="container-fluid">
          <div class="row">
             <!-- /.col-md-6 -->
             <div class=" col-lg-12">


                                @if(session('success'))
                                <x-success/>
                                @elseif(session('error'))
                                <x-error/>
                                @endif

{{-- @if($type == 'success')
    <div class="alert alert-success">{{ $message }}</div>
@elseif($type == 'error')
    <div class="alert alert-danger">{{ $message }}</div>
@endif --}}



                <div class="row">


                <div class="col-sm-2">
                    @include('admin.layouts.left-menu')
                </div>
                <div class="col-sm-10">

                   <div class="card  card-outline">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                         <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#about">About Us</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#our_slogan">Our Slogan</a>
                         </li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">

                         <div id="about" class="tab-pane active">
                           <div class="card">

                                <div class="card-body">
                                    <form action="{{ route('about.update',$about_us->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-between gap-4">
                                            <div class="col-sm-12">
                                                <div class="card bg-light" >
                                                    <div class="card-body">

                                                       <div class="form-group">
                                                        <label for="comment">About Olympiad:</label>
                                                        <textarea  id="summernote1" class="form-control" rows="5" id="comment" name="about_olympiad" value="{{ $about_us->about_olympiad_desc }}">{{ $about_us->about_olympiad_desc }}</textarea>
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="comment">About BTEA:</label>
                                                        <textarea  id="summernote2" class="form-control" rows="5" id="comment" name="about_btea" value="{{ $about_us->about_btea_desc }}">{{ $about_us->about_btea_desc }}</textarea>
                                                      </div>

                                                          <button type="submit" class="btn btn-outline-success">Update Now</button>

                                                    </div>
                                                  </div>

                                            </div>


                                        </div>
                                    </form>
                                </div>

                              </div>

                         </div>


                         <div id="our_slogan" class="tab-pane ">
                            <div class="card">

                                 <div class="card-body">
                                     <form action="{{ route('slogan.update',$ourSlogan->id) }}" method="POST" enctype="multipart/form-data">
                                         @csrf
                                         <div class="row justify-content-between gap-4">
                                             <div class="col-sm-12">
                                                 <div class="card bg-light" >
                                                     <div class="card-body">

                                                        <div class="form-group">
                                                         <label for="comment">Our Mission:</label>
                                                         <textarea  id="summernote3" class="form-control" rows="5" id="comment" name="our_mission" value="{{ $ourSlogan->our_mission }}">{{ $ourSlogan->our_mission }}</textarea>
                                                       </div>

                                                       <div class="form-group">
                                                         <label for="comment">Our Vision:</label>
                                                         <textarea  id="summernote4" class="form-control" rows="5" id="comment" name="our_vision" value="{{ $ourSlogan->our_vision }}">{{ $ourSlogan->our_vision }}</textarea>
                                                       </div>

                                                       <div class="form-group">
                                                         <label for="comment">Our Goal:</label>
                                                         <textarea  id="summernote5" class="form-control" rows="5" id="comment" name="our_goal" value="{{ $ourSlogan->our_goal }}">{{ $ourSlogan->our_goal }}</textarea>
                                                       </div>

                                                           <button type="submit" class="btn btn-outline-success">Update Now</button>

                                                     </div>
                                                   </div>

                                             </div>


                                         </div>
                                     </form>
                                 </div>

                               </div>

                          </div>





                      <!-- Tab panes -->
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

 <script>
     $(function () {
    // Summernote
    // $('#summernote1').summernote();

    $('#summernote1').summernote({
        placeholder: 'About Olympiad...',
        tabsize: 2,
        height: 350,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });


    $('#summernote2').summernote({
        placeholder: 'About BTEA...',
        tabsize: 2,
        height: 350,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    $('#summernote3').summernote({
        placeholder: 'About BTEA...',
        tabsize: 2,
        height: 350,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    $('#summernote4').summernote({
        placeholder: 'About BTEA...',
        tabsize: 2,
        height: 350,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    $('#summernote5').summernote({
        placeholder: 'About BTEA...',
        tabsize: 2,
        height: 350,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });



    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
 </script>
