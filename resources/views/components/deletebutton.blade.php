

 @if(Auth::user()->isSuperAdmin())
<form style="display: inline" action="{{$action}}" method="POST" class="d-inline">
    @method('DELETE')
    @csrf
    <button type="button" onclick="submitDeleteForm(this)" class="btn btn-outline-danger">
        @if(isset($label)) {{$label}} @else Delete @endif
    </button>
</form>
@endif