@extends('pages.base')

@section('content')

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/bands/create')}}" method="POST">
            @csrf
        <div class="modal-body">
          Are you sure you want to create new?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
<h1>Fill up</h1>
<div class="row">
    <div class="col-md-5">
            <div class="form-group mt-2">
                <label for="BandName">Band Name</label>
                <input type="text" name="BandName" placeholder="Input the Band Name...." class="form-control">
                @error('BandName')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="Genre">Genre</label>
                <input type="text" name="Genre" placeholder="Input Genre...." class="form-control">
                    @error('Genre')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="CountryOfOrigin">Country Of Origin</label>
                <input type="text" name="CountryOfOrigin" placeholder="Input Country Of Origin...." class="form-control">
                    @error('CountryOfOrigin')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="FormationYear">Formation Year</label>
                <input type="text" name="FormationYear" placeholder="Input Formation Year...." class="form-control">
                    @error('FormationYear')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="AlbumsReleased">Albums Released</label>
                <input type="text" name="AlbumsReleased" placeholder="Input Albums Released...." class="form-control">
                    @error('AlbumsReleased')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
