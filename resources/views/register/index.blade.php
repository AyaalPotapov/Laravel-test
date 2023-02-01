@extends('layouts.auth')

@section('title', 'Страница регистрации')

@section('auth.content')
<x-card>
   <x-card-header>
      <x-card-title>
         {{__('Регистрация')}}
      </x-card-title> 

      <x-slot name="right">
         <a href="{{ route('login') }}">
            {{__('Вход')}}
         </a>
      </x-slot>
   </x-card-header>

   <x-card-body>
      <x-form action="{{route('register.store')}}" method="POST">
         <x-form-item>
            <x-label class="required">{{__('Имя')}}</x-label>
            <x-input name="name" autofocus/>
         </x-form-item>

         <x-form-item>
            <x-label class="required">{{__('Email')}}</x-label>
            <x-input type="email" name="Email" />
         </x-form-item>

         <x-form-item>
            <x-label class="required">{{__('Пароль')}}</x-label>
            <x-input type="pass" name="pass"/>
         </x-form-item>

         <x-form-item>
            <x-label class="required">{{__('Подтвердите пароль')}}</x-label>
            <x-input type="pass" name="pass_confirm"/>
         </x-form-item>

         <x-form-item>
            <x-checkbox name="agreements" :checked="!! request()->old('agreements')">
               {{__('Согласие на обработку персональных данных')}}
            </x-checkbox>
         </x-form-item>

         <x-button type="submit" color="success">
            {{__('Зарегистрироваться')}} 
         </x-button>

      </x-form>
   </x-card-body>
</x-card>
@endsection





