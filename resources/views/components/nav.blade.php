<nav class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-inverse sw" role="navigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="hidden-sm-down">
        <a class="navbar-brand font" href="{{ url()->current() }}">{{ $brand }}</a>
    </div>

    <div class="hidden-md-up">
        <form class="form-inline">
            <button class="btn btn-primary font w-4" type="button" role="button" data-toggle="modal" data-target="#navModal">{{ $ctr }}</button>
        </form>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{ $menu }}
            <div class="hidden-sm-down">
                <form class="form-inline">
                    <button class="btn btn-primary font w-4" type="button" role="button" data-toggle="modal" data-target="#navModal">{{ $ctr }}</button>
                </form>
            </div>
        </ul>
    </div>
</nav>

<div class="modal fade" id="navModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                {{ $modal }}
            </div>
        </div>
    </div>
</div>
