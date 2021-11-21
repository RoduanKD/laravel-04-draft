@extends('layouts.app', ['activePage' => 'Footer Management', 'titlePage' => __('Footer Management')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Footer Management') }}</h4>
                            <p class="card-category"> Here you can manage pages footer</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            </div>

                            <div class="container">
                                <div class="row">
                                    @foreach ($footers as $footer)
                                    <div class="col-sm-3">
                                        First section
                                        <br>
                                        Name: {{ $footer->firstsection }}
                                        <br>
                                        <br>
                                        Content: <br>
                                        {{ $footer->contact }}
                                        <br>
                                        <form action="{{ route('admin.footers.destroy', $footer) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a rel="tooltip" class="btn btn-success btn-link"
                                                            href="{{ route('admin.footers.edit', $footer) }}"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                        <button type="submit" rel="tooltip" class="btn btn-danger btn-link"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">delete</i>
                                                            <div class="ripple-container"></div>
                                                        </button>
                                                    </form>
                                    </div>
                                    <div class="col-sm-3">
                                        Second section
                                        <br>
                                        Name: {{ $footer->secondsection }}
                                        <br>
                                        <br>
                                        Content: <br>
                                        {{ $footer->links }}
                                    </div>
                                    <div class="col-sm-3">
                                        Third section
                                        <br>
                                        Name: {{ $footer->thirdsection }}
                                        <br>
                                        <br>
                                        Content: <br>
                                        {{ $footer->important }}
                                    </div>
                                    <div class="col-sm-3">
                                        Forth section
                                        <br>
                                        Name: {{ $footer->forthsection }}
                                        <br>
                                        <br>
                                        Content: <br>
                                        {{ $footer->other }}
                                    </div>
                                    @endforeach
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-3 text-center m-auto">
                                    {{-- {{ $posts->links('pagination::bootstrap-4') }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
