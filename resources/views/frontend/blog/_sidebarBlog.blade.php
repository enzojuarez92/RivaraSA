                    <!--  start blog right-->
                    <div class="col-lg-3 col-md-12">
                        <div class="side-bar">

                            <div class="widget">
                                <div class="widget-title">
                                    <h6>@lang('home.blog-recent')</h6>
                                </div>
                                <ul>
                                    @foreach ($ultimos as $u)
                                    <li><a href="{{ $u->link() }}">{{ $u->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget">
                                <div class="widget-title">
                                    <h6>@lang('home.blog-tags')</h6>
                                </div>
                                <ul>
                                  @foreach ($tags as $t)
                                  <li><a href="{{ $t->link() }}">{{ $t->name }}</a></li>
                                  @endforeach
                                </ul>
                            </div>

                            <div class="widget">
                                <div class="widget-title">
                                    <h6>@lang('home.blog-follow')</h6>
                                </div>
                                <ul class="social-listing">
                                    @if (FACEBOOK != '')
                                        <li><a target="_blank" href="{{FACEBOOK}}"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if (TWITTER != '')
                                        <li><a target="_blank" href="{{TWITTER}}"><i class="fab fa-twitter"></i></a></li>
                                    @endif
                                    @if (INSTAGRAM != '')
                                        <li><a target="_blank" href="{{INSTAGRAM}}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                    @if (YOUTUBE != '')
                                        <li><a target="_blank" href="{{YOUTUBE}}"><i class="fab fa-youtube"></i></a></li>
                                    @endif
                                    @if (LINKEDIN != '')
                                        <li><a target="_blank" href="{{LINKEDIN}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!--  end blog right-->
