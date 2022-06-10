{{-- Form register subscriber --}}
{{--'title', 'slug', 'content', 'image', --}}
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Slug</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Slug">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Content</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Content">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Image</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Image">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>       
</form>
