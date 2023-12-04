@extends('Dash.Master')

@section('Title')
    Dashbored
@endsection

@section('content')
{{-- <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css') }}"> --}}

    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
<body>


    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <table class="table" id="myTable" class="display" style="width:100%">

                    <thead>
                        <tr>
                            <th style="color: rgb(9, 9, 66);">id</th>
                            <th style="color: rgb(9, 9, 66);">User Email</th>
                            <th style="color: rgb(9, 9, 66);">payments amount</th>
                            <th style="color: rgb(9, 9, 66);">payments status</th>
                            <th style="color: rgb(9, 9, 66);">payments provider</th>
                            <th style="color: rgb(9, 9, 66);">shipments country</th>
                            <th style="color: rgb(9, 9, 66);">shipments Phone</th>
                            <th style="color: rgb(9, 9, 66);">shipments state</th>
                            <th style="color: rgb(9, 9, 66);">shipments postalCode</th>
                            <th style="color: rgb(9, 9, 66);">products name</th>
                            <th style="color: rgb(9, 9, 66);">products SKU</th>
                            <th style="color: rgb(9, 9, 66);">products price</th>
                            <th style="color: rgb(9, 9, 66);">products quantity</th>
   
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id ? $user->id : 'NULL' }}</td>
                                <td>{{ $user->email ? $user->email : 'NULL' }}</td>
                                <td>${{ $user->amount ? $user->amount : 'NULL' }}</td>
                                <td>{{ $user->status ? $user->status : 'NULL' }}</td>
                                <td>{{ $user->provider ? $user->provider : 'NULL' }}</td>
                                <td>{{ $user->country ? $user->country : 'NULL' }}</td>
                                <td>{{ $user->phone ? $user->phone : 'NULL' }}</td>
                                <td>{{ $user->state ? $user->state : 'NULL' }}</td>
                                <td>{{ $user->postalCode ? $user->postalCode : 'NULL' }}</td>
                                <td>{{ $user->SKU ? $user->name : 'NULL' }}</td>
                                <td>{{ $user->SKU ? $user->SKU : 'NULL' }}</td>
                                <td>{{ $user->price ? $user->price : 'NULL' }}</td>
                                <td>{{ $user->quantity ? $user->quantity : 'NULL' }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            let table = $('#myTable').DataTable({});
        });
    </script> --}}
{{-- <script
  src="{{ asset('https://code.jquery.com/jquery-3.6.4.min.js') }}"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
    <script  src="{{ asset('//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js') }}"></script> --}}
    {{-- <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script> --}}
    {{-- <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script> --}}

    {{-- <script>
        $(document).ready( function() {
            $('#myTable').DataTable();
        });
    </script> --}}
@endsection
