@extends('pages.Base')

@section('content')
<style>
    .home{
        background-image: url(https://i.pinimg.com/originals/c3/d7/59/c3d759f66c604c6729aaa3e4eb87b69b.gif);
        background-repeat: no-repeat;
        background-size: cover;
        height: 600px;
    }
    h1{
        color: white;
        text-align: center;
        font-size: 80px;
        width: max-content;
        position: relative;
        cursor: pointer;
        margin: 100px auto;
    }
    h1::after{
        content: "";
        position: absolute;
        bottom: -5px;
        height: 4px;
        width: 100%;
        left: 0;
        background-color: #ffffff;
        transition: 0.3s;
        transition-timing-function: ease-in-out;
        transform: scaleX(0);
    }

h1:hover::after{
    transform: scaleX(1);
}
</style>
<div class="home">
    <h1>Welcome Guests!</h1>
</div>

@endsection
