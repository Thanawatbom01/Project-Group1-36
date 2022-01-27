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
                <h3 class="card-title">Edit Header</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/admin/Headers/update/'.$editheader->id_header)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ข้อความ</label>
                      <input type="text" class="form-control" id="text" name="text" value="{{$editheader->text}}">

                      @error('text')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                            <div class="row mt-3">
                              <img id="showImage" src="{{asset('admin/img/'.$editheader->image)}}" alt="" style="width: 150px;">
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
