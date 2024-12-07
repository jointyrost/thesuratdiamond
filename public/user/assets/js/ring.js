

// for coursal

  // Function to select a specific slide based on thumbnail click
  function selectSlide(index) {
    const carousel = new bootstrap.Carousel(document.getElementById('productCarousel'));
    carousel.to(index-1);

    // Update active thumbnail styling
    document.querySelectorAll('.single-product-thumb .thumbnail img').forEach((thumb, i) => {
      thumb.classList.toggle('active', i === index);
    });
  }
   
  // this is for the query  
  

// Tab area Start
     document.querySelectorAll('.multi-step-tab').forEach(tab => {
        tab.addEventListener('click', () => { 
          document.querySelectorAll('.multi-step-tab, .multi-step-tab-content').forEach(el => el.classList.remove('active'));
 
          tab.classList.add('active');
          document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
        });
      });


      document.querySelectorAll('.multi-step-second-tab').forEach(tab => {
        tab.addEventListener('click', () => { 
          document.querySelectorAll('.multi-step-second-tab, .multi-step-second-tab-content').forEach(el => el.classList.remove('active'));
 
          tab.classList.add('active');
          document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
        });
      });
// Tab area End




       // document.querySelector('.close').addEventListener('click', function() {
       //      $('#infoModal').modal('hide');
       //    });
     

        function popupShow(type, title){
            console.log('he,,0');
          var html ='';
          if(type== 'stoneType'){
              html= `<h4 class="modal-heading">${title}</h4>
                      <p class="modal-text"> 
                          We offer a large range of lab grown diamond, moissanite and sapphire stones. 
                          <br/>
                          No two lab grown diamonds are the same, which is why we provide 360 degree videos of every lab grown diamond we have available so you can see the exact stone you will be receiving in order to make the most informed decision possible. 
                          All our moissanite stones are Ideal cut (the best cut available), DEF colour (colourless), VVS2 clarity or above (Very very slight inclusions).
                      </p>`;

          } else if(type =='shapeType') {
            console.log('end');

              html += `<h4 class="modal-heading">${title}</h4><p class="modal-text"> This is the outline or form of any gemstone when viewed facing up. <br/> Lab grown diamond, moissanite and sapphire stones come in a variety of shapes. Select a shape that will suit both your ring setting and the recipient’s personality.</p>`;
              html += $("#"+type+"Content").html();
                         
          } else if(type == 'metalType'){
               html += `<h4 class="modal-heading">${title}</h4><p class="modal-text">This refers to the type of metal in the ring’s band. A ring may be single tone (one metal type/colour) or two tone (the ring has different metal types). The metal options available are Rose Gold, White Gold, Yellow Gold and Platinum..</p>`;
               html += $("#"+type+"Content").html();

          } else if(type=='settingType'){
                html += `<h4 class="modal-heading">${title}</h4><p class="modal-text">The setting style refers to how gemstones are set, or mounted, into a metal band. The ring setting is meant to highlight the beauty of the centre stone(s).<br/>Style refers to the overall design aesthetic that the ring setting helps create—whether it be solitaire, halo, trilogy etc.</p>`;
               html += $("#"+type+"Content").html();
          }else if(type =='bandType'){
              html += `<h4 class="modal-heading">${title}</h4><p class="modal-text">When choosing a ring, the style of the band plays an important role. There are three main types:</p>`;
              html +=`<ul><li><b>Plain</b> - These bands are just plain solid precious metal, with no stones set in the band.</li> <li><b>Pavé</b> - These bands have stones set uniformly around part or even the entire band.</li> <li><b>Accents</b> - These bands exhibit a more unique arrangement of stones set in the band itself. Accent bands often include a variety of different stone shapes and/or sizes.</li></ul>`;
               html += $("#"+type+"Content").html();
          }else if (type == 'settingProfile') {
            html = `<h4 class="modal-heading">${title}</h4>
                    <p class="modal-text">
                        The setting profile of a ring significantly affects its appearance and practicality. There are two main types:
                    </p>
                    <ul>
                        <li><b>High Set</b> - This profile positions the stone high above the band, allowing the ring to sit flush with most wedding bands. It gives the stone prominence but may be more exposed to accidental damage.</li>
                        <li><b>Low Set</b> - This profile keeps the stone close to the band, reducing the risk of it catching on clothing. While it offers better protection for the stone, it needs a curved wedding band to fit snugly around the lower setting. This need should be taken into account when considering pairing options.</li>
                    </ul>`;
                    html += $("#"+type+"Content").html();
        }else if (type == 'caratType') {
            html = `<h4 class="modal-heading">${title}</h4>
                    <p class="modal-text">
                        Carat is the unit used to measure the weight of lab grown diamonds. One carat equals 0.2 grams, or 200 milligrams. Although carat weight and stone size generally increase together, this isn't always noticeably the case, depending on the shape and cut of the gemstone.
                    </p>`;
        }else if (type == 'colorType') {
            html = `<h4 class="modal-heading">${title}</h4>
                    <p class="modal-text">
                        The Color of a stone actually refers to the lack of color, with perfectly colorless lab grown diamonds and moissanite considered the highest quality with the highest value, and brown or yellowish diamonds being the lowest quality.
                    </p>
                    <p><b>G - Near Colorless:</b> Still extremely clear but some very slight color may be seen if compared next to a higher-grade stone.</p>`;
        } else if (type == 'cutType') {
            html = `<h4 class="modal-heading">${title}</h4>
                    <p class="modal-text">
                        Cut is a very important component that makes up the quality of a precious stone and refers to how well-proportioned the dimensions of a lab grown diamond or moissanite are, and how these surfaces, or facets, are positioned to reflect light and create sparkle and brilliance.
                    </p>
                    <p><b>Cut Preview<img style-"position: relative; left:50%" src="user/assets/images/icons/cut/cut_i2.png" ></img></b></p>
                    <p><b>Ideal:</b> Cut to the most exacting standard. These diamonds have the most desirable dimensions and are proportioned to return the maximum light possible.</p>`;
        } else if (type == 'clarityType') {
            html = `<h4 class="modal-heading">${title}</h4>
                    <p class="modal-text">
                        Clarity is an important metric that grades the visual appearance of each gemstone. The fewer inclusions and blemishes a stone has, the better its clarity grade will be. Inclusions, or noticeable specs within the stone, are naturally occurring. However, more rare and expensive stones have less or even no visible inclusions at all.
                    </p>
                    <p><b>Clarity Preview<img style-"position: relative; left:50%" src="user/assets/images/icons/cut/clarity.png" ></img></b></p>
                    <p><b>VS2 - Very Slightly Included 2:</b> Slightly more small inclusions than a VS1. Still quite difficult to see and will mostly be invisible to the naked eye.</p>`;
        }else if (type == 'depthType') {
            html = `<h4 class="modal-heading">${title}</h4>
                    <p class="modal-text">
                        Depth Percentage is calculated by dividing the depth (D) of the stone by its width (W), then multiplying by 100 to get the depth-to-width ratio.
                    </p>`;
        } else if (type == 'tableType') {
            html = `<h4 class="modal-heading">${title}</h4>
                    <p class="modal-text">
                        Table Percentage is calculated by dividing the table (T) of the stone by its width (W), then multiplying by 100 to get the table-to-width ratio.
                    </p>`;
        } else if (type == 'lwType') {
            html = `<h4 class="modal-heading">${title}</h4>
                    <p class="modal-text">
                        Length : Width Ratio is determined by dividing the length (L) of the stone by its width (W).
                    </p>`;
        }
        
    
          $("#shapeTypeModal .modal-body").html(html);   
          $('#shapeTypeModal').modal('show');
          
        }
          





//  START 








