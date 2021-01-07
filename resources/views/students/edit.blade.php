@extends('layout')

@section('title', 'Form Edit Student')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h1>Form Edit Student</h1>
            <form method="post" action="/student/{{ $student->id }}">
                @method('patch')
                @csrf
                <div class="form-group ">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="inputName" value="{{ $student->name }}">
                    @error('name')
                    <div id="inputName" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="col form-group">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <input type="text" class="form-control  @error('nis') is-invalid @enderror" name="nis" id="inputNIS" value="{{ $student->nis }}">
                        @error('nis')
                        <div id="inputNIS" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col form-group">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <input type="text" class="form-control  @error('image') is-invalid @enderror" name="image" id="inputImage" value="{{ $student->image }}">
                        @error('image')
                        <div id="inputImage" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="rank" class="col-sm-2 col-form-label">Subject</label>
                    <input type="text" class="form-control  @error('rank') is-invalid @enderror" name="rank" id="inputRank" value="{{ $student->rank }}">
                    @error('rank')
                    <div id="inputRank" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="/img/form.png" alt="" style="width: inherit;">
        </div>
    </div>
</div>

@endsection