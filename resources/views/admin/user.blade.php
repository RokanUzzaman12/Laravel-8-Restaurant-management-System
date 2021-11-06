<x-app-layout>


    @include("admin.include.header")
    <div class="container-scroller">

    @include("admin.include.navigation")

     <div class="container">
     <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                All User

                @if(Session::has('user_delete'))

                    <div class="alert alert-success">
                        {{Session::get('user_delete')}}
                    </div>

                @endif
            </div>
            <div class="card-body">
            <table id="user_table" class="table table-borderd">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>

                    </tr>
                </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->name}} </td>
                <td>{{$data->email}}</td>
                @if($data->usertype==0)
                <td> <a href="{{url('/deleteuser',$data->id)}}"  rel="noopener noreferrer">delete</a> </td>
                @else
                <td>Not allowed</td>
                @endif
            </tr>
            @endforeach
        </tbody>

        </table>

        <script>
            $(document).ready(function() {
                $('#user_table').DataTable();
            } );
        </script>

    </div>
            </div>
        </div>

    <div class="col-md-2"></div>
</div>
     </div>

    </div>
    @include("admin.include.footer")
    </x-app-layout> 