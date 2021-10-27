@extends('layouts.app')

@section('title', '- Contact Me')

@section('content')

  <div class="section">
      <div class="container">

          <form action="{{ route('messages.store') }}" method="POST">
              @csrf
           <div class="columns is-centered">

               <div class="column is-6">
                   <div class="columns is-centered is-multiline">
                       <div class="column is-12">
                           <h2 class="title">Contact me</h2>
                       </div>
                       <div class="column is-6">
                           <label class="label">First name</label>
                           <input class="input @error('fname') is-danger @enderror" type="text" name="fname">
                           @error('fname')
                           <p class="help is-danger">{{$message}}</p>
                           @enderror
                       </div>
                       <div class="column is-6">
                           <label class="label">Last name</label>
                           <input class="input @error('lname') is-danger @enderror" type="text" name="lname">
                           @error('lname')
                           <p class="help is-danger">{{$message}}</p>
                           @enderror
                       </div>
                       <div class="column is-6">
                           <label class="label">Email</label>
                           <input class="input @error('email') is-danger @enderror" type="email" name="email">
                           @error('email')
                           <p class="help is-danger">{{$message}}</p>
                           @enderror
                       </div>
                       <div class="column is-12">
                           <div class="field">
                               <label class="label">Message</label>
                               <textarea class="input @error('content') is-danger @enderror" name="content" cols="30" rows="30"></textarea>
                               @error('content')
                               <p class="help is-danger">{{$message}}</p>
                               @enderror
                           </div>
                       </div>
                       <div class="column is-12">
                           <input class="button is-primary is-ligth is-outlined" type="submit" value="Send">
                        </div>
                   </div>
               </div>
           </div>
          </form>
      </div>
  </div>
@endsection
