<div class='form-group{{ $errors->has("{$lang}[title]") ? ' has-error' : '' }}'>
    {!! Form::label("{$lang}[title]", trans('slider::slider.form.title')) !!}
    {!! Form::text("{$lang}[title]", Input::old("{$lang}[title]"), ['class' => 'form-control', 'placeholder' => trans('slider::slider.form.title'), 'autofocus']) !!}
    {!! $errors->first("{$lang}[title]", '<span class="help-block">:message</span>') !!}
</div>
<div class='form-group{{ $errors->has("{$lang}[caption]") ? ' has-error' : '' }}'>
    {!! Form::label("{$lang}[caption]", trans('slider::slider.form.caption')) !!}
    {!! Form::text("{$lang}[caption]", Input::old("{$lang}[caption]"), ['class' => 'form-control', 'placeholder' => trans('slider::slider.form.caption'), 'autofocus']) !!}
    {!! $errors->first("{$lang}[caption]", '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label("{$lang}[uri]", trans('slider::slider.form.uri')) !!}
    <div class='input-group{{ $errors->has("{$lang}[uri]") ? ' has-error' : '' }}'>
        <span class="input-group-addon">/{{ $lang }}/</span>
        {!! Form::text("{$lang}[uri]", Input::old("{$lang}[uri]"), ['class' => 'form-control', 'placeholder' => trans('slider::slider.form.uri')]) !!}
        {!! $errors->first("{$lang}[uri]", '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has("{$lang}[url]") ? ' has-error' : '' }}">
    {!! Form::label("{$lang}[url]", trans('slider::slider.form.url')) !!}
    {!! Form::text("{$lang}[url]", Input::old("{$lang}[url]"), ['class' => 'form-control', 'placeholder' => trans('slider::slider.form.url')]) !!}
    {!! $errors->first("{$lang}[url]", '<span class="help-block">:message</span>') !!}
</div>

<div class="checkbox">
    <label for="{{$lang}}[active]">
        <input id="{{$lang}}[active]"
                name="{{$lang}}[active]"
                type="checkbox"
                class="flat-blue"
                value="1" />
        {{ trans('slider::slider.form.active') }}
    </label>
</div>