// END 


       


      // THIS IS USED TO GIVE ACTIVE CLASS TO THE OBJECT OF THE CHOOSE SETTING 

      document.querySelectorAll('#shape .icon').forEach(tab => {
        tab.addEventListener('click', () => {
          if (tab.classList.contains('active')) {
            // If the tab is already active, remove the active class
            tab.classList.remove('active');
          } else {
            // If it's not active, remove active class from all, then add it to clicked tab
            document.querySelectorAll('#shape .icon').forEach(el => el.classList.remove('active'));
            tab.classList.add('active');
          }
        });
      });

      // Separate event listeners for other sections
      document.querySelectorAll('#metal_type .icon').forEach(tab => {
        tab.addEventListener('click', () => {
          if (tab.classList.contains('active')) {
            tab.classList.remove('active');
          } else {
            document.querySelectorAll('#metal_type .icon').forEach(el => el.classList.remove('active'));
            tab.classList.add('active');
          }
        });
      });

      document.querySelectorAll('#setting_style .icon').forEach(tab => {
        tab.addEventListener('click', () => {
          if (tab.classList.contains('active')) {
            tab.classList.remove('active');
          } else {
            document.querySelectorAll('#setting_style .icon').forEach(el => el.classList.remove('active'));
            tab.classList.add('active');
          }
        });
      });

      document.querySelectorAll('#band_style .icon').forEach(tab => {
        tab.addEventListener('click', () => {
          if (tab.classList.contains('active')) {
            tab.classList.remove('active');
          } else {
            document.querySelectorAll('#band_style .icon').forEach(el => el.classList.remove('active'));
            tab.classList.add('active');
          }
        });
      });

      document.querySelectorAll('#setting_profile .icon').forEach(tab => {
        tab.addEventListener('click', () => {
          if (tab.classList.contains('active')) {
            tab.classList.remove('active');
          } else {
            document.querySelectorAll('#setting_profile .icon').forEach(el => el.classList.remove('active'));
            tab.classList.add('active');
          }
        });
      });


      document.querySelectorAll('.nested-icon-div').forEach(tab => {
        tab.addEventListener('click', () => {
            // If the clicked element already has the 'active' class, remove it (toggle off)
            if (tab.classList.contains('active')) {
                tab.classList.remove('active');
    
                // Clear the text in the target element if the background is removed
                const parent = tab.getAttribute('data-parent');
                var apendValue = document.getElementById(parent);
                apendValue.textContent = ''; // Clear the text
            } else {
                // Remove 'active' class from all icon-div elements
                document.querySelectorAll('.nested-icon-div').forEach(el => el.classList.remove('active'));
                
                // Add 'active' class to the clicked icon-div
                tab.classList.add('active');
    
                // Get the data-tab attribute value of the clicked icon-div
                const parent = tab.getAttribute('data-parent');
                const dataText = tab.getAttribute('data-text');
    
                // Get the element with id=dataText
                const text = '(' + document.getElementById(dataText).textContent + ' selected)';
    
                // Update the target element text
                var apendValue = document.getElementById(parent);
                apendValue.textContent = text; 
            }
        });
    });
    

      //  THIS FUNCTION IS USED FOR MAKIN QUERY AND GETTING DATA


        
    // Global variables to store selections and all fetched products
    let selections = {}; // Store the user's selections for each type (shape, metal, etc.)
    let allProducts = [];
    let productsDisplayed = 0;
    let observer; // Declare observer globally



    // Function to fetch products from the server
    function fetchProducts(queryParam = '') {
        // Fetch data from the server using the dynamically built query parameter
        fetch(`/create-ring/filter${queryParam}`)
            .then(response => response.json()) // Convert the response to JSON
            .then(data => {
                console.log('fix',data);

                // Handle case where the API returns "Not found" or an empty array
                if (data.length === 0) {
                    document.getElementById('productGrid').innerHTML = "<div class='pt--30 d-flex justify-content-center align-items-center'><p class='text-center axil-btn btn-bg-lighter btn-load-more'>No product available</p></div>";
                    return; // Exit function if no data
                }

                allProducts = data; // Store fetched data globally
                productsDisplayed = 0; // Reset displayed product count
                document.getElementById('productGrid').innerHTML = ''; // Clear the product grid
                updateFrontEnd(); // Display the first set of products
                createObserver(); // Start lazy loading observer
            })
            .catch(error => console.error('Error:', error));
    }



    // Adding event listeners to all selectable options
    document.querySelectorAll('.getElement').forEach(function (element) {
    element.addEventListener('click', function () {
            const selectedId = element.getAttribute('data-id'); // Get the selected item ID
            const type = element.closest('.settingProperty').getAttribute('id'); // Get the type based on container ID

            // Toggle the selection: if already selected, remove it; otherwise, add it
            if (selections[type] === selectedId) {
                delete selections[type]; // Remove the selection if the same item is clicked again
            } else {
                selections[type] = selectedId; // Store the selected type and ID in the selections object
            }

            const queryParam = buildQueryParams(); // Build query params dynamically
            console.log(queryParam);

            // Fetch products based on the new query
            fetchProducts(queryParam);
        });
    });


    document.querySelectorAll('.single-select-ring').forEach(function (selectElement) {
        selectElement.addEventListener('change', function () {
            const selectedSort = this.value; // Get the selected sort option (e.g., 'latest', 'name', 'price', 'viewed')
    
            // Update the newSelections object to include the sort selection
            selections['sort'] = selectedSort; // Use 'sort' as the key for sorting preference
    
            // Rebuild query parameters and fetch products based on new selections
            const queryParam = buildQueryParams();
            fetchProducts(queryParam);
        });
    });
    


    // Function to build query parameters dynamically based on selections
    function buildQueryParams() {
        let query = '';
        for (const [key, value] of Object.entries(selections)) {
            query += `&${key}=${value}`;
        }
        return query ? `?${query.substring(1)}` : ''; // Return an empty string if no selections are made
    }

    function openProductModal(productIndex) {
        const data = allProducts[productIndex]; // Get selected product data
    
        document.querySelector('#quick-view-modal .add-to-cart a').setAttribute('data-id', data.id);
        var price = 0;

        if(userType=== 'wholesaler'){
            price = data.setting_wholesaler_price;
        } else{
            price = data.setting_user_price;
        }
        // Update the modal content with product data
        document.querySelector('#quick-view-modal .product-title').textContent = data.name;
        document.querySelector('#quick-view-modal .price-amount').textContent = `$${price}`;
        document.querySelector('#quick-view-modal .description').textContent = data.setting_description || "No description available";
        document.querySelector('#quick-view-modal .metalType').textContent =        `Metal Type     : ${data.metal_type}` || "No metal type available";
        document.querySelector('#quick-view-modal .SettingStyle').textContent =     `Setting Style  : ${data.setting_style}` || "No setting style available";
        document.querySelector('#quick-view-modal .BandTyped').textContent =        `Band Type      : ${data.band_type}` || "No band type available";
        document.querySelector('#quick-view-modal .SettingProfile').textContent =   `Setting Profile : ${data.setting_profile}` || "No setting profile available";
        document.querySelector('#quick-view-modal .SettingProfile').textContent =   `Setting Profile : ${data.setting_profile}` || "No setting profile available";
    
        // Update the modal image
        document.querySelector('#quick-view-modal .single-product-thumbnail .thumbnail img').src = data.full_setting_image;
        document.querySelector('#quick-view-modal .single-product-thumbnail .thumbnail a').href = data.full_setting_image;
        document.querySelector('#quick-view-modal .product-small-thumb .small-thumb-img img').src = data.full_setting_image;
    
        // You can add more fields as necessary
    }

    // console.log("User Type:", userType);
    // console.log("Wholesaler Type:", WHOLESALER_TYPE);

    function openDiamondModal(productIndex) {
        const data = newAllProducts[productIndex]; // Get selected product data
    
        document.querySelector('#quick-view-modal-diamond .add-to-cart a').setAttribute('data-id', data.id);

        // Update the modal content with product data
        document.querySelector('#quick-view-modal-diamond .product-title').textContent = data.name;

        var price = 0;

        if(userType=== 'wholesaler'){
            price = data.stone_wholesaler_price;
        } else{
            price = data.stone_user_price;
        }

        document.querySelector('#quick-view-modal-diamond .price-amount').textContent = `$${price}`;

        document.querySelector('#quick-view-modal-diamond .detailType').textContent =       `Stone Details`;
        document.querySelector('#quick-view-modal-diamond .stoneType').textContent =        `Diamond Type     : ${data.stoneType}` || "No metal type available";
        document.querySelector('#quick-view-modal-diamond .shape').textContent =            `Shape   : ${data.shape}` || "No setting style available";
        document.querySelector('#quick-view-modal-diamond .stone_clarity').textContent =    `Clarity      : ${data.stone_clarity}` || "No band type available";
        document.querySelector('#quick-view-modal-diamond .stone_carat').textContent =      `Carat : ${data.stone_carat}` || "No setting profile available";
        document.querySelector('#quick-view-modal-diamond .cut').textContent =              `Cut : ${data.cut}` || "No setting profile available";
        document.querySelector('#quick-view-modal-diamond .length').textContent =           `Length : ${data.length}` || "No setting profile available";
        document.querySelector('#quick-view-modal-diamond .width').textContent =            `Width : ${data.width}` || "No setting profile available";
        document.querySelector('#quick-view-modal-diamond .depth').textContent =            `Depth : ${data.depth}` || "No setting profile available";
    
        // Update the modal image
        document.querySelector('#quick-view-modal-diamond .single-product-thumb .carousel-inner img').src = data.full_stone_image;
        document.querySelector('#quick-view-modal-diamond .single-product-thumb .thumbnail img').src = data.full_stone_image;
        document.querySelector('#quick-view-modal-diamond .single-product-thumb .carousel-inner a').href = data.full_stone_image;


      // Show the modal
      const modal = new bootstrap.Modal(document.getElementById('quick-view-modal-diamond'));
      modal.show();
        // You can add more fields as necessary
    }

    function addToCartTemp(productId) {
        
        // Store the main product ID temporarily in sessionStorage
        sessionStorage.setItem('mainProductID', productId);
        const relatedProductId = sessionStorage.getItem('relatedProductID');

        console.log("sumto",[productId,relatedProductId]);

        // Close the modal
        const modal = document.getElementById('quick-view-modal');
        const modalInstance = bootstrap.Modal.getInstance(modal) || new bootstrap.Modal(modal); // Get existing instance or create new
        modalInstance.hide(); // Close the modal

        if(relatedProductId){
        
            showAddToCart();
        }else{

            // Switch to the "Choose Stones" tab
        const stonesTab = document.querySelector('#step2-tab'); // "Choose Stones" tab
        const tabInstance = new bootstrap.Tab(stonesTab); // Create a Bootstrap tab instance
        tabInstance.show(); // Activate the tab
     
        }
        

       

        //  Scroll to the #stoneType section
        const stoneTypeSection = document.querySelector('#step2-tab');
        stoneTypeSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    // Function to finalize the cart with both products
    function finalizeCart(relatedProductId) {
        // Retrieve the main product ID from sessionStorage
        const mainProductId = sessionStorage.getItem('mainProductID');
        sessionStorage.setItem('relatedProductID', relatedProductId);

        
        if (mainProductId) {
            // Here, you can pass both product IDs to the backend or handle them in the frontend
            console.log("Main Product ID:", mainProductId);
            console.log("Related Product ID:", relatedProductId);

    
           
            const modal = document.getElementById('quick-view-modal-diamond');
            const modalInstance = bootstrap.Modal.getInstance(modal) || new bootstrap.Modal(modal); // Get existing instance or create new
            modalInstance.hide(); // Close the modal


            showAddToCart();
            // Display a message to the user
        } else {


            const modal = document.getElementById('quick-view-modal-diamond');
            const modalInstance = bootstrap.Modal.getInstance(modal) || new bootstrap.Modal(modal); // Get existing instance or create new
            modalInstance.hide(); // Close the modal
            // Switch to the "Choose Stones" tab
            const stonesTab = document.querySelector('#step1-tab'); // "Choose Stones" tab
            const tabInstance = new bootstrap.Tab(stonesTab); // Create a Bootstrap tab instance
            tabInstance.show(); // Activate the tab
        }
    }


    function showAddToCart(){
        
        $('#step3-tab').removeClass('disabled').attr('aria-disabled', 'false');
        
        const mainProductId = sessionStorage.getItem('mainProductID');
        const relatedProductId = sessionStorage.getItem('relatedProductID');
        let totalPrice = 0; // Change variable name to totalPrice for clarity
        // Switch to the "Choose Stones" tab
        const addToCartTab = document.querySelector('#step3-tab'); // "Choose Stones" tab
        const tabInstance = new bootstrap.Tab(addToCartTab); // Create a Bootstrap tab instance
        tabInstance.show(); // Activate the tab

        fetch(`/create-ring/filter?id=${mainProductId}`)
        .then(response => response.json()) // Convert the response to JSON
        .then(data => {
            let price = 0; // Local variable for product price

            if(userType === "wholesaler"){
                document.querySelector('#firstProduct .price').innerText = data[0].setting_wholesaler_price ;
                price = parseFloat(data[0].setting_wholesaler_price) || 0; // Convert to float
                console.log(price);
            }else{
                document.querySelector('#firstProduct .price').innerText = data[0].setting_user_price ;
                price = parseFloat(data[0].setting_user_price) || 0; // Convert to float
                console.log(price);
            }
            document.querySelector('#firstProduct input').value =  data[0].id;

            document.querySelector('#firstProduct .metalType').innerText =  `Metal Type     : ${data[0].metal_type}` || "No metal type available";
            document.querySelector('#firstProduct .SettingStyle').innerText =  `Setting Style  : ${data[0].setting_style}` || "No setting style available";
            document.querySelector('#firstProduct .BandTyped').innerText = `Band Type      : ${data[0].band_type}` || "No band type available";
            document.querySelector('#firstProduct .SettingProfile').innerText =`Setting Profile : ${data[0].setting_profile}` || "No setting profile available";
            document.querySelector('#firstProduct .settingShape').innerText =`Shape : ${data[0].shape}` || "No Shape available";
            document.querySelector('#firstProduct h5').innerText = data[0].name ;
            document.querySelector('#firstProduct img').src = data[0].full_setting_image ;
           
            
            totalPrice += price; // Accumulate price
            
        })
        .catch(error => console.error('Error:', error));

       

        fetch(`/create-diamond/filter?id=${relatedProductId}`)
        .then(response => response.json()) // Convert the response to JSON
        .then(data => {
            let price = 0; // Local variable for product price


            if(userType === "wholesaler"){
                document.querySelector('#secondProduct .price').innerText = data[0].stone_wholesaler_price ;
                price = parseFloat(data[0].stone_wholesaler_price) || 0;
                console.log(price);
            }else{
                document.querySelector('#secondProduct .price').innerText = data[0].stone_user_price ;
                price = parseFloat(data[0].stone_user_price) || 0; // Convert to float
                console.log(price);
            }
            document.querySelector('#secondProduct input').value =  data[0].id;
            document.querySelector('#secondProduct .stoneType').innerText =  `Stone Type     : ${data[0].metal_type}` || "No metal type available";
            document.querySelector('#secondProduct .shape').innerText =  `Stone Shape  : ${data[0].shape}` || "No Shape available";
            document.querySelector('#secondProduct .color').innerText = `Color     : ${data[0].d_to_z_selection}` || "No Color available";
            document.querySelector('#secondProduct .stone_clarity').innerText =`Setting Clarity : ${data[0].stone_clarity}` || "No Clarity available";
            document.querySelector('#secondProduct .stone_carat').innerText =`Carat : ${data[0].shape}` || "No Carat available";
            document.querySelector('#secondProduct .cut').innerText =`Cut : ${data[0].cut}` || "No Cut available";
            document.querySelector('#secondProduct .length').innerText =`Length : ${data[0].length}` || "No Length available";
            document.querySelector('#secondProduct .width').innerText =`Width : ${data[0].width}` || "No Width available";
            document.querySelector('#secondProduct .depth').innerText =`Depth : ${data[0].depth}` || "No Depth available";
            document.querySelector('#secondProduct h5').innerText = data[0].name ;
            document.querySelector('#secondProduct img').src = data[0].full_stone_image ;
           
            
            totalPrice += price; // Accumulate price
            document.getElementById('totalPrice').innerText = `$${totalPrice.toFixed(2)}`;
            
        })
        .catch(error => console.error('Error:', error));

    }


    // Function to dynamically update the front-end with fetched data
    function updateFrontEnd() {
        // Check if all products have been displayed or there are no products
        if (allProducts.length === 0) {
            document.getElementById('productGrid').innerHTML = "<p class='axil-btn btn-bg-lighter btn-load-more'>No More Product</p>";
            return; // Exit function if no products are available
        }

        // Loop through all remaining products
        while (productsDisplayed < allProducts.length) {
            const data = allProducts[productsDisplayed]; // Get the current product
            var  price =0;
            if(userType=== 'wholesaler'){
                price = data.setting_wholesaler_price;
            } else{
                price = data.setting_user_price;
            }

            const productHTML = `
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="axil-product product-style-one has-color-pick mt--40">
                    <div class="thumbnail">
                        <a data-bs-toggle="modal" data-bs-target="#quick-view-modal" href="javascript:void(0)"
                        onclick="openProductModal(${productsDisplayed})"> <!-- Call function on click -->
                            <img src="${data.full_setting_image}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <h5 class="title">
                                <a data-bs-toggle="modal" data-bs-target="#quick-view-modal" href="javascript:void(0)"
                                onclick="openProductModal(${productsDisplayed})">${data.name}</a>
                            </h5>
                            <div class="product-price-variant">
                                <span class="price current-price">${price}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;

            // Append the product HTML to the product grid
            document.getElementById('productGrid').insertAdjacentHTML('beforeend', productHTML);
            
            // Increment the count of displayed products
            productsDisplayed++;

            // Break to avoid loading all products at once (this controls lazy load pace)
            if (productsDisplayed % 10 === 0) {
                break; // Load in batches (you can adjust the number as needed)
            }
        }

        // If all products are displayed, disconnect the observer
        if (productsDisplayed >= allProducts.length) {
            observer.disconnect();

            console.log("khatam");
            
      const noMoreProductsMessage = '<p class="text-center axil-btn btn-bg-lighter btn-load-more">No More Products</p>';
      document.getElementById('productGrid').insertAdjacentHTML('beforeend', noMoreProductsMessage);
        }
    }




    // Function to create the IntersectionObserver for lazy loading
    function createObserver() {
        const observerTarget = document.getElementById('observerTarget');
        
        observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // If the observer target is in view, load more products
                    updateFrontEnd();
                }
            });
        });

        // Start observing the target element
        observer.observe(observerTarget);
    }

    // Call this function on page load to fetch and display the default products
    document.addEventListener('DOMContentLoaded', function () {
        fetchProducts(); // Fetch products with no selections (default call)
    });



//  FOR THE STONE QUERY 

    let newSelections = {stoneType:"lab-grown-diamond"}; // Store the user's selections for each type (shape, metal, etc.)
    let newAllProducts = [];
    let newProductsDisplayed = 0;
    let newObserver; // Declare observer globally


// Function to fetch products from the server


    function newFetchProducts(queryParam = '') {
        // Fetch data from the server using the dynamically built query parameter
    //  console.log("cho");
        fetch(`/create-diamond/filter${queryParam}`)
            .then(response => response.json()) // Convert the response to JSON
            .then(data => {

                console.log("new",data);

                // Handle case where the API returns "Not found" or an empty array
                if (data.length === 0) {
                    document.getElementById('newProductGrid').innerHTML = "<div class='pt--30 d-flex justify-content-center align-items-center'><p class='text-center axil-btn btn-bg-lighter btn-load-more'>No Product Available</p></div>";

                    if (typeof newObserver !== 'undefined' && newObserver !== null) {
                    newObserver.disconnect();
                }
                return; // Exit function if no data
                }

                console.log(newSelections);
                newAllProducts = data; // Store fetched data globally
                newProductsDisplayed = 0; // Reset displayed product count
                document.getElementById('newProductGrid').innerHTML = ''; // Clear the product grid
                newUpdateFrontEnd(); // Display the first set of products
                newCreateObserver(); // Start lazy loading observer
            })
            .catch(error => console.error('Error:', error));
    }



// Adding event listeners to all selectable options
document.querySelectorAll('.newGetElement').forEach(function (element) {
  element.addEventListener('click', function () {
      const selectedId = element.getAttribute('data-id'); // Get the selected item ID
      const type = element.closest('.stoneProperty').getAttribute('id'); // Get the type based on container ID

      // Toggle the selection: if already selected, remove it; otherwise, add it
      if (newSelections[type] === selectedId) {
          delete newSelections[type]; // Remove the selection if the same item is clicked again
      } else {
        newSelections[type] = selectedId; // Store the selected type and ID in the selections object
      }

      const queryParam = newBuildQueryParams(); // Build query params dynamically
      console.log(queryParam);

      // Fetch products based on the new query
      newFetchProducts(queryParam);
  })
});


// Sorting  query 

document.querySelectorAll('.single-select').forEach(function (selectElement) {
    selectElement.addEventListener('change', function () {
        const selectedSort = this.value; // Get the selected sort option (e.g., 'latest', 'name', 'price', 'viewed')

        // Update the newSelections object to include the sort selection
        newSelections['sort'] = selectedSort; // Use 'sort' as the key for sorting preference

        // Rebuild query parameters and fetch products based on new selections
        const queryParam = newBuildQueryParams();
        newFetchProducts(queryParam);
    });
});



// Function to build query parameters dynamically based on selections
function newBuildQueryParams() {
  let query = '';
  for (const [key, value] of Object.entries(newSelections)) {
      query += `&${key}=${value}`;
  }
  return query ? `?${query.substring(1)}` : ''; // Return an empty string if no selections are made
}








// Function to dynamically update the front-end with fetched data
function newUpdateFrontEnd() {
  // Check if all products have been displayed or there are no products
  if (newAllProducts.length === 0) {
      document.getElementById('newProductGrid').innerHTML = "<div class='pt--30 d-flex justify-content-center align-items-center'><p class='text-center axil-btn btn-bg-lighter btn-load-more'>No Product Available</p></div>";

       // Disconnect observer if there are no products to display
       if (typeof newObserver !== 'undefined' && newObserver !== null) {
        newObserver.disconnect();
    }
    return; // Exit function if no products are available
  }

  // Loop through all remaining products
  while (newProductsDisplayed < newAllProducts.length) {
      const data = newAllProducts[newProductsDisplayed]; // Get the current product
      if(userType=== 'wholesaler'){
        price = data.stone_wholesaler_price;
    } else{
        price = data.stone_user_price;
    }
      const productHTML = `
      <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="axil-product product-style-one has-color-pick mt--40">
                    <div class="thumbnail">
                        <a  data-bs-target="#quick-view-modal-diamond" href="javascript:void(0)"
                        onclick="openDiamondModal(${newProductsDisplayed})"> <!-- Call function on click -->
                            <img src="${data.full_stone_image}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <h5 class="title">
                                <a data-bs-target="#quick-view-modal-diamond" href="javascript:void(0)"
                                onclick="openDiamondModal(${newProductsDisplayed})">${data.name}</a>
                            </h5>
                            <div class="product-price-variant">
                                <span class="price current-price">${price}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;

      // Append the product HTML to the product grid
      document.getElementById('newProductGrid').insertAdjacentHTML('beforeend', productHTML);
      
      // Increment the count of displayed products
      newProductsDisplayed++;

      // Break to avoid loading all products at once (this controls lazy load pace)
      if (newProductsDisplayed % 10 === 0) {
          break; // Load in batches (you can adjust the number as needed)
      }
  }

  // If all products are displayed, disconnect the observer
  if (newProductsDisplayed >= newAllProducts.length) {

    if(typeof newObserver !== 'undefined' && newObserver !== null){
        newObserver.disconnect();

    }


    // Check if the no more products message is already present
    const noMoreProductsMessage = '<p class="text-center axil-btn btn-bg-lighter btn-load-more">No More Products</p>';
    const messageContainer = document.getElementById('newProductGrid');

    // Use a condition to check if the message already exists
    if (!messageContainer.querySelector('.btn-load-more')) {
        messageContainer.insertAdjacentHTML('beforeend', noMoreProductsMessage);
    }
  }
}






// Function to create the IntersectionObserver for lazy loading
function newCreateObserver() {
  const newObserverTarget = document.getElementById('newObserverTarget');
  
  newObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              // If the observer target is in view, load more products
              newUpdateFrontEnd();
          }
      });
  });

  // Start observing the target element
  newObserver.observe(newObserverTarget);
}

