<div>
    <!-- He who is contented is rich. - Laozi -->
</div>

 {{-- @if(Auth::user()->isSuperAdmin()) 
<form style="display: inline" action="{{$action}}" method="POST" >
    @method('DELETE')
    @csrf
    <button type="button" onclick="submitDeleteForm(this)" class="btn btn-outline-danger">Delete</button>
</form>
 @endif  --}}

 @if(Auth::user()->isSuperAdmin())
<form style="display: inline" action="{{$action}}" method="POST" class="d-inline">
    @method('DELETE')
    @csrf
    <button type="button" onclick="submitDeleteForm(this)" class="btn btn-outline-danger">
        @if(isset($label)) {{$label}} @else Delete @endif
    </button>
</form>
@endif