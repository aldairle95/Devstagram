@extends('layouts.app')

@section('titulo')
registrate en devstagram    
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
            <div class="md:w-5/12 p-5">
               <img src="{{asset('img/registrar.jpg')}}" alt="">
            </div>
            <div class="md:w-4/12 bg-white p-5 rounded-lg shadow-xl ">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="mb-2 block uppercase text-gray-500 font bold">
                            Nombre
                        </label>
                        <input 
                        id="name"
                        name="name"
                        type="text"
                        placeholder="tu nombre"
                        class="border p-2 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{old('name')}}">
                        @error('name')
                           <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p> 
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="username"  class="mb-2 block uppercase text-gray-500 font bold">
                            Username
                        </label>
                        <input 
                        id="username"
                        name="username"
                        type="text"
                        placeholder="tu nombre de usuario"
                        class="border p-2 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{old('username')}}">
                        @error('username')
                           <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p> 
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="email"  class="mb-2 block uppercase text-gray-500 font bold">
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
                        <label for="password"  class="mb-2 block uppercase text-gray-500 font bold">
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
                    <div class="mb-2">
                        <label for="password_confirmation"  class="mb-2 block uppercase text-gray-500 font bold">
                            Repetir Password
                        </label>
                        <input 
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu password"
                        class="border p-2 w-full rounded-lg">
                    </div>
                        <input 
                        type="submit"
                        value="crear cuenta"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                        uppercase font-bold w-full p-3 text-white ronded-lg">
                </form>
            </div>
    </div>

@endsection