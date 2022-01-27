@include('layouts.admin.head')

<body>

    <div class="padding-left" style="2"
  
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
                        <h3 class="card-title">USER</h3>
                    </div>
                        
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $User)
                            <tr>
                                <td>{{$User->id}}</td>
                                <td>{{$User->name}}</td>
                                <td>{{$User->email}}</td>
                                <td>{{$User->address}}</td>
                                <td>{{$User->phone}}</td>
                                <td>
                                    <a href="{{url('/admin/User/edit/'.$User->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{Url('/Admin/User/delete/'.$User->id)}}" class="btn btn-danger">Delete</a>
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


    </div>
</body>

</html>
