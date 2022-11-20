@extends('layouts.backend')

@section('content')

@include('backend/components/alerts')

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-9">
        
      </div>
      <div class="col-3 mb-4 ">
        <button type="print" class="btn btn-warning">
          Print
        </button>
        <a href="{{ route('user.profile.edit', $profile->id) }}" class="btn btn-outline-info">
          <i class="fas fa-trash"></i>
          Edit
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ auth()->user()->first_name }}</h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">{{ $profile->address ?? '' }}</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <p class="mb-4"><span class="text-primary font-italic me-1">Find Me</span> On
                </p>
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a href="{{ $profile->linked_in ?? '' }}">
                  <i class="fas fa-linkedin fa-lg text-warning"></i>
                </a>
                <p class="mb-0">LinkedIn</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a href="{{ $profile->github ?? '' }}">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                </a>
                <p class="mb-0">Github</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a href="{{ $profile->twitter ?? '' }}">
                  <i class="fab fa-twitter fa-lg" style="color: #333333;"></i>
                </a>
                <p class="mb-0">Twitter</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->phone }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $profile->phone_2 ?? '' }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                  {{ $profile->address ?? '' }}
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-4 mb-lg-0">
          
          <div class="card-header">
            <div class="card-title">
              Bio
            </div>
          </div>
          <div class="card-body p-0">
            {{ $profile->biography ?? '' }}
          </div>
        </div>
      </div>
    </div>

    <div class="row">
          <div class="col-md-6 mt-4">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Academic</span> Achievements
                </p>
                <p class="mb-1" style="font-size: .77rem;">
                  {{ $profile->academic_achievement_1 ?? '' }}
                </p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">
                  {{ $profile->academic_achievement_2 ?? '' }}
                </p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">
                  {{ $profile->academic_achievement_3 ?? '' }}
                </p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">
                  {{ $profile->academic_achievement_4 ?? '' }}
                </p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">
                  {{ $profile->academic_achievement_5 ?? '' }}
                </p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Professional</span> Achievements
                </p>
                <p class="mb-1" style="font-size: .77rem;">
                  {{ $profile->professional_achievement_1 ?? '' }}
                </p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">
                  {{ $profile->professional_achievement_2 ?? '' }}
                </p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">
                  {{ $profile->professional_achievement_3 ?? '' }}
                </p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">
                  {{ $profile->professional_achievement_4 ?? '' }}
                </p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">
                  {{ $profile->professional_achievement_5 ?? '' }}
                </p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
</section>


<!--Edit Modal -->
<div class="modal fade" id="edit" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Edit Profile.
        </h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('user.profile.update', $profile->id) }}" multiple>
          @csrf
          @method('PATCH')
          <div class="mb-3">
            <label for="phone_1" class="form-label">
              Phone 1
            </label>
            <input type="text" class="form-control" name="phone_1" id="phone_1" aria-describedby="phone_1" value="{{ $profile->phone_1 }}">
            <div id="phone_1" class="form-text">
              Primary phone number that will be used to reach you
            </div>
          </div>

          <div class="mb-3">
            <label for="phone_2" class="form-label">
              Phone 1
            </label>
            <input type="text" class="form-control" name="phone_2" id="phone_2" aria-describedby="phone_2" value="{{ $profile->phone_2 }}">
            <div id="phone_2" class="form-text">
              Primary phone number that will be used to reach you
            </div>
          </div>

          <div class="mb-3">
            <label for="address" class="form-label">
              Bio
            </label>
              <textarea class="form-control" id="address" name="address" rows="3">
                {{ $profile->address }}
              </textarea>
            <div id="address" class="form-text">
              Brief description about yourself
            </div>
          </div>

          <div class="mb-3">
            <label for="address" class="form-label">
              Address
            </label>
              <textarea class="form-control" id="address" name="address" rows="3">
                {{ $profile->address }}
              </textarea>
            <div id="address" class="form-text">
              Where you can be found
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Edit Modal -->

@endsection