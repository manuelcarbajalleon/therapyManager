@extends('tp')

@section('content')
<div class="panel panel-primary">
   <!-- Default panel contents -->
   <div class="panel-heading">Children</div>
   <div class="panel-body">
   <!-- Table -->
   <div class="table-responsive">


   <table class="table table-condensed table-striped">
       <thead>
           <tr>
               <th>Name</th>
               <th>Phone</th>
               <th>Address</th>
               <th>Zipcode</th>
           </tr>
       </thead>
       <tbody>
         @if ( !$children->count() )
          You have no children
         @else
           @foreach( $children as $child )
               <tr>
                   <td><a href="{{ route('children.edit', $child->slug) }}">{{ $child->firstname . ' ' . $child->lastname }}</a></td>
                   <td><a href="tel:{{ $child->phone }}">{{ $child->phone }}</a></td>
                   <td><a href="https://www.google.com/maps/place/{{ $child->address }}">{{ $child->address }}</a></td>
                   <td>{{ $child->zipcode }}</td>
               </tr>

           @endforeach
         @endif
       </tbody>
   </table>
  </div>
  <p>
     {!! link_to_route('children.create', 'New Child',null, array('class' => 'btn btn-primary')) !!}
  </p>
</div>
</div>


@endsection
