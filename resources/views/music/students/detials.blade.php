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
                <h2 style="margin-left: 420px;">We know that you are in the {{$c}} page</h2>
                <button style="margin-left: 970px; color: white " type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
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
                                        <input type="hidden" name="coach_id" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="course" value="{{$c}}">
                                       <br> <div class="col-12">
                                            <select class="form-select form-select-lg " name="student_id" aria-label=".form-select-lg example">
                                                <option >Select One Student</option>
                                                @foreach($students as $row)
                                                    <option value="{{$row->id}}">{{$row->fname}}</option>
                                                @endforeach
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

            </div>
            <br>
            <div class="row">
                @foreach($users as $key =>$row)
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
                                        <tr style="background-color:#ffc107!important;">
<?php $user = \Illuminate\Support\Facades\Auth::user(); ?>
                                            <th>Sesstion No</th>
                                            @if($user->role==3)
                                            <th>Coach</th>
                                            @endif
                                            <th>Date</th>
                                          @if($user->role==3)
                                            <th>Paymant</th>
                                          @endif


                                        </tr>
                                        @foreach($sesstion as $key1=> $row1)

                                            @if($row->id == $row1->student_id)
                                                <tr>

                                                    <th>P1-00{{$key1+1}}</th>
                                                    <?php $userss = \App\User::where('id','=',$row1->coach_id)->first();?>
                                                    @if($user->role==3)
                                                    <th>{{$userss->fname}}</th>
                                                    @endif
                                                    <th>{{$row1->date}}</th>
                                                    @if($user->role==3)
                                                    <th style="color: green">Settled</th>
                                                    @endif



                                                </tr>
                                            @endif

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @else

                            <div id="{{$row->fname}}" class="tabcontent">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                        <tr style="background-color:#ffc107!important;">
                                            <?php $user = \Illuminate\Support\Facades\Auth::user(); ?>
                                            <th>Sesstion No</th>
                                            @if($user->role==3)
                                                <th>Coach</th>
                                            @endif
                                            <th>Date</th>
                                            @if($user->role==3)
                                                <th>Paymant</th>
                                            @endif


                                        </tr>
                                        @foreach($sesstion as $key1=> $row1)

                                            @if($row->id == $row1->student_id)
                                                <tr>

                                                    <th>P1-00{{$key1+1}}</th>
                                                    <?php $userss = \App\User::where('id','=',$row1->coach_id)->first();?>
                                                    @if($user->role==3)
                                                        <th>{{$userss->fname}}</th>
                                                    @endif
                                                    <th>{{$row1->date}}</th>
                                                    @if($user->role==3)
                                                        <th style="color: green">Settled</th>
                                                    @endif



                                                </tr>
                                            @endif

                                        @endforeach

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
