<?php
namespace Jiny\UI\Components;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;

use Livewire\Livewire;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class JinyUIComponentServiceProvider extends ServiceProvider
{
    private $package = "jiny-ui-component";

    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);

        //Scroll Cue
        Blade::component($this->package.'::components.'.'Scroll.cue', 'ui2-scroll-cue');

        Blade::component($this->package.'::components.'.'indicator.progress-4', 'indicator-progress-4');
        Blade::component($this->package.'::components.'.'indicator.progress-17', 'indicator-progress-17');
        Blade::component($this->package.'::components.'.'indicator.square-11', 'indicator-square-11');


        // layouts
        Blade::component($this->package.'::components.'.'layouts.row', 'layout-row');
        Blade::component($this->package.'::components.'.'layouts.col_left', 'col-left');
        Blade::component($this->package.'::components.'.'layouts.col_right', 'col-right');

        Blade::component($this->package.'::components.'.'layouts.layout-center-middle', 'layout-center-middle');



        // Flex
        ## flex 박스
        Blade::component($this->package.'::components.'.'flex.flex', 'flex');

        /*
        Blade::component('jinyui::components.'.'flex._.row', 'flex-row');
        Blade::component('jinyui::components.'.'flex._.col', 'flex-col'); // 세로배치
        Blade::component('jinyui::components.'.'flex._.center', 'flex-center'); //가운데
        Blade::component('jinyui::components.'.'flex._.between', 'flex-between'); //양쪽
        Blade::component('jinyui::components.'.'flex._.end', 'flex-end'); //양쪽
        Blade::component('jinyui::components.'.'flex._.item', 'flex-item');
        Blade::component('jinyui::components.'.'flex._.divide', 'divide');
        Blade::component('jinyui::components.'.'flex._.divide-y', 'divide-y');
        Blade::component('jinyui::components.'.'flex._.divide-item', 'divide-item');
        */

        // flex박스로 화면 전체 100
        /*
        Blade::component($this->package.'::components.'.'flex.screen_full', 'flex-screen-full');
        Blade::component($this->package.'::components.'.'flex.flex_column', 'flex-column');
        */



        // 컴포넌트
        Blade::component($this->package.'::components.'.'avata', 'avata'); //아바타 이미지 출력

        // Toggle
        Blade::component(\Jiny\UI2\View\ToggleSwitch::class, 'toggle-switch');
        Blade::component(\Jiny\UI2\View\ToggleCheck::class, 'toggle-check');

        // link
        Blade::component($this->package.'::components.'.'links.click', 'click'); // javascript:void(0) a링크

        // forms
        Blade::component($this->package.'::components.'.'forms.form_hor', 'form-hor');
        Blade::component($this->package.'::components.'.'forms.form_label', 'form-label');
        Blade::component($this->package.'::components.'.'forms.form_item', 'form-item');
        Blade::component($this->package.'::components.'.'forms.form_text', 'form-text');

        Blade::component($this->package.'::components.'.'forms.select_year', 'select-year');
        Blade::component($this->package.'::components.'.'forms.select_month', 'select-month');


        // Flatpickr
        Blade::component($this->package.'::components.'.'flatpickr.date', 'flatpickr-date');
        Blade::component($this->package.'::components.'.'flatpickr.datetime', 'flatpickr-datetime');

        // action
        Blade::component($this->package.'::components.'.'actions.action-message', 'action-message');

    }

    public function register()
    {
        /* 라이브와이어 컴포넌트 등록 */
        $this->app->afterResolving(BladeCompiler::class, function () {

        });
    }

}
