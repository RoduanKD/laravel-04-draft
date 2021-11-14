@extends('layouts.app', ['activePage' => 'Messages', 'titlePage' => 'Messages'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Message</h4>
                            <p class="card-category"> Here you can see the messages</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                First Name
                                            </th>
                                            <th>
                                                Last Name
                                            </th>
                                            <th>
                                                E-mail
                                            </th>
                                            <th>
                                                Creation date
                                            </th>
                                            <th class="text-right">

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)

                                            <td>
                                                <a
                                                    href="{{ route('admin.messages.show', $message) }}">{{ $message->fname }}</a>
                                            </td>
                                            <td>
                                                {{ $message->lname }}
                                            </td>
                                            <td>
                                                {{ $message->email }}
                                            </td>
                                            <td>
                                                {{ $message->created_at }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.messages.create') }}"><button
                                                        class="btn btn-info">Replay</button></a></a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-3 text-center m-auto">
                                    {{ $messages->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
