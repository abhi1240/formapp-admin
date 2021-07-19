<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ComponentController
 * @package App\Http\Controllers
 */

class ComponentController extends Controller
{
    /**
     * Display a alert of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $pageTitle = 'Alert';
        $pageDescription = 'Some description for the page';

        return view('components.alert', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a avatar of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function avatar()
    {

        $pageTitle = 'Avatar';
        $pageDescription = 'Some description for the page';

        return view('components.avatar', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a badge of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function badge()
    {

        $pageTitle = 'Badge';
        $pageDescription = 'Some description for the page';

        return view('components.badge', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a breadcrumbs of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function breadcrumbs()
    {

        $pageTitle = 'Breadcrumbs';
        $pageDescription = 'Some description for the page';

        return view('components.breadcrumbs', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a buttons of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function buttons()
    {

        $pageTitle = 'Buttons';
        $pageDescription = 'Some description for the page';

        return view('components.buttons', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a cards of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function cards()
    {

        $pageTitle = 'Cards';
        $pageDescription = 'Some description for the page';

        return view('components.cards', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a carousel of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function carousel()
    {

        $pageTitle = 'Carousel';
        $pageDescription = 'Some description for the page';

        return view('components.carousel', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkbox of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function checkbox()
    {

        $pageTitle = 'Checkbox';
        $pageDescription = 'Some description for the page';

        return view('components.checkbox', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a collapse of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function collapse()
    {

        $pageTitle = 'Collapse';
        $pageDescription = 'Some description for the page';

        return view('components.collapse', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a comments of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function comments()
    {

        $pageTitle = 'Comments';
        $pageDescription = 'Some description for the page';

        return view('components.comments', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a dashboard base of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function dashboardBase()
    {

        $pageTitle = 'Dashboard Base';
        $pageDescription = 'Some description for the page';

        return view('components.dashboard_base', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a date picker of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function datePicker()
    {

        $pageTitle = 'Date Picker';
        $pageDescription = 'Some description for the page';

        return view('components.date_picker', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a drawer of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function drawer()
    {

        $pageTitle = 'Drawer';
        $pageDescription = 'Some description for the page';

        return view('components.drawer', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a drag drop of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function dragDrop()
    {

        $pageTitle = 'dragDrop';
        $pageDescription = 'Some description for the page';

        return view('components.drag_drop', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a dropdown of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function dropdown()
    {

        $pageTitle = 'dropdown';
        $pageDescription = 'Some description for the page';

        return view('components.dropdown', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a empty of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function empty()
    {

        $pageTitle = 'Empty';
        $pageDescription = 'Some description for the page';

        return view('components.empty', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a empty of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function grid()
    {

        $pageTitle = 'Grid';
        $pageDescription = 'Some description for the page';

        return view('components.grid', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a input of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function input()
    {

        $pageTitle = 'Input';
        $pageDescription = 'Some description for the page';

        return view('components.input', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {

        $pageTitle = 'List';
        $pageDescription = 'Some description for the page';

        return view('components.list', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a menu of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function menu()
    {

        $pageTitle = 'Menu';
        $pageDescription = 'Some description for the page';

        return view('components.menu', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a message of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function message()
    {

        $pageTitle = 'Message';
        $pageDescription = 'Some description for the page';

        return view('components.message', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a modal of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function modal()
    {

        $pageTitle = 'Modal';
        $pageDescription = 'Some description for the page';

        return view('components.modal', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a notifications of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {

        $pageTitle = 'Notifications';
        $pageDescription = 'Some description for the page';

        return view('components.notifications', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a page header of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function pageHeader()
    {

        $pageTitle = 'Page Header';
        $pageDescription = 'Some description for the page';

        return view('components.page_header', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a pagination of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function pagination()
    {

        $pageTitle = 'Pagination';
        $pageDescription = 'Some description for the page';

        return view('components.pagination', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a progressbar of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function progressbar()
    {

        $pageTitle = 'Progressbar';
        $pageDescription = 'Some description for the page';

        return view('components.progressbar', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a radio of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function radio()
    {

        $pageTitle = 'Radio';
        $pageDescription = 'Some description for the page';

        return view('components.radio', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a rate of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function rate()
    {

        $pageTitle = 'Rate';
        $pageDescription = 'Some description for the page';

        return view('components.rate', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a result of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function result()
    {

        $pageTitle = 'Result';
        $pageDescription = 'Some description for the page';

        return view('components.result', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a select of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function select()
    {

        $pageTitle = 'Select';
        $pageDescription = 'Some description for the page';

        return view('components.select', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a skeleton of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function skeleton()
    {

        $pageTitle = 'Skeleton';
        $pageDescription = 'Some description for the page';

        return view('components.skeleton', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a slider of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function slider()
    {

        $pageTitle = 'Slider';
        $pageDescription = 'Some description for the page';

        return view('components.slider', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a spin of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function spin()
    {

        $pageTitle = 'Spin';
        $pageDescription = 'Some description for the page';

        return view('components.spin', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a statistics of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function statistics()
    {

        $pageTitle = 'statistics';
        $pageDescription = 'Some description for the page';

        return view('components.statistics', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a steps of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function steps()
    {

        $pageTitle = 'Steps';
        $pageDescription = 'Some description for the page';

        return view('components.steps', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a switch of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function switch()
    {

        $pageTitle = 'Switch';
        $pageDescription = 'Some description for the page';

        return view('components.switch', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a tab of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function tab()
    {

        $pageTitle = 'Tab';
        $pageDescription = 'Some description for the page';

        return view('components.tab', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a tag of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function tag()
    {

        $pageTitle = 'Tag';
        $pageDescription = 'Some description for the page';

        return view('components.tag', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a timeline of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function timeline()
    {

        $pageTitle = 'Timeline';
        $pageDescription = 'Some description for the page';

        return view('components.timeline', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a time picker of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function timePicker()
    {

        $pageTitle = 'Time Picker';
        $pageDescription = 'Some description for the page';

        return view('components.time_picker', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a uploads of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function uploads()
    {

        $pageTitle = 'uploads';
        $pageDescription = 'Some description for the page';

        return view('components.uploads', compact('pageTitle', 'pageDescription'));
    }

}
