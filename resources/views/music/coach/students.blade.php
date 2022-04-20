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
                @foreach($student as $key =>$row)
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

                                            <th>Sesstion No</th>
                                            <th>Date</th>


                                        </tr>
@foreach($sesstion as $key1=> $row1)
    @if($row->id == $row1->student_id)
                                        <tr>

                                            <th>P1-00{{$key1+1}}</th>
                                            <th>{{$row1->date}}</th>


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

                                            <th>Sesstion No</th>
                                            <th>Date</th>


                                        </tr>
                                        @foreach($sesstion as $key1=> $row1)
                                            @if($row->id == $row1->student_id)
                                                <tr>

                                                    <th>P1-00{{$key1+1}}</th>
                                                    <th>{{$row1->date}}</th>


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
