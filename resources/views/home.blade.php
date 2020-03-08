@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- anil code -->
                   <table class="table">
                       <tr>
                           <th>Name</th>
                           <th>Address</th>
                       </tr>
                       <tr>
                           <td>Anil Khatiwada</td>
                           <td>Dillibazar</td>
                       </tr>
                       <tr>
                           <td>Sijan Gimire</td>
                           <td>Maitidevi</td>
                       </tr>
                   </table>
                  
                    <!-- anil code end -->
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

