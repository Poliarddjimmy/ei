@php
    $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
@endphp

<form class="forms-sample" action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    @method($method)
    
    @if(!$proId)
        <div class="mb-3">
            <label for="upload" class="form-label">Upload Project Poster</label>
            <input class="form-control" value="{{ old('poster_url') ?? $pro->poster_url ?? '' }}"  name="poster_url" type="file" id="upload">
        </div>
    @endif
    
    <div class="mb-3">
        <label for="month" class="form-label">Month</label>
        <select class="form-control" name="month" id="month">
            <option value="">Select Month</option>
            @foreach(range(0, 11) as $month)
                <option value="{{ $months[$month] }}">{{ $months[$month] }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <select class="form-control" name="year" id="year">
            <option value="">Select Year</option>
            @foreach (range(date('Y') - 10, date('Y')) as $year)
                <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-control" name="category_id" id="category" onchange="handleCategoryChange(this.value, 'tag{{$proId}}')">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="mb-3">
        <label for="tag" class="form-label">Tag</label>
        <select class="form-control" name="tag" id="tag{{$proId}}">
            <option value="">Select a tag</option>
            @foreach($tags as $tag)
                <option value="{{ $tag }}">{{ $tag }}</option>
            @endforeach
        </select>
    </div>
    
    @if(!$proId)
    <div class="mb-3">
        <label for="imageInput" class="form-label">Pictures</label>
        
        <input class="d-none" type="file" id="imageInput" name="images[]" multiple accept="image/*" />
        <br>
        
        <a class="btn btn-warning" id="selectImagesButton">Select Images</a>

        <div id="imagePreview" style="display: flex; flex-wrap: wrap;"></div>
    </div>
    @endif
    
    <div class="">
        <button type="submit" class="btn btn-primary">
            <i class="link-icon" data-feather="{{ $proId ? 'edit' : 'plus' }}"></i>
            {{ $proId ? 'Update' : 'Create' }} Project
        </button>
    </div>
</form>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<script>
    function handleCategoryChange(selectedValue, tag) {

        // Ensure the DOM is fully loaded before attaching the event listener
        const categoryId = selectedValue;
        const tagSelect = $("#" + tag);
        const allTags = <?php echo json_encode($tags); ?>;
                
        tagSelect.children().slice(1).remove();
        
        // check if tagSelect is ""
        if (categoryId === "") {
            allTags.forEach(function(tag) {
                const option = document.createElement("option");
                option.value = tag;
                option.text = tag;
                tagSelect.append(option);
            });
        } else {
            // Ajax request
            $.ajax({
                url: "{{ route('tagsFromCategory') }}",
                method: "GET",
                data: {
                    category_id: categoryId,
                },
                success: function(data) {
                    // Ensure data is an array
                    if (Array.isArray(data.tags)) {
                        data.tags.forEach(function(tag) {
                            const option = document.createElement("option");
                            option.value = tag;
                            option.text = tag;
                            tagSelect.append(option);
                        });
                        console.log("Selected Category ID:", categoryId);
                    } else {
                        console.error("Unexpected response format:", data);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Ajax request failed:", status, error);
                }
            });
        }
    
    }
</script>

<script>

    document.getElementById("selectImagesButton").addEventListener("click", function() {
        document.getElementById("imageInput").click();
    });
    
    
    document.getElementById("imageInput").addEventListener("change", function(event) {
        const imagePreview = document.getElementById("imagePreview");
        imagePreview.innerHTML = "";  // Clear the previous previews
        const files = event.target.files;
        
        // Store selected files in an array
        let selectedFiles = Array.from(files);
    
        // Display images
        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
    
            reader.onload = function(e) {
                const imgContainer = document.createElement("div");
                imgContainer.style.position = "relative";
                imgContainer.style.margin = "10px";
    
                const img = document.createElement("img");
                img.src = e.target.result;
                img.style.width = "100px";  // You can change the size as needed
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
                    // Remove image from preview
                    imgContainer.remove();
                    // Remove the file from the input's file list
                    selectedFiles = selectedFiles.filter((_, idx) => idx !== index);
                    // Update the input's file list
                    updateFileInput(selectedFiles);
                });
    
                imgContainer.appendChild(removeButton);
                imagePreview.appendChild(imgContainer);
            };
    
            reader.readAsDataURL(file);
        });
    
        // Function to update the file input element with the selected files
        function updateFileInput(filesArray) {
            const dataTransfer = new DataTransfer();
            filesArray.forEach(file => dataTransfer.items.add(file));
            document.getElementById("imageInput").files = dataTransfer.files;
        }
    });

</script>

