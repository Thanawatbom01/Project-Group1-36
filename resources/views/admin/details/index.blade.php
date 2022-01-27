@include('layouts.admin.head')
<body>
  <!-- container section start -->
  <section id="container" class="">

  @include('layouts.admin.header')
  @include('layouts.admin.sidebar')

  <br>
  <br>
  <br>
  <div class="container">
  <div class="row mt-4">

  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">BODY</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/admin/Details/create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="text">HEAD TEXT</label>
                    <input type="text" name="headtext" class="form-control"  id="headtext" placeholder="หัวข้อ">
                  </div>
                  <div class="row mt-3">
                   @error('headtext')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="text">TEXT</label>
                    <input type="text" name="text" class="form-control" id="text" placeholder="ข้อความ">
                  </div>
                  <div class="row mt-3">
                    @error('text')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">FILE INPUT</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <div class="row mt-3">
                    @error('image')
                    <span class="text-danger">  {{$message}}</span>
                    @enderror
                  </div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
              </form>
            </div>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">HEADTEXT</th>
      <th scope="col">TEXT</th>
      <th scope="col">IMAGE</th>
      <th scope="col">CREATED_AT</th>
      <th scope="col">UPDATE_AT</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($detail as $i)
        <tr>
            <td>{{$i->id_body}}</td>
            <td>{{$i->headtext}}</td>
            <td>{{$i->text}}</td>
            <td><img src="{{asset('admin/img/'.$i->image)}}" alt="" style="width: 150px"></td>
            <td>{{$i->created_at}}</td>
            <td>{{$i->updated_at}}</td>
            <td>
            <a href="{{url('/admin/Details/edit/'.$i->id_body)}}" class="btn btn-success">Edit</a>
            <a href="{{url('/Admin/Details/delete/'.$i->id_body)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
      @endforeach
  </tbody>
</table>
  </div>
</div>

      </section>
      @include('layouts.admin.footer')
    </section>
    <!--main content end-->
  </section>



</body>

</html>
