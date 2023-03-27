<x-admin-layout>
    @section('title','Director')
    @section('content')
    <div class="content">
       <x-page-bradecum></x-page-bradecum>
       <div class="container-fluid">
          <div class="row">
             <!-- /.col-md-6 -->
             <div class="row col-lg-12">
                <div class="col-sm-2">
                    @include('admin.layouts.left-menu')
                </div>
                <div class="col-sm-10">
                    <div class="card card-primary">
                        <div class="card-header">
                         <div class="d-flex justify-content-between align-content-center">
                            <h3 class="card-title pt-2">BOARD OF ADVISER</h3>
                            <a href="{{ route('director.create') }}" class="btn btn-outline-success">Back</a>

                         </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->



                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12 px-4 py-4">
                                <form action="{{ route('director.update', $director->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                  <div class="row justify-content-between gap-4">
                                      <div class="col-sm-9">
                                          <div class="card bg-light" >
                                              <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Name:</label>
                                                    <input type="text" class="form-control" id="email" placeholder="Enter Name..." name="name" value="{{ $director->name }}">
                                                  </div>
                                                  <div class="mb-3 mt-2">
                                                    <label for="email" class="form-label">Desination:</label>
                                                    <input type="text" class="form-control" id="email" placeholder="Enter Desination..." name="desination" value="{{ $director->desination }}">
                                                  </div>

                                                  <div class="mb-3 mt-3">
                                                    <label for="work_station" class="form-label">Work Station:</label>
                                                    <input type="text" class="form-control" value="{{ $director->work }}" id="work_station" placeholder="Enter Work Station..." name="work_station">
                                                  </div>

                                                  <label for="work_station" class="form-label">Picture:</label>
                                                  <div class="custom-file mt-1 mb-1">
                                                    <input type="file"  name="img_upload" class="custom-file-input" id="file-input">
                                                    <label class="custom-file-label" for="file-input">Choose file</label>
                                                  </div>
                                                    <button type="submit" class="btn btn-primary mt-2">Update Director</button>

                                              </div>
                                            </div>

                                      </div>

                                  <div class="col-sm-3">

                                      <div class="card bg-light"  style="height:421px">
                                          <div class="card-body">
                                              <label for="" class="text-center">Picture Preview</label>
                                              <img id="preview-image" class="rounded"
                                                    src="{{ asset($director->img_upload) ? : url('https://picsum.photos/200/300') }}"
                                                    alt="User Avatar"
                                                    style="width: 100%;height:350px;border-radius:5px;">
                                          </div>
                                        </div>
                                  </div>
                                  </div>
                              </form>
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
 <script>

    const fileInput = document.getElementById("file-input");
    const previewImage = document.getElementById("preview-image");

    fileInput.addEventListener("change", function() {
    const file = this.files[0];
    const reader = new FileReader();

    reader.addEventListener("load", function() {
        previewImage.setAttribute("src", this.result);
        previewImage.style.display = "block";
    });

    reader.readAsDataURL(file);
    });


      </script>
