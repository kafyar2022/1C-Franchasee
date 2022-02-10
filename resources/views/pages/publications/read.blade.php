@extends('layouts.master')

@section('title', $publication->title)

@section('content')
  <main class="publications-read-page">
    <div class="container">
      <ul class="breadcrumbs">
        <li>
          <a href="{{route('home')}}">Главная</a>
        </li>
        <li>
          <a href="{{route('publications')}}">{{$publication['page']}}</a>
        </li>
        <li>
          <a href="{{route('publications')}}?category={{$publication->category_id}}">{{$publication->category->title}}</a>
        </li>
        <li>
          <a>{{$publication->title}}</a>
        </li>
      </ul>
    </div>
    
    <section class="read-publication">
      <div class="container">
        <time datetime="{{$publication->created_at}}">{{date("d.m.Y", strtotime($publication->created_at));}}</time>
        <p class="publication-category">Автор: {{$publication->author}}</p>
        <h1>{{$publication->title}}</h1>
        <div class="simdit">{!! $publication->content !!}</div>
        <a class="link publication-link" href="{{route('publications')}}">Вернуться ко всем публикациям</a>
      </div>
    </section>

    <section class="publications-carousel">
      <div class="container">
        <div class="owl-carousel">
          @foreach ($publications as $publication)
            <x-publication :publication="$publication" />
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection
    