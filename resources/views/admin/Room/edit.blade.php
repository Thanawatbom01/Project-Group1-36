@include('layouts.admin.head')
<body>
  <!-- container section start -->
  <section id="container" class="">

  @include('layouts.admin.header')
  @include('layouts.admin.sidebar')


  <div class="container">
  <div class="row mt-4">

  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Room</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/admin/Room/update/'.$editroom->id_room)}}" method="post" enctype="multipart/form-data">
                @csrf
                   <div class="form-group">
                    <label for="room_member">room_member</label>
                    <input type="text" name="room_member" class="form-control" id="room_member"  value ="{{$editroom->room_member}}">
                  </div>
                  <div class="row mt-3">
                    @error('id_room')
                    <span class="text-danger">  {{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control" id="name" value ="{{$editroom->name}}">
                  </div>
                  <div class="row mt-3">
                    @error('name')
                    <span class="text-danger">  {{$message}}</span>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                        <div class="row mt-3">
                          <img id="showImage" src="{{asset('admin/img/'.$editroom->image)}}" alt="" style="width: 150px;">
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
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
      $('#image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });
</script>

      </section>
      @include('layouts.admin.footer')
    </section>
    <!--main content end-->
  </section>



</body>

</html>
