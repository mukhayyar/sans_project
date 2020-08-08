@extends('layout')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('pertanyaan.index')}}">Forum <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('pertanyaan.create')}}">Buat Pertanyaan</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container mt-2">
<div class="card">
  <div class="card-header">
  Pertanyaan #{{$pertanyaan->id}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$pertanyaan->judul}}</h5>
    <p class="card-text">{{$pertanyaan->isi}}</p>
    <a href="/pertanyaan" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
