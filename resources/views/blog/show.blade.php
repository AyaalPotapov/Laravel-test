@extends('layouts.main')

@section('title', $post->title)

@section('main.content')

   <x-title>
      {{$post->title}}

      <x-slot name="link">
         <a href="{{route('blog')}}">
            {{__('Назад')}}
         </a>
      </x-slot>
   </x-title>
   
   {!!$post->content!!}

@endsection


