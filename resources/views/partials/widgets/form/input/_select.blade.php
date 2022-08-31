<div class="select-box" style="padding-top: 15px;">
    <div class="select-box__current" tabindex="1">
        <div class="select-box__value">
            <input class="select-box__input" type="radio" id="0" value="1" name="{{ $name }}" checked="checked"/>
            <p class="select-box__input-text">Select Form</p>
        </div>

        @foreach($item as $key => $val)

        <div class="select-box__value">
            <input class="select-box__input" type="radio" id="selct-id-{{ $key }}" value="{{ $key }}" name="{{ $name }}" checked="checked"/>
            <p class="select-box__input-text">{{ $val }}</p>
        </div>

        @endforeach
        
        <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true"/>
    </div>
    <ul class="select-box__list">

        <li>
        <label class="select-box__option" for="0" aria-hidden="aria-hidden">Select Form</label>
        </li>
        @foreach($item as $key => $val)

        <li>
            <label class="select-box__option" for="selct-id-{{ $key }}" aria-hidden="aria-hidden">{{ $val }}</label>
        </li>

        @endforeach
    
    </ul>
</div>