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
                <h3 class="card-title">ROOM</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/admin/Room/create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="room_member">ROOM_MEMBER</label>
                    <input type="text" name="room_member" class="form-control"  id="room_member" placeholder="room_member">
                  </div>
                  <div class="row mt-3">
                   @error('room_member')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="name">NAME</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                  </div>
                  <div class="row mt-3">
                    @error('name')
                    <span class="text-danger">  {{$message}}</span>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">FILE INPUT</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class=  "custom-file-label" for="exampleInputFile">Choose file</label>
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
      <th scope="col">NAME</th>
      <th scope="col">ROOM_MEMBER</th>
      <th scope="col">IMAGE</th>
      <th scope="col">USER</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($room as $i)
    <tr>
      <td>{{$i->id_room}}</td>
      <td>{{$i->name}}</td>
      <td>{{$i->room_member}}</td>
      <td><img src="{{asset('admin/img/'.$i->image)}}" alt="" style="width: 150px"></td>
      <td>{{$i->admin->name}}</td>
      <td>
        <a href="{{url('/admin/Room/edit/' .$i->id_room)}}" class="btn btn-success">Edit</a>
        <a href="{{url('/Admin/Room/delete/'.$i->id_room)}}" class="btn btn-danger">Delete</a>
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
