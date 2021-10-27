@extends('layouts.app')

@section('title', '- Contact Me')

@section('content')
        <section class="section">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <h3 class="title is-2">Contact me</h3>
                    </div>
                </div>
                      <form action="{{route('messages.store')}}" method="POST">
                        @csrf
                        <div class="columns is-centered">
                            <div class="column is-4">
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Firstname</label>
                                        <div class="control">
                                          <input class="input" name="fname" type="text" placeholder="Text input">
                                          @error('fname')
                                          <p class="help is-danger">{{ $message }}</p>
                                          @enderror
                                        </div>
                                      </div>
                                </div>
                                  <div class="column">
                                      <div class="field">
                                        <label class="label">Lastname</label>
                                        <div class="control has-icons-left has-icons-right">
                                          <input class="input" name="lname" type="text" placeholder="Text input">
                                          @error('lname')
                                          <p class="help is-danger">{{ $message }}</p>
                                          @enderror
                                          <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                          </span>
                                          <span class="icon is-small is-right">
                                            <i class="fas fa-check"></i>
                                          </span>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="column">
                                      <div class="field">
                                        <label class="label">Email</label>
                                        <div class="control has-icons-left has-icons-right">
                                          <input class="input" name="email" type="email" placeholder="Email input">
                                          @error('email')
                                          <p class="help is-danger">{{ $message }}</p>
                                          @enderror
                                          <span class="icon is-small is-left">
                                            <i class="fas fa-envelope"></i>
                                          </span>
                                          <span class="icon is-small is-right">
                                            <i class="fas fa-exclamation-triangle"></i>
                                          </span>
                                        </div>
                                        <p class="help is-danger">This email is invalid</p>
                                      </div>
                                  </div>
                                  <div class="column">
                                      <div class="field">
                                        <label class="label">Message</label>
                                        <div class="control">
                                          <textarea class="textarea" name="content" placeholder="Textarea"></textarea>
                                          @error('content')
                                          <p class="help is-danger">{{ $message }}</p>
                                          @enderror
                                        </div>
                                      </div>
                                  </div>
                                  <div class="column">
                                      <div class="field is-grouped">
                                        <div class="control">
                                          <button class="button is-primary is-outlined is-light">Submit</button>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                        </div>
                    </form>
                </div>
        </section>

    @endsection
