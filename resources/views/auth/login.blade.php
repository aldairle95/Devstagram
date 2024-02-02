@extends('layouts.app')

@section('titulo')
Inicia sesion en devstagram    
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
            <div class="md:w-5/12 p-5">
               <img src="{{asset('img/login.jpg')}}" alt="imagen login de usuario">
            </div>
            <div class="md:w-4/12 bg-white p-5 rounded-lg shadow-xl ">
                <form method="POST" action="{{route('login')}}" novalidate>
                    @csrf
                    @if (session('mensaje'))
                  <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}} </p>    
                    @endif
                    
                    <div class="mb-2">
                        <label for="email"  class="mb-2 block uppercase text-gray-500 font-bold">
                            Email
                        </label>
                        <input 
                        id="email"
                        name="email"
                        type="email"
                        placeholder="email de registro"
                        class="border p-2 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{old('email')}}">
                        @error('email')
                           <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p> 
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="password"  class="mb-2 block uppercase text-gray-500 font-bold">
                            Password
                        </label>
                        <input 
                        id="password"
                        name="password"
                        type="password"
                        placeholder="password de registro"
                        class="border p-2 w-full rounded-lg @error('password') border-red-500 @enderror"
                        value="{{old('password')}}">
                        @error('password')
                           <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p> 
                        @enderror
                    </div>
                    <div class="mb-5">
                        <input type="checkbox" name="remember" id=""> <label for="" class="text-gray-500 text-sm">mantener mi sesion abierta</label>
                    </div>
                        <input 
                        type="submit"
                        value="Iniciar sesion"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                        uppercase font-bold w-full p-3 text-white ronded-lg">
                </form>
            </div>
    </div>

@endsection