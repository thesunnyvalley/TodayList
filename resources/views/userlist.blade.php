@extends('layouts.app')

@section('content')
<div class="container">
    List of Users<br>
    <table>
    @foreach($ListUsers as $users)
    User: {{$user->name}}
    <form method="POST" action="{{route('', $ListUsers->id)}}">
        {{csrf_field()}}
     <tr><td>User: {{$user->name}}</td><td><button>Select</button></td></tr>  
    </form>
    @endforeach
    </table>
</div>
@endsection
