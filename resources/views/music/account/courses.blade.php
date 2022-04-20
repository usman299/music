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


                        <button class="tablinks" onclick="openCity(event, 'piano')" id="defaultOpen">Piano</button>
                        <button class="tablinks" onclick="openCity(event, 'voice')">Voice</button>
                        <button class="tablinks" onclick="openCity(event, 'guitar')" >Guitar</button>
                        <button class="tablinks" onclick="openCity(event, 'ukelele')">Ukelele</button>
                        <button class="tablinks" onclick="openCity(event, 'violen')" >Violen</button>
                        <button class="tablinks" onclick="openCity(event, 'music')">Music Theory</button>


                    </div>


                    <div id="piano" class="tabcontent">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr style="background-color:#ffc107!important;">

                                    <th>Sesstion No</th>
                                    <th>Coach</th>
                                    <th>Date</th>



                                </tr>
                                @foreach($sesstion as $key1=> $row1)
                           @if($row1->course=='Piano')
                                    <tr>

                                        <td>P1-00{{$key1+1}}</td>
                                        <?php $user = \App\User::where('id','=',$row1->coach_id)->first();?>
                                        <td>{{$user->fname}}</td>
                                        <td>{{$row1->date}}</td>

                                    </tr>
                           @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="voice" class="tabcontent">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr style="background-color:#ffc107!important;">

                                    <th>Sesstion No</th>
                                    <th>Coach</th>
                                    <th>Date</th>



                                </tr>
                                @foreach($sesstion as $key1=> $row1)
                                    @if($row1->course=='Voice')
                                        <tr>

                                            <td>P1-00{{$key1+1}}</td>
                                            <?php $user = \App\User::where('id','=',$row1->coach_id)->first();?>
                                            <td>{{$user->fname}}</td>
                                            <td>{{$row1->date}}</td>

                                        </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="guitar" class="tabcontent">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr style="background-color:#ffc107!important;">

                                    <th>Sesstion No</th>
                                    <th>Coach</th>
                                    <th>Date</th>



                                </tr>
                                @foreach($sesstion as $key1=> $row1)
                                    @if($row1->course=='Guitar')
                                        <tr>

                                            <td>P1-00{{$key1+1}}</td>
                                            <?php $user = \App\User::where('id','=',$row1->coach_id)->first();?>
                                            <td>{{$user->fname}}</td>
                                            <td>{{$row1->date}}</td>

                                        </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="ukelele" class="tabcontent">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr style="background-color:#ffc107!important;">

                                    <th>Sesstion No</th>
                                    <th>Coach</th>
                                    <th>Date</th>



                                </tr>
                                @foreach($sesstion as $key1=> $row1)
                                    @if($row1->course=='Ukelele')
                                        <tr>

                                            <td>P1-00{{$key1+1}}</td>
                                            <?php $user = \App\User::where('id','=',$row1->coach_id)->first();?>
                                            <td>{{$user->fname}}</td>
                                            <td>{{$row1->date}}</td>

                                        </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="violen" class="tabcontent">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr style="background-color:#ffc107!important;">

                                    <th>Sesstion No</th>
                                    <th>Coach</th>
                                    <th>Date</th>



                                </tr>
                                @foreach($sesstion as $key1=> $row1)
                                    @if($row1->course=='Violen')
                                        <tr>

                                            <td>P1-00{{$key1+1}}</td>
                                            <?php $user = \App\User::where('id','=',$row1->coach_id)->first();?>
                                            <td>{{$user->fname}}</td>
                                            <td>{{$row1->date}}</td>

                                        </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="music" class="tabcontent">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr style="background-color:#ffc107!important;">

                                    <th>Sesstion No</th>
                                    <th>Coach</th>
                                    <th>Date</th>



                                </tr>
                                @foreach($sesstion as $key1=> $row1)
                                    @if($row1->course=='Music Theory')
                                        <tr>

                                            <td>P1-00{{$key1+1}}</td>
                                            <?php $user = \App\User::where('id','=',$row1->coach_id)->first();?>
                                            <td>{{$user->fname}}</td>
                                            <td>{{$row1->date}}</td>

                                        </tr>
                                    @endif
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
