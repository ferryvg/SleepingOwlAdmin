<div class="form-group form-element-select {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $name }}" class="control-label">
        {{ $label }}

        @if($required)
            <span class="form-element-required">*</span>
        @endif
    </label>

    <deselect :value="{{json_encode($value)}}" :multiple="false" :options="{{json_encode($options)}}" inline-template>
        <div>
            <multiselect v-model="val"
                         track-by="id"
                         label="text"
                         :multiple="multiple"
                         :searchable="true"
                         :options="options"
                         placeholder="{{ trans('sleeping_owl::lang.select.placeholder') }}"
                         :select-label="'{{trans('sleeping_owl::lang.select.init')}}'"
                         :selected-label="'{{trans('sleeping_owl::lang.select.selected')}}'"
                         :deselect-label="'{{trans('sleeping_owl::lang.select.deselect')}}'"
            >
            </multiselect>

            <input type="hidden" name="{{$name}}" v-model="preparedVal">
        </div>
    </deselect>

    @include(AdminTemplate::getViewPath('form.element.partials.helptext'))
    @include(AdminTemplate::getViewPath('form.element.partials.errors'))
</div>