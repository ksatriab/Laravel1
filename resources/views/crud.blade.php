@extends('base')
@section('content')

    
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1> Edit user</h1>
            <hr>
            <div>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr><br>
                            <th><center>Nama</th>
                            <th><center>email</th>
                            <th><center>Opsi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr> 
                                <td align="center"> <!--Nama-->
                                    {{ $user->name }}
                                </td>
                                <td align="center">
                                    {{ $user->email}}
                                </td>
                                
                                <td align="center">
                                    <button type="button" class="btn btn-success btn-sm">
                                        <span class="glyphicon glyphicon-edit">
                                        </span>
                                    Ubah</button>
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-remove-sign">
                                    Hapus</span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection