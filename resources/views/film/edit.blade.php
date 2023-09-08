@extends('layout.master')

@section('judul')
    Edit Film
@endsection

@section('content')
<form method="post" action="/film/{{$film->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="nama" value="{{$film->judul}}" class="form-control">
    </div>
    @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Ringkasan</label>
        <textarea class="form-control" name="ringkasan">{{$film->ringkasan}}</textarea>
    </div>
    @error('ringkasan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Tahun</label>
        <input type="number" name="umur" value="{{$film->tahun}}" class="form-control">
    </div>
    @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Poster</label>
        <input type="text" name="umur" value="{{$film->poster}}" class="form-control">
    </div>
    @error('poster')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Genre</label>
        <input type="text" name="umur" value="{{$film->genre}}" class="form-control">
    </div>
    @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
