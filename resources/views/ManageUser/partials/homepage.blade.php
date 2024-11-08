<div class="d-flex justify-content-between">
    <!-- dashboard content student -->
    @can(abilities: 'student')
    <div class="card" style="width: 15rem; margin-bottom:30px">
        <img src="asset/photo/subject1.jpg" class="card-img-top" alt="grammar_in_context">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-1">
                <small class="text-muted">TSLB1104</small>
                <small class="text-muted">Unit: A2</small>
            </div>
            <h5 class="card-title" style="text-align: center; margin-bottom: 10px; margin-top: 10px;">Grammar in
                Context</h5>
            <a href="#" class="btn btn-dark"
                style="display: flex; justify-content: center; align-items: center; width: 13rem; font-size: 8px;">
                Go to Subject
            </a>
        </div>
    </div>
    @endcan

    <!-- dashboard content lecturer -->
    @can(abilities: 'lecturer')
    <div class="card" style="width: 15rem; margin-bottom:30px">
        <img src="asset/photo/subject1.jpg" class="card-img-top" alt="grammar_in_context">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-1">
                <small class="text-muted">TSLB1104</small>
            </div>
            <h5 class="card-title" style="text-align: center; margin-bottom: 10px; margin-top: 10px;">Grammar in
                Context</h5>
            <a href="#" class="btn btn-dark"
                style="display: flex; justify-content: center; align-items: center; width: 13rem; font-size: 8px;">
                Go to Subject
            </a>
        </div>
    </div>
    @endcan
</div>

<!-- dashboard content administrator -->
@can(abilities: 'administrator')
<div class="d-flex justify-content-start">
    <div class="card" style="width: 15rem; margin-bottom:30px">
        <img src="asset/photo/subject1.jpg" class="card-img-top" alt="grammar_in_context">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center; margin-bottom: 20px; margin-top: 10px;">
                REGISTRATION</h5>
            <a href="{{ route('viewregistrationformLecturer')}}" class="btn btn-dark"
                style="display: flex; justify-content: center; align-items: center; width: 13rem; font-size: 8px;">
                Go to Section
            </a>
        </div>
    </div>
    <div class="card" style="width: 15rem; margin-left:50px; margin-bottom:30px">
        <img src="asset/photo/subject1.jpg" class="card-img-top" alt="grammar_in_context">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center; margin-bottom: 20px; margin-top: 10px;">
                ANNOUNCEMENT</h5>
            <a href="{{ route('viewAnnouncementApproval')}}" class="btn btn-dark"
                style="display: flex; justify-content: center; align-items: center; width: 13rem; font-size: 8px;">
                Go to Section
            </a>
        </div>
    </div>
    @endcan
</div>