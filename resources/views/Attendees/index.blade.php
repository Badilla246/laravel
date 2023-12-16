@extends('pages.Base')

@section('content')


<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Ticket Price</th>
            <th>Ticket Number</th>
            <th>Attendee Name</th>
            <th>Age</th>
            <th>Contact Info</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($attendees as $attendees):?>
            <tr>
                <td>{{$attendees->performances->TicketPrice}}</td>
                <td>{{$attendees->TicketNumber}}</td>
                <td>{{$attendees->AttendeeName}}</td>
                <td>{{$attendees->Age}}</td>
                <td>{{$attendees->ContactInfo}}</td>
            </tr>
            <?php endforeach;?>
    </tbody>
</table>

@endsection
