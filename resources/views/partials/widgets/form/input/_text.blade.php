<div class="fv-row">
    <div class="form__group">
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" class="form__field" value="{{ old($name) }}"  placeholder="{{$placeholder}}"  <?= $required ? 'required': '' ?> style="
            padding-right: 13px;
        " >
        <label for="{{ $id }}" class="form__label">{{$placeholder}}</label>
    </div>
</div>