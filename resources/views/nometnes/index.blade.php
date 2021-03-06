@extends('layouts.app')

@section('content')
<h1 style="text-align:center; margin-bottom:1em;">Nometnes</h1>
@guest

        <br> 
         @foreach($nometnes as $nometne)
            <div style="align-content:center; display:inline-block"> 
            <div class="card card-body mb-5 ml-5; width:15em;">
            <h3> {{$nometne->nosaukums}} </h3>
            <hr>
            <p> {{$nometne->apraksts}} </p> 
            </div>  
            </div> 
        @endforeach
    {{$nometnes->links()}}
@else

    @if(Auth::user()->loma_id == 1)
    <a class="btn btn-success btn-lg d-inline-flex ml-5" href="/nometnes/create">Pievienot jaunu nometni</a> 
        <br> 
         @foreach($nometnes as $nometne)
            <div style=" display:inline-block;"> 
            <div class="card card-body mb-5 ml-5" style="width:15em; display:inline-block;" >
            <a href="/nometnes/{{$nometne->id}}"> <h3> {{$nometne->nosaukums}} </h3> </a>
            <hr>
            <p> {{$nometne->apraksts}} </p> 
            <hr>
            <a class="btn btn-warning" href="/nometnes/{{$nometne->id}}/edit">Rediģēt</a>
            {!!Form::open(['action'=>['NometneController@destroy', $nometne->id], 'method'=>'post'])!!}
            {{Form::hidden('_method', 'delete')}}
            {{Form::submit('Dzēst', ['class'=>'btn btn-danger mt-1'])}}
            {!!Form::close() !!}
            </div>  
            </div> 
        @endforeach
    {{$nometnes->links()}}

        

@else
 
        <br> 
         @foreach($nometnes as $nometne)
            <div style="align-content:center; display:inline-block;"> 
            <div class="card card-body mb-5 ml-5" style="width:15em; display:inline-block;" >
            <a href="/nometnes/{{$nometne->id}}"> <h3> {{$nometne->nosaukums}} </h3> </a>
            <hr>
            <p> {{$nometne->apraksts}} </p> 

            </div>  
            </div> 
        @endforeach
    {{$nometnes->links()}}

@endif    
@endguest
@endsection