// Call this function on page load to fetch and display the default products
document.addEventListener('DOMContentLoaded', function () {
  newFetchProducts("?stoneType=lab-grown-diamond"); // Fetch products with no selections (default call)
});





// carat update value


      // Create the carat range slider
      var caratSlider = document.getElementById('caratRange');

    // console.log(caratSlider);
      noUiSlider.create(caratSlider, {
          start: [0.75, 2.50],  // Initial slider values
          connect: true,
          range: {
              'min': 0.30,  // Minimum value
              'max': 10.00  // Maximum value
          },
          step: 0.01,  // Step size
          tooltips: [true, true],  // Enable tooltips on both handles
          format: {
              to: function (value) {
                  return value.toFixed(2) + ' ct';  // Format tooltip with carat
              },
              from: function (value) {
                  return Number(value.replace(' ct', ''));  // Parse value back to number
              }
          }
      });

      
      // Add carat scale labels (3 before and 2 after 5.00)
      var caratRanges = [0.30, 2.50, 5.00, 7.50,  10.00];  // 3 before and 2 after 5.00
      var labelContainer = document.querySelector('.carat-labels');

      caratRanges.forEach(function(carat) {
          var label = document.createElement('span');
          label.innerText = carat.toFixed(2) + " ct";

          // Position the label based on carat range
          var position = (carat - 0.30) / (10.00 - 0.30) * 100;  // Percentage position relative to range
          label.style.left = position + "%";
          label.style.position = 'absolute';
          label.style.transform = 'translateX(-50%)';  // Center the label horizontally
          label.style.fontSize = '12px';  // Optional: Adjust the font size

          labelContainer.appendChild(label);
      });
            

      // Update the carat start and end values dynamically
      var startCarat = document.getElementById('startCarat');
      var endCarat = document.getElementById('endCarat');
    //   var caratStartLabel = document.getElementById('carat-start');
    //   var caratEndLabel = document.getElementById('carat-end');

      caratSlider.noUiSlider.on('change', function (values, handle) {

        var numericValueStart = values[0].replace(' ct', '');  // Remove 'ct' from the start value
        var numericValueEnd = values[1].replace(' ct', '');
          if (handle === 0) {
              caratStartLabel.innerHTML = values[0];
              startCarat.value = numericValueStart;
              startCarat.setAttribute('data-id', numericValueStart);
          } else {
              caratEndLabel.innerHTML = values[1];
              endCarat.value = numericValueEnd;
              endCarat.setAttribute('data-id', numericValueEnd);
          }
          console.log(numericValueStart);

          newSelections['caratStart'] = numericValueStart; // Store the start color (e.g., 'J')
          newSelections['caratEnd'] = numericValueEnd;   // Store the end color (e.g., 'D')

          console.log(newSelections);
          const queryParam = newBuildQueryParams(); // Build query params dynamically
          console.log(queryParam);

          // Fetch products based on the new color range selection
          newFetchProducts(queryParam);


      });




    //   THS IS FOR THE COLOURED CARAT RANGE

      // Create the carat range slider
      var caratSliderNatural = document.getElementById('caratRangeNatural');

    // console.log(caratSlider);
      noUiSlider.create(caratSliderNatural, {
          start: [0.75, 2.50],  // Initial slider values
          connect: true,
          range: {
              'min': 0.30,  // Minimum value
              'max': 10.00  // Maximum value
          },
          step: 0.01,  // Step size
          tooltips: [true, true],  // Enable tooltips on both handles
          format: {
              to: function (value) {
                  return value.toFixed(2) + ' ct';  // Format tooltip with carat
              },
              from: function (value) {
                  return Number(value.replace(' ct', ''));  // Parse value back to number
              }
          }
      });

      
      // Add carat scale labels (3 before and 2 after 5.00)
      var caratRangesNatural = [0.30, 2.50, 5.00, 7.50,  10.00];  // 3 before and 2 after 5.00
      var labelContainer = document.querySelector('.caratNatural-labels');

      caratRangesNatural.forEach(function(carat) {
          var label = document.createElement('span');
          label.innerText = carat.toFixed(2) + " ct";

          // Position the label based on carat range
          var position = (carat - 0.30) / (10.00 - 0.30) * 100;  // Percentage position relative to range
          label.style.left = position + "%";
          label.style.position = 'absolute';
          label.style.transform = 'translateX(-50%)';  // Center the label horizontally
          label.style.fontSize = '12px';  // Optional: Adjust the font size
          label.style.fontWeight = 'bold';
          
          labelContainer.appendChild(label);
      });
            

      // Update the carat start and end values dynamically
      var startCarat = document.getElementById('startCaratNatural');
      var endCarat = document.getElementById('endCaratNatural');
      var caratStartLabel = document.getElementById('carat-start');
      var caratEndLabel = document.getElementById('carat-end');

      caratSliderNatural.noUiSlider.on('change', function (values, handle) {
          if (handle === 0) {
              caratStartLabel.innerHTML = values[0];
              startCarat.value = values[0];
              startCarat.setAttribute('data-id', values[0]);
          } else {
              caratEndLabel.innerHTML = values[1];
              endCarat.value = values[1];
              endCarat.setAttribute('data-id', values[1]);
          }

          newSelections['caratStart'] = values[0]; // Store the start color (e.g., 'J')
          newSelections['caratEnd'] = values[1];   // Store the end color (e.g., 'D')

          console.log(newSelections);
          const queryParam = newBuildQueryParams(); // Build query params dynamically
          console.log(queryParam);

          // Fetch products based on the new color range selection
          newFetchProducts(queryParam);


      });



      
      // Create the carat range slider
      var caratSliderColoured = document.getElementById('caratRangeColoured');

    // console.log(caratSlider);
      noUiSlider.create(caratSliderColoured, {
          start: [0.75, 2.50],  // Initial slider values
          connect: true,
          range: {
              'min': 0.30,  // Minimum value
              'max': 10.00  // Maximum value
          },
          step: 0.01,  // Step size
          tooltips: [true, true],  // Enable tooltips on both handles
          format: {
              to: function (value) {
                  return value.toFixed(2) + ' ct';  // Format tooltip with carat
              },
              from: function (value) {
                  return Number(value.replace(' ct', ''));  // Parse value back to number
              }
          }
      });

      
      // Add carat scale labels (3 before and 2 after 5.00)
      var caratRangesColoured = [0.30, 2.50, 5.00, 7.50,  10.00];  // 3 before and 2 after 5.00
      var labelContainer = document.querySelector('.caratColoured-labels');

      caratRangesColoured.forEach(function(carat) {
          var label = document.createElement('span');
          label.innerText = carat.toFixed(2) + " ct";

          // Position the label based on carat range
          var position = (carat - 0.30) / (10.00 - 0.30) * 100;  // Percentage position relative to range
          label.style.left = position + "%";
          label.style.position = 'absolute';
          label.style.transform = 'translateX(-50%)';  // Center the label horizontally
          label.style.fontSize = '12px';  // Optional: Adjust the font size

          labelContainer.appendChild(label);
      });
            

      // Update the carat start and end values dynamically
      var startCarat = document.getElementById('startCaratColoured');
      var endCarat = document.getElementById('endCaratColoured');
      var caratStartLabel = document.getElementById('carat-start');
      var caratEndLabel = document.getElementById('carat-end');

      caratSliderColoured.noUiSlider.on('change', function (values, handle) {
          if (handle === 0) {
              caratStartLabel.innerHTML = values[0];
              startCarat.value = values[0];
              startCarat.setAttribute('data-id', values[0]);
          } else {
              caratEndLabel.innerHTML = values[1];
              endCarat.value = values[1];
              endCarat.setAttribute('data-id', values[1]);
          }

          newSelections['caratStart'] = values[0]; // Store the start color (e.g., 'J')
          newSelections['caratEnd'] = values[1];   // Store the end color (e.g., 'D')

          console.log(newSelections);
          const queryParam = newBuildQueryParams(); // Build query params dynamically
          console.log(queryParam);

          // Fetch products based on the new color range selection
          newFetchProducts(queryParam);


      });

      //THIS ONE IS FOR PRICE




      // THIS JS IS USED FOR GIVEN RANNGE TO PRICE

            // Initialize the range slider using noUiSlider
            const priceSlider = document.getElementById('priceRange');

            noUiSlider.create(priceSlider, {
                start: [1, 4000], // Start from 1, up to 40,000
                connect: true, // Display the filled connection between the handles
                range: {
                    'min': 1, // Minimum value is 1
                    'max': 40000 // Max range for the slider
                },
                tooltips: true, // Display the current values above the slider handles
                format: {
                    to: function(value) {
                        return Math.round(value); // Remove decimal places
                    },
                    from: function(value) {
                        return Number(value);
                    }
                }
            });
      

            var priceRanges = [0, 10000, 20000, 30000, 40000];  // Adjust price values as needed
            var priceLabelContainer = document.querySelector('.price-labels');

            priceRanges.forEach(function(price) {
                var label = document.createElement('span');
                label.innerText = "$" + price.toLocaleString();  // Format as USD with commas

                // Position the label based on price range
                var position = (price - 0) / (40000 - 0) * 100;  // Percentage position relative to range
                label.style.left = position + "%";
                label.style.position = 'absolute';
                label.style.transform = 'translateX(-50%)';  // Center the label horizontally
                label.style.fontSize = '12px';  // Optional: Adjust the font size

                priceLabelContainer.appendChild(label);
            });
            // Update labels dynamically when the slider value changes
                        // Selecting the necessary elements for the price slider
            var startPrice = document.getElementById('startPrice');
            var endPrice = document.getElementById('endPrice');
            var priceStartLabel = document.getElementById('price-start');
            var priceEndLabel = document.getElementById('price-end');

            // Adding 'change' event listener to the price slider
            priceSlider.noUiSlider.on('change', function (values, handle) {
                if (handle === 0) {
                    // Update start price label and hidden input
                    startPrice.value = values[0];
                    startPrice.setAttribute('data-id', values[0]); // Update data-id as well
                } else {
                    // Update end price label and hidden input
                    endPrice.value = values[1];
                    endPrice.setAttribute('data-id', values[1]); // Update data-id as well
                }

                // Store the new selections for price range in the newSelections object
                newSelections['priceStart'] = values[0];
                newSelections['priceEnd'] = values[1];

                console.log(newSelections);

                const queryParam = newBuildQueryParams(); // Build query params dynamically
                console.log(queryParam);

                // Fetch products based on the new price range selection
                newFetchProducts(queryParam);
            });






                // Initialize the price range slider using noUiSlider
    var priceSliderColoured = document.getElementById('priceRangeColoured');

    noUiSlider.create(priceSliderColoured, {
        start: [1, 4000],  // Initial slider values (start from 1, up to 40,000)
        connect: true,  // Connect the handles for a continuous range
        range: {
            'min': 1,  // Minimum price
            'max': 40000  // Maximum price
        },
        step: 1,  // Step size of 1
        tooltips: [true, true],  // Enable tooltips on both handles
        format: {
            to: function (value) {
                return Math.round(value);   // Format tooltip with price in USD
            },
            from: function (value) {
                return Number(value); // Parse value back to number
            }
        }
    });

    // Add price scale labels
    var priceRangesColoured = [0, 10000, 20000, 30000, 40000];  // Price range for the labels
    var priceLabelContainer = document.querySelector('.priceColoured-labels');

    priceRangesColoured.forEach(function (price) {
        var label = document.createElement('span');
        label.innerText = "$" + price.toLocaleString();  // Format price as USD with commas

        // Position the label based on price range
        var position = (price - 0) / (40000 - 0) * 100;  // Percentage position relative to range
        label.style.left = position + "%";
        label.style.position = 'absolute';
        label.style.transform = 'translateX(-50%)';  // Center the label horizontally
        label.style.fontSize = '12px';  // Adjust the font size

        priceLabelContainer.appendChild(label);  // Append the label to the container
    });

    // Update the price start and end values dynamically
    var startPriceColoured = document.getElementById('startPriceColoured');
    var endPriceColoured = document.getElementById('endPriceColoured');
    var priceStartLabel = document.getElementById('price-start');
    var priceEndLabel = document.getElementById('price-end');

    // Add 'change' event listener to the price slider
    priceSliderColoured.noUiSlider.on('change', function (values, handle) {
        if (handle === 0) {  // Update start price
            priceStartLabel.innerHTML = values[0];
            startPriceColoured.value = values[0];
            startPriceColoured.setAttribute('data-id', values[0]);  // Set data-id for start price
        } else {  // Update end price
            priceEndLabel.innerHTML = values[1];
            endPriceColoured.value = values[1];
            endPriceColoured.setAttribute('data-id', values[1]);  // Set data-id for end price
        }

        // Store the new price range in newSelections object
        newSelections['priceStart'] = values[0];
        newSelections['priceEnd'] = values[1];

        console.log(newSelections);  // Debugging: display current selections

        const queryParam = newBuildQueryParams();  // Build query params dynamically
        console.log(queryParam);  // Debugging: display query params

        // Fetch products based on the new price range selection
        newFetchProducts(queryParam);
    });

      
            // THIS JS IS USED FOR GIVEN RANNGE TO CARAT
      


                // Initialize the price range slider using noUiSlider
    var priceSliderNatural = document.getElementById('priceRangeNatural');

    noUiSlider.create(priceSliderNatural, {
        start: [1, 4000],  // Initial slider values (start from 1, up to 40,000)
        connect: true,  // Connect the handles for a continuous range
        range: {
            'min': 1,  // Minimum price
            'max': 40000  // Maximum price
        },
        step: 1,  // Step size of 1
        tooltips: [true, true],  // Enable tooltips on both handles
        format: {
            to: function (value) {
                return Math.round(value); // Remove decimal places
            },
            from: function (value) {
                return Number(value);
            }
        }
    });

    // Add price scale labels
    var priceRangesNatural = [0, 10000, 20000, 30000, 40000];  // Price range for the labels
    var priceLabelContainer = document.querySelector('.priceNatural-labels');

    priceRangesNatural.forEach(function (price) {
        var label = document.createElement('span');
        label.innerText = "$" + price.toLocaleString();  // Format price as USD with commas

        // Position the label based on price range
        var position = (price - 0) / (40000 - 0) * 100;  // Percentage position relative to range
        label.style.left = position + "%";
        label.style.position = 'absolute';
        label.style.transform = 'translateX(-50%)';  // Center the label horizontally
        label.style.fontSize = '12px';  // Adjust the font size
        label.style.fontWeight = 'bold'; 
        priceLabelContainer.appendChild(label);  // Append the label to the container
    });

    // Update the price start and end values dynamically
    var startPriceNatural = document.getElementById('startPriceNatural');
    var endPriceNatural = document.getElementById('endPriceNatural');
    var priceStartLabel = document.getElementById('price-start');
    var priceEndLabel = document.getElementById('price-end');

    // Add 'change' event listener to the price slider
    priceSliderNatural.noUiSlider.on('change', function (values, handle) {
        if (handle === 0) {  // Update start price
            priceStartLabel.innerHTML = values[0];
            startPriceNatural.value = values[0];
            startPriceNatural.setAttribute('data-id', values[0]);  // Set data-id for start price
        } else {  // Update end price
            priceEndLabel.innerHTML = values[1];
            endPriceNatural.value = values[1];
            endPriceNatural.setAttribute('data-id', values[1]);  // Set data-id for end price
        }

        // Store the new price range in newSelections object
        newSelections['priceStart'] = values[0];
        newSelections['priceEnd'] = values[1];

        console.log(newSelections);  // Debugging: display current selections

        const queryParam = newBuildQueryParams();  // Build query params dynamically
        console.log(queryParam);  // Debugging: display query params

        // Fetch products based on the new price range selection
        newFetchProducts(queryParam);
    });



            



      // THIS JS IS USED FOR GIVEN RANNGE TO COLOR

