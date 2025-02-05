# x-form-text-clear
input 폼으로 클리어 기능을 탑제한 컴포넌트 입니다.

텍스트 입력 필드 오른쪽에 'X' 버튼이 표시되며, 이를 클릭하면 입력된 내용을 즉시 지울 수 있습니다.

## 기본 사용법
```php
<x-form-text-clear wire:model="search" wire:keydown.enter="pageSearch" />
```

## 주요 기능
- 텍스트 입력 필드와 클리어 버튼이 통합된 디자인
- Livewire와 완벽한 호환
- 반응형 디자인 지원
- 사용자 입력값 즉시 초기화 가능

## 속성
| 속성 | 설명 | 기본값 |
|------|------|--------|
| wire:model | Livewire 데이터 바인딩 | - |
| placeholder | 입력 필드 안내 텍스트 | - |
| class | 추가 CSS 클래스 | - |

## 이벤트
- `wire:keydown.enter` : Enter 키 입력 시 이벤트 발생
- `clear` : 클리어 버튼 클릭 시 이벤트 발생
