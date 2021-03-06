<div id="loading">
    <div class="svg-icon-loader">
        <img src="https://agileui.com/demo/delight/assets/images/svg-loaders/bars.svg" width="40" alt="">
    </div>
</div>
<style type="text/css">
    html,
    body {
        height: 100%;
        background: #fff;
        overflow: hidden;
    }
</style>
<script type="text/javascript" src="https://agileui.com/demo/delight/assets/widgets/wow/wow.js"></script>
<script type="text/javascript">/* WOW animations */

    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();</script>
<img src="https://agileui.com/demo/delight/assets/image-resources/blurred-bg/blurred-bg-3.jpg" class="login-img wow fadeIn" alt="">
<div class="center-vertical">
    <div class="center-content">
        <div class="col-md-3 center-margin">
            <form method="post" action="{{route('admin.register.submit')}}">
                @csrf
                <div class="content-box wow bounceInDown modal-content">
                    <h3 class="content-box-header content-box-header-alt bg-default">
                        <span class="icon-separator">
                            <i class="glyph-icon icon-cog"></i>
                        </span>
                        <span class="header-wrapper"> Admin area
                                <small>Login to your account.</small>
                        </span>
                        <span class="header-buttons">
                            <a href="{{ route('admin.register') }}" class="btn btn-sm btn-primary" title="">Sign In</a>
                        </span>
                    </h3>
                    <div class="content-box-wrapper">

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Full Name">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-user"></i>
                                </span>
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-envelope-o"></i>
                                </span>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-unlock-alt"></i>
                                </span>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Re-Type Password">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-unlock-alt"></i>
                                </span>
                            </div>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
