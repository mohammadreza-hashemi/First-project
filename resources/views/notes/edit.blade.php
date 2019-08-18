@extends('../layout')



@section('content')


<form method="POST" action="/project1/public/notes/{{ $note->id }}">
    {{csrf_field()}}
    {{ method_field('PATCH') }}  
                   <h3>edit</h3>
                   <div class="form-group">
                       <label class="col-md-4 control-label"></label>
                       <br>
                       <div class="col-md-6">
                           <input type="text" class="form-control" name="body" min="1" value="{{$note->body}}">
                       </div>
                   </div>
                   
                      <div class="form-group">
                          <select class="form-control" name="tags[]" title="tags" multiple id="tag_list">
                          @foreach($tags as $tag)
                              <option  
                                  value="{{ $tag->id }}">{{$tag->name}}
                               </option>
                           
                           @endforeach
                       </select>
                   </div>

                   <div class="form-group">
                       <div class="col-md-6 col-md-offset-4"><br>
                           @can('update' ,$note)
                               <button type="submit" class="btn btn-primary">
                                  update
                               </button>
                           @endcan
                           
                       </div>
                   </div>
</form>

    @if(count($note->tags))<!-- ! $note->tags->isEmpty()      unless=if !-->
        <br>
        
      
        
            <hr>
            <h1>tags</h1>
            <ul>
               @foreach($note->tags as $tag)
                   <li>{{ $tag->name}}</li>
               @endforeach
            </ul>   
    @endif
    
   
@stop


