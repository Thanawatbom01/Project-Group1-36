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
                        <h3 class="card-title">Edit User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/admin/User/update/'.$edit_users->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$edit_users->name}}">
                            <div class="row mt-3">
                                @error('name')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email ">email </label>
                            <input type="text" name="email" class="form-control" id="email " value="{{$edit_users->email }}">
                            <div class="row mt-3">
                                @error('email')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address ">address </label>
                            <input type="text" name="address" class="form-control" id="address " value="{{$edit_users->address }}">
                            <div class="row mt-3">
                                @error('address')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone ">phone </label>
                            <input type="text" name="phone" class="form-control" id="phone " value="{{$edit_users->phone }}">
                            <div class="row mt-3">
                                @error('phone')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
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

    </section>
    @include('layouts.admin.footer')
    </section>
    <!--main content end-->
    </section>



</body>

</html>
