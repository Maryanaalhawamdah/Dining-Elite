<base href="/public">
<!DOCTYPE html>
<html>
<head>

    <base href="/public">
    <!-- Add this to your <head> section -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Add your CSS file -->
,<style>/* Add styles for the user card */
    .user-card-full {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    /* Style the user profile image */
    .userlogo img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    /* Style the "Edit" button */
    .btn-edit {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Add spacing */
    .m-t-40 {
        margin-top: 40px;
    }

    /* Style reservation details */
    .reservation-details {
        font-size: 16px;
        margin-top: 10px;
        border: 1px solid  #cda45e;
        padding: 10px;
        border-radius: 5px;
        width:75%;
        align-items: center;
        margin-left:15%;
    }
     h1{
        margin-left:15%;
color:  #9b793e;
    }

    .btns{
        font-weight: 600;
  font-size: 13px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: white;
  background-color: #0c0b09;
  border: 2px solid #cda45e;
}
.btns:hover{
    background: #cda45e;
  color: #fff;


}
.profileimage{
    width:10%;
    margin-left:45%;
}
label{
    color: #000;
}
    </style>
</head>
<body>
    @extends('home.masterpage')
    @extends('user.layout')
    <h1  style="margin-top:10%;">Welcome to your profile</h1>
<br>
<br>
<div class="reservation-details" style="margin-left:16%">

                            <div class="col-sm-12">
                                <img class="profileimage" src="/images/User_icon_2.svg.png">

                                <div class="card-block">

                                    <h4 style="margin-left:5%;">Account sittings</h4>
                                    <br>
                                    <form method="POST" action="{{ route('edit') }}" class="userform">
                                        @csrf
                                        <div class="row">
                                            <div class="col-mm-4" style="display: none">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <input type="text" name="id" id="id" value="{{ Auth::user()->id }}" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-10 f-w-600">Name</p>
                                                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="m-b-10 f-w-600">Password</p>
                                                <input type="password" name="password" id="password" value="{{ Auth::user()->password }}" class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div >
                                            <input type="submit"  class="btns" value="Edit">
                                        </div>
                                    </form>
                                </div>
                            </div></div>
                            <ul>
                                <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>