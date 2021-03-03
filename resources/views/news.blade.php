@extends('main')

@section('title', 'News')

@section('content')
    <a href="https://www.educastudio.com/{{ $news }}"> Halaman Berita</a><br>
    <a href="https://www.educastudio.com/{{ $news }}/{{ $topic }}"> Berita Covid-19</a>
@endsection
