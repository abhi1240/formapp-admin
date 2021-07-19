@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Comment</h4>
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
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Basic comment</h6>
                            </div>
                            <div class="card-body pb-10">
                                <div class="atbd-comment-box media">
                                    <div class="atbd-comment-box__author">
                                        <figure>
                                            <img src="{{ asset('img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                        </figure>
                                    </div><!-- ends: .atbd-comment-box__author -->
                                    <div class="atbd-comment-box__content media-body">
                                        <div class="comment-content-inner cci">
                                            <span class="cci__author-info">David</span>
                                            <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                efficiently.</p>
                                            <div class="cci__comment-actions">
                                                <a href="#" class="btn-like">
                                                    <span data-feather="thumbs-up"></span>
                                                    <span class="line-count">0</span>
                                                </a>
                                                <a href="#" class="btn-dislike">
                                                    <span data-feather="thumbs-down"></span>
                                                    <span class="line-count">0</span>
                                                </a>
                                                <a href="#" class="btn-reply">
                                                    <span>Reply</span>
                                                </a>
                                            </div><!-- ends: .cci__comment-actions -->
                                        </div>
                                    </div><!-- ends: .atbd-comment-box__content -->
                                </div><!-- ends: .atbd-comment-box -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Usage with list</h6>
                            </div>
                            <div class="card-body">
                                <div class="comment-list">
                                    <div class="comment-list__title">
                                        <h6>Reply To</h6>
                                    </div>
                                    <ul class="comment-list__content">
                                        <li class="mb-20">
                                            <div class="atbd-comment-box media">
                                                <div class="atbd-comment-box__author">
                                                    <figure>
                                                        <img src="{{ asset('img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                    </figure>
                                                </div><!-- ends: .atbd-comment-box__author -->
                                                <div class="atbd-comment-box__content media-body">
                                                    <div class="comment-content-inner cci">
                                                        <span class="cci__author-info">David</span>
                                                        <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                            design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                            efficiently.</p>
                                                        <div class="cci__comment-actions">
                                                            <a href="#" class="btn-like">
                                                                <span data-feather="thumbs-up"></span>
                                                                <span class="line-count">0</span>
                                                            </a>
                                                            <a href="#" class="btn-dislike">
                                                                <span data-feather="thumbs-down"></span>
                                                                <span class="line-count">0</span>
                                                            </a>
                                                            <a href="#" class="btn-reply">
                                                                <span>Reply</span>
                                                            </a>
                                                        </div><!-- ends: .cci__comment-actions -->
                                                    </div>
                                                </div><!-- ends: .atbd-comment-box__content -->
                                            </div><!-- ends: .atbd-comment-box -->
                                        </li>
                                        <li>
                                            <div class="atbd-comment-box media">
                                                <div class="atbd-comment-box__author">
                                                    <figure>
                                                        <img src="{{ asset('img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                    </figure>
                                                </div><!-- ends: .atbd-comment-box__author -->
                                                <div class="atbd-comment-box__content media-body">
                                                    <div class="comment-content-inner cci">
                                                        <span class="cci__author-info">David</span>
                                                        <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                            design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                            efficiently.</p>
                                                        <div class="cci__comment-actions">
                                                            <a href="#" class="btn-like">
                                                                <span data-feather="thumbs-up"></span>
                                                                <span class="line-count">0</span>
                                                            </a>
                                                            <a href="#" class="btn-dislike">
                                                                <span data-feather="thumbs-down"></span>
                                                                <span class="line-count">0</span>
                                                            </a>
                                                            <a href="#" class="btn-reply">
                                                                <span>Reply</span>
                                                            </a>
                                                        </div><!-- ends: .cci__comment-actions -->
                                                    </div>
                                                </div><!-- ends: .atbd-comment-box__content -->
                                            </div><!-- ends: .atbd-comment-box -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Nested comments</h6>
                            </div>
                            <div class="card-body">
                                <div class="comment-list">
                                    <div class="comment-list__title">
                                        <h6>Reply To</h6>
                                    </div>
                                    <ul class="comment-list__ul">
                                        <li class="mb-20">
                                            <div class="atbd-comment-box media">
                                                <div class="atbd-comment-box__author">
                                                    <figure>
                                                        <img src="{{ asset('img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                    </figure>
                                                </div><!-- ends: .atbd-comment-box__author -->
                                                <div class="atbd-comment-box__content media-body">
                                                    <div class="comment-content-inner cci">
                                                        <span class="cci__author-info">David</span>
                                                        <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                            design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                            efficiently.</p>
                                                        <div class="cci__comment-actions">
                                                            <a href="#" class="btn-reply">
                                                                <span>Reply</span>
                                                            </a>
                                                        </div><!-- ends: .cci__comment-actions -->
                                                    </div>
                                                </div><!-- ends: .atbd-comment-box__content -->
                                            </div><!-- ends: .atbd-comment-box -->
                                        </li>
                                        <li>
                                            <div class="atbd-comment-box media">
                                                <div class="atbd-comment-box__author">
                                                    <figure>
                                                        <img src="{{ asset('img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                    </figure>
                                                </div><!-- ends: .atbd-comment-box__author -->
                                                <div class="atbd-comment-box__content media-body">
                                                    <div class="comment-content-inner cci">
                                                        <span class="cci__author-info">David</span>
                                                        <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                            design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                            efficiently.</p>
                                                        <div class="cci__comment-actions">
                                                            <a href="#" class="btn-reply">
                                                                <span>Reply</span>
                                                            </a>
                                                        </div><!-- ends: .cci__comment-actions -->
                                                    </div>
                                                </div><!-- ends: .atbd-comment-box__content -->
                                            </div><!-- ends: .atbd-comment-box -->
                                            <ul class="comment-list__ul">
                                                <li class="mt-4">
                                                    <div class="atbd-comment-box media">
                                                        <div class="atbd-comment-box__author">
                                                            <figure>
                                                                <img src="{{ asset('img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                            </figure>
                                                        </div><!-- ends: .atbd-comment-box__author -->
                                                        <div class="atbd-comment-box__content media-body">
                                                            <div class="comment-content-inner cci">
                                                                <span class="cci__author-info">David</span>
                                                                <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                                    design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                                    efficiently.</p>
                                                                <div class="cci__comment-actions">
                                                                    <a href="#" class="btn-reply">
                                                                        <span>Reply</span>
                                                                    </a>
                                                                </div><!-- ends: .cci__comment-actions -->
                                                            </div>
                                                        </div><!-- ends: .atbd-comment-box__content -->
                                                    </div><!-- ends: .atbd-comment-box -->
                                                    <ul class="comment-list__ul">
                                                        <li class="mb-20 mt-4">
                                                            <div class="atbd-comment-box media">
                                                                <div class="atbd-comment-box__author">
                                                                    <figure>
                                                                        <img src="{{ asset('img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                                    </figure>
                                                                </div><!-- ends: .atbd-comment-box__author -->
                                                                <div class="atbd-comment-box__content media-body">
                                                                    <div class="comment-content-inner cci">
                                                                        <span class="cci__author-info">David</span>
                                                                        <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                                            design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                                            efficiently.</p>
                                                                        <div class="cci__comment-actions">
                                                                            <a href="#" class="btn-reply">
                                                                                <span>Reply</span>
                                                                            </a>
                                                                        </div><!-- ends: .cci__comment-actions -->
                                                                    </div>
                                                                </div><!-- ends: .atbd-comment-box__content -->
                                                            </div><!-- ends: .atbd-comment-box -->
                                                        </li>
                                                        <li>
                                                            <div class="atbd-comment-box media">
                                                                <div class="atbd-comment-box__author">
                                                                    <figure>
                                                                        <img src="{{ asset('img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                                                    </figure>
                                                                </div><!-- ends: .atbd-comment-box__author -->
                                                                <div class="atbd-comment-box__content media-body">
                                                                    <div class="comment-content-inner cci">
                                                                        <span class="cci__author-info">David</span>
                                                                        <p class="cci__comment-text">We supply a series of design principles, practical patterns and high quality
                                                                            design resources (Sketch and Axure), to help people create their product prototypes beautifully and
                                                                            efficiently.</p>
                                                                        <div class="cci__comment-actions">
                                                                            <a href="#" class="btn-reply">
                                                                                <span>Reply</span>
                                                                            </a>
                                                                        </div><!-- ends: .cci__comment-actions -->
                                                                    </div>
                                                                </div><!-- ends: .atbd-comment-box__content -->
                                                            </div><!-- ends: .atbd-comment-box -->
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Basic comment</h6>
                            </div>
                            <div class="card-body pb-10">
                                <div class="reply-editor media">
                                    <div class="reply-editor__author">
                                        <img src="{{ asset('img/author/1.jpg') }}" class="bg-opacity-primary d-flex" alt="Reply Editor Author">
                                    </div>
                                    <!-- ends: .reply-editor__author -->
                                    <div class="reply-editor__form media-body">
                                        <form action="$">
                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                    <textarea name="reply-text" class="form-control mb-4"></textarea>
                                                    <button class="btn btn-primary btn-lg btn-squared btn-shadow-primary fw-400">Add Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- ends: .reply-editor__form -->
                                </div>
                                <!-- ends: .reply-editor -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-12 -->
                </div>
            </div>
        </div>
        <!-- ends: .atbd-page-content -->
    </div>
@endsection
