@extends('layouts.app')
@section('title', 'Thông tin chung')
@section('content')
    <main id="main" class="">
        <div id="content" role="main" class="content-area">
            <section class="section">
                <div class="section-content relative">
                    <div class="row align-center">
                        <div class="col medium-8 small-12 large-8">
                            <div class="col-inner" style="padding:0px 20px 0px 20px;margin:50px 0px 0px 0px;">
                                <h1><span style="color: #105458; font-size: 110%;">{{$post['name']}}</span>
                                </h1>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        Thời gian: {{$post->getDate()}}
                                    </span>
                                </div>
                                <div class="avatar">
                                    <img src="{{$post['avatar']}}" alt="{{$post['name']}}">
                                </div>
                                <div class="content text-justify" style="margin-top: 20px; text-align: justify">
                                    {!! $post['content'] !!}
                                </div>

                            </div>
                        </div>
                        <div class="col medium-4 small-12 large-4">
                            <section id="media_image-2" class="widget widget_media_image"><img width="317" height="882" src="https://thenine9phamvandong.com.vn/wp-content/uploads/2021/04/Rectangle-31.png" class="image wp-image-57  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://thenine9phamvandong.com.vn/wp-content/uploads/2021/04/Rectangle-31.png 317w, https://thenine9phamvandong.com.vn/wp-content/uploads/2021/04/Rectangle-31-108x300.png 108w" sizes="(max-width: 317px) 100vw, 317px"></section>
                        </div>
                    </div>
                </div><!-- .section-content -->


                <style scope="scope">
                    .scroll-to-bullets{
                        display: none;
                    }
                    .entry-meta {
                        margin-bottom: 15px;
                        padding: 5px;
                        background: #eee;
                        border-radius: 3px;
                        font-size: 12px;
                        font-style: italic;
                    }
                </style>
            </section>
            <section class="section sec_tienich" id="section_653996029">
                <div class="bg section-bg fill bg-fill  ">


                </div><!-- .section-bg -->

                <div class="section-content relative">
                <span class="scroll-to" data-label="Scroll to: #tien-ich" data-bullet="true" data-link="#tien-ich"
                      data-title="Tien ich">
                    <a name="tien-ich"></a></span>
                    <div class="gap-element" style="display:block; height:auto; padding-top:60px"
                         class="clearfix"></div>
                    <div class="row" id="row-1029960896">
                        <div class="col small-12 large-12">
                            <div class="col-inner text-center">
                                <h1><span style="font-size: 130%;">Bài viết liên quan</span></h1>
                                <div
                                    class="row large-columns-4 medium-columns- small-columns-2 row-full-width slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                    data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : true, "draggable": true,}'>
                                    @foreach($relates as $ti)
                                        <div class="gallery-col col has-shadow">
                                            <div class="col-inner">
                                                <a href="{{route('detail', $ti['slug'])}}"
                                                   class="plain">
                                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image">
                                                            <div class="image-zoom image-cover"
                                                                 style="padding-top:56.25%;">
                                                                <img width="1920" height="815" src="{{$ti['avatar']}}"
                                                                     class="attachment-original size-original wp-post-image"
                                                                     alt="" sizes="(max-width: 1920px) 100vw, 1920px">
                                                            </div>
                                                        </div><!-- .box-image -->
                                                        <div class="box-text text-center">
                                                            <div class="box-text-inner blog-post-inner">


                                                                <h5 class="post-title is-large ">{{$ti['name']}}</h5>
                                                                <div class="is-divider"></div>
                                                                <p class="from_the_blog_excerpt ">{{$ti['description']}}</p>

                                                                <button
                                                                    href="{{route('detail', $ti['slug'])}}"
                                                                    class="button  is-outline is-small mb-0">
                                                                    Chi tiết
                                                                </button>


                                                            </div><!-- .box-text-inner -->
                                                        </div><!-- .box-text -->
                                                    </div><!-- .box -->
                                                </a><!-- .link -->
                                            </div>
                                        </div><!-- .col -->
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="gap-element" style="display:block; height:auto; padding-top:20px"
                         class="clearfix"></div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_653996029 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }

                    #section_653996029 .section-bg.bg-loaded {
                        background-image: url(wp-content/uploads/2018/12/bg8934.jpg);
                    }
                </style>
            </section>
        </div>
    </main><!-- #main -->
@endsection
