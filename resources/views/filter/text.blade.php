<div class="input-group input-group-sm">
    <div class="input-group-addon">
        <i class="fa fa-{{ $icon }}"></i>
    </div>
    <input type="{{ $type }}" class="form-control {{ $id }}" placeholder="{{$placeholder}}" name="{{$name}}" value="{{ request($name, $value) }}">
</div>