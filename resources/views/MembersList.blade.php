<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member List</title>

    {{-- header with necessary styles --}}
    @include('components.header')


</head>

<body>


    <div class="main-content">

        <section class="section">

            <div class="row">
                <div class="col-12">

                    <!-- New Card -->

                    <div class="card">
                        <div class="card-header">
                            <h4>Members List</h4>
                            <div class="card-header-action">
                                <a href="/add-member" class="btn btn-success btn-lg">
                                    Add New Member
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table" id="table-55">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Admin Status</th>                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($data as $d)
                                            <tr>
                                                <td class="align-middle">{{ $d->id }}</td>
                                                <td class="align-middle">{{ $d->name }}</td>
                                                <td class="align-middle">{{ $d->email }}</td>
                                                <td class="align-middle">{{ $d->address }}</td>
                                                @if($d->is_admin == 'true')
                                                <td class="align-middle">True</td>
                                                @else
                                                <td class="align-middle">False</td>
                                                @endif




                                                
                                        @endforeach
                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>

                    <!-- New Card End -->




                </div>

        </section>
    </div>

    {{-- Footer with necessary scripts --}}
    @include('components.footer')

    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>

    {{-- Sweet Alert --}}
    <script>
        $(".cnf").click(function(e) {




            e.preventDefault();
            swal({
                    title: 'Are you sure?',
                    text: 'Once deleted, you will not be able to recover this record!',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                    closeOnConfirm: true

                })
                .then((isConfirm) => {
                    if (isConfirm) {
                        window.location = $(this).attr('href');

                    }
                });



        });
    </script>



</body>

</html>
