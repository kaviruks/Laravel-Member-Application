<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('components.header')

    {{-- header with necessary styles --}}
    <title>Document</title>
</head>

<body>


    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add New Member</h1>
            </div>

            <div class="section-body">



                <div class="row">
                    <div class="col">
                        <div class="card">
                            <form id="form-sup" method="post" action="/add-member-data">
                                {{ csrf_field() }}
                                <div class="card-header">
                                    <h4>Member Form</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Email</label>
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Address</label>
                                            <input type="text" name="address" id="address" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Are you an admin?</label>
                                            <select name="admin" id="admin"  class="form-control">
                                                <option value="0">Not an Admin</option>
                                                <option value="1">Admin</option>
                                            </select>
                                        </div>


                                    </div>
                                </div>
                                <div class="card-footer text-center">


                                    <input id="save" type="submit" class="btn btn-success btn-lg mr-2"
                                        value="Save">

                                    <input id="reset" type="reset" class="btn btn-danger btn-lg mr-2"
                                        value="Reset">


                                </div>
                            </form>
                        </div>



                    </div>

                </div>
            </div>
        </section>
    </div>

    {{-- footer with necessary styles --}}
    @include('components.footer')
</body>

</html>
