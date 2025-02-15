
                  <form wire:submit.prevent="submit">
                      <div class="position-relative w-100 mt-3">
                          <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                              placeholder="Enter Your Email" style="height: 48px;" wire:model="email">
                              @error('email')
                              <span class="text-white">{{ $message }}</span>
                              @enderror
                              @if (session()->has('success'))
                        

                                  <span class="text-white">{{ session('success') }}</span>
                            
                              @endif
                          <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                  class="fa fa-paper-plane text-primary fs-4"></i></button>
                      </div>
                  </form>
   
