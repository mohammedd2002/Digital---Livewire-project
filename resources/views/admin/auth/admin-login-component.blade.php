<form class="mb-3" wire:submit.prevent="submit">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email-username" placeholder="Enter your email"
            autofocus wire:model="email" />
    </div>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" wire:model="password" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
    </div>
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" wire:model='remember' />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>

    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">
            <span wire:loading.remove>Sign in</span>
            <div>
                <div class="spinner-border spinner-border-sm text-secondary" role="status" wire:loading wire:target="submit">
                    <span class="visually-hidden">Loading...</span>
                  </div>
            </div>
        </button>

    </div>
</form>
