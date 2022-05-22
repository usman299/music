@extends('layouts.front')
<style>
    .tab button.active {
        background-color: #ffd403!important;
    }
    input[type="file"] {
        display: block;
        width: 100%;
        height: 60px;
        background: #fff;
        padding: 0 25px;
        border: none;
        border-radius: 0;
        font-size: 14px;
        line-height: 60px;
        margin: 0 0 20px;
        color: #879296;
        -webkit-filter: drop-shadow(-1px 2px 5px rgba(255, 246, 244, 1));
    }
</style>
@section('content')
    <section class="cartPage" >
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-12">
{{--                    <img src="{{asset('front/images/6.png')}}" style="width: 100%" alt="">--}}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">DashBoard</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Profile</button>
                        @if(Auth::user()->role==3)
                        <button class="tablinks" onclick="openCity(event, 'Student')">Students</button>
                        @endif
{{--                        <a href="{{route('front.products')}}"> <button class="tablinks">Produits</button></a>--}}
{{--                        <button class="tablinks" onclick="openCity(event, 'Paris')">Mes Commandes</button>--}}
{{--                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Détails du compte</button>--}}
                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <button class="tablinks">Logout</button>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                    <div id="London" class="tabcontent">
                        <h3>Hellow <b>{{Auth::user()->fname}} {{Auth::user()->lname}} , </b></h3>
                            <br>
                        <h3>Welcome to Ejay Studio  ,

                        </h3>
                        <br>

                    </div>


                    <div id="Tokyo" class="tabcontent">
                        <form action="{{route('profile.update')}}"  style="margin-top: 20px;" method="POST" class="kenne-form" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf
                            <div class="kenne-form-inner" style="background: #ffd403;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="{{$user->fname}}" name="fname" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="account-details-lastname">Telephone</label>
                                        <input type="text" value="{{$user->phone}}" name="phone" required>
                                    </div>


                                    <div class="col-md-6">
                                    <label for="account-details-email">Email</label>
                                    <input type="email" value="{{$user->email}}" name="email" readonly>
                                </div>
                                    <div class="col-md-6">
                                    <label for="account-details-email">Adresse</label>
                                    <input type="text" value="{{$user->address}}" name="address" required>
                                </div>
                                    <div class="col-md-6">
                                        <label for="account-details-email">Courses</label>
                                        <select name="course"  >
                                            <option value="Piano" >Piano </option>
                                            <option value="Voice">Voice </option>
                                            <option value="Guitar">Guitar </option>
                                            <option value="Ukelele" >Ukelele </option>
                                            <option value="Violen">Violen </option>
                                            <option value="Music Theory">Music Theory </option>

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="account-details-email">Package</label>
                                        <select name="package"  >
                                            <option value="1" >1 Sesstion/Walk </option>
                                            <option value="10">10 Sesstion </option>

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="account-details-email">Duration</label>
                                        <select name="duration" >
                                            <option value="30" >30 Minutes </option>
                                            <option value="45">45 Minutes-1h </option>

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="newpassword">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="oldpassword">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input single-input-half">
                                            <label for="account-details-email">Image*</label>
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input">
                                            <button style="margin-left: 370px;" class="btn btn-primary" type="submit"><span>
                                                    Update Profile</span></button>
                                        </div><br>
                                    </div>
                                </div>
<!--                                <div class="single-input single-input-half">
                                    <label for="account-details-email">Photo*</label>
                                    <input type="file" name="photo">
                                </div>-->


                            </div>
                        </form>
                    </div>
                    <div id="Student" class="tabcontent">
                        <h4> <b>Approved Student </b></h4>
                        <br>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Package</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key =>$row)
                            <tr>

                                <th scope="row">{{$key+1}}</th>
                                <td>{{$row->fname ??" "}}</td>
                                <td>{{$row->course ??" "}}</td>
                                    <td>{{$row->package ??" "}}</td>
                                    <td>{{$row->duration ??" "}}</td>
                                <td>{{$row->phone ??" "}}</td>
                                <td><a   href="{{route('user.status',['id'=>$row->id])}}" class="btn btn-warning">Approved</a></td>

                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{ $users->links() }}
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
