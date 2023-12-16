@extends('pages.Base')

@section('content')


@if (session('info'))
<div class="success">{{session('info')}}</div>
@endif

<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('/bands/create')}}" class="btn btn-primary me-md-2" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
      </svg>
    </a>
</div>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Id</th>
            <th>Band Name</th>
            <th>Genre</th>
            <th>Country Of Origin</th>
            <th>Formation Year</th>
            <th>Albums Released</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($bands as $band):?>
            <tr>
                <td>{{$band->id}}</td>
                <td>{{$band->BandName}}</td>
                <td>{{$band->Genre}}</td>
                <td>{{$band->CountryOfOrigin}}</td>
                <td>{{$band->FormationYear}}</td>
                <td>{{$band->AlbumsReleased}}</td>
                <td class="text-center">
                    <a href="{{url('bands/'.$band->id)}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                      </svg></a>
            </tr>
            <?php endforeach;?>
    </tbody>
</table>

@endsection