// Color labels for J to D
const colors = ['J', 'I', 'H', 'G', 'F', 'E', 'D'];

// Create and position color labels
var colorLabelContainer = document.querySelector('.color-labels');  // Container for the labels

colors.forEach(function(color, index) {
    var label = document.createElement('span');
    label.innerText = color;

    // Calculate position as a percentage relative to the color range
    var position = (index) / (colors.length - 1) * 100;  // Percentage position relative to range
    label.style.left = position + "%";
    label.style.position = 'absolute';
    label.style.transform = 'translateX(-50%)';  // Center the label horizontally
    label.style.fontSize = '12px';  // Optional: Adjust the font size
    label.style.fontWeight = 'bold';
    colorLabelContainer.appendChild(label);
});

// Initialize the color range slider
const colorSlider = document.getElementById('colorRange');

noUiSlider.create(colorSlider, {
    start: [5, 7], // Start from F to D (indexing the colors as 5 (F) to 7 (D))
    connect: true,
    range: {
        'min': 1,  // J (index 1)
        'max': 7   // D (index 7)
    },
    step: 1, // Ensure the slider only moves between specific color labels (whole numbers)
    tooltips: [true, true],
    format: {
        to: function(value) {
            // Display the color label based on slider value
            return colors[Math.round(value) - 1]; // Convert slider index to color label
        },
        from: function(value) {
            return Number(value);
        }
    }
});

