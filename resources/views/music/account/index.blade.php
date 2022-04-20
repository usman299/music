@extends('layouts.front')
<style>
    a{
        color: blue!important;

    }
    .tab button.active {
        background-color: #ffc107!important;
    }
</style>
@section('content')
    <section class="cartPage" >
        <div class="container" style="margin-top: 50px">
            <div class="row">

            </div>
            <br>
            <div class="row">

                    <div class="col-lg-12">
                        <div class="tab">


                                <button class="tablinks" onclick="openCity(event, 'request')" id="defaultOpen">New Request</button>

                                <button class="tablinks" onclick="openCity(event, 'renew')">Renewal</button>


                        </div>


                            <div id="request" class="tabcontent">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                        <tr style="background-color:#ffc107!important;">

                                            <th>Request No</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Address</th>
                                            <th>Birth date</th>
                                            <th>Contact#</th>
                                            <th>E-mail</th>
                                            <th>Course</th>


                                        </tr>
                                        @foreach($request as $key1=> $row1)

                                                <tr>

                                                    <td>R1-00{{$key1+1}}</td>
                                                    <td>{{$row1->fname}}</td>
                                                    <td>{{$row1->created_at}}</td>
                                                    <td>{{$row1->address}}</td>
                                                    <td>{{$row1->dob}}</td>
                                                    <td>{{$row1->phone}}</td>
                                                    <td>{{$row1->email}}</td>
                                                    <td>{{$row1->course}}</td>


                                                </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <div id="renew" class="tabcontent">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr style="background-color:#ffc107!important;">

                                        <th>Request No</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Course</th>
                                        <th>Package</th>
                                        <th>Duration</th>


                                    </tr>
                                    @foreach($renew as $key1=> $row1)

                                        <tr>

                                            <td>R1-00{{$key1+1}}</td>
                                            <td>{{$row1->fname}}</td>
                                            <td>{{$row1->created_at}}</td>
                                            <td>{{$row1->course}}</td>
                                            <td>{{$row1->package}}</td>
                                            <td>{{$row1->duration}}</td>


                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>



                    </div>

            </div>
        </div>
    </section>
@endsection
