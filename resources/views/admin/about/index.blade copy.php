<x-admin-layout>
    @section('title','About')
    @section('content')
    <div class="content">
        <x-page-bradecum></x-page-bradecum>
        <div class="container-fluid">
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">About List</h5>
                </div>
                <div class="card-body">
                  <div class="bg-green-500 w-full rounded">

                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Sl No</th>
                          <th>About Olympiad</th>
                          <th>about Olympiad Desc</th>
                          <th>About Btea</th>
                          <th>About Btea Desc</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($about_us as $about)
                        <tr>
                          <td>{{$loop->index +1}}</td>
                          <td>{{ $about->about_olympiad }}</td>
                          <td>{{ substr($about->about_olympiad_desc,0,100) }}</td>
                          <td>{{ $about->about_btea }}</td>
                          <td>{{ substr($about->about_btea_desc,0,
                          98) }}</td>
                        </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl No</th>
                                <th>About Olympiad</th>
                                <th>about Olympiad Desc</th>
                                <th>About Btea</th>
                                <th>About Btea Desc</th>
                              </tr>
                        </tfoot>
                      </table>
                </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    @endsection

</x-admin-layout>


