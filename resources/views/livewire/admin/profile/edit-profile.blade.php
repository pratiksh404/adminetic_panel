<div>
    <div class="row">
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="avatar"><img class="img-100 rounded-circle" id="profile_pic_placeholder"
                            src="{{ getProfilePlaceholder() }}" alt="Profile Picture"></div>
                    <br>
                    <input type="file" name="profile_pic" id="profile_pic" onchange="readURL(this)">
                </div>
            </div>
            <br>
            <div class="row">
                <h4>Social Links</h4>
                <div class="col-lg-12">
                    <label class="form-label" for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" class="form-control"
                        value="{{ $facebook ?? old('facebook') }}">
                </div>
                <div class="col-lg-12">
                    <label class="form-label" for="instagram">Instagram</label>
                    <input type="text" name="instagram" id="instagram" class="form-control"
                        value="{{ $instagram ?? old('instagram') }}">
                </div>
                <div class="col-lg-12">
                    <label class="form-label" for="twitter">Twitter</label>
                    <input type="text" name="twitter" id="twitter" class="form-control"
                        value="{{ $twitter ?? old('twitter') }}">
                </div>
                <div class="col-lg-12">
                    <label class="form-label" for="linkedin">Linkedin</label>
                    <input type="text" name="linkedin" id="linkedin" class="form-control"
                        value="{{ $linkedin ?? old('linkedin') }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control"
                        value="{{ $address ?? old('address') }}">
                </div>
                <div class="col-lg-12">
                    <label for="phone_no" class="form-label">Phone</label>
                    <select name="phone_no[]" class="tagging form-control" multiple="">
                        @if (isset($phone_no))
                            @foreach ($phone_no as $phone)
                                <option value="{{ $phone }}" selected>{{ $phone }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                        <div class="form-check form-check-inline radio radio-primary">
                            <input class="form-check-input" id="radioinline1" type="radio" name="gender" value="1"
                                data-bs-original-title="" title=""
                                {{ isset($gender) ? ($gender == 1 ? 'checked' : '') : '' }}>
                            <label class="form-check-label mb-0" for="radioinline1">Male</label>
                        </div>
                        <div class="form-check form-check-inline radio radio-primary">
                            <input class="form-check-input" id="radioinline2" type="radio" name="gender" value="2"
                                data-bs-original-title="" title=""
                                {{ isset($gender) ? ($gender == 2 ? 'checked' : '') : '' }}>
                            <label class="form-check-label mb-0" for="radioinline2">Female</label>
                        </div>
                        <div class="form-check form-check-inline radio radio-primary">
                            <input class="form-check-input" id="radioinline3" type="radio" name="gender" value="3"
                                data-bs-original-title="" title=""
                                {{ isset($gender) ? ($gender == 3 ? 'checked' : '') : '' }}>
                            <label class="form-check-label mb-0" for="radioinline3">Other</label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="text" name="birthday" class="form-control" placeholder="Select Year"
                        value="{{ $birthday ?? old('birthday') }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <label class="form-label" for="country">Country</label>
                    <select class="form-control select2" name="country" style="width:100%">
                        @if (isset($countries))
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}"
                                    {{ $country ? ($country->name == $country ? 'selected' : '') : ($country->name == 'Nepal' ? 'selected' : '') }}>
                                    {{ $country->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <label class="form-label" for="martial_status">Martial Status</label> <br>
                    <select class="form-control" name="martial_status">
                        <option selected disabled>Select Martial Status..</option>
                        <option value="1"
                            {{ isset($martial_status) ? ($martial_status == 1 ? 'selected' : '') : '' }}>
                            Married
                        </option>
                        <option value="2"
                            {{ isset($martial_status) ? ($martial_status == 2 ? 'selected' : '') : '' }}>
                            Unmarried</option>
                        <option value="3"
                            {{ isset($martial_status) ? ($martial_status == 3 ? 'selected' : '') : '' }}>
                            Divorced</option>
                        <option value="4"
                            {{ isset($martial_status) ? ($martial_status == 4 ? 'selected' : '') : '' }}>
                            Widowed
                        </option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label class="form-label" for="blood_group">Blood Group</label>
                    <select class="form-control" name="blood_group" style="width:100%">
                        <option selected disabled>Select Blood Group..</option>
                        <option value="1" {{ isset($blood_group) ? ($blood_group == 1 ? 'selected' : '') : '' }}>A
                        </option>
                        <option value="2" {{ isset($blood_group) ? ($blood_group == 2 ? 'selected' : '') : '' }}>B
                        </option>
                        <option value="3" {{ isset($blood_group) ? ($blood_group == 3 ? 'selected' : '') : '' }}>A+
                        </option>
                        <option value="4" {{ isset($blood_group) ? ($blood_group == 4 ? 'selected' : '') : '' }}>B+
                        </option>
                        <option value="5" {{ isset($blood_group) ? ($blood_group == 5 ? 'selected' : '') : '' }}>AB
                        </option>
                        <option value="6" {{ isset($blood_group) ? ($blood_group == 6 ? 'selected' : '') : '' }}>AB+
                        </option>
                        <option value="7" {{ isset($blood_group) ? ($blood_group == 7 ? 'selected' : '') : '' }}>O+
                        </option>
                        <option value="8" {{ isset($blood_group) ? ($blood_group == 8 ? 'selected' : '') : '' }}>O-
                        </option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="com-lg-12">
                    <label>Father Name</label>
                    <input type="text" name="father_name" class="form-control"
                        value="{{ $father_name ?? old('father_name') }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="com-lg-12">
                    <label>Mother Name</label>
                    <input type="text" name="mother_name" class="form-control"
                        value="{{ $mother_name ?? old('mother_name') }}">
                </div>
            </div>
        </div>
    </div>
    @push('livewire_third_party')
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#profile_pic_placeholder')
                            .attr('src', e.target.result)
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

        </script>
    @endpush
</div>
