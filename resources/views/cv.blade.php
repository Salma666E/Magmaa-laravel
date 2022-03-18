@foreach($users as $User)


<embed src="{{'upload/'.$User->cv}}" width="1700" height="800" >
{{$User->name}}
@endforeach