// Selecting the necessary elements for the color slider
var startColor = document.getElementById('startColor');
var endColor = document.getElementById('endColor');
// var colorStartLabel = document.getElementById('color-start');
// var colorEndLabel = document.getElementById('color-end');

// Add event listener to update color labels and hidden inputs when slider value changes
colorSlider.noUiSlider.on('change', function(values, handle) {
    if (handle === 0) {
        // Update start color label and hidden input
        // colorStartLabel.innerHTML = values[0];
        startColor.value = values[0];
        startColor.setAttribute('data-id', values[0]);
    } else {
        // Update end color label and hidden input
        // colorEndLabel.innerHTML = values[1];
        endColor.value = values[1];
        endColor.setAttribute('data-id', values[1]);
    }

    // Store the new selections for the color range
    newSelections['colorStart'] = values[0];
    newSelections['colorEnd'] = values[1];

    // Build query params and fetch products based on the new color range
    const queryParam = newBuildQueryParams();
    console.log(queryParam);

    newFetchProducts(queryParam);
});






    // TIS IS FOR NATURAL DIAMOND

        // Color labels for J to D
    const colorsNatural = ['J', 'I', 'H', 'G', 'F', 'E', 'D'];

    // Create and position color labels
    var colorLabelContainer = document.querySelector('.colorNatural-labels');  // Container for the labels

    colorsNatural.forEach(function(color, index) {
        var label = document.createElement('span');
        label.innerText = color;

        // Calculate position as a percentage relative to the color range
        var position = (index) / (colors.length - 1) * 100;  // Percentage position relative to range
        label.style.left = position + "%";
        label.style.position = 'absolute';
        label.style.transform = 'translateX(-50%)';  // Center the label horizontally
        label.style.fontSize = '12px';  // Optional: Adjust the font size

        colorLabelContainer.appendChild(label);
    });

    // Initialize the color range slider
    const colorSliderNatural = document.getElementById('colorRangeNatural');

    noUiSlider.create(colorSliderNatural, {
        start: [5, 7], // Start from F to D (indexing the colors as 5 (F) to 7 (D))
        connect: true,
        range: {
            'min': 1,  // J (index 1)
            'max': 7   // D (index 7)
        },
        step: 1, // Ensure the slider only moves between specific color labels (whole numbers)
        tooltips: [true, true],
        format: {
            to: function(value) {
                // Display the color label based on slider value
                return colorsNatural[Math.round(value) - 1]; // Convert slider index to color label
            },
            from: function(value) {
                return Number(value);
            }
        }
    });

    // Selecting the necessary elements for the color slider
    var startColor = document.getElementById('startColorNatural');
    var endColor = document.getElementById('endColorNatural');
    // var colorStartLabel = document.getElementById('color-start');
    // var colorEndLabel = document.getElementById('color-end');

    // Add event listener to update color labels and hidden inputs when slider value changes
    colorSliderNatural.noUiSlider.on('change', function(values, handle) {
        if (handle === 0) {
            // Update start color label and hidden input
            // colorStartLabel.innerHTML = values[0];
            startColor.value = values[0];
            startColor.setAttribute('data-id', values[0]);
        } else {
            // Update end color label and hidden input
            // colorEndLabel.innerHTML = values[1];
            endColor.value = values[1];
            endColor.setAttribute('data-id', values[1]);
        }

        // Store the new selections for the color range
        newSelections['colorStart'] = values[0];
        newSelections['colorEnd'] = values[1];

        // Build query params and fetch products based on the new color range
        const queryParam = newBuildQueryParams();
        console.log(queryParam);

        newFetchProducts(queryParam);
    });


      // THIS IS FOR CUT RANGE GIVE

       // Cut quality labels from '3EX' to 'Ideal'
