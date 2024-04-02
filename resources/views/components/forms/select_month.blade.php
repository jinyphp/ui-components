<select {{ $attributes->merge(['class' => 'form-control']) }}>
    @for ($month = 1; $month <= 12; $month++)
        <option value="{{ $month }}">{{ $month }}</option>
    @endfor
</select>
