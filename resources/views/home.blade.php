@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action="{{ route('messages.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <select name="recipient_id" id="" class="form-control">
                                <option value="">----------------Select a user---------------</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="body" id="body" cols="30" rows="3" class="form-control" placeholder="Write your message here ! " required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn-primary btn-block">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