const cutQualities = ['3EX', 'EX-', 'VG+', 'VG-', 'Excellent', 'Ideal'];

// Create and position cut labels
var cutLabelContainer = document.querySelector('.cut-labels');  // Container for the cut labels

cutQualities.forEach(function(cut, index) {
    var label = document.createElement('span');
    label.innerText = cut;

    // Calculate position as a percentage relative to the cut quality range
    var position = (index) / (cutQualities.length - 1) * 100;  // Percentage position relative to range
    label.style.left = position + "%";
    label.style.position = 'absolute';
    label.style.transform = 'translateX(-50%)';  // Center the label horizontally
    label.style.fontSize = '12px';  // Optional: Adjust the font size

    cutLabelContainer.appendChild(label);
});

// Initialize the cut range slider
const cutSlider = document.getElementById('cutRange');

noUiSlider.create(cutSlider, {
    start: [5, 6], // Start from 'Excellent' (index 5) to 'Ideal' (index 6)
    connect: true,
    range: {
        'min': 1,  // '3EX' (index 1)
        'max': 6   // 'Ideal' (index 6)
    },
    step: 1, // Ensure the slider only moves between specific cut grades (whole numbers)
    tooltips: [true, true],
    format: {
        to: function(value) {
            return cutQualities[Math.round(value) - 1]; // Display the cut grade based on the slider value
        },
        from: function(value) {
            return Number(value);
        }
    }
});

// Selecting the necessary elements for the cut slider
var startCut = document.getElementById('startCut');
var endCut = document.getElementById('endCut');
// var cutStartLabel = document.getElementById('cut-start');
// var cutEndLabel = document.getElementById('cut-end');

// Add event listener to update cut labels and hidden inputs when slider value changes
cutSlider.noUiSlider.on('change', function(values, handle) {
    if (handle === 0) {
        // Update start cut label and hidden input
        // cutStartLabel.innerHTML = values[0];
        startCut.value = values[0];
        startCut.setAttribute('data-id', values[0]);
    } else {
        // Update end cut label and hidden input
        // cutEndLabel.innerHTML = values[1];
        endCut.value = values[1];
        endCut.setAttribute('data-id', values[1]);
    }

    if(values[0] === 'VG+'){
        values[0] = 'VG%2B'
    }

    if(values[1] === 'VG+'){
        values[1] = 'VG%2B'
    }
    // Store the new selections for cut range
    newSelections['cutStart'] = values[0];
    newSelections['cutEnd'] = values[1];

    // Build query params and fetch products based on the new cut range
    const queryParam = newBuildQueryParams();
    console.log(queryParam);

    newFetchProducts(queryParam);
});

              

    //  THIS IS FOR NATURAL CUT

        
        // Cut quality labels from '3EX' to 'Ideal'
    const cutQualitiesNatural = ['3EX', 'EX-', 'VG+', 'VG-', 'Excellent', 'Ideal'];

    // Create and position cut labels
    var cutLabelContainer = document.querySelector('.cutNatural-labels');  // Container for the cut labels

    cutQualitiesNatural.forEach(function(cut, index) {
        var label = document.createElement('span');
        label.innerText = cut;

        // Calculate position as a percentage relative to the cut quality range
        var position = (index) / (cutQualitiesNatural.length - 1) * 100;  // Percentage position relative to range
        label.style.left = position + "%";
        label.style.position = 'absolute';
        label.style.transform = 'translateX(-50%)';  // Center the label horizontally
        label.style.fontSize = '12px';  // Optional: Adjust the font size

        cutLabelContainer.appendChild(label);
    });

    // Initialize the cut range slider
    const cutSliderNatural = document.getElementById('cutRangeNatural');

    noUiSlider.create(cutSliderNatural, {
        start: [5, 6], // Start from 'Excellent' (index 5) to 'Ideal' (index 6)
        connect: true,
        range: {
            'min': 1,  // '3EX' (index 1)
            'max': 6   // 'Ideal' (index 6)
        },
        step: 1, // Ensure the slider only moves between specific cut grades (whole numbers)
        tooltips: [true, true],
        format: {
            to: function(value) {
                return cutQualitiesNatural[Math.round(value) - 1]; // Display the cut grade based on the slider value
            },
            from: function(value) {
                return Number(value);
            }
        }
    });

    // Selecting the necessary elements for the cut slider
    var startCut = document.getElementById('startCutNatural');
    var endCut = document.getElementById('endCutNatural');
    // var cutStartLabel = document.getElementById('cut-start');
    // var cutEndLabel = document.getElementById('cut-end');

    // Add event listener to update cut labels and hidden inputs when slider value changes
    cutSliderNatural.noUiSlider.on('change', function(values, handle) {
        if (handle === 0) {
            // Update start cut label and hidden input
            // cutStartLabel.innerHTML = values[0];
            startCut.value = values[0];
            startCut.setAttribute('data-id', values[0]);
        } else {
            // Update end cut label and hidden input
            // cutEndLabel.innerHTML = values[1];
            endCut.value = values[1];
            endCut.setAttribute('data-id', values[1]);
        }

        // Store the new selections for cut range
        newSelections['cutStart'] = values[0];
        newSelections['cutEnd'] = values[1];

        // Build query params and fetch products based on the new cut range
        const queryParam = newBuildQueryParams();
        console.log(queryParam);

        newFetchProducts(queryParam);
    });

              
              
              


          
      // THIS ONE IS FOR RANGE OF CLARITY 
// Clarity grades from 'I1' to 'FL'
const clarityGrades = ['I1', 'SI2', 'SI1', 'VS2', 'VS1', 'VVS2', 'VVS1', 'IF', 'FL'];

// Create and position clarity labels
var clarityLabelContainer = document.querySelector('.clarity-labels');  // Container for the labels

clarityGrades.forEach(function(clarity, index) {
    var label = document.createElement('span');
    label.innerText = clarity;

    // Calculate position as a percentage relative to the clarity range
    var position = (index) / (clarityGrades.length - 1) * 100;  // Percentage position relative to range
    label.style.left = position + "%";
    label.style.position = 'absolute';
    label.style.transform = 'translateX(-50%)';  // Center the label horizontally
    label.style.fontSize = '12px';  // Optional: Adjust the font size
    label.style.fontWeight = 'bold';
    clarityLabelContainer.appendChild(label);
});

// Initialize the clarity range slider
const claritySlider = document.getElementById('clarityRange');

noUiSlider.create(claritySlider, {
    start: [4, 8], // Start from 'VS1' to 'FL' (indexing the clarity grades from 4 to 8)
    connect: true,
    range: {
        'min': 0,  // 'I1' (index 0)
        'max': 8   // 'FL' (index 8)
    },
    step: 1, // Ensure the slider only moves between specific clarity grades (whole numbers)
    tooltips: [true, true],
    format: {
        to: function(value) {
            return clarityGrades[Math.round(value)]; // Display the clarity grade based on the slider value
        },
        from: function(value) {
            return Number(value);
        }
    }
});

// Selecting the necessary elements for the clarity slider
var startClarity = document.getElementById('startClarity');
var endClarity = document.getElementById('endClarity');
var clarityStartLabel = document.getElementById('clarity-start');
var clarityEndLabel = document.getElementById('clarity-end');

