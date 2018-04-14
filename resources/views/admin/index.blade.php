@extends('layouts.app')

@section('content')
<!-- Bootstrap Boilerplate... -->
 <div class="panel-body">
 @if (count($users) > 0)
<table class="table table-striped task-table">

 <!-- Table Headings -->
   <thead>
     <tr>
       <th>No.</th>
       <th>Name</th>
     </tr>
   </thead>

 <!-- Table Body -->
   <tbody>
     @foreach ($users as $i => $user)
     <tr>
       <td class="table-text">
         <div>{{ $i+1 }}</div>
       </td>
     <td class="table-text">
       <div>
        {{$user->name}}
       </div>
     </td>
     <td class="table-text">
       <div>
       {!! link_to_route(
       'delete.user',
       $title = 'Delete',
       $parameters = [
       'id' => $user->id,
       'class'=>'btn btn-warning'
       ]
       ) !!}
       </div>
     </td>
     </tr>
     @endforeach
   </tbody>
</table>
<div class="text-center">
  {!! $users->links() !!}
</div>
<a href="{{route('create.user')}}" class="btn btn-primary">Create Admin</a>
<a class="btn btn-danger "href="{{ URL::previous() }}">Go Back</a>
   @else
     <div>
        <span>No Admins Created</span>
     </div>
   @endif
   </div>
   @endsection
