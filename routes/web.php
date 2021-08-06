<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\SocialAppController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\FirestoreController;
use App\Http\Controllers\WidgetController;
use App\Http\Controllers\WizardController;

//form filling Route
use App\Http\Controllers\Form\HomeController;
use App\Http\Controllers\Form\UpdateImageController;
use App\Http\Controllers\Form\AdminController;
use App\Http\Controllers\Form\SupportController;
use App\Http\Controllers\Form\AccountsController;
use App\Http\Controllers\Form\QualityCheckerController;
use App\Http\Controllers\Form\QualityControlController;
use App\Http\Controllers\Form\UserDashboardController;
use App\Http\Controllers\Form\ImagesController;
use App\Http\Controllers\Form\SupImagesController;
use App\Http\Controllers\Form\TablesController;
use App\Http\Controllers\Form\AppLinksController;
use App\Http\Controllers\Form\IQCImagesController;
use App\Http\Controllers\Form\JobsController;
use Illuminate\Support\Facades\Route;

/*IQCImagesController
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Routes
//Clear Cache facade value:
Route::get('/clear-cache', function() {
	$exitCode = Artisan::call('cache:clear');
	return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
	$exitCode = Artisan::call('optimize');
	return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
	$exitCode = Artisan::call('route:cache');
	return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
	$exitCode = Artisan::call('route:clear');
	return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
	$exitCode = Artisan::call('view:clear');
	return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
	$exitCode = Artisan::call('config:cache');
	return '<h1>Clear Config cleared</h1>';
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link'); // this will do the command line job
});
//Routes
Route::get('/', [LoginController::class, 'loginForm']);
Route::get('/privacy-policy', [AppLinksController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms-and-conditions', [AppLinksController::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::get('/refund-policy', [AppLinksController::class, 'refund_policy'])->name('refund_policy');
Route::get('/support-link', [AppLinksController::class, 'support'])->name('links.support');

    Route::group(['middleware' => 'auth'], function () {
			Route::get('/approval', [HomeController::class, 'approval'])->name('approval');
			Route::get('/home', [HomeController::class, 'home'])->name('home');
			//admin routes
			Route::group(['middleware' => 'admin'], function () {
					Route::group(['prefix' => 'admin'], function () {
						Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
						Route::get('/notifications', [AdminController::class, 'notifications'])->name('admin.notifications');
						Route::get('/mark-as-read', [AdminController::class, 'markasRead'])->name('admin.markNotification');
						Route::post('/read-notification', [AdminController::class, 'mark_as_read_single_notification'])->name('admin.mark.Notification');
						Route::group(['prefix' => 'user'], function () {
						Route::get('/approved-users', [AdminController::class, 'user_approve_list'])->name('admin.approve.users');
						Route::get('/pending-users', [AdminController::class, 'pending_users'])->name('admin.pending.users');
						Route::post('/approve', [AdminController::class, 'user_approve'])->name('admin.user.approve');
						Route::get('/seeder_status_change', [AdminController::class, 'status_change']);
						Route::get('/create_account', [AdminController::class, 'user_create_account'])->name('admin.user.create.account');
						Route::post('/store_account', [AdminController::class, 'user_store_account'])->name('admin.user.store.account');

					});

					Route::group(['prefix' => 'images'], function () {
					Route::get('/pending-images', [ImagesController::class, 'pending_images'])->name('pending.images');
					Route::get('/approved-images', [ImagesController::class, 'approved_images'])->name('approved.images');
					Route::get('/rejected-images', [ImagesController::class, 'rejected_images'])->name('rejected.images');
					//reject and approve
					Route::post('/reject_image', [ImagesController::class, 'reject_image'])->name('reject.image');
					Route::post('/approve_image', [ImagesController::class, 'approve_image'])->name('approve.image');
					//end
					});
					Route::group(['prefix' => 'accounts'], function () {
						Route::get('/new-accounts', [AccountsController::class, 'new_accounts'])->name('new.accounts');
						Route::get('/support', [AccountsController::class, 'support_staff'])->name('support.staff');
						Route::get('/image-quality-checker', [AccountsController::class, 'image_quality_checker'])->name('image.quality.checker');
						Route::get('/content-quality-controller', [AccountsController::class, 'content_quality_controller'])->name('content.quality.controller');
						Route::post('/assign_job', [AccountsController::class, 'assign_job'])->name('assign.job');
						Route::post('/remove_acc', [AccountsController::class, 'remove_acc'])->name('remove.acc');
						Route::get('/status_change', [AccountsController::class, 'status_change'])->name('status.change');

						Route::get('/create_account', [AdminController::class, 'create_account'])->name('admin.create.account');
						Route::post('/store_account', [AdminController::class, 'store_account'])->name('admin.store.account');

						});

						Route::group(['prefix' => 'tables'], function () {
							//languages
						Route::get('/languages', [TablesController::class, 'languages'])->name('tables.languages');
						Route::post('/languages_store', [TablesController::class, 'languages_store'])->name('tables.languages.store');
						Route::post('/languages_remove', [TablesController::class, 'languages_remove'])->name('tables.languages.remove');
						Route::post('/languages_update', [TablesController::class, 'languages_update'])->name('tables.languages.update');
						Route::get('/languages_status_update', [TablesController::class, 'languages_status_update'])->name('tables.languages.update.status');

						//papers
						Route::get('/papers', [TablesController::class, 'papers'])->name('tables.papers');
						Route::post('/papers_store', [TablesController::class, 'papers_store'])->name('tables.papers.store');
						Route::post('/papers_remove', [TablesController::class, 'papers_remove'])->name('tables.papers.remove');
						Route::post('/papers_update', [TablesController::class, 'papers_update'])->name('tables.papers.update');
						Route::get('/papers_status_update', [TablesController::class, 'papers_status_update'])->name('tables.papers.update.status');
						//end
						});
					});
				});
				//end
			//support

			Route::group(['middleware' => 'approved'], function () {

			Route::group(['middleware' => 'support'], function () {
	        Route::group(['prefix' => 'support'], function () {
						Route::get('/dashboard', [SupportController::class, 'dashboard'])->name('support.dashboard');
						Route::get('/my_account', [SupportController::class, 'my_account'])->name('support.my_account');
						Route::post('/profile-update', [SupportController::class, 'update_info'])->name('update.support-info');
			      Route::post('/profile-pic-update', [SupportController::class, 'upload_profile_pic'])->name('support.upload.profile.photo');
						Route::post('/reset-password', [SupportController::class, 'reset_password'])->name('support.reset-password');
						Route::group(['prefix' => 'tables'], function () {
							//languages
						Route::get('/languages', [SupportController::class, 'languages'])->name('support.tables.languages');
						Route::post('/languages_store', [SupportController::class, 'languages_store'])->name('support.tables.languages.store');
						Route::post('/languages_remove', [SupportController::class, 'languages_remove'])->name('support.tables.languages.remove');
						Route::post('/languages_update', [SupportController::class, 'languages_update'])->name('support.tables.languages.update');
						Route::get('/languages_status_update', [SupportController::class, 'languages_status_update'])->name('support.tables.languages.update.status');

						//papers
						Route::get('/papers', [SupportController::class, 'papers'])->name('support.tables.papers');
						Route::post('/papers_store', [SupportController::class, 'papers_store'])->name('support.tables.papers.store');
						Route::post('/papers_remove', [SupportController::class, 'papers_remove'])->name('support.tables.papers.remove');
						Route::post('/papers_update', [SupportController::class, 'papers_update'])->name('support.tables.papers.update');
						Route::get('/papers_status_update', [SupportController::class, 'papers_status_update'])->name('support.tables.papers.update.status');
						//end
						});

						Route::group(['prefix' => 'images'], function () {
							Route::get('/pending-images', [SupImagesController::class, 'pending_images'])->name('support.pending.images');
							Route::get('/approved-images', [SupImagesController::class, 'approved_images'])->name('support.approved.images');
							Route::get('/rejected-images', [SupImagesController::class, 'rejected_images'])->name('support.rejected.images');
							//reject and approve
							Route::post('/reject_image', [SupImagesController::class, 'reject_image'])->name('support.reject.image');
							Route::post('/approve_image', [SupImagesController::class, 'approve_image'])->name('support.approve.image');

							});
				});
			});
			//support ends

			//quality QualityChecker
			Route::group(['middleware' => 'quality_checker'], function () {
	        Route::group(['prefix' => 'quality_checker'], function () {
						Route::get('/dashboard', [QualityCheckerController::class, 'dashboard'])->name('quality_checker.dashboard');
						Route::get('/my_account', [QualityCheckerController::class, 'my_account'])->name('quality_checker.my_account');
						Route::post('/profile-update', [QualityCheckerController::class, 'update_info'])->name('update.quality_checker_info');
			      Route::post('/profile-pic-update', [QualityCheckerController::class, 'upload_profile_pic'])->name('quality_checker.upload.profile.photo');
						Route::post('/reset-password', [QualityCheckerController::class, 'reset_password'])->name('quality_checker.reset-password');

						Route::group(['prefix' => 'images'], function () {
							Route::get('/pending-images', [IQCImagesController::class, 'pending_images'])->name('quality_checker.pending.images');
							Route::get('/approved-images', [IQCImagesController::class, 'approved_images'])->name('quality_checker.approved.images');
							Route::get('/rejected-images', [IQCImagesController::class, 'rejected_images'])->name('quality_checker.rejected.images');
							//reject and approve
							Route::post('/reject_image', [IQCImagesController::class, 'reject_image'])->name('quality_checker.reject.image');
							Route::post('/approve_image', [IQCImagesController::class, 'approve_image'])->name('quality_checker.approve.image');

							});
				});
			});
			//ends

			//quality Qualityconterooler
			Route::group(['middleware' => 'quality_controller'], function () {
	        Route::group(['prefix' => 'quality_controller'], function () {
						Route::get('/dashboard', [QualityControlController::class, 'dashboard'])->name('quality_controller.dashboard');
						Route::get('/my_account', [QualityControlController::class, 'my_account'])->name('quality_controller.my_account');
						Route::post('/profile-update', [QualityControlController::class, 'update_info'])->name('update.quality_controller_info');
			      Route::post('/profile-pic-update', [QualityControlController::class, 'upload_profile_pic'])->name('quality_controller.upload.profile.photo');
						Route::post('/reset-password', [QualityControlController::class, 'reset_password'])->name('quality_controller.reset-password');

						Route::group(['prefix' => 'jobs'], function () {
							Route::get('/pending_jobs', [JobsController::class, 'pending_jobs'])->name('quality_controller.pending_jobs');
							Route::get('/approved_jobs', [JobsController::class, 'approved_jobs'])->name('quality_controller.approved_jobs');
							Route::get('/rejected_jobs', [JobsController::class, 'rejected_jobs'])->name('quality_controller.rejected_jobs');
							Route::get('/pending_job_view/{id}', [JobsController::class, 'pending_jobs_view'])->name('quality_controller.pending_jobs_view');
							Route::get('/approved_job_view/{id}', [JobsController::class, 'approved_jobs_view'])->name('quality_controller.approved_jobs_view');
							Route::get('/rejected_job_view/{id}', [JobsController::class, 'rejected_jobs_view'])->name('quality_controller.rejected_jobs_view');

							Route::post('/job_reject', [JobsController::class, 'job_reject'])->name('quality_controller.job_reject');
							Route::post('/job_approve', [JobsController::class, 'job_approve'])->name('quality_controller.job_approve');
							});
				});
			});
			//ends

	});

    Route::group(['prefix' => 'dashboards'], function () {
        Route::get('/social-media', [DashboardController::class, 'index'])->name('dashboards.index');
        Route::get('/business', [DashboardController::class, 'business'])->name('dashboards.business');
        Route::get('/performance', [DashboardController::class, 'performance'])->name('dashboards.performance');
        Route::get('/ecommerce', [DashboardController::class, 'ecommerce'])->name('dashboards.ecommerce');
        Route::get('/crm', [DashboardController::class, 'crm'])->name('dashboards.crm');
        Route::get('/sales', [DashboardController::class, 'sales'])->name('dashboards.sales');
    });
    Route::group(['prefix' => 'projects'], function () {
        Route::get('/index', [ProjectController::class, 'index'])->name('projects.index');
        Route::get('/project_table', [ProjectController::class, 'projectTable'])->name('projects.project_table');
        Route::get('/details', [ProjectController::class, 'details'])->name('projects.details');
        Route::get('/create', [ProjectController::class, 'create'])->name('projects.create');
    });
    Route::group(['prefix' => 'pages'], function () {
        Route::get('/profile-setting', [SocialAppController::class, 'profileSetting'])->name('pages.profileSetting');
        Route::get('/gallery', [PageController::class, 'gallery'])->name('pages.gallery');
        Route::get('/pricing', [PageController::class, 'pricing'])->name('pages.pricing');
        Route::get('/faq', [PageController::class, 'faq'])->name('pages.faq');
        Route::get('/search', [PageController::class, 'search'])->name('pages.search');
        Route::get('/changelog', [PageController::class, 'changelog'])->name('pages.changelog');
        Route::get('/kanban-board', [PageController::class, 'kanbanBoard'])->name('pages.kanbanBoard');
        Route::get('/file-manager', [PageController::class, 'fileManager'])->name('pages.fileManager');
        Route::get('/file-manager-list', [PageController::class, 'fileManagerList'])->name('pages.fileManagerList');
        Route::group(['prefix' => 'table'], function () {
            Route::get('/basic-table', [PageController::class, 'basicTable'])->name('pages.table.basicTable');
            Route::get('/data-table', [PageController::class, 'dataTable'])->name('pages.table.dataTable');
        });
        Route::get('/banner', [PageController::class, 'banner'])->name('pages.banner');
        Route::get('/testimonial', [PageController::class, 'testimonial'])->name('pages.testimonial');
        Route::get('/blank-page', [PageController::class, 'blankPage'])->name('pages.blankPage');
        Route::group(['prefix' => 'knowledgebase'], function () {
            Route::get('/base', [PageController::class, 'knowledgebase'])->name('pages.knowledgebase.base');
            Route::get('/all-article', [PageController::class, 'allArticle'])->name('pages.knowledgebase.allArticle');
            Route::get('/singale-article', [PageController::class, 'singaleArticle'])->name('pages.knowledgebase.singaleArticle');
        });
        Route::get('/support', [PageController::class, 'support'])->name('pages.support');
        Route::get('/coming-soon', [PageController::class, 'comingSoon'])->name('pages.comingSoon');
    });
    Route::group(['prefix' => 'applications'], function () {
        Route::get('calendar', [CalendarController::class, 'index'])->name('applications.calendar');
        Route::group(['prefix' => 'users'], function () {
            Route::get('/team', [UserController::class, 'index'])->name('applications.users.team');
            Route::get('/users-grid', [UserController::class, 'usersGrid'])->name('applications.users.usersGrid');
            Route::get('/users', [UserController::class, 'users'])->name('applications.users.users');
            Route::get('/users-list', [UserController::class, 'usersList'])->name('applications.users.usersList');
            Route::get('/users-group', [UserController::class, 'usersGroup'])->name('applications.users.usersGroup');
            Route::get('/add-users', [UserController::class, 'addUser'])->name('applications.users.addUser');
            Route::get('/users-datatable', [UserController::class, 'usersDatatable'])->name('applications.users.usersDatatable');
        });
        Route::get('chat', [ChatController::class, 'index'])->name('applications.chat');
        Route::get('note', [ChatController::class, 'note'])->name('applications.note');
        Route::get('email/inbox', [EmailController::class, 'index'])->name('applications.email');
        Route::get('email/read-email', [EmailController::class, 'readEmail'])->name('applications.readEmail');
        Route::get('contact/list', [ContactController::class, 'index'])->name('applications.contactList');
        Route::get('contact/grid', [ContactController::class, 'profile'])->name('applications.contactProfile');
        Route::get('contact/contact-create', [ContactController::class, 'contactCreate'])->name('applications.contactCreate');
        Route::group(['prefix' => 'ecommerce'], function () {
            Route::get('products', [EcommerceController::class, 'index'])->name('applications.ecommerce.products');
            Route::get('productList', [EcommerceController::class, 'productList'])->name('applications.ecommerce.productList');
            Route::get('product-details', [EcommerceController::class, 'productDetails'])->name('applications.ecommerce.productDetails');
            Route::get('add-product', [EcommerceController::class, 'addProduct'])->name('applications.ecommerce.addProduct');
            Route::get('edit-product', [EcommerceController::class, 'editProduct'])->name('applications.ecommerce.editProduct');
            Route::get('cart', [EcommerceController::class, 'cart'])->name('applications.ecommerce.cart');
            Route::get('checkout', [EcommerceController::class, 'checkout'])->name('applications.ecommerce.checkout');
            Route::get('shipping-address', [EcommerceController::class, 'shippingAddress'])->name('applications.ecommerce.shippingAddress');
            Route::get('checkout-payment', [EcommerceController::class, 'checkoutPayment'])->name('applications.ecommerce.checkoutPayment');
            Route::get('checkout-review', [EcommerceController::class, 'checkoutReview'])->name('applications.ecommerce.checkoutReview');
            Route::get('payment-status', [EcommerceController::class, 'paymentStatus'])->name('applications.ecommerce.paymentStatus');
            Route::get('orders', [EcommerceController::class, 'orders'])->name('applications.ecommerce.orders');
            Route::get('sellers', [EcommerceController::class, 'sellers'])->name('applications.ecommerce.sellers');
            Route::get('invoice', [EcommerceController::class, 'invoice'])->name('applications.ecommerce.invoice');
        });
        Route::get('social-app/profile', [SocialAppController::class, 'index'])->name('applications.profile');
        Route::get('todo', [ToDoController::class, 'index'])->name('applications.todo');
        Route::group(['prefix' => 'import-export'], function () {
            Route::get('import', [ImportExportController::class, 'index'])->name('applications.import');
            Route::get('export', [ImportExportController::class, 'export'])->name('applications.export');
        });
    });
    Route::group(['prefix' => 'firestore'], function () {
        Route::get('view-all', [FirestoreController::class, 'index'])->name('firestore.all');
        Route::get('add-new', [FirestoreController::class, 'addNew'])->name('firestore.addNew');
        Route::post('/create', [FirestoreController::class, 'store'])->name('firestore.store');
        Route::get('/edit/{id}', [FirestoreController::class, 'edit'])->name('firestore.edit');
        Route::post('/update/{id}', [FirestoreController::class, 'update'])->name('firestore.update');
        Route::get('/delete/{id}', [FirestoreController::class, 'destroy'])->name('firestore.delete');
    });
    Route::group(['prefix' => 'components'], function () {
        Route::get('alert', [ComponentController::class, 'index'])->name('components.alert');
        Route::get('avatar', [ComponentController::class, 'avatar'])->name('components.avatar');
        Route::get('badge', [ComponentController::class, 'badge'])->name('components.badge');
        Route::get('breadcrumbs', [ComponentController::class, 'breadcrumbs'])->name('components.breadcrumbs');
        Route::get('buttons', [ComponentController::class, 'buttons'])->name('components.buttons');
        Route::get('cards', [ComponentController::class, 'cards'])->name('components.cards');
        Route::get('carousel', [ComponentController::class, 'carousel'])->name('components.carousel');
        Route::get('checkbox', [ComponentController::class, 'checkbox'])->name('components.checkbox');
        Route::get('collapse', [ComponentController::class, 'collapse'])->name('components.collapse');
        Route::get('comments', [ComponentController::class, 'comments'])->name('components.comments');
        Route::get('dashboard-base', [ComponentController::class, 'dashboardBase'])->name('components.dashboardBase');
        Route::get('date-picker', [ComponentController::class, 'datePicker'])->name('components.datePicker');
        Route::get('drawer', [ComponentController::class, 'drawer'])->name('components.drawer');
        Route::get('drag-drop', [ComponentController::class, 'dragDrop'])->name('components.dragDrop');
        Route::get('dropdown', [ComponentController::class, 'dropdown'])->name('components.dropdown');
        Route::get('empty', [ComponentController::class, 'empty'])->name('components.empty');
        Route::get('grid', [ComponentController::class, 'grid'])->name('components.grid');
        Route::get('input', [ComponentController::class, 'input'])->name('components.input');
        Route::get('list', [ComponentController::class, 'list'])->name('components.list');
        Route::get('menu', [ComponentController::class, 'menu'])->name('components.menu');
        Route::get('message', [ComponentController::class, 'message'])->name('components.message');
        Route::get('modal', [ComponentController::class, 'modal'])->name('components.modal');
        Route::get('notifications', [ComponentController::class, 'notifications'])->name('components.notifications');
        Route::get('page-header', [ComponentController::class, 'pageHeader'])->name('components.pageHeader');
        Route::get('pagination', [ComponentController::class, 'pagination'])->name('components.pagination');
        Route::get('progressbar', [ComponentController::class, 'progressbar'])->name('components.progressbar');
        Route::get('radio', [ComponentController::class, 'radio'])->name('components.radio');
        Route::get('rate', [ComponentController::class, 'rate'])->name('components.rate');
        Route::get('result', [ComponentController::class, 'result'])->name('components.result');
        Route::get('select', [ComponentController::class, 'select'])->name('components.select');
        Route::get('skeleton', [ComponentController::class, 'skeleton'])->name('components.skeleton');
        Route::get('slider', [ComponentController::class, 'slider'])->name('components.slider');
        Route::get('spin', [ComponentController::class, 'spin'])->name('components.spin');
        Route::get('statistics', [ComponentController::class, 'statistics'])->name('components.statistics');
        Route::get('steps', [ComponentController::class, 'steps'])->name('components.steps');
        Route::get('switch', [ComponentController::class, 'switch'])->name('components.switch');
        Route::get('tab', [ComponentController::class, 'tab'])->name('components.tab');
        Route::get('tag', [ComponentController::class, 'tag'])->name('components.tag');
        Route::get('timeline', [ComponentController::class, 'timeline'])->name('components.timeline');
        Route::get('time-picker', [ComponentController::class, 'timePicker'])->name('components.timePicker');
        Route::get('uploads', [ComponentController::class, 'uploads'])->name('components.uploads');
    });
    Route::group(['prefix' => 'widget'], function () {
        Route::get('charts', [WidgetController::class, 'index'])->name('widget.charts');
        Route::get('mixed', [WidgetController::class, 'mixed'])->name('widget.mixed');
        Route::get('card', [WidgetController::class, 'card'])->name('widget.card');
    });
    Route::group(['prefix' => 'wizard'], function () {
        Route::get('wizard-one', [WizardController::class, 'index'])->name('wizard.wizardOne');
        Route::get('checkout2-wizard-one', [WizardController::class, 'checkout2WizardOne'])->name('wizard.checkout2WizardOne');
        Route::get('checkout-payment-wizard6', [WizardController::class, 'checkoutPaymentWizard6'])->name('wizard.checkoutPaymentWizard6');
        Route::get('checkout-review-wizard6', [WizardController::class, 'checkoutReviewWizard6'])->name('wizard.checkoutReviewWizard6');
        Route::get('payment-status-wizard6', [WizardController::class, 'paymentStatusWizard6'])->name('wizard.paymentStatusWizard6');
        Route::get('wizard-two', [WizardController::class, 'wizardTwo'])->name('wizard.wizardTwo');
        Route::get('checkout2-wizard7', [WizardController::class, 'checkout2Wizard7'])->name('wizard.checkout2Wizard7');
        Route::get('checkout-payment-wizard7', [WizardController::class, 'checkoutPaymentWizard7'])->name('wizard.checkoutPaymentWizard7');
        Route::get('checkout-review-wizard7', [WizardController::class, 'checkoutReviewWizard7'])->name('wizard.checkoutReviewWizard7');
        Route::get('payment-status-wizard7', [WizardController::class, 'paymentStatusWizard7'])->name('wizard.paymentStatusWizard7');
        Route::get('wizard-three', [WizardController::class, 'wizardThree'])->name('wizard.wizardThree');
        Route::get('checkout2-wizard8', [WizardController::class, 'checkout2Wizard8'])->name('wizard.checkout2Wizard8');
        Route::get('checkout-payment-wizard8', [WizardController::class, 'checkoutPaymentWizard8'])->name('wizard.checkoutPaymentWizard8');
        Route::get('checkout-review-wizard8', [WizardController::class, 'checkoutReviewWizard8'])->name('wizard.checkoutReviewWizard8');
        Route::get('payment-status-wizard8', [WizardController::class, 'paymentStatusWizard8'])->name('wizard.paymentStatusWizard8');
        Route::get('wizard-four', [WizardController::class, 'wizardFour'])->name('wizard.wizardFour');
        Route::get('checkout2-wizard9', [WizardController::class, 'checkout2Wizard9'])->name('wizard.checkout2Wizard9');
        Route::get('checkout-payment-wizard9', [WizardController::class, 'checkoutPaymentWizard9'])->name('wizard.checkoutPaymentWizard9');
        Route::get('checkout-review-wizard9', [WizardController::class, 'checkoutReviewWizard9'])->name('wizard.checkoutReviewWizard9');
        Route::get('payment-status-wizard9', [WizardController::class, 'paymentStatusWizard9'])->name('wizard.paymentStatusWizard9');
        Route::get('wizard-five', [WizardController::class, 'wizardFive'])->name('wizard.wizardFive');
        Route::get('checkout2-wizard10', [WizardController::class, 'checkout2Wizard10'])->name('wizard.checkout2Wizard10');
        Route::get('checkout-payment-wizard10', [WizardController::class, 'checkoutPaymentWizard10'])->name('wizard.checkoutPaymentWizard10');
        Route::get('checkout-review-wizard10', [WizardController::class, 'checkoutReviewWizard10'])->name('wizard.checkoutReviewWizard10');
        Route::get('payment-status-wizard10', [WizardController::class, 'paymentStatusWizard10'])->name('wizard.paymentStatusWizard10');
    });
    Route::group(['prefix' => 'icons'], function () {
        Route::get('father-icons', [IconController::class, 'index'])->name('icons.fatherIcons');
        Route::get('font-awesome', [IconController::class, 'fontAwesome'])->name('icons.fontAwesome');
        Route::get('line-awesome', [IconController::class, 'lineAwesome'])->name('icons.lineAwesome');
    });
    Route::group(['prefix' => 'charts'], function () {
        Route::get('chart', [ChartController::class, 'index'])->name('charts.index');
        Route::get('google-chart', [ChartController::class, 'googleChart'])->name('charts.googleChart');
        Route::get('peity-chart', [ChartController::class, 'peityChart'])->name('charts.peityChart');
    });
    Route::group(['prefix' => 'forms'], function () {
        Route::get('basic', [FormController::class, 'index'])->name('forms.index');
        Route::get('layouts', [FormController::class, 'layouts'])->name('forms.layouts');
        Route::get('elements', [FormController::class, 'elements'])->name('forms.elements');
        Route::get('components', [FormController::class, 'components'])->name('forms.components');
        Route::get('validations', [FormController::class, 'validations'])->name('forms.validations');
    });
    Route::group(['prefix' => 'maps'], function () {
        Route::get('google-map', [MapController::class, 'index'])->name('maps.index');
        Route::get('leaflet-map', [MapController::class, 'leafletMap'])->name('maps.leafletMap');
        Route::get('vector-map', [MapController::class, 'vectorMap'])->name('maps.vectorMap');
    });
});
Route::get('404', [ErrorController::class, 'index'])->name('error');
Route::get('maintenance', [ErrorController::class, 'maintenance'])->name('maintenance');
// Facebook login routes
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);
// Google login routes
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
// Layout set routes
Route::get('setlayout/{layout}', function ($layout) {
    if (in_array($layout, \Config::get('app.layouts'))) {
        session(['layout' => $layout]);
    }
    return redirect()->back();
});
Auth::routes();
