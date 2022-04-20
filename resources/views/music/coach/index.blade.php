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
                <div class="col-lg-12">
                    <!-- Button trigger modal -->
                    <button style="float: right; color: white " type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                       Add New Student
                    </button>
                    <a style="float: right;color: white!important;margin-right: 20px; " href="{{route('coach.register')}}" class="btn btn-warning" >
                        Add New Coach
                    </a>
                    <button style="float: right;  margin-right: 20px;color: white " type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
                        Add New Sesstion
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Sesstion</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="{{route('sesstion.store')}}">
                                    @csrf
                                    <div class="modal-body">

                                        <div class="row">

                                            <div class="col-12">
                                                <input type="date" class="form-control" name="date"  >
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select form-select-lg "  name="coach_id" aria-label=".form-select-lg example">
                                                    <option >Select One Coach</option>
                                                    @foreach($coach as $row)
                                                        <option value="{{$row->id}}">{{$row->fname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select form-select-lg " name="student_id" aria-label=".form-select-lg example">
                                                    <option >Select One Student</option>
                                                    @foreach($student as $row)
                                                        <option value="{{$row->id}}">{{$row->fname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select form-select-lg " name="course" aria-label=".form-select-lg example">
                                                    <option >Select One Course</option>
                                                    <option value="Piano" >Piano </option>
                                                    <option value="Voice">Voice </option>
                                                    <option value="Guitar">Guitar </option>
                                                    <option value="Ukelele" >Ukelele </option>
                                                    <option value="Violen">Violen </option>
                                                    <option value="Music Theory">Music Theory </option>
                                                </select>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-warning">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="{{route('coach.store')}}">
                                    @csrf
                                <div class="modal-body">

                                    <div class="row">

                                        <div class="col-12">
                                            <input type="date" class="form-control" name="date"  >
                                        </div>
                                        <div class="col-12">
                                            <select class="form-select form-select-lg "  name="coach_id" aria-label=".form-select-lg example">
                                                <option >Select One Coach</option>
                                                @foreach($coach as $row)
                                                <option value="{{$row->id}}">{{$row->fname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <select class="form-select form-select-lg " name="student_id" aria-label=".form-select-lg example">
                                                <option >Select One Student</option>
                                                @foreach($student as $row)
                                                    <option value="{{$row->id}}">{{$row->fname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <select class="form-select form-select-lg " name="course" aria-label=".form-select-lg example">
                                                <option >Select One Course</option>
                                                <option value="Piano" >Piano </option>
                                                <option value="Voice">Voice </option>
                                                <option value="Guitar">Guitar </option>
                                                <option value="Ukelele" >Ukelele </option>
                                                <option value="Violen">Violen </option>
                                                <option value="Music Theory">Music Theory </option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <select class="form-select form-select-lg " name="paymant" aria-label=".form-select-lg example">
                                                <option >Select  Paymant Method</option>
                                                <option value="Settled" >Settled </option>
                                                <option value="No Paymant">No Paymant </option>

                                            </select>
                                        </div>

                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-warning">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{--                    <img src="{{asset('front/images/6.png')}}" style="width: 100%" alt="">--}}
                </div>
            </div>
            <br>
            <div class="row">
                @foreach($coach as $key =>$row)
                <div class="col-lg-12">
                    <div class="tab">
                        @if($key+1==1)

                        <button class="tablinks" onclick="openCity(event, '{{$row->fname}}')" id="defaultOpen">{{$row->fname}}</button>
                        @else
                        <button class="tablinks" onclick="openCity(event, '{{$row->fname}}')">{{$row->fname}}</button>
                        @endif

                    </div>
                    @if($key+1==1)

                        <div id="{{$row->fname}}" class="tabcontent">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>

                                        <th>Piano</th>
                                        <th>Voice</th>
                                        <th>Guitar</th>
                                        <th>Ukelele</th>
                                        <th>Voilen</th>
                                        <th>Music Theory</th>



                                    </tr>

                                        <tr>

                                            <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Piano'])}}">View</a></td>
                                            <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Voice'])}}">View</a></td>
                                            <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Guitar'])}}">View</a></td>
                                            <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Ukelele'])}}">View</a></td>
                                            <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Voilen'])}}">View</a></td>
                                            <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Music Theory'])}}">View</a></td>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else

                        <div id="{{$row->fname}}" class="tabcontent">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>

                                        <th>Piano</th>
                                        <th>Voice</th>
                                        <th>Guitar</th>
                                        <th>Ukelele</th>
                                        <th>Voilen</th>
                                        <th>Music Theory</th>



                                    </tr>

                                    <tr>

                                        <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Piano'])}}">View</a></td>
                                        <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Voice'])}}">View</a></td>
                                        <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Guitar'])}}">View</a></td>
                                        <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Ukelele'])}}">View</a></td>
                                        <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Voilen'])}}">View</a></td>
                                        <td><a href="{{route('coaches.detials',['id'=>$row->id,'c'=>'Music Theory'])}}">View</a></td>


                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
