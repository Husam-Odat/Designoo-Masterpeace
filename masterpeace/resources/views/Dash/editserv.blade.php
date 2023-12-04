@extends('Dash.Master')

@section('Title')
    Edit Product
@endsection

@section('content')
    <style>
        .error-message {
            color: red;
        }

        .correct-message {
            color: rgb(6, 139, 17);
        }
    </style>
    <div class="content">

        <div class="main">

            <section class="signup">
                <!-- <img src="images/signup-bg.jpg" alt=""> -->
                <div class="container" style="margin:auto">
                    <div class="signup-content">
                        <form method="post" action="{{ route('services.update', $data['id']) }}"
                            enctype="multipart/form-data" id="signup-form" class="signup-form">
                            @method('PUT')
                            @csrf
                            <h2 class="form-title mb-4"
                                style="color: rgb(10, 10, 105); text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                                Update Products</h2>
                            <div class="form-group">
                                <input type="text" value="{{ $data->name }}" class="form-input" name="name"
                                    id="name" placeholder="name" />
                                <span style="color:red">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="name-error"></div>
                                <div class="correct-message" id="name-correct"></div>
                                <br><br>

                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $data->description }}" class="form-input" name="description"
                                    id="description" placeholder="description" />
                                <span style="color:red">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="description-error"></div>
                                <div class="correct-message" id="description-correct"></div>
                                <br><br>

                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $data->SKU }}" class="form-input" name='SKU'
                                    id='SKU' placeholder='SKU' />
                                <span style="color:red">
                                    @error('SKU')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="SKU-error"></div>
                                <div class="correct-message" id="SKU-correct"></div>
                                <br><br>

                            </div>
                            <div class="form-group">
                                <input type="number" value="{{ $data->categoryId }}" class="form-input" name="categoryId"
                                    id="categoryId" placeholder="categoryId" />
                                <span style="color:red">
                                    @error('categoryId')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="categoryId-error"></div>
                                <div class="correct-message" id="categoryId-correct"></div>
                                <br><br>

                            </div>
                            <div class="form-group">
                                <input type="number" value="{{ $data->inventoryId }}" class="form-input" name="inventoryId"
                                    id="inventoryId" placeholder="inventoryId" />
                                <span style="color:red">
                                    @error('inventoryId')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="inventoryId-error"></div>
                                <div class="correct-message" id="inventoryId-correct"></div>
                                <br><br>

                            </div>
                            <div class="form-group">
                                <input type="number" value="{{ $data->discountId }}" class="form-input" name="discountId"
                                    id="discountId" placeholder="discountId" required />
                                <span style="color:red">
                                    @error('discountId')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="discountId-error"></div>
                                <div class="correct-message" id="discountId-correct"></div>
                                <br><br>

                            </div>
                            <div class="form-group">
                                <input type="number" value="{{ $data->price }}" class="form-input" name="price"
                                    placeholder="price" id="price" required />
                                <span style="color:red">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="price-error"></div>
                                <div class="correct-message" id="price-correct"></div>
                                <br><br>

                            </div>


                            {{-- <div class="form-group">	
                            <input type="text" class="form-input" name="password" id="password" placeholder="price"/>
                           
                        </div> --}}
                            {{-- <div class="form-group">
                            <input type="file" class="form-input" name="image" id="image" accept="image/*">
                        </div> --}}

                            <div class="form-group">
                                <input name="img" value="/images/{{ $data->img }}" type="file"
                                    class="form-control white-input" id="img" value="/images/{{ $data->img }}">
                                <img src="/images/{{ $data->img }}" width="200px" class="mt-4">
                                <span style="color:red">
                                    @error('img')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="img-error"></div>
                                <div class="correct-message" id="img-correct"></div>
                                <br><br>

                            </div>
                            <div class="form-group">
                                <input name="img1" value="/images/{{ $data->img1 }}" type="file"
                                    class="form-control white-input" id="img1" value="/images/{{ $data->img1 }}">
                                <img src="/images/{{ $data->img1 }}" width="200px" class="mt-4">
                                <span style="color:red">
                                    @error('img1')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="img1-error"></div>
                                <div class="correct-message" id="img1-correct"></div>
                                <br><br>

                            </div>
                            <div class="form-group">
                                <input name="img2" type="file" class="form-control white-input" id="img2"
                                    value="/images/{{ $data->img2 }}">
                                <img src="/images/{{ $data->img2 }}" width="200px" class="mt-4">
                                <span style="color:red">
                                    @error('img2')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="error-message" id="img2-error"></div>
                                <div class="correct-message" id="img2-correct"></div>
                                <br><br>

                            </div>
                            <div class="form-group">
                                <input name="img3" type="file" class="form-control white-input" id="img3"
                                    value="{{ $data->img3 }}">
                                <img src="/images/{{ $data->img3 }}" width="200px" class="mt-4">
                                <span style="color:red">
                                    @error('img3')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>
                                <div class="error-message" id="img3-error"></div>
                                <div class="correct-message" id="img3-correct"></div>

                            </div>



                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Update"
                                    style="color: rgb(10, 10, 105);" />
                            </div>



                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script>
        const form = document.getElementById("productForm");
        const nameInput = document.getElementById("name");
        const descriptionInput = document.getElementById("description");
        const SKUInput = document.getElementById("SKU");
        const categoryIdInput = document.getElementById("categoryId");
        const inventoryIdInput = document.getElementById("inventoryId");
        const discountIdInput = document.getElementById("discountId");
        const priceInput = document.getElementById("price");
        const imgInput = document.getElementById("img");
        const img1Input = document.getElementById("img1");
        const img2Input = document.getElementById("img2");
        const img3Input = document.getElementById("img3");
        let isValid = false;

        function validateName() {
            const name = nameInput.value;
            if (name.trim() === "") {
                document.getElementById("name-error").textContent = "Name is required.";
                document.getElementById("name-correct").textContent = "";

                isValid = false;
            } else if (!name.match(/^[a-zA-Z\s]+$/)) {
                document.getElementById("name-error").textContent = "Name must contain only letters and spaces.";
                document.getElementById("name-correct").textContent = "";

                isValid = false;
            } else {
                document.getElementById("name-error").textContent = "";
                document.getElementById("name-correct").textContent = "Valid name";
            }
        }
        // Initial validation check on page load for the "Name" field
        validateName();

        nameInput.addEventListener("input", validateName);


        function validateDescription() {
            const description = descriptionInput.value;
            if (description.trim() === "") {
                document.getElementById("description-error").textContent = "Description is required.";
                document.getElementById("description-correct").textContent = "";
                isValid = false;
            } else {
                document.getElementById("description-error").textContent = "";
                document.getElementById("description-correct").textContent = "Valid description";
            }
        }
        validateDescription();

        descriptionInput.addEventListener("input", validateDescription);

        function validateSKU() {
            const SKU = SKUInput.value;
            if (SKU.trim() === "") {
                document.getElementById("SKU-error").textContent = "SKU is required.";
                document.getElementById("SKU-correct").textContent = "";

                isValid = false;
            } else {
                document.getElementById("SKU-error").textContent = "";
                document.getElementById("SKU-correct").textContent = "Valid SKU";

            }
        }
        validateSKU();

        SKUInput.addEventListener("input", validateSKU);

        function validateCategoryId() {
            const categoryId = categoryIdInput.value;
            if (categoryId.trim() === "") {
                document.getElementById("categoryId-error").textContent = "Category ID is required.";
                document.getElementById("categoryId-correct").textContent = "";

                isValid = false;
            } else {
                document.getElementById("categoryId-error").textContent = "";
                document.getElementById("categoryId-correct").textContent = "Valid categoryId";

            }
        }
        validateCategoryId();

        categoryIdInput.addEventListener("input", validateCategoryId);

        function validateInventoryId() {
            const inventoryId = inventoryIdInput.value;
            // Add Inventory ID validation logic
            if (inventoryId.trim() === "") {
                document.getElementById("inventoryId-error").textContent = "inventory Id is required.";
                document.getElementById("inventoryId-correct").textContent = "";

                isValid = false;
            } else {
                document.getElementById("inventoryId-error").textContent = "";
                document.getElementById("inventoryId-correct").textContent = "Valid inventory Id";

            }
        }
        validateInventoryId();

        inventoryIdInput.addEventListener("input", validateInventoryId);


        function validateDiscountId() {
            const discountId = discountIdInput.value;
            if (discountId.trim() === "") {
                document.getElementById("discountId-error").textContent = "discount Id is required.";
                document.getElementById("discountId-correct").textContent = "";
                isValid = false;
            } else {
                document.getElementById("discountId-error").textContent = "";
                document.getElementById("discountId-correct").textContent = "Valid discount Id";
            }
        }

        validateDiscountId();

        discountIdInput.addEventListener("input", validateDiscountId);

        function validatePrice() {
            const price = priceInput.value;
            if (isNaN(price) || price <= 0) {
                document.getElementById("price-error").textContent = "Price must be a positive number.";
                document.getElementById("price-correct").textContent = "";
                isValid = false;
            } else {
                document.getElementById("price-error").textContent = "";
                document.getElementById("price-correct").textContent = "Valid price";
            }
        }
        validatePrice();

        priceInput.addEventListener("input", validatePrice);

        function validateImage(input, errorId, correctId) {
            const file = input.files[0];
            if (!file) {
                document.getElementById(errorId).textContent = "Image is required.";
                document.getElementById(correctId).textContent = "";
                isValid = false;
            } else if (file.size > 2048000) { // Max size in bytes (2 MB)
                document.getElementById(errorId).textContent = "Image size cannot exceed 2 MB.";
                document.getElementById(correctId).textContent = "";
                isValid = false;
            } else {
                document.getElementById(errorId).textContent = "";
                document.getElementById(correctId).textContent = "Valid image";
            }
        }

        // Initial validation check on page load for the "Image" field
        validateImage(imgInput, "img-error", "img-correct");

        imgInput.addEventListener("change", function() {
            validateImage(this, "img-error", "img-correct");
        });



        function validateImage1(input, errorId, correctId) {
            const file = input.files[0];
            if (!file) {
                document.getElementById(errorId).textContent = "Image1 is required.";
                document.getElementById(correctId).textContent = "";
                isValid = false;
            } else if (file.size > 2048000) { // Max size in bytes (2 MB)
                document.getElementById(errorId).textContent = "Image1 size cannot exceed 2 MB.";
                document.getElementById(correctId).textContent = "";
                isValid = false;
            } else {
                document.getElementById(errorId).textContent = "";
                document.getElementById(correctId).textContent = "Valid image";
            }
        }

        // Initial validation check on page load for the "Image1" field
        validateImage1(img1Input, "img1-error", "img1-correct");

        img1Input.addEventListener("change", function() {
            validateImage1(this, "img1-error", "img1-correct");
        });



        function validateImage2(input, errorId, correctId) {
            const file = input.files[0];
            if (!file) {
                document.getElementById(errorId).textContent = "Image2 is required.";
                document.getElementById(correctId).textContent = "";
                isValid = false;
            } else if (file.size > 2048000) { // Max size in bytes (2 MB)
                document.getElementById(errorId).textContent = "Image2 size cannot exceed 2 MB.";
                document.getElementById(correctId).textContent = "";
                isValid = false;
            } else {
                document.getElementById(errorId).textContent = "";
                document.getElementById(correctId).textContent = "Valid image";
            }
        }

        validateImage2(img2Input, "img2-error", "img2-correct");

        img2Input.addEventListener("change", function() {
            validateImage2(this, "img2-error", "img2-correct");
        });

        function validateImage3(input, errorId, correctId) {
            const file = input.files[0];
            if (!file) {
                document.getElementById(errorId).textContent = "Image3 is required.";
                document.getElementById(correctId).textContent = "";
                isValid = false;
            } else if (file.size > 2048000) { // Max size in bytes (2 MB)
                document.getElementById(errorId).textContent = "Image3 size cannot exceed 2 MB.";
                document.getElementById(correctId).textContent = "";
                isValid = false;
            } else {
                document.getElementById(errorId).textContent = "";
                document.getElementById(correctId).textContent = "Valid image";
            }
        }

        validateImage2(img3Input, "img3-error", "img3-correct");

        img3Input.addEventListener("change", function() {
            validateImage3(this, "img3-error", "img3-correct");
        });


        nameInput.addEventListener("input", validateName);
        descriptionInput.addEventListener("input", validateDescription);
        SKUInput.addEventListener("input", validateSKU);
        categoryIdInput.addEventListener("input", validateCategoryId);
        inventoryIdInput.addEventListener("input", validateInventoryId);
        discountIdInput.addEventListener("input", validateDiscountId);
        priceInput.addEventListener("input", validatePrice);
        imgInput.addEventListener("input", () => validateImage(imgInput, "img-error"));
        img1Input.addEventListener("input", () => validateImage1(img1Input, "img1-error"));
        img2Input.addEventListener("input", () => validateImage2(img2Input, "img2-error"));
        img3Input.addEventListener("input", () => validateImage3(img3Input, "img3-error"));

        form.addEventListener("submit", function(event) {
            // Reset error messages
            document.querySelectorAll(".error-message").forEach(function(errorMsg) {
                errorMsg.textContent = "";
            });

            isValid = true;
            validateName();
            validateDescription();
            validateSKU();
            validateCategoryId();
            validateInventoryId();
            validateDiscountId();
            validatePrice();
            validateImage(imgInput, "img-error");
            validateImage(img1Input, "img1-error");
            validateImage(img2Input, "img2-error");
            validateImage(img3Input, "img3-error");

            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
@endsection
