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
                <h3 class="card-title">FOOTER</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/admin/Footer/create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TEXT</label>
                    <input type="text" class="form-control" id="text" name="text" placeholder="ข้อความ">

                    @error('text')
                        <span class="text-danger">  {{$message}}</span>
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
        <th scope="col">TEXT</th>
        <th scope="col">IMAGE</th>
        <th scope="col">CREATED_AT</th>
        <th scope="col">UPDATE_AT</th>
        <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($footer as $i)
    <tr>
        <td>{{$i->id_footer}}</td>
        <td>{{$i->text}}</td>
        <td><img src="{{asset('admin/img/'.$i->image)}}" alt="" style="width: 150px"></td>
        <td>{{$i->created_at}}</td>
        <td>{{$i->updated_at}}</td>
        <td>
        <a href="{{url('/admin/Footer/edit/'.$i->id_footer)}}" class="btn btn-success">Edit</a>
        <a href="{{url('/Admin/Footer/delete/'.$i->id_footer)}}" class="btn btn-danger">Delete</a>
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
