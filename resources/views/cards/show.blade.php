@extends('../layout')

@section('content')

<div class="col-md-6 col-md-offset-3">
    
    <li class="text text-primary">{{ $cards->title }}</li>
    <hr>
   <?php $i=1?>
    @foreach($cards->notes as $notes)
            <ul class="list-group">
                <li class="list-group-item-dark"><?=$i?>&nbsp&nbsp&nbsp=
                    @can('edit_forum')
                        <a href="/project1/public/note/{{ $notes->id }}/edit"id="tooltip" title='edit'>
                    @endcan        
                            {{ $notes->body }}
                    @can('edit_forum')        
                        </a>
                    @endcan
                    <a href="#" class="pull-right">{{$notes->user->username }}</a>
                </li>
            </ul>
    <?php $i++;?>
    @endforeach

<form class="form-horizontal" method="POST" action="{{ url('cards/'.$cards->id.'/notes') }}">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                   
                   <div class="form-group">
                       <label class="col-md-4 control-label">Name</label>
                       <div class="col-md-6">
                           <input type="text" class="form-control" name="body" min="1" value="{{old('body')}}">
                       </div>
                   </div>
                   
                   <div class="form-group">
                       <select class="form-control" name="tags[]" title="tags" multiple="multiple" id="tag_list">
                          @foreach($tags as $tag)
                          <option value="{{ $tag->id }}">{{$tag->name}} </option>
                           
                           @endforeach
                       </select>
                   </div>
                   

                   <div class="form-group">
                       <div class="col-md-6 col-md-offset-4">
                           <button type="submit" class="btn btn-primary">
                               Add Note
                           </button>
                       </div>
                   </div>
               </form>
   @if(count($errors))
          <ul>
              @foreach($errors->all() as $error)    
                  <li>{{$error}}</li>
              @endforeach
          </ul>
  
      @endif
   
</div>

@stop