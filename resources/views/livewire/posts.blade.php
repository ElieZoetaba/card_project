{{-- <div> 
    @if($updateMode) 
        @include('livewire.update') 
    @else 
        @include('livewire.create') 
    @endif 
    <table class="table table-bordered mt-5"> 
        <thead> 
            <tr > 
                <th>N°</th> 
                <th>Title</th> 
                <th>Slug</th> 
                <th>Content</th>
                <th>Image</th>
                <th>User_id</th>
            </tr> 
        </thead> 
        <tbody> 
            @foreach($posts comme $value) 
            <tr> 
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td> 
                <td>{{ $value->slug }}</td>
                <td>{{ $value->content }}</td>
                <td>{{ $value->image }}</td>
                <td>{{ $value->user_id }}</td>
                <td> 
                <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Modifier</button> 
                <button wire:click="delete({ { $value->id }})" class="btn btn-danger btn-sm">Supprimer</button> 
                </td> 
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
</div> --}}