<div>
    <span>{{ $message }}</span>
    <!-- Name -->
    <div class="mb-3">
        <input  type="text" wire:model="name" value="{{ old('name') }}" required autocomplete="name" class="form-control" placeholder="{{ __('Nom(s) & Prénom(s)') }}">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <!-- Company Name -->
    <div class="mb-3">
        <input  type="text" wire:model="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" class="form-control" placeholder="{{ __('Nom de votre entreprise') }}">
        @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <!-- Prospect Position -->
    <div class="mb-3">
        <select wire:model="role" required autocomplete="role" class="form-control">
            <option value="">{{ __("Quelle est votre rôle dans l'entreprise") }}</option>
            <option value="owner">{{ __('Propriétaire') }}</option>
            <option value="cco">{{ __('Directeur commercial') }}</option>
            <option value="manager">{{ __("Gérant") }}</option>
            <option value="employee">{{ __('Employé') }}</option>
            <option value="others">{{ __('Autres') }}</option>
        </select>
        @error('role') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="row">
        <!-- Email -->
        <div class="mb-3 col-6">
            <input  type="email" wire:model="email" value="{{ old('email') }}" required autocomplete="email" class="form-control" placeholder="Adresse email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <!-- Phone -->
        <div class="mb-3 col-6">
            <input  type="tel" wire:model="phone" value="{{ old('phone') }}" required autocomplete="phone" class="form-control" placeholder="Numéro de téléphone">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="row">
        <!-- Country -->
        <div class="mb-3 col-6">
            <select wire:model="country" required autocomplete="country" class="form-control">
                <option value="">Pays</option>
                @foreach($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <!-- City -->
        <div class="mb-3 col-6">
            <select wire:model="city" required autocomplete="city" class="form-control">
                <option value="">Ville</option>
                @if(!empty($country) && isset($cities[$country]))
                    @foreach($cities[$country] as $city)
                        <option value="{{ strtolower($city) }}">{{ $city }}</option>
                    @endforeach
                @endif
            </select>
            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <!-- industry -->
    <div class="mb-3">
        <select wire:model="industry" required autocomplete="industy" class="form-control">
            <option value="">{{ __("Quelle est votre secteur d'activité ?") }}</option>
            <option {{ old('type') == 'retail_store' ? 'selected' : '' }} value="retail_store">{{ __('Commerce de détail') }}</option>
            <option {{ old('type') == 'distribution' ? 'selected' : '' }} value="distribution">{{ __('Grande distribution') }}</option>
            <option {{ old('type') == 'restaurant' ? 'selected' : '' }} value="restaurant">{{ __("Restauration / Bar") }}</option>
            <option {{ old('type') == 'hotel' ? 'selected' : '' }} value="hotel">{{ __("Hôtellerie") }}</option>
            <option {{ old('type') == 'pharmacy' ? 'selected' : '' }} value="pharmacy">{{ __('Pharmacie') }}</option>
            <option {{ old('type') == 'others' ? 'selected' : '' }} value="others">{{ __("Autres") }}</option>
        </select>
        @error('industry') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="row">
        <!-- Company Size -->
        <div class="mb-3 col-6">
            <select wire:model="size" required autocomplete="size" class="form-control">
                <option value="">{{ __('Taille de votre entreprise') }}</option>
                <option value="-5">< 5 {{ __('employés') }}</option>
                <option value="5+">5 - 20 {{ __('employés') }}</option>
                <option value="20+">20 - 50 {{ __('employés') }}</option>
                <option value="50+">50 - 200 {{ __('employés') }}</option>
                <option value="200+"> > 200 {{ __('employés') }}</option>
            </select>
            @error('size') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <!-- Primary Interest -->
        <div class="mb-3 col-6">
            <select wire:model="primary_interest" required autocomplete="primary_interest" class="form-control">
                <option value="">{{ __('Intérêt principal') }}</option>
                <option value="for my company">{{ __('Utiliser Koverae pour mon entreprise') }}</option>
                <option value="for my customers">{{ __("Offrir les services Koverae à d'autres entreprises") }}</option>
                <option value="I am a teacher">{{ __('Je suis un professeur') }}</option>
                <option value="I am a  student">{{ __('Je suis un étudiant') }}</option>
            </select>
            @error('primary_interest') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="form-footer">
        <button style="margin-top: 7px" type="button" wire:click="send" class="btn btn-primary w-100" wire:loading.attr="disabled">
            <span wire:loading.remove wire:target="send">{{ __('Suivant') }}</span>
            <span wire:loading wire:target="send">
                <div class="spinner-border spinner-border-sm" role="status">
                    <span class="sr-only"></span>
                </div>
            </span>
        </button>
    </div>
</div>
