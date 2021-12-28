@extends('admin.layouts.main')

@section('container')
      <p class="text-xl">List Janji Pasien KLINIKu</p>

      <div class="row justify-content-end">
        <div class="col-md-4">
          <form action="/admin-dashboard">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search Pasien" name="search">
              <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      @include('admin.table')
@endsection