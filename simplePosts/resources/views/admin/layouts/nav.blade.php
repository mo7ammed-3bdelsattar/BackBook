
<nav class=" navbar navbar-expand-lg navbar-light bg-primary shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="navbar-brand">
            <a class="fw-bold text-white m-0 text-decoration-none h3" href="{{route('home.index')}}">MSA</a>
        </div>

        <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="collapse navbar-collapse justify-content-between " id="navbarSupportedContent">
                    <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                        <a type="button" class="btn text-light navigation--button" href="{{route('home.index')}}">Posts</a>
                        <a type="button" class="btn text-light navigation--button" href="{{route('create.index')}}">Create</a>
                        <a type="button" class="btn text-light navigation--button" href="{{route('edit.index')}}">Edit</a>
                    </div>
                </div>
        </div>
    </div>
</nav>
