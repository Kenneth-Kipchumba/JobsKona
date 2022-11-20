@extends('layouts.backend')

@section('content')

@include('backend/components/alerts')

<div class="card">
  <div class="card-header">
    <div class="card-title">
      Create Profile
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('user.profile.store') }}" multiple>
          @csrf
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="phone_1" class="form-label">
                  Phone 1
                </label>
                <input type="text" class="form-control" name="phone_1" id="phone_1" aria-describedby="phone_1" value="{{ old('phone_1') }}">
                <div id="phone_1" class="form-text">
                  Primary phone number that may be used to reach you
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="phone_2" class="form-label">
                  Phone 2
                </label>
                <input type="text" class="form-control" name="phone_2" id="phone_2" aria-describedby="phone_2" value="{{ old('phone_2') }}">
                <div id="phone_2" class="form-text">
                  Secondary phone number that may be alternatively used to reach you 
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="another_email" class="form-label">
                  Email 2
                </label>
                <input type="email" class="form-control" name="another_email" id="another_email" aria-describedby="another_email" value="{{ old('another_email') }}">
                <div id="another_email" class="form-text">
                  Alternative email
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="website" class="form-label">
                  Your Website
                </label>
                <input type="text" class="form-control" name="website" id="website" aria-describedby="website" value="{{ old('website') }}">
                <div id="website" class="form-text">
                  website 
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="linked_in" class="form-label">
                  LinkedIn
                </label>
                <input type="url" class="form-control" name="linked_in" id="linked_in" aria-describedby="linked_in" value="{{ old('linked_in') }}">
                <div id="linked_in" class="form-text">
                  LinkedIn Profile
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="website" class="form-label">
                  Twitter
                </label>
                <input type="text" class="form-control" name="twitter" id="twitter" aria-describedby="twitter" value="{{ old('twitter') }}">
                <div id="twitter" class="form-text">
                  Twitter Handle 
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="languages_spoken" class="form-label">
                  Languages Spoken
                </label>
                <input type="text" class="form-control" name="languages_spoken" id="languages_spoken" aria-describedby="languages_spoken" value="{{ old('languages_spoken') }}" placeholder="english,kiswahili,e.t.c">
                <div id="languages_spoken" class="form-text">
                  Comma separated languages that you can speak fluently
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="languages_written" class="form-label">
                  Languages Written
                </label>
                <input type="text" class="form-control" name="languages_written" id="languages_written" aria-describedby="languages_written" value="{{ old('languages_written') }}" placeholder="english,kiswahili,e.t.c">
                <div id="languages_written" class="form-text">
                  Comma separated languages that you can write well
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="biography" class="form-label">
              Bio
            </label>
              <textarea class="form-control" id="biography" name="biography" rows="3">
                {{ old('biography') }}
              </textarea>
            <div id="biography" class="form-text">
              Brief description about yourself
            </div>
          </div>

          <div class="mb-3">
            <label for="address" class="form-label">
              Address
            </label>
              <textarea class="form-control" id="address" name="address" rows="3">
                {{ old('address') }}
              </textarea>
            <div id="address" class="form-text">
              Where you can be found
            </div>
          </div>

          <div class="mb-3">
            <label for="academic_achievement_1" class="form-label">
              First Academic Achievement
            </label>
              <textarea class="form-control" id="academic_achievement_1" name="academic_achievement_1" rows="3">
                {{ old('academic_achievement_1') }}
              </textarea>
            <div id="academic_achievement_1" class="form-text">
              e.g primary school achievement
            </div>
          </div>

          <div class="mb-3">
            <label for="academic_achievement_2" class="form-label">
              Second Academic Achievement
            </label>
              <textarea class="form-control" id="academic_achievement_2" name="academic_achievement_2" rows="3">
                {{ old('academic_achievement_2') }}
              </textarea>
            <div id="academic_achievement_2" class="form-text">
              e.g secondary school achievement
            </div>
          </div>

          <div class="mb-3">
            <label for="academic_achievement_3" class="form-label">
              Third Academic Achievement
            </label>
              <textarea class="form-control" id="academic_achievement_3" name="academic_achievement_3" rows="3">
                {{ old('academic_achievement_3') }}
              </textarea>
            <div id="academic_achievement_3" class="form-text">
              e.g tertiary level achievement
            </div>
          </div>

          <div class="mb-3">
            <label for="academic_achievement_4" class="form-label">
              Other Academic Achievement
            </label>
              <textarea class="form-control" id="academic_achievement_4" name="academic_achievement_4" rows="3">
                {{ old('academic_achievement_4') }}
              </textarea>
            <div id="academic_achievement_4" class="form-text">
              e.g secondary school achievement
            </div>
          </div>

          <div class="mb-3">
            <label for="academic_achievement_5" class="form-label">
              Other Academic Achievement
            </label>
              <textarea class="form-control" id="academic_achievement_5" name="academic_achievement_5" rows="3">
                {{ old('academic_achievement_5') }}
              </textarea>
            <div id="academic_achievement_5" class="form-text">
              e.g tertiary level achievement
            </div>
          </div>

          <hr>

          <div class="mb-3">
            <label for="professional_achievement_1" class="form-label">
              First Professional Achievement
            </label>
              <textarea class="form-control" id="professional_achievement_1" name="professional_achievement_1" rows="3">
                {{ old('professional_achievement_1') }}
              </textarea>
            <div id="professional_achievement_1" class="form-text">
              
            </div>
          </div>

          <div class="mb-3">
            <label for="professional_achievement_2" class="form-label">
              Second Professional Achievement
            </label>
              <textarea class="form-control" id="professional_achievement_2" name="professional_achievement_2" rows="3">
                {{ old('professional_achievement_2') }}
              </textarea>
            <div id="professional_achievement_2" class="form-text">
              
            </div>
          </div>

          <div class="mb-3">
            <label for="professional_achievement_3" class="form-label">
              Third Professional Achievement
            </label>
              <textarea class="form-control" id="professional_achievement_3" name="professional_achievement_3" rows="3">
                {{ old('professional_achievement_3') }}
              </textarea>
            <div id="professional_achievement_3" class="form-text">
              
            </div>
          </div>

          <div class="mb-3">
            <label for="professional_achievement_4" class="form-label">
              Other Professional Achievement
            </label>
              <textarea class="form-control" id="professional_achievement_4" name="professional_achievement_4" rows="3">
                {{ old('professional_achievement_4') }}
              </textarea>
            <div id="professional_achievement_4" class="form-text">
              
            </div>
          </div>

          <div class="mb-3">
            <label for="professional_achievement_5" class="form-label">
              Other Professional Achievement
            </label>
              <textarea class="form-control" id="professional_achievement_5" name="professional_achievement_5" rows="3">
                {{ old('professional_achievement_5') }}
              </textarea>
            <div id="professional_achievement_5" class="form-text">
              
            </div>
          </div>

          <button type="submit" class="btn btn-outline-success">
            Create
          </button>
        </form>
    </div>
  </div>
</div>

@endsection