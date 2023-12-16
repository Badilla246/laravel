@extends('pages.base')

@section('content')

<h1>
    Update
</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('/performances/' .$performances->id)}}"  method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="BandName">BandName</label>
                <input type="text" name="BandName" id="BandName" autocomplete="BandName" placeholder="Please Enter the BandName..." class="form-control" value="{{$performances->bands->BandName}}">
            </div>
            <div class="form-group mt-2">
                <label for="VenueName">VenueName</label>
                <input type="text" name="VenueName" id="VenueName" autocomplete="VenueName" placeholder="Please Enter the VenueName..." class="form-control" value="{{$performances->venues->VenueName}}">
            </div>
            <div class="form-group mt-2">
                <label for="Date">Date</label>
                <input type="text" name="Date" id="Date" autocomplete="Date" placeholder="Please Enter the Date..." class="form-control" value="{{$performances->Date}}">
            </div>
            <div class="form-group mt-2">
                <label for="Time">Time</label>
                <input type="text" name="Time" id="Time" autocomplete="Time" placeholder="Please Enter the Time..." class="form-control" value="{{$performances->Time}}">
            </div>
            <div class="form-group mt-2">
                <label for="TicketPrice">TicketPrice</label>
                <input type="text" name="TicketPrice" id="TicketPrice" autocomplete="TicketPrice" placeholder="Please Enter the TicketPrice..." class="form-control" value="{{$performances->TicketPrice}}">
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit" autocomplete="submit">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
