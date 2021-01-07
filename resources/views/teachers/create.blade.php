@extends('layout')

@section('title', 'Form Add Teacher')
@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-6">
            <h1>Form ADD </h1>
            <form method="post" action="/teacher">
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
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <input type="text" class="form-control  @error('nip') is-invalid @enderror" name="nip" id="inputNIP" value="{{ old('nip') }}">
                        @error('nip')
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
                    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                    <select class="form-control  @error('subject') is-invalid @enderror" name="subject" id="inputSubject" value="{{ old('subject') }}">
                        <option selected>Choose...</option>
                        <option>Art</option>
                        <option>Computer Sain</option>
                        <option>English</option>
                        <option>Mathemathic</option>
                        <option>Sains</option>
                        <option>Social</option>
                        <option>Religion</option>
                    </select>
                    @error('subject')
                    <div id="inputSubject" class="invalid-feedback">
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