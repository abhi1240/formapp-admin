<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Config;

/**
 * Class PageController
 * @package App\Http\Controllers
 */

class PageController extends Controller
{
    /**
     * Display a team of the resource.
     *
     * @return \Illuminate\View\View
     */
   public function  index(){

       $pageTitle = 'Team';
       $pageDescription = 'Some description for the page';

       return view('pages.team', compact('pageTitle', 'pageDescription'));
   }
    
   /**
     * Display a gallery of the resource.
     *
     * @return \Illuminate\View\View
     */
   public function  gallery(){

       $pageTitle = 'Gallery';
       $pageDescription = 'Some description for the page';

       return view('pages.gallery', compact('pageTitle', 'pageDescription'));
   }

    /**
     * Display a pricing of the resource.
     *
     * @return \Illuminate\View\View
     */
   public function  pricing(){

       $pageTitle = 'Pricing';
       $pageDescription = 'Some description for the page';

       return view('pages.pricing', compact('pageTitle', 'pageDescription'));
   }

    /**
     * Display a faq of the resource.
     *
     * @return \Illuminate\View\View
     */
   public function  faq(){

       $pageTitle = 'Faq';
       $pageDescription = 'Some description for the page';

       return view('pages.faq', compact('pageTitle', 'pageDescription'));
   }

    /**
     * Display a search of the resource.
     *
     * @return \Illuminate\View\View
     */
   public function  search(){

      $pageTitle = 'Search';
      $pageDescription = 'Some description for the page';

      return view('pages.search', compact('pageTitle', 'pageDescription'));
   }

    /**
     * Display a search of the resource.
     *
     * @return \Illuminate\View\View
     */
   public function  changelog(){

      $pageTitle = 'Changelog';
      $pageDescription = 'Changelog description for the page';

      return view('pages.changelog', compact('pageTitle', 'pageDescription'));
   }

    /**
     * Display a kanban board of the resource.
     *
     * @return \Illuminate\View\View
     */
   public function  kanbanBoard(){

      $pageTitle = 'Kanban Board';
      $pageDescription = 'Changelog description for the page';

      return view('pages.kanban_board', compact('pageTitle', 'pageDescription'));
   }

    /**
     * Display a file manager of the resource.
     *
     * @return \Illuminate\View\View
     */
   public function  fileManager(){

      $pageTitle = 'File Manager';
      $pageDescription = 'Changelog description for the page';

      return view('pages.file_manager', compact('pageTitle', 'pageDescription'));
   }

   /**
     * Display a file manager list of the resource.
     *
     * @return \Illuminate\View\View
     */
   public function  fileManagerList(){

      $pageTitle = 'File Manager List';
      $pageDescription = 'Changelog description for the page';

      return view('pages.file_manager_list', compact('pageTitle', 'pageDescription'));
   }

   /**
     * Display a basic table list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  basicTable(){

      $pageTitle = 'Basic Table';
      $pageDescription = 'Basic table description for the page';

      return view('pages.table.basic_table', compact('pageTitle', 'pageDescription'));
   }

   /**
     * Display a datatable list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  dataTable(){

      $pageTitle = 'Data Table';
      $pageDescription = 'Data table description for the page';

      return view('pages.table.data_table', compact('pageTitle', 'pageDescription'));
   }

   /**
     * Display a banner list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  banner(){

      $pageTitle = 'Banners';
      $pageDescription = 'Banner description for the page';

      return view('pages.banner', compact('pageTitle', 'pageDescription'));
   }

   /**
     * Display a testimonial list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  testimonial(){

      $pageTitle = 'Testimonial';
      $pageDescription = 'Testimonial description for the page';

      return view('pages.testimonial', compact('pageTitle', 'pageDescription'));
   }

   /**
     * Display a blank page list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  blankPage(){

      $pageTitle = 'Blank Page';
      $pageDescription = 'Blanke page description for the page';

      return view('pages.blank_page', compact('pageTitle', 'pageDescription'));
   }

   /**
     * Display a knowledgebase page list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  knowledgebase(){

      $pageTitle = 'Knowledge Base Page';
      $pageDescription = 'Knowledge base page description for the page';

      return view('pages.knowledgebase.knowledgebase', compact('pageTitle', 'pageDescription'));
   }

   /**
     * Display a all article page list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  allArticle(){

      $pageTitle = 'Knowledge Base Page';
      $pageDescription = 'Knowledge base page description for the page';

      return view('pages.knowledgebase.all_article', compact('pageTitle', 'pageDescription'));
    }

   /**
     * Display a singale article page list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  singaleArticle(){

      $pageTitle = 'Knowledge Base Page';
      $pageDescription = 'Knowledge base page description for the page';

      return view('pages.knowledgebase.singale_article', compact('pageTitle', 'pageDescription'));
    }

   /**
     * Display a support page list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  support(){

      $pageTitle = 'Support CenterPage';
      $pageDescription = 'Support Center page description for the page';

      return view('pages.support', compact('pageTitle', 'pageDescription'));
    }

   /**
     * Display a support page list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  comingSoon(){

      $pageTitle = 'coming soon';
      $pageDescription = 'Coming soon page description for the page';

      return view('pages.coming_soon', compact('pageTitle', 'pageDescription'));
    }
}
