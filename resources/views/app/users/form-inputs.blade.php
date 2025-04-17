@php $editing = isset($user) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $user->name : '')) }}"
            maxlength="255"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="email"
            label="Email"
            value="{{ old('email', ($editing ? $user->email : '')) }}"
            maxlength="255"
            placeholder="Email"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.password
            name="password"
            label="Password"
            maxlength="255"
            placeholder="Password"
            :required="!$editing"
        ></x-inputs.password>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="phone"
            label="Phone"
            value="{{ old('phone', ($editing ? $user->phone : '')) }}"
            maxlength="255"
            placeholder="Phone"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="pass_type" label="Pass Type">
            @php $selected = old('pass_type', ($editing ? $user->pass_type : 'base')) @endphp
            <option value="base" {{ $selected == 'base' ? 'selected' : '' }} >Base</option>
            <option value="premium" {{ $selected == 'premium' ? 'selected' : '' }} >Premium</option>
            <option value="mega" {{ $selected == 'mega' ? 'selected' : '' }} >Mega</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="usn"
            label="Usn"
            value="{{ old('usn', ($editing ? $user->usn : '')) }}"
            maxlength="255"
            placeholder="Usn"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="uid"
            label="UID"
            value="{{ old('uid', ($editing ? $user->uid : '')) }}"
            maxlength="255"
            placeholder="Uid"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="transaction_id"
            label="Transaction Id"
            value="{{ old('transaction_id', ($editing ? $user->transaction_id : '')) }}"
            placeholder="Transaction Id"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="college_name"
            label="College Name"
            value="{{ old('college_name', ($editing ? $user->college_name : '')) }}"
            maxlength="255"
            placeholder="College Name"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <div
            x-data="imageViewer('{{ $editing && $user->payment_screenshot ? \Storage::url($user->payment_screenshot) : '' }}')"
        >
            <x-inputs.partials.label
                name="payment_screenshot"
                label="Payment Screenshot"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="payment_screenshot"
                    id="payment_screenshot"
                    @change="fileChosen"
                />
            </div>

            @error('payment_screenshot')
            @include('components.inputs.partials.error') @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <div
            x-data="imageViewer('{{ $editing && $user->id_card ? \Storage::url($user->id_card) : '' }}')"
        >
            <x-inputs.partials.label
                name="id_card"
                label="Id Card"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="id_card"
                    id="id_card"
                    @change="fileChosen"
                />
            </div>

            @error('id_card') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.checkbox
            name="is_paid"
            label="Is Paid"
            :checked="old('is_paid', ($editing ? $user->is_paid : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <div class="form-group col-sm-12 mt-4">
        <h4>Assign @lang('crud.roles.name')</h4>

        @foreach ($roles as $role)
        <div>
            <x-inputs.checkbox
                id="role{{ $role->id }}"
                name="roles[]"
                label="{{ ucfirst($role->name) }}"
                value="{{ $role->id }}"
                :checked="isset($user) ? $user->hasRole($role) : false"
                :add-hidden-value="false"
            ></x-inputs.checkbox>
        </div>
        @endforeach
    </div>
</div>
