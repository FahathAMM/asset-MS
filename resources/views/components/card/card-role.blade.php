@props([
    'roleName' => 'Administrator',
    'numberOfUsers' => '4',
    'color' => 'warning',
    'users' => [
        ['name' => 'fahath', 'img' => 'assets/images/users/avatar-1.jpg'],
        ['name' => 'fahath', 'img' => 'assets/images/users/avatar-2.jpg'],
        ['name' => 'fahath', 'img' => 'assets/images/users/avatar-3.jpg'],
        ['name' => 'fahath', 'img' => 'assets/images/users/avatar-4.jpg'],
    ],
])


<div class="card profile-project-card shadow-none profile-project-{{ $color ?? '' }}">
    <div class="card-body p-4">
        <div class="d-flex">
            <div class="flex-grow-1 text-muted overflow-hidden">
                <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Administrator</a>
                </h5>
                <p class="text-muted text-truncate mb-0">Total 4 users </p>
            </div>
            <div class="flex-shrink-0 ms-2">
                <button class="badge btn bg-success-subtle text-success fs-10">
                    Edite Role</button>
            </div>
        </div>

        <div class="d-flex mt-2">
            <div class="flex-grow-1">
                <div class="d-flex align-items-center gap-2 justify-content-end">
                    {{-- <div>
                        <h5 class="fs-12 text-muted mb-0">
                            Members :</h5>
                    </div> --}}
                    <div class="avatar-group text-end">
                        @foreach ($users as $key => $user)
                            <div class="avatar-group-item">
                                <div class="avatar-xs">
                                    <img src="{{ $user['img'] }}" alt="" class="rounded-circle img-fluid" />
                                </div>
                            </div>
                        @endforeach
                        <div class="avatar-group-item">
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle bg-light text-primary">
                                    +{{ ++$key }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end card body -->
</div>