// Add event listener to update clarity labels and hidden inputs when slider value changes
claritySlider.noUiSlider.on('change', function(values, handle) {
    if (handle === 0) {
        // Update start clarity label and hidden input
        // clarityStartLabel.innerHTML = values[0];
        startClarity.value = values[0];
        startClarity.setAttribute('data-id', values[0]);
    } else {
        // Update end clarity label and hidden input
        // clarityEndLabel.innerHTML = values[1];
        endClarity.value = values[1];
        endClarity.setAttribute('data-id', values[1]);
    }

    // Store the new selections for clarity range
    newSelections['clarityStart'] = values[0];
    newSelections['clarityEnd'] = values[1];

    // Build query params and fetch products based on the new clarity range
    const queryParam = newBuildQueryParams();
    console.log(queryParam);

    newFetchProducts(queryParam);
});



    
    

    

          
      // THIS ONE IS FOR RANGE OF CLARITY 
        // Clarity grades from 'I1' to 'FL'
        const clarityGradesColoured = ['I1', 'SI2', 'SI1', 'VS2', 'VS1', 'VVS2', 'VVS1', 'IF', 'FL'];

        // Create and position clarity labels
        var clarityLabelContainerColoured = document.querySelector('.clarityColoured-labels');  // Container for the labels

        clarityGradesColoured.forEach(function(clarity, index) {
            var label = document.createElement('span');
            label.innerText = clarity;

            // Calculate position as a percentage relative to the clarity range
            var position = (index) / (clarityGradesColoured.length - 1) * 100;  // Percentage position relative to range
            label.style.left = position + "%";
            label.style.position = 'absolute';
            label.style.transform = 'translateX(-50%)';  // Center the label horizontally
            label.style.fontSize = '12px';  // Optional: Adjust the font size

            clarityLabelContainerColoured.appendChild(label);
        });

        // Initialize the clarity range slider
        const claritySliderColoured = document.getElementById('clarityRangeColoured');

        noUiSlider.create(claritySliderColoured, {
            start: [4, 8], // Start from 'VS1' to 'FL' (indexing the clarity grades from 4 to 8)
            connect: true,
            range: {
                'min': 0,  // 'I1' (index 0)
                'max': 8   // 'FL' (index 8)
            },
            step: 1, // Ensure the slider only moves between specific clarity grades (whole numbers)
            tooltips: [true, true],
            format: {
                to: function(value) {
                    return clarityGradesColoured[Math.round(value)]; // Display the clarity grade based on the slider value
                },
                from: function(value) {
                    return Number(value);
                }
            }
        });

        // Selecting the necessary elements for the clarity slider
        var startClarityColoured = document.getElementById('startClarityColoured');
        var endClarityColoured = document.getElementById('endClarityColoured');
        // var clarityStartLabel = document.getElementById('clarity-start');
        // var clarityEndLabel = document.getElementById('clarity-end');

        // Add event listener to update clarity labels and hidden inputs when slider value changes
        claritySliderColoured.noUiSlider.on('change', function(values, handle) {
            if (handle === 0) {
                // Update start clarity label and hidden input
                // clarityStartLabel.innerHTML = values[0];
                startClarity.value = values[0];
                startClarity.setAttribute('data-id', values[0]);
            } else {
                // Update end clarity label and hidden input
                // clarityEndLabel.innerHTML = values[1];
                endClarity.value = values[1];
                endClarity.setAttribute('data-id', values[1]);
            }

            // Store the new selections for clarity range
            newSelections['clarityStart'] = values[0];
            newSelections['clarityEnd'] = values[1];

            // Build query params and fetch products based on the new clarity range
            const queryParam = newBuildQueryParams();
            console.log(queryParam);

            newFetchProducts(queryParam);
    });



    // THIS IS FOR NAUTURAL DIAMODN CLARITY

    // Clarity grades from 'I1' to 'FL'
    const clarityGradesNatural= ['I1', 'SI2', 'SI1', 'VS2', 'VS1', 'VVS2', 'VVS1', 'IF', 'FL'];

    // Create and position clarity labels
    var clarityLabelContainerNatural = document.querySelector('.clarityNatural-labels');  // Container for the labels

    clarityGradesNatural.forEach(function(clarity, index) {
        var label = document.createElement('span');
        label.innerText = clarity;

        // Calculate position as a percentage relative to the clarity range
        var position = (index) / (clarityGradesNatural.length - 1) * 100;  // Percentage position relative to range
        label.style.left = position + "%";
        label.style.position = 'absolute';
        label.style.transform = 'translateX(-50%)';  // Center the label horizontally
        label.style.fontSize = '12px';  // Optional: Adjust the font size

        clarityLabelContainerNatural.appendChild(label);
    });

    // Initialize the clarity range slider
    const claritySliderNatural = document.getElementById('clarityRangeNatural');

    noUiSlider.create(claritySliderNatural, {
        start: [4, 8], // Start from 'VS1' to 'FL' (indexing the clarity grades from 4 to 8)
        connect: true,
        range: {
            'min': 0,  // 'I1' (index 0)
            'max': 8   // 'FL' (index 8)
        },
        step: 1, // Ensure the slider only moves between specific clarity grades (whole numbers)
        tooltips: [true, true],
        format: {
            to: function(value) {
                return clarityGradesNatural[Math.round(value)]; // Display the clarity grade based on the slider value
            },
            from: function(value) {
                return Number(value);
            }
        }
    });

    // Selecting the necessary elements for the clarity slider
    var startClarityNatural = document.getElementById('startClarityNatural');
    var endClarityNatural = document.getElementById('endClarityNatural');
    // var clarityStartLabel = document.getElementById('clarity-start');
    // var clarityEndLabel = document.getElementById('clarity-end');

    // Add event listener to update clarity labels and hidden inputs when slider value changes
    claritySliderNatural.noUiSlider.on('change', function(values, handle) {
        if (handle === 0) {
            // Update start clarity label and hidden input
            // clarityStartLabel.innerHTML = values[0];
            startClarity.value = values[0];
            startClarity.setAttribute('data-id', values[0]);
        } else {
            // Update end clarity label and hidden input
            // clarityEndLabel.innerHTML = values[1];
            endClarity.value = values[1];
            endClarity.setAttribute('data-id', values[1]);
        }

        // Store the new selections for clarity range
        newSelections['clarityStart'] = values[0];
        newSelections['clarityEnd'] = values[1];

        // Build query params and fetch products based on the new clarity range
        const queryParam = newBuildQueryParams();
        console.log(queryParam);

        newFetchProducts(queryParam);
});

    

                          

            // Initialize depth range slider
    const depthSlider = document.getElementById('depthRange');

    noUiSlider.create(depthSlider, {
        start: [50, 90], // Start from 50% to 90%
        connect: true,
        range: {
            'min': 40,  // Minimum depth (40%)
            'max': 90   // Maximum depth (90%)
        },
        step: 1, // Ensure the slider only moves in whole numbers
        tooltips: [true, true],
        format: {
            to: function(value) {
                return value.toFixed(0) + '%'; // Display the value as a percentage (no decimals)
            },
            from: function(value) {
                return Number(value.replace('%', '')); // Parse the value, removing the '%' sign
            }
        }
    });

    // Selecting the necessary elements for the depth slider
    var startDepth = document.getElementById('startDepth');
    var endDepth = document.getElementById('endDepth');
    var depthStartLabel = document.getElementById('depth-start');
    var depthEndLabel = document.getElementById('depth-end');

    // Add 'update' event listener to the depth slider
    depthSlider.noUiSlider.on('change', function(values, handle) {
        if (handle === 0) {
            // Update start depth label and hidden input
            // depthStartLabel.innerHTML = values[0];
            startDepth.value = values[0];
            startDepth.setAttribute('data-id', values[0]); // Update data-id
        } else {
            // Update end depth label and hidden input
            // depthEndLabel.innerHTML = values[1];
            endDepth.value = values[1];
            endDepth.setAttribute('data-id', values[1]); // Update data-id
        }

        // Store the new selections for depth range in the newSelections object
        newSelections['depthStart'] = values[0];
        newSelections['depthEnd'] = values[1];

        console.log(newSelections);

        const queryParam = newBuildQueryParams(); // Build query params dynamically
        console.log(queryParam);

        // Fetch products based on the new depth range selection
        newFetchProducts(queryParam);
    });


    // THIS IS FOR NATURAL DEPTH

       // Initialize depth range slider
       const depthSliderNatural = document.getElementById('depthRangeNatural');

       noUiSlider.create(depthSliderNatural, {
           start: [50, 90], // Start from 50% to 90%
           connect: true,
           range: {
               'min': 40,  // Minimum depth (40%)
               'max': 90   // Maximum depth (90%)
           },
           step: 1, // Ensure the slider only moves in whole numbers
           tooltips: [true, true],
           format: {
               to: function(value) {
                   return value.toFixed(0) + '%'; // Display the value as a percentage (no decimals)
               },
               from: function(value) {
                   return Number(value.replace('%', '')); // Parse the value, removing the '%' sign
               }
           }
       });
   
       // Selecting the necessary elements for the depth slider
       var startDepth = document.getElementById('startDepthNatural');
       var endDepth = document.getElementById('endDepthNatural');
    //    var depthStartLabel = document.getElementById('depth-start');
    //    var depthEndLabel = document.getElementById('depth-end');
   
       // Add 'update' event listener to the depth slider
       depthSliderNatural.noUiSlider.on('change', function(values, handle) {
           if (handle === 0) {
               // Update start depth label and hidden input
            //    depthStartLabel.innerHTML = values[0];
               startDepth.value = values[0];
               startDepth.setAttribute('data-id', values[0]); // Update data-id
           } else {
               // Update end depth label and hidden input
            //    depthEndLabel.innerHTML = values[1];
               endDepth.value = values[1];
               endDepth.setAttribute('data-id', values[1]); // Update data-id
           }
   
           // Store the new selections for depth range in the newSelections object
           newSelections['depthStart'] = values[0];
           newSelections['depthEnd'] = values[1];
   
           console.log(newSelections);
   
           const queryParam = newBuildQueryParams(); // Build query params dynamically
           console.log(queryParam);
   
           // Fetch products based on the new depth range selection
           newFetchProducts(queryParam);
       });
   

    

// Create and position depth labels dynamically along the slider
const depthLabelContainer = document.querySelector('.depth-labels');

// Define an array of labels for depth percentage (40% to 90%)
for (let i = 40; i <= 90; i += 10) {
    const label = document.createElement('span');
    label.innerText = i + '%';

    // Calculate position relative to depth range
    const position = ((i - 40) / (90 - 40)) * 100;  // Position as percentage
    label.style.left = position + "%";
    label.style.position = 'absolute';
    label.style.transform = 'translateX(-50%)';
    label.style.fontSize = '12px';  // Adjust font size if needed

    depthLabelContainer.appendChild(label);
}

// Create and position depth labels dynamically along the slider
const depthLabelContainerNatural = document.querySelector('.depthNatural-labels');

