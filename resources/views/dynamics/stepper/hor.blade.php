{{-- progress stepper horizontal --}}
<div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-11">
        <style>
            .progress-container {
                position: relative;
                max-width: 800px;
                margin: 40px auto;
                padding: 20px 10%;
            }

            /* 기본 선 */
            .progress-line {
                position: absolute;
                top: 25px;
                left: 0;
                width: 100%;
                height: 2px;
                background-color: #E5E7EB;
            }

            /* 진행 상태 선 */
            .progress-line-active {
                position: absolute;
                top: 25px;
                left: 0;
                width: 35%;
                height: 2px;
                background-color: #0d6efd;
                transition: width 0.3s ease;
            }

            /* 단계 컨테이너 */
            .progress-steps {
                position: relative;
                display: flex;
                justify-content: space-between;
                z-index: 1;
            }

            /* 각 단계 */
            .progress-step {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                gap: 8px;
            }

            /* 단계 포인트 */
            .step-point {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background-color: #E5E7EB;
            }

            /* 단계 텍스트 */
            .step-text {
                font-size: 14px;
                color: #9CA3AF;
            }

            /* 완료된 단계 */
            .step-completed .step-point {
                background-color: #0d6efd;
            }
            .step-completed .step-text {
                color: #0d6efd;
            }

            /* 현재 진행 중인 단계 */
            .step-active .step-point {
                background-color: #0d6efd;
                box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.2);
            }
            .step-active .step-text {
                color: #0d6efd;
            }

            /* 진행 예정 단계 */
            .step-pending .step-point {
                background-color: #E5E7EB;
            }
            .step-pending .step-text {
                color: #9CA3AF;
            }

            /* 완료 단계 */
            .step-success .step-point {
                background-color: #10B981;
            }
        </style>

        <div class="progress-container">
            <div class="progress-line"></div>
            @php
                // 진행상태 배열 정의
                if(!isset($steps) || empty($steps)) {
                    $steps = [];
                }

                // 완료된 단계 수 계산
                $completedCount = 0;
                $activeFound = false;
                foreach($steps as $step) {
                    if ($step['status'] === 'completed') {
                        $completedCount++;
                    } else if ($step['status'] === 'active') {
                        $activeFound = true;
                        //$completedCount+=0.5;
                    }
                }

                // 전체 단계 중 완료된 비율 계산 (전체 구간 수는 steps 갯수 - 1)
                $totalSections = count($steps) - 1;
                if($completedCount == $totalSections) {
                    $progressWidth = 100;
                } else {
                    $progressWidth = ($completedCount / $totalSections) * 80; // 여백*2 빼기
                    $progressWidth += 10; // 좌측여백
                }
            @endphp
            <div class="progress-line-active" style="width: {{ $progressWidth }}%"></div>
            <div class="progress-steps" >
                @foreach($steps as $step)
                    <div class="progress-step step-{{ $step['status'] }}">
                        <div class="step-point"></div>
                        <div class="step-text">{{ $step['text'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
