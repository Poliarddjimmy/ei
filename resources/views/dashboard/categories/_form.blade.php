
<form class="forms-sample" action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    @method($method)
    
    @if(!$catId)
        <div class="mb-3">
            <label for="upload" class="form-label">Upload Category Icon</label>
            <input class="form-control" value="{{ old('icon') ?? $cat->icon ?? '' }}"  name="icon" type="file" id="upload">
        </div>
    @endif
    
    <div class="mb-3">
        <label for="category" class="form-label">Category Name</label>
        <input type="text" class="form-control" value="{{ old('name') ?? $cat->name ?? '' }}" id="name" name="name" autocomplete="off" placeholder="Name">
    </div>
    
    <div class="mb-3">
        <label for="tags" class="form-label">Category Description</label>
        <textarea name="description" type="text" class="form-control resize-none" rows="5" id="description" placeholder="Description" value="" >{{ old('description') ?? $cat->description ?? '' }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="tags" class="form-label">Category tags</label>
        <input name="tags" type="text" class="form-control" value="{{ old('tags') ?? implode(', ', $cat->tags) ?? '' }}" id="tags{{ $catId }}" placeholder="tags" value="" />
    </div>
    
    @if(!$catId)
    <div class="mb-3">
        <input class="d-none" type="file" id="imageInput" name="poster_url" multiple accept="image/*" />
        <a class="btn btn-warning" id="selectImagesButton">Select a poster</a>
        <div id="imagePreview" style="display: flex; flex-wrap: wrap;"></div>
    </div>
    @endif
    
    <div class="">
        <button type="submit" class="btn btn-primary">
            <i class="link-icon" data-feather="{{ $catId ? 'edit' : 'plus' }}"></i>
            {{ $catId ? 'Update' : 'Create' }} Category
        </button>
    </div>
</form>

<script>
    document.getElementById("selectImagesButton").addEventListener("click", function() {
        document.getElementById("imageInput").click();
    });
    
    document.getElementById("imageInput").addEventListener("change", function(event) {
        const imagePreview = document.getElementById("imagePreview");
        imagePreview.innerHTML = ""; // Clear any existing preview
        const file = event.target.files[0]; // Get the first selected file
    
        if (file) {
            const reader = new FileReader();
    
            reader.onload = function(e) {
                const imgContainer = document.createElement("div");
                imgContainer.style.position = "relative";
                imgContainer.style.margin = "10px";
    
                const img = document.createElement("img");
                img.src = e.target.result;
                img.style.width = "100px"; // You can change the size as needed
                img.style.margin = "10px";
                img.style.objectFit = "cover";
                imgContainer.appendChild(img);
    
                // Create a "remove" button
                const removeButton = document.createElement("button");
                removeButton.innerText = "X";
                
                // Use flexbox to center the "X" text and apply padding
                removeButton.style.display = "flex";
                removeButton.style.alignItems = "center";
                removeButton.style.justifyContent = "center";
                removeButton.style.position = "absolute";
                removeButton.style.top = "5px";
                removeButton.style.right = "5px";
                removeButton.style.background = "red";
                removeButton.style.color = "white";
                removeButton.style.border = "none";
                removeButton.style.borderRadius = "50%";
                removeButton.style.width = "30px"; // Increased size
                removeButton.style.height = "30px"; // Increased size
                removeButton.style.cursor = "pointer";
                removeButton.style.padding = "0"; // Reset any default padding
    
                // Add click event to remove the image
                removeButton.addEventListener("click", function() {
                    // Clear the preview and reset the input
                    imgContainer.remove();
                    document.getElementById("imageInput").value = ""; // Clear the input
                });
    
                imgContainer.appendChild(removeButton);
                imagePreview.appendChild(imgContainer);
            };
    
            reader.readAsDataURL(file);
        }
    });
</script>

<script>
    $('#description').summernote({
        height: 200, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true // set focus to editable area after initializing summernote
    });
</script>