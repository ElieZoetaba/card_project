{{-- Mise  a jour des donnee de l'abonne--}}

<form> 
    <div class="form-group"> 
        <input type="hidden" wire:model="post_id"> 
        <label for="exampleFormControlInput1">Title</label> 
        <input type="text" class= "form-control" wire:model="title" id="exampleFormControlInput1" placeholder="Enter Title"> 
        @error('title') <span class="text-danger">{{ $message }}</span >@enderror 
    </div> 
    <div class="form-group"> 
        <label for="exampleFormControlInput1">Slug</label> 
        <input type="text" class= "form-control" wire:model="slug" id="exampleFormControlInput1" placeholder="Enter Slug"> 
        @error('slug') <span class="text-danger">{{ $message }}</span >@enderror
    </div>
    <div class="form-group"> 
        <label for="exampleFormControlInput1">Content</label> 
        <input type="text" class= "form-control" wire:model="content" id="exampleFormControlInput1" placeholder="Enter Content"> 
        @error('content') <span class="text-danger">{{ $message }}</span >@enderror
    </div>
    <div class="form-group"> 
        <label for="exampleFormControlInput1">Image</label> 
        <input type="text" class= "form-control" wire:model="image" id="exampleFormControlInput1" placeholder="Enter Image"> 
        @error('image') <span class="text-danger">{{ $message }}</span >@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Mettre à jour</button> 
    <button wire:click.prevent="cancel()" class="btn btn-danger">Annuler </bouton> 
</form>