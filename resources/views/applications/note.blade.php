@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="note-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Note</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">
                                        <div class="form-group mb-0">
                                            <div class="input-container icon-left position-relative">
                                                    <span class="input-icon icon-left">
                                                        <span data-feather="calendar"></span>
                                                    </span>
                                                <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                                <span class="input-icon icon-right">
                                                        <span data-feather="chevron-down"></span>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <span class="dropdown-item">Export With</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-print"></i> Printer</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-pdf"></i> PDF</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-text"></i> Google Sheets</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-csv"></i> CSV</a>
                                        </div>
                                    </div>
                                    <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-share"></i> Share
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                            <span class="dropdown-item">Share Link</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-facebook"></i> Facebook</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-twitter"></i> Twitter</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-google"></i> Google</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-feed"></i> Feed</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-instagram"></i> Instagram</a>
                                        </div>
                                    </div>
                                    <div class="action-btn">
                                        <a href="" class="btn btn-sm btn-primary btn-add">
                                            <i class="la la-plus"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="note-contents">
                                <div class="note-sibebar-wrapper mb-30">
                                    <div class="note-sidebar">
                                        <div class="card border-0">
                                            <div class="card-body px-15 pt-30">
                                                <div class="px-3">
                                                    <a href="#" class="btn btn-primary btn-default btn-rounded btn-block" data-toggle="modal" data-target="#noteModal"> <span data-feather="plus"></span>
                                                        Add Note</a>
                                                </div>
                                                <div class="note-types">
                                                    <ul class="list-unstyled">
                                                        <li><a href="" class="active"><span data-feather="edit"></span> All</a></li>
                                                        <li><a href=""><span data-feather="star"></span> Favorite</a></li>
                                                    </ul>
                                                </div>
                                                <div class="note-labels">
                                                    <p><span data-feather="tag"></span> Labels</p>
                                                    <ul class="list-unstyled">
                                                        <li><a class="label-personal" href=""><span></span> Personal</a></li>
                                                        <li><a class="label-work" href=""><span></span> Work</a></li>
                                                        <li><a class="label-social" href=""><span></span> Social</a></li>
                                                        <li><a class="label-important" href=""><span></span> Important</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .col-lg-2 -->
                                <div class="note-grid-wrapper mb-30">
                                    <div class="notes-wrapper">
                                        <div class="note-grid">
                                            <div class="note-single">
                                                <div class="note-card note-important">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <h4 class="note-title">Landing Page Design <span class="note-status"></span></h4>
                                                            <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                            <div class="note-action">
                                                                <div class="note-action__left">
                                                                    <a href="#" class=""><span data-feather="star"></span></a>
                                                                    <a href="#"><span data-feather="trash-2"></span></a>
                                                                </div>
                                                                <div class="note-action__right">
                                                                    <div class="label-dropdown dropdown dropdown-hover">
                                                                        <a class="btn-link" href="#"><span data-feather="more-vertical"></span></a>
                                                                        <div class="dropdown-default">
                                                                            <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                            <a class="nl-work dropdown-item" href="#">Work</a>
                                                                            <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                            <a class="nl-important dropdown-item" href="#">Important</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note-single">
                                                <div class="note-card note-social">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <h4 class="note-title">Socail Human Being <span class="note-status"></span></h4>
                                                            <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                            <div class="note-action">
                                                                <div class="note-action__left">
                                                                    <a href="#" class=""><span data-feather="star"></span></a>
                                                                    <a href="#"><span data-feather="trash-2"></span></a>
                                                                </div>
                                                                <div class="note-action__right">
                                                                    <div class="label-dropdown dropdown dropdown-hover">
                                                                        <a class="btn-link" href="#"><span data-feather="more-vertical"></span></a>
                                                                        <div class="dropdown-default">
                                                                            <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                            <a class="nl-work dropdown-item" href="#">Work</a>
                                                                            <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                            <a class="nl-important dropdown-item" href="#">Important</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note-single">
                                                <div class="note-card note-personal">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <h4 class="note-title">Landing Page Development <span class="note-status"></span></h4>
                                                            <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                            <div class="note-action">
                                                                <div class="note-action__left">
                                                                    <a href="#" class="favorite"><span data-feather="star"></span></a>
                                                                    <a href="#"><span data-feather="trash-2"></span></a>
                                                                </div>
                                                                <div class="note-action__right">
                                                                    <div class="label-dropdown dropdown dropdown-hover">
                                                                        <a class="btn-link" href="#"><span data-feather="more-vertical"></span></a>
                                                                        <div class="dropdown-default">
                                                                            <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                            <a class="nl-work dropdown-item" href="#">Work</a>
                                                                            <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                            <a class="nl-important dropdown-item" href="#">Important</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note-single">
                                                <div class="note-card note-default">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <h4 class="note-title">Shop Page Design <span class="note-status"></span></h4>
                                                            <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                            <div class="note-action">
                                                                <div class="note-action__left">
                                                                    <a href="#" class="favorite"><span data-feather="star"></span></a>
                                                                    <a href="#"><span data-feather="trash-2"></span></a>
                                                                </div>
                                                                <div class="note-action__right">
                                                                    <div class="label-dropdown dropdown dropdown-hover">
                                                                        <a class="btn-link" href="#"><span data-feather="more-vertical"></span></a>
                                                                        <div class="dropdown-default">
                                                                            <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                            <a class="nl-work dropdown-item" href="#">Work</a>
                                                                            <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                            <a class="nl-important dropdown-item" href="#">Important</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note-single">
                                                <div class="note-card note-work">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <h4 class="note-title">Plugin Development <span class="note-status"></span></h4>
                                                            <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                            <div class="note-action">
                                                                <div class="note-action__left">
                                                                    <a href="#" class="favorite"><span data-feather="star"></span></a>
                                                                    <a href="#"><span data-feather="trash-2"></span></a>
                                                                </div>
                                                                <div class="note-action__right">
                                                                    <div class="label-dropdown dropdown dropdown-hover">
                                                                        <a class="btn-link" href="#"><span data-feather="more-vertical"></span></a>
                                                                        <div class="dropdown-default">
                                                                            <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                            <a class="nl-work dropdown-item" href="#">Work</a>
                                                                            <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                            <a class="nl-important dropdown-item" href="#">Important</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note-single">
                                                <div class="note-card note-default">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <h4 class="note-title">Theme Development <span class="note-status"></span></h4>
                                                            <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                            <div class="note-action">
                                                                <div class="note-action__left">
                                                                    <a href="#" class=""><span data-feather="star"></span></a>
                                                                    <a href="#"><span data-feather="trash-2"></span></a>
                                                                </div>
                                                                <div class="note-action__right">
                                                                    <div class="label-dropdown dropdown dropdown-hover">
                                                                        <a class="btn-link" href="#"><span data-feather="more-vertical"></span></a>
                                                                        <div class="dropdown-default">
                                                                            <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                            <a class="nl-work dropdown-item" href="#">Work</a>
                                                                            <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                            <a class="nl-important dropdown-item" href="#">Important</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note-single">
                                                <div class="note-card note-important">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <h4 class="note-title">Improve Writing Skill <span class="note-status"></span></h4>
                                                            <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                            <div class="note-action">
                                                                <div class="note-action__left">
                                                                    <a href="#" class=""><span data-feather="star"></span></a>
                                                                    <a href="#"><span data-feather="trash-2"></span></a>
                                                                </div>
                                                                <div class="note-action__right">
                                                                    <div class="label-dropdown dropdown dropdown-hover">
                                                                        <a class="btn-link" href="#"><span data-feather="more-vertical"></span></a>
                                                                        <div class="dropdown-default">
                                                                            <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                            <a class="nl-work dropdown-item" href="#">Work</a>
                                                                            <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                            <a class="nl-important dropdown-item" href="#">Important</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note-single">
                                                <div class="note-card note-social">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <h4 class="note-title">Keep Social Distance <span class="note-status"></span></h4>
                                                            <p class="note-excerpt">Lorem Ipsum is simply dummy text of the printing</p>
                                                            <div class="note-action">
                                                                <div class="note-action__left">
                                                                    <a href="#" class=""><span data-feather="star"></span></a>
                                                                    <a href="#"><span data-feather="trash-2"></span></a>
                                                                </div>
                                                                <div class="note-action__right">
                                                                    <div class="label-dropdown dropdown dropdown-hover">
                                                                        <a class="btn-link" href="#"><span data-feather="more-vertical"></span></a>
                                                                        <div class="dropdown-default">
                                                                            <a class="nl-personal dropdown-item" href="#">Personal</a>
                                                                            <a class="nl-work dropdown-item" href="#">Work</a>
                                                                            <a class="nl-social dropdown-item" href="#">Socail</a>
                                                                            <a class="nl-important dropdown-item" href="#">Important</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- ends: .col-lg-10 -->
                            </div>
                        </div><!-- ends: .col-lg-12 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .atbd-page-content -->
        <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <form action="/">
                            <div class="form-group mb-25">
                                <label for="text">Title</label>
                                <input type="text" class="form-control" placeholder="Note Title" id="text">
                            </div>
                            <div class="form-group mb-25">
                                <label for="textarea">Description</label>
                                <textarea id="textarea" class="form-control" placeholder="Note Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="n-labels">Note Label</label>
                                <select class="form-control" id="n-labels">
                                    <option>Social</option>
                                    <option>Work</option>
                                    <option>Personal</option>
                                    <option>Important</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
