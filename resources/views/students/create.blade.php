@extends('layout')

@section('title', 'Form Add Student')
@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-6">
            <h1>Form Add Student </h1>
            <form method="post" action="/student">
                @csrf
                <div class="form-group">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="inputName" value="{{ old('name') }}">
                    @error('name')
                    <div id="inputName" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="col form-group">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <input type="text" class="form-control  @error('nis') is-invalid @enderror" name="nis" id="inputNIS" value="{{ old('nis') }}">
                        @error('nis')
                        <div id="inputName" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col form-group ">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <input type="text" class="form-control  @error('image') is-invalid @enderror" name="image" id="inputImage" value="{{ old('image') }}">
                        @error('image')
                        <div id="inputName" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                    <input type="text" class="form-control  @error('subject') is-invalid @enderror" name="subject" id="inputSubject" value="{{ old('subject') }}">
                    @error('subject')
                    <div id="inputSubject" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> -->
                <div class="form-group">
                    <label for="rank" class="col-sm-2 col-form-label">Rank</label>
                    <input class="form-control  @error('rank') is-invalid @enderror" name="rank" id="inputRank" value="{{ old('rank') }}">
                    @error('rank')
                    <div id="inputRank" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="/img/form.png" alt="" style="width: inherit;">
        </div>
    </div>
</div>

@endsection