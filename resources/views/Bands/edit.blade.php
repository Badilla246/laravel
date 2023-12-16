@extends('pages.base')

@section('content')

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModal">Delete Band - {{$band->BandName}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/bands/delete/' . $band->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
            Are you sure you want to delete this buyer?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Delete User</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<h1>
    Update
</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('/bands/' .$band->id)}}"  method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="BandName">BandName</label>
                <input type="text" name="BandName" id="BandName" autocomplete="BandName" placeholder="Please Enter the BandName..." class="form-control" value="{{$band->BandName}}">
            </div>
            <div class="form-group mt-2">
                <label for="Genre">Genre</label>
                <input type="text" name="Genre" id="Genre" autocomplete="Genre" placeholder="Please Enter the Genre..." class="form-control" value="{{$band->Genre}}">
            </div>
            <div class="form-group mt-2">
                <label for="CountryOfOrigin">CountryOfOrigin</label>
                <input type="text" name="CountryOfOrigin" id="CountryOfOrigin" autocomplete="CountryOfOrigin" placeholder="Please Enter the CountryOfOrigin..." class="form-control" value="{{$band->CountryOfOrigin}}">
            </div>
            <div class="form-group mt-2">
                <label for="FormationYear">FormationYear</label>
                <input type="text" name="FormationYear" id="FormationYear" autocomplete="FormationYear" placeholder="Please Enter the FormationYear..." class="form-control" value="{{$band->FormationYear}}">
            </div>
            <div class="form-group mt-2">
                <label for="AlbumsReleased">AlbumsReleased</label>
                <input type="text" name="AlbumsReleased" id="AlbumsReleased" autocomplete="AlbumsReleased" placeholder="Please Enter the AlbumsReleased..." class="form-control" value="{{$band->AlbumsReleased}}">
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                  </svg>
                </button>
                <button class="btn btn-primary" type="submit" autocomplete="submit">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