// Define an array of labels for depth percentage (40% to 90%)
for (let i = 40; i <= 90; i += 10) {
    const label = document.createElement('span');
    label.innerText = i + '%';

    // Calculate position relative to depth range
    const position = ((i - 40) / (90 - 40)) * 100;  // Position as percentage
    label.style.left = position + "%";
    label.style.position = 'absolute';
    label.style.transform = 'translateX(-50%)';
    label.style.fontSize = '12px';  // Adjust font size if needed

    depthLabelContainerNatural.appendChild(label);
}






    // Initialize table range slider
    const tableSlider = document.getElementById('tableRange');

    noUiSlider.create(tableSlider, {
        start: [50, 90], // Start from 50% to 90%
        connect: true,
        range: {
            'min': 50,  // Minimum table (50%)
            'max': 90   // Maximum table (90%)
        },
        step: 1, // Ensure the slider only moves in whole numbers
        tooltips: [true, true],
        format: {
            to: function(value) {
                return value.toFixed(0) + '%'; // Display the value as a percentage (no decimals)
            },
            from: function(value) {
                return Number(value.replace('%', '')); // Parse the value, removing the '%' sign
            }
        }
    });

    // Selecting the necessary elements for the table slider
    var startTable = document.getElementById('startTable');
    var endTable = document.getElementById('endTable');
    // var tableStartLabel = document.getElementById('table-start');
    // var tableEndLabel = document.getElementById('table-end');

    // Add 'update' event listener to the table slider
    tableSlider.noUiSlider.on('change', function(values, handle) {
        if (handle === 0) {
            // Update start table label and hidden input
            // tableStartLabel.innerHTML = values[0];
            startTable.value = values[0];
            startTable.setAttribute('data-id', values[0]); // Update data-id
        } else {
            // Update end table label and hidden input
            // tableEndLabel.innerHTML = values[1];
            endTable.value = values[1];
            endTable.setAttribute('data-id', values[1]); // Update data-id
        }

        // Store the new selections for table range in the newSelections object
        newSelections['tableStart'] = values[0];
        newSelections['tableEnd'] = values[1];

        console.log(newSelections);

        const queryParam = newBuildQueryParams(); // Build query params dynamically
        console.log(queryParam);

        // Fetch products based on the new table range selection
        newFetchProducts(queryParam);
    });

    // Create and position table labels dynamically along the slider
    const tableLabelContainer = document.querySelector('.table-labels');

    // Define an array of labels for table percentage (50% to 90%)
    for (let i = 50; i <= 90; i += 10) {
        const label = document.createElement('span');
        label.innerText = i + '%';

        // Calculate position relative to table range
        const position = ((i - 50) / (90 - 50)) * 100;  // Position as percentage
        label.style.left = position + "%";
        label.style.position = 'absolute';
        label.style.transform = 'translateX(-50%)';
        label.style.fontSize = '12px';  // Adjust font size if needed

        tableLabelContainer.appendChild(label);
    }



    //  THIS IS FOR THE NATURAL TABLE


    


    // Initialize table range slider
    const tableSliderNatural = document.getElementById('tableRangeNatural');

    noUiSlider.create(tableSliderNatural, {
        start: [50, 90], // Start from 50% to 90%
        connect: true,
        range: {
            'min': 50,  // Minimum table (50%)
            'max': 90   // Maximum table (90%)
        },
        step: 1, // Ensure the slider only moves in whole numbers
        tooltips: [true, true],
        format: {
            to: function(value) {
                return value.toFixed(0) + '%'; // Display the value as a percentage (no decimals)
            },
            from: function(value) {
                return Number(value.replace('%', '')); // Parse the value, removing the '%' sign
            }
        }
    });

    // Selecting the necessary elements for the table slider
    var startTable = document.getElementById('startTableNatural');
    var endTable = document.getElementById('endTableNatural');
    // var tableStartLabel = document.getElementById('table-start');
    // var tableEndLabel = document.getElementById('table-end');

    // Add 'update' event listener to the table slider
    tableSlider.noUiSlider.on('change', function(values, handle) {
        if (handle === 0) {
            // Update start table label and hidden input
            // tableStartLabel.innerHTML = values[0];
            startTable.value = values[0];
            startTable.setAttribute('data-id', values[0]); // Update data-id
        } else {
            // Update end table label and hidden input
            // tableEndLabel.innerHTML = values[1];
            endTable.value = values[1];
            endTable.setAttribute('data-id', values[1]); // Update data-id
        }

        // Store the new selections for table range in the newSelections object
        newSelections['tableStart'] = values[0];
        newSelections['tableEnd'] = values[1];

        console.log(newSelections);

        const queryParam = newBuildQueryParams(); // Build query params dynamically
        console.log(queryParam);

        // Fetch products based on the new table range selection
        newFetchProducts(queryParam);
    });

    // Create and position table labels dynamically along the slider
    const tableLabelContainerNatural = document.querySelector('.tableNatural-labels');

    // Define an array of labels for table percentage (50% to 90%)
    for (let i = 50; i <= 90; i += 10) {
        const label = document.createElement('span');
        label.innerText = i + '%';

        // Calculate position relative to table range
        const position = ((i - 50) / (90 - 50)) * 100;  // Position as percentage
        label.style.left = position + "%";
        label.style.position = 'absolute';
        label.style.transform = 'translateX(-50%)';
        label.style.fontSize = '12px';  // Adjust font size if needed

        tableLabelContainerNatural.appendChild(label);
    }





    // Initialize length/width ratio slider
    const lwSlider = document.getElementById('lengthWidthRange');

    noUiSlider.create(lwSlider, {
        start: [1.00, 2.20], // Start from 1.00 to 2.20
        connect: true,
        range: {
            'min': 1.00,  // Minimum ratio
            'max': 2.20   // Maximum ratio
        },
        step: 0.01, // Allow moving in 0.01 increments
        tooltips: [true, true],
        format: {
            to: function(value) {
                return value.toFixed(2); // Display the value with two decimal places
            },
            from: function(value) {
                return parseFloat(value); // Parse the value to a float
            }
        }
    });

    // Selecting the necessary elements for the length/width ratio slider
    var startLWRatio = document.getElementById('startLWRatio');
    var endLWRatio = document.getElementById('endLWRatio');
    // var lwStartLabel = document.getElementById('lw-start');
    // var lwEndLabel = document.getElementById('lw-end');

    // Add 'update' event listener to the length/width ratio slider
    lwSlider.noUiSlider.on('change', function(values, handle) {
        if (handle === 0) {
            // Update start length/width ratio label and hidden input
            // lwStartLabel.innerHTML = values[0];
            startLWRatio.value = values[0];
            startLWRatio.setAttribute('data-id', values[0]); // Update data-id
        } else {
            // Update end length/width ratio label and hidden input
            // lwEndLabel.innerHTML = values[1];
            endLWRatio.value = values[1];
            endLWRatio.setAttribute('data-id', values[1]); // Update data-id
        }

        // Store the new selections for length/width ratio in the newSelections object
        newSelections['lengthWidthStart'] = values[0];
        newSelections['lengthWidthEnd'] = values[1];

        console.log(newSelections);

        const queryParam = newBuildQueryParams(); // Build query params dynamically
        console.log(queryParam);

        // Fetch products based on the new length/width ratio selection
        newFetchProducts(queryParam);
    });

    // Create and position length/width labels dynamically along the slider
    const lwLabelContainer = document.querySelector('.length-width-labels');

    // Define an array of labels for length/width ratio (1.00 to 2.20)
    for (let i = 1.00; i <= 2.20; i += 0.20) {
        const label = document.createElement('span');
        label.innerText = i.toFixed(2);

        // Calculate position relative to the length/width ratio range
        const position = ((i - 1.00) / (2.20 - 1.00)) * 100;  // Position as percentage
        label.style.left = position + "%";
        label.style.position = 'absolute';
        label.style.transform = 'translateX(-50%)';
        label.style.fontSize = '12px';  // Adjust font size if needed

        lwLabelContainer.appendChild(label);
    }



    // THIS IS FOR HTE NATURAL DIAMOND


    

    // Initialize length/width ratio slider
    const lwSliderNatural = document.getElementById('lengthWidthRangeNatural');

    noUiSlider.create(lwSliderNatural, {
        start: [1.00, 2.20], // Start from 1.00 to 2.20
        connect: true,
        range: {
            'min': 1.00,  // Minimum ratio
            'max': 2.20   // Maximum ratio
        },
        step: 0.01, // Allow moving in 0.01 increments
        tooltips: [true, true],
        format: {
            to: function(value) {
                return value.toFixed(2); // Display the value with two decimal places
            },
            from: function(value) {
                return parseFloat(value); // Parse the value to a float
            }
        }
    });

    // Selecting the necessary elements for the length/width ratio slider
    var startLWRatio = document.getElementById('startLWRatioNatural');
    var endLWRatio = document.getElementById('endLWRatioNatural');
    // var lwStartLabel = document.getElementById('lw-start');
    // var lwEndLabel = document.getElementById('lw-end');

    // Add 'update' event listener to the length/width ratio slider
    lwSliderNatural.noUiSlider.on('change', function(values, handle) {
        if (handle === 0) {
            // Update start length/width ratio label and hidden input
            // lwStartLabel.innerHTML = values[0];
            startLWRatio.value = values[0];
            startLWRatio.setAttribute('data-id', values[0]); // Update data-id
        } else {
            // Update end length/width ratio label and hidden input
            // lwEndLabel.innerHTML = values[1];
            endLWRatio.value = values[1];
            endLWRatio.setAttribute('data-id', values[1]); // Update data-id
        }

        // Store the new selections for length/width ratio in the newSelections object
        newSelections['lengthWidthStart'] = values[0];
        newSelections['lengthWidthEnd'] = values[1];

        console.log(newSelections);

        const queryParam = newBuildQueryParams(); // Build query params dynamically
        console.log(queryParam);

        // Fetch products based on the new length/width ratio selection
        newFetchProducts(queryParam);
    });

    // Create and position length/width labels dynamically along the slider
    const lwLabelContainerNatural = document.querySelector('.length-widthNatural-labels');

    // Define an array of labels for length/width ratio (1.00 to 2.20)
    for (let i = 1.00; i <= 2.20; i += 0.20) {
        const label = document.createElement('span');
        label.innerText = i.toFixed(2);

        // Calculate position relative to the length/width ratio range
        const position = ((i - 1.00) / (2.20 - 1.00)) * 100;  // Position as percentage
        label.style.left = position + "%";
        label.style.position = 'absolute';
        label.style.transform = 'translateX(-50%)';
        label.style.fontSize = '12px';  // Adjust font size if needed

        lwLabelContainerNatural.appendChild(label);
    }

