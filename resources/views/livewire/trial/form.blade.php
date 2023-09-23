<div>
    <span>{{ $message }}</span>
    <!-- Name -->
    <div class="mb-3">
        <input  type="text" wire:model="name" value="{{ old('name') }}" required autocomplete="name" class="form-control" placeholder="{{ __('Nom(s) & Prénom(s)') }}">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <!-- Email -->
    <div class="mb-3">
        <input  type="email" wire:model="email" value="{{ old('email') }}" required autocomplete="email" class="form-control" placeholder="Adresse email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="row">
        <!-- Country -->
        <div class="mb-3 col-6">
            <select wire:model="country" required autocomplete="country" class="form-control">
                <option value="">Pays</option>
                <option value="congo">Pays</option>
            </select>
            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <!-- Phone -->
        <div class="mb-3 col-6">
            <input  type="tel" wire:model="phone" value="{{ old('phone') }}" required autocomplete="phone" class="form-control" placeholder="Numéro de téléphone">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <!-- industry -->
    <div class="mb-3">
        <select wire:model="industry" required autocomplete="industy" class="form-control">
            <option value="">{{ __("Quelle est votre secteur d'activité ?") }}</option>
            <option {{ old('type') == 'clothing_store' ? 'selected' : '' }} value="clothing_store">{{ __('Magasin de vêtements') }}</option>
            <option {{ old('type') == 'jewelry_store' ? 'selected' : '' }} value="jewelry_store">{{ __('Magasin de bijoux') }}</option>
            <option {{ old('type') == 'beverage_depot' ? 'selected' : '' }} value="beverage_depot">{{ __('Dépots de boissons') }}</option>
            <option {{ old('type') == 'ciment_depot' ? 'selected' : '' }} value="ciment_depot">{{ __('Dépots de ciments') }}</option>
            <option {{ old('type') == 'water_depot' ? 'selected' : '' }} value="water_depot">{{ __('Dépots d\'eau') }}</option>
            <option {{ old('type') == 'electronics_store' ? 'selected' : '' }} value="electronics_store">{{ __("Magasin électronique") }}</option>
            <option {{ old('type') == 'retail_store' ? 'selected' : '' }} value="retail_store">{{ __('Commerce de vente en détail') }}</option>
            <option {{ old('type') == 'minimarket' ? 'selected' : '' }} value="minimarket">{{ __('Superette') }}</option>
            <option {{ old('type') == 'super_market' ? 'selected' : '' }} value="super_market">{{ __('Super Marché') }}</option>
            <option {{ old('type') == 'store_chain' ? 'selected' : '' }} value="store_chain">{{ __("Chaîne de magasin") }}</option>
            <option {{ old('type') == 'others' ? 'selected' : '' }} value="others">{{ __("Autres") }}</option>
        </select>
        @error('industry') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="row">
        <!-- Company Size -->
        <div class="mb-3 col-6">
            <select wire:model="size" required autocomplete="size" class="form-control">
                <option value="">{{ __('Taille de votre entreprise') }}</option>
                <option value="">< 5 {{ __('employés') }}</option>
                <option value="">5 - 20 {{ __('employés') }}</option>
                <option value="">20 - 50 {{ __('employés') }}</option>
                <option value="">50 - 200 {{ __('employés') }}</option>
                <option value="">> 200 {{ __('employés') }}</option>
            </select>
            @error('size') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <!-- Primary Interest -->
        <div class="mb-3 col-6">
            <select wire:model="primary_interest" required autocomplete="primary_interest" class="form-control">
                <option value="">{{ __('Intérêt principal') }}</option>
                <option value="">{{ __('Utiliser Koverae pour mon entreprise') }}</option>
                <option value="">{{ __("Offrir les services Koverae à d'autres entreprises") }}</option>
                <option value="">{{ __('Je suis un professeur') }}</option>
                <option value="">{{ __('Je suis un étudiant') }}</option>
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
