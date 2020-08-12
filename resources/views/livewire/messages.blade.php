<div class="col-md-6 order-md-last d-flex">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="addMessage" class="bg-light p-4 p-md-5 contact-form">
        <div class="form-group">
            @error('newName') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="text" class="form-control"  id="name" wire:model.lazy="newName"
                   placeholder="Name">
        </div>
        <div class="form-group">
            @error('newEmail') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="text" id="email"  wire:model.lazy="newEmail" class="form-control"
                   placeholder="Email">
        </div>
        <div class="form-group">
            @error('newPhone') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="text" id="phone"  wire:model.lazy="newPhone" class="form-control"
                   placeholder="phone">
        </div>
        <div class="form-group">
            @error('newSubject') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="text" class="form-control"  id="subject" wire:model.lazy="newSubject"
                   placeholder="Subject">
        </div>
        <div class="form-group">
            @error('newMessage') <span class="text-danger">{{ $message }}</span> @enderror
            <textarea  id="message" wire:model.lazy="newMessage" cols="30" rows="7" class="form-control"
                      placeholder="Message">

            </textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
        </div>
    </form>
</div>
