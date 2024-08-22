# chart 컴포넌트
`chartjs`를 컴포넌트 하여 손쉽게 blade 템플릿 안에 차트를 삽입할 수 있습니다.
> charjs에 대한 설명은 https://www.chartjs.org/docs/latest/ 를 참조하시길 바랍니다.

## bar 차트

### x-ui-chart-bar
bar 형태의 차트를 출력합니다.

chartjs를 통하여 차트를 출력하기 위해서는 json 형태의 데이터를 자바스트립트 코드에 삽입해 주어야 합니다. blade 컴포넌트는 이를 쉽게 자동으로 처리학 위하여 json 문자열 데이터를 컴포넌트 테그안에 넣어주시면 자동으로 javascript 코드 영역으로 복사되어 차트가 출력되는 것을 확인할 수 있습니다.

```php
<x-ui-chart-bar>
    {{-- chartjs json data --}}
    {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 9],
            borderWidth: 1
        }]
    }
</x-ui-chart-bar>
```

변수로 데이터 전달하기
```php
@php
    $chart['labels'] = ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'];
    $chart['datasets'] = [
        [
            'label' => "# of Votes",
            'data' => [10, 15, 3, 5, 2, 10],
            'borderWidth' => 1
        ]
    ];
@endphp

<x-ui-chart-bar >
    {{-- chartjs json data --}}
    {!! json_encode($chart) !!}
</x-ui-chart-bar>
```
### 가로모드 출력
가로 기준으로 bar 차트를 출력할 수 있습니다.

```php
<x-ui-chart-bar-hor>
    {!! json_encode($chart) !!}
</x-ui-chart-bar-hor>
```
