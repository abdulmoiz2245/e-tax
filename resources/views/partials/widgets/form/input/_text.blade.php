<?php 
    if(!isset($value)){
        $value = '';
    }

    if(!isset($readonly)){
        $readonly = false;
    }
?>

<div class="fv-row">
    <div class="form__group">
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}"  class="form__field" value="{{ $value }}"  placeholder="{{$placeholder}}"  <?= $required ? 'required': '' ?>  <?= $readonly ? 'readonly': '' ?> style="
            padding-right: 13px;
        " >
        <label for="{{ $id }}" class="form__label">{{$placeholder}}</label>
    </div>
</div>