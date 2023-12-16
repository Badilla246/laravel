@extends('pages.Base')

@section('content')

@if (session('info'))
<div class="success">{{session('info')}}</div>
@endif
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Band Name</th>
            <th>Venue Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>TicketPrice</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($performances as $performances):?>
            <tr>
                <td>{{$performances->bands->BandName}}</td>
                <td>{{$performances->venues->VenueName}}</td>
                <td>{{$performances->Date}}</td>
                <td>{{$performances->Time}}</td>
                <td>{{$performances->TicketPrice}}</td>
                <td class="text-center">
                    <a href="{{url('performances/'.$performances->id)}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                    </svg></a>
            </tr>
            <?php endforeach;?>
    </tbody>
</table>

@endsection
