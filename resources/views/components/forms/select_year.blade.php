<select {{ $attributes->merge(['class' => 'form-control']) }}>
    @php
    $currentYear = date('Y'); // 현재 년도
    $startYear = $currentYear - 5;
    $endYear = $currentYear + 5;
    @endphp

    @for ($year = $startYear; $year <= $endYear; $year++)
        <option value="{{ $year }}">{{ $year }}</option>
    @endfor
</select>
