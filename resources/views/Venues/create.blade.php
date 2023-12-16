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
        <form action="{{url('/venues/create')}}" method="POST">
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
                <label for="VenueName">VenueName</label>
                <input type="text" name="VenueName" placeholder="Input the VenueName...." class="form-control">
                @error('VenueName')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="Location">Location</label>
                <input type="text" name="Location" placeholder="Input Location...." class="form-control">
                    @error('Location')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="Capacity">Capacity</label>
                <input type="text" name="Capacity" placeholder="Input Capacity...." class="form-control">
                    @error('Capacity')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="ContactPerson">ContactPerson</label>
                <input type="text" name="ContactPerson" placeholder="Input ContactPerson ...." class="form-control">
                    @error('ContactPerson')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="OpeningDate">OpeningDate</label>
                <input type="text" name="OpeningDate" placeholder="Input OpeningDate...." class="form-control">
                    @error('OpeningDate')
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
