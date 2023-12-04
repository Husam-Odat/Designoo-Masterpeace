@extends('Dash.Master')

@section('Title')
    User
@endsection

@section('content')
    <div class="container-xl">

        <div class="table-responsive">

            <div class="table-wrapper">
                <script>
                    @if (session('deleted'))
                        Swal.fire("Message", "{{ session('deleted') }}", 'success', {
                            showConfirmButton: true,
                            confirmButtonText: "OK",
                        });
                    @endif
                </script>


                @if (Session::has('success'))
                    <script>
                        Swal.fire("Message", "{{ Session::get('success') }}", 'success', {
                            showConfirmButton: true,
                            confirmButtonText: "OK",
                        });
                    </script>
                @endif
                @if (session('cancel'))
                    <script>
                        // Display a SweetAlert message
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: '{{ session('cancel') }}',
                        });
                    </script>
                @endif
                <div class="d-flex justify-content-end ">
                    <a href="{{ route('user.create') }}" class="btn py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block form-submit"
                        style="border-radius: 10px; width: 120px; color: rgb(10, 10, 105);">Add<i
                            class="fa fa-plus  ms-2"></i></a>
                </div>
                <table class="table" id="myTable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="color: rgb(9, 9, 66);">Id</th>
                            <th style="color: rgb(9, 9, 66);">Name</th>
                            <th style="color: rgb(9, 9, 66);">Email</th>
                            <th style="color: rgb(9, 9, 66);">Role</th>
                            <th style="color: rgb(9, 9, 66);">Action</th>
                            {{-- <th style="color: rgb(9, 9, 66);">&nbsp;</th> --}}
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($user as $item)
                            <tr>

                                {{-- <td>{{$item->id}}</td> --}}
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>

                                <td>
                                    <div style="display: grid; grid-template-columns: auto auto;">
                          <button class="btn me-2 update-btn" ><a href="{{ route('user.edit',$item->id) }}" class="settings" title="Settings" data-toggle="tooltip" ><i class="fa fa-edit " style="color: rgb(9, 9, 77);  font-size: 18px"></i></a> </button>
                                    <form id="delete-form-{{ $item->id }}" method="POST"
                                        action="{{ route('user.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-button"
                                            data-delete-id="{{ $item->id }}">
                                            <i class="fa fa-trash text-white" style="font-size: 17px"></i>
                                        </button>
                                    </form>

                                </td>



                